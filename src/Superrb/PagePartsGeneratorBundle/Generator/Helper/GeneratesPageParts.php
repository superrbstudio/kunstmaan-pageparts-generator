<?php

namespace Superrb\PagePartsGeneratorBundle\Generator\Helper;

use Superrb\PagePartsGeneratorBundle\GeneratorOptions;
use Superrb\PagePartsGeneratorBundle\Service\GeneratorFactory;
use Symfony\Component\DependencyInjection\Container;

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
     * @param GeneratorFactory $factory
     * @param GeneratorOptions $options
     */
    public function __construct(GeneratorFactory $factory, GeneratorOptions $options)
    {
        $this->factory   = $factory;
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
        echo $this->factory->getTwig()->render(self::TEMPLATE, $this->options->toArray());
        exit;
    }
}
