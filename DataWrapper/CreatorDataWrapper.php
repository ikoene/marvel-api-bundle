<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\DataWrapper;

use Ikoene\MarvelApiBundle\DataContainer\CreatorDataContainer;

/**
 * Class CreatorDataWrapper
 * @package Ikoene\MarvelApiBundle\DataWrapper
 */
class CreatorDataWrapper extends AbstractDataWrapper
{
    /**
     * The results returned by the call.
     *
     * @var mixed
     */
    private $data;

    /**
     * @return CreatorDataContainer
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param CreatorDataContainer $data
     */
    public function setData(CreatorDataContainer $data)
    {
        $this->data = $data;
    }
}
