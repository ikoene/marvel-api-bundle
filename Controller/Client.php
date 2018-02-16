<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\Controller;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Response;
use Ikoene\MarvelApiBundle\DataWrapper\CharacterDataWrapper;
use Ikoene\MarvelApiBundle\DataWrapper\ComicDataWrapper;
use Ikoene\MarvelApiBundle\DataWrapper\CreatorDataWrapper;
use Ikoene\MarvelApiBundle\DataWrapper\EventDataWrapper;
use Ikoene\MarvelApiBundle\DataWrapper\SeriesDataWrapper;
use Ikoene\MarvelApiBundle\DataWrapper\StoryDataWrapper;
use Ikoene\MarvelApiBundle\Entity\CharacterFilter;
use Ikoene\MarvelApiBundle\Entity\ComicFilter;
use Ikoene\MarvelApiBundle\Entity\CreatorFilter;
use Ikoene\MarvelApiBundle\Entity\EventFilter;
use Ikoene\MarvelApiBundle\Entity\SeriesFilter;
use Ikoene\MarvelApiBundle\Entity\StoryFilter;
use JMS\Serializer\SerializerBuilder;

/**
 * Class Client
 * @package ikoene\Marvel
 */
class Client
{
    /**
     * @var string
     */
    private $baseUrl = 'http://gateway.marvel.com/v1/public/';

    /**
     * @var string
     */
    private $publicApiKey;

    /**
     * @var string
     */
    private $privateApiKey;

    /**
     * Client constructor.
     *
     * @param string $publicApiKey
     * @param string $privateApiKey
     */
    public function __construct(string $publicApiKey, string $privateApiKey)
    {
        $this->publicApiKey = $publicApiKey;
        $this->privateApiKey = $privateApiKey;
    }

