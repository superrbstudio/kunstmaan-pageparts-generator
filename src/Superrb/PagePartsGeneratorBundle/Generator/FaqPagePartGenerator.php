<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class FaqPagePartGenerator extends AccordionPagePartGenerator implements Contract\GeneratorInterface, Contract\ChildGeneratorInterface
{
    use Helper\InheritsOptions;

    /**
     * @var string
     */
    const TYPE = 'faq';

    /**
     * @var string
     */
    const TYPE_CLASS = 'FaqPagePart';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'titleFieldName'       => 'question',
        'descriptionFieldName' => 'answer',
        'itemFieldName'        => 'questions',
    ];
}
