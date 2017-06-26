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
    /*public function search($search,$em)
    {
        die('recherche');
        return 0;
    }*/

    public function rechercherNominative($search,$em){
        $sql = 'SELECT s.codestagiaire, s.nom, s.prenom, s.email, se.codeentreprise, e.raisonsociale, e.ville 
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

    public function rechercherNominativeEntreprise($search,$em){

        $sql = 'SELECT s.codestagiaire ,s.nom, s.prenom, s.email, se.codeentreprise, e.raisonsociale, e.ville 
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
}

