<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class SlideshowPagePartGenerator implements Helper\GeneratorInterface
{
    /**
     * @var string
     */
    const TYPE = 'slideshow';

    /**
     * @var string
     */
    const TEMPLATE = '@SuperrbPagePartsGenerator:Entity/SlideshowPagePart.php.twig';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'SlideshowPagePart',
        'table_name' => 'slideshow_page_parts',
    ];
}
