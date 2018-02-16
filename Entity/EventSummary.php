<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\Entity;

/**
 * Class EventSummary
 * @package Ikoene\MarvelApiBundle\Entity
 */
class EventSummary
{
    /**
     * The path to the individual event resource.
     *
     * @var string
     */
    private $resourceURI;

    /**
     * The name of the event.
     *
     * @var string
     */
    private $name;

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
}
