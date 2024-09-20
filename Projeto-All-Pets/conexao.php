<?php


 $servidor = "LocalHost"; 
 $usuario = "root";
 $senha = "";
 $dbName = "formulario";

 $conexao=mysqli_connect($servidor, $usuario, $senha, $dbName);
if(!$conexao){
    die("Houve um erro: ".mysqli_connect_error());
}



?>