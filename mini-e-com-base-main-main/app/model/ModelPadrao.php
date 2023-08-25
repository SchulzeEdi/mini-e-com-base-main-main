<?php
namespace App\Model;
use App\Db\Connection;

abstract class ModelPadrao {
    abstract function getTable();

    function getAll(){
        $aConnection = Connection::get();
        $aSelect = 'SELECT * FROM '. $this->getTable();
        $oResult = pg_query($aConnection,$aSelect);
        $aData = [];
        while($oResultado=pg_fetch_assoc($oResult)){
            $aData[]=$oResultado;
        }
        return $aData;
    }

    protected function insert($array){
        $aConnection = Connection::get();
        $aSql = 'INSERT INTO ' . $this->getTable(). ' VALUES (default';
        foreach ($array as $nome){
            $aSql.=',';
            $aSql.=$this->getBdValue($nome);
            }
        $aSql.=')';
        return pg_query($aConnection, $aSql);       
    }
    
    protected function delete($aWhere){
        $aConnection = Connection::get();
        $aSql = 'DELETE FROM '. $this->getTable(). ' WHERE 1=1 ';
        foreach($aWhere as $sNomeColuna=>$sValor){
            $aSql.= ' and ' .$sNomeColuna.' = '.$sValor;
        }
        return pg_query($aConnection, $aSql);
    }

    protected function update($aValues, $aWhere){}

    /**
     * Retorna o valor pronto para ser 
     * adicionado no comando SQL
     * @param mixed $xValue
     * @return mixed
     */
    protected function getBdValue($xValue) {
        if (!empty($xValue) || !is_null($xValue)) {
            if (is_string($xValue)) {
                return '\'' . pg_escape_string($xValue) . '\'';
            }
            return $xValue;
        }
        return 'NULL';
    }
}