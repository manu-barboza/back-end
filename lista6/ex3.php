<?php

echo"Caixa Eletrônico- Itaú <br>";
echo"1 - Consulta saldo, 2 - fazer saque,
 3 - fazer depósito, 4 - ver extrato, 5 - sair <br>";

 $opcao=3;

 switch($opcao){
    case 1:
        echo "Seu saldo é R$ 650,81";
        break;
    case 2:
        echo "Qual valor?";
        break;
 }

 ?>
