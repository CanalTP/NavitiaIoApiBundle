<?php

namespace CanalTP\NavitiaIoApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('canal_tp_navitia_io_api');

        $rootNode
        ->children()
            ->scalarNode('url')
                ->isRequired()
            ->end()
            ->arrayNode('authentication')
                ->isRequired()
                ->children()
                    ->scalarNode('user')
                        ->isRequired()
                    ->end()
                    ->scalarNode('password')
                        ->isRequired()
                    ->end()
                ->end()
            ->end()
        ->end();

        return $treeBuilder;
    }
}
