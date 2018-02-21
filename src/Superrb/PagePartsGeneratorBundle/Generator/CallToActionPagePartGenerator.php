<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class CallToActionPagePartGenerator implements Helper\GeneratorInterface
{
    /**
     * @var string
     */
    const TYPE = 'call-to-action';

    /**
     * @var string
     */
    const TEMPLATE = '@SuperrbPagePartsGenerator:Entity/CallToActionPagePart.php.twig';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'CallToActionPagePart',
        'table_name' => 'call_to_action_page_parts',
    ];
}
