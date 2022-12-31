<?php
if (!function_exists('seCodePath')) {
    /**
     * Get the configuration path.
     *
     * @param string $path
     * @return string
     */
    function seCodePath($path = '')
    {
        return app()->seCodePath($path);
    }
}
if (!function_exists('environmentId')) {
    /**
     * Get the environment id
     *
     * @return string
     */
    function environmentId()
    {
        return app()->environmentId();
    }
}

if (!function_exists('appUrl')) {
    /**
     * Get the app url
     *
     * @return string
     */
    function appUrl()
    {
        return app()->appUrl();
    }
}

if (!function_exists('testsPath')) {
    /**
     * Get the app url
     *
     * @return string
     */
    function testsPath(string $testPath): string
    {
        return app()->testsPath($testPath);
    }
}

