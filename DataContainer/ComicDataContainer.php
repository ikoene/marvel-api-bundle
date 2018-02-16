<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\DataContainer;

use Ikoene\MarvelApiBundle\Entity\Comic;

/**
 * Class ComicDataContainer
 * @package Ikoene\MarvelApiBundle\DataContainer
 */
class ComicDataContainer extends AbstractDataContainer
{
    /**
     * The list of comics returned by the call
     *
     * @var array
     */
    private $results;

    /**
     * Gets one specific result
     *
     * @param $key
     *
     * @return Character
     */
    public function get($key)
    {
        return $this->results[$key];
    }

    /**
     * @return array
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param $item
     */
    public function addResult(Comic $item)
    {
        $this->results[] = $item;
    }
}
