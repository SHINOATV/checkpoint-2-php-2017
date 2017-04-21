<?php

namespace CommitStripBundle\Entity;

/**
 * Card
 */
class Card
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $picture;

    /**
     * @var int
     */
    private $nbcard;


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
}

