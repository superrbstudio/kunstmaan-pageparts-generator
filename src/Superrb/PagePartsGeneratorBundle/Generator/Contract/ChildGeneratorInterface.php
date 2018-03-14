<?php

namespace Superrb\PagePartsGeneratorBundle\Generator\Contract;

use Superrb\PagePartsGeneratorBundle\Exception\GeneratorException;

interface ChildGeneratorInterface extends GeneratorInterface
{
    /**
     * @var string
     */
    const ITEM_TEMPLATE = 'Entity/{class}Item.php';

    /**
     * @var string
     */
    const ITEM_ADMIN_TYPE_TEMPLATE = 'Form/{class}ItemAdminType.php';

    /**
     * Generates the required page part.
     *
     * @throws GeneratorException
     *
     * @return bool
     */
    public function generateChildren(): bool;
}
