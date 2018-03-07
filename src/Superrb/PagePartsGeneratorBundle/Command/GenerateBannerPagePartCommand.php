<?php

namespace Superrb\PagePartsGeneratorBundle\Command;

use Superrb\PagePartsGeneratorBundle\Generator\BannerPagePartGenerator;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class GenerateBannerPagePartCommand extends ContainerAwareCommand implements Contract\GeneratePagePartCommandInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = BannerPagePartGenerator::TYPE;
}
