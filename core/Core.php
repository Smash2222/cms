<?php

namespace core;

use controllers\MainController;

class Core
{
    private static $instance = null;
    public $app = [];
    public $db;

    private function __construct()
    {
        $this->app = [];
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function Initialize()
    {
        $this->db = new DB(DATABASE_HOST, DATABASE_LOGIN, DATABASE_PASSWORD, DATABASE_BASENAME);
    }

    public function Run()
    {
        $route = $_GET['route'] ?? '';
        $routeParts = explode('/', $route);
        $moduleName = strtolower(array_shift($routeParts));
        $actionName = strtolower(array_shift($routeParts));

        if (empty($moduleName)) {
            $moduleName = 'main';
        }
        if (empty($actionName)) {
            $actionName = 'index';
        }

        $this->app['moduleName'] = $moduleName;
        $this->app['actionName'] = $actionName;
        $controllerName = '\\controllers\\' . ucfirst($moduleName) . 'Controller';
        $controllerActionName = $actionName . 'Action';

        $statusCode = 200;
        if (class_exists($controllerName)) {
            $controller = new $controllerName();

            if (method_exists($controller, $controllerActionName)) {
                $this->app['actionResult'] = $controller->$controllerActionName();
            } else {
                $statusCode = 404;
            }
        } else {
            $statusCode = 404;
        }

        $statusCodeType = (int)($statusCode / 100);
        if ($statusCodeType === 4 || $statusCodeType === 5) {
            $mainController = new MainController();
            $mainController->errorAction($statusCode);
        }
    }

    public function Done()
    {
        $pathToLayout = 'themes/light/layout.php';
        $tpl = new Template($pathToLayout);
        $tpl->setParam('content', $this->app['actionResult']);
        $html = $tpl->getHTML();
        echo $html;
    }
}
