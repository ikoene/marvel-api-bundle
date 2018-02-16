<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\Entity;

/**
 * Class ComicDate
 * @package Ikoene\MarvelApiBundle\Entity
 */
class ComicDate
{
    /**
     * A description of the date (e.g. onsale date, FOC date).
     *
     * @var string
     */
    private $type;

    /**
     * The date.
     *
     * @var string
     */
    private $date;

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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date)
    {
        $this->date = $date;
    }
}
