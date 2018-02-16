<?php declare(strict_types = 1);

namespace Ikoene\MarvelApiBundle\DataWrapper;

/**
 * Class AbstractDataWrapper
 * @package Ikoene\MarvelApiBundle\DataWrapper
*/
abstract class AbstractDataWrapper
{
    /**
     * The HTTP status code of the returned result.
     *
     * @var int
     */
    private $code;

    /**
     * A string description of the call status.
     *
     * @var string
     */
    private $status;

    /**
     * The copyright notice for the returned result.
     *
     * @var string
     */
    private $copyright;

    /**
     * The attribution notice for this result. Please display either this notice or the contents of the attributionHTML field on all screens which contain data from the Marvel Comics API.
     *
     * @var string
     */
    private $attributionText;

    /**
     * An HTML representation of the attribution notice for this result. Please display either this notice or the contents of the attributionText field on all screens which contain data from the Marvel Comics API.
     *
     * @var string
     */
    private $attributionHTML;

    /**
     * A digest value of the content returned by the call.
     *
     * @var string
     */
    private $etag;

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode(int $code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * @param string $copyright
     */
    public function setCopyright(string $copyright)
    {
        $this->copyright = $copyright;
    }

    /**
     * @return string
     */
    public function getAttributionText()
    {
        return $this->attributionText;
    }

    /**
     * @param string $attributionText
     */
    public function setAttributionText(string $attributionText)
    {
        $this->attributionText = $attributionText;
    }

    /**
     * @return string
     */
    public function getAttributionHTML()
    {
        return $this->attributionHTML;
    }

    /**
     * @param string $attributionHTML
     */
    public function setAttributionHTML(string $attributionHTML)
    {
        $this->attributionHTML = $attributionHTML;
    }

    /**
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param string $etag
     */
    public function setEtag(string $etag)
    {
        $this->etag = $etag;
    }
}
