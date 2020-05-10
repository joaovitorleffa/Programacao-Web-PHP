    <h1>Insere Novo Arquivo</h1>
    <form class="form-group" method="POST" action="?c=cl&a=ufca&id=<?=$idClient?>" enctype="multipart/form-data">
        <label for="file">Arquivo:</label>
        <input type="file" class="form-control-file" name="file">
        <br>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>