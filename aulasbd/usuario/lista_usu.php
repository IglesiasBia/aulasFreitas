<?php

    $con = mysqli_connect("localhost", "root", "", "base");

    $sql = "select * from usuario";

    $dados = mysqli_query($con, $sql);

    echo "<table border='1'>";

    while($info = mysqli_fetch_array($dados)){
        echo "<tr> <td>" . $info['id_usu'] . "</td>";
        echo "<td>" . $info['nome_usu'] ."</td>";
        echo "<td>" . $info['pass_usu'] ."</td>";
        echo "<td>" . $info['nivel_usu'] ."</td>";
        echo "<td>" . $info['status_usu'] . "</td>";
        echo "<td> <a href=exclui_usu.php?id=".$info[0].">Excluir</a> </td>";
        echo "<td> <a href=fedit_usu.php?id=".$info[0]."> Editar </a> </td> </tr>";
    }
?>