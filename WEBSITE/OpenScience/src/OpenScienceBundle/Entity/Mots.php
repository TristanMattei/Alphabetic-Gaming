<?php

namespace OpenScienceBundle\Entity;

/**
 * Mots
 */
class Mots
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $langue;

    /**
     * @var string
     */
    private $mots;

    /**
     * @var string
     */
    private $definition;

    /**
     * @var int
     */
    private $niveau;

    /**
     * @var array
     */
    private $link;


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
     * Set langue
     *
     * @param string $langue
     *
     * @return Mots
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return string
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set mots
     *
     * @param string $mots
     *
     * @return Mots
     */
    public function setMots($mots)
    {
        $this->mots = $mots;

        return $this;
    }

    /**
     * Get mots
     *
     * @return string
     */
    public function getMots()
    {
        return $this->mots;
    }

    /**
     * Set definition
     *
     * @param string $definition
     *
     * @return Mots
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;

        return $this;
    }

    /**
     * Get definition
     *
     * @return string
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Set niveau
     *
     * @param integer $niveau
     *
     * @return Mots
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return int
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set link
     *
     * @param array $link
     *
     * @return Mots
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return array
     */
    public function getLink()
    {
        return $this->link;
    }
}

