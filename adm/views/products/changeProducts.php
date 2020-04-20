<div class="col-md-9">
        
        <form method="POST" action="?c=pd&a=alterar">
            <div class="form-group">
                <label for="id">ID</label>
                <input name="id" value="<?=$arrayProduct['id_produto']?>" readonly="readonly" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Nome</label>
                <input name="name" value="<?=$arrayProduct['nome']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Descrição</label>
                <input name="description" value="<?=$arrayProduct['descricao']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="value">Valor</label>
                <input type="number" name="value" value="<?=$arrayProduct['valor']?>" class="form-control">
            </div>
            <input type="submit" value="Alterar" class="confirm">
        </form>
    </div>
</div>