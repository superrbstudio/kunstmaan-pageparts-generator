<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class BannerPagePartGenerator implements Helper\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'banner';

    /**
     * @var string
     */
    const TEMPLATE = '@SuperrbPagePartsGenerator:Entity/BannerPagePart.php.twig';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'BannerPagePart',
        'table_name' => 'banner_page_parts',
    ];
}
