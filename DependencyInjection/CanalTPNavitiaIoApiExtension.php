<?php

namespace CanalTP\NavitiaIoApiBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 */
class CanalTPNavitiaIoApiExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $container->setParameter('canal_tp_navitia_io_api.url', $config['url']);
        $container->setParameter('canal_tp_navitia_io_api.auth.user', $config['authentication']['user']);
        $container->setParameter('canal_tp_navitia_io_api.auth.password', $config['authentication']['password']);
    }
}
