<?php

namespace EniBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\DriverManager;

class StagiaireRepository extends \Doctrine\ORM\EntityRepository {

    public function rechercherNominative($search, $em) {
        $sql = 'SELECT s.codestagiaire, s.nom, s.prenom, s.email, se.codeentreprise, e.raisonsociale, e.ville, se.numlien, e.codeentreprise  
                FROM EniBundle:Stagiaire s  
                  LEFT JOIN EniBundle:Stagiaireparentreprise se 
                  WITH se.codestagiaire = s.codestagiaire 
                  LEFT JOIN EniBundle:Entreprise e 
                  WITH e.codeentreprise = se.codeentreprise 
                 WHERE ';


        $nom = $search["nom"];
        $prenom = $search["prenom"];
        $mail = $search["mail"];

        $not_empty = array();

        if ($nom != "") {
            $not_empty["nom"] = $nom;
        }

        if ($prenom != "") {
            $not_empty["prenom"] = $prenom;
        }

        if ($mail != "") {
            $not_empty["email"] = $mail;
        }

        $i = 0;
        foreach ($not_empty as $field => $value) {
            if ($i == 0) {
                $sql .= "s." . $field . " = '" . $value . "' ";
            } else {
                $sql .= "AND s." . $field . " = '" . $value . "' ";
            }
            $i++;
        }


        $query = $em->createQuery($sql);

        return $query->getResult();
    }

    public function rechercherNominativeUnion($search, $em) {
        $sql = 'SELECT s.codestagiaire, s.nom, s.prenom, s.email, se.codeentreprise, e.raisonsociale, e.ville, se.numlien, e.codeentreprise, se.datedebutenets 
                FROM EniBundle:Stagiaire s  
                  LEFT JOIN EniBundle:Stagiaireparentreprise se 
                  WITH se.codestagiaire = s.codestagiaire 
                  LEFT JOIN EniBundle:Entreprise e 
                  WITH e.codeentreprise = se.codeentreprise 
                 WHERE ';

        $nom = $search["nom"];
        $prenom = $search["prenom"];
        $mail = $search["mail"];

        $not_empty = array();

        if ($nom != "") {
            $not_empty["nom"] = $nom;
        }

        if ($prenom != "") {
            $not_empty["prenom"] = $prenom;
        }

        if ($mail != "") {
            $not_empty["email"] = $mail;
        }


        $i = 0;
        foreach ($not_empty as $field => $value) {
            if ($i == 0) {
                $sql .= "s." . $field . " = '" . $value . "' ";
            } else {
                $sql .= "AND s." . $field . " = '" . $value . "' ";
            }
            $i++;
        }

        $sql .= ' ORDER BY se.datedebutenets DESC';

        $query = $em->createQuery($sql);

        return $query->getResult();
    }

    public function rechercherNominativeDates($search, $em) {
        $sql = 'SELECT s.codestagiaire, s.nom, s.prenom, s.email, se.codeentreprise, e.raisonsociale, e.ville, se.numlien, e.codeentreprise, se.datedebutenets, se.datelien 
                FROM EniBundle:Stagiaire s  
                  LEFT JOIN EniBundle:Stagiaireparentreprise se 
                  WITH se.codestagiaire = s.codestagiaire 
                  LEFT JOIN EniBundle:Entreprise e 
                  WITH e.codeentreprise = se.codeentreprise 
                 WHERE ';

        switch ($search["date_status"]) {
            case 1:
                $sql .= " se.datelien  >  '" . $search["date_debut"] . "'";
                break;
            case 2:
                $sql .= " se.datelien < '" . $search["date_fin"] . "'";
                break;
            case 3:
                $sql .= " se.datelien BETWEEN '" . $search["date_debut"] . "' AND '" . $search["date_fin"] . "'";
                break;
        }


        $sql .= ' ORDER BY se.datedebutenets DESC';

        $query = $em->createQuery($sql);

        return $query->getResult();
    }

