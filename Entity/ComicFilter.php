<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\Entity;

/**
 * Class ComicFilter
 * @package Ikoene\MarvelApiBundle\Entity
 */
class ComicFilter
{
    /**
     * Filter by the issue format (e.g. comic, digital comic, hardcover).
     *
     * @var string
     */
    public $format;

    /**
     * Filter by the issue format type (comic or collection).
     *
     * @var string
     */
    public $formatType;

    /**
     * Exclude variants (alternate covers, secondary printings, director's cuts, etc.) from the result set.
     *
     * @var bool
     */
    public $noVariants;

    /**
     * Return comics within a predefined date range.
     *
     * @var string
     */
    public $dateDescriptor;

    /**
     * Return comics within a predefined date range.
     * Dates must be specified as date1,date2 (e.g. 2013-01-01,2013-01-02).
     * Dates are preferably formatted as YYYY-MM-DD but may be sent as any common date format.
     *
     * @var int
     */
    public $dateRange;

    /**
     * Return only issues in series whose title matches the input.
     *
     * @var string
     */
    public $title;

    /**
     * Return only issues in series whose title starts with the input.
     *
     * @var string
     */
    public $titleStartsWith;

    /**
     * Return only issues in series whose start year matches the input.
     *
     * @var int
     */
    public $startYear;

    /**
     * Return only issues in series whose issue number matches the input.
     *
     * @var int
     */
    public $issueNumber;

    /**
     * Filter by diamond code.
     *
     * @var string
     */
    public $diamondCode;

    /**
     * Filter by digital comic id.
     *
     * @var int
     */
    public $digitalId;

    /**
     * Filter by UPC.
     *
     * @var string
     */
    public $upc;

    /**
     * Filter by ISBN.
     *
     * @var string
     */
    public $isbn;

    /**
     * Filter by EAN.
     *
     * @var string
     */
    public $ean;

    /**
     * Filter by ISSN.
     *
     * @var string
     */
    public $issn;

    /**
     * Include only results which are available digitally.
     *
     * @var bool
     */
    public $hasDigitalIssue;

    /**
     * Return only comics which have been modified since the specified date.
     *
     * @var string
     */
    public $modifiedSince;

    /**
     * Return only comics which feature work by the specified creators
     * (accepts a comma-separated list of ids).
     *
     * @var string
     */
    public $creators;

    /**
     * Return only comics which feature the specified characters
     * (accepts a comma-separated list of ids).
     *
     * @var string
     */
    public $characters;

    /**
     * Return only comics which are part of the specified series
     * (accepts a comma-separated list of ids).
     *
     * @var string
     */
    public $series;

    /**
     * Return only comics which take place in the specified events
     * (accepts a comma-separated list of ids).
     *
     * @var string
     */
    public $events;

    /**
     * Return only comics which contain the specified stories
     * (accepts a comma-separated list of ids).
     *
     * @var string
     */
    public $stories;

    /**
     * Return only comics in which the specified characters appear together
     * (for example in which BOTH Spider-Man and Wolverine appear).
     * Accepts a comma-separated list of ids.
     *
     * @var string
     */
    public $sharedAppearances;

    /**
     * Return only comics in which the specified creators worked together
     * (for example in which BOTH Stan Lee and Jack Kirby did work).
     * Accepts a comma-separated list of ids.
     *
     * @var string
     */
    public $collaborators;

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
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param string $format
     */
    public function setFormat(string $format)
    {
        $this->format = $format;
    }

    /**
     * @return string
     */
    public function getFormatType()
    {
        return $this->formatType;
    }

    /**
     * @param string $formatType
     */
    public function setFormatType($formatType)
    {
        $this->formatType = $formatType;
    }

    /**
     * @return boolean
     */
    public function isNoVariants()
    {
        return $this->noVariants;
    }

    /**
     * @param boolean $noVariants
     */
    public function setNoVariants($noVariants)
    {
        $this->noVariants = $noVariants;
    }

    /**
     * @return string
     */
    public function getDateDescriptor()
    {
        return $this->dateDescriptor;
    }

    /**
     * @param string $dateDescriptor
     */
    public function setDateDescriptor($dateDescriptor)
    {
        $this->dateDescriptor = $dateDescriptor;
    }

    /**
     * @return int
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * @param int $dateRange
     */
    public function setDateRange($dateRange)
    {
        $this->dateRange = $dateRange;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitleStartsWith()
    {
        return $this->titleStartsWith;
    }

    /**
     * @param string $titleStartsWith
     */
    public function setTitleStartsWith(string $titleStartsWith)
    {
        $this->titleStartsWith = $titleStartsWith;
    }

    /**
     * @return int
     */
    public function getStartYear()
    {
        return $this->startYear;
    }

    /**
     * @param int $startYear
     */
    public function setStartYear(int $startYear)
    {
        $this->startYear = $startYear;
    }

    /**
     * @return int
     */
    public function getIssueNumber()
    {
        return $this->issueNumber;
    }

    /**
     * @param int $issueNumber
     */
    public function setIssueNumber(int $issueNumber)
    {
        $this->issueNumber = $issueNumber;
    }

    /**
     * @return string
     */
    public function getDiamondCode()
    {
        return $this->diamondCode;
    }

    /**
     * @param string $diamondCode
     */
    public function setDiamondCode(string $diamondCode)
    {
        $this->diamondCode = $diamondCode;
    }

    /**
     * @return int
     */
    public function getDigitalId()
    {
        return $this->digitalId;
    }

    /**
     * @param int $digitalId
     */
    public function setDigitalId(int $digitalId)
    {
        $this->digitalId = $digitalId;
    }

    /**
     * @return string
     */
    public function getUpc()
    {
        return $this->upc;
    }

    /**
     * @param string $upc
     */
    public function setUpc(string $upc)
    {
        $this->upc = $upc;
    }

    /**
     * @return string
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @param string $isbn
     */
    public function setIsbn(string $isbn)
    {
        $this->isbn = $isbn;
    }

    /**
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param string $ean
     */
    public function setEan(string $ean)
    {
        $this->ean = $ean;
    }

    /**
     * @return string
     */
    public function getIssn()
    {
        return $this->issn;
    }

    /**
     * @param string $issn
     */
    public function setIssn(string $issn)
    {
        $this->issn = $issn;
    }

    /**
     * @return boolean
     */
    public function isHasDigitalIssue()
    {
        return $this->hasDigitalIssue;
    }

    /**
     * @param boolean $hasDigitalIssue
     */
    public function setHasDigitalIssue(bool $hasDigitalIssue)
    {
        $this->hasDigitalIssue = $hasDigitalIssue;
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
    public function getCreators()
    {
        return $this->creators;
    }

    /**
     * @param string $creators
     */
    public function setCreators(string $creators)
    {
        $this->creators = $creators;
    }

    /**
     * @return string
     */
    public function getCharacters()
    {
        return $this->characters;
    }

    /**
     * @param string $characters
     */
    public function setCharacters(string $characters)
    {
        $this->characters = $characters;
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
    public function getSharedAppearances()
    {
        return $this->sharedAppearances;
    }

    /**
     * @param string $sharedAppearances
     */
    public function setSharedAppearances(string $sharedAppearances)
    {
        $this->sharedAppearances = $sharedAppearances;
    }

    /**
     * @return string
     */
    public function getCollaborators()
    {
        return $this->collaborators;
    }

    /**
     * @param string $collaborators
     */
    public function setCollaborators(string $collaborators)
    {
        $this->collaborators = $collaborators;
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
