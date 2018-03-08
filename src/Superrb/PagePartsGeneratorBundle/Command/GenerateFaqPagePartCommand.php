<?php

namespace Superrb\PagePartsGeneratorBundle\Command;

use Superrb\PagePartsGeneratorBundle\Generator\FaqPagePartGenerator;

class GenerateFaqPagePartCommand extends GenerateAccordionPagePartCommand
{
    /**
     * @var string
     */
    const TYPE = FaqPagePartGenerator::TYPE;
}
