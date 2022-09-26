<?php 

namespace VanillaPHP\Helpers;

class View
{
    /**
     * Views directory path
     *
     * @var string
     */
    private static $path = __DIR__.'/../../../pages';

    /**
     * Render a view
     *
     * @param string $view
     * @param array $parameters
     * @return mixed
     */
    public static function render($view, $parameters = array(), $isErrorPage = false)
    {
        return self::getContents(self::$path.'/'.$view.'/index.php', $parameters, $isErrorPage);
    }

    /**
     * Get contents of the view
     *
     * @param string $file
     * @param array $parameters
     * @return mixed
     */
    public static function getContents($file, $parameters = array(), $isErrorPage) 
    {
        extract($parameters, EXTR_SKIP);
        unset($parameters);

        if ($isErrorPage)
        {
            require __DIR__."/../Bean.php";
            require $file;
            unset($file);
            return true;
        }
        
        ob_start();
        require __DIR__."/../Bean.php";
        require $file;
        unset($file);
        return ob_get_clean();
    }
}