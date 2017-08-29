<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace EniBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\DriverManager;

/**
 * Description of ModuleRepository
 *
 * @author Alois
 */
class ModuleRepository extends \Doctrine\ORM\EntityRepository {
    /*
     * @$lieux : array of idLieu
     */

    public function getModulesByLieuxFormation($lieux, $codeFormation, $em) {

        $sql = "select distinct m.libelle,m.dureeenheures,m.libellecourt,m.idmodule
                from EniBundle:Module m
                join EniBundle:Cours c WITH c.idmodule = m.idmodule
                join EniBundle:Promotion p WITH p.codepromotion = c.codepromotion
                where p.codeformation ='$codeFormation'
                and (c.codelieu in (" . implode(",", $lieux) . ") or c.codelieu is null)
                and m.archiver = 0";

        $query = $em->createQuery($sql);

        return $query->getResult();
    }

    public function getModulesListeSearch($modules, $codeFormation, $libelle, $em) {
        $condition = "";
        if (!empty($codeFormation) && !empty($libelle)) {
            $condition = "and m.libelle like '%$libelle%' and p.codeformation ='$codeFormation'";
        } else if (!empty($codeFormation) && empty($libelle)) {
            $condition = "and p.codeformation ='$codeFormation'";
        } else if (empty($codeFormation) && !empty($libelle)) {
            $condition = "and m.libelle like '%$libelle%'";
        }
        $condition .= " and m.idmodule not in (" . implode(",", $modules) . ")";
        $sql = "select distinct m.libelle,m.dureeenheures,f.codeformation,f.libellelong,m.idmodule
                from EniBundle:Module m
                join EniBundle:Cours c WITH c.idmodule = m.idmodule
                join EniBundle:Promotion p WITH p.codepromotion = c.codepromotion
                join EniBundle:Formation f WITH f.codeformation = p.codeformation
                where m.archiver = 0
                $condition order by f.codeformation,m.libelle";

        $query = $em->createQuery($sql);

        return $query->getResult();
    }

}