    public function rechercherNominativeDatesFormation($search, $em) {
        $sql = 'SELECT s.codestagiaire, s.nom, s.prenom, s.email, se.codeentreprise, e.raisonsociale, e.ville, se.numlien, e.codeentreprise, se.datedebutenets, se.datelien 
                FROM EniBundle:Stagiaire s  
                  LEFT JOIN EniBundle:Stagiaireparentreprise se 
                  WITH se.codestagiaire = s.codestagiaire 
                  LEFT JOIN EniBundle:Entreprise e 
                  WITH e.codeentreprise = se.codeentreprise 
                 WHERE ';

        switch ($search["date_status"]) {
            case 1:
                $sql .= " se.datelien  >  '" . $search["date_debut"] . "'";
                break;
            case 2:
                $sql .= " se.datelien < '" . $search["date_fin"] . "'";
                break;
            case 3:
                $sql .= " se.datelien BETWEEN '" . $search["date_debut"] . "' AND '" . $search["date_fin"] . "'";
                break;
        }


        $sql .= ' ORDER BY se.datedebutenets DESC';

        $query = $em->createQuery($sql);

        return $query->getResult();
    }

    public function rechercherNominativeId($id, $em) {
        $sql = "SELECT s.codestagiaire, s.nom, s.prenom, s.email, se.codeentreprise, e.raisonsociale, e.ville, se.numlien, s.datenaissance, s.adresse1, s.codepostal, s.ville   
                FROM EniBundle:Stagiaire s  
                  INNER JOIN EniBundle:Stagiaireparentreprise se 
                  WITH se.codestagiaire = s.codestagiaire 
                  INNER JOIN EniBundle:Entreprise e 
                  WITH e.codeentreprise = se.codeentreprise 
                 WHERE s.codestagiaire = " . $id . " 
                 ORDER BY se.datelien DESC";

        $query = $em->createQuery($sql);

        return $query->getResult();
    }

    public function rechercherNominativeDetail($id, $em) {
        $sql = "SELECT s.codestagiaire as stagiaire_code, s.nom as stagiaire_nom, s.prenom as stagiaire_prenom, s.email as stagiaire_email, s.datenaissance as stagiaire_naissance,s.codepostal as stagiaire_codepostal, s.ville as stagiaire_ville, s.adresse1 as stagiaire_adresse, 
                      se.codeentreprise as entreprise_code, se.numlien as stagiaire_entreprise_lien, se.responsableets as stagiaire_entreprise_responsable, se.commentaire as stagiaire_entreprise_commentaire, se.datedebutenets as entreprise_datedebut, se.datefinenets as entreprise_datefin, se.codefonction as entreprise_fonction,   
                      e.raisonsociale as entreprise_raisonsociale, e.ville as entreprise_ville, e.adresse1 as entreprise_adresse1, e.adresse2 as entreprise_adresse2, e.adresse3 as entreprise_adresse3, e.codepostal as entreprise_codepostal         
                FROM EniBundle:Stagiaire s  
                  LEFT JOIN EniBundle:Stagiaireparentreprise se 
                  WITH se.codestagiaire = s.codestagiaire 
                  LEFT JOIN EniBundle:Entreprise e 
                  WITH e.codeentreprise = se.codeentreprise 
                 WHERE s.codestagiaire = " . $id . " 
                 ORDER BY se.datelien DESC";

        $query = $em->createQuery($sql);

        return $query->getResult();
    }

    public function rechercherNominativeEntreprise($search, $em) {

        $sql = 'SELECT s.codestagiaire ,s.nom, s.prenom, s.email, se.codeentreprise, e.raisonsociale, e.ville, se.numlien  
                FROM EniBundle:Stagiaire s  
                  INNER JOIN EniBundle:Stagiaireparentreprise se 
                  WITH se.codestagiaire = s.codestagiaire 
                  INNER JOIN EniBundle:Entreprise e 
                  WITH e.codeentreprise = se.codeentreprise  
                WHERE se.codeentreprise = ';


        $entreprise = $search["entreprise"];
        $nom = $search["nom"];
        $prenom = $search["prenom"];
        $mail = $search["mail"];

        $not_empty = array();

        if ($nom != "") {
            $not_empty["nom"] = $nom;
        }

        if ($prenom != "") {
            $not_empty["prenom"] = $prenom;
        }

        if ($mail != "") {
            $not_empty["email"] = $mail;
        }

        $sql .= $entreprise . " ";

        foreach ($not_empty as $field => $value) {
            $sql .= "AND s." . $field . " = '" . $value . "' ";
        }

        $sql .= " ORDER BY se.datelien DESC";

        $query = $em->createQuery($sql);

        return $query->getResult();
    }

