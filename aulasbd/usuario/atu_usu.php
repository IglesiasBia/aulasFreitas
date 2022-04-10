<?php

    $con = mysqli_connect("localhost", "root", "", "base");

    $id = $_POST["id_usu"];
    $nome = $_POST["nome_usu"];
    $pass = $_POST["pass_usu"];
    $nivel = $_POST["nivel_usu"];
    $status = $_POST["status_usu"];

    $sql = "update usuario set ";
    $sql .= "nome_usu = '$nome', pass_usu = '$pass', ";
    $sql .= "nivel_usu = '$nivel', status_usu='$status' where id_usu = '$id';";


    $result = mysqli_query($con, $sql); 

    if($result){
        echo "Cadastro atualizado com suceso!";
        include "lista_usu.php";
    }else{
        echo "babou";
    }

?>