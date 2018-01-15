<?php
namespace Application\Controller;

use Interop\Container\ContainerInterface;
use Doctrine\ORM\EntityManager;
use Application\Entity\Meetup;
use Application\Form\MeetupForm;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;



/**
 * This is the factory for IndexController. Its purpose is to instantiate the
 * controller.
 */
class IndexControllerFactory
{
    public function __invoke(ContainerInterface $container) : IndexController
    {
        $meetups = $container->get(EntityManager::class)->getRepository(Meetup::class);
        $entmanager = $container->get(EntityManager::class);
        $meetupform = new MeetupForm($entmanager);
        $hydrator = new DoctrineHydrator($entmanager);


        // Instantiate the controller and inject dependencies
        return new IndexController($meetups, $meetupform, $hydrator);
    }
}