<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\Entity;

/**
 * Class CreatorSummary
 * @package Ikoene\MarvelApiBundle\Entity
 */
class CreatorSummary
{
    /**
     * The path to the individual creator resource.
     *
     * @var string
     */
    private $resourceURI;

    /**
     * The full name of the creator.
     *
     * @var string
     */
    private $name;

    /**
     * The role of the creator in the parent entity.
     *
     * @var string
     */
    private $role;

    /**
     * @return string
     */
    public function getResourceURI()
    {
        return $this->resourceURI;
    }

    /**
     * @param string $resourceURI
     */
    public function setResourceURI(string $resourceURI)
    {
        $this->resourceURI = $resourceURI;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole(string $role)
    {
        $this->role = $role;
    }
}
