<?php
namespace App\Model;
use App\Model\ModelPadrao;

class ModelProduto extends ModelPadrao{
    public $id;
    public $update;
    function getTable(){
        return 'ecommerce.tbproduto';
    }

    function deleteProduto(){
        return parent::delete([
            'logcodigo'=>$this->id

        ]);
    }

    function insertTable($sCadastroNome,$sCadastroPreco){
        $array=[$sCadastroNome,$sCadastroPreco];
        return parent::insert($array);
    }

    function updateTable($sAlterarNome,$sAlterarPreco){
        $arrayUpdate=[$sAlterarNome,$sAlterarPreco];
        return parent::update($arrayUpdate);
    }
}