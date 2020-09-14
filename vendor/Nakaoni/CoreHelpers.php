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
 * Does a pre var_dump and then kill the process
 */
function dd(...$parameters) {
    dump(...$parameters);
    die();
}

/**
 * Sets the root path of the server folder
 */
define("ROOT_DIR", $_SERVER["DOCUMENT_ROOT"]);

