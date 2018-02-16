<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Character
 * @package Ikoene\MarvelApiBundle\Entity
 */
class Character
{
    /**
     * The unique ID of the character resource.
     *
     * @var int
     */
    private $id;

    /**
     * The name of the character.
     *
     * @var string
     */
    private $name;

    /**
     * A short bio or description of the character.
     *
     * @var string
     */
    private $description;

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
     * @var ArrayCollection
     */
    private $urls;

    /**
     * The representative image for this character.
     *
     * @var Image
     */
    private $thumbnail;

    /**
     * A resource list containing comics which feature this character.
     *
     * @var ComicList
     */
    private $comics;

    /**
     * A resource list of stories in which this character appears.
     *
     * @var StoryList
     */
    private $stories;

    /**
     * A resource list of events in which this character appears.
     *
     * @var EventList
     */
    private $events;

    /**
     * A resource list of series in which this character appears.
     *
     * @var SeriesList
     */
    private $series;

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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
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
     * @return ArrayCollection
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * @param ArrayCollection $urls
     */
    public function setUrls(ArrayCollection $urls)
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
}
