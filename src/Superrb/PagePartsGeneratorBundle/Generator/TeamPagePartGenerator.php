<?php

namespace Superrb\PagePartsGeneratorBundle\Generator;

class TeamPagePartGenerator implements Contract\GeneratorInterface
{
    use Helper\GeneratesPageParts;

    /**
     * @var string
     */
    const TYPE = 'team';

    /**
     * @var string
     */
    const TEMPLATE = '@SuperrbPagePartsGenerator:Entity/TeamPagePart.php.twig';

    /**
     * @var array
     */
    const DEFAULT_OPTIONS = [
        'className'  => 'TeamPagePart',
        'table_name' => 'team_page_parts',
    ];
}
