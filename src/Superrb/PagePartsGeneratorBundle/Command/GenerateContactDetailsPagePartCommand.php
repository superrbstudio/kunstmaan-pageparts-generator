<?php

namespace Superrb\PagePartsGeneratorBundle\Command;

use Superrb\PagePartsGeneratorBundle\Generator\ContactDetailsPagePartGenerator;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class GenerateContactDetailsPagePartCommand extends ContainerAwareCommand implements Helper\GeneratePagePartCommandInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = ContactDetailsPagePartGenerator::TYPE;
}
