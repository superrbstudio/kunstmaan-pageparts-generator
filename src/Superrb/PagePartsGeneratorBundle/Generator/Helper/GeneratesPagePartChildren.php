<?php

namespace Superrb\PagePartsGeneratorBundle\Generator\Helper;

use Doctrine\Common\Inflector\Inflector;

trait GeneratesPagePartChildren
{
    /**
     * @see ChildGeneratorInterface::generateChildren()
     *
     * @return bool
     */
    public function generateChildren(): bool
    {
        $itemOptions                  = clone $this->options;
        $itemOptions->parentClassName = $itemOptions->className;
        $itemOptions->className       = $itemOptions->className.ucfirst(Inflector::singularize($itemOptions->itemFieldName));
        $itemOptions->parentTableName = $itemOptions->tableName;
        $itemOptions->tableName       = Inflector::singularize($itemOptions->tableName).'_'.$itemOptions->itemFieldName;

        echo $this->factory->getTwig()->render(self::ITEM_TEMPLATE, $itemOptions->toArray());

        return true;
    }
}
