<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\Entity;

/**
 * Class CreatorFilter
 * @package Ikoene\MarvelApiBundle\Entity
 */
class CreatorFilter
{
    /**
     * Filter by creator first name (e.g. Brian).
     *
     * @var string
     */
    public $firstName;

    /**
     * Filter by creator middle name (e.g. Michael).
     *
     * @var string
     */
    public $middleName;

    /**
     * Filter by creator last name (e.g. Bendis).
     *
     * @var string
     */
    public $lastName;

    /**
     * Filter by suffix or honorific (e.g. Jr., Sr.).
     *
     * @var string
     */
    public $suffix;

    /**
     * Filter by creator names that match critera (e.g. B, St L).
     *
     * @var string
     */
    public $nameStartsWith;

    /**
     * Filter by creator first names that match critera (e.g. B, St L).
     *
     * @var string
     */
    public $firstNameStartsWith;

    /**
     * Filter by creator middle names that match critera (e.g. Mi).
     *
     * @var string
     */
    public $middleNameStartsWith;

    /**
     * Filter by creator last names that match critera (e.g. Ben).
     *
     * @var string
     */
    public $lastNameStartsWith;

    /**
     * Return only creators which have been modified since the specified date.
     *
     * @var string
     */
    public $modifiedSince;

    /**
     * Return only creators who worked on in the specified comics
     * (accepts a comma-separated list of ids).
     *
     * @var string
     */
    public $comics;

    /**
     * Return only creators who worked on the specified series
     * (accepts a comma-separated list of ids).
     *
     * @var string
     */
    public $series;

    /**
     * Return only creators who worked on comics that took place in the specified events
     * (accepts a comma-separated list of ids).
     *
     * @var string
     */
    public $events;

    /**
     * Return only creators who worked on the specified stories
     * (accepts a comma-separated list of ids).
     *
     * @var string
     */
    public $stories;

    /**
     * Order the result set by a field or fields.
     * Add a "-" to the value sort in descending order.
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
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param string $middleName
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * @param string $suffix
     */
    public function setSuffix(string $suffix)
    {
        $this->suffix = $suffix;
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
    public function getFirstNameStartsWith()
    {
        return $this->firstNameStartsWith;
    }

    /**
     * @param string $firstNameStartsWith
     */
    public function setFirstNameStartsWith(string $firstNameStartsWith)
    {
        $this->firstNameStartsWith = $firstNameStartsWith;
    }

    /**
     * @return string
     */
    public function getMiddleNameStartsWith()
    {
        return $this->middleNameStartsWith;
    }

    /**
     * @param string $middleNameStartsWith
     */
    public function setMiddleNameStartsWith(string $middleNameStartsWith)
    {
        $this->middleNameStartsWith = $middleNameStartsWith;
    }

    /**
     * @return string
     */
    public function getLastNameStartsWith()
    {
        return $this->lastNameStartsWith;
    }

    /**
     * @param string $lastNameStartsWith
     */
    public function setLastNameStartsWith(string $lastNameStartsWith)
    {
        $this->lastNameStartsWith = $lastNameStartsWith;
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
