<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewProdutos;
use App\Db\Connection;
use App\model\ModelProduto;

class ControllerProdutos extends ControllerPadrao {
    function processPage() {
        $oModelProduto = new ModelProduto;
        $a=$oModelProduto->getAll();
        $sContent = ViewProdutos::render([
            'produtosContent' => '<h1>Produtos</h1>',
            'tabelaProdutos'  => ViewProdutos::getHtmlTabelaProdutos($a),
            'botaoCadastro'   => ViewProdutos::button()
        ]);
        return parent::getPage(
            $sTitle='Produtos',
            $sContent
        );

    }
    function processDelete() {
        $iIdProduto = $_GET['proid'] ??= '';
        $oModelProduto = new ModelProduto;
        $oModelProduto->id=$iIdProduto;
        $this->footervars =[
            'footerContent'=> ''
        ];
        if($oModelProduto->deleteProduto()){
            $this->footerVars=[
                'footerContent' => '<div class="alert alert-success" role="alert">
                Produto excluído com Sucesso!
                </div>'
            ];
        }
        $oModelProduto->deleteProduto();
        return $this->processPage();
      }
    function processUpdate() {}
      
      

    
    
    
    
}

