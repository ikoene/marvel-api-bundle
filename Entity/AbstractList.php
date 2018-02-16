<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\Entity;

/**
 * Class AbstractList
 * @package Ikoene\MarvelApiBundle\DataContainer
 */
abstract class AbstractList
{
    /**
     * The number of total available items in this list.
     * Will always be greater than or equal to the "returned" value.
     *
     * @var integer
     */
    private $available;

    /**
     * The number of items returned in this list (up to 20).
     *
     * @var integer
     */
    private $returned;

    /**
     * The path to the full list.
     *
     * @var string
     */
    private $collectionURI;

    /**
     * @return int
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param int $available
     */
    public function setAvailable(int $available)
    {
        $this->available = $available;
    }

    /**
     * @return int
     */
    public function getReturned()
    {
        return $this->returned;
    }

    /**
     * @param int $returned
     */
    public function setReturned(int $returned)
    {
        $this->returned = $returned;
    }

    /**
     * @return string
     */
    public function getCollectionURI()
    {
        return $this->collectionURI;
    }

    /**
     * @param string $collectionURI
     */
    public function setCollectionURI(string $collectionURI)
    {
        $this->collectionURI = $collectionURI;
    }
}
