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
     * @see GeneratorInterface::__construct()
     *
     * @param GeneratorFactory $factory
     * @param GeneratorOptions $options
     */
    public function __construct(GeneratorFactory $factory, GeneratorOptions $options)
    {
        $this->factory   = $factory;
        $this->options   = $this->getDefaultOptions()->merge($options);
    }

    /**
     * @see GeneratorInterface::getDefaultOptions()
     *
     * @return GeneratorOptions
     */
    public function getDefaultOptions(): GeneratorOptions
    {
        return new GeneratorOptions(self::DEFAULT_OPTIONS);
    }

    /**
     * @see GeneratorInterface::generate()
     *
     * @return bool
     */
    public function generate(): bool
    {
        if ($this instanceof ChildGeneratorInterface) {
            $this->generateChildren();
        }

        echo $this->factory->getTwig()->render(self::TYPE_CLASS.'/'.self::TEMPLATE, $this->options->toArray());

        if (self::ADMIN_TYPE_TEMPLATE) {
            echo $this->factory->getTwig()->render(self::TYPE_CLASS.'/'.self::ADMIN_TYPE_TEMPLATE, $this->options->toArray());
        }

        exit;

        return true;
    }
}
