<?php

/**
 * CodeMommy CacheDream
 * @author Candison November <www.kandisheng.com>
 */

namespace Model;

use CodeMommy\WebPHP\Model;
use CodeMommy\CachePHP\Cache;

/**
 * Class AllowDomain
 * @package Model
 */
class AllowDomain extends Model
{
    const CACHE_TIMEOUT = 60;

    /**
     * @var string
     */
    protected $table = 'allow_domain';

    /**
     * Is Allow
     *
     * @param string $domain
     *
     * @return bool $result
     */
    public static function isAllow($domain)
    {
        $domain = strtolower($domain);
        $cacheKey = sprintf('DomainCount:%s', $domain);
        if (Cache::isExist($cacheKey)) {
            return Cache::readValue($cacheKey, null);
        }
        $count = self::where('domain', '=', $domain)
            ->count();
        $result = $count > 0 ? true : false;
        Cache::writeValue($cacheKey, $result, self::CACHE_TIMEOUT);
        return $result;
    }
}