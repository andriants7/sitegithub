<?php

/**
 * Created by PhpStorm.
 * User: Andriants

 * Time: 17:45
 */
class appliManager
{
    protected $db;


    public function __construct(PDO $db)
    {
        $this->db = $db;
    }




    public function getUnique()
    {
        $requete = $this->db->query('SELECT tablette,phone,vitrine,photo,interface,son,connexion ,prixPage,industrie,technologie,immobilier  FROM prix WHERE id = 1');

        return new Appli($requete->fetch(PDO::FETCH_ASSOC));
    }

    /**
     * @see NewsManager::update()
     */
    public function update(Appli $appli)
    {
        $requete = $this->db->prepare('UPDATE prix SET tablette=:tablette,phone=:phone,vitrine=:vitrine,photo=:photo,interface=:interface,son=:son,connexion=:connexion ,prixPage=:prixPage,industrie=:industrie,technologie=:technologie,immobilier=:immobilier WHERE id=1');

        $requete->bindValue(':tablette', $appli->getTablette());
        $requete->bindValue(':phone',$appli->getPhone());
        $requete->bindValue(':vitrine', $appli->getVitrine());
        $requete->bindValue(':interface',$appli->getInterface());
        $requete->bindValue(':son',$appli->getSon());
        $requete->bindValue(':connexion', $appli->getConnexion());
        $requete->bindValue(':prixPage',$appli->getPrixPage());
        $requete->bindValue(':industrie', $appli->getIndustrie());
        $requete->bindValue(':technologie',$appli->getTechnologie());
        $requete->bindValue(':immobilier',$appli->getImmobilier());
        $requete->bindValue(':photo', $appli->getPhoto());
        $requete->execute();
        $b="ddddd";


    }
}