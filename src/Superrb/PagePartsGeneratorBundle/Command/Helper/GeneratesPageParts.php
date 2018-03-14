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
        // Create an empty options object
        $this->options = new GeneratorOptions();

        // Don't allow this trait to be used on non-sensical classes
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
        // Create an empty copy of the requested generator, so we can access its default options
        $generatorFactory = $this->getContainer()->get('superrb_page_parts_generator.generator_factory');
        $generator        = $generatorFactory->create(static::TYPE);

        // Ask (or deduce) the bundle name
        $bundle = $this->askForBundleName('pagepart');

        [$vendor, $bundleName] = explode('\\', $bundle->getNamespace());
        $this->options->vendor = $vendor;
        $this->options->bundle = $bundleName;

        // Ask for the table name prefix
        $defaultPrefix         = strtolower(preg_replace('/[^A-Z]/', '', $bundle->getNamespace()));
        $this->options->prefix = $this->assistant->ask('prefix', $defaultPrefix);

        // Ask for the class name
        $this->options->className = $this->assistant->ask('className', $generator::TYPE_CLASS);

        // Loop through each of the generator's default options, and offer the user
        // the ability to override each one
        foreach ($generator->getDefaultOptions() as $option => $default) {
            // Format the default value as a string, before presenting it
            // to the user
            switch (gettype($default)) {
                case 'boolean':
                    $formattedDefault = $default ? 'true' : 'false';
                    break;
                case 'array':
                    $formattedDefault = implode(',', $default);
                    break;
                default:
                    $formattedDefault = $default;
                    break;
            }

            // Ask the user for input
            $value = $this->assistant->ask($option, $formattedDefault);

            // Use the type of the default value to infer how we should
            // process a user-provided value
            switch (gettype($default)) {
                case 'boolean':
                    $formattedValue = 'false' !== $value;
                    break;
                case 'int':
                    $formattedValue = (int) $value;
                    break;
                case 'array':
                    $formattedValue = explode(',', $value);
                    break;
                default:
                    $formattedValue = $value;
                    break;
            }

            // Set the option
            $this->options->setValueForPath($option, $formattedValue);
        }
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
