<?php
   $con = mysqli_connect("localhost", "root", "", "base");


   $nome = $_POST["nome_usu"];
   $pass = $_POST["pass_usu"];
   $nivel = $_POST["nivel_usu"];
   $status = $_POST["status_usu"];

   $sql = "insert into usuario values";
   $sql .= "('0', '$nome', '$pass', '$nivel', '$status')";

    $resultado = mysqli_query($con, $sql);

   if($resultado){
       echo "Dados do usuário inseridos com sucesso!";
       include "lista_usu.php";
   }else{
       echo "babou";
   }

?>