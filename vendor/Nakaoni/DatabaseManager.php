<?php declare(strict_types=1);

namespace Nakaoni;

use Config\DatabaseInfo;

class DatabaseManager {

    private static $instance = NULL;

    private function __construct() {}
    private function __clone() {}

    public static function getInstance()
    {
        if(is_null(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function getPDO() {

        $infos = (new DatabaseInfo())->infos;

        $dsn = $infos["driver"] .
            ":host=" . $infos["host"] .
            ";port=" . $infos["port"] .
            ";dbname=" . $infos["dbname"];
        $user = $infos["user"];
        $password = $infos["password"];

        try {
            return new \PDO($dsn, $user, $password);
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }

}