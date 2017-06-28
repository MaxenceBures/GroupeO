<?php
/**
 * Created by PhpStorm.
 * User: Maxence
 * Date: 22/06/2017
 * Time: 09:29
 */
namespace EniBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\DriverManager;

class StagiaireRepository extends \Doctrine\ORM\EntityRepository
{
    public function rechercherNominative($search,$em){
        $sql = 'SELECT s.codestagiaire, s.nom, s.prenom, s.email, se.codeentreprise, e.raisonsociale, e.ville, se.numlien  
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

        if($nom != ""){
            $not_empty["nom"] = $nom;
        }

        if($prenom != ""){
            $not_empty["prenom"] = $prenom;
        }

        if($mail != ""){
            $not_empty["email"] = $mail;
        }


        $i = 0;
        foreach ($not_empty as $field => $value){
            if($i == 0){
                $sql .= "s.".$field." = '".$value."' ";
            }else{
                $sql .= "AND s.".$field." = '".$value."' ";
            }
            $i++;
        }


        $query = $em->createQuery($sql);

        return $query->getResult();
    }

    public function rechercherNominativeId($id,$em){
        $sql = "SELECT s.codestagiaire, s.nom, s.prenom, s.email, se.codeentreprise, e.raisonsociale, e.ville, se.numlien, s.datenaissance, s.adresse1, s.codepostal, s.ville   
                FROM EniBundle:Stagiaire s  
                  INNER JOIN EniBundle:Stagiaireparentreprise se 
                  WITH se.codestagiaire = s.codestagiaire 
                  INNER JOIN EniBundle:Entreprise e 
                  WITH e.codeentreprise = se.codeentreprise 
                 WHERE s.codestagiaire = ".$id;

        $query = $em->createQuery($sql);

        return $query->getResult();
    }

    public function rechercherNominativeEntreprise($search,$em){

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

        if($nom != ""){
            $not_empty["nom"] = $nom;
        }

        if($prenom != ""){
            $not_empty["prenom"] = $prenom;
        }

        if($mail != ""){
            $not_empty["email"] = $mail;
        }

        $sql .= $entreprise." ";

        foreach ($not_empty as $field => $value){
                $sql .= "AND s.".$field." = '".$value."' ";
        }

        $query = $em->createQuery($sql);

        return $query->getResult();
    }

    public function rechercherStagiaireNumLien($num_lien,$em){

        $sql = 'SELECT s.codestagiaire ,s.nom, s.prenom, s.email, se.codeentreprise, e.raisonsociale, e.ville, se.numlien  
                FROM EniBundle:Stagiaire s  
                  INNER JOIN EniBundle:Stagiaireparentreprise se 
                  WITH se.codestagiaire = s.codestagiaire 
                  INNER JOIN EniBundle:Entreprise e 
                  WITH e.codeentreprise = se.codeentreprise  
                WHERE se.numlien = '.$num_lien;


        $query = $em->createQuery($sql);

        return $query->getResult();
    }

    public function rechercherStagiaireNumLienSpec($id,$search,$em){

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

        if($nom != ""){
            $not_empty["nom"] = $nom;
        }

        if($prenom != ""){
            $not_empty["prenom"] = $prenom;
        }

        if($mail != ""){
            $not_empty["email"] = $mail;
        }

        $i = 0;
        foreach ($not_empty as $field => $value){
            if($i == 0){
                $sql .= "s.".$field." = '".$value."' ";
            }else{
                $sql .= "AND s.".$field." = '".$value."' ";
            }
            $i++;
        }

        $sql .= "AND se.numlien = ".$id;


        $query = $em->createQuery($sql);

        return $query->getResult();
    }

    public function rechercherStagiaireNumLienSpecEntreprise($id,$search,$em){

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

        if($nom != ""){
            $not_empty["nom"] = $nom;
        }

        if($prenom != ""){
            $not_empty["prenom"] = $prenom;
        }

        if($mail != ""){
            $not_empty["email"] = $mail;
        }

        $i = 0;
        foreach ($not_empty as $field => $value){
            if($i == 0){
                $sql .= "s.".$field." = '".$value."' ";
            }else{
                $sql .= "AND s.".$field." = '".$value."' ";
            }
            $i++;
        }

        $sql .= "AND se.numlien = ".$id." ";
        $sql .= "AND e.codeentreprise = ".$entreprise;


        $query = $em->createQuery($sql);

        return $query->getResult();
    }
}

