<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\DataWrapper;

use Ikoene\MarvelApiBundle\DataContainer\StoryDataContainer;

/**
 * Class StoryDataWrapper
 * @package Ikoene\MarvelApiBundle\DataWrapper
 */
class StoryDataWrapper extends AbstractDataWrapper
{
    /**
     * The results returned by the call.
     *
     * @var mixed
     */
    private $data;

    /**
     * @return StoryDataContainer
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param StoryDataContainer $data
     */
    public function setData(StoryDataContainer $data)
    {
        $this->data = $data;
    }
}
