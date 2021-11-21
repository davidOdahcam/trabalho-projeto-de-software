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

if (!function_exists('sessionFlash')) {
    function sessionFlash(string $key, $value = null) {
        dd(app());
        try {
            $session = app('session');
            $session->flash($key, $value);
        } catch (\Throwable $th) {
            // Tratar log de erros
        }
    }
}
