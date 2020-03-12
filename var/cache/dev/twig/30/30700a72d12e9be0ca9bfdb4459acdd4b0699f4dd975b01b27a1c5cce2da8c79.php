<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @app/vendor/symfony/framework-bundle/CacheWarmer/SerializerCacheWarmer.php */
class __TwigTemplate_989ae3a29de6cc711857b7fbf8ed57a7cba2bb531c6df0ce0e72132db25f2713 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/CacheWarmer/SerializerCacheWarmer.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\FrameworkBundle\\CacheWarmer;

use Doctrine\\Common\\Annotations\\AnnotationException;
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Serializer\\Mapping\\Factory\\CacheClassMetadataFactory;
use Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactory;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderChain;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderInterface;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\XmlFileLoader;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\YamlFileLoader;

/**
 * Warms up XML and YAML serializer metadata.
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class SerializerCacheWarmer extends AbstractPhpFileCacheWarmer
{
    private \$loaders;

    /**
     * @param LoaderInterface[] \$loaders      The serializer metadata loaders
     * @param string            \$phpArrayFile The PHP file where metadata are cached
     */
    public function __construct(array \$loaders, string \$phpArrayFile)
    {
        parent::__construct(\$phpArrayFile);
        \$this->loaders = \$loaders;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWarmUp(string \$cacheDir, ArrayAdapter \$arrayAdapter)
    {
        if (!class_exists(CacheClassMetadataFactory::class) || !method_exists(XmlFileLoader::class, 'getMappedClasses') || !method_exists(YamlFileLoader::class, 'getMappedClasses')) {
            return false;
        }

        \$metadataFactory = new CacheClassMetadataFactory(new ClassMetadataFactory(new LoaderChain(\$this->loaders)), \$arrayAdapter);

        foreach (\$this->extractSupportedLoaders(\$this->loaders) as \$loader) {
            foreach (\$loader->getMappedClasses() as \$mappedClass) {
                try {
                    \$metadataFactory->getMetadataFor(\$mappedClass);
                } catch (AnnotationException \$e) {
                    // ignore failing annotations
                } catch (\\Exception \$e) {
                    \$this->ignoreAutoloadException(\$mappedClass, \$e);
                }
            }
        }

        return true;
    }

    /**
     * @param LoaderInterface[] \$loaders
     *
     * @return XmlFileLoader[]|YamlFileLoader[]
     */
    private function extractSupportedLoaders(array \$loaders): array
    {
        \$supportedLoaders = [];

        foreach (\$loaders as \$loader) {
            if (\$loader instanceof XmlFileLoader || \$loader instanceof YamlFileLoader) {
                \$supportedLoaders[] = \$loader;
            } elseif (\$loader instanceof LoaderChain) {
                \$supportedLoaders = array_merge(\$supportedLoaders, \$this->extractSupportedLoaders(\$loader->getLoaders()));
            }
        }

        return \$supportedLoaders;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/CacheWarmer/SerializerCacheWarmer.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\FrameworkBundle\\CacheWarmer;

use Doctrine\\Common\\Annotations\\AnnotationException;
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Serializer\\Mapping\\Factory\\CacheClassMetadataFactory;
use Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactory;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderChain;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderInterface;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\XmlFileLoader;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\YamlFileLoader;

/**
 * Warms up XML and YAML serializer metadata.
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class SerializerCacheWarmer extends AbstractPhpFileCacheWarmer
{
    private \$loaders;

    /**
     * @param LoaderInterface[] \$loaders      The serializer metadata loaders
     * @param string            \$phpArrayFile The PHP file where metadata are cached
     */
    public function __construct(array \$loaders, string \$phpArrayFile)
    {
        parent::__construct(\$phpArrayFile);
        \$this->loaders = \$loaders;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWarmUp(string \$cacheDir, ArrayAdapter \$arrayAdapter)
    {
        if (!class_exists(CacheClassMetadataFactory::class) || !method_exists(XmlFileLoader::class, 'getMappedClasses') || !method_exists(YamlFileLoader::class, 'getMappedClasses')) {
            return false;
        }

        \$metadataFactory = new CacheClassMetadataFactory(new ClassMetadataFactory(new LoaderChain(\$this->loaders)), \$arrayAdapter);

        foreach (\$this->extractSupportedLoaders(\$this->loaders) as \$loader) {
            foreach (\$loader->getMappedClasses() as \$mappedClass) {
                try {
                    \$metadataFactory->getMetadataFor(\$mappedClass);
                } catch (AnnotationException \$e) {
                    // ignore failing annotations
                } catch (\\Exception \$e) {
                    \$this->ignoreAutoloadException(\$mappedClass, \$e);
                }
            }
        }

        return true;
    }

    /**
     * @param LoaderInterface[] \$loaders
     *
     * @return XmlFileLoader[]|YamlFileLoader[]
     */
    private function extractSupportedLoaders(array \$loaders): array
    {
        \$supportedLoaders = [];

        foreach (\$loaders as \$loader) {
            if (\$loader instanceof XmlFileLoader || \$loader instanceof YamlFileLoader) {
                \$supportedLoaders[] = \$loader;
            } elseif (\$loader instanceof LoaderChain) {
                \$supportedLoaders = array_merge(\$supportedLoaders, \$this->extractSupportedLoaders(\$loader->getLoaders()));
            }
        }

        return \$supportedLoaders;
    }
}
", "@app/vendor/symfony/framework-bundle/CacheWarmer/SerializerCacheWarmer.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\CacheWarmer\\SerializerCacheWarmer.php");
    }
}
