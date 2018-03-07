<?php

namespace Superrb\PagePartsGeneratorBundle\Generator\Contract;

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
