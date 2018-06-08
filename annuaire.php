<?php 
// on se connecte à mysql :
try  

{
 $bdd = new PDO( 'mysql:host=localhost;dbname=annuaire2;charset=utf8','dania','0000');
}

// en cas d'erreur on affiche un message :
catch (Exception $e)
{
      
        die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM contacts') ;

$cpt = $bdd->query('SELECT COUNT(*) AS nb_contacts FROM contacts') ;


while($donnees=$reponse->fetch()){

      echo '<p>Nom user= ' . $donnees['nom'];

}

while($result=$cpt->fetch()){

      echo '<p>Nombre de contacts= ' . $result[0];

}

 ?>
