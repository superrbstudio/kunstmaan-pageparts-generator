<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class SlideshowPagePartGenerator implements Contract\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'slideshow';

    /**
     * @var string
     */
    const TYPE_CLASS = 'SlideshowPagePart';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'SlideshowPagePart',
        'table_name' => 'slideshow_page_parts',
    ];
}
