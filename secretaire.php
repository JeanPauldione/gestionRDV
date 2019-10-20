<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
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
            </div>
            <nav class="navbar navbar-expand-md bg-blue navbar-dark fixed-top navigation">
                <!--<a class="navbar-brand"><img src="img/RV.jpeg" class="img-fluid image" width=40 height=></a> -->
                <a class="navbar-brand lien"  href="secretaire.php"><button class="bouton">SECRETAIRE</button></a>  
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link navi" href="ajouterRv.php"><button class="bouto">AJOUT RV</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navi" href="listeRv.php"><button class="bouto">LISTE RV</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listePlaning.php"><button class="bouto">DISPONIBILITE MEDECIN</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><button class="bouto">LOG OUT </button></a>
                        </li>  
                        </ul>
                    </div>  
                </nav>
                <br>
                <img src="CSS/RDV.jpg" class="img-fluid">

    </body>
</html>