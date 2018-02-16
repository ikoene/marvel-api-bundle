<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\Entity;

/**
 * Class StorySummary
 * @package Ikoene\MarvelApiBundle\Entity
 */
class StorySummary
{
    /**
     * The path to the individual story resource.
     *
     * @var string
     */
    private $resourceURI;

    /**
     * The canonical name of the story.
     *
     * @var string
     */
    private $name;

    /**
     * The type of the story (interior or cover).
     *
     * @var string
     */
    private $type;

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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }
}
