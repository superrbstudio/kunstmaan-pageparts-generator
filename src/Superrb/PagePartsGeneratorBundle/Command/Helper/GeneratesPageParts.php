<?php

namespace Superrb\PagePartsGeneratorBundle\Command\Helper;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\DependencyInjection\Exception\BadMethodCallException;

trait GeneratesPageParts
{
    /**
     * Configure the command.
     */
    public function configure(): void
    {
        if (!($this instanceof ContainerAwareCommand)) {
            throw new BadMethodCallException('The trait Superrb\PagePartsGeneratorBundle\Command\Helper may only be applied to classes which extend '.ContainerAwareCommand::class);
        }

        $this->setName('generate:pagepart:'.static::TYPE)
            ->setDescription('Generate '.static::TYPE.' page part')
            ->setHelp('Generates the code required to create a '.static::TYPE.' page part');
    }

    /**
     * Run the required generator.
     *
     * @return bool
     */
    public function generate(): bool
    {
        $generatorFactory = $this->get('superrb_page_parts_generator.generator_factory');

        return $generatorFactory->create(static::TYPE, $this->bundleOptions)
            ->generate();
    }
}
