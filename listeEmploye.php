<?php

    function __autoload($class){
        require_once "classes/base.php";
        require_once "classes/employe.php";

    }
    
    if(isset($_GET['del'])){
        $id = $_GET['del'];

        $employe = new Employe();
        $result = $employe->supprime("employe","id_user", $id);
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
                 <h3>Gestion Rendez-Vous</h3>
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
                <div class="panel-heading"><a href="ajouterEmploye.php"><button class="btn btn-primary">AJOUTER UN EMPLOYE</button></a></div>
                <div class="panel-body">
                <h1>LISTE DES EMPLOYES</h1>
         <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">iduser</th>
                    <th scope="col">nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">email</th>
                    <th scope="col">tel</th>
                    <th scope="col">specialite</th>
                    <th scope="col">login</th>
                    <th scope="col">password</th>
                    <th scope="col">service</th>
                    <th scope="col">idrole</th>
                    <th scope="col">idadmin</th>
                    <th scope="col">action</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                    $employe = new Employe();
                    $rows = $employe->select('employe');

                    foreach($rows as $row){
                        
                        ?>

                        <tr>
                            <th scope="row"><?php echo $row['id_user']; ?></th>
                            <td><?php echo $row['nom']; ?></td>
                            <td><?php echo $row['prenom']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['tel']; ?></td>
                            <td><?php echo $row['specialite']; ?></td>
                            <td><?php echo $row['login']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['id_service']; ?></td>
                            <td><?php echo $row['id_role']; ?></td>
                            <td><?php echo $row['id_admin']; ?></td> 
                            <td><a class="btn btn-sm btn-primary" href="editEmploye.php?id=<?php echo $row['id_user'];?>">MODIFIER</a> 
                            <a class="btn btn-sm btn-danger" onclick="return confirm('Etes vous sur de supprimer.');" href="listeEmploye.php?del=<?php echo $row['id_user'];?>">SUPPRIMER</a></td>
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