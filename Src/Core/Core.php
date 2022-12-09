<?php

namespace Src\Core;

class Core {

    public function run() {

        $url = '/';

        if (isset($_GET['url'])) {

            $url .= $_GET['url'];
        }

        $params = [];

        if (!empty($url) && $url !== '/') {

            $url = explode('/', $url);

            array_shift($url);

            $currentController = $url[0] . 'Controller';

            array_shift($url);

            if (isset($url[0]) && !empty($url[0])) {

                $currentAction = $url[0];

                array_shift($url);

            } else {

                $currentAction = 'main';
            }

            if (count($url)) {

                $params = $url;
            }

        } else {

            $currentController = 'HomeController';
            $currentAction = 'main';
        }

        if (!file_exists("../App/Controllers/{$currentController}.php") || !method_exists("App\\Controllers\\{$currentController}", $currentAction)) {
            $currentController = 'NotfoundController';
            $currentAction = 'main';
        }

        $classController = "App\\Controllers\\{$currentController}";

        $controller = new $classController;

        call_user_func_array([$controller, $currentAction], $params);

    }

}