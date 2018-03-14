<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class OpeningTimesPagePartGenerator implements Contract\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'opening-times';

    /**
     * @var string
     */
    const TYPE_CLASS = 'OpeningTimesPagePart';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'OpeningTimesPagePart',
        'table_name' => 'opening_times_page_parts',
    ];
}
