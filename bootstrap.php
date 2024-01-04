<?php

if (!function_exists('getConfig')) {
    /**
     * getConfig
     * returns a config setting from .env.yaml
     *
     * @param string $name
     * @param string $default
     * @return $value
     */
    function getConfig($name = '', $default = '') {
        global $wvnderConfig;

        // if no config is loaded, parse the .env.yaml
        if (empty($wvnderConfig)) {
            $wvnderConfig = yaml_parse_file(__DIR__ . '/.env.yaml');
        }

        // if there's no specific variable defined, return whole config array
        if (empty($name)) {
            return $wvnderConfig;
        }

        $keys = explode('.', $name);

        if (empty($keys)) {
            return false;
        }

        $value = $wvnderConfig;
        foreach ($keys as $key) {
            if (!isset($value[$key])) {
                $value = !empty($default) ? $default : null;
                break;
            }

            $value = $value[$key];
        }

        return $value;
    }
}

if (!function_exists('dd')) {
    /**
     * dd
     * laravel style dump and die
     *
     * @param $data
     * @return void
     */
    function dd($data)
    {
        echo '<pre>';
        die(var_dump($data));
        echo '</pre>';
    }
}

// end of file
