<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\Entity;

/**
 * Class ComicPrice
 * @package Ikoene\MarvelApiBundle\Entity
 */
class ComicPrice
{
    /**
     * A description of the price (e.g. print price, digital price).
     *
     * @var string
     */
    private $type;

    /**
     * The price (all prices in USD).
     *
     * @var float
     */
    private $price;

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
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price)
    {
        $this->price = $price;
    }
}
