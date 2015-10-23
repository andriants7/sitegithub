<?php

/**
 * Created by PhpStorm.
 * User: Andriants
 * Date: 29/08/2015
 * Time: 17:33
 */
class Appli
{
    protected $tablette,
        $phone,
        $vitrine,
        $photo,
        $interface,
        $son,
        $connexion,
        $prixPage,
        $industrie, $technologie,
        $immobilier,
        $id;



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
    public function getTablette()
    {
        return $this->tablette;
    }

    /**
     * @param mixed $tablette
     */
    public function setTablette($tablette)
    {
        $this->tablette = $tablette;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getVitrine()
    {
        return $this->vitrine;
    }

    /**
     * @param mixed $vitrine
     */
    public function setVitrine($vitrine)
    {
        $this->vitrine = $vitrine;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getInterface()
    {
        return $this->interface;
    }

    /**
     * @param mixed $interface
     */
    public function setInterface($interface)
    {
        $this->interface = $interface;
    }

    /**
     * @return mixed
     */
    public function getSon()
    {
        return $this->son;
    }

    /**
     * @param mixed $son
     */
    public function setSon($son)
    {
        $this->son = $son;
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
    public function getPrixPage()
    {
        return $this->prixPage;
    }

    /**
     * @param mixed $prixPage
     */
    public function setPrixPage($prixPage)
    {
        $this->prixPage = $prixPage;
    }

    /**
     * @return mixed
     */
    public function getIndustrie()
    {
        return $this->industrie;
    }

    /**
     * @param mixed $industrie
     */
    public function setIndustrie($industrie)
    {
        $this->industrie = $industrie;
    }

    /**
     * @return mixed
     */
    public function getTechnologie()
    {
        return $this->technologie;
    }

    /**
     * @param mixed $technologie
     */
    public function setTechnologie($technologie)
    {
        $this->technologie = $technologie;
    }

    /**
     * @return mixed
     */
    public function getImmobilier()
    {
        return $this->immobilier;
    }

    /**
     * @param mixed $immobilier
     */
    public function setImmobilier($immobilier)
    {
        $this->immobilier = $immobilier;
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



}