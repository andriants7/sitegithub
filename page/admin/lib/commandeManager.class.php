<?php

/**
 * Created by PhpStorm.
 * User: Andriants
 * Date: 02/09/2015
 * Time: 19:59
 */
class commandeManager
{
    protected $db;


    public function __construct(PDO $db)
    {
        $this->db = $db;
    }


    public function getList()
    {
        $listeCommande = array();




        $requete = $this->db->query('SELECT * FROM commande');

        while ($commande = $requete->fetch(PDO::FETCH_ASSOC))
        {
            $listeCommande[] = new Commande($commande);
        }

        $requete->closeCursor();

        return $listeCommande;
    }

    public function getUnique($id)
    {
        $requete = $this->db->prepare('SELECT * FROM commande WHERE id =:id');
        $requete->bindValue(':id',(int) $id, PDO::PARAM_INT);
        $requete->execute();

        return new Commande($requete->fetch(PDO::FETCH_ASSOC));
    }
    public function delete($id)
    {
        $requete = $this->db->prepare('DELETE FROM commande WHERE id =:id');
        $requete->bindValue(':id',(int) $id, PDO::PARAM_INT);
        $requete->execute();

    }
}