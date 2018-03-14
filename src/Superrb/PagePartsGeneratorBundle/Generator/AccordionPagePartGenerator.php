<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class AccordionPagePartGenerator implements Contract\GeneratorInterface, Contract\ChildGeneratorInterface
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
        'titleFieldName'       => 'title',
        'descriptionFieldName' => 'description',
        'itemFieldName'        => 'items',
        'useWysiwyg'           => true,
        'includeDisplayOrder'  => true,
    ];
}
