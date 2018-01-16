<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\MeetupForm;
use Zend\Http\PhpEnvironment\Request;
use Doctrine\ORM\EntityRepository;
use Application\Entity\Meetup;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;



class IndexController extends AbstractActionController
{
    /**
     * Entity manager.
     * @var \Doctrine\ORM\EntityRepository
     */
    private $meetupRepository;

    /**
     * @var MeetupForm
     */
    private $meetupForm;

    /**
     * @var DoctrineHydrator
     */
    private $hydrator;

    public function __construct(EntityRepository $meetupRepository, MeetupForm $meetupForm, DoctrineHydrator $hydrator)
    {
        $this->meetupRepository = $meetupRepository;
        $this->meetupForm = $meetupForm;
        $this->hydrator = $hydrator;
    }

    public function indexAction()
    {
        $meetup = $this->meetupRepository->findAll();

        // Render the view template
        return new ViewModel([
            'meetups' => $meetup
        ]);
    }

    public function addAction()
    {
        $form = $this->meetupForm;

        /* @var $request Request */
        $request = $this->getRequest();

        if($request->isPost()){

            //$form->setInputFilter($this->customInputFilter);
            $form->setData($request->getPost());

            if($form->isValid()){
                $meetup = new Meetup();
                $meetup = $this->hydrator->hydrate($form->getData(),$meetup);
                $this->meetupRepository->add($meetup);
                return $this->redirect()->toRoute('home');
            }
        }
        $form->prepare();

        return new ViewModel([
            'form' => $form,
        ]);
    }
}