<?php

namespace Superrb\PagePartsGeneratorBundle\Command\Helper;

use Kunstmaan\GeneratorBundle\Helper\CommandAssistant;
use Superrb\PagePartsGeneratorBundle\GeneratorOptions;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\Exception\BadMethodCallException;

trait GeneratesPageParts
{
    /**
     * @var InputInterface
     */
    protected $input;

    /**
     * @var OutputInterface
     */
    protected $output;

    /**
     * @var GeneratorOptions
     */
    protected $options;

    /**
     * @var CommandAssistant
     */
    protected $assistant;

    /**
     * Configure the command.
     */
    protected function configure(): void
    {
        if (!$this->options) {
            $this->options         = new GeneratorOptions();
            $this->options->vendor = $this->getApplication();
        }

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
        return $this->createGenerator()->generate();
    }

    /**
     * @see GeneratorCommand::createGenerator()
     */
    public function createGenerator()
    {
        $generatorFactory = $this->getContainer()->get('superrb_page_parts_generator.generator_factory');

        return $generatorFactory->create(static::TYPE, $this->options);
    }

    public function doInteract()
    {
        $bundle = $this->askForBundleName('pagepart');

        [$vendor, $bundleName] = explode('\\', $bundle->getNamespace());
        $this->options->vendor = $vendor;
        $this->options->bundle = $bundleName;
    }

    public function doExecute()
    {
        $this->assistant->writeLine($this->generate());
    }

    public function getWelcomeText()
    {
        return 'Generating new '.static::TYPE.' page part';
    }
}