    /**
     * Fetches lists of comic characters with optional filters.
     *
     * @param CharacterFilter|null $characterFilter
     *
     * @return CharacterDataWrapper
     */
    public function getCharacters(CharacterFilter $characterFilter = null) : CharacterDataWrapper
    {
        $response = $this->call('characters', $characterFilter);

        $formattedResponse = $this->formatResponse($response, CharacterDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * This method fetches a single character resource.
     *
     * @param int $id
     *
     * @return CharacterDataWrapper
     */
    public function getCharacter(int $id) : CharacterDataWrapper
    {
        $response = $this->call('characters/' . $id);

        $formattedResponse = $this->formatResponse($response, CharacterDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comics containing a specific character, with optional filters.
     *
     * @param int $id
     * @param ComicFilter $comicFilter
     *
     * @return ComicDataWrapper
     */
    public function getComicsForCharacter(int $id, ComicFilter $comicFilter = null) : ComicDataWrapper
    {
        $response = $this->call('characters/' . $id . '/comics', $comicFilter);

        $formattedResponse = $this->formatResponse($response, ComicDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of events in which a specific character appears, with optional filters.
     *
     * @param int $id
     * @param EventFilter $eventFilter
     *
     * @return EventDataWrapper
     */
    public function getEventsForCharacter(int $id, EventFilter $eventFilter = null) : EventDataWrapper
    {
        $response = $this->call('characters/' . $id . '/events', $eventFilter);

        $formattedResponse = $this->formatResponse($response, EventDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comic series in which a specific character appears, with optional filters.
     *
     * @param int $id
     * @param SeriesFilter $seriesFilter
     *
     * @return SeriesDataWrapper
     */
    public function getSeriesForCharacter(int $id, SeriesFilter $seriesFilter = null) : SeriesDataWrapper
    {
        $response = $this->call('characters/' . $id . '/series', $seriesFilter);

        $formattedResponse = $this->formatResponse($response, SeriesDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comic stories featuring a specific character with optional filters.
     *
     * @param int $id
     * @param StoryFilter $storyFilter
     *
     * @return StoryDataWrapper
     */
    public function getStoriesForCharacter(int $id, StoryFilter $storyFilter = null) : StoryDataWrapper
    {
        $response = $this->call('characters/' . $id . '/stories', $storyFilter);

        $formattedResponse = $this->formatResponse($response, StoryDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comics with optional filters.
     *
     * @param ComicFilter|null $comicFilter
     *
     * @return ComicDataWrapper
     */
    public function getComics(ComicFilter $comicFilter = null) : ComicDataWrapper
    {
        $response = $this->call('comics', $comicFilter);

        $formattedResponse = $this->formatResponse($response, ComicDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * This method fetches a single comic resource.
     *
     * @param int $id
     *
     * @return ComicDataWrapper
     */
    public function getComic(int $id) : ComicDataWrapper
    {
        $response = $this->call('comics/' . $id);

        $formattedResponse = $this->formatResponse($response, ComicDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of characters which appear in a specific comic with optional filters.
     *
     * @param int $id
     * @param CharacterFilter $characterFilter
     *
     * @return CharacterDataWrapper
     */
    public function getCharactersForComic(int $id, CharacterFilter $characterFilter = null) : CharacterDataWrapper
    {
        $response = $this->call('comics/' . $id . '/characters', $characterFilter);

        $formattedResponse = $this->formatResponse($response, CharacterDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comic creators whose work appears in a specific comic, with optional filters.
     *
     * @param int $id
     * @param CreatorFilter $creatorFilter
     *
     * @return CreatorDataWrapper
     */
    public function getCreatorsForComics(int $id, CreatorFilter $creatorFilter = null) : CreatorDataWrapper
    {
        $response = $this->call('comics/' . $id . '/creators', $creatorFilter);

        $formattedResponse = $this->formatResponse($response, CreatorDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of events in which a specific comic appears, with optional filters.
     *
     * @param int $id
     * @param EventFilter $eventFilter
     *
     * @return EventDataWrapper
     */
    public function getEventsForComics(int $id, EventFilter $eventFilter = null) : EventDataWrapper
    {
        $response = $this->call('comics/' . $id . '/events', $eventFilter);

        $formattedResponse = $this->formatResponse($response, EventDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comic stories in a specific comic issue, with optional filters.
     *
     * @param int $id
     * @param EventFilter $storyFilter
     *
     * @return StoryDataWrapper
     */
    public function getStoriesForComics(int $id, EventFilter $storyFilter = null) : StoryDataWrapper
    {
        $response = $this->call('comics/' . $id . '/stories', $storyFilter);

        $formattedResponse = $this->formatResponse($response, StoryDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of events with optional filters.
     *
     * @param EventFilter|null $eventFilter
     *
     * @return EventDataWrapper
     */
    public function getEvents(EventFilter $eventFilter = null) : EventDataWrapper
    {
        $response = $this->call('events', $eventFilter);

        $formattedResponse = $this->formatResponse($response, EventDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * This method fetches a single event resource.
     *
     * @param int $id
     *
     * @return EventDataWrapper
     */
    public function getEvent(int $id) : EventDataWrapper
    {
        $response = $this->call('events/' . $id);

        $formattedResponse = $this->formatResponse($response, EventDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of characters which appear in a specific event, with optional filters.
     *
     * @param int $id
     * @param CharacterFilter $characterFilter
     *
     * @return CharacterDataWrapper
     */
    public function getCharactersForEvent(int $id, CharacterFilter $characterFilter = null) : CharacterDataWrapper
    {
        $response = $this->call('events/' . $id . '/characters', $characterFilter);

        $formattedResponse = $this->formatResponse($response, CharacterDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comics which take place during a specific event, with optional filters.
     *
     * @param int $id
     * @param ComicFilter $comicFilter
     *
     * @return ComicDataWrapper
     */
    public function getComicsForEvent(int $id, ComicFilter $comicFilter = null) : ComicDataWrapper
    {
        $response = $this->call('events/' . $id . '/comics', $comicFilter);

        $formattedResponse = $this->formatResponse($response, ComicDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comic creators whose work appears in a specific event, with optional filters.
     *
     * @param int $id
     * @param CreatorFilter $creatorFilter
     *
     * @return CreatorDataWrapper
     */
    public function getCreatorsForEvent(int $id, CreatorFilter $creatorFilter = null) : CreatorDataWrapper
    {
        $response = $this->call('events/' . $id . '/creators', $creatorFilter);

        $formattedResponse = $this->formatResponse($response, CreatorDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comic series in which a specific event takes place, with optional filters.
     *
     * @param int $id
     * @param SeriesFilter $seriesFilter
     *
     * @return SeriesDataWrapper
     */
    public function getSeriesForEvent(int $id, SeriesFilter $seriesFilter = null) : SeriesDataWrapper
    {
        $response = $this->call('events/' . $id . '/series', $seriesFilter);

        $formattedResponse = $this->formatResponse($response, SeriesDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comic stories from a specific event, with optional filters.
     *
     * @param int $id
     * @param StoryFilter $storyFilter
     *
     * @return StoryDataWrapper
     */
    public function getStoriesForEvent(int $id, StoryFilter $storyFilter = null) : StoryDataWrapper
    {
        $response = $this->call('events/' . $id . '/stories', $storyFilter);

        $formattedResponse = $this->formatResponse($response, StoryDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comic creators with optional filters.
     *
     * @param CreatorFilter|null $creatorFilter
     *
     * @return CreatorDataWrapper
     */
    public function getCreators(CreatorFilter $creatorFilter = null) : CreatorDataWrapper
    {
        $response = $this->call('creators', $creatorFilter);

        $formattedResponse = $this->formatResponse($response, CreatorDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * This method fetches a single creator resource.
     *
     * @param int $id
     *
     * @return CreatorDataWrapper
     */
    public function getCreator(int $id) : CreatorDataWrapper
    {
        $response = $this->call('creators/' . $id);

        $formattedResponse = $this->formatResponse($response, CreatorDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of events featuring the work of a specific creator with optional filters.
     *
     * @param int $id
     * @param CreatorFilter $creatorFilter
     *
     * @return CreatorDataWrapper
     */
    public function getComicsForCreator(int $id, CreatorFilter $creatorFilter = null) : CreatorDataWrapper
    {
        $response = $this->call('creators/' . $id . '/comics', $creatorFilter);

        $formattedResponse = $this->formatResponse($response, CreatorDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comic series in which a specific creator's work appears, with optional filters.
     *
     * @param int $id
     * @param SeriesFilter $seriesFilter
     *
     * @return SeriesDataWrapper
     */
    public function getSeriesForCreator(int $id, SeriesFilter $seriesFilter = null) : SeriesDataWrapper
    {
        $response = $this->call('creators/' . $id . '/series', $seriesFilter);

        $formattedResponse = $this->formatResponse($response, SeriesDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comic stories by a specific creator with optional filters.
     *
     * @param int $id
     * @param StoryFilter $storyFilter
     *
     * @return StoryDataWrapper
     */
    public function getStoriesForCreator(int $id, StoryFilter $storyFilter = null) : StoryDataWrapper
    {
        $response = $this->call('creators/' . $id . '/stories', $storyFilter);

        $formattedResponse = $this->formatResponse($response, StoryDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comic series with optional filters.
     *
     * @param SeriesFilter|null $seriesFilter
     *
     * @return SeriesDataWrapper
     */
    public function getSeries(SeriesFilter $seriesFilter = null) : SeriesDataWrapper
    {
        $response = $this->call('series', $seriesFilter);

        $formattedResponse = $this->formatResponse($response, SeriesDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * This method fetches a single comic series resource.
     *
     * @param int $id
     *
     * @return SeriesDataWrapper
     */
    public function getASeries(int $id) : SeriesDataWrapper
    {
        $response = $this->call('series/' . $id);

        $formattedResponse = $this->formatResponse($response, SeriesDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of characters which appear in specific series, with optional filters.
     *
     * @param int $id
     * @param CharacterFilter $characterFilter
     *
     * @return CharacterDataWrapper
     */
    public function getCharactersForSeries(int $id, CharacterFilter $characterFilter = null) : CharacterDataWrapper
    {
        $response = $this->call('series/' . $id . '/characters', $characterFilter);

        $formattedResponse = $this->formatResponse($response, CharacterDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comics which are published as part of a specific series, with optional filters.
     *
     * @param int $id
     * @param ComicFilter $comicFilter
     *
     * @return ComicDataWrapper
     */
    public function getComicsForSeries(int $id, ComicFilter $comicFilter = null) : ComicDataWrapper
    {
        $response = $this->call('series/' . $id . '/comics', $comicFilter);

        $formattedResponse = $this->formatResponse($response, ComicDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comic creators whose work appears in a specific series, with optional filters.
     *
     * @param int $id
     * @param CreatorFilter $creatorFilter
     *
     * @return CreatorDataWrapper
     */
    public function getCreatorsForSeries(int $id, CreatorFilter $creatorFilter = null) : CreatorDataWrapper
    {
        $response = $this->call('series/' . $id . '/creators', $creatorFilter);

        $formattedResponse = $this->formatResponse($response, CreatorDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of events which occur in a specific series, with optional filters.
     *
     * @param int $id
     * @param EventFilter $eventFilter
     *
     * @return EventDataWrapper
     */
    public function getEventsForSeries(int $id, EventFilter $eventFilter = null) : EventDataWrapper
    {
        $response = $this->call('series/' . $id . '/events', $eventFilter);

        $formattedResponse = $this->formatResponse($response, EventDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comic stories from a specific series with optional filters.
     *
     * @param int $id
     * @param StoryFilter $storyFilter
     *
     * @return StoryDataWrapper
     */
    public function getStoriesForSeries(int $id, StoryFilter $storyFilter = null) : StoryDataWrapper
    {
        $response = $this->call('series/' . $id . '/stories', $storyFilter);

        $formattedResponse = $this->formatResponse($response, StoryDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comic stories with optional filters.
     *
     * @param StoryFilter|null $storyFilter
     *
     * @return StoryDataWrapper
     */
    public function getStories(StoryFilter $storyFilter = null) : StoryDataWrapper
    {
        $response = $this->call('stories', $storyFilter);

        $formattedResponse = $this->formatResponse($response, StoryDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * This method fetches a single comic story resource.
     *
     * @param int $id
     *
     * @return StoryDataWrapper
     */
    public function getStory(int $id) : StoryDataWrapper
    {
        $response = $this->call('stories/' . $id);

        $formattedResponse = $this->formatResponse($response, StoryDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comic characters appearing in a single story, with optional filters.
     *
     * @param int $id
     * @param CharacterFilter $characterFilter
     *
     * @return CharacterDataWrapper
     */
    public function getCharactersForStory(int $id, CharacterFilter $characterFilter = null) : CharacterDataWrapper
    {
        $response = $this->call('stories/' . $id . '/characters', $characterFilter);

        $formattedResponse = $this->formatResponse($response, CharacterDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comics in which a specific story appears, with optional filters.
     *
     * @param int $id
     * @param ComicFilter $comicFilter
     *
     * @return ComicDataWrapper
     */
    public function getComicsForStory(int $id, ComicFilter $comicFilter = null) : ComicDataWrapper
    {
        $response = $this->call('stories/' . $id . '/comics', $comicFilter);

        $formattedResponse = $this->formatResponse($response, ComicDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comic creators whose work appears in a specific story, with optional filters.
     *
     * @param int $id
     * @param CreatorFilter $creatorFilter
     *
     * @return CreatorDataWrapper
     */
    public function getCreatorsForStory(int $id, CreatorFilter $creatorFilter = null) : CreatorDataWrapper
    {
        $response = $this->call('stories/' . $id . '/creators', $creatorFilter);

        $formattedResponse = $this->formatResponse($response, CreatorDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of events in which a specific story appears, with optional filters.
     *
     * @param int $id
     * @param EventFilter $eventFilter
     *
     * @return EventDataWrapper
     */
    public function getEventsForStory(int $id, EventFilter $eventFilter = null) : EventDataWrapper
    {
        $response = $this->call('stories/' . $id . '/events', $eventFilter);

        $formattedResponse = $this->formatResponse($response, EventDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * Fetches lists of comic series in which the specified story takes place.
     *
     * @param int $id
     * @param SeriesFilter $seriesFilter
     *
     * @return SeriesDataWrapper
     */
    public function getSeriesForStory(int $id, SeriesFilter $seriesFilter = null) : SeriesDataWrapper
    {
        $response = $this->call('stories/' . $id . '/series', $seriesFilter);

        $formattedResponse = $this->formatResponse($response, SeriesDataWrapper::class);

        return $formattedResponse;
    }

    /**
     * @param string $operation
     * @param object|null $query
     *
     * @return Response
     */
    private function call(string $operation, $query = null) : Response
    {
        $url = $this->baseUrl . $operation;

        $params = array();
        if (!empty($query)) {
            $params = get_object_vars($query);
        }

        return $this->send($url, $params);
    }

    /**
     * @param string $url
     * @param array $params
     *
     * @return Response
     */
    private function send(string $url, array $params = array()) : Response
    {
        $client = new GuzzleClient();

        $query = [
            'ts' => time(),
            'apikey' => $this->publicApiKey,
            'hash' => md5(time() . $this->privateApiKey . $this->publicApiKey),
        ];

        foreach (array_filter($params) as $key => $value) {
            $query[$key] = $value;
        }

        try {
            return $client->request('GET', $url, ['query' => $query]);
        } catch (ClientException $e) {
            if ($e->hasResponse()) {
                throw new ClientException($e->getMessage(), $e->getRequest());
            }
        }
    }

    /**
     * @param Response $response
     * @param string $dataWrapper
     *
     * @return Object
     */
    private function formatResponse(Response $response, string $dataWrapper)
    {
        $serializer = SerializerBuilder::create()
            ->addMetadataDir(__DIR__ . '/../Serializer', 'Ikoene\MarvelApiBundle')
            ->build();

        return $serializer->deserialize($response->getBody()->getContents(), $dataWrapper, 'json');
    }
}
