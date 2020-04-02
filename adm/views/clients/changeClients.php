    <div class="col-md-9">
        
        <form method="POST" action="?c=cl&a=alterar">
            <div class="form-group">
                <label for="id">ID</label>
                <input name="id" value="<?=$arrayClient['id_cliente']?>" readonly="readonly" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Nome</label>
                <input name="name" value="<?=$arrayClient['nome']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?=$arrayClient['email']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="tel">Telefone</label>
                <input name="tel" value="<?=$arrayClient['telefone']?>" class="form-control"> 
            </div>
            <div class="form-group">
                <label for="adrress">Endereço</label>
                <input name="address" value="<?=$arrayClient['endereco']?>" class="form-control"> 
            </div>
            <input type="submit" value="Alterar" class="confirm">
        </form>
    </div>
</div>