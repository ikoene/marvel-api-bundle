<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\DataContainer;

use Ikoene\MarvelApiBundle\Entity\Character;

/**
 * Class CharacterDataContainer
 * @package Ikoene\MarvelApiBundle\DataContainer
 */
class CharacterDataContainer extends AbstractDataContainer
{
    /**
     * The list of characters returned by the call.
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
    public function addResult(Character $item)
    {
        $this->results[] = $item;
    }
}
