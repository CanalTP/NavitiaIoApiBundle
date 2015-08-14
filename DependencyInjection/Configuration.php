<?php

namespace CanalTP\NavitiaIoApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
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
            ->arrayNode('authentification')
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
