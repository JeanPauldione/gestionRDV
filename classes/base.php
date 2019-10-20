<?php

class base{

    protected function  connect(){

            $serveur = "localhost";
            $login = "root";
            $pass = "vivithioro1";

            try{
                $connexion = new PDO ("mysql:host=$serveur;dbname=jprv", $login, $pass) ;
                $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $connexion;
                }

            catch(PDOException $e){
                echo "echec de la connexion : " .$e->getMessage() ;
                }

    }
}

            