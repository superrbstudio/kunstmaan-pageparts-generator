<?php

namespace Superrb\PagePartsGeneratorBundle\Generator\Contract;

use Superrb\PagePartsGeneratorBundle\Exception\GeneratorException;

interface ChildGeneratorInterface extends GeneratorInterface
{
    /**
     * @var string
     */
    const ITEM_TEMPLATE = '{class}/Entity/{class}Item.php.twig';

    /**
     * @var string
     */
    const ITEM_ADMIN_TYPE_TEMPLATE = '{class}/Form/{class}ItemAdminType.php.twig';

    /**
     * Generates the required page part.
     *
     * @throws GeneratorException
     *
     * @return bool
     */
    public function generateChildren(): bool;
}
