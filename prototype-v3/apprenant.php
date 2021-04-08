<?php
class Apprenant {
    public $Nom;
    public $Prenom;
    public $Email;
      
    

    public function setNom($Nom){
        $this->Nom = $Nom;
    }
    public function getNom(){
        return $this->Nom;
    }

    public function setPrenom($Prenom){
        $this->Prenom = $Prenom;
    }
    public function getPrenom(){
        return $this->Prenom;
    }


}
?>