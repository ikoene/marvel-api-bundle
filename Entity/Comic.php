<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\Entity;

/**
 * Class Comic
 * @package Ikoene\MarvelApiBundle\Entity
 */
class Comic
{
    /**
     * The unique ID of the comic resource.
     *
     * @var int
     */
    private $id;

    /**
     * The ID of the digital comic representation of this comic.
     * Will be 0 if the comic is not available digitally.
     *
     * @var int
     */
    private $digitalId;

    /**
     * The canonical title of the comic.
     *
     * @var string
     */
    private $title;

    /**
     * The number of the issue in the series (will generally be 0 for collection formats).
     *
     * @var float
     */
    private $issueNumber;

    /**
     * If the issue is a variant (e.g. an alternate cover, second printing, or director’s cut), a text description of the variant.
     *
     * @var string
     */
    private $variantDescription;

    /**
     * The preferred description of the comic.
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
     * The ISBN for the comic (generally only populated for collection formats).
     *
     * @var string
     */
    private $isbn;

    /**
     * The UPC barcode number for the comic (generally only populated for periodical formats).
     *
     * @var string
     */
    private $upc;

    /**
     * The Diamond code for the comic.
     *
     * @var string
     */
    private $diamondCode;

    /**
     * The EAN barcode for the comic.
     *
     * @var string
     */
    private $ean;

    /**
     * The ISSN barcode for the comic.
     *
     * @var string
     */
    private $issn;

    /**
     * The publication format of the comic e.g. comic, hardcover, trade paperback.
     *
     * @var string
     */
    private $format;

    /**
     * The number of story pages in the comic.
     *
     * @var int
     */
    private $pageCount;

    /**
     * A set of descriptive text blurbs for the comic.
     *
     * @var array
     */
    private $textObjects;

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
     * A summary representation of the series to which this comic belongs.
     *
     * @var SeriesSummary
     */
    private $series;

    /**
     * A list of variant issues for this comic
     * (includes the "original" issue if the current issue is a variant).
     *
     * @var array
     */
    private $variants;

    /**
     * A list of collections which include this comic
     * (will generally be empty if the comic's format is a collection).
     *
     * @var array
     */
    private $collections;

    /**
     * A list of issues collected in this comic
     * (will generally be empty for periodical formats such as "comic" or "magazine").
     *
     * @var array
     */
    private $collectedIssues;

    /**
     * A list of key dates for this comic.
     *
     * @var array
     */
    private $dates;

    /**
     * A list of prices for this comic.
     *
     * @var array
     */
    private $prices;

    /**
     * The representative image for this comic.
     *
     * @var Image
     */
    private $thumbnail;

    /**
     * A list of promotional images associated with this comic.
     *
     * @var array
     */
    private $images;

    /**
     * A resource list containing the creators associated with this comic.
     *
     * @var CreatorList
     */
    private $creators;

    /**
     * A resource list containing the characters which appear in this comic.
     *
     * @var CharacterList
     */
    private $characters;

    /**
     * A resource list containing the stories which appear in this comic.
     *
     * @var StoryList
     */
    private $stories;

    /**
     * A resource list containing the events in which this comic appears.
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
     * @return float
     */
    public function getIssueNumber()
    {
        return $this->issueNumber;
    }

    /**
     * @param float $issueNumber
     */
    public function setIssueNumber(float $issueNumber)
    {
        $this->issueNumber = $issueNumber;
    }

    /**
     * @return string
     */
    public function getVariantDescription()
    {
        return $this->variantDescription;
    }

    /**
     * @param string $variantDescription
     */
    public function setVariantDescription(string $variantDescription)
    {
        $this->variantDescription = $variantDescription;
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
     * @return int
     */
    public function getPageCount()
    {
        return $this->pageCount;
    }

    /**
     * @param int $pageCount
     */
    public function setPageCount(int $pageCount)
    {
        $this->pageCount = $pageCount;
    }

    /**
     * @return array
     */
    public function getTextObjects()
    {
        return $this->textObjects;
    }

    /**
     * @param array $textObjects
     */
    public function setTextObjects(array $textObjects)
    {
        $this->textObjects = $textObjects;
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
     * @return SeriesSummary
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param SeriesSummary $series
     */
    public function setSeries(SeriesSummary $series)
    {
        $this->series = $series;
    }

    /**
     * @return array
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * @param array $variants
     */
    public function setVariants(array $variants)
    {
        $this->variants = $variants;
    }

    /**
     * @return array
     */
    public function getCollections()
    {
        return $this->collections;
    }

    /**
     * @param array $collections
     */
    public function setCollections(array $collections)
    {
        $this->collections = $collections;
    }

    /**
     * @return array
     */
    public function getCollectedIssues()
    {
        return $this->collectedIssues;
    }

    /**
     * @param array $collectedIssues
     */
    public function setCollectedIssues(array $collectedIssues)
    {
        $this->collectedIssues = $collectedIssues;
    }

    /**
     * @return array
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * @param array $dates
     */
    public function setDates(array $dates)
    {
        $this->dates = $dates;
    }

    /**
     * @return array
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @param array $prices
     */
    public function setPrices(array $prices)
    {
        $this->prices = $prices;
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
     * @return array
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param array $images
     */
    public function setImages(array $images)
    {
        $this->images = $images;
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
}
