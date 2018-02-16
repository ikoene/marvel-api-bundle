<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\Entity;

/**
 * Class Event
 * @package Ikoene\MarvelApiBundle\Entity
 */
class Event
{
    /**
     * The unique ID of the event resource.
     *
     * @var int
     */
    private $id;

    /**
     * The title of the event.
     *
     * @var string
     */
    private $title;

    /**
     * A description of the event.
     *
     * @var string
     */
    private $description;

    /**
     * The canonical URL identifier for this resource.
     *
     * @var string
     */
    private $resourceURI;

    /**
     * A set of public web site URLs for the event.
     *
     * @var array
     */
    private $urls;

    /**
     * The date the resource was most recently modified.
     *
     * @var string
     */
    private $modified;

    /**
     * The date of publication of the first issue in this event.
     *
     * @var string
     */
    private $start;

    /**
     * The date of publication of the last issue in this event.
     *
     * @var string
     */
    private $end;

    /**
     * The representative image for this event.
     *
     * @var Image
     */
    private $thumbnail;

    /**
     * A resource list containing the comics in this event.
     *
     * @var ComicList
     */
    private $comics;

    /**
     * A resource list containing the stories in this event.
     *
     * @var StoryList
     */
    private $stories;

    /**
     * A resource list containing the series in this event.
     *
     * @var SeriesList
     */
    private $series;

    /**
     * A resource list containing creators whose work appears in this event.
     *
     * @var CreatorList
     */
    private $creators;

    /**
     * A resource list containing the characters which appear in this event.
     *
     * @var CharacterList
     */
    private $characters;

    /**
     * A summary representation of the event which follows this event.
     *
     * @var EventSummary
     */
    private $next;

    /**
     * A summary representation of the event which preceded this event.
     *
     * @var EventSummary
     */
    private $previous;

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
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param string $start
     */
    public function setStart($start)
    {
        $this->start = $start;
    }

    /**
     * @return string
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param string $end
     */
    public function setEnd($end)
    {
        $this->end = $end;
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
     * @return CreatorList
     */
    public function getCreators()
    {
        return $this->creators;
    }

    /**
     * @param CreatorList $creators
     */
    public function setCreators(CreatorList $creators)
    {
        $this->creators = $creators;
    }

    /**
     * @return CharacterList
     */
    public function getCharacters()
    {
        return $this->characters;
    }

    /**
     * @param CharacterList $characters
     */
    public function setCharacters(CharacterList $characters)
    {
        $this->characters = $characters;
    }

    /**
     * @return EventSummary
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @param EventSummary $next
     */
    public function setNext($next)
    {
        $this->next = $next;
    }

    /**
     * @return EventSummary
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    /**
     * @param EventSummary $previous
     */
    public function setPrevious($previous)
    {
        $this->previous = $previous;
    }
}
