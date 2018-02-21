<?php

namespace Superrb\PagePartsGeneratorBundle\Command;

use Superrb\PagePartsGeneratorBundle\Generator\OpeningTimesPagePartGenerator;

class GenerateOpeningTimesPagePartCommand extends ContainerAwareCommand implements Helper\GeneratePagePartCommandInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = OpeningTimesPagePartGenerator::TYPE;
}
