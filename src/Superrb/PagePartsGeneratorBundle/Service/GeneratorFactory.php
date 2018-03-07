<?php

namespace Superrb\PagePartsGeneratorBundle\Service;

use Doctrine\Common\Inflector\Inflector;
use Superrb\PagePartsGeneratorBundle\Exception\GeneratorException;
use Superrb\PagePartsGeneratorBundle\Generator;
use Superrb\PagePartsGeneratorBundle\Generator\Helper\GeneratorInterface;
use Superrb\PagePartsGeneratorBundle\GeneratorOptions;
use Symfony\Component\Config\FileLocator;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFilter;

class GeneratorFactory
{
    /**
     * Available generators.
     *
     * @var string[]
     */
    const TYPES = [
        Generator\AccordionPagePartGenerator::TYPE      => Generator\AccordionPagePartGenerator::class,
        Generator\BannerPagePartGenerator::TYPE         => Generator\BannerPagePartGenerator::class,
        Generator\CallToActionPagePartGenerator::TYPE   => Generator\CallToActionPagePartGenerator::class,
        Generator\ClientsPagePartGenerator::TYPE        => Generator\ClientsPagePartGenerator::class,
        Generator\ContactDetailsPagePartGenerator::TYPE => Generator\ContactDetailsPagePartGenerator::class,
        Generator\FaqPagePartGenerator::TYPE            => Generator\FaqPagePartGenerator::class,
        Generator\GalleryPagePartGenerator::TYPE        => Generator\GalleryPagePartGenerator::class,
        Generator\MapPagePartGenerator::TYPE            => Generator\MapPagePartGenerator::class,
        Generator\MenuPagePartGenerator::TYPE           => Generator\MenuPagePartGenerator::class,
        Generator\OpeningTimesPagePartGenerator::TYPE   => Generator\OpeningTimesPagePartGenerator::class,
        Generator\QuotePagePartGenerator::TYPE          => Generator\QuotePagePartGenerator::class,
        Generator\SlideshowPagePartGenerator::TYPE      => Generator\SlideshowPagePartGenerator::class,
        Generator\SocialMediaPagePartGenerator::TYPE    => Generator\SocialMediaPagePartGenerator::class,
        Generator\TeamPagePartGenerator::TYPE           => Generator\TeamPagePartGenerator::class,
        Generator\TestimonialPagePartGenerator::TYPE    => Generator\TestimonialPagePartGenerator::class,
        Generator\TextPagePartGenerator::TYPE           => Generator\TextPagePartGenerator::class,
        Generator\VideoPagePartGenerator::TYPE          => Generator\VideoPagePartGenerator::class,
    ];

    /**
     * Generator options.
     *
     * @var GeneratorOptions
     */
    protected $options;

    /**
     * @var FileLocator
     */
    protected $kernel;

    /**
     * @var Environment
     */
    protected $twig;

    /**
     * @param Environment $twig
     * @param FileLocator $fileLocator
     */
    public function __construct(FileLocator $fileLocator, Environment $twig)
    {
        $this->fileLocator = $fileLocator;
        $this->twig        = $twig;
        $this->setupTwig();
    }

    private function setupTwig()
    {
        $twigLoader = new FilesystemLoader($this->fileLocator->locate('@SuperrbPagePartsGeneratorBundle/Resources/views'));
        $this->twig->setLoader($twigLoader);

        $singularize = new TwigFilter('singularize', function ($string) {
            return Inflector::singularize($string);
        });
        $this->twig->addFilter($singularize);

        $pluralize = new TwigFilter('pluralize', function ($string) {
            return Inflector::pluralize($string);
        });
        $this->twig->addFilter($pluralize);

        $uncapitalize = new TwigFilter('uncapitalize', function ($string) {
            return strtolower(substr($string, 0, 1)).substr($string, 1);
        });
        $this->twig->addFilter($uncapitalize);
    }

    /**
     * @return Environment
     */
    public function getTwig(): Environment
    {
        return $this->twig;
    }

    /**
     * Create a generator instance for the requested type.
     *
     * @param string $type
     * @param array  $options
     *
     * @throws GeneratorException
     *
     * @return GeneratorInterface
     */
    public function create(string $type, array $options): GeneratorInterface
    {
        if (!isset(self::TYPES[$type]) || !($class = self::TYPES[$type])) {
            throw new GeneratorException("The generator '${type}' could not be found");
        }

        $generator = new $class($this, new GeneratorOptions($options));

        if (!($generator instanceof GeneratorInterface)) {
            throw new GeneratorException($class.' is not a valid instance of '.GeneratorInterface::class);
        }

        return $generator;
    }
}
