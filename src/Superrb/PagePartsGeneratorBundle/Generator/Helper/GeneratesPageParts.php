<?php

namespace Superrb\PagePartsGeneratorBundle\Generator\Helper;

use Doctrine\Common\Inflector\Inflector;
use Superrb\PagePartsGeneratorBundle\Generator\Contract\ChildGeneratorInterface;
use Superrb\PagePartsGeneratorBundle\Generator\Contract\GeneratorInterface;
use Superrb\PagePartsGeneratorBundle\GeneratorOptions;
use Superrb\PagePartsGeneratorBundle\Service\GeneratorFactory;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

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
     * @var ObjectNormalizer
     */
    protected $normalizer;

    /**
     * @see GeneratorInterface::__construct()
     *
     * @param GeneratorFactory      $factory
     * @param GeneratorOptions|null $options
     */
    public function __construct(GeneratorFactory $factory, ?GeneratorOptions $options)
    {
        $this->factory    = $factory;
        $options          = $options ?: new GeneratorOptions();
        $this->options    = $this->getDefaultOptions()->merge($options);
        $this->normalizer = new CamelCaseToSnakeCaseNameConverter();

        if (!$this->options->className) {
            $this->options->className = static::TYPE_CLASS;
        }

        if (!$this->options->tableName) {
            $this->options->tableName = $this->normalizer->normalize(Inflector::pluralize($this->options->className));
        }

        if ($this->options->prefix) {
            $this->options->tableName = $this->options->prefix.'_'.$this->options->tableName;
        }
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

        echo $this->factory->getTwig()->render(str_replace('{class}', self::TYPE_CLASS, self::TEMPLATE), $this->options->toArray());
        echo $this->factory->getTwig()->render(str_replace('{class}', self::TYPE_CLASS, self::ADMIN_TYPE_TEMPLATE), $this->options->toArray());
        echo $this->factory->getTwig()->render(str_replace('{class}', self::TYPE_CLASS, self::VIEW_TEMPLATE), $this->options->toArray());

        exit;

        return true;
    }
}
