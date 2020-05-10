
    <table class="table col-md-9">
        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Telefone</td>
            <td>Endereço</td>
            <td>img</td>
            <td>Ações</td>
        </tr>
        <?php
        foreach($arrayClients as $client){
        echo("
            <tr>
                <td>{$client['id_cliente']}</td>
                <td>{$client['nome']}</td>
                <td>{$client['email']}</td>
                <td>{$client['telefone']}</td>  
                <td>{$client['endereco']}</td>
                <td><a href='?c=cl&a=cg&id={$client["id_cliente"]}'><button class='button-change'>Alterar</button></a></td>
                <td><a href='?c=cl&a=dl&id={$client["id_cliente"]}'><button class='button-delete'>Excluir</button></a></td>
           
        ");  
            if(is_file("assets/images/{$client['id_cliente']}.jpg"))
            {
                echo ("
                    <td>
                        <a href='assets/images/{$client["id_cliente"]}.jpg'>
                            <img width='100px' height='100px' src='assets/images/{$client['id_cliente']}.jpg'>
                        </a>
                        <a href='?c=cl&a=lfc&id={$client["id_cliente"]}'>Arquivos</a>
                    </td>
                ");
            } 
            else 
            {
                echo("
                    <td>
                        Sem foto <br>
                        <a href='?c=cl&a=lfc&id={$client["id_cliente"]}'>Arquivos</a>
                    </td>
                ");
            }
            echo("
                </tr>
            ");
        }?>
    </table>
</div>

