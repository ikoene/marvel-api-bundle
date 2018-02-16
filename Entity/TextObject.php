<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\Entity;

/**
 * Class TextObject
 * @package Ikoene\MarvelApiBundle\Entity
 */
class TextObject
{
    /**
     * The canonical type of the text object (e.g. solicit text, preview text, etc.).
     *
     * @var string
     */
    private $type;

    /**
     * The IETF language tag denoting the language the text object is written in.
     *
     * @var string
     */
    private $language;

    /**
     * The text.
     *
     * @var string
     */
    private $text;

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
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage(string $language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text)
    {
        $this->text = $text;
    }
}
