<?php

$email=$_POST["email"];
$senha=$_POST["senha"];

if($email == "manoela@edu.senai.br"
&& $senha=="M@nu2010"){
    echo "Login, bem sucedido!!";
}else{
    echo "Login ou senha invalido!!;"
}
?>