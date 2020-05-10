    <h1>Arquivos do cliente</h1>
    <br>
    <form method="POST" action="?c=cl&a=ufc&id=<?=$idClient?>">
        <button type="submit" class="btn btn-success">Inserir novo Arquivo</button>
    </form>
    <br>
    <?php
    //abre o diretório a ser manipulado
    $directory = opendir("./assets/files/clients/$idClient");
    //loop pelos arquivos do diretório para listarmos os mesmos
    while(($archive = readdir($directory)) != "")
    {
        if($archive != '.' && $archive != '..' && $archive != 'Thumbs.db')
        {
            //elimina a extenção do arquivo
            $extension = str_replace('.', '', strrchr($archive, '.'));
            ?>
            <a href="assets/files/clients/<?=$idClient?>/<?$archive?>"></a>

            <?php
            if($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg' || $extension == 'gif' || $extension == 'bmp')
            {
            ?>
                <img src="assets/files/clients/<?=$idClient?>/<?=$archive?>" height="200px">
            <?php
            } else 
            {
                echo $archive;
            }   
            ?>
            <a href="?c=cl&a=dfc&id=<?=$idClient?>&file=<?=$archive?>">
                Deletar
            </a>
            <br>
            <?php
        }
    }
    //fecha o diretório
    $directory = closedir($directory);
    echo $directory;
    ?>
</div>