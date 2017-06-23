<?php
/**
 * Created by PhpStorm.
 * User: Maxence
 * Date: 22/06/2017
 * Time: 09:29
 */
namespace EniBundle\Repository;

use Doctrine\ORM\EntityRepository;


class EntrepriseRepository extends EntityRepository
{
    public function search($search,$em)
    {
        die('recherche');
        return 0;
    }

    public function test(){
        die('test');
        return 0;
    }

    public function findByville(){
        die('test');
        return array('test' => 'test');
    }

}