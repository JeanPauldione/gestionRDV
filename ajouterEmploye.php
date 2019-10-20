<?php

    function __autoload($class){
        require_once "classes/base.php";
        require_once "classes/employe.php";

    }
    



if(isset($_POST["submit"])){

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $specialite = $_POST["specialite"];
    $login = $_POST["login"];
    $password= $_POST["password"];
    $service = $_POST["id_service"];
    $role= $_POST["id_role"];
    
    
    $fields = [

        "nom" => $nom,
        "prenom" => $prenom,
        "email" => $email,
        "tel" => $tel,
        "specialite" => $specialite,
        "login" => $login,
        "password" => $password,
        "id_service" => $service,
        "id_role" => $role,
        

    ]; 
    
    $employe = new Employe();

   $emp = $employe->insert($fields, "employe");
   if($emp){
       header("location:listeEmploye.php");
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
                <h3>Gestion Rendez-Vous</h3>
               <!-- <p>coding for better work</p> -->
            </div>
            <nav class="navbar navbar-expand-md bg-blue navbar-dark fixed-top navigation">
               <a class="navbar-brand"><img src="img/RV.jpeg" class="img-fluid image" width=40 height=></a>
                <a class="navbar-brand lien"  href="#">ADMIN</a>
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
                <div class="panel-heading"><a href="listeEmploye.php"><button class="btn btn-primary">LISTE DES EMPLOYES</button></a></div>
                <div class="panel-body">
                <h1>AJOUTER DES EMPLOYES</h1>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="id_user">Id employe</label>
                        <input type="text" class="form-control" id="email" placeholder="id employe" name="id_user" readonly>
                    </div>

                    <div class="form-group">
                        <label for="id_user">Nom</label>
                        <input type="text" class="form-control" id="email" placeholder="Votre Nom" name="nom" >
                    </div>

                    <div class="form-group">
                        <label for="id_user">Prenom</label>
                        <input type="text" class="form-control" id="email" placeholder="Votre Prenom" name="prenom">
                    </div>
                    
                    <div class="form-group">
                        <label for="id_user">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Votre Email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="id_user">Telephone</label>
                        <input type="tel" class="form-control" id="email" placeholder="Votre Numero" name="tel">
                    </div>

                    <div class="form-group">
                        <label for="id_user">Specialite</label>
                        <input type="text" class="form-control" id="email" placeholder="Votre Specialite" name="specialite">
                    </div>

                    <div class="form-group">
                        <label for="id_user">Login</label>
                        <input type="text" class="form-control" id="email" placeholder="Votre Login" name="login" >
                    </div>
                    
                    <div class="form-group">
                        <label for="id_user">Password</label>
                        <input type="text" class="form-control" id="email" placeholder="Votre mot de passe" name="password" >
                    </div>

                    <div class="form-group">
                        <label for="id_user">Id service</label>
                        <select name="id_service" id="" class="form-control">
                            <?php  $employe = new Employe();
                                $recup = $employe->select('servic');
                                foreach ($recup as $value){
                                    echo '<option>'.$value['id_service'].' </option>'; /*. ' '.$value['nom_service'] */
                                }
                            ?>
                        </select>
                        
                    </div>

                    <div class="form-group">
                        <label for="id_user">Id_role</label>
                        <select name="id_role" id="" class="form-control">
                            <?php  $employe = new Employe();
                                $recup = $employe->select('role');
                                foreach ($recup as $value){
                                    echo '<option>'.$value['id_role'].' </option>';
                                }
                            ?>
                        </select>
                    </div>

                    <input type="submit" name="submit" class="btn btn-primary">
                </form>
       
        </div>
     </div>
    </body>
</html>
