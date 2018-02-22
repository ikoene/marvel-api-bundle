<?php

namespace Ikoene\MarvelApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package Ikoene\MarvelApiBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('ikoene_marvel_api');
        $rootNode
            ->children()
            ->scalarNode('public_api_key')->isRequired()->end()
            ->scalarNode('private_api_key')->isRequired()->end()
            ->end()
            ->end();

        return $treeBuilder;
    }
}
