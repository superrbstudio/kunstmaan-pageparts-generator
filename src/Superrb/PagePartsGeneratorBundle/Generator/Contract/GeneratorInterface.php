<?php

namespace Superrb\PagePartsGeneratorBundle\Generator\Contract;

use Superrb\PagePartsGeneratorBundle\Exception\GeneratorException;
use Superrb\PagePartsGeneratorBundle\GeneratorOptions;
use Superrb\PagePartsGeneratorBundle\Service\GeneratorFactory;

interface GeneratorInterface
{
    const BASE_OPTION_SPEC = [
        'className' => [
            'label'    => 'Class Name',
            'required' => true,
            'type'     => 'String',
            'validate' => '/PagePart$/',
        ],
    ];

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
