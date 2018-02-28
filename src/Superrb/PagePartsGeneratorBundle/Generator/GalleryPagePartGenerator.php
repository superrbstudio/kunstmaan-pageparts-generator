<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class GalleryPagePartGenerator implements Helper\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'gallery';

    /**
     * @var string
     */
    const TEMPLATE = '@SuperrbPagePartsGenerator:Entity/GalleryPagePart.php.twig';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'GalleryPagePart',
        'table_name' => 'gallery_page_parts',
    ];
}
