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
        // First, create the class and table names for the children
        $this->options->itemClassName = $this->options->className.ucfirst(Inflector::singularize($this->options->itemFieldName));
        $this->options->itemTableName = Inflector::singularize($this->options->tableName).'_'.$this->options->itemFieldName;

        // Then clone options and rearrange so they can be used in child templates
        $itemOptions                  = clone $this->options;
        $itemOptions->parentClassName = $itemOptions->className;
        $itemOptions->className       = $itemOptions->itemClassName;
        $itemOptions->parentTableName = $itemOptions->tableName;
        $itemOptions->tableName       = $itemOptions->itemTableName;

        echo $this->factory->getTwig()->render(self::TYPE_CLASS.'/'.self::ITEM_TEMPLATE, $itemOptions->toArray());

        if (self::ITEM_ADMIN_TYPE_TEMPLATE) {
            echo $this->factory->getTwig()->render(self::TYPE_CLASS.'/'.self::ITEM_ADMIN_TYPE_TEMPLATE, $itemOptions->toArray());
        }

        return true;
    }
}
