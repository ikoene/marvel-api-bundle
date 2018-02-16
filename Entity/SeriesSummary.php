<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\Entity;

/**
 * Class SeriesSummary
 * @package Ikoene\MarvelApiBundle\Entity
 */
class SeriesSummary
{
    /**
     * The path to the individual series resource.
     *
     * @var string
     */
    private $resourceURI;

    /**
     * The canonical name of the series.
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
