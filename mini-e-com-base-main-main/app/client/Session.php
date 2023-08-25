<?php
namespace App\Client;

class Session {
    function __construct(){
        $this->init();
    }

    /**
     * Inicia a sessão caso ainda
     * não tenha sido iniciada
     * @return void
     */
    private function init() {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    /**
     * Armazena o id do usuário 
     * na sessão atual
     * @param $xIdUser mixed
     * @return bool
     */
    function login($xIdUser) {
        if (!$this->isLogged()) {
            $_SESSION['userid'] = $xIdUser;
            return true;
        }
        return false;
    }

    /**
     * Remove o usuário da sessão
     * @return bool
     */
    function logout() {
        if ($this->isLogged()) {
            unset($_SESSION['userid']);
            return true;
        }
        return false;
    }

    /**
     * Verifica se tem um usuário logado
     * @return bool
     */
    function isLogged() {
        return isset($_SESSION['userid']) && !empty($_SESSION['userid']);
    }

    /**
     * Retorna o id do usuário
     * armazenado na sessão
     * @return mixed
     */
    function getUserId() {
        if ($this->isLogged()) {
            return $_SESSION['userid'];
        }
        return false;
    }
}
