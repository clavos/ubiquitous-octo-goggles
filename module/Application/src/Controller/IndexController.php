<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Entity\Meetup;
use Doctrine\ORM\EntityRepository;

class IndexController extends AbstractActionController
{
    /**
     * Entity manager.
     * @var \Doctrine\ORM\EntityRepository
     */
    private $entityManager;

    public function __construct(EntityRepository $meetupRepository)
    {
        $this->meetupRepository = $meetupRepository;
    }

    public function indexAction()
    {
        $meetup = $this->meetupRepository->findAll();

        // Render the view template
        return new ViewModel([
            'meetups' => $meetup
        ]);
    }
}