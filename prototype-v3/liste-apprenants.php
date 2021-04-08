<?php

require("./apprenant.php");

$liste_apprenants = [];


 $apprenant = new Apprenant;
$apprenant-> Nom = "Hamidouche";
$apprenant-> Prenom = "Asmae";
 $liste_apprenants[] = $apprenant ;

 $apprenant = new Apprenant;
  $apprenant->Nom = "toznani";
 $apprenant-> Prenom = "laila";
 $liste_apprenants[] = $apprenant ;

 $apprenant = new Apprenant;
 $apprenant->Nom = "Najale";
 $apprenant-> Prenom = "Sebbar";
 $liste_apprenants[] = $apprenant ;


 $liste_apprenants_json =  json_encode($liste_apprenants);
 
 
 echo $liste_apprenants_json;
?>
