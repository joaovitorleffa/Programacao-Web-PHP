    <table class="table col-md-9">
        <tr>
            <td>Código</td>
            <td>Nome</td>
            <td>Descrição</td>
            <td>Valor</td>
            <td>Ação</td>
        </tr>
        <?php 
        foreach($arrayProducts as $product) {
        ?>
        <tr>
            <td><?=$product["id_produto"]?></td>
            <td><?=$product["nome"]?></td>
            <td><?=$product["descricao"]?></td>
            <td><?=$product["valor"]?></td>
            <td><a href="?c=pd&a=cg&id=<?=$product["id_produto"]?>" class="button-change">Alterar</a></td>
            <td><a href="?c=pd&a=dl&id=<?=$product["id_produto"]?>" class="button-delete">Excluir</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>