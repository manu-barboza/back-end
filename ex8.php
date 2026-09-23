<?php

$peixes= $_POST['peixe'];

$multa = ($peixes-50)*4;

if($peixes>50){
    echo "Sua multa é de $multa R$";
}else{
    echo "Você não tem multas";
}

?>