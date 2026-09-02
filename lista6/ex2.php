<?php

//simulando vc discando a opção 2 no celular 
$opcao=2;
switch($opcao){
    case 1:
        echo "segunda via da fatura";
        break;
     case 2:
        echo "upgrade no plano";
        break;
    case 3:
        echo "falar com um atendente";
        break;
    default:
        echo "Opção invalida!";
        break;
}
?>