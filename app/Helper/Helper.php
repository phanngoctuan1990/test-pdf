<?php

if (!function_exists('generateClass')) {
    function generateClass($key, $class = '')
    {
        if (in_array($key, [0, 1])) {
            $class .= ' font-weight-bold';
        }
        return $class;
    }
}
