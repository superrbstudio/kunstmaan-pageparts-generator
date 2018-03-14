<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class MenuPagePartGenerator implements Contract\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'menu';

    /**
     * @var string
     */
    const TYPE_CLASS = 'MenuPagePart';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'MenuPagePart',
        'table_name' => 'menu_page_parts',
    ];
}
