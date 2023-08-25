<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewCadastro;
use App\Model\ModelProduto;

class ControllerCadastro extends ControllerProdutos {
  function processInsert() {
    if(isset($_POST['submit'])) {
      $sCadastroNome=$_POST['nome'];
      $sCadastroPreco=$_POST['preco'];
      $oModelProduto = new ModelProduto;

      $this->footervars = [
        'footerContent'=> ''
      ];

      if($oModelProduto->insertTable($sCadastroNome,$sCadastroPreco)) {
        $this->footerVars=[
          'footerContent' => '<div class="alert alert-success" role="alert">
          Produto cadastrado com sucesso!
          </div>'
        ];
      }
      else  $this->footerVars=[
        'footerContent' => '<div class="alert alert-success" role="alert">
        Produto não foi cadastrado!
        </div>'
      ];  
    }
      $sContent = ViewCadastro::render([
        'cadastroContent' => '<h1>Cadastro de Produtos</h1>'
      ]);
    return parent::getPage(
      $sTitle='Cadastro de Produtos',
      $sContent
    );
  } 
} 

    
    
    


