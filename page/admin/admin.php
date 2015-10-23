<?php
    session_start();
?>
<!doctype html>
<html class="no-js" lang="" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../../img/logoflavicon.JPG">
    <script src="../../js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/bootstrap/bootstrapcrerulian.css"/>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/cssAdmin.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/animate.min.css">
    <link rel="stylesheet" href="../../css/login.css">


    <style type="text/css">
        table, td {
            border: 1px solid black;
        }

        table {
            margin:auto;
            text-align: center;
            border-collapse: collapse;
        }

        td {
            padding: 3px;
        }
        input{
            text-align: center;
        }

    </style>
</head>
<body data-spy="scroll" data-target=".navbar">
<!--

CHARGEMENT

-->
<?php
require_once '../connexion.php';
require 'lib/appli.php';
require 'lib/appliManager.class.php';
require 'lib/appliSite.php';
require 'lib/appliSiteManager.class.php';
require 'lib/commande.php';
require 'lib/commandeManager.class.php';
require 'lib/commandeWebManager.class.php';
require 'lib/commandeWeb.php';


$applis=new Appli;

$manager = new appliManager($db);
$manager2 = new appliSiteManager($db);
$manager3=new commandeManager($db);
$manager4=new CommandeWebManager($db);

if(isset($_POST['typeAppli'])){
    $type=$_POST['typeAppli'];
    if($type=="mobile"){
    $appli=new Appli(array(
        'tablette' => $_POST['tablette'],
        'phone' => $_POST['phone'],
        'vitrine' => (int)$_POST['vitrine'],
        'photo' => (int)$_POST['photo'],
        'interface' =>(int) $_POST['interface'],
        'son' => (int)$_POST['son'],
    'connexion' =>(int) $_POST['connexion'],
        'prixPage' =>(int) $_POST['prix'],
        'industrie' =>(int) $_POST['industrie'],
        'technologie' =>(int) $_POST['technologie'],
        'immobilier' =>(int) $_POST['immobilier']
    ));
    $manager->update($appli);
    }else{
        $appl=new AppliSite(array(
            'wordpress' => $_POST['wordpress'],
            'drupal' => $_POST['drupal'],
            'vitrine' => (int)$_POST['vitrine'],
            'Backoffice' => (int)$_POST['Backoffice'],
            'compteUtilisateur' =>(int) $_POST['compteUtilisateur'],
            'appliPersonnalise' => (int)$_POST['appliPersonnalise'],
            'connexion' =>(int) $_POST['connexion'],
            'prixPage' =>(int) $_POST['prixPage'],
            'industrie' =>(int) $_POST['industrie'],
            'technologie' =>(int) $_POST['technologie'],
            'immobilier' =>(int) $_POST['immobilier']
        ));
        $manager2->update($appl);
    }

};
if(isset($_GET['id'])){
    $manager3->delete($_GET['id']);
}
if(isset($_GET['idWeb'])){
    $manager4->delete($_GET['idWeb']);
}
$commandeListe=$manager3->getList();
$commandeListeWeb=$manager4->getList();

?>


<?php
if(isset($_GET['dec'])){
    if($_GET['dec']=="oui"){
        session_destroy();

    }
}
if(isset($_POST['pseudo'])&& isset($_POST['motdepasse'])) {
    $_SESSION['pseudo']=$_POST['pseudo'];
    $_SESSION['motdepasse']=$_POST['motdepasse'];
    if($_POST['pseudo']=='admin'&& $_POST['motdepasse']=='admin'){
        $_SESSION['deconn']=1;
    }
}
?>
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="../../img/logo4.jpg" height="30" WIDTH="60" id="logo" alt="myitbox Projct"/></a>
            <a class="navbar-brand" href="#">My IT Box</a>
        </div>
        <div id="navbar row" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#conteneur"><span class="fa fa-gift"></span> COMMANDE app</a></li>
                <li class="active"><a href="#commandeWebTitre"><span class="fa fa-gift"></span> COMMANDE web</a></li>
                <li ><a href="#mobileBloc"><span class="fa fa-android"></span> PRIX app</a></li>
                <li><a href="#webBloc"><span class="fa fa-hacker-news"></span> PRIX web</a></li>
                <li><a href="../../index.php"><span class="fa fa-arrow-circle-o-left"></span> Revenir au SITE</a></li>
            </ul>



            <?php if(isset($_SESSION['deconn'])){
                if($_SESSION['deconn']==1){?>


                    <a  href="lib/deconnexion.php" id="deconnexion" class="btn btn-primary btn-sm pull-right navbar-btn ">
                        <span class="fa fa-2x fa-sign-out"></span>Deconnexion
                    </a>
                <?php }}?>


        </div><!--/.nav-collapse -->
    </div>
