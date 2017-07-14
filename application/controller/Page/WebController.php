<?php

/**
 * CodeMommy CacheDream
 * @author Candison November <www.kandisheng.com>
 */

namespace Controller\Page;

use CodeMommy\ConfigPHP\Config;
use CodeMommy\RequestPHP\Request;
use Base\ViewController;

/**
 * Class WebController
 * @package Controller\Page
 */
class WebController extends ViewController
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 删除路径两边的斜杠
     *
     * @param string $string
     *
     * @return string $string
     */
    private function removePathSlash($string)
    {
        // 去掉第一个斜杠
        if (substr($string, 0, 1) == '/') {
            $string = substr($string, 1);
        }
        // 去掉最后一个斜杠
        if (substr($string, -1) == '/') {
            $string = substr($string, 0, strlen($string) - 1);
        }
        return $string;
    }

    /**
     * 列出目录里包含的文件
     *
     * @param string $path
     *
     * @return array $list
     */
    private function listFolder($path)
    {
        $list = array();
        if (is_dir($path)) {
            if (substr($path, -1) != '/') {
                $path .= '/';
            }
            $directory = dir($path);
            while ($file = $directory->read()) {
                $list[$path . $file] = $file;
            }
            $directory->close();
        }
        return $list;
    }

    /**
     * 获取文件类型
     *
     * @param $pathFull
     * @param $file
     *
     * @return string
     */
    private function getFileType($pathFull, $file)
    {
        if (in_array($file, Config::get('staticfile.limit'))) {
            return 'hide';
        }
        if (is_dir($pathFull)) {
            return 'folder';
        }
        if (is_file($pathFull)) {
            $type = isset(pathinfo($pathFull)['extension']) ? pathinfo($pathFull)['extension'] : 'file';
            $type = strtolower($type);
            return $type;
        }
        return 'unknown';
    }

    /**
     * @return bool
     */
    public function index()
    {
        // 整理路径
        $path = Request::inputGet('path', '');
        $path = $this->removePathSlash($path);
        $pathLocal = Config::get('staticfile.file_path') . $path;
        // 列举目录里的文件
        $list = array();
        $logo = null;
        $about = null;
        $cdn = Config::get('staticfile.cdn');
        foreach ($this->listFolder($pathLocal) as $pathFull => $file) {
            $array = array();
            $array['pathFull'] = $pathFull;
            $array['file'] = $file;
            $array['type'] = $this->getFileType($pathFull, $file);
            if (empty($path)) {
                $array['link'] = Request::root() . 'web/' . '?path=' . $file;
                $array['cdn'] = $cdn . $file;
            } else {
                $array['link'] = Request::root() . 'web/' . '?path=' . $path . '/' . $file;
                $array['cdn'] = $cdn . $path . '/' . $file;
            }
            $list[strtolower($file)] = $array;
            ksort($list);
            // 读取Logo
            if (strtolower($file) == 'logo.png') {
                $logo = $cdn . $path . '/' . $file;
            }
            // 读取readme.txt
            if (strtolower($file) == 'readme.txt') {
                $about = file_get_contents($pathFull);
            }
        }
        // 面包削
        $crumbs = array();
        $crumbs['Root'] = Request::root() . 'web/';
        if (!empty($path)) {
            $temp = explode('/', $path);
            foreach ($temp as $key => $value) {
                if ($key == 0) {
                    $crumbs[$value] = Request::root() . 'web/' . '?path=' . $value;
                } else {
                    $crumbs[$value] = end($crumbs) . '/' . $value;
                }
            }
        }
        // 输出
        $this->data['list'] = $list;
        $this->data['logo'] = $logo;
        $this->data['about'] = $about;
        $this->data['path'] = $path;
        $this->data['crumbs'] = $crumbs;
        $this->data['keyword'] = str_replace('/', ',', $path);
        $this->data['word'] = str_replace('/', ' ', $path);
        $this->data['title'] = $this->data['word'];
        if (empty($this->data['title'])) {
            $this->data['title'] = 'Web Static File';
        } else {
            $this->data['title'] .= ' - Web Static File';
        }
        $this->data['isSearch'] = true;
        return $this->render('home/web');
    }
}