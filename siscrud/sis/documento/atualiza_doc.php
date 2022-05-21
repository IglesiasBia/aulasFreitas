<?php
    $id = strtoupper($_POST["id_doc"]);
    $titulo = strtoupper($_POST["tit_doc"]);
    $desc = strtoupper($_POST["desc_doc"]);
    $status = strtoupper($_POST["status_doc"]);
    $versao = strtoupper($_POST["versao_doc"]);
    $local = 

    $sql = "update documento set tit_doc='" .$titulo."', desc_doc='". $desc . "', status_doc='". $status . "', versao_doc='" . $versao . "' where id_doc=".$id. ";";
    echo $sql;
    $resultado = mysqli_query($con, $sql);

    if($resultado){
        header('Location: index.php?page=lista_doc&msg=2');
        mysqli_close($con);
    }else{
        header('Location: index.php?page=lista_doc&msg=4');
        mysqli_close($con);
    }

?>