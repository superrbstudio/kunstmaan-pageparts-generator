<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class AccordionPagePartGenerator implements Helper\GeneratorInterface
{
    /**
     * @var string
     */
    const TYPE = 'accordion';

    /**
     * @var string
     */
    const TEMPLATE = '@SuperrbPagePartsGenerator:Entity/AccordionPagePart.php.twig';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'            => 'AccordionPagePart',
        'tableName'            => 'accordion_page_parts',
        'titleFieldName'       => 'title',
        'descriptionFieldName' => 'description',
    ];
}