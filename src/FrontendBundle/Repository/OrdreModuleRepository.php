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
class OrdreModuleRepository extends \Doctrine\ORM\EntityRepository {

    public function getModuleSuivant($idmodule,$formation,$modules_actif, $em) {
        $prededent = !empty($modules_actif) && count($modules_actif) > 0 ? "and om.precedentId in(". implode($modules_actif, ',').")" : "";
        $sql = "SELECT om.moduleId,om.precedentId,om.ordre,om.formationCode "
                . "FROM FrontendBundle:OrdreModule om "
                . "WHERE om.precedentId = $idmodule "
                . "and om.formationCode='$formation' "
                . "and (select count(omb.idOrdre) "
                    . "from FrontendBundle:OrdreModule omb "
                    . "where omb.moduleId=om.moduleId $prededent) < 2 ";

        $query = $em->createQuery($sql);

        return $query->getResult();
    }

    public function insertOrdreModule($ordre, $em) {
        $em->persist($ordre);
        $em->flush();

        return $ordre;
    }

}
