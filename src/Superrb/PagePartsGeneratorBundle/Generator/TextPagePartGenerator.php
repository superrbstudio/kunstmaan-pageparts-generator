<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class TextPagePartGenerator implements Contract\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'text';

    /**
     * @var string
     */
    const TYPE_CLASS = 'TextPagePart';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'TextPagePart',
        'table_name' => 'text_page_parts',
    ];
}
