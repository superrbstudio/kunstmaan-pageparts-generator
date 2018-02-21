<?php

namespace Superrb\PagePartsGeneratorBundle\Command\Helper;

interface GeneratePagePartCommandInterface
{
    /**
     * Configure the command.
     */
    public function configure(): void;

    /**
     * Run the requested generator.
     */
    public function generate(): bool;
}
