<!doctype html>
<html class="no-js" lang="" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" ng-app="monApp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My IT Box</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon-16x16.png">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/bootstrap/bootstrapblanc.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.min.css">

</head>
<!--
body scroll spy

-->
<body data-spy="scroll" id="bod" data-target=".navbar">
<?php
       /*  require_once 'page/connexion.php';
        require 'page/devisAppli.php';
        require 'page/devisSite.php'; */
?>

<div id="acceuil" class="row " >
               <!--
                BARRE NAVIGATION
                -->

                            <nav class="navbar navbar-default  navbar-fixed-top" id="navigation">
                                <div class="container">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navigTarget" aria-expanded="false" aria-controls="navbar">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a  class="navbar-brand" href="#acceuil"><img src="img/Logogrand.png" height="40" WIDTH="100" id="logo" alt="myitbox Projct"/><br/><span class="lettre">Vos boxes IT à tout petit prix</span></a>
                                    </div>
                                    <div id="na navigTarget row" class="navbar-collapse collapse navigTarget ">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="#acceuil"><span class="fa fa-archive"></span> Nos valeurs</a></li>
                                            <li ><a href="#actualites"><span class="fa fa-newspaper-o"></span> Actualités</a></li>
                                            <li><a href="#gamme"><span class="fa fa-inbox"></span>  Nos Services</a></li>

                                        </ul>


                                            <button  class="btn btn-primary btn-sm navbar-btn pull-right " data-toggle="modal" data-target="#rejoin"><span class="fa fa-2x fa-calculator"></span> Commander My IT Box</button>






                                    </div><!--/.nav-collapse -->
                                </div>
                            </nav>
                <!--
                PREMIER PAGE

                -->

        <div class="flexslider">
                    <ul class="slides">
                        <li class="slide3">

                            <div class="texteAcceuil">
                                <h2 class="wow fadeInDown" data-wow-delay="4000">Ensemble vers la 3ième révolution industrielle !</h2>
                                <hr class="separateur"/>
                                <br/><br/>

                                <a href="#equipe" class="smoothScroll btn btn-lg btn-info wow fadeInDown" data-wow-delay="5000">Nous contacter</a>
                            </div>

                        </li>
                        <li class="slide1">


                                <div class="texteAcceuil">
                                    <h2 class="wow fadeInDown" data-wow-delay="4000">L’accessibilité à la digitalisation pour tous</h2>
                                    <hr  class="separateur"/>
                                    <br/><br/>


                                    <a href="#mission" class="smoothScroll btn btn-lg btn-info wow fadeInDown" data-wow-delay="5000">Qui sommes-nous?</a>
                                </div>

                        </li>
                        <li class="slide2">


                                <div class="texteAcceuil">
                                    <h2 class="wow fadeInDown" data-wow-delay="4000">Des boxes clefs en main sur mesure</h2>
                                    <hr class="separateur"/>
                                    <br/><br/>


                                    <a href="#gamme" class="smoothScroll btn btn-lg btn-info wow fadeInDown" data-wow-delay="5000">Nos produits</a>
                                </div>

                        </li>

                    </ul>
                </div>


            </div>
<!--

UN peu plus


