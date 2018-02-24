[![Build Status](https://travis-ci.org/ikoene/marvel-api-bundle.svg?branch=master)](https://travis-ci.org/ikoene/marvel-api-bundle)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ikoene/marvel-api-bundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/ikoene/marvel-api-bundle/?branch=master)
[![Packagist](https://img.shields.io/packagist/v/ikoene/marvel-api-bundle.svg)](https://packagist.org/packages/ikoene/marvel-api-bundle)
[![Installs](https://img.shields.io/packagist/dt/ikoene/marvel-api-bundle.svg)](https://packagist.org/packages/ikoene/marvel-api-bundle)
[![license](https://img.shields.io/github/license/ikoene/marvel-api-bundle.svg?maxAge=2592000)](https://github.com/ikoene/Marvel-API-bundle/blob/master/LICENSE)

# Marvel API bundle

The **Marvel Comics API** allows developers everywhere to access information about Marvel's vast library of comics—from what's coming up, to 70 years ago. This **Marvel API bundle** helps you explore the Marvel universe with great ease.
## Requirements

* PHP 7.1.0
* [Marvel API key](http://developer.marvel.com/account)
* Love for Marvel

## Installation

Applications that use Symfony Flex
----------------------------------

Open a command console, enter your project directory and execute:

```console
$ composer require ikoene/marvel-api-bundle
```

Applications that don't use Symfony Flex
----------------------------------------

### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require ikoene/marvel-api-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Ikoene\MarvelApiBundle\IkoeneMarvelApiBundle(),
        );

        // ...
    }

    // ...
}
```

### Step 3: Configure the Bundle

``` yaml
# You will need a public and private api key from https://developers.marvel.com".
# Set the keys as environment variables in the .env file.
ikoene_marvel_api:
    public_api_key: "%env(MARVEL_PUBLIC_API_KEY)%"
    private_api_key: "%env(MARVEL_PRIVATE_API_KEY)%"
```

## Usage

```
<?php

$client = $this->get('ikoene_marvel_api_client');

$response = $client->getCharacter(1009610);

var_dump($response);
```

### Endpoints

You can call every endpoint with an explicitly defined method. So if you, for example, want a list of comics containing a specific character, you can call `getComicsForCharacter()`.

```
$response = $client->getComicsForCharacter(1009610);
```

### Optional filters

It's also possible to add optional filters to the calls. Let's get all comics for 'Spider-Man' which title starts with 'Age of Ultron' and order the results by 'title'.

```
$comicFilter = new Ikoene\MarvelApiBundle\Entity\ComicFilter();
$comicFilter->setTitleStartsWith('Age of Ultron');
$comicFilter->setOrderBy('title');

$response = $client->getComicsForCharacter(1009610, $comicFilter);
```

Pretty easy, right?

## Additional info

* [Marvel API documentation](http://developer.marvel.com/docs)
* [Marvel API terms of use](http://developer.marvel.com/terms)
