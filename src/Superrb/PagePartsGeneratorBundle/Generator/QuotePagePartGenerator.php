<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class QuotePagePartGenerator implements Helper\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'quote';

    /**
     * @var string
     */
    const TEMPLATE = '@SuperrbPagePartsGenerator:Entity/QuotePagePart.php.twig';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'QuotePagePart',
        'table_name' => 'quote_page_parts',
    ];
}
