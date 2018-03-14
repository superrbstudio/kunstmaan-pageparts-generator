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

        $options = $this->options->toArray();

        $this->generateFile(self::TEMPLATE);
        $this->generateFile(self::ADMIN_TYPE_TEMPLATE);
        $this->generateFile(self::VIEW_TEMPLATE);

        exit;

        return true;
    }

    /**
     * @param string                $template
     * @param GeneratorOptions|null $options
     */
    protected function generateFile($template, ?GeneratorOptions $options = null): void
    {
        if (null === $options) {
            $options = $this->options;
        }

        $template = str_replace('{class}', self::TYPE_CLASS, $template);
        $path     = $options->bundlePath.'/'.$template;

        if (!is_dir(dirname($path))) {
            mkdir(dirname($path), 0755, true);
        }
        $resource = fopen($options->bundlePath.'/'.$template, 'w');

        $twig = $this->factory->getTwig();
        fwrite($resource, $twig->render(self::TYPE_CLASS.'/'.$template.'.twig', $options->toArray()));
    }
}
