<?php

namespace Superrb\PagePartsGeneratorBundle\Generator\Helper;

use Superrb\PagePartsGeneratorBundle\Exception\GeneratorException;

interface GeneratorInterface
{
    /**
     * Generates the required page part.
     *
     * @throws GeneratorException
     *
     * @return bool
     */
    public function generate(): bool;
}
