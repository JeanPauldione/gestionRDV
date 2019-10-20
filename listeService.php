<?php

    function __autoload($class){
        require_once "classes/base.php";
        require_once "classes/employe.php";
    }
    
    if(isset($_GET['del'])){
        $id = $_GET['del'];

        $service = new Employe();
        $result = $service->supprime("servic","id_service", $id);
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
                <div class="panel-heading"><a href="ajouterService.php"><button class="btn btn-primary">AJOUTER UN SERVICES</button></a></div>
                <div class="panel-body">
         <table class="table table-bordered">
         <h1>LISTE DES SERVICES</h1>
            <thead>
                <tr>
                    <th scope="col">id_service</th>
                    <th scope="col">Nom Service</th>
                    <th scope="col">id_admin</th>
                    <th scope="col">action</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                    $employe = new Employe();
                    $rows = $employe->select("servic");

                    foreach($rows as $row){
                        
                        ?>

                        <tr>
                            <th scope="row"><?php echo $row['id_service']; ?></th>
                            <td><?php echo $row['nom_service']; ?></td>
                            <td><?php echo $row['id_admin']; ?></td>
                            <td><a class="btn btn-sm btn-primary" href="editerService.php?id=<?php echo $row['id_service'];?>">MODIFIER</a> 
                            <a class="btn btn-sm btn-danger" onclick="return confirm('Etes vous sur de supprimer.');" href="listeService.php?del=<?php echo $row['id_service'];?>">SUPPRIMER</a></td>
                        </tr>
                <?php
                    }

                ?>
            </tbody>
        </table>
        </div>
     </div>
    </body>
</html>
