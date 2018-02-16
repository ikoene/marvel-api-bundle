<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\DataWrapper;

use Ikoene\MarvelApiBundle\DataContainer\CharacterDataContainer;

/**
 * Class CharacterDataWrapper
 * @package Ikoene\MarvelApiBundle\DataWrapper
 */
class CharacterDataWrapper extends AbstractDataWrapper
{
    /**
     * The results returned by the call.
     *
     * @var mixed
     */
    private $data;

    /**
     * @return CharacterDataContainer
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param CharacterDataContainer $data
     */
    public function setData(CharacterDataContainer $data)
    {
        $this->data = $data;
    }
}
