<?php

declare(strict_types=1);

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Participants
 *
 * Attention : Doctrine génère des classes proxy qui étendent les entités, celles-ci ne peuvent donc pas être finales !
 *
 * @package Application\Entity
 * @ORM\Entity
 * @ORM\Table(name="Organisations")
 */
class Organisations
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=20)
     **/
    private $idmeetup;

    /**
     * @ORM\Column(type="string", length=20, nullable=false)
     */
    private $nom;



    public function __construct()
    {
        $this->idmeetup = Uuid::uuid4()->toString();
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->idmeetup;
    }

    /**
     * @param string $idmeetup
     */
    public function setId(string $idmeetup) : void
    {
        $this->idmeetup = $idmeetup;
    }


    /**
     * @return string
     */
    public function getNom() : string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom) : void
    {
        $this->nom = $nom;
    }

}
