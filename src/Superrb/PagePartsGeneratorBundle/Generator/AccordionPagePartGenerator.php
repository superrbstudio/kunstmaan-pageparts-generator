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
    const TEMPLATE = 'AccordionPagePart/Entity/AccordionPagePart.php.twig';

    /**
     * @var string
     */
    const ITEM_TEMPLATE = 'AccordionPagePart/Entity/AccordionPagePartItem.php.twig';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'            => 'AccordionPagePart',
        'tableName'            => 'accordion_page_parts',
        'titleFieldName'       => 'title',
        'descriptionFieldName' => 'description',
        'itemFieldName'        => 'items',
        'vendor'               => 'Superrb',
        'bundle'               => 'PagePartGeneratorTestBundle',
    ];
}
