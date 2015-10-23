<?php
/**
 * Created by PhpStorm.
 * User: Andriants
 * Date: 01/09/2015
 * Time: 16:21
 */
$reponse = $db->query('SELECT * FROM prix');
$tableau=array();
while($donnees=$reponse->fetch(PDO::FETCH_ASSOC)){
    $tableau['tablette']=$donnees['tablette'];
    $tableau['phone']=$donnees['phone'];
    $tableau['vitrine']=$donnees['vitrine'];
    $tableau['photo']=$donnees['photo'];
    $tableau['interface']=$donnees['interface'];
    $tableau['son']=$donnees['son'];
    $tableau['connexion']=$donnees['connexion'];
    $tableau['prixPage']=$donnees['prixPage'];
    $tableau['industrie']=$donnees['industrie'];
    $tableau['immobilier']=$donnees['immobilier'];
    $tableau['technologie']=$donnees['technologie'];

};
$reponse->closeCursor();