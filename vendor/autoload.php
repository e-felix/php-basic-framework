<?php declare(strict_types=1);

final class Autoload {

    private const FRAMEWORK_NAME = "Nakaoni";
    private const KERNEL_NAME = "Core";
    private const CONFIGURATION = "Config";

    public static function includeClass($className) {
        $namespaceNames = explode("\\", $className);

        if($namespaceNames[0] === self::FRAMEWORK_NAME) {
            $classPath = str_replace("\\", "/", $className);

            require __DIR__. "/$classPath.php";
        }

        if($namespaceNames[0] === self::CONFIGURATION) {
            $classPath = str_replace(
                "Config",
                "config",
                str_replace("\\", "/", $className)
            );

            require __DIR__. "/../$classPath.php";
        }


    }
}

spl_autoload_register(["Autoload", "includeClass"]);