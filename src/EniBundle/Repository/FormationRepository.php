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

class FormationRepository extends \Doctrine\ORM\EntityRepository
{
    public function getFormationId($id,$em){
        $sql = "SELECT f.libellelong  
                FROM EniBundle:Formation f  
                WHERE f.codeformation = '".$id."'";

        $query = $em->createQuery($sql);

        return $query->getResult();
    }

}