-->
        <section id="mission">
            <div class="container">
                <div class="row">
                    <div class="text-center col-md-12 wow fadeInDown" data-wow-delay="4000">
                        <h3>My IT Box</h3>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-8 text-center">
                        <p>L'évolution numérique n'est pas faite pour vous? Trop chère, trop compliqué, trop long.</p>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-sm-6 col-md-4 wow fadeInLeft" data-wow-delay="4000">
                        <div class="media">
                            <i class="fa fa-cog pull-left media-object"></i>
                            <div class="media-body">
                                <h4 class="media-heading">INNOVATION</h4>
                                <p>Des solutions à la pointe des nouvelles technologies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeInDown" data-wow-delay="4000">
                        <div class="media">
                            <i class="fa fa-institution pull-left media-object"></i>
                            <div class="media-body">
                                <h4 class="media-heading">INDUSTRIALISATION</h4>
                                <p>Des prix compétitifs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeInRight" data-wow-delay="4000">
                        <div class="media">
                            <i class="fa fa-desktop pull-left media-object"></i>
                            <div class="media-body">
                                <h4 class="media-heading">ACCESSIBILITÉ</h4>
                                <p>Un accompagnement personnalisé et sans frontière</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeInLeft" data-wow-delay="4000">
                        <div class="media">
                            <i class="fa fa-heart pull-left media-object"></i>
                            <div class="media-body">
                                <h4 class="media-heading">ENGAGEMENT</h4>
                                <p>Une équipe dévouée à votre réussite</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeInDown" data-wow-delay="4000">
                        <div class="media">
                            <i class="fa fa-laptop pull-left media-object"></i>
                            <div class="media-body">
                                <h4 class="media-heading">PROXIMITÉ</h4>
                                <p>Des services taillés sur mesure à vos besoins</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeInRight" data-wow-delay="4000">
                        <div class="media">
                            <i class="fa fa-plus pull-left media-object"></i>
                            <div class="media-body">
                                <h4 class="media-heading">VALEUR AJOUTÉE</h4>
                                <p>D'une technologie vers un véritable facteur différentiant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--
ACTUALITES

-->



<div id="actualites">
    <section id="mission" >
        <div class="col-md-12">
            <h2 class="text-center text-uppercase">ACTUALITES</h2>
            <hr>
        </div>

        <ng-view class="actu"></ng-view>
    </section>

</div>

<!--

GAMME DE PRODUITS

-->
<div class="content-section" id="gamme">
    <div class="container">
        <div class="row">
            <div class="heading-section col-md-12 text-center">
                <h2 id="noservice">Nos Services</h2>

            </div> <!-- /.heading-section -->
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="service-item wow fadeInUp" data-wow-delay="4000" id="service-1">
                    <div class="service-icon">
                        <i class="fa fa-3x fa-mobile-phone"></i>
                    </div> <!-- /.service-icon -->
                    <div class="service-content">
                        <div class="inner-service">
                            <h3>Applications mobiles</h3>
                            <p>Que vous soyez un grand
                                groupe, une PME, une jeune start up ou un indépendant, nous développons pour vous
                                tous types d’applications (Windows, Android, Mac OS)</p>
                        </div>
                    </div> <!-- /.service-content -->
                    <button class="btn btn-info click">Applications mobiles</button>
                </div> <!-- /#service-1 -->
            </div> <!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="service-item wow fadeInLeft" data-wow-delay="4000" id="service-2">
                    <div class="service-icon">
                        <i class="fa fa-3x fa-wordpress"></i>
                    </div> <!-- /.service-icon -->
                    <div class="service-content">
                        <div class="inner-service">
                            <h3>Site internet innovant</h3>
                            <p>Nous proposons de développer pour vous à prix très attractif des sites internet en All-In-One page pour améliorer votre visibilité sur la toile. Sur demande, nous développons des modules
                                spécifiques propre à votre entreprise.</p>
                        </div>
                    </div> <!-- /.service-content -->
                    <button class="btn btn-info click">Site internet innovant</button>
                </div> <!-- /#service-1 -->
            </div> <!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="service-item wow fadeInDown" data-wow-delay="4000" id="service-3">
                    <div class="service-icon">
                        <i class="fa fa-3x fa-desktop"></i>
                    </div> <!-- /.service-icon -->
                    <div class="service-content">
                        <div class="inner-service">
                            <h3>Logiciel</h3>
                            <p>Avec votre expertise métier, nous pouvons ensemble créer votre logiciel interne vous
                                permettant de gagner en performance et compétitivité.</p>
                        </div>
                    </div> <!-- /.service-content -->
                    <button class="btn btn-info click">Logiciel</button>
                </div> <!-- /#service-1 -->
            </div> <!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="service-item wow fadeInUp" data-wow-delay="4000" id="service-4">
                    <div class="service-icon">
                        <i class="fa fa-3x fa-database"></i>
                    </div> <!-- /.service-icon -->
                    <div class="service-content">
                        <div class="inner-service">
                            <h3>Big Data</h3>
                            <p>Le traitement de gros volumes de données est de plus en plus fréquent. Notre réseau
                                d’ingénieur vous aidera à développer les outils adéquats pour l’analyse et le traitement de
                                flux de données.</p>
                        </div>
                    </div> <!-- /.service-content -->
                    <button class="btn btn-info click">Big Data</button>
                </div> <!-- /#service-1 -->
            </div> <!-- /.col-md-3 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /#services -->
            <!--<div id="gamme" >
                <div class="row">
                    <div class="row col-lg-10 col-lg-offset-1">
                    <div class="jumbotron col-lg-6 wow fadeInDown"  id="gammeContent">
                        <section class="feature2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                        <img src="img/ipadair.png" class="img-responsive" alt="tablette">
                                    </div>
                                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                        <h2 class="text-uppercase">Applications mobiles</h2>
                                        <ul class="list-group">
                                            <li class="list-group-item" id="PME" data-toggle="popover" data-html="true" data-content="<ul><li>Application mobile pour gérer le stock</li><li>Gestion des horaires du personnel</li><li>Formulaires clients</li></ul>! " title="Pour les PME" ><span class="fa fa-suitcase"></span>  Petites et Moyennes Entreprises</li>
                                            <li class="list-group-item"  id="restaurant" data-toggle="popover" data-html="true" data-content="<ul><li>Carte des menus</li><li>Présentation des offres</li><li>Autres</li></ul>! " title="Pour les Restaurants"><span class="fa fa-bars"></span>  Restaurans, Bars</li>
                                            <li class="list-group-item" id="evenement" data-toggle="popover" data-html="true" data-content="<ul><li>Guide</li><li>Applications ludiques</li><li>jeux et etc</li></ul>! " title="Pour l'évenementiels"><span class="fa fa-calendar"></span>  Evenementiels</li>
                                            <li class="list-group-item"><span class="fa fa-camera"></span>  Autre</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="jumbotron col-lg-5">

                            <section class="feature2">
                                <div class="container" id="internet" data-toggle="popover" data-html="true" data-content="<ul><li>Design épuré:WordPress</li><li>Création de Template</li><li>Site internet avec application lourde</li></ul>! " title="Site Internet">
                                    <div class="row">
                                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                            <img src="img/ordi.png" class="img-responsive" alt="ordinateur">
                                        </div>
                                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                            <h2 class="text-uppercase">Site à la pointe de la nouveauté</h2>
                                            <p><span class="fa fa-pencil"></span> ameliorons votre image de marque</p>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
