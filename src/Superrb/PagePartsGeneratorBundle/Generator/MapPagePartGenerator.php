<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class MapPagePartGenerator implements Helper\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'map';

    /**
     * @var string
     */
    const TEMPLATE = '@SuperrbPagePartsGenerator:Entity/MapPagePart.php.twig';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'MapPagePart',
        'table_name' => 'map_page_parts',
    ];
}
