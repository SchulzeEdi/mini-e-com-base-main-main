<?php
namespace App\View;
use App\View\ViewPadrao;
use App\View\ControllerCadastro;

class ViewHome extends ViewPadrao {
  static function getCardHtml(array $x){ 
    $Html ='';
    foreach ($x as $value) {$Html.= '
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">'.$value['logtipo'].'</h5>
          <p class="card-text">'  .'R$'.$value['logdescricao'].'</p>
          <a href="#" class="btn btn-primary" style="background-color:#2e2e2e;">Comprar agora</a>
          <a href="#" class="btn btn-primary" style="background-color:#2e2e2e;">Carrinho</a>
        </div>
      </div>';
    }
    return $Html;
  }
}