<?php

namespace Superrb\PagePartsGeneratorBundle\Generator\Contract;

use Superrb\PagePartsGeneratorBundle\Exception\GeneratorException;
use Superrb\PagePartsGeneratorBundle\GeneratorOptions;
use Superrb\PagePartsGeneratorBundle\Service\GeneratorFactory;

interface GeneratorInterface
{
    /**
     * @var string
     */
    const TEMPLATE = 'Entity/PageParts/{class}.php';

    /**
     * @var string
     */
    const ADMIN_TYPE_TEMPLATE = 'Form/PageParts/{class}AdminType.php';

    /**
     * @var string
     */
    const VIEW_TEMPLATE = 'Resources/views/PageParts/{class}/view.html.twig';

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
