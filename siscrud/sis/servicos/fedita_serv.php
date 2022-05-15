<?php
    $id_serv = $_GET["id_serv"];
    $sql = mysqli_query($con, "select * from servicos where id_serv='" . $id_serv . "';");
    $row = mysqli_fetch_array($sql);
?>

<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro do Serviço - <?php echo $matricula;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_serv&id_serv=<?php echo $row['id_serv']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<div class="form-group col-md-2">
			<label for="id_serv">ID</label>
			<input type="text" class="form-control" name="id_serv" value="<?php echo $row["id_serv"]; ?>" readonly>
		</div>
		<div class="form-group col-md-6">
			<label for="nome">Nome Serviço</label>
			<input type="text" class="form-control" name="nome_serv" value="<?php echo $row["nome_serv"]; ?>">
		</div>
		<div class="form-group col-md-4">
			<label for="sigla">Sigla</label>
			<input type="text" class="form-control" name="sigla_serv" value="<?php echo $row["sigla_serv"]; ?>">
		</div>

	</div>

	<!-- 2ª LINHA -->
	<div class="row"> 
		<div class="form-group col-md-6">
        <label for="valor">Valor</label>
			<input type="text" class="form-control" name="valor_serv" value="<?php echo $row["valor_serv"]; ?>">
		</div>

		<div class="form-group col-md-6">
			<label for="tempo">Tempo Estimado Serviço</label>
			<input type="text" class="form-control" name="tempo_est_serv" value="<?php echo $row["tempo_est_serv"]; ?>">
		</div>
	</div>

	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_serv" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>