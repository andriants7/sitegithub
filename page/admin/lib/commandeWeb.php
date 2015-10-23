<?php

/**
 * Created by PhpStorm.
 * User: Andriants
 * Date: 03/09/2015
 * Time: 09:30
 */
class CommandeWeb
{
    protected $id,
        $wordpress,
        $drupal,
        $backoffice,
        $connexion,
        $bref,
        $nom,
        $mail,
        $tel;

    public function __construct($valeurs = array())
    {
        if (!empty($valeurs)) //
            $this->hydrate($valeurs);
    }

    public function hydrate($donnees)
    {
        foreach ($donnees as $attribut => $valeur)
        {
            $methode = 'set'.str_replace(' ', '', ucwords(str_replace('_', ' ', $attribut)));

            if (is_callable(array($this, $methode)))
            {
                $this->$methode($valeur);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getWordpress()
    {
        return $this->wordpress;
    }

    /**
     * @param mixed $wordpress
     */
    public function setWordpress($wordpress)
    {
        $this->wordpress = $wordpress;
    }

    /**
     * @return mixed
     */
    public function getDrupal()
    {
        return $this->drupal;
    }

    /**
     * @param mixed $drupal
     */
    public function setDrupal($drupal)
    {
        $this->drupal = $drupal;
    }

    /**
     * @return mixed
     */
    public function getBackoffice()
    {
        return $this->backoffice;
    }

    /**
     * @param mixed $backoffice
     */
    public function setBackoffice($backoffice)
    {
        $this->backoffice = $backoffice;
    }

    /**
     * @return mixed
     */
    public function getConnexion()
    {
        return $this->connexion;
    }

    /**
     * @param mixed $connexion
     */
    public function setConnexion($connexion)
    {
        $this->connexion = $connexion;
    }

    /**
     * @return mixed
     */
    public function getBref()
    {
        return $this->bref;
    }

    /**
     * @param mixed $bref
     */
    public function setBref($bref)
    {
        $this->bref = $bref;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

}