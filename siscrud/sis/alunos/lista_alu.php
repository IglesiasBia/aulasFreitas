<div id="main" class="container-fluid">
	<div id="top" class="row">
		<div class="col-md-11">
			<h2>Alunos</h2>
		</div>

		<div class="col-md-1">
			<!-- Chama o Formulário para adicionar alunos -->
			<a href="?page=fadd_alu" class="btn btn-primary pull-right h2">Novo Aluno</a> 
		</div>
	</div>
	<hr/>

	<div> <?php include "mensagens.php"; ?> </div>


	<div id="bloco-list-pag">	
		<div id="list" class="row">
			<div class="table-responsive col-xs-12">
				<?php
					$quantidade = 5;

					//$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
					//$inicio = ($quantidade * $pagina) - $quantidade;

					$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
					$inicio = ($quantidade * $pagina) - $quantidade;


					$data = mysqli_query($con, "select * from aluno order by matricula asc limit $inicio, $quantidade;") or die(mysqli_error("ERRO: ".$con));
					echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
					echo "<thead><tr>";
					echo "<td><strong>Matrícula</strong></td>"; 
					echo "<td><strong>Nome</strong></td>"; 
					echo "<td><strong>Pai</strong></td>";
					echo "<td><strong>Mãe</strong></td>";
					echo "<td><strong>Nascimento</strong></td>";
					echo "<td class='actions d-flex justify-content-center'><strong>Ações</strong></td>"; 
					echo "</tr></thead><tbody>";
					while($info = mysqli_fetch_array($data)){ 
						echo "<tr>";
						echo "<td>".$info['matricula']."</td>";
						echo "<td>".$info['nome_aluno']."</td>";
						echo "<td>".$info['nome_pai']." </td>";
						echo "<td>".$info['nome_mae']."</td>";
						echo "<td>".date('d/m/Y',strtotime($info['dt_nasc']))."</td>"; //Funções para converter formato da data do MySQL
						echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
						echo "<a class='btn btn-success btn-xs' href=?page=view_alu&matricula=".$info['matricula']."> Visualizar </a>";
						echo "<a class='btn btn-warning btn-xs' href=?page=fedita_alu&matricula=".$info['matricula']."> Editar </a>"; 
						echo "<a href=?page=excluir_alu&matricula=".$info['matricula']." class='btn btn-danger btn-xs'> Excluir </a></td>";
					}
					echo "</tr></tbody></table>";
				?>				
			</div><!-- Div Table -->
		</div><!--list-->

		<!-- PAGINAÇÃO -->
		<div id="bottom" class="row">
			<div class="col-md-12">
				<?php
					$sqlTotal 		= "select matricula from aluno;";
					$qrTotal  		= mysqli_query($con, $sqlTotal) or die (mysqli_error());
					$numTotal 		= mysqli_num_rows($qrTotal);
					$totalpagina = (ceil($numTotal/$quantidade)<=0) ? 1 : ceil($numTotal/$quantidade);

					$exibir = 3;

					$anterior = (($pagina-1) <= 0) ? 1 : $pagina - 1;
					$posterior = (($pagina+1) >= $totalpagina) ? $totalpagina : $pagina+1;

					echo "<ul class='pagination'>";
					echo "<li class='page-item'><a class='page-link' href='?page=lista_alu&pagina=1'> Primeira</a></li> "; 
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_alu&pagina=$anterior\"> Anterior</a></li> ";

					echo "<li class='page-item'><a class='page-link' href='?page=lista_alu&pagina=".$pagina."'><strong>".$pagina."</strong></a></li> ";

					for($i = $pagina+1; $i < $pagina+$exibir; $i++){
						if($i <= $totalpagina)
						echo "<li class='page-item'><a class='page-link' href='?page=lista_alu&pagina=".$i."'> ".$i." </a></li> ";
					}

					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_alu&pagina=$posterior\"> Pr&oacute;xima</a></li> ";
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_alu&pagina=$totalpagina\"> &Uacute;ltima</a></li></ul>";

				?>	
			</div>
		</div><!--bottom-->
	</div>
</div>
