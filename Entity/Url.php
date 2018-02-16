<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\Entity;

/**
 * Class Url
 * @package Ikoene\MarvelApiBundle\Entity
 */
class Url
{
    /**
     * A text identifier for the URL.
     *
     * @var string
     */
    private $type;

    /**
     * A full URL (including scheme, domain, and path).
     *
     * @var string
     */
    private $url;

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
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
    }
}
