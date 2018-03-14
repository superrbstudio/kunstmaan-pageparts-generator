<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class BannerPagePartGenerator implements Contract\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'banner';

    /**
     * @var string
     */
    const TYPE_CLASS = 'BannerPagePart';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'BannerPagePart',
        'table_name' => 'banner_page_parts',
    ];
}
