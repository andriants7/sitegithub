<?php

/**
 * Created by PhpStorm.
 * User: Andriants
 * Date: 03/09/2015
 * Time: 09:30
 */
class CommandeWebManager
{
    protected $db;


    public function __construct(PDO $db)
    {
        $this->db = $db;
    }


    public function getList()
    {
        $listeCommande = array();




        $requete = $this->db->query('SELECT * FROM commandeWeb');

        while ($commande = $requete->fetch(PDO::FETCH_ASSOC))
        {
            $listeCommande[] = new CommandeWeb($commande);
        }

        $requete->closeCursor();

        return $listeCommande;
    }

    public function getUnique($id)
    {
        $requete = $this->db->prepare('SELECT * FROM commandeWeb WHERE id =:id');
        $requete->bindValue(':id',(int) $id, PDO::PARAM_INT);
        $requete->execute();

        return new CommandeWeb($requete->fetch(PDO::FETCH_ASSOC));
    }
    public function delete($id)
    {
        $requete = $this->db->prepare('DELETE FROM commandeWeb WHERE id =:id');
        $requete->bindValue(':id',(int) $id, PDO::PARAM_INT);
        $requete->execute();

    }
}