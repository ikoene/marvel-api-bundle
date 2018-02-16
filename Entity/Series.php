<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\Entity;

/**
 * Class Series
 * @package Ikoene\MarvelApiBundle\Entity
 */
class Series
{
    /**
     * The unique ID of the series resource.
     *
     * @var int
     */
    private $id;

    /**
     * The canonical title of the series.
     *
     * @var string
     */
    private $title;

    /**
     * A description of the series.
     *
     * @var string
     */
    private $description;

    /**
     * A set of public web site URLs for the resource.
     *
     * @var array
     */
    private $urls;

    /**
     * The canonical URL identifier for this resource.
     *
     * @var string
     */
    private $resourceURI;

    /**
     * The first year of publication for the series.
     *
     * @var int
     */
    private $startYear;

    /**
     * The last year of publication for the series (conventionally, 2099 for ongoing series).
     *
     * @var int
     */
    private $endYear;

    /**
     * The age-appropriateness rating for the series.
     *
     * @var string
     */
    private $rating;

    /**
     * The date the resource was most recently modified.
     *
     * @var string
     */
    private $modified;

    /**
     * The representative image for this series.
     *
     * @var Image
     */
    private $thumbnail;

    /**
     * A resource list containing comics in this series.
     *
     * @var ComicList
     */
    private $comics;

    /**
     * A resource list containing stories which occur in comics in this series.
     *
     * @var StoryList
     */
    private $stories;

    /**
     * A resource list containing events which take place in comics in this series.
     *
     * @var EventList
     */
    private $events;

    /**
     * A resource list containing characters which appear in comics in this series.
     *
     * @var CharacterList
     */
    private $characters;

    /**
     * A resource list of creators whose work appears in comics in this series.
     *
     * @var CreatorList
     */
    private $creators;

    /**
     * A summary representation of the series which preceded this series.
     *
     * @var SeriesSummary
     */
    private $previous;

    /**
     * A summary representation of the series which follows this series.
     *
     * @var SeriesSummary
     */
    private $next;

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
    public function getEndYear()
    {
        return $this->endYear;
    }

    /**
     * @param int $endYear
     */
    public function setEndYear(int $endYear)
    {
        $this->endYear = $endYear;
    }

    /**
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param string $rating
     */
    public function setRating(string $rating)
    {
        $this->rating = $rating;
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
     * @return SeriesSummary
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    /**
     * @param SeriesSummary $previous
     */
    public function setPrevious(SeriesSummary $previous)
    {
        $this->previous = $previous;
    }

    /**
     * @return SeriesSummary
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @param SeriesSummary $next
     */
    public function setNext(SeriesSummary $next)
    {
        $this->next = $next;
    }
}
