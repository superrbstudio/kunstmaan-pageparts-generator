<?php

namespace Superrb\PagePartsGeneratorBundle\Generator\Contract;

use Superrb\PagePartsGeneratorBundle\Exception\GeneratorException;
use Superrb\PagePartsGeneratorBundle\GeneratorOptions;
use Superrb\PagePartsGeneratorBundle\Service\GeneratorFactory;

interface GeneratorInterface
{
    /**
     * @param GeneratorFactory $factory
     * @param GeneratorOptions $options
     */
    public function __construct(GeneratorFactory $factory, GeneratorOptions $options);

    /**
     * @return GeneratorOptions
     */
    public function getDefaultOptions(): GeneratorOptions;

    /**
     * Generates the required page part.
     *
     * @throws GeneratorException
     *
     * @return bool
     */
    public function generate(): bool;
}
