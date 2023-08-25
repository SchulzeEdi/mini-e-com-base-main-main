<?php
namespace App\Db;
class Connection {
    /**
     * Realiza e retorna uma instância 
     * da conexão com o PostgreSQL
     * @return resource|false
     */
    static function get() {
        static $oConnection;

        if (!isset($oConnection)) {
            $sHost     = $_ENV['host']     ??= '';
            $sPort     = $_ENV['port']     ??= '';
            $sDbname   = $_ENV['dbname']   ??= '';
            $sUser     = $_ENV['user']     ??= '';
            $sPassword = $_ENV['password'] ??= '';
            $oConnection = pg_connect("
                host=$sHost
                port=$sPort
                dbname=$sDbname
                user=$sUser
                password=$sPassword
            ");
        }
        return $oConnection;
    }
}
