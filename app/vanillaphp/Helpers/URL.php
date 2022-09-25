<?php

/**
 * ==============================
 *  URL Routes
 * ==============================
 *      Page slugs for use in
 *      page navigation
 * 
 */

/**
 * Class URL
 */
class URL 
{
    /**
     * @var array
     */
    private static array $slugs = [];

    /**
     * @return bool
     */
    public static function initSlugs()
    {
        self::$slugs = json_decode(file_get_contents(dirname(__DIR__).'/pages.json'), true);
        return true;
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