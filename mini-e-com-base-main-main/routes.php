<?php

/**
 * Rederiza o conteúdo da página solicitada
 * @param string $sPage
 * @return string
 */
function render($sPage)
{
    switch ($sPage) {
        case 'home':
            return (new App\Controller\ControllerHome)->render();
        case 'produtos':
            return (new App\Controller\ControllerProdutos)->render();
        case 'Cadastro':
            return (new App\Controller\ControllerCadastro)->render();
        case 'alterar':
            return (new App\Controller\ControllerProdutos)->render();
    }
    return 'Página não encontrada!';
}
