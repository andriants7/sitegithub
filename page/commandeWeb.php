<?php
/**
 * Created by PhpStorm.
 * User: Andriants
 * Date: 03/09/2015
 * Time: 09:05
 */
require_once 'connexion.php';

$wordpress=$_POST['wordpress'];
$drupal=$_POST['drupal'];
$backoffice=$_POST['backoffice'];
$connexion=$_POST['connexion'];
$bref=$_POST['bref'];
$nom=$_POST['nom'];
$mail=$_POST['mail'];
$tel=$_POST['tel'];

$req = $db->prepare('INSERT INTO commandeWeb(wordpress, drupal, backoffice, connexion, bref, nom,mail,tel) VALUES(:wordpress, :drupal, :backoffice, :connexion, :bref, :nom,:mail,:tel)');
$req->execute(array(
    'wordpress' => $wordpress,
    'drupal' => $drupal,
    'backoffice' => $backoffice,
    'connexion' => $connexion,
    'bref' => $bref,
    'nom' => $nom,
    'mail' => $mail,
    'tel' => $tel
));
echo "votre commande est enregistrer";