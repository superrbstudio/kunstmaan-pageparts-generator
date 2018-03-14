<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class MapPagePartGenerator implements Contract\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'map';

    /**
     * @var string
     */
    const TYPE_CLASS = 'MapPagePart';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'MapPagePart',
        'table_name' => 'map_page_parts',
    ];
}
