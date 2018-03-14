<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class CallToActionPagePartGenerator implements Contract\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'call-to-action';

    /**
     * @var string
     */
    const TYPE_CLASS = 'CallToActionPagePart';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'CallToActionPagePart',
        'table_name' => 'call_to_action_page_parts',
    ];
}
