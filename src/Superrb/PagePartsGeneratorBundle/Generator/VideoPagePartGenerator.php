<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class VideoPagePartGenerator implements Helper\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'video';

    /**
     * @var string
     */
    const TEMPLATE = '@SuperrbPagePartsGenerator:Entity/VideoPagePart.php.twig';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'VideoPagePart',
        'table_name' => 'video_page_parts',
    ];
}
