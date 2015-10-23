<?php
/**
 * Created by PhpStorm.
 * User: Andriants
 * Date: 02/09/2015
 * Time: 09:49
 */
require_once 'connexion.php';

$vitrine=$_POST['vitrine'];
$photos=$_POST['photos'];
$interface=$_POST['interface'];
$connexion=$_POST['connexion'];
$bref=$_POST['bref'];
$nom=$_POST['nom'];
$mail=$_POST['mail'];
$tel=$_POST['tel'];

$req = $db->prepare('INSERT INTO commande(vitrine, photos, interface, connexion, bref, nom,mail,tel) VALUES(:vitrine, :photos, :interface, :connexion, :bref, :nom,:mail,:tel)');
$req->execute(array(
    'vitrine' => $vitrine,
    'photos' => $photos,
    'interface' => $interface,
    'connexion' => $connexion,
    'bref' => $bref,
    'nom' => $nom,
    'mail' => $mail,
    'tel' => $tel
));
echo "votre commande est enregistrer";