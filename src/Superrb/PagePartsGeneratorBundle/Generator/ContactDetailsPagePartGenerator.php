<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class ContactDetailsPagePartGenerator implements Helper\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'contact-details';

    /**
     * @var string
     */
    const TEMPLATE = '@SuperrbPagePartsGenerator:Entity/ContactDetailsPagePart.php.twig';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'ContactDetailsPagePart',
        'table_name' => 'contact_details_page_parts',
    ];
}
