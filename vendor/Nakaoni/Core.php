<?php declare(strict_types=1);

namespace Nakaoni;

use Nakaoni\DatabaseManager;
use App\Controller;

final class Core {

    const PUBLIC_FOLDER_STRING_LENGTH = 17;

    protected $routes;
    protected $controller;
    protected $method;
    protected $view;
    protected $parameters;

    public function __construct() {
        require_once __DIR__ . "/CoreHelpers.php";
        require_once ROOT_DIR . "/src/routes.php";

        $this->routes = $routes;

        $requestURI = substr($_SERVER["REQUEST_URI"], self::PUBLIC_FOLDER_STRING_LENGTH);

        foreach ($this->routes as $route => $class) {
            [$httpMethod, $uri] = explode("::", $route);
            [$class, $method] = explode("::", $class);

            require_once ROOT_DIR . "/src/Controller/$class.php";

            $this->controller = "App\Controller\\$class";
            $this->method = $method;
        };

    }

    public function start() {

        $ret = new $this->controller;

        $method = $this->method;
        $render = $ret->$method();

    }
}