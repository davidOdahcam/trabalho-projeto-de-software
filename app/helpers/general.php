<?php

if (!function_exists('activeMenu')) {
    function activeMenu($routes, $sub = false) {
        if ($sub === false) {
            return (request()->is($routes)) ? 'active' : '';
        } else {
            return (request()->is($routes)) ? 'menu-is-opening menu-open' : '';
        }
    }
}
