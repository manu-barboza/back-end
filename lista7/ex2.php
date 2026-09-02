<?php

function analisarVenda($produto,$custo,$venda){
    $lucro=$venda-$custo;
     
    if($lucro<=0){
        $mensagem = "prejuizo!!";
    }elseif($lucro <= 20 ){
        $mensagem="lucro,baixo,mas vale a pena";
    }
    else{
        $mensagem="Lucro Alto! Investe!!";
    }
    echo "produto:, $produto <br>";
    echo "lucro:, $lucro <br>";
    echo "Analise:, $mensagem <br>";

}
analisarVenda("camiseta", 40,35);
?>