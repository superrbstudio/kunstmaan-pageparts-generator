<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class TextPagePartGenerator implements Helper\GeneratorInterface
{
    /**
     * @var string
     */
    const TYPE = 'text';

    /**
     * @var string
     */
    const TEMPLATE = '@SuperrbPagePartsGenerator:Entity/TextPagePart.php.twig';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'TextPagePart',
        'table_name' => 'text_page_parts',
    ];
}