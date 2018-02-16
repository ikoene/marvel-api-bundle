<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\Entity;

/**
 * Class ComicList
 * @package Ikoene\MarvelApiBundle\Entity
 */
class ComicList extends AbstractList
{
    /**
     * The list of returned issues in this collection.
     *
     * @var array
     */
    private $items;

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items)
    {
        $this->items = $items;
    }
}
