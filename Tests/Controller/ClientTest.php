<?php

namespace Ikoene\MarvelApiBundle\Tests\Controller;

use Ikoene\MarvelApiBundle\Controller\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    /**
     * @var Client
     */
    protected $client;

    protected function setUp()
    {
        $this->client = new Client(getenv('PUBLIC_API_KEY'), getenv('PRIVATE_API_KEY'));
    }

    function testCharacters()
    {
        $response = $this->client->getCharacters();

        $this->assertInstanceOf(
            'Ikoene\MarvelApiBundle\DataWrapper\CharacterDataWrapper',
            $response
        );
    }

    function testComics()
    {
        $response = $this->client->getComics();

        $this->assertInstanceOf(
            'Ikoene\MarvelApiBundle\DataWrapper\ComicDataWrapper',
            $response
        );
    }

    function testEvents()
    {
        $response = $this->client->getEvents();

        $this->assertInstanceOf(
            'Ikoene\MarvelApiBundle\DataWrapper\EventDataWrapper',
            $response
        );
    }

    function testCreators()
    {
        $response = $this->client->getCreators();

        $this->assertInstanceOf(
            'Ikoene\MarvelApiBundle\DataWrapper\CreatorDataWrapper',
            $response
        );
    }

    function testStories()
    {
        $response = $this->client->getStories();

        $this->assertInstanceOf(
            'Ikoene\MarvelApiBundle\DataWrapper\StoryDataWrapper',
            $response
        );
    }

    function testSeries()
    {
        $response = $this->client->getSeries();

        $this->assertInstanceOf(
            'Ikoene\MarvelApiBundle\DataWrapper\SeriesDataWrapper',
            $response
        );
    }
}
