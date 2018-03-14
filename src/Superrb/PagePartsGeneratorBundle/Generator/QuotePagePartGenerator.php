<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class QuotePagePartGenerator implements Contract\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'quote';

    /**
     * @var string
     */
    const TYPE_CLASS = 'QuotePagePart';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'QuotePagePart',
        'table_name' => 'quote_page_parts',
    ];
}
