<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\DataWrapper;

use Ikoene\MarvelApiBundle\DataContainer\SeriesDataContainer;

/**
 * Class SeriesDataWrapper
 * @package Ikoene\MarvelApiBundle\DataWrapper
 */
class SeriesDataWrapper extends AbstractDataWrapper
{
    /**
     * The results returned by the call.
     *
     * @var mixed
     */
    private $data;

    /**
     * @return SeriesDataContainer
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param SeriesDataContainer $data
     */
    public function setData(SeriesDataContainer $data)
    {
        $this->data = $data;
    }
}
