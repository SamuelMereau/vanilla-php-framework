<?php 

namespace VanillaPHP\Helpers;

class View
{
    /**
     * Views directory path
     *
     * @var string
     */
    private static $path = __DIR__.'/../../pages';

    /**
     * Render a view
     *
     * @param string $view
     * @param array $parameters
     * @return mixed
     */
    public static function render($view, $parameters = array())
    {
        $index = json_decode(file_get_contents(self::$path.'/'.$view.'/config.json'), true)[$view];
        return self::getContents($index, $parameters);
    }

    /**
     * Get contents of the view
     *
     * @param string $file
     * @param array $parameters
     * @return mixed
     */
    public static function getContents($file, $parameters = array()) 
    {
        extract($parameters, EXTR_SKIP);
        unset($parameters);

        ob_start();
        require $file;
        unset($file);
        
        return ob_get_clean();
    }
}