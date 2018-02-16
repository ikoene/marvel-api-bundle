<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\DataContainer;

use Ikoene\MarvelApiBundle\Entity\Story;

/**
 * Class StoryDataContainer
 * @package Ikoene\MarvelApiBundle\DataContainer
 */
class StoryDataContainer extends AbstractDataContainer
{
    /**
     * The list of stories returned by the call
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
    public function addResult(Story $item)
    {
        $this->results[] = $item;
    }
}
