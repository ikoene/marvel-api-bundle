<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\DataContainer;

/**
 * Class AbstractDataContainer
 * @package Ikoene\MarvelApiBundle\DataContainer
 */
abstract class AbstractDataContainer
{
    /**
     * The requested offset (number of skipped results) of the call.
     *
     * @var int
     */
    private $offset;

    /**
     * The requested result limit.
     *
     * @var int
     */
    private $limit;

    /**
     * The total number of resources available given the current filter set.
     *
     * @var int
     */
    private $total;

    /**
     * The total number of results returned by this call.
     *
     * @var int
     */
    private $count;

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     */
    public function setOffset(int $offset)
    {
        $this->offset = $offset;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit(int $limit)
    {
        $this->limit = $limit;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param int $total
     */
    public function setTotal(int $total)
    {
        $this->total = $total;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(int $count)
    {
        $this->count = $count;
    }
}
