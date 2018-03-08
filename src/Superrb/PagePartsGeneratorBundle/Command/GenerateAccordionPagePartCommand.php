<?php

namespace Superrb\PagePartsGeneratorBundle\Command;

use Kunstmaan\GeneratorBundle\Command\KunstmaanGenerateCommand;
use Superrb\PagePartsGeneratorBundle\Generator\AccordionPagePartGenerator;

class GenerateAccordionPagePartCommand extends KunstmaanGenerateCommand implements Contract\GeneratePagePartCommandInterface
{
    use Helper\GeneratesPageParts {
        Helper\GeneratesPageParts::doInteract as parentDoInteract;
    }

    /**
     * @var string
     */
    const TYPE = AccordionPagePartGenerator::TYPE;

    public function doInteract()
    {
        $this->parentDoInteract();
    }
}
