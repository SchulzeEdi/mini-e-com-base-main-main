<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewHome;
use App\Model\ModelProduto;

class ControllerHome extends ControllerPadrao {
    protected function processPage() {
        $sTitle = 'Jovens Talentos';
        $model = new ModelProduto;
        $produto = $model->getAll();
        $sContent = ViewHome::render([
            // Passar aqui os parâmetros do conteúdo da página
            'homeContent' => ViewHome::getCardHtml($produto)
        ]);
        $this->footerVars = [
            // Passar aqui os parametros do footer da página
        ];
        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
}