<?php

    function __autoload($class){
        require_once "classes/base.php";
        require_once "classes/employe.php";
    }
    


if(isset($_POST["submit"])){

    $date_p = $_POST["date_p"];
    $heure_d = $_POST["heure_debut_p"];
    $heure_f = $_POST["heure_fin_p"];
    $id_rv = $_POST["id_rv"];
    $id_user = $_POST["id_user"];


    
    $fields = [
        'date_p'=>$date_p,
        'heure_debut_p'=>$heure_d,
        'heure_fin_p'=>$heure_f,
        'id_rv'=>$id_rv,
        'id_user'=>$id_user,
    ]; 
    
    $employe = new Employe();

    $emp = $employe->insert($fields,"planing");
    if($emp){
        header("location:listePlaning.php");
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
                <a class="navbar-brand lien"  href="medecin.php">MEDECIN</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link navi" href="ajouterPlaning.php">Ajouter Planing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listePlaning.php">Planing</a>
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
                <div class="panel-heading"><a href="listePlaning.php"><button class="btn btn-primary">PLANING DISPONIBLE</button></a></div>
                <div class="panel-body">
                <h1>AJOUTER UN PLANING</h1>
                <form action="" method="post">

                    <div class="form-group">
                    <label for="id_user">Id_rdv</label>
                    <input type="text" class="form-control" id="email" placeholder="id planing" name="id_planing" readonly>
                    </div>

                    <div class="form-group">
                    <label for="nom">Date</label>    
                    <input type="date" class="form-control" id="email" placeholder="Date" name="date_p">
                    </div>

                    <div class="form-group">
                    <label for="id_user">Heure Debut</label>
                    <input type="time" class="form-control" id="email" placeholder="Heure debut" name="heure_debut_p">
                    </div>

                    <div class="form-group">
                    <label for="nom">Heure Fin</label>    
                    <input type="time" class="form-control" id="email" placeholder="Heure fin" name="heure_fin_p">
                    </div>

                    <div class="form-group">
                        <label for="id_rv">Id Rv</label>
                        <select name="id_rv" id="" class="form-control">
                            <?php  $employe = new Employe();
                                $recup = $employe->select('rendez_vous');
                                foreach ($recup as $value){
                                    echo '<option>'.$value['id_rv'].' </option>'; /*. ' '.$value['nom_service'] */
                                }
                            ?>
                        </select>
                        
                    </div>

                    <div class="form-group">
                        <label for="id_user">Id User</label>
                        <select name="id_user" id="" class="form-control">
                            <?php  $employe = new Employe();
                                $recup = $employe->select('employe');
                                foreach ($recup as $value){
                                    echo '<option>'.$value['id_user'].' </option>';
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