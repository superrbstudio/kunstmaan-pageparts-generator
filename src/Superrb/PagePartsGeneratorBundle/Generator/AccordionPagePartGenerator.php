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
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'titleFieldName'       => 'title',
        'descriptionFieldName' => 'description',
        'itemFieldName'        => 'items',
        'htmlClassName'        => 'accordion',
        'useWysiwyg'           => true,
        'includeDisplayOrder'  => true,
    ];
}
