<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class VideoPagePartGenerator implements Contract\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'video';

    /**
     * @var string
     */
    const TYPE_CLASS = 'VideoPagePart';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'VideoPagePart',
        'table_name' => 'video_page_parts',
    ];
}
