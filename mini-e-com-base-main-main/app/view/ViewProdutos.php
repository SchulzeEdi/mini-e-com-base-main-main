<?php
namespace App\View;
use App\View\ViewPadrao;

class ViewProdutos extends ViewPadrao {
  static function getHtmlTabelaProdutos(array $a){
    $aHtml='<table class="table">
      <thead>
        <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Nome</th>
          <th scope="col">Preço</th>
        </tr>
      </thead>
      <tbody>';  
        foreach ($a as $x) {
          $aHtml .=
          '<tr>
            <td>'.$x["logcodigo"].'</td>
            <td>'.$x["logtipo"].'</td>
            <td>'.$x["logdescricao"].'</td>
            <td><a href="index.php?pg=produtos&act=delete&proid='.$x["logcodigo"].'">Excluir</a></td>
            <td><a href="index.php?pg=alterar&act=update&proid='.$x["logcodigo"].'">Alterar</a></td>
          </tr>';
        } $aHtml .='</tbody>
       </table>';
      return $aHtml;
    }

    static function button(){
      $botaoCadastro='<a href="index.php?pg=Cadastro&act=insert">Cadastrar Produto</a>';
      return $botaoCadastro;
    }
}