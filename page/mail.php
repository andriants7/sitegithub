<?php
/**
 * Created by PhpStorm.
 * User: Andriants
 * Date: 03/09/2015
 * Time: 11:31
 */
if (get_magic_quotes_gpc())
{

    $nom = stripslashes($_POST['nom']);
    $expediteur = stripslashes($_POST['mail']);
    $objet = stripslashes($_POST['objet']);
    if(isset($_POST['cv']))$file1=stripslashes($_POST['cv']);
    if(isset($_POST['lm']))  $file2=stripslashes($_POST['lm']);
    if(isset($_POST['projets']))  $file3=stripslashes($_POST['projets']);
    $message = stripslashes($_POST['message']);
}
else
{

    $nom = $_POST['nom'];
    $expediteur = $_POST['mail'];
    $objet = $_POST['objet'];
    if(isset($_POST['cv']))$file1=stripslashes($_POST['cv']);
    if(isset($_POST['lm']))  $file2=stripslashes($_POST['lm']);
    if(isset($_POST['projets']))  $file3=stripslashes($_POST['projets']);
    $message = $_POST['message'];
}
echo $file1;


//$to = 'recrutement@my-it-box.com';
$to = 'noments77@gmail.com';
// Subject
$subject = $objet;

// clé aléatoire de limite
$boundary = md5(uniqid(microtime(), TRUE));

// Headers
$headers = 'From: '.$nom.' <'.$expediteur.'>'."\r\n\r\n";
/*$headers .= 'Mime-Version: 1.0'."\r\n";
$headers .= 'Content-Type: multipart/mixed;boundary='.$boundary."\r\n";
$headers .= "\r\n";*/

// Message
//$msg = 'Message'.$message."\r\n\r\n";
$msg =$message."\r\n";

// Message HTML
/*$msg .= '--'.$boundary."\r\n";
$msg .= 'Content-type: text/html; charset=utf-8'."\r\n\r\n";*/
//$msg .= 'nom:'.$nom."\r\n";

// Pièce jointe 1
$file_name = $file1;
if (file_exists($file_name))
{
    $file_type = filetype($file_name);
    $file_size = filesize($file_name);

    $handle = fopen($file_name, 'r') or die('File '.$file_name.'can t be open');
    $content = fread($handle, $file_size);
    $content = chunk_split(base64_encode($content));
    $f = fclose($handle);

    $msg .= '--'.$boundary."\r\n";
    $msg .= 'Content-type:'.$file_type.';name='.$file_name."\r\n";
    $msg .= 'Content-transfer-encoding:base64'."\r\n\r\n";
    $msg .= $content."\r\n";
}

// Pièce jointe 2
$file_name = $file2;
if (file_exists($file_name))
{
    $file_type = filetype($file_name);
    $file_size = filesize($file_name);

    $handle = fopen($file_name, 'r') or die('File '.$file_name.'can t be open');
    $content = fread($handle, $file_size);
    $content = chunk_split(base64_encode($content));
    $f = fclose($handle);

    $msg .= '--'.$boundary."\r\n";
    $msg .= 'Content-type:'.$file_type.';name='.$file_name."\r\n";
    $msg .= 'Content-transfer-encoding:base64'."\r\n\r\n";
    $msg .= $content."\r\n";
}
//pièce jointes 3
$file_name = $file3;
if (file_exists($file_name))
{
    $file_type = filetype($file_name);
    $file_size = filesize($file_name);

    $handle = fopen($file_name, 'r') or die('File '.$file_name.'can t be open');
    $content = fread($handle, $file_size);
    $content = chunk_split(base64_encode($content));
    $f = fclose($handle);

    $msg .= '--'.$boundary."\r\n";
    $msg .= 'Content-type:'.$file_type.';name='.$file_name."\r\n";
    $msg .= 'Content-transfer-encoding:base64'."\r\n\r\n";
    $msg .= $content."\r\n";
}

// Fin
//$msg .= '--'.$boundary."\r\n";

// Function mail()
mail($to, $subject, $msg, $headers);
