<?php

namespace Superrb\PagePartsGeneratorBundle\Command\Contract;

interface GeneratePagePartCommandInterface
{
    /**
     * Run the requested generator.
     */
    public function generate(): bool;
}
