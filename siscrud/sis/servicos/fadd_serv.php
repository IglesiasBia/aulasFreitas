<div id="main" class="container-fluid">
<div id="top" class="row">
		<div class="col-md-11">
			<h2>Serviço</h2>
		</div>
		<div class="col-md-1">
			<!-- Chama o Formulário para adicionar servicos -->
			<a href="?page=fadd_alu" class="btn btn-primary pull-right h2">Novo Serviço</a> 
		</div>
	</div>
	<!-- Área de campos do formulário de edição-->

	<form action="?page=insere_serv" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<div class="form-group col-md-2">
			<label for="id_serv">ID</label>
			<input type="text" class="form-control" name="id_serv" readonly>
		</div>
		<div class="form-group col-md-6">
			<label for="nome">Nome Serviço</label>
			<input type="text" class="form-control" name="nome_serv">
		</div>
		<div class="form-group col-md-4">
			<label for="sigla">Sigla</label>
			<input type="text" class="form-control" name="sigla_serv">
		</div>

	</div>

	<!-- 2ª LINHA -->
	<div class="row"> 
		<div class="form-group col-md-6">
        <label for="valor">Valor</label>
			<input type="text" class="form-control" name="valor_serv">
		</div>

		<div class="form-group col-md-6">
			<label for="tempo">Tempo Estimado Serviço</label>
			<input type="text" class="form-control" name="tempo_est_serv">
		</div>
	</div>

	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_serv" class="btn btn-secondary">Cancelar</a>
			<button type="submit" class="btn btn-primary">Salvar</button>
		</div>
	</div>
</div>