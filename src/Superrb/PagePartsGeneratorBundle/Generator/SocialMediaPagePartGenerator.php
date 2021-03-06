<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class SocialMediaPagePartGenerator implements Contract\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'social-media';

    /**
     * @var string
     */
    const TYPE_CLASS = 'SocialMediaPagePart';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'SocialMediaPagePart',
        'table_name' => 'social_media_page_parts',
    ];
}
