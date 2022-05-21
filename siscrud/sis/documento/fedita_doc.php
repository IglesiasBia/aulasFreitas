<?php
    $id = $_GET["id_doc"];
    $sql = mysqli_query($con, "select * from documento where id_doc='" .$id . "';");
    $row = mysqli_fetch_array($sql);

?>

<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro do Documento - <?php echo $id;?></h3>

    <form action="?page=atualiza_doc&id_doc=<?php echo $id ?>"  method="post">
        <div class="row">
            <div class="form-group col-md-1">
                <label for="id">ID</label>
                <input class="form-control" type="text" name="id_doc" id="" value="<?php echo $row["id_doc"];?> " readonly>
            </div>
            <div class="form-group col-md-2">
                <label for="tit_doc">Título</label>
                <input class="form-control" type="text" name="tit_doc" id="" value="<?php echo $row["tit_doc"];?>">
            </div>
            <div class="form-group col-md-2">
                <label for="id">Descedencia</label>
                <input class="form-control" type="text" name="desc_doc" id="" value="<?php echo $row["desc_doc"];?>">
            </div>
            <div class="col-md-3">
                <label for="local_doc">Local</label>
                <input type="file" name="local_doc" value="<?php echo $row["local_doc"] ?>">
            </div>
            <div class="form-group col-md-2">
                <label for="id">Status</label>
                <?php 
                    if($row["status_doc"] == 0){
                        echo "<br><input type='radio' name='status_doc' value='0' checked> Inativo ";
                        echo "<input type='radio' value='1' name='status_doc' > Ativo";
                    }elseif($row["status_doc"] == 1){
                        echo "<br><input type='radio' name='status_doc' value='0' > Inativo ";
                        echo "<input type='radio' name='status_doc' value='1' checked> Ativo";
                    }
                ?>

            </div>
            <div class="form-group col-md-2">
                <label for="versao_doc">Versão</label>
                <input class="form-control" type="text" name="versao_doc" value="<?php echo $row["versao_doc"]; ?>">
            </div>

        </div>
        <hr>
        <div id="actions" class="row">
            <div class="col-md-12">
                <a href="?page=lista_doc" class="btn btn-secondary">Voltar</a>
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </div>
	    </div>
    </form>
</div>