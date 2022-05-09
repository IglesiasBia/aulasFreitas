<div id="main" class="container-fluid">
	<div id="top" class="row">
		<div class="col-md-11">
			<h2>Clientes</h2>
		</div>

		<div class="col-md-1">
			<!-- Chama o Formulário para adicionar clientes -->
			<a href="?page=fadd_cli" class="btn btn-primary pull-right h2">Novo Cliente</a> 
		</div>
	</div>
	<hr/>

	<div> <?php include "mensagens_cli.php"; ?> </div>

	<div id="list" class="row">
		<div class="table-responsive col-md-12">
			<?php
				$data = mysqli_query($con, "select * from cliente order by id_cli;") or die(mysqli_error("ERRO: ".$con));
				echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
				echo "<thead><tr>";
				echo "<td><strong>ID</strong></td>"; 
				echo "<td><strong>Nome</strong></td>"; 
				echo "<td><strong>CPF</strong></td>";
				echo "<td><strong>Sexo</strong></td>";
				echo "<td><strong>RG</strong></td>";
                echo "<td><strong>Escolaridade</strong></td>";
				echo "<td class='actions d-flex justify-content-center'><strong>Ações</strong></td>"; 
				echo "</tr></thead><tbody>";
				while($info = mysqli_fetch_array($data)){ 
					echo "<tr>";
					echo "<td>".$info['id_cli']."</td>";
					echo "<td>".$info['nome_cli']."</td>";
					echo "<td>".$info['cpf_cli']." </td>";
					echo "<td>".$info['sexo_cli']."</td>";
                    echo "<td>".$info['rg_cli']."</td>";
                    echo "<td>".$info['escolaridade']."</td>";

                    echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
					echo "<a class='btn btn-success btn-xs' href=?page=view_cli&id_cli=".$info['id_cli']."> Visualizar </a>";
					echo "<a class='btn btn-warning btn-xs' href=?page=fedita_cli&id_cli=".$info['id_cli']."> Editar </a>"; 
					echo "<a href=?page=excluir_cli&id_cli=".$info['id_cli']." class='btn btn-danger btn-xs'> Excluir </a></td>";

				}
				echo "</tr></tbody></table>";
			?>				
		</div>
	</div>
</div>
