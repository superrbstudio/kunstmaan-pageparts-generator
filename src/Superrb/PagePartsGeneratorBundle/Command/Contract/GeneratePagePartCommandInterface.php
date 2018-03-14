<?php

namespace Superrb\PagePartsGeneratorBundle\Command\Contract;

interface GeneratePagePartCommandInterface
{
    /**
     * Run the requested generator.
     *
     * @return bool
     */
    public function generate(): bool;
}
