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


class EntrepriseRepository extends EntityRepository {

    public function getEntrepriseByStagiaire($idStagiaire, $em) {
        $sql = "SELECT e.codeEntreprise,e.raisonSocial, e.ville  
                FROM EniBundle:Entreprise e  
                INNER JOIN EniBundle:Stagiaireparentreprise se 
                WITH e.codeentreprise = se.codeentreprise  
                WHERE se.codestagiaire = '" . $idStagiaire . "' ORDER BY date_lien desc";

        $query = $em->createQuery($sql);

        return $query->getResult();
    }

}
