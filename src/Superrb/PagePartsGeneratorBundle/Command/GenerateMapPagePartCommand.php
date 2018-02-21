<?php

namespace Superrb\PagePartsGeneratorBundle\Command;

use Superrb\PagePartsGeneratorBundle\Generator\MapPagePartGenerator;

class GenerateMapPagePartCommand extends ContainerAwareCommand implements Helper\GeneratePagePartCommandInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = MapPagePartGenerator::TYPE;
}
