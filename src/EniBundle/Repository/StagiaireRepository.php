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

class StagiaireRepository extends EntityRepository
{
    public function search($search,$em)
    {
        die('recherche');
        return 0;
    }

    public function test($search,$em)
    {
        die('recherche');
        return 0;
    }

}