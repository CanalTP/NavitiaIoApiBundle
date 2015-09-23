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
            ->arrayNode('customers')
                ->prototype('array')
                ->cannotBeEmpty()
                    ->children()
                        ->scalarNode('host')
                           ->isRequired()
                        ->end()
                        ->scalarNode('username')
                            ->isRequired()
                        ->end()
                        ->scalarNode('password')
                            ->isRequired()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ->end();

        return $treeBuilder;
    }
}
