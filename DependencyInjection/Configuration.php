<?php

namespace Emarref\Bundle\PubnubBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * @inheritDoc
     */
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder();

        $root = $builder->root('emarref_pubnub');

        $root
            ->children()
                ->scalarNode('publish_key')->isRequired()->end()
                ->scalarNode('subscribe_key')->isRequired()->end()
                ->scalarNode('secret_key')->defaultFalse()->end()
                ->scalarNode('cipher_key')->defaultFalse()->end()
                ->scalarNode('ssl')->defaultTrue()->end()
                ->scalarNode('origin')->defaultFalse()->end()
                ->scalarNode('pem_path')->defaultValue('%kernel.root_dir%/../vendor/pubnub/pubnub/')->end()
                ->scalarNode('uuid')->defaultValue('symfony')->end()
                ->scalarNode('proxy')->defaultFalse()->end()
                ->scalarNode('auth_key')->defaultFalse()->end()
                ->scalarNode('verify_peer')->defaultTrue()->end()
            ->end()
        ;

        return $builder;
    }
}