-->
<!--
NOTRE EQUIPE


-->




<!--



Nous rejoindre MODAL



-->
                <div id="myModal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog ">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Nous rejoindre</h4>
                            </div>
                            <form class="form-horizontal col-lg-12" >
                            <div class="modal-body">

                                    <div class="form-group">


                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-2 col-lg-offset-1 ">Nom : </label>
                                                <div class="col-lg-8">
                                                    <input type="text" name="nom" class="form-control" id="nomRejoignez">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-2 col-lg-offset-1 ">Email : </label>
                                                <div class="col-lg-8">
                                                    <input type="text"name="email" class="form-control" id="emailRejoignez"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="textarea" class="col-lg-2 col-lg-offset-1">Comment:</label>
                                                <div height="300px" class="col-lg-8">
                                                    <textarea   class="form-control" name="message" id="commentRejoignez"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="row">
                                    <table class="tableau">
                                        <tr>
                                            <th>Votre CV</th>
                                            <th>Lettre de Motivation</th>
                                            <th>Vos Projets</th>
                                        </tr>
                                        <tr>
                                            <td><input type="file" id="cv" name="cv" /></td>
                                            <td> <input id="lm" name="lm" type="file" /></td>
                                            <td> <input type="file" id="projets" name="projets" /></td>
                                        </tr>
                                        </table>
                                    <div class="pull-right pied">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                        <button type="submit" class="btn btn-primary" data-dismiss="modal" id="envo">envoyer</button>
                                    </div>

                                        </div>

                                 </div>


                            </form>
                        </div>
                            <div class="modal-footer">


                            </div>

                            </div>
                        </div>
                    </div>
                </div>
           <!--



            Fenetre pour devi application mobile





            -->
                    <div id="devisAppli" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="devisAppliLabel">
                        <div class="modal-dialog ">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="devisAppliLabel">Devis <span class="fa fa-android"></span> Application Mobile </h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-3"> <span class="fa fa-mobile-phone fa-5x"id="imageAppli"></span> </div>
                                    <div class="col-lg-9">
                                    <div class="form  " >


                                                <div class="form-group" >
                                                    <div class="row">
                                                    <label for="secteur" class="col-lg-2">Secteur: </label>
                                                    <div class="col-lg-9 col-lg-offset-1">
                                                        <select class="col-lg-10" name="secteur " id="secteur">
                                                            <option value="<?php echo $tableau['industrie']?>
                                                            " selected="selected">Industrie</option>
                                                            <option value="<?php echo $tableau['immobilier']?>">Immobilier</option>
                                                            <option value="<?php echo $tableau['technologie']?>">Technologie</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                </div>


                                            <div class="form-group ">
                                                <div class="row">
                                                    <label for="appareil" class="col-lg-2">Appareil: </label>
                                                    <div class="col-lg-8">
                                                    <div class="input-group col-lg-8 col-lg-offset-2 " id="appareil">

                                                        <div class="form-group">

                                                            <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                    <input type="checkbox"  name="tablette" id="tablette" value="<?php echo $tableau['tablette']?>">
                                                                    </span>
                                                                    <label class="form-control"  for="tablette" ><span class="fa fa-2x fa-tablet"></span> Tablette</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                    <input type="checkbox"  name="mobile" id="mobile" value="<?php echo $tableau['phone']?>">
                                                                    </span>
                                                                    <label class="form-control " for="mobile" ><span class="fa fa-2x fa-mobile-phone"></span> Mobile</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                    <label for="fonctionnalite" class="col-lg-2">Fonctionnalité: </label>
                                                        <div class="col-lg-8">
                                                    <div class="input-group col-lg-8 col-lg-offset-2" id="fonctionnalite">
                                                        <div class="form-group">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <input type="checkbox" name="vitrine"  id="vitrine" value="<?php echo $tableau['vitrine']?>">
                                                                </span>
                                                                <label class="form-control " width="70px"for="vitrine" >vitrine</label>
                                                            </div>
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <input type="checkbox" name="Photos"  id="Photos" value="<?php echo $tableau['photo']?>">
                                                                </span>
                                                                <label class="form-control " for="Photos" >Photos</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="row">
                                                    <label for="nombrePage" class="col-lg-2">Nombre: </label>
                                                    <div class="col-lg-8">
                                                        <div class="input-group col-lg-8 col-lg-offset-2 " id="nombre">

                                                            <div class="form-group">


                                                                    <div class="input-group">
                                                                        <input type="hidden"  name="prixPage" id="prixPage" value="<?php echo $tableau['prixPage']?>">
                                                                    <input type="number"  name="tablette" id="nombrePage" value="3">
                                                                    <span class="input-group-addon">
                                                                       pages
                                                                    </span>
                                                                    </div>



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <label for="nombres" class="col-lg-2">Nombre de pages: </label>
                                                            <div class="col-lg-8">
                                                    <div class="input-group col-lg-8 col-lg-offset-2" id="nombres">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="Interface"  id="Interface" value="<?php echo $tableau['interface']?>">
                                                            </span>
                                                                <label class="form-control " for="Interface" >Interface utilisateur</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="sons"  id="sons" value="<?php echo $tableau['son']?>">
                                                            </span>
                                                                <label class="form-control " for="sons">sons</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <input type="checkbox" name="connexion"  id="connexion" value="<?php echo $tableau['connexion']?>">
                                                                </span>
                                                                <label class="form-control" for="connexion">connexion via Email/Reseaux </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                </div>
                                            </div>
                                        </div>


                                        </div>

                                </div>

                                <div class="modal-footer">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group ">


                                                <label for="nombres2" class="col-lg-4 col-lg-offset-4">Prix de reference: </label>
                                                <div class="col-lg-t">
                                                    <div class="input-group col-lg-2 resulta pull-right">

                                                        <span class="input-group-addon">€</span>

                                                        <span class="input-group-addon btn btn-lg btn-success " id="resultat"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#concretisons">Concretisons votre projet</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                            </div>

            <!--



            Fenetre pour devi site innovant





            -->
            <div id="devisSite" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="devisSiteLabel">
                <div class="modal-dialog ">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="devisSiteLabel">Devis <span class="fa fa-wordpress"></span> APPLICATION WEB</h4>
                        </div>
                        <div class="modal-body row">


                            <div class="form  col-lg-9 col-lg-offset-3 ">


                                <div class="form-group">
                                    <div class="row">
                                        <label for="secteur2" class="col-lg-2">Secteur: </label>
                                        <div class="col-lg-9 col-lg-offset-1">
                                            <select class="col-lg-10" name="secteur2 " id="secteur2">
                                                <option value="<?php echo $tableau2['industrie']?>" selected="selected" id="option2">Industrie</option>
                                                <option value="<?php echo $tableau2['immobilier']?>">Immobilier</option>
                                                <option value="<?php echo $tableau2['technologie']?>">Technologie</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group ">
                                    <div class="row">
                                        <label for="appareil2" class="col-lg-2">Technologie: </label>
                                        <div class="col-lg-8">
                                            <div class="input-group col-lg-8 col-lg-offset-2 " id="appareil2">

                                                <div class="form-group">

                                                    <div class="">
                                                        <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                    <input type="checkbox"  name="wordpress" id="wordpress" value="<?php echo $tableau2['wordpress']?>">
                                                                    </span>
                                                            <label class="form-control " for="wordpress" >Wordpress</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                    <input type="checkbox"  name="drupal" id="drupal" value="<?php echo $tableau2['drupal']?>">
                                                                    </span>
                                                            <label class="form-control " for="drupal" >Drupal</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <label for="fonctionnalite2" class="col-lg-2">Fonctionnalité: </label>
                                            <div class="col-lg-8">
                                                <div class="input-group col-lg-8 col-lg-offset-2" id="fonctionnalite2">
                                                    <div class="form-group">
                                                        <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <input type="checkbox" name="vitrine2"  id="vitrine2" value="<?php echo $tableau2['vitrine']?>">
                                                                </span>
                                                                <label class="form-control " width="70px"for="vitrine2" >vitrine</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <input type="checkbox" name="Backoffice"  id="Backoffice" value="<?php echo $tableau2['Backoffice']?>">
                                                                </span>
                                                            <label class="form-control" for="Backoffice" >Backoffice</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="nombrePage2" class="col-lg-2">Nombre: </label>
                                        <div class="col-lg-8">
                                            <div class="input-group col-lg-8 col-lg-offset-2 " id="nombre2">

                                                <div class="form-group">


                                                    <div class="input-group">
                                                        <input type="hidden"  name="prixPage2" id="prixPage2" value="<?php echo $tableau2['prixPage']?>">
                                                        <input type="number"  name="tablette2" id="nombrePage2" value="3">
                                                                    <span class="input-group-addon">
                                                                       pages
                                                                    </span>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <div class="row">
                                            <label for="nombres2" class="col-lg-2">Fonctionnalites: </label>
                                            <div class="col-lg-8">
                                                <div class="input-group col-lg-8 col-lg-offset-2" id="nombres2">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="Interface2" " id="compteUtilisateur" value="<?php echo $tableau2['compteUtilisateur']?>">
                                                            </span>
                                                            <label class="form-control " for="compteUtilisateur" >compte utilisateur</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="appliPersonnalise"  id="sons2" value="<?php echo $tableau2['appliPersonnalise']?>">
                                                            </span>
                                                            <label class="form-control" for="sons2">application Personnalise</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <input type="checkbox" name="connexion2"  id="connexion2" value="<?php echo $tableau2['connexion']?>">
                                                                </span>
                                                            <label class="form-control" for="connexion2">connexion via Email/Reseaux </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                        </div>
                                </div>
                            </div>



                        <div class="modal-footer">
                        <div class="row">
                            <div class="col-lg-8">
                            <div class="form-group ">


                                    <label for="nombres2" class="col-lg-4 col-lg-offset-4">Prix de reference: </label>
                                    <div class="col-lg-t">
                                        <div class="input-group col-lg-2 resulta pull-right">

                                            <span class="input-group-addon">€</span>

                                            <span class="input-group-addon btn btn-lg btn-success " id="resultat2"></span>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            <div class="col-lg-4">
                                <button type="button"  class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#concretisonsWeb">Concretisons votre projet</button>
                            </div>
                            </div>

                        </div>
                        </div>
                    </div>
                </div>

            </div>
        <!--


        DEVIS


        -->

        <div id="rejoin" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="rejoinLabel">
            <div class="modal-dialog ">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="rejoinLabel">Commander My IT Box</h4>
                    </div>
                    <div class="modal-body">




                                <div class="row">
                                    <div class="col-md-3 col-sm-6 img-thumbnail ">
                                        <a href="#"  data-toggle="modal" data-target="#devisAppli" data-dismiss="modal">
                                        <div class="serviceit  img-circle" id="service-1">
                                            <div class="service-icon">
                                                <img src="img/ipadair.png"   class="img-responsive " alt="ordinateur">
                                            </div> <!-- /.service-icon -->
                                            <div class="service-content">
                                                <div class="inner-service">
                                                    Applications mobiles
                                                </div>
                                            </div> <!-- /.service-content -->
                                        </div> <!-- /#service-1 -->
                                            </a>
                                    </div> <!-- /.col-md-3 -->
                                    <div class="col-md-3 col-sm-6 img-thumbnail">
                                        <a href="#"  data-toggle="modal" data-target="#devisSite" data-dismiss="modal">
                                        <div class="serviceit" id="service-2">
                                            <div class="service-icon">
                                                <img src="img/ordi.png" class="img-responsive" alt="ordinateur">
                                            </div> <!-- /.service-icon -->
                                            <div class="service-content">
                                                <div class="inner-service">
                                                    Site internet innovant
                                                </div>
                                            </div> <!-- /.service-content -->
                                        </div> <!-- /#service-1 -->
                                            </a>
                                    </div> <!-- /.col-md-3 -->
                                    <div class="col-md-3 col-sm-6 img-thumbnail">
                                        <div class="serviceit" id="service-3">
                                            <div class="service-icon">
                                                <img src="img/ordi.png" class="img-responsive" alt="ordinateur">
                                            </div> <!-- /.service-icon -->
                                            <div class="service-content">
                                                <div class="inner-service">
                                                    Logiciel
                                                </div>
                                            </div> <!-- /.service-content -->
                                        </div> <!-- /#service-1 -->
                                    </div> <!-- /.col-md-3 -->
                                    <div class="col-md-3 col-sm-6 img-thumbnail">
                                        <div class="serviceit" id="service-4">
                                            <div class="service-icon">
                                                <img src="img/ordi.png" class="img-responsive" alt="ordinateur">
                                            </div> <!-- /.service-icon -->
                                            <div class="service-content">
                                                <div class="inner-service">
                                                    Big
                                                    data
                                                </div>
                                            </div> <!-- /.service-content -->
                                        </div> <!-- /#service-1 -->
                                    </div> <!-- /.col-md-3 -->

                        </div>
                                <!--<div class="row">
                                    <div class="col-md-6">
                                        <a href="#"  data-toggle="modal" data-target="#devisAppli" data-dismiss="modal">
                                        <img src="img/ipadair.png" width="186" height="142" div="ipad"class="img-responsive col-lg-offset-3" alt="ordinateur">
                                        <h3><span class="fa fa-pencil"></span> Application mobile</h3>
                                        </a>

                                    </div>
                                    <div class="col-md-6">
                                        <a href="#"  data-toggle="modal" data-target="#devisSite" data-dismiss="modal">

                                        <img src="img/ordi.png" class="img-responsive" alt="ordinateur">
                                        <h3><span class="fa fa-pencil"></span> Application Web</h3>
                                            </a>
                                    </div>
                                </div>-->



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>

                    </div>

                </div>
            </div>
        </div>
        <!--


        cONCRETISER APPLI


        -->


        <div id="concretisons" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="rejoinLabel">
            <div class="modal-dialog ">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="rejoinLabel">Concretisons votre projet</h4>
                    </div>
                    <div class="modal-body">



                        <div class="row">
                            <div class="col-md-4">
                                <a href="#"  data-toggle="modal" data-target="#devisAppli" data-dismiss="modal">
                                    <img src="img/ordi.png" class="img-responsive" alt="ordinateur">
                                    <h3><span class="fa fa-android"></span> Application mobile</h3>
                                </a>

                            </div>
                            <div class="col-md-7">
                                <form class="form-horizontal col-lg-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-3 col-lg-offset-1 ">Fonctionnalités: </label>
                                                <div class="col-lg-7 col-lg-offset-1 pull-right">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="vitrineConc"  id="vitrineConc" value="oui">
                                                            </span>
                                                            <label class="form-control" for="vitrineConc">Vitrine</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-lg-offset-1 pull-right">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="photosConc"  id="photosConc" value="oui">
                                                            </span>
                                                            <label class="form-control" for="photosConc">Photos</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-lg-offset-1 pull-right">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="interfaceConc"  id="interfaceConc" value="oui">
                                                            </span>
                                                            <label class="form-control" for="interfaceConc">Interface utilisateur</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-lg-offset-1 pull-right">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="connexionConc"  id="connexionConc" value="oui">
                                                            </span>
                                                            <label class="form-control" for="connexionConc">Connexion via Email</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="form-group">
                                                <label for="textarea" class="col-lg-3 col-lg-offset-1">Bref descriptif:</label>
                                                <div height="300px" class="col-lg-7 col-lg-offset-1">
                                                    <textarea   class="form-control" id="brefConc"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-3 col-lg-offset-1 ">Nom: </label>
                                                <div class="col-lg-7 col-lg-offset-1">
                                                    <input type="text" class="form-control" id="nomConc"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-3 col-lg-offset-1 ">Couriel: </label>
                                                <div class="col-lg-7 col-lg-offset-1">
                                                    <input type="email" class="form-control" id="mailConc"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-3 col-lg-offset-1 ">Telephone: </label>
                                                <div class="col-lg-7 col-lg-offset-1">
                                                    <input type="text" class="form-control" id="telConc"/>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <button type="button" id="validerConc" class="btn btn-primary" data-dismiss="modal">Valider</button>
                    </div>

                </div>
            </div>
        </div>


        <!--


        concretison web




        -->
        <div id="concretisonsWeb" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="rejoinLabel">
            <div class="modal-dialog ">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="rejoinLabel">Concretisons votre projet</h4>
                    </div>
                    <div class="modal-body">



                        <div class="row">
                            <div class="col-md-4">
                                <a href="#"  data-toggle="modal" data-target="#devisAppli" data-dismiss="modal">
                                    <img src="img/ordi.png" class="img-responsive" alt="ordinateur">
                                    <h3><span class="fa fa-wordpress"></span> votre Application web</h3>
                                </a>

                            </div>
                            <div class="col-md-7">
                                <form class="form-horizontal col-lg-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-3 col-lg-offset-1 ">Fonctionnalités: </label>
                                                <div class="col-lg-7 col-lg-offset-1 pull-right">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="wordpressConcWeb"  id="wordpressConcWeb" value="oui">
                                                            </span>
                                                            <label class="form-control" for="wordpressConcWeb">Wordpress</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-lg-offset-1 pull-right">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="drupalConcWeb"  id="drupalConcWeb" value="oui">
                                                            </span>
                                                            <label class="form-control" for="drupalConcWeb">Drupal</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-lg-offset-1 pull-right">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="backofficeConcWeb"  id="backofficeConcWeb" value="oui">
                                                            </span>
                                                            <label class="form-control" for="backofficeConcWeb">Backoffice</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-lg-offset-1 pull-right">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="connexionConcWeb"  id="connexionConcWeb" value="oui">
                                                            </span>
                                                            <label class="form-control" for="connexionConcWeb">Connexion via Email</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="form-group">
                                                <label for="textarea" class="col-lg-3 col-lg-offset-1">Bref descriptif:</label>
                                                <div height="300px" class="col-lg-7 col-lg-offset-1">
                                                    <textarea   class="form-control" id="brefConcWeb"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-3 col-lg-offset-1 ">Nom: </label>
                                                <div class="col-lg-7 col-lg-offset-1">
                                                    <input type="text" class="form-control" id="nomConcWeb"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-3 col-lg-offset-1 ">Couriel: </label>
                                                <div class="col-lg-7 col-lg-offset-1">
                                                    <input type="email" class="form-control" id="mailConcWeb"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-3 col-lg-offset-1 ">Telephone: </label>
                                                <div class="col-lg-7 col-lg-offset-1">
                                                    <input type="text" class="form-control" id="telConcWeb"/>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>



                    </div>






                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <button type="button" id="validerConcWeb" class="btn btn-primary" data-dismiss="modal">Valider</button>
                    </div>

                </div>
            </div>
        </div>




                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <script src="js/vendor/jquery-1.11.3.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/main.js"></script>
            <script src="js/calcul.js"></script>
                <script src="js/calcul2.js"></script>
                <script src="js/jquery.flexslider.js"></script>
                <script src="js/jquery.simple-text-rotator.js"></script>

                <script src="js/smoothscroll.js"></script>
                <script src="js/commande.js"></script>
                <script src="js/commandeWeb.js"></script>
                <script src="js/wow.min.js"></script>
                <script src="js/angular.js"></script>
                <script src="js/angular-route.js"></script>
                <script src="js/angular_ui_router.js"></script>
                <script src="js/app.js"></script>
                <script src="js/app2.js"></script>





