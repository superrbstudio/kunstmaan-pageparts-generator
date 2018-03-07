<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class ClientsPagePartGenerator implements Contract\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'clients';

    /**
     * @var string
     */
    const TEMPLATE = '@SuperrbPagePartsGenerator:Entity/ClientsPagePart.php.twig';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'ClientsPagePart',
        'table_name' => 'clients_page_parts',
    ];
}
