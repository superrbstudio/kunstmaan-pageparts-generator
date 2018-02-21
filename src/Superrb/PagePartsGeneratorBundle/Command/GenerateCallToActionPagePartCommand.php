<?php

namespace Superrb\PagePartsGeneratorBundle\Command;

use Superrb\PagePartsGeneratorBundle\Generator\CallToActionPagePartGenerator;

class GenerateCallToActionPagePartCommand extends ContainerAwareCommand implements Helper\GeneratePagePartCommandInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = CallToActionPagePartGenerator::TYPE;
}
