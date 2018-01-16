<?php

declare(strict_types=1);
namespace Application\Form;

use Application\Entity\Meetup;
use Application\Entity\Organisateurs;
use Zend\Form\Element\Textarea;
use Zend\Form\Element\Text;
use Zend\Form\Element\Submit;
use Zend\Form\Element\Date;
use Zend\Form\Form;
use Doctrine\ORM\EntityManager;
use DoctrineORMModule\Form\Element\EntitySelect;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;

class MeetupForm extends Form
{

    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        parent::__construct('meetup');

        $hydrator = new DoctrineHydrator($entityManager, Meetup::class);
        $this->setHydrator($hydrator);

        //Titre
        $this->add([
            'type' => Text::class,
            'name' => 'titre',
            'options' => [
                'label' => 'Titre',
            ],
            'attributes' => [
                'class' => 'form-control',
                'required' => 'required'
            ],
        ]);

        //Description
        $this->add([
            'type' => Textarea::class,
            'name' => 'description',
            'options' => [
                'label' => 'Description',
            ],
            'attributes' => [
                'class' => 'form-control',
                'required' => 'required',
            ],
        ]);

        //Date Début
        $this->add([
            'type' => Date::class,
            'name' => 'date_start',
            'options' => [
                'label' => 'Date Début',
                'format' => 'Y-m-d',
            ],
            'attributes' => [
                'class' => 'form-control',
                'required' => 'required',
            ],
        ]);

        //Date Fin
        $this->add([
            'type' => Date::class,
            'name' => 'date_end',
            'options' => [
                'label' => 'Date Fin',
                'format' => 'Y-m-d',
            ],
            'attributes' => [
                'class' => 'form-control',
                'required' => 'required'
            ],
        ]);


        //Submit
        $this->add([
            'type' => Submit::class,
            'name' => 'submit',
            'attributes' => [
                'value' => 'Submit',
                'class' => 'btn btn-success'
            ],
        ]);


    }
}