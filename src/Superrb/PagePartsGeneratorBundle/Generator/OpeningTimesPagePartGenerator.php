<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class OpeningTimesPagePartGenerator implements Helper\GeneratorInterface
{
    /**
     * @var string
     */
    const TYPE = 'opening-times';

    /**
     * @var string
     */
    const TEMPLATE = '@SuperrbPagePartsGenerator:Entity/OpeningTimesPagePart.php.twig';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'OpeningTimesPagePart',
        'table_name' => 'opening_times_page_parts',
    ];
}
