<?php

namespace Ikoene\MarvelApiBundle\Tests;

use Ikoene\MarvelApiBundle\IkoeneMarvelApiBundle;
use PHPUnit\Framework\TestCase;

class IkoeneMarvelApiBundleTest extends TestCase
{
    public function testBundle()
    {
        $this->assertInstanceOf('Symfony\Component\HttpKernel\Bundle\Bundle', new IkoeneMarvelApiBundle());
    }
}
