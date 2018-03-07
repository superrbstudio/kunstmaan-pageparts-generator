<?php

namespace Superrb\PagePartsGeneratorBundle\Generator\Helper;

use Superrb\PagePartsGeneratorBundle\Generator\Contract\GeneratorInterface;
use Superrb\PagePartsGeneratorBundle\GeneratorOptions;

trait InheritsOptions
{
    /**
     * @see GeneratorInterface::getDefaultOptions()
     *
     * @return GeneratorOptions
     */
    public function getDefaultOptions(): GeneratorOptions
    {
        return parent::getDefaultOptions()->merge(new GeneratorOptions(self::DEFAULT_OPTIONS));
    }
}
