<?php

namespace Check\CommitStripBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Card
 *
 * @ORM\Table(name="card")
 * @ORM\Entity(repositoryClass="Check\CommitStripBundle\Repository\CardRepository")
 */
class Card
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255)
     */
    private $picture;

    /**
     * @var int
     *
     * @ORM\Column(name="nbcard", type="integer")
     */
    private $nbcard;

    /**
     * Many Cards have One Story.
     * @ORM\ManyToOne(targetEntity="Story", inversedBy="cards")
     */
    private $story;

    public function __toString()
    {
        return 'Card #' . $this->id;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Card
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set nbcard
     *
     * @param integer $nbcard
     *
     * @return Card
     */
    public function setNbcard($nbcard)
    {
        $this->nbcard = $nbcard;

        return $this;
    }

    /**
     * Get nbcard
     *
     * @return int
     */
    public function getNbcard()
    {
        return $this->nbcard;
    }

    /**
     * Set story
     *
     * @param \Check\CommitStripBundle\Entity\Story $story
     *
     * @return Card
     */
    public function setStory(\Check\CommitStripBundle\Entity\Story $story = null)
    {
        $this->story = $story;

        return $this;
    }

    /**
     * Get story
     *
     * @return \Check\CommitStripBundle\Entity\Story
     */
    public function getStory()
    {
        return $this->story;
    }
}
