<?php declare(strict_types=1);

/**
 * Does a pre var_dump
 */
function dump(...$parameters) {
    foreach ($parameters as $parameter) {

        echo "<pre>";
        var_dump($parameter);
        echo "</pre>";
    }
}

/**
 * Sets the root path of the server folder
 */
define("ROOT_DIR", $_SERVER["DOCUMENT_ROOT"]);

