<?php

namespace FrontendBundle\Repository;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\DriverManager;


/**
 * FermetureLieuRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FermetureLieuRepository extends \Doctrine\ORM\EntityRepository
{
    public function insertFermeture($fermeture,$em){
        $em->persist($fermeture);
        $em->flush();

        return $fermeture;
    }

    public function getFermeture($em){
        $repository = $em->getRepository('FrontendBundle:FermetureLieu');
        $fermeture_temp = $repository->findAll();

        return $fermeture_temp;
    }

    public function removeFermeture($fermeture,$em){
        $em->remove($fermeture);
        $em->flush();

        return $fermeture;
    }

    public function getFermeturebyId($fermeture,$em){
        $repository = $em->getRepository('FrontendBundle:FermetureLieu');
        $fermeture_temp = $repository->find($fermeture);

        return $fermeture_temp;
    }
}