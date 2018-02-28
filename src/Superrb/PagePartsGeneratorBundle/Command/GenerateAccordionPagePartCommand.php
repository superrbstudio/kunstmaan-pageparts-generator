<?php

namespace Superrb\PagePartsGeneratorBundle\Command;

use Superrb\PagePartsGeneratorBundle\Generator\AccordionPagePartGenerator;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class GenerateAccordionPagePartCommand extends ContainerAwareCommand implements Helper\GeneratePagePartCommandInterface
{
    use Helper\GeneratesPageParts {
        Helper\GeneratesPageParts::configure as __configureBase;
    }

    /**
     * @var string
     */
    const TYPE = AccordionPagePartGenerator::TYPE;

    /**
     * {@inheritdoc}
     */
    public function configure(): void
    {
        $this->__configureBase();
    }
}
