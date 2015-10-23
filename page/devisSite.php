<?php
/**
 * Created by PhpStorm.
 * User: Andriants
 * Date: 01/09/2015
 * Time: 16:23
 */
$reponses = $db->query('SELECT * FROM prixSite');
$tableau2=array();
while($donnees=$reponses->fetch(PDO::FETCH_ASSOC)){
   $tableau2['wordpress']=$donnees['wordpress'];
    $tableau2['drupal']=$donnees['drupal'];
    $tableau2['vitrine']=$donnees['vitrine'];
    $tableau2['Backoffice']=$donnees['Backoffice'];
    $tableau2['compteUtilisateur']=$donnees['compteUtilisateur'];
    $tableau2['appliPersonnalise']=$donnees['appliPersonnalise'];
    $tableau2['connexion']=$donnees['connexion'];
    $tableau2['prixPage']=$donnees['prixPage'];
    $tableau2['industrie']=$donnees['industrie'];
    $tableau2['immobilier']=$donnees['immobilier'];
    $tableau2['technologie']=$donnees['technologie'];

};
$reponses->closeCursor();