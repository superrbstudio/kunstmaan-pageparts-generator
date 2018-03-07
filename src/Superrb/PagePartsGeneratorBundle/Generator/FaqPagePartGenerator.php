<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class FaqPagePartGenerator extends AccordionPagePartGenerator implements Helper\GeneratorInterface, Helper\ChildGeneratorInterface
{
    use Helper\InheritsOptions;

    /**
     * @var string
     */
    const TYPE = 'faq';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'            => 'FaqPagePart',
        'tableName'            => 'faq_page_parts',
        'titleFieldName'       => 'question',
        'descriptionFieldName' => 'answer',
        'itemFieldName'        => 'questions',
    ];
}
