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

/* @app/vendor/symfony/framework-bundle/CacheWarmer/AnnotationsCacheWarmer.php */
class __TwigTemplate_295bf609e536f3e6a0f7a5a011c3c636a5c836887f72d45f412ef318dcd4533e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/CacheWarmer/AnnotationsCacheWarmer.php"));

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
use Doctrine\\Common\\Annotations\\CachedReader;
use Doctrine\\Common\\Annotations\\Reader;
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Cache\\DoctrineProvider;

/**
 * Warms up annotation caches for classes found in composer's autoload class map
 * and declared in DI bundle extensions using the addAnnotatedClassesToCache method.
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class AnnotationsCacheWarmer extends AbstractPhpFileCacheWarmer
{
    private \$annotationReader;
    private \$excludeRegexp;
    private \$debug;

    /**
     * @param string \$phpArrayFile The PHP file where annotations are cached
     */
    public function __construct(Reader \$annotationReader, string \$phpArrayFile, string \$excludeRegexp = null, bool \$debug = false)
    {
        parent::__construct(\$phpArrayFile);
        \$this->annotationReader = \$annotationReader;
        \$this->excludeRegexp = \$excludeRegexp;
        \$this->debug = \$debug;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWarmUp(string \$cacheDir, ArrayAdapter \$arrayAdapter)
    {
        \$annotatedClassPatterns = \$cacheDir.'/annotations.map';

        if (!is_file(\$annotatedClassPatterns)) {
            return true;
        }

        \$annotatedClasses = include \$annotatedClassPatterns;
        \$reader = new CachedReader(\$this->annotationReader, new DoctrineProvider(\$arrayAdapter), \$this->debug);

        foreach (\$annotatedClasses as \$class) {
            if (null !== \$this->excludeRegexp && preg_match(\$this->excludeRegexp, \$class)) {
                continue;
            }
            try {
                \$this->readAllComponents(\$reader, \$class);
            } catch (\\Exception \$e) {
                \$this->ignoreAutoloadException(\$class, \$e);
            }
        }

        return true;
    }

    private function readAllComponents(Reader \$reader, string \$class)
    {
        \$reflectionClass = new \\ReflectionClass(\$class);

        try {
            \$reader->getClassAnnotations(\$reflectionClass);
        } catch (AnnotationException \$e) {
            /*
             * Ignore any AnnotationException to not break the cache warming process if an Annotation is badly
             * configured or could not be found / read / etc.
             *
             * In particular cases, an Annotation in your code can be used and defined only for a specific
             * environment but is always added to the annotations.map file by some Symfony default behaviors,
             * and you always end up with a not found Annotation.
             */
        }

        foreach (\$reflectionClass->getMethods() as \$reflectionMethod) {
            try {
                \$reader->getMethodAnnotations(\$reflectionMethod);
            } catch (AnnotationException \$e) {
            }
        }

        foreach (\$reflectionClass->getProperties() as \$reflectionProperty) {
            try {
                \$reader->getPropertyAnnotations(\$reflectionProperty);
            } catch (AnnotationException \$e) {
            }
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/CacheWarmer/AnnotationsCacheWarmer.php";
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
use Doctrine\\Common\\Annotations\\CachedReader;
use Doctrine\\Common\\Annotations\\Reader;
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Cache\\DoctrineProvider;

/**
 * Warms up annotation caches for classes found in composer's autoload class map
 * and declared in DI bundle extensions using the addAnnotatedClassesToCache method.
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class AnnotationsCacheWarmer extends AbstractPhpFileCacheWarmer
{
    private \$annotationReader;
    private \$excludeRegexp;
    private \$debug;

    /**
     * @param string \$phpArrayFile The PHP file where annotations are cached
     */
    public function __construct(Reader \$annotationReader, string \$phpArrayFile, string \$excludeRegexp = null, bool \$debug = false)
    {
        parent::__construct(\$phpArrayFile);
        \$this->annotationReader = \$annotationReader;
        \$this->excludeRegexp = \$excludeRegexp;
        \$this->debug = \$debug;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWarmUp(string \$cacheDir, ArrayAdapter \$arrayAdapter)
    {
        \$annotatedClassPatterns = \$cacheDir.'/annotations.map';

        if (!is_file(\$annotatedClassPatterns)) {
            return true;
        }

        \$annotatedClasses = include \$annotatedClassPatterns;
        \$reader = new CachedReader(\$this->annotationReader, new DoctrineProvider(\$arrayAdapter), \$this->debug);

        foreach (\$annotatedClasses as \$class) {
            if (null !== \$this->excludeRegexp && preg_match(\$this->excludeRegexp, \$class)) {
                continue;
            }
            try {
                \$this->readAllComponents(\$reader, \$class);
            } catch (\\Exception \$e) {
                \$this->ignoreAutoloadException(\$class, \$e);
            }
        }

        return true;
    }

    private function readAllComponents(Reader \$reader, string \$class)
    {
        \$reflectionClass = new \\ReflectionClass(\$class);

        try {
            \$reader->getClassAnnotations(\$reflectionClass);
        } catch (AnnotationException \$e) {
            /*
             * Ignore any AnnotationException to not break the cache warming process if an Annotation is badly
             * configured or could not be found / read / etc.
             *
             * In particular cases, an Annotation in your code can be used and defined only for a specific
             * environment but is always added to the annotations.map file by some Symfony default behaviors,
             * and you always end up with a not found Annotation.
             */
        }

        foreach (\$reflectionClass->getMethods() as \$reflectionMethod) {
            try {
                \$reader->getMethodAnnotations(\$reflectionMethod);
            } catch (AnnotationException \$e) {
            }
        }

        foreach (\$reflectionClass->getProperties() as \$reflectionProperty) {
            try {
                \$reader->getPropertyAnnotations(\$reflectionProperty);
            } catch (AnnotationException \$e) {
            }
        }
    }
}
", "@app/vendor/symfony/framework-bundle/CacheWarmer/AnnotationsCacheWarmer.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\CacheWarmer\\AnnotationsCacheWarmer.php");
    }
}
