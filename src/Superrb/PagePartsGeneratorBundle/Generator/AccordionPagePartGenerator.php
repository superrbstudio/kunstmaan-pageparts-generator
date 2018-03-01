<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class AccordionPagePartGenerator implements Helper\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'accordion';

    /**
     * @var string
     */
    const TEMPLATE = 'Entity/AccordionPagePart.php.twig';

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
