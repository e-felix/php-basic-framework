<?php declare(strict_types=1);

final class Autoload {

    private const FRAMEWORK_NAME = "Nakaoni";
    private const APP_NAME = "App";
    private const APP_MODEL = "Model";

    private static $pattern = ["\\", self::APP_NAME . "/", "//"];

    private static $replacement = ["/", "", "/"];

    public static function includeClass($className) {
        $namespaceNames = explode("\\", $className);

        if($namespaceNames[0] === self::FRAMEWORK_NAME) {
            $classPath = str_replace("\\", "/", $className);

            require __DIR__. "/$classPath.php";
        }

        if(
            $namespaceNames[0] === self::APP_NAME &&
            $namespaceNames[1] === self::APP_MODEL
        ) {
            $classPath = str_replace(self::$pattern, self::$replacement, $className);

            require __DIR__. "/../src/$classPath.php";
        }

    }
}

spl_autoload_register(["Autoload", "includeClass"]);