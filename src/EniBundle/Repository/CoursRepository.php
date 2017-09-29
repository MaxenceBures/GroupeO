<?php

namespace EniBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Description of CoursRepository
 *
 * @author Alois
 */
class CoursRepository extends EntityRepository {
    
    public function getCoursById($idCours,$em) {
        $sql = "SELECT m.idmodule,m.libelle as module ,c.idcours,c.debut,c.fin,c.libellecours,l.libelle as lieu,c.dureereelleenheures
                FROM EniBundle:Cours c  
                JOIN EniBundle:Module m WITH c.idmodule = m.idmodule
                LEFT JOIN EniBundle:Lieu l WITH l.codelieu = c.codelieu
                WHERE c.idcours = '$idCours'";

        $query = $em->createQuery($sql);

        return $query->getResult();
    }
    
    public function getCoursByModulesLieux($modules,$modulesSelected, $lieux, $debutContrat, $finContrat, $em) {
        $selected = $modulesSelected != "0" ? "and c.idmodule not in (" . implode(",", $modulesSelected) . ")" :"";
        $sql = "SELECT distinct m.idmodule,m.libelle as module ,c.idcours,c.debut,c.fin,c.libellecours,l.libelle as lieu
                FROM EniBundle:Cours c  
                JOIN EniBundle:Module m WITH c.idmodule = m.idmodule
                LEFT JOIN EniBundle:Lieu l WITH l.codelieu = c.codelieu
                WHERE c.idmodule in (" . implode(",", $modules) . ") $selected
                AND c.codelieu in (" . implode(",", $lieux) . ")
                AND (c.debut >= '$debutContrat' AND c.fin <= '$finContrat')
                ORDER BY c.debut";

        $query = $em->createQuery($sql);

        return $query->getResult();
    }

    public function getCours($em){
        $sql = "SELECT distinct m.idmodule,m.libelle as module ,c.idcours,c.debut,c.fin,c.libellecours,l.libelle as lieu, l.codelieu as lieu_code
                FROM EniBundle:Cours c  
                JOIN EniBundle:Module m WITH c.idmodule = m.idmodule
                LEFT JOIN EniBundle:Lieu l WITH l.codelieu = c.codelieu
                ORDER BY c.debut";

        $query = $em->createQuery($sql);

        return $query->getResult();
    }

}
