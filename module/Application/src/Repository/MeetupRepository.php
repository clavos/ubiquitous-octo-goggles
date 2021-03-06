<?php
declare(strict_types=1);
namespace Application\Repository;

use Application\Entity\Meetup;


final class MeetupRepository extends \Doctrine\ORM\EntityRepository{

    public function add($meetup) : void
    {
        $this->getEntityManager()->persist($meetup);
        $this->getEntityManager()->flush($meetup);
    }

}