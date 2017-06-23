<?php

namespace Proxies\__CG__\EniBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Entreprise extends \EniBundle\Entity\Entreprise implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'raisonsociale', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'adresse1', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'adresse2', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'adresse3', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'codepostal', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'ville', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'telephone', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'fax', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'siteweb', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'email', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'observation', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'codetypeentreprise', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'coderegion', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'codesecteur', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'codeorganisme', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'nomcommercial', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'siret', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'codecontacteni', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'codeorganismefavoris', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'codeentreprise'];
        }

        return ['__isInitialized__', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'raisonsociale', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'adresse1', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'adresse2', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'adresse3', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'codepostal', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'ville', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'telephone', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'fax', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'siteweb', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'email', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'observation', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'codetypeentreprise', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'coderegion', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'codesecteur', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'codeorganisme', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'nomcommercial', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'siret', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'codecontacteni', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'codeorganismefavoris', '' . "\0" . 'EniBundle\\Entity\\Entreprise' . "\0" . 'codeentreprise'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Entreprise $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setRaisonsociale($raisonsociale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRaisonsociale', [$raisonsociale]);

        return parent::setRaisonsociale($raisonsociale);
    }

    /**
     * {@inheritDoc}
     */
    public function getRaisonsociale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRaisonsociale', []);

        return parent::getRaisonsociale();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse1($adresse1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse1', [$adresse1]);

        return parent::setAdresse1($adresse1);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse1', []);

        return parent::getAdresse1();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse2($adresse2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse2', [$adresse2]);

        return parent::setAdresse2($adresse2);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse2', []);

        return parent::getAdresse2();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse3($adresse3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse3', [$adresse3]);

        return parent::setAdresse3($adresse3);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse3', []);

        return parent::getAdresse3();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodepostal($codepostal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodepostal', [$codepostal]);

        return parent::setCodepostal($codepostal);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodepostal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodepostal', []);

        return parent::getCodepostal();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille($ville)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone($telephone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', [$telephone]);

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', []);

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setFax($fax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFax', [$fax]);

        return parent::setFax($fax);
    }

    /**
     * {@inheritDoc}
     */
    public function getFax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFax', []);

        return parent::getFax();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteweb($siteweb)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteweb', [$siteweb]);

        return parent::setSiteweb($siteweb);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteweb()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteweb', []);

        return parent::getSiteweb();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setObservation($observation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObservation', [$observation]);

        return parent::setObservation($observation);
    }

    /**
     * {@inheritDoc}
     */
    public function getObservation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObservation', []);

        return parent::getObservation();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodetypeentreprise($codetypeentreprise)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodetypeentreprise', [$codetypeentreprise]);

        return parent::setCodetypeentreprise($codetypeentreprise);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodetypeentreprise()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodetypeentreprise', []);

        return parent::getCodetypeentreprise();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoderegion($coderegion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoderegion', [$coderegion]);

        return parent::setCoderegion($coderegion);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoderegion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoderegion', []);

        return parent::getCoderegion();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodesecteur($codesecteur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodesecteur', [$codesecteur]);

        return parent::setCodesecteur($codesecteur);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodesecteur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodesecteur', []);

        return parent::getCodesecteur();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodeorganisme($codeorganisme)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodeorganisme', [$codeorganisme]);

        return parent::setCodeorganisme($codeorganisme);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodeorganisme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodeorganisme', []);

        return parent::getCodeorganisme();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomcommercial($nomcommercial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomcommercial', [$nomcommercial]);

        return parent::setNomcommercial($nomcommercial);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomcommercial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomcommercial', []);

        return parent::getNomcommercial();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiret($siret)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiret', [$siret]);

        return parent::setSiret($siret);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiret()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiret', []);

        return parent::getSiret();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodecontacteni($codecontacteni)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodecontacteni', [$codecontacteni]);

        return parent::setCodecontacteni($codecontacteni);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodecontacteni()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodecontacteni', []);

        return parent::getCodecontacteni();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodeorganismefavoris($codeorganismefavoris)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodeorganismefavoris', [$codeorganismefavoris]);

        return parent::setCodeorganismefavoris($codeorganismefavoris);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodeorganismefavoris()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodeorganismefavoris', []);

        return parent::getCodeorganismefavoris();
    }

    /**
     * {@inheritDoc}
     */
    public function getCodeentreprise()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCodeentreprise();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodeentreprise', []);

        return parent::getCodeentreprise();
    }

}
