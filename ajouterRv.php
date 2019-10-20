<?php

    function __autoload($class){
        require_once "classes/base.php";
        require_once "classes/employe.php";
    }
    


if(isset($_POST["submit"])){

    $nomp = $_POST["nom_patient"];
    $prenomp = $_POST["prenom_patient"];
    $daterv = $_POST["date_rv"];
    $heured = $_POST["heure_debut_rv"];
    $heuref = $_POST["heure_fin_rv"];
    
    $fields = [
        'nom_patient'=>$nomp,
        'prenom_patient'=>$prenomp,
        'date_rv'=>$daterv,
        'heure_debut_rv'=>$heured,
        'heure_fin_rv'=>$heuref
    ]; 
    
    $employe = new Employe();

    $emp = $employe->insert($fields,"rendez_vous");
    if($emp){
        header("location:listeRv.php");
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
                <h1></h1>
               <!-- <p>coding for better work</p> -->
            </div>
            <nav class="navbar navbar-expand-md bg-blue navbar-dark fixed-top navigation">
                <a class="navbar-brand"><img src="img/RV.jpeg" class="img-fluid image" width=40 height=></a>
                <a class="navbar-brand lien"  href="secretaire.php">SECRETAIRE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link navi" href="ajouterRv.php">Ajouter un Rendez-Vous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navi" href="listeRv.php">Liste Rendez-Vous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listePlaning.php">Disponibilité Medecin</a>
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
                <div class="panel-heading"><a href="listeRv.php"><button class="btn btn-primary">LISTE DES RENDEZ-VOUS</button></a></div>
                <div class="panel-body">
                <h1>AFFECTER UN RENDEZ-VOUS</h1>
                <form action="" method="post">
                    <div class="form-group">
                    <label for="id_user">Id_rdv</label>
                    <input type="text" class="form-control" id="email" placeholder="id rv" name="id_service" readonly>
                    </div>

                    <div class="form-group">
                    <label for="nom">Nom Patient</label>    
                    <input type="text" class="form-control" id="email" placeholder="Nom Patient" name="nom_patient">
                    </div>

                    <div class="form-group">
                    <label for="id_user">Prenom patient</label>
                    <input type="text" class="form-control" id="email" placeholder="Prenom Patient" name="prenom_patient">
                    </div>

                    <div class="form-group">
                    <label for="nom">Date RV</label>    
                    <input type="date" class="form-control" id="email" placeholder="Date Rv" name="date_rv">
                    </div>

                    <div class="form-group">
                    <label for="id_user">Heure Debut</label>
                    <input type="time" class="form-control" id="email" placeholder="Heure debut" name="heure_debut_rv">
                    </div>

                    <div class="form-group">
                    <label for="nom">Heure Fin</label>    
                    <input type="time" class="form-control" id="email" placeholder="Heure fin" name="heure_fin_rv">
                    </div>

                    <input type="submit" name="submit" class="btn btn-primary">
                </form>
       
        </div>
     </div>
    </body>
</html>