<?php
    class ClientsController {
        var $ClientModel;

        public function __construct() {
            if(!isset($_SESSION["login"])) {
                header("Location: index.php?c=m&a=l");
            }

            require_once("models/ClientsModel.php");
            $this->ClientModel = new ClientsModel();
        }

        public function index() {
            $this->listClients();
        }

        public function formRegister() {
            require_once("views/templates/header.php");
            require_once("views/templates/nav.php");
            require_once("views/clients/addClients.php");
            require_once("views/templates/footer.php");
        }

        public function registerClients() {
            $arrayClient["name"] = $_POST["name"];
            $arrayClient["email"] = $_POST["email"];
            $arrayClient["tel"] = $_POST["tel"];
            $arrayClient["address"] = $_POST["address"];

            $this->ClientModel->addNewClients($arrayClient);

            $id_query = $this->ClientModel->getConsult(); //exemplo... aqui pode ser o retorno do banco apos o INSERT da noticia

            $foto_temp = $_FILES["img"]["tmp_name"];	//pega o caminho temporário do arquivo
            $foto_name = $_FILES["img"]["name"];		//pega o nome

            $extensao = str_replace('.','',strrchr($foto_name, '.')); //strtolower(end(explode('.', $foto_name))); //seleciona a extenção da imagem
            $max_width = 100; //define largura máxima
            $max_height = 100; //define altura míxima

            // Carrega a imagem 
            $img = null;

            //Transforma a imagem em JPG
            if ($extensao == 'jpg' || $extensao == 'jpeg') { 
                $img = imagecreatefromjpeg($foto_temp);
            } else if ($extensao == 'png') { 
                $img = imagecreatefrompng($foto_temp);
            } else if ($extensao == 'gif') { 
                $img = imagecreatefromgif($foto_temp); 
            }  else     
                $img = imagecreatefromjpeg($foto_temp); 

            // Se a imagem foi carregada com sucesso, testa o tamanho da mesma
            if ($img) { 
                // Pega o tamanho da imagem e calcula proporção de resize 
                $width  = imagesx($img); 
                $height = imagesy($img); 
                $scale  = min($max_width/$width, $max_height/$height); 
                // Se a imagem é maior que o permitido, encolhe ela! 
                if ($scale < 1) { 
                    $new_width = floor($scale*$width); 
                    $new_height = floor($scale*$height);
                    // Cria uma imagem temporária 
                    $tmp_img = imagecreatetruecolor($new_width, $new_height);
                    // Copia e resize a imagem velha na nova     
                    imagecopyresampled($tmp_img, $img, 0, 0, 0, 0, 
                                    $new_width, $new_height, $width, $height);  
                    imagedestroy($img); 
                    $img = $tmp_img; 
                }           
            }

            //cria imagem no diretório @imagejpeg($img,"diretorio/".$id_noticia) se já tiver com este nome vai substituir
            $localFile = "assets/images/{$id_query}.jpg";
            imagejpeg($img, $localFile); 

            $this->listClients();
        }


        public function formChange($id) {
            $this->ClientModel->listClientSelected($id);
            $result =  $this->ClientModel->getConsult();

            if ($arrayClient = $result->fetch_assoc()){
                require_once("views/templates/header.php");
                require_once("views/templates/nav.php");
                require_once("views/clients/changeClients.php");
                require_once("views/templates/footer.php");
            };
        }

        public function changeData() {
            $arrayClient["id_user"] =  $_POST["id"];
            $arrayClient["name"] = $_POST["name"];
            $arrayClient["email"] = $_POST["email"];
            $arrayClient["tel"] = $_POST["tel"];
            $arrayClient["address"] = $_POST["address"];

            $this->ClientModel->changeClients($arrayClient);
            $this->listClients();
        }

        public function deleteData($id) {
            $this->ClientModel->deleteClients($id);
            $this->listClients();
        }

        public function listClients() {
            $this->ClientModel->listClients();
            $result = $this->ClientModel->getConsult();

            $arrayClients = array();

            while($row = $result->fetch_assoc()) {
                array_push($arrayClients, $row);
            }

            require_once('views/templates/header.php');
            require_once('views/templates/nav.php');
            require_once('views/clients/listClients.php');
            require_once('views/templates/footer.php');
        }
    }
?>