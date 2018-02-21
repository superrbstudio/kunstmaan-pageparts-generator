<?php

namespace Superrb\PagePartsGeneratorBundle\Generator\Helper;

use Superrb\PagePartsGeneratorBundle\GeneratorOptions;

trait GeneratesPageParts
{
    /**
     * @var GeneratorOptions
     */
    protected $options;

    public function __construct(GeneratorOptions $options)
    {
        $this->options = $options;
    }

    public function generate(): bool
    {
    }
}
