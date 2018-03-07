<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class TestimonialPagePartGenerator implements Contract\GeneratorInterface
{
    use Helper\GeneratesPageParts;

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
