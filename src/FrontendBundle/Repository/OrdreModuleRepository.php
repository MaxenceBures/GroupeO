<?php

namespace FrontendBundle\Repository;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\DriverManager;
/**
 * Description of OrdreModuleRepository
 *
 * @author Alois
 */
class OrdreModuleRepository extends \Doctrine\ORM\EntityRepository{
    
    public function insertOrdreModule($ordre, $em) {
        $em->persist($ordre);
        $em->flush();

        return $ordre;
    }

}
