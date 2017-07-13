<?php

/**
 * CodeMommy CacheDream
 * @author Candison November <www.kandisheng.com>
 */

namespace Controller\Tool;

use CodeMommy\WebPHP\Controller;
use CodeMommy\CachePHP\Cache;
use CodeMommy\RequestPHP\Request;
use MatthiasMullie\Minify;
use Model\AllowDomain;

/**
 * Class CacheController
 * @package Controller\Tool
 */
class CacheController extends Controller
{
    const DEFAULT_CONTENT      = '';
    const DEFAULT_CONTENT_TYPE = '';
    const CACHE_TIMEOUT        = 3600 * 24 * 365;

    private $outputContentType = null;
    private $outputContent     = null;

    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->outputContentType = self::DEFAULT_CONTENT_TYPE;
        $this->outputContent = self::DEFAULT_CONTENT;
        return;
    }

    /**
     * Show Information
     *
     * @param int $status
     * @param string $message
     * @param mixed $data
     *
     * @return bool
     */
    private function information($status = 0, $message = '', $data = null)
    {
        $return = array();
        $return['status'] = $status;
        $return['message'] = $message;
        $return['data'] = $data;
        $this->outputContentType = 'application/json';
        $this->outputContent = json_encode($return);
        header('HTTP/1.1 404 Not Found');
        header('Status: 404 Not Found');
        return true;
    }

    /**
     * Get File
     *
     * @param string $file
     *
     * @return array|null
     */
    private function getFile($file)
    {
        $return = array();
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $file);
        curl_setopt($curl, CURLOPT_HEADER, true);
        curl_setopt($curl, CURLOPT_NOBODY, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 120);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // Not verified SSL certificate
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); // Not verified SSL certificate
        $result = curl_exec($curl);
        if (curl_errno($curl)) {
            return null;
        }
        $information = curl_getinfo($curl);
        $headerSize = isset($information['header_size']) ? $information['header_size'] : 0;
        $return['information'] = $information;
        $return['header'] = substr($result, 0, $headerSize);
        $return['content'] = substr($result, $headerSize);
        curl_close($curl);
        return $return;
    }

    /**
     * Merge URL
     *
     * @param string $url
     * @param string $file
     *
     * @return string $url
     */
    private function mergeURL($url, $file)
    {
        $informationURL = parse_url($file);
        if (isset($informationURL['scheme'])) {
            $fileNew = $file;
        } else if (substr($file, 0, 1) == '/') {
            $information = parse_url($url);
            $fileNew = sprintf('%s://%s%s', $information['scheme'], $information['host'], $file);
        } else {
            $urlNew = substr($url, 0, strripos($url, '/'));
            $fileNew = sprintf('%s/%s', $urlNew, $file);
        }
        return $fileNew;
    }

    /**
     * Handle Content
     *
     * @param string $url
     * @param string $content
     * @param string $contentType
     * @param string $version
     *
     * @return mixed|string
     */
    private function handleContent($url, $content, $contentType, $version)
    {
        $contentType = strtolower($contentType);
        // Compress Javascript
        if (strpos($contentType, 'javascript') !== false) {
            $mini = new Minify\JS();
            $mini->add($content);
            $content = $mini->minify();
        }
        // Compress CSS
        if (strpos($contentType, 'css') !== false) {
            $mini = new Minify\CSS();
            $mini->add($content);
            $content = $mini->minify();
        }
        // Merge Javascript
        if (strpos($contentType, 'javascript') !== false) {
            $content = ';' . $content;
        }
        // Replace path in CSS
        if (strpos($contentType, 'css') !== false) {
            $preg = '/url\((.*)\)/sU';
            preg_match_all($preg, $content, $result);
            $fileList = $result[1];
            foreach ($fileList as $file) {
                if (substr(strtolower($file), 0, 5) != 'data:') {
                    $fileNew = $this->mergeURL($url, $file);
                    $fileNew = urlencode($fileNew);
                    if (empty($version)) {
                        $fileNew = sprintf('url(/?f=%s)', $fileNew);
                    } else {
                        $fileNew = sprintf('url(/?v=%s&f=%s)', $version, $fileNew);
                    }
                    $content = str_replace(sprintf('url(%s)', $file), $fileNew, $content);
                }
            }
        }
        return $content;
    }

    /**
     * Output
     * @return bool
     */
    private function output()
    {
        $inputVersion = Request::inputGet('v', '');
        $inputFile = Request::inputGet('f', '');
        // Get From Cache
        $cacheKeyFull = sprintf('CodeMommy.Cache.Files.%s.%s', $inputFile, $inputVersion);
        if (Cache::isExist($cacheKeyFull)) {
            $resultCache = Cache::readValue($cacheKeyFull, null);
            $resultCache = unserialize($resultCache);
            $this->outputContentType = $resultCache[0];
            $this->outputContent = $resultCache[1];
            return true;
        }
        // Get
        $files = explode(';', $inputFile);
        $this->outputContent = '';
        foreach ($files as $file) {
            // 过滤空文件
            if (empty($file)) {
                continue;
            }
            // 判断域名是否允许
            $informationURL = parse_url($file);
            $host = isset($informationURL['host']) ? $informationURL['host'] : '';
            if (!AllowDomain::isAllow($host)) {
                return $this->information(0, sprintf('Host %s is not allowed.', $host), null);
            }
            // 添加版本
            if (!empty($inputVersion)) {
                $file .= sprintf('?v=%s', $inputVersion);
            }
            // Get From Cache
            $cacheKey = sprintf('CodeMommy.Cache.File.%s', $file);
            if (Cache::isExist($cacheKey)) {
                $resultCache = Cache::readValue($cacheKey, null);
                $resultCache = unserialize($resultCache);
                $this->outputContentType = $resultCache[0];
                $this->outputContent .= $resultCache[1];
                continue;
            }
            // 获取内容
            $result = $this->getFile($file);
            if (empty($result)) {
                return $this->information(0, sprintf('Can not get file.', $host), null);
            }
            // 获取头
            $this->outputContentType = isset($result['information']['content_type']) ? $result['information']['content_type'] : self::DEFAULT_CONTENT_TYPE;
            if (!empty($this->outputContentType) && strpos($this->outputContentType, ';') === false) {
                $this->outputContentType .= '; charset=';
            }
            // 处理内容
            $result['content'] = $this->handleContent($file, $result['content'], $this->outputContentType, $inputVersion);
            $this->outputContent .= $result['content'];
            // Set Cache
            $cacheContent = array($this->outputContentType, $result['content']);
            $cacheContent = serialize($cacheContent);
            Cache::writeValue($cacheKey, $cacheContent, self::CACHE_TIMEOUT);
        }
        // Set Cache
        $cacheContent = array($this->outputContentType, $this->outputContent);
        $cacheContent = serialize($cacheContent);
        Cache::writeValue($cacheKeyFull, $cacheContent, self::CACHE_TIMEOUT);
        return true;
    }

    /**
     * Show
     * @return bool
     */
    private function show()
    {
        $this->output();
        header(sprintf('Content-type: %s', $this->outputContentType));
        echo($this->outputContent);
        return true;
    }

    /**
     * @return bool
     */
    public function index()
    {
        $this->show();
        return '';
    }
}