    public function rechercherStagiaireNumLien($num_lien, $em) {

        $sql = 'SELECT s.codestagiaire ,s.nom, s.prenom, s.email, se.codeentreprise, e.raisonsociale, e.ville, se.numlien  
                FROM EniBundle:Stagiaire s  
                  INNER JOIN EniBundle:Stagiaireparentreprise se 
                  WITH se.codestagiaire = s.codestagiaire 
                  INNER JOIN EniBundle:Entreprise e 
                  WITH e.codeentreprise = se.codeentreprise  
                WHERE se.numlien = ' . $num_lien;


        $query = $em->createQuery($sql);

        return $query->getResult();
    }

    public function rechercherStagiaireNumLienSpec($id, $search, $em) {

        $sql = 'SELECT s.codestagiaire ,s.nom, s.prenom, s.email, se.codeentreprise, e.raisonsociale, e.ville, se.numlien  
                FROM EniBundle:Stagiaire s  
                  INNER JOIN EniBundle:Stagiaireparentreprise se 
                  WITH se.codestagiaire = s.codestagiaire 
                  INNER JOIN EniBundle:Entreprise e 
                  WITH e.codeentreprise = se.codeentreprise  
                WHERE ';


        $nom = $search["nom"];
        $prenom = $search["prenom"];
        $mail = $search["mail"];

        $not_empty = array();

        if ($nom != "") {
            $not_empty["nom"] = $nom;
        }

        if ($prenom != "") {
            $not_empty["prenom"] = $prenom;
        }

        if ($mail != "") {
            $not_empty["email"] = $mail;
        }

        $i = 0;
        foreach ($not_empty as $field => $value) {
            if ($i == 0) {
                $sql .= "s." . $field . " = '" . $value . "' ";
            } else {
                $sql .= "AND s." . $field . " = '" . $value . "' ";
            }
            $i++;
        }

        $sql .= "AND se.numlien = " . $id;


        $query = $em->createQuery($sql);

        return $query->getResult();
    }

    public function rechercherStagiaireNumLienSpecEntreprise($id, $search, $em) {

        $sql = 'SELECT s.codestagiaire ,s.nom, s.prenom, s.email, se.codeentreprise, e.raisonsociale, e.ville, se.numlien  
                FROM EniBundle:Stagiaire s  
                  INNER JOIN EniBundle:Stagiaireparentreprise se 
                  WITH se.codestagiaire = s.codestagiaire 
                  INNER JOIN EniBundle:Entreprise e 
                  WITH e.codeentreprise = se.codeentreprise  
                WHERE ';


        $nom = $search["nom"];
        $prenom = $search["prenom"];
        $mail = $search["mail"];
        $entreprise = $search["entreprise"];

        $not_empty = array();

        if ($nom != "") {
            $not_empty["nom"] = $nom;
        }

        if ($prenom != "") {
            $not_empty["prenom"] = $prenom;
        }

        if ($mail != "") {
            $not_empty["email"] = $mail;
        }

        $i = 0;
        foreach ($not_empty as $field => $value) {
            if ($i == 0) {
                $sql .= "s." . $field . " = '" . $value . "' ";
            } else {
                $sql .= "AND s." . $field . " = '" . $value . "' ";
            }
            $i++;
        }

        if ($i == 0) {
            $sql .= " se.numlien = " . $id . " ";
        } else {
            $sql .= "AND se.numlien = " . $id . " ";
        }
        $sql .= "AND e.codeentreprise = " . $entreprise;

        $query = $em->createQuery($sql);

        return $query->getResult();
    }

    public function rechercherStagiaireNomPrenom($id, $em) {

        $sql = 'SELECT s.nom, s.prenom  
                FROM EniBundle:Stagiaire s  
                WHERE s.codestagiaire = ' . $id;


        $query = $em->createQuery($sql);

        return $query->getResult();
    }

}
