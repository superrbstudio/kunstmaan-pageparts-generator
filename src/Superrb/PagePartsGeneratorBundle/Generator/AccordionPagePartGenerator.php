<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class AccordionPagePartGenerator implements Helper\GeneratorInterface, Helper\ChildGeneratorInterface
{
    use Helper\GeneratesPageParts,
        Helper\GeneratesPagePartChildren;

    /**
     * @var string
     */
    const TYPE = 'accordion';

    /**
     * @var string
     */
    const TYPE_CLASS = 'AccordionPagePart';

    /**
     * @var string
     */
    const TEMPLATE = 'Entity/PageParts/AccordionPagePart.php.twig';

    /**
     * @var string
     */
    const ITEM_TEMPLATE = 'Entity/AccordionPagePartItem.php.twig';

    /**
     * @var string
     */
    const ADMIN_TYPE_TEMPLATE = 'Form/PageParts/AccordionPagePartAdminType.php.twig';

    /**
     * @var string
     */
    const ITEM_ADMIN_TYPE_TEMPLATE = 'Form/AccordionPagePartItemAdminType.php.twig';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'            => 'AccordionPagePart',
        'tableName'            => 'accordion_page_parts',
        'titleFieldName'       => 'title',
        'descriptionFieldName' => 'description',
        'itemFieldName'        => 'items',
        'useWysiwyg'           => true,
        'includeDisplayOrder'  => true,
        'vendor'               => 'Superrb',
        'bundle'               => 'PagePartGeneratorTestBundle',
    ];
}
