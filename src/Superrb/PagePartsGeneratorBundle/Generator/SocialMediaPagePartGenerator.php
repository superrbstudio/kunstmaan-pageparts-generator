<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class SocialMediaPagePartGenerator implements Helper\GeneratorInterface
{
    /**
     * @var string
     */
    const TYPE = 'social-media';

    /**
     * @var string
     */
    const TEMPLATE = '@SuperrbPagePartsGenerator:Entity/SocialMediaPagePart.php.twig';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'SocialMediaPagePart',
        'table_name' => 'social_media_page_parts',
    ];
}
