    <div class="col-md-9">
        <?php
            foreach($arrayClient as $client) {
        ?>
        <form method="POST" action="?c=adc&a=alterar&id=<?=$client['id_cliente']?>">
            <div class="form-group">
                <label for="name">Nome</label>
                <input name="name" value="<?=$client['nome']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?=$client['email']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="tel">Telefone</label>
                <input name="tel" value="<?=$client['telefone']?>" class="form-control"> 
            </div>
            <div class="form-group">
                <label for="adrress">Endereço</label>
                <input name="address" value="<?=$client['endereco']?>" class="form-control"> 
            </div>
            <input type="submit" value="Alterar" class="confirm">
        </form>
        <?php
            }
        ?>
    </div>
</div>