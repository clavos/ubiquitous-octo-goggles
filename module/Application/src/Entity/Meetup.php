<?php

declare(strict_types=1);

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Meetup
 *
 * Attention : Doctrine génère des classes proxy qui étendent les entités, celles-ci ne peuvent donc pas être finales !
 *
 * @package Application\Entity
 * @ORM\Entity(repositoryClass="\Application\Repository\MeetupRepository")
 * @ORM\Table(name="Meetup")
 */
class Meetup
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="string", length=40)
     **/
    private $idmeetup;

    /**
     * @ORM\Column(type="string", length=300, nullable=false)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=1500, nullable=true)
     */
    private $description = '';

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $datedeb;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $datefin;

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
    public function getTitre() : string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre(string $titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDatedeb() : string
    {
        return $this->datedeb;
    }

    /**
     * @param string $datedeb
     */
    public function setDatedeb(string $datedeb)
    {
        $this->datedeb = $datedeb;
    }

    /**
     * @return string
     */
    public function getDatefin() : string
    {
        return $this->datefin;
    }

    /**
     * @param string $datefin
     */
    public function setDatefin(string $datefin)
    {
        $this->datefin = $datefin;
    }
}
