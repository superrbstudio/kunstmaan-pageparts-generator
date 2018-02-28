<?php

namespace Superrb\PagePartsGeneratorBundle\Generator\Helper;

use Superrb\PagePartsGeneratorBundle\GeneratorOptions;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Twig\Environment;

trait GeneratesPageParts
{
    /**
     * @var Container
     */
    protected $container;

    /**
     * @var GeneratorOptions
     */
    protected $options;

    /**
     * @param GeneratorOptions $options
     * @param ContainerBuilder $container
     */
    public function __construct(ContainerBuilder $container, GeneratorOptions $options)
    {
        $this->container = $container;
        $this->options   = $this->getDefaultOptions()->merge($options);
    }

    /**
     * @var GeneratorOptions
     */
    protected function getDefaultOptions()
    {
        return new GeneratorOptions(self::DEFAULT_OPTIONS);
    }

    /**
     * @return bool
     */
    public function generate(): bool
    {
        /** @var Environment $twig */
        $loader = new \Twig\Loader\FilesystemLoader('');
        $twig   = $this->container->get('twig');
        echo $this->container->get('twig')->render(self::TEMPLATE, $this->options->toArray());
        exit;
    }
}
