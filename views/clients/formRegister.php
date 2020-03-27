<h2>Cadastro de Cliente</h2>
<form method="POST" action="?c=c&a=cca">
    <div class="form-group">
        <label for="name">Nome</label>
        <input required type="text" name="nome" class="form-control">
    </div>
    
    <div class="form-group">
        <label>Login</label>
        <input type="text" name="login" class="form-control"> 
    </div>
    <div class="form-group">
        <label>Senha</label>
        <input type="password" name="senha" class="form-group">
    </div>
    <div class="radio">
        <label class="radio-inline">
            <input checked type="radio" value="Masculino" name="sexo">
            Masculino
        </label>
        <label class="radio-inline">
            <input checked type="radio" value="Feminino" name="sexo">
            Feminino
        </label>
    </div>
    <div class="form-group">
        <label for="comment">Comentário</label>
        <textarea name="textarea" cols="30" rows="5" id="comment" class="form-control"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Enviar">
</form>