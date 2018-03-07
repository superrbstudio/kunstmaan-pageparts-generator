<?php

namespace Superrb\PagePartsGeneratorBundle\Command;

use Superrb\PagePartsGeneratorBundle\Generator\FaqPagePartGenerator;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class GenerateFaqPagePartCommand extends ContainerAwareCommand implements Contract\GeneratePagePartCommandInterface
{
    use Helper\GeneratesPageParts {
        Helper\GeneratesPageParts::configure as __configureBase;
    }

    /**
     * @var string
     */
    const TYPE = FaqPagePartGenerator::TYPE;

    /**
     * {@inheritdoc}
     */
    public function configure(): void
    {
        $this->__configureBase();
    }
}
