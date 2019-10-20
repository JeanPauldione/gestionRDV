<?php

    function __autoload($class){
        require_once "classes/base.php";
        require_once "classes/employe.php";
    }
    


if(isset($_POST["submit"])){

    $service = $_POST["nom_service"];
    
    $fields = [
        'nom_service'=>$service
    ]; 
    
    $employe = new Employe();

    $emp = $employe->insert($fields,"servic");
   if($emp){
       header("location:listeService.php");
   }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="CSS/Style.css">
            <link rel="stylesheet" href="CSS/bootstrap.min.css">
    </head>
    <body>

    <div class="jumbotron" style="margin-top:70px;">
                <h1>Gestion Rendez-Vous</h1>
               <!-- <p>coding for better work</p> -->
            </div>
            <nav class="navbar navbar-expand-md bg-blue navbar-dark fixed-top navigation">
               <a class="navbar-brand"><img src="img/RV.jpeg" class="img-fluid image" width=40 height=></a>
                <a class="navbar-brand lien"  href="admin.php">ADMIN</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link navi" href="listeService.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listeEmploye.php">Employe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Log out</a>
                        </li>   
                        </ul>
                    </div>  
                </nav>
                <br>

        <div class="container contenu">
            <div class="panel panel-success margetop">   
                <div class="panel-heading"><a href="listeService.php"><button class="btn btn-primary">LISTE DES SERVICES</button></a></div>
                <div class="panel-body">
                <h1>AJOUTER UN SERVICE</h1>
                <form action="" method="post">
                    <div class="form-group">
                    <label for="id_user">Id_service</label>
                    <input type="text" class="form-control" id="email" placeholder="id" name="id_service" readonly>
                    </div>

                    <div class="form-group">
                    <label for="nom">Nom Service</label>    
                    <input type="text" class="form-control" value="" placeholder="Nom Service" name="nom_service">
                    </div>

                    <input type="submit" name="submit" class="btn btn-primary">
                </form>
       
        </div>
     </div>
    </body>
</html>