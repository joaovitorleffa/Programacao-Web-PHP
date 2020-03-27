
<table class="table">
    <tr>
        <td>Código</td>
        <td>Nome</td>
        <td>Email</td>
        <td>Telefone</td>
        <td>Endereço</td>
    </tr>
    <?php
        foreach($arrayClients as $client){
    ?>
        <tr>
            <td><?=$client["id_cliente"]?></td>
            <td><?=$client["nome"]?></td>
            <td><?=$client["email"]?></td>
            <td><?=$client["telefone"]?></td>
            <td><?=$client["endereco"]?></td>
        </tr>
    <?php
    }
    ?>
</table>