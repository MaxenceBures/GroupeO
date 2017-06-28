<?php

namespace EniBundle\Entity;

/**
 * Stagiaire
 *
 */
class Stagiaire {

    /**
     * @var string
     */
    private $civilite;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $adresse1;

    /**
     * @var string
     */
    private $adresse2;

    /**
     * @var string
     */
    private $adresse3;

    /**
     * @var string
     */
    private $codepostal;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $telephonefixe;

    /**
     * @var string
     */
    private $telephoneportable;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \DateTime
     */
    private $datenaissance;

    /**
     * @var string
     */
    private $coderegion;

    /**
     * @var string
     */
    private $codenationalite;

    /**
     * @var string
     */
    private $codeoriginemedia;

    /**
     * @var \DateTime
     */
    private $datedernierenvoidoc;

    /**
     * @var \DateTime
     */
    private $datecreation;

    /**
     * @var string
     */
    private $repertoire;

    /**
     * @var boolean
     */
    private $permis = '0';

    /**
     * @var string
     */
    private $photo;

    /**
     * @var boolean
     */
    private $envoidocencours = '0';

    /**
     * @var string
     */
    private $historique;

    /**
     * @var integer
     */
    private $codestagiaire;

    /**
     * Set civilite
     *
     * @param string $civilite
     *
     * @return Stagiaire
     */
    public function setCivilite($civilite) {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return string
     */
    public function getCivilite() {
        return $this->civilite;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Stagiaire
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Stagiaire
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Set adresse1
     *
     * @param string $adresse1
     *
     * @return Stagiaire
     */
    public function setAdresse1($adresse1) {
        $this->adresse1 = $adresse1;

        return $this;
    }

    /**
     * Get adresse1
     *
     * @return string
     */
    public function getAdresse1() {
        return $this->adresse1;
    }

    /**
     * Set adresse2
     *
     * @param string $adresse2
     *
     * @return Stagiaire
     */
    public function setAdresse2($adresse2) {
        $this->adresse2 = $adresse2;

        return $this;
    }

    /**
     * Get adresse2
     *
     * @return string
     */
    public function getAdresse2() {
        return $this->adresse2;
    }

    /**
     * Set adresse3
     *
     * @param string $adresse3
     *
     * @return Stagiaire
     */
    public function setAdresse3($adresse3) {
        $this->adresse3 = $adresse3;

        return $this;
    }

    /**
     * Get adresse3
     *
     * @return string
     */
    public function getAdresse3() {
        return $this->adresse3;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     *
     * @return Stagiaire
     */
    public function setCodepostal($codepostal) {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string
     */
    public function getCodepostal() {
        return $this->codepostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Stagiaire
     */
    public function setVille($ville) {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille() {
        return $this->ville;
    }

    /**
     * Set telephonefixe
     *
     * @param string $telephonefixe
     *
     * @return Stagiaire
     */
    public function setTelephonefixe($telephonefixe) {
        $this->telephonefixe = $telephonefixe;

        return $this;
    }

    /**
     * Get telephonefixe
     *
     * @return string
     */
    public function getTelephonefixe() {
        return $this->telephonefixe;
    }

    /**
     * Set telephoneportable
     *
     * @param string $telephoneportable
     *
     * @return Stagiaire
     */
    public function setTelephoneportable($telephoneportable) {
        $this->telephoneportable = $telephoneportable;

        return $this;
    }

    /**
     * Get telephoneportable
     *
     * @return string
     */
    public function getTelephoneportable() {
        return $this->telephoneportable;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Stagiaire
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     *
     * @return Stagiaire
     */
    public function setDatenaissance($datenaissance) {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime
     */
    public function getDatenaissance() {
        return $this->datenaissance;
    }

    /**
     * Set coderegion
     *
     * @param string $coderegion
     *
     * @return Stagiaire
     */
    public function setCoderegion($coderegion) {
        $this->coderegion = $coderegion;

        return $this;
    }

    /**
     * Get coderegion
     *
     * @return string
     */
    public function getCoderegion() {
        return $this->coderegion;
    }

    /**
     * Set codenationalite
     *
     * @param string $codenationalite
     *
     * @return Stagiaire
     */
    public function setCodenationalite($codenationalite) {
        $this->codenationalite = $codenationalite;

        return $this;
    }

    /**
     * Get codenationalite
     *
     * @return string
     */
    public function getCodenationalite() {
        return $this->codenationalite;
    }

    /**
     * Set codeoriginemedia
     *
     * @param string $codeoriginemedia
     *
     * @return Stagiaire
     */
    public function setCodeoriginemedia($codeoriginemedia) {
        $this->codeoriginemedia = $codeoriginemedia;

        return $this;
    }

    /**
     * Get codeoriginemedia
     *
     * @return string
     */
    public function getCodeoriginemedia() {
        return $this->codeoriginemedia;
    }

    /**
     * Set datedernierenvoidoc
     *
     * @param \DateTime $datedernierenvoidoc
     *
     * @return Stagiaire
     */
    public function setDatedernierenvoidoc($datedernierenvoidoc) {
        $this->datedernierenvoidoc = $datedernierenvoidoc;

        return $this;
    }

    /**
     * Get datedernierenvoidoc
     *
     * @return \DateTime
     */
    public function getDatedernierenvoidoc() {
        return $this->datedernierenvoidoc;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return Stagiaire
     */
    public function setDatecreation($datecreation) {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime
     */
    public function getDatecreation() {
        return $this->datecreation;
    }

    /**
     * Set repertoire
     *
     * @param string $repertoire
     *
     * @return Stagiaire
     */
    public function setRepertoire($repertoire) {
        $this->repertoire = $repertoire;

        return $this;
    }

    /**
     * Get repertoire
     *
     * @return string
     */
    public function getRepertoire() {
        return $this->repertoire;
    }

    /**
     * Set permis
     *
     * @param boolean $permis
     *
     * @return Stagiaire
     */
    public function setPermis($permis) {
        $this->permis = $permis;

        return $this;
    }

    /**
     * Get permis
     *
     * @return boolean
     */
    public function getPermis() {
        return $this->permis;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Stagiaire
     */
    public function setPhoto($photo) {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto() {
        return $this->photo;
    }

    /**
     * Set envoidocencours
     *
     * @param boolean $envoidocencours
     *
     * @return Stagiaire
     */
    public function setEnvoidocencours($envoidocencours) {
        $this->envoidocencours = $envoidocencours;

        return $this;
    }

    /**
     * Get envoidocencours
     *
     * @return boolean
     */
    public function getEnvoidocencours() {
        return $this->envoidocencours;
    }

    /**
     * Set historique
     *
     * @param string $historique
     *
     * @return Stagiaire
     */
    public function setHistorique($historique) {
        $this->historique = $historique;

        return $this;
    }

    /**
     * Get historique
     *
     * @return string
     */
    public function getHistorique() {
        return $this->historique;
    }

    /**
     * Get codestagiaire
     *
     * @return integer
     */
    public function getCodestagiaire() {
        return $this->codestagiaire;
    }

    
    
}
