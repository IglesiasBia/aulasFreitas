<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="inserir_cli.php" method="post">
        Nome: <input type="text" name="nome_cli"><br>

        CPF:
        <input type="text" name="cpf_cli" ><br>
        RG:
        <input type="text" name="rg_cli"><br>
        Data de nascimento:
        <input type="date" name="dt_nascimento_cli"><br>
        Sexo:
        <input type="radio" name="sexo_cli" value="F">Feminino
        <input type="radio" name="sexo_cli" value="M">Masculino <br>
        Escolaridade:
        <select name="escolaridade_cli">
         <option value="selecione">-----selecione---</option>
            <option value="fundamental"> Ensino fundamental</option>
            <option value="Médio">Ensino Médio</option>
            <option value="superior">Ensino superior</option>
        </select> 
        Nome do pai:
            <input type="text" name="nome_pai_cli"> <br>
        Nome da mãe:
            <input type="text" name="nome_mae_cli"> <br>
        <input type="submit" value="Enviar">
   </form>
</body>
</html> -->


<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>formulario</title>
  </head>
  <body> 
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg>

      <div>

        <!-- LINHA 1 -->
          
      <div class="container">
        <h1 >Cadastro!</h1>
        <form action="inserir_cli.php" method="post">
            <div class="row">
            <div class="col -6" >
                Nome: <br>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nome_cli">

            </div>

            <div class="col">
                CPF :<br>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="cpf_cli">

            </div>

        <br>

            <!-- LINHA2 -->
        
            <div class="row">
            <div class="col-6">
                RG: <br>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="rg_cli">

            </div>
            <div class="col-3">
                Data de Nasc: <input type="date" name="dt_nascimento_cli">
            </div>
            <div class="col-3">
                Sexo: <br>
                    <input class="form-check-input" type="radio" name="sexo_cli" value="F" id="flexRadioDefault1">Feminino
                    <label class="form-check-label" for="flexRadioDefault1"> 
                    <input class="form-check-input" type="radio" name="sexo_cli" value="M" id="flexRadioDefault1">Masculino
                    <label class="form-check-label" for="flexRadioDefault1">
            </div>
            
            
            
        </div>

        <br>

            <!-- LINHA 3  -->
        
            <div class="col-4">
                Pai: <br>
                <input type="text" class="form-control" id="exampleFormControlInput1"  name="nome_pai_cli">
            </div>
            <div class="col-4">
                Mãe: <br> 
                <input type="text" class="form-control"id="exampleForm ControlInput1"  name="nome_mae_cli">

            </div>
            <div class="col-4">
                Escolaridade: <br>
                <select class="form-select" name="escolaridade_cli" id=""> 
                    <option value="1">---selecione---</option>
                    <option value="fundamental">Ensino fundamental</option>
                    <option value="medio">Ensino medio</option>
                    <option value="superior">Superior</option>
                    <option value="mestrado">Mestrado</option>
                </select>
            </div>
            </div>



            </div>
            <div>
            </div>
        
            <div class="row">
                
                <div class="col-12">
                    <br>
                <button type="submit" class="btn btn-warning">enviar</button>
                
            </div>

            
            </div>
        </form>
        </div>

      
      
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
    
  </body>


   
</html>