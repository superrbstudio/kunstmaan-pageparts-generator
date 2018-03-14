<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class ContactDetailsPagePartGenerator implements Contract\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'contact-details';

    /**
     * @var string
     */
    const TYPE_CLASS = 'ContactDetailsPagePart';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'ContactDetailsPagePart',
        'table_name' => 'contact_details_page_parts',
    ];
}
