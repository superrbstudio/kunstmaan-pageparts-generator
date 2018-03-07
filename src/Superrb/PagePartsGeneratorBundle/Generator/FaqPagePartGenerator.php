<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

use Superrb\PagePartsGeneratorBundle\GeneratorOptions;

class FaqPagePartGenerator extends AccordionPagePartGenerator
{
    use Helper\GeneratesPageParts;

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

    /**
     * @return GeneratorOptions
     */
    protected function getDefaultOptions(): GeneratorOptions
    {
        return parent::getDefaultOptions()->merge(new GeneratorOptions(self::DEFAULT_OPTIONS));
    }
}
