<?php

namespace Superrb\PagePartsGeneratorBundle\Generator\Helper;

use Superrb\PagePartsGeneratorBundle\Exception\GeneratorException;

interface ChildGeneratorInterface extends GeneratorInterface
{
    /**
     * Generates the required page part.
     *
     * @throws GeneratorException
     *
     * @return bool
     */
    public function generateChildren(): bool;
}
