<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class MenuPagePartGenerator implements Helper\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'menu';

    /**
     * @var string
     */
    const TEMPLATE = '@SuperrbPagePartsGenerator:Entity/MenuPagePart.php.twig';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'MenuPagePart',
        'table_name' => 'menu_page_parts',
    ];
}
