<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class GalleryPagePartGenerator implements Contract\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'gallery';

    /**
     * @var string
     */
    const TYPE_CLASS = 'GalleryPagePart';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'GalleryPagePart',
        'table_name' => 'gallery_page_parts',
    ];
}
