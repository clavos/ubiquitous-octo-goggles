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
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="string", length=40)
     **/
    private $idmeetup;

    /**
     * @ORM\Column(type="string", length=20, nullable=false)
     */
    private $nom;


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
    public function setId(string $idmeetup)
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
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

}
