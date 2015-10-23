<?php

/**
 * Created by PhpStorm.
 * User: Andriants
 * Date: 29/08/2015
 * Time: 17:33
 */
class AppliSite
{
    protected $wordpress,
        $drupal,
        $vitrine,
        $Backoffice,
        $compteUtilisateur,
        $appliPersonnalise,
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
    public function getBackoffice()
    {
        return $this->Backoffice;
    }

    /**
     * @param mixed $Backoffice
     */
    public function setBackoffice($Backoffice)
    {
        $this->Backoffice = $Backoffice;
    }

    /**
     * @return mixed
     */
    public function getCompteUtilisateur()
    {
        return $this->compteUtilisateur;
    }

    /**
     * @param mixed $compteUtilisateur
     */
    public function setCompteUtilisateur($compteUtilisateur)
    {
        $this->compteUtilisateur = $compteUtilisateur;
    }

    /**
     * @return mixed
     */
    public function getAppliPersonnalise()
    {
        return $this->appliPersonnalise;
    }

    /**
     * @param mixed $appliPersonnalise
     */
    public function setAppliPersonnalise($appliPersonnalise)
    {
        $this->appliPersonnalise = $appliPersonnalise;
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