<?php

namespace Ikoene\MarvelApiBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Class IkoeneMarvelApiExtension
 * @package Ikoene\MarvelApiBundle\DependencyInjection
 */
class IkoeneMarvelApiExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__ . '/../Resources/config')
        );
        $loader->load('services.yml');

        $container->getDefinition('ikoene_marvel_api_client')
            ->setArgument(0, $config['public_api_key'])
            ->setArgument(1, $config['private_api_key']);
    }
}
