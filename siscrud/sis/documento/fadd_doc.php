<div id="main" class="container-fluid">

    <div id="top" class="row">
            <div class="col-md-11">
                <h2>Documento</h2>
            </div>

    </div>

    <form action="?page=insere_doc" method="post" enctype="multipart/form-data">
        <div class="row">        
            <div class="col-md-2">
                <label for="id_doc">ID</label><br>
                <input type="text" name="id_doc" readonly>
            </div>

            <div class="col-md-2">
                <label for="tit_doc">Título</label><br>
                <input type="text" name="tit_doc" >
            </div>

            <div class="col-md-2">
                <label for="desc_doc">Descedencia</label><br>
                <input type="text" name="desc_doc" >
            </div>
        </div>    
        <div class="row"> 
            <div class="col-md-3">
                <label for="local_doc">Local</label>
                <input type="file" name="local_doc" >
            </div>
            <div class="col-md-2">
                <label for="status_doc">Status:</label><br>
     
                <input type="radio" name="status_doc" value="0"> Inativo 
                <input type="radio" name="status_doc" value="1"> Ativo
            </div>
            <div class="col-md-6">
                <label for="versao_doc">Versão</label>
                <input type="text" name="versao_doc">


            </div>
        </div>
        <hr>
        <div id="actions" class="row">
            <div class="col-md-12">
                <a href="?page=lista_doc" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
	    </div>
    </form>

</div>