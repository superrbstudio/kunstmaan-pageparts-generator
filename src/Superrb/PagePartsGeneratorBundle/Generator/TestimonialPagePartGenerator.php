<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class TestimonialPagePartGenerator implements Helper\GeneratorInterface
{
    /**
     * @var string
     */
    const TYPE = 'testimonial';

    /**
     * @var string
     */
    const TEMPLATE = '@SuperrbPagePartsGenerator:Entity/TestimonialPagePart.php.twig';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'TestimonialPagePart',
        'table_name' => 'testimonial_page_parts',
    ];
}
