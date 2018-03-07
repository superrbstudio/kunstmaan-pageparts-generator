<?php

namespace Superrb\PagePartsGeneratorBundle\Command;

use Superrb\PagePartsGeneratorBundle\Generator\SocialMediaPagePartGenerator;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class GenerateSocialMediaPagePartCommand extends ContainerAwareCommand implements Contract\GeneratePagePartCommandInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = SocialMediaPagePartGenerator::TYPE;
}
