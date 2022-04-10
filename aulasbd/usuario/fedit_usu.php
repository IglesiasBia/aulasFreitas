<?php

    $id = (int) $_GET["id"];
    
    $con = mysqli_connect("localhost", "root", "", "base");

    $sql = "select * from usuario where id_usu=".$id;

    $dados = mysqli_query($con,$sql);

    $row =  mysqli_fetch_array($dados);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Cadastro Usuário</h3>
<form action="atu_usu.php" method="post">
        ID usuário: <br>
        <input type="text" readonly name="id_usu" value="<?php echo $id ?>" ><br>
        Nome usuário: <br>
        <input type="text" name="nome_usu" value="<?php echo $row['nome_usu']?>" ><br>
        Pass: <br>
        <input type="text" name="pass_usu" value="<?php echo $row['pass_usu']?>"><br>
        Nível de acesso: <br>
        <input type="text" name="nivel_usu" value="<?php echo $row['nivel_usu']?>"> <br>


        Status: <br>
        <input type="text" name="status_usu" value="<?php echo $row['status_usu']?>"> <br>      


        <input type="submit" value="Salvar">
    </form>
</body>
</html>