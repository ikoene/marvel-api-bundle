<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\Entity;

/**
 * Class CharacterFilter
 * @package Ikoene\MarvelApiBundle\Entity
 */
class CharacterFilter
{
    /**
     * Return only characters matching the specified full character name (e.g. Spider-Man).
     *
     * @var string
     */
    public $name;

    /**
     * Return characters with names that begin with the specified string (e.g. Sp).
     *
     * @var string
     */
    public $nameStartsWith;

    /**
     * Return only characters which have been modified since the specified date.
     *
     * @var string
     */
    public $modifiedSince;

    /**
     * Return only characters which appear the specified series (accepts a comma-separated list of ids).
     *
     * @var string
     */
    public $series;

    /**
     * Return only characters which appear in the specified comics (accepts a comma-separated list of ids).
     *
     * @var string
     */
    public $comics;

    /**
     * Return only characters which appear the specified stories (accepts a comma-separated list of ids).
     *
     * @var string
     */
    public $stories;

    /**
     * Return only characters which appear in the specified events (accepts a comma-separated list of ids).
     *
     * @var string
     */
    public $events;

    /**
     * Order the result set by a field or fields. Add a "-" to the value sort in descending order.
     * Multiple values are given priority in the order in which they are passed.
     *
     * @var string
     */
    public $orderBy;

    /**
     * Limit the result set to the specified number of resources.
     *
     * @var int
     */
    public $limit;

    /**
     * Skip the specified number of resources in the result set.
     *
     * @var int
     */
    public $offset;

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

    /**
     * @return string
     */
    public function getNameStartsWith()
    {
        return $this->nameStartsWith;
    }

    /**
     * @param string $nameStartsWith
     */
    public function setNameStartsWith(string $nameStartsWith)
    {
        $this->nameStartsWith = $nameStartsWith;
    }

    /**
     * @return string
     */
    public function getModifiedSince()
    {
        return $this->modifiedSince;
    }

    /**
     * @param string $modifiedSince
     */
    public function setModifiedSince(string $modifiedSince)
    {
        $this->modifiedSince = $modifiedSince;
    }

    /**
     * @return int
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param string $series
     */
    public function setSeries(string $series)
    {
        $this->series = $series;
    }

    /**
     * @return string
     */
    public function getComics()
    {
        return $this->comics;
    }

    /**
     * @param string $comics
     */
    public function setComics(string $comics)
    {
        $this->comics = $comics;
    }

    /**
     * @return string
     */
    public function getStories()
    {
        return $this->stories;
    }

    /**
     * @param string $stories
     */
    public function setStories(string $stories)
    {
        $this->stories = $stories;
    }

    /**
     * @return string
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param string $events
     */
    public function setEvents(string $events)
    {
        $this->events = $events;
    }

    /**
     * @return string
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * @param string $orderBy
     */
    public function setOrderBy(string $orderBy)
    {
        $this->orderBy = $orderBy;
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
}