</nav>
<?php
if(isset($_SESSION['pseudo'])&& isset($_SESSION['motdepasse'])) {
    if($_SESSION['pseudo']!="admin" && $_SESSION['motdepasse']!="admin") {
        ?>
        <form id="login" class="news-letter" action="admin.php" method="post">
            <h1 class="news-letter-title">CONNEXION</h1>
            <p> erreur pseudo ou mot de passe</p>
            <input type="text" class="news-letter-input" name="pseudo" placeholder="pseudo" autofocus>
            <input type="password" class="news-letter-input" name="motdepasse" placeholder="MotdePasse" autofocus>
            <input type="submit" value="se connecter" class="news-letter-button">
        </form>
        <?php
    }else if($_SESSION['pseudo']=="admin" && $_SESSION['motdepasse']=="admin") {


            ?>

            <!--
            Commande

            -->

            <section id="conteneur" class="conteneur col col-lg-offset-2 col-lg-8">
                <div class="row" id="commandeTitreBloc">


                    <div id="commandeTitre" class="panel-group col-lg-6 col-lg-offset-3">
                        <h3> LES COMMANDES MOBILES </h3>
                        <?php foreach ($commandeListe as $command) { ?>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" href="#<?php echo $command->getId() . "accordeon" ?>"
                                           data-toggle="collapse" data-parent="#commandeTitre"> De <H6
                                                CLASS="nom"><?php echo $command->getNom() ?></H6>  <span id="caret"
                                                                                                         class="fa fa-caret-down pull-right"></span>
                                        </a>
                                    </h3>
                                </div>
                                <div id="<?php echo $command->getId() . "accordeon" ?>" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                        <ul>
                                            <li>vitrine : <?php echo $command->getVitrine() ?></li>
                                            <li>photos : <?php echo $command->getPhotos() ?></li>
                                            <li>interface : <?php echo $command->getInterface() ?></li>
                                            <li>connexion : <?php echo $command->getConnexion() ?></li>
                                            <li>bref : <?php echo $command->getBref() ?></li>
                                            <li>nom : <?php echo $command->getNom() ?></li>
                                            <li>mail : <?php echo $command->getMail() ?></li>
                                            <li>tel : <?php echo $command->getTel() ?></li>
                                            <a href="admin.php?id=<?php echo $command->getId() ?>"
                                               class="btn btn-danger pull-right">supprimer</a>

                                        </ul>
                                    </div>
                                </div>


                            </div>
                        <?php }
                        ?>

                    </div>

                </div>
                <!--

                  COMMANDE WEB
              -->
                <div class="row" id="commandeWebTitreBloc">


                    <div id="commandeWebTitre" class="panel-group col-lg-6 col-lg-offset-3">
                        <h3> LES COMMANDES WEB </h3>
                        <?php foreach ($commandeListeWeb as $command) { ?>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" href="#<?php echo $command->getId() . "accordeon" ?>"
                                           data-toggle="collapse" data-parent="#commandeWebTitre"> De <H6
                                                CLASS="nom"><?php echo $command->getNom() ?></H6>  <span id="caret"
                                                                                                         class="fa fa-caret-down pull-right"></span>
                                        </a>
                                    </h3>
                                </div>
                                <div id="<?php echo $command->getId() . "accordeon" ?>" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                        <ul>
                                            <li>vitrine : <?php echo $command->getWordpress() ?></li>
                                            <li>photos : <?php echo $command->getDrupal() ?></li>
                                            <li>interface : <?php echo $command->getBackoffice() ?></li>
                                            <li>connexion : <?php echo $command->getConnexion() ?></li>
                                            <li>bref : <?php echo $command->getBref() ?></li>
                                            <li>nom : <?php echo $command->getNom() ?></li>
                                            <li>mail : <?php echo $command->getMail() ?></li>
                                            <li>tel : <?php echo $command->getTel() ?></li>
                                            <a href="admin.php?idWeb=<?php echo $command->getId() ?>"
                                               class="btn btn-danger pull-right">supprimer</a>

                                        </ul>
                                    </div>
                                </div>


                            </div>
                        <?php }
                        ?>

                    </div>

                </div>
                <!--
                APPLICATION Mobile
                -->
                <div class="row" id="mobileBloc">
                    <p id="mobileTitre">APPLICATION Mobile</p>
                    <?php
                    $valeurs = $manager->getUnique();

                    ?>
                    <ul id="mobile" class="list-group col col-lg-8 col-lg-offset-2">
                        <li class="list-group-item">
                            <span class="badge"><?php echo $valeurs->getTablette() ?></span>
                            Tablette
                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $valeurs->getPhone() ?></span>
                            phone
                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $valeurs->getVitrine() ?></span>
                            vitrine
                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $valeurs->getPhoto() ?></span>
                            photo
                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $valeurs->getInterface() ?></span>
                            interface
                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $valeurs->getSon() ?></span>
                            son
                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $valeurs->getConnexion() ?></span>
                            connexion
                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $valeurs->getPrixPage() ?></span>
                            prixPage
                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $valeurs->getIndustrie() ?></span>
                            industrie
                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $valeurs->getTechnologie() ?></span>
                            technologie
                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $valeurs->getImmobilier() ?></span>
                            immobilier
                        </li>

                    </ul>
                    <button class="btn btn-primary btn-sm pull-right navbar-btn " data-toggle="modal" data-target="#mobileModal">
                        <span class="fa fa-2x fa-sign-out"></span>Mettre à jour
                    </button>

                </div>

                <div class="row" id="webBloc">

                    <p id="webTitre">APPLICATION WEB</p>
                </div>
                <button class="btn btn-primary btn-sm pull-right navbar-btn " data-toggle="modal" data-target="#webModal">
                    <span class="fa fa-2x fa-sign-out"></span>Mettre à jour
                </button>
                <?php
                $valeur = $manager2->getUnique();

                ?>
                <ul id="web" class="list-group col col-lg-8 col-lg-offset-2">
                    <li class="list-group-item">
                        <span class="badge"><?php echo $valeur->getWordpress() ?></span>
                        Wordpress
                    </li>
                    <li class="list-group-item">
                        <span class="badge"><?php echo $valeur->getDrupal() ?></span>
                        Drupal
                    </li>
                    <li class="list-group-item">
                        <span class="badge"><?php echo $valeur->getVitrine() ?></span>
                        vitrine
                    </li>
                    <li class="list-group-item">
                        <span class="badge"><?php echo $valeur->getBackoffice() ?></span>
                        Backoffice
                    </li>
                    <li class="list-group-item">
                        <span class="badge"><?php echo $valeur->getCompteUtilisateur() ?></span>
                        Compte utilisateur
                    </li>
                    <li class="list-group-item">
                        <span class="badge"><?php echo $valeur->getAppliPersonnalise() ?></span>
                        Application Personnalisee
                    </li>
                    <li class="list-group-item">
                        <span class="badge"><?php echo $valeur->getConnexion() ?></span>
                        connexion
                    </li>
                    <li class="list-group-item">
                        <span class="badge"><?php echo $valeur->getPrixPage() ?></span>
                        prixPage
                    </li>
                    <li class="list-group-item">
                        <span class="badge"><?php echo $valeur->getIndustrie() ?></span>
                        industrie
                    </li>
                    <li class="list-group-item">
                        <span class="badge"><?php echo $valeur->getTechnologie() ?></span>
                        technologie
                    </li>
                    <li class="list-group-item">
                        <span class="badge"><?php echo $valeur->getImmobilier() ?></span>
                        immobilier
                    </li>

                </ul>

                </div>


                <div id="mobileModal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="mobileLabel">
                    <div class="modal-dialog ">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="mobileLabel">Changement de Prix MOBILE</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal col-lg-7" method="post" action="admin.php">
                                    <div class="form-group">


                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-2 col-lg-offset-1 ">Tablette: </label>

                                                <div class="col-lg-8">
                                                    <input type="text" name="tablette" class="form-control" id="tabletteMobile"
                                                           value="<?php echo $valeurs->getTablette() ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-2 col-lg-offset-1 ">Phone : </label>

                                                <div class="col-lg-8">
                                                    <input type="text" name="phone" class="form-control" id="phoneMobile"
                                                           value="<?php echo $valeurs->getPhone() ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="textarea" class="col-lg-2 col-lg-offset-1">Vitrine :</label>

                                                <div height="300px" class="col-lg-8">
                                                    <input type="text" name="vitrine" class="form-control" id="vitrineMobile"
                                                           value="<?php echo $valeurs->getVitrine() ?>"/></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-2 col-lg-offset-1 ">Photo: </label>

                                                <div class="col-lg-8">
                                                    <input type="text" name="photo" class="form-control" id="photoMobile"
                                                           value="<?php echo $valeurs->getPhoto() ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-2 col-lg-offset-1 ">Interface : </label>

                                                <div class="col-lg-8">
                                                    <input type="text" name="interface" class="form-control" id="interfaceMobile"
                                                           value="<?php echo $valeurs->getInterface() ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="textarea" class="col-lg-2 col-lg-offset-1">Son :</label>

                                                <div height="300px" class="col-lg-8">
                                                    <input type="text" name="son" class="form-control" id="sonMobile"
                                                           value="<?php echo $valeurs->getSon() ?>"/></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-2 col-lg-offset-1 ">Connexion : </label>

                                                <div class="col-lg-8">
                                                    <input type="text" name="connexion" class="form-control" id="connexionMobile"
                                                           value="<?php echo $valeurs->getConnexion() ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-2 col-lg-offset-1 ">Prix page: </label>

                                                <div class="col-lg-8">
                                                    <input type="text" name="prix" class="form-control" id="prixMobile"
                                                           value="<?php echo $valeurs->getPrixPage() ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="textarea" class="col-lg-2 col-lg-offset-1">Industrie:</label>

                                                <div height="300px" class="col-lg-8">
                                                    <input type="text" name="industrie" class="form-control" id="industrieWeb"
                                                           value="<?php echo $valeurs->getIndustrie() ?>"/></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-2 col-lg-offset-1 ">Technologie: </label>

                                                <div class="col-lg-8">
                                                    <input type="text" name="technologie" class="form-control" id="technologieWeb"
                                                           value="<?php echo $valeurs->getTechnologie() ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="textarea" class="col-lg-2 col-lg-offset-1">Immobilier:</label>

                                                <div height="300px" class="col-lg-8">
                                                    <input type="text" name="typeAppli" class="form-control" id="immobilierWeb"
                                                           value="mobile"/>

                                                    <input type="text" name="immobilier" class="form-control" id="immobilierWeb"
                                                           value="<?php echo $valeurs->getImmobilier() ?>"/></div>
                                            </div>
                                        </div>
                                    </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">annuler</button>
                                <button type="submit" class="btn btn-primary"/>
                                Sauvegarder</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--


                modal web

                -->
                <div id="webModal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="webLabel">
                    <div class="modal-dialog ">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="webLabel">Changement prix WEB</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal col-lg-7" action="admin.php" method="post">
                                    <div class="form-group">


                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-2 col-lg-offset-1 ">wordpress: </label>

                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="wordpress" id="wordpressWeb"
                                                           value="<?php echo $valeur->getWordpress() ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-2 col-lg-offset-1 ">Drupal : </label>

                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="drupal" id="drupalWeb"
                                                           value="<?php echo $valeur->getDrupal() ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="textarea" class="col-lg-2 col-lg-offset-1">Vitrine :</label>

                                                <div height="300px" class="col-lg-8">
                                                    <input type="text" class="form-control" name="vitrine" id="vitrineWeb"
                                                           value="<?php echo $valeur->getVitrine() ?>"/></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-2 col-lg-offset-1 ">Backoffice : </label>

                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="Backoffice" id="backofficeWeb"
                                                           value="<?php echo $valeur->getBackoffice() ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-2 col-lg-offset-1 ">Compte Utilisateur : </label>

                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="compteUtilisateur" id="compteWeb"
                                                           value="<?php echo $valeur->getCompteUtilisateur() ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="textarea" class="col-lg-2 col-lg-offset-1">Application Personnalise
                                                    :</label>

                                                <div height="300px" class="col-lg-8">
                                                    <input type="text" class="form-control" name="appliPersonnalise" id="appliWeb"
                                                           value="<?php echo $valeur->getAppliPersonnalise() ?>"/></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-2 col-lg-offset-1 ">Connexion : </label>

                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="connexion" id="connexionWeb"
                                                           value="<?php echo $valeur->getConnexion() ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-2 col-lg-offset-1 ">Prix page: </label>

                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="prixPage" id="prixWeb"
                                                           value="<?php echo $valeur->getPrixPage() ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="textarea" class="col-lg-2 col-lg-offset-1">Industrie:</label>

                                                <div height="300px" class="col-lg-8">
                                                    <input type="text" class="form-control" name="industrie" id="industrieWeb"
                                                           value="<?php echo $valeur->getIndustrie() ?>"/></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-2 col-lg-offset-1 ">Technologie: </label>

                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="technologie" id="technologieWeb"
                                                           value="<?php echo $valeur->getTechnologie() ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="textarea" class="col-lg-2 col-lg-offset-1">Immobilier:</label>

                                                <div height="300px" class="col-lg-8">
                                                    <input type="text" name="typeAppli" class="form-control" id="immobilierWeb"
                                                           value="web"/>

                                                    <input type="text" class="form-control" name="immobilier" id="immobilierWeb"
                                                           value="<?php echo $valeur->getImmobilier() ?>"/></div>
                                            </div>
                                        </div>
                                    </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">annuler</button>
                                <button type="submit" class="btn btn-primary"> Sauvegarder</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <?php
    }else{
                    ?>
                    <form id="login" class="news-letter" action="admin.php" method="post">
                        <h1 class="news-letter-title">CONNEXION</h1>
                        <p> erreur pseudo ou mot de passe</p>
                        <input type="text" class="news-letter-input" name="pseudo" placeholder="pseudo" autofocus>
                        <input type="password" class="news-letter-input" name="motdepasse" placeholder="MotdePasse" autofocus>
                        <input type="submit" value="se connecter" class="news-letter-button">
                    </form>
                    <?php
                }}
   if (!isset($_SESSION['pseudo'])&& !isset($_SESSION['motdepasse'])) {
       ?>
       <form id="login" class="news-letter" action="admin.php" method="post">
           <h1 class="news-letter-title">CONNEXION</h1>
           <input type="text" class="news-letter-input" name="pseudo" placeholder="pseudo" autofocus>
           <input type="PASSWORD" class="news-letter-input" name="motdepasse" placeholder="MotdePasse" autofocus>
           <input type="submit" value="se connecter" class="news-letter-button">
       </form>
       <?php
   }
    ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../../js/vendor/jquery-1.11.3.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/main.js"></script>
<script src="../../js/calcul.js"></script>
<script src="../../js/calcul2.js"></script>
<script src="../../js/jquery.flexslider.js"></script>
<script src="../../js/jquery.simple-text-rotator.js"></script>

<script src="../../js/smoothscroll.js"></script>
<script src="../../js/commande.js"></script>
<script src="../../js/wow.min.js"></script>

</section>
</body>
</html>