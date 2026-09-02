<?php

function calcularDesconto($preco,$desconto){
    $valorDesconto=$desconto/100;
    return $preco-$valorDesconto;
}
echo "Preço final: R$", calcularDesconto(100,10);
