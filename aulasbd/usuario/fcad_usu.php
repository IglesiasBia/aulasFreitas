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
<form action="insere_usu.php" method="post">
        Nome usuário: <br>
        <input type="text" name="nome_usu"><br>
        Pass: <br>
        <input type="text" name="pass_usu"><br>
        Nível de acesso: <br>
        <input type="radio" name="nivel_usu"> Nível 1

        <input type="radio" name="nivel_usu"> Nível 2 <br>

        Status:
        <input type="text" name="status_usu">     


        <input type="submit" value="Salvar">
    </form>
</body>
</html>