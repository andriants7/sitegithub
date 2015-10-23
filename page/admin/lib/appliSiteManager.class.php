<?php

/**
 * Created by PhpStorm.
 * User: Andriants

 * Time: 17:45
 */
class AppliSiteManager
{
    protected $db;


    public function __construct(PDO $db)
    {
        $this->db = $db;
    }




    public function getUnique()
    {
        $requete = $this->db->query('SELECT * FROM prixSite WHERE id = 1');

        return new AppliSite($requete->fetch(PDO::FETCH_ASSOC));
    }


    public function update(AppliSite $appli)
    {
        $requete = $this->db->prepare('UPDATE prixSite SET wordpress=:wordpress,drupal=:drupal,vitrine=:vitrine,Backoffice=:Backoffice,compteUtilisateur=:compteUtilisateur,appliPersonnalise=:appliPersonnalise,connexion=:connexion ,prixPage=:prixPage,industrie=:industrie,technologie=:technologie,immobilier=:immobilier WHERE id=1');
        $requete->bindValue(':wordpress',(int) $appli->getWordpress());
        $requete->bindValue(':drupal',(int)$appli->getDrupal());
        $requete->bindValue(':vitrine', (int)$appli->getVitrine());
        $requete->bindValue(':Backoffice',(int)$appli->getBackoffice());
        $requete->bindValue(':compteUtilisateur',(int)$appli->getCompteUtilisateur());
        $requete->bindValue(':connexion', (int)$appli->getConnexion());
        $requete->bindValue(':prixPage',(int)$appli->getPrixPage());
        $requete->bindValue(':industrie', (int)$appli->getIndustrie());
        $requete->bindValue(':technologie',(int)$appli->getTechnologie());
        $requete->bindValue(':immobilier',(int)$appli->getImmobilier());
        $requete->bindValue(':appliPersonnalise', (int)$appli->getAppliPersonnalise());
        $requete->execute();
    }
}