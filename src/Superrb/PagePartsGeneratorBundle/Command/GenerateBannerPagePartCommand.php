<?php

namespace Superrb\PagePartsGeneratorBundle\Command;

use Superrb\PagePartsGeneratorBundle\Generator\BannerPagePartGenerator;

class GenerateBannerPagePartCommand extends ContainerAwareCommand implements Helper\GeneratePagePartCommandInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = BannerPagePartGenerator::TYPE;
}