<div class="content-section" id="contact">


        <div class="row">

            <div class="col-md-10 col-sm-6 col-lg-offset-1">
                <H4>NOUS CONTACTER</H4><br/>
                <hr/>
                <div class="contact-form">
                    <form method="post" name="contactform" id="contactform">
                      <div class="col-md-3 wow fadeInLeft" data-wow-delay="1s">
                          <p>
                              <label class="contact-label" for="name">Nom :</label>
                            <input name="name" type="text" id="name" placeholder="Votre nom">
                        </p>
                        <p>
                            <label class="contact-label" for="email">Adresse e-mail :</label>
                            <input name="email" type="text" id="email" placeholder="Votre Email">
                        </p>
                      </div>
                        <div class="col-md-8 col-md-push-1 wow fadeInRight" data-wow-delay="1s">
                        <p>
                            <label class="contact-label" for="objet">Objet:</label>
                            <input name="objet" type="text" id="objet" placeholder="objet">
                        </p>
                        <p>
                            <label class="contact-label" for="comments">Message :</label>
                            <textarea name="comments" id="comments" placeholder="Message"></textarea>
                        </p>
                        <input type="submit" class="mainBtn" id="envoiMail" value="Envoyer Message">
                            <div class="row" id="sociauBouton" >
                                <a href="http://www.facebook.com/myitbox"> <img src="img/reseaux/facebook.png"/></a>
                                <a href="http://www.twitter.com" ><img src="img/reseaux/twitter.png"/></a>
                                <a href="http://mail.google.com"> <img src="img/reseaux/email.png"/></a>
                                <a href="http://linkedin.com"><img src="img/reseaux/linkedin.png"/></a>
                            </div>
                        </div>
                    </form>

                </div> <!-- /.contact-form -->

            </div> <!-- /.col-md-5 -->
        </div> <!-- /.row -->
</div> <!-- /#contact -->


<footer class="hidden-xs " id="pied">

        <div class="row hidden-xs">
            <div class="col-md-8 col-xs-12 text-left wow fadeInUp" >
                 © My IT Box Site Web
            </div> <!-- /.text-center -->

            <div class="col-md-4 hidden-xs text-right">
                <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal">
                    <span class="fa  fa-inbox"></span> Rejoignez-nous
                </button>

            </div> <!-- /.text-center -->
        </div> <!-- /.row -->
     <!-- /.container -->
</footer>

</body>

</html>
