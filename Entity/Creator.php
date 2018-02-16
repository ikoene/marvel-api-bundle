<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\Entity;

/**
 * Class Creator
 * @package Ikoene\MarvelApiBundle\Entity
 */
class Creator
{
    /**
     * The unique ID of the creator resource.
     *
     * @var int
     */
    private $id;

    /**
     * The first name of the creator.
     *
     * @var string
     */
    private $firstName;

    /**
     * The middle name of the creator.
     *
     * @var string
     */
    private $middleName;

    /**
     * The last name of the creator.
     *
     * @var string
     */
    private $lastName;

    /**
     * The suffix or honorific for the creator.
     *
     * @var string
     */
    private $suffix;

    /**
     * The full name of the creator (a space-separated concatenation of the above four fields).
     *
     * @var string
     */
    private $fullName;

    /**
     * The date the resource was most recently modified.
     *
     * @var string
     */
    private $modified;

    /**
     * The canonical URL identifier for this resource.
     *
     * @var string
     */
    private $resourceURI;

    /**
     * A set of public web site URLs for the resource.
     *
     * @var array
     */
    private $urls;

    /**
     * The representative image for this creator.
     *
     * @var Image
     */
    private $thumbnail;

    /**
     * A resource list containing the series which feature work by this creator.
     *
     * @var SeriesList
     */
    private $series;

    /**
     * A resource list containing the stories which feature work by this creator.
     *
     * @var StoryList
     */
    private $stories;

    /**
     * A resource list containing the comics which feature work by this creator.
     *
     * @var ComicList
     */
    private $comics;

    /**
     * A resource list containing the events which feature work by this creator.
     *
     * @var EventList
     */
    private $events;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

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
    public function setFirstName(string $firstName)
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
    public function setMiddleName(string $middleName)
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
    public function setLastName(string $lastName)
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
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * @return string
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @param string $modified
     */
    public function setModified(string $modified)
    {
        $this->modified = $modified;
    }

    /**
     * @return string
     */
    public function getResourceURI()
    {
        return $this->resourceURI;
    }

    /**
     * @param string $resourceURI
     */
    public function setResourceURI(string $resourceURI)
    {
        $this->resourceURI = $resourceURI;
    }

    /**
     * @return array
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * @param array $urls
     */
    public function setUrls(array $urls)
    {
        $this->urls = $urls;
    }

    /**
     * @return Image
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param Image $thumbnail
     */
    public function setThumbnail(Image $thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * @return SeriesList
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param SeriesList $series
     */
    public function setSeries(SeriesList $series)
    {
        $this->series = $series;
    }

    /**
     * @return StoryList
     */
    public function getStories()
    {
        return $this->stories;
    }

    /**
     * @param StoryList $stories
     */
    public function setStories(StoryList $stories)
    {
        $this->stories = $stories;
    }

    /**
     * @return ComicList
     */
    public function getComics()
    {
        return $this->comics;
    }

    /**
     * @param ComicList $comics
     */
    public function setComics(ComicList $comics)
    {
        $this->comics = $comics;
    }

    /**
     * @return EventList
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param EventList $events
     */
    public function setEvents(EventList $events)
    {
        $this->events = $events;
    }
}
