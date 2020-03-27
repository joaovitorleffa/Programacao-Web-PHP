<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/style/style.css">
  <title>Document</title>
</head>
<body>
  <?php
    if (!isset($_GET['c'])) {
      require_once('controllers/MainController.php');
      $Main = new MainController();  
      $Main->index();
    } else {
      switch ($_REQUEST['c']) {
        case 's':
          require_once("controllers/MainController.php");
          $Main = new MainController();

          if(!isset($_GET['a'])) {
            $Main->index();
          } else {
            switch($_REQUEST['a']) {
              case 'h': $Main->index();
              break;
              case 's': $Main->about();
              break;
              case 'p':$Main->products();
              break;
              case 'c':$Main->contact();
              break;
            }
          }
        break;
        case 'c':
          require_once("controllers/ClientsController.php");
          $cliente = new ClientsController();
          if(!isset($_GET['a'])){
            $cliente ->index();
          } else {
            switch($_REQUEST['a']){
              case 'cc': $cliente -> formRegister();
              break;
              case 'cca': $cliente -> registerClient();
              break;
              case 'lc': $cliente -> listClients();
              break;
            }
          }
        break;
      }
    }
  ?>
</body>
</html>