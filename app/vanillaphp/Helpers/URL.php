<?php

namespace VanillaPHP\Helpers;

/**
 * ==============================
 *  URL Routes
 * ==============================
 *      Page slugs for use in
 *      page navigation
 * 
 */

class URL 
{
    /**
     * @var array
     */
    private static array $slugs = [];

    private static $instance;

    /**
     * @return bool
     */
    public static function initSlugs()
    {
        self::$slugs = json_decode(file_get_contents(__DIR__.'/../../PageDirectory.json'), true);
        return true;
    }

    public static function urlInstance()
    {
        if (!isset(self::$instance))
        {
            $class = __CLASS__;
            self::$instance = new $class();
            self::$instance->initSlugs();
        }
        return self::$instance;
    }

    /**
     * @return array
     */
    public static function getSlugs()
    {
        return self::$slugs;
    }

    /**
     * @param string $pageName
     * 
     * @return string
     */
    public static function getSlug(string $pageName)
    {
        return self::$slugs[$pageName] ?? null;
    }
} 