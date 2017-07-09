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

class StagiaireparentrepriseRepository extends \Doctrine\ORM\EntityRepository
{
    public function lienexiste($id,$em){
        $sql = 'SELECT se.numlien  
                FROM EniBundle:Stagiaireparentreprise se 
                WHERE se.codestagiaire = '.$id;
        $query = $em->createQuery($sql);

        return $query->getResult();
    }
    
    public function getIdStagiaireEntreprise($idStagiaire,$idEntreprise,$em){
        $sql = 'SELECT se.numlien  
                FROM EniBundle:Stagiaireparentreprise se 
                WHERE se.codestagiaire = '.$idStagiaire.' and se.codeentreprise='.$idEntreprise;
        $query = $em->createQuery($sql);

        return $query->getResult();
    }
}

