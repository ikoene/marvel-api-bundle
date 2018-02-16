<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\Entity;

/**
 * Class Story
 * @package Ikoene\MarvelApiBundle\Entity
 */
class Story
{
    /**
     * The unique ID of the story resource.
     *
     * @var int
     */
    private $id;

    /**
     * The story title.
     *
     * @var string
     */
    private $title;

    /**
     * A short description of the story.
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
     * The story type e.g. interior story, cover, text story.
     *
     * @var string
     */
    private $type;

    /**
     * The date the resource was most recently modified.
     *
     * @var string
     */
    private $modified;

    /**
     * The representative image for this story.
     *
     * @var Image
     */
    private $thumbnail;

    /**
     * A resource list containing comics in which this story takes place.
     *
     * @var ComicList
     */
    private $comics;

    /**
     * A resource list containing series in which this story appears.
     *
     * @var SeriesList
     */
    private $series;

    /**
     * A resource list of the events in which this story appears.
     *
     * @var EventList
     */
    private $events;

    /**
     * A resource list of characters which appear in this story.
     *
     * @var CharacterList
     */
    private $characters;

    /**
     * A resource list of creators who worked on this story.
     *
     * @var CreatorList
     */
    private $creators;

    /**
     * A summary representation of the issue in which this story was originally published.
     *
     * @var ComicSummary
     */
    private $originalissue;

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
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
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
     * @return ComicSummary
     */
    public function getOriginalissue()
    {
        return $this->originalissue;
    }

    /**
     * @param ComicSummary $originalissue
     */
    public function setOriginalissue(ComicSummary $originalissue)
    {
        $this->originalissue = $originalissue;
    }
}
