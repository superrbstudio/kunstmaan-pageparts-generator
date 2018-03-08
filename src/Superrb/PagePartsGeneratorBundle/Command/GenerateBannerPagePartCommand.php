<?php

namespace Superrb\PagePartsGeneratorBundle\Command;

use Sensio\Bundle\GeneratorBundle\Command\GeneratorCommand;
use Superrb\PagePartsGeneratorBundle\Generator\BannerPagePartGenerator;

class GenerateBannerPagePartCommand extends GeneratorCommand implements Contract\GeneratePagePartCommandInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = BannerPagePartGenerator::TYPE;
}
