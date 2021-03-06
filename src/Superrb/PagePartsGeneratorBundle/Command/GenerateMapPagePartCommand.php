<?php

namespace Superrb\PagePartsGeneratorBundle\Command;

use Superrb\PagePartsGeneratorBundle\Generator\MapPagePartGenerator;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class GenerateMapPagePartCommand extends ContainerAwareCommand implements Contract\GeneratePagePartCommandInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = MapPagePartGenerator::TYPE;
}
