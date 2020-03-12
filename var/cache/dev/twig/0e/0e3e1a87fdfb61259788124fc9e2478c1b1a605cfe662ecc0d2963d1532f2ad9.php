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

/* @app/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php */
class __TwigTemplate_d06621d940cdc092cf738cf6a92b24c858f99abe73a883f2986dbf71c3bb7c45 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php"));

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

use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Cache\\Adapter\\NullAdapter;
use Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter;
use Symfony\\Component\\Config\\Resource\\ClassExistenceResource;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface;

/**
 * @internal
 */
abstract class AbstractPhpFileCacheWarmer implements CacheWarmerInterface
{
    private \$phpArrayFile;

    /**
     * @param string \$phpArrayFile The PHP file where metadata are cached
     */
    public function __construct(string \$phpArrayFile)
    {
        \$this->phpArrayFile = \$phpArrayFile;
    }

    /**
     * {@inheritdoc}
     */
    public function isOptional()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function warmUp(string \$cacheDir)
    {
        \$arrayAdapter = new ArrayAdapter();

        spl_autoload_register([ClassExistenceResource::class, 'throwOnRequiredClass']);
        try {
            if (!\$this->doWarmUp(\$cacheDir, \$arrayAdapter)) {
                return;
            }
        } finally {
            spl_autoload_unregister([ClassExistenceResource::class, 'throwOnRequiredClass']);
        }

        // the ArrayAdapter stores the values serialized
        // to avoid mutation of the data after it was written to the cache
        // so here we un-serialize the values first
        \$values = array_map(function (\$val) { return null !== \$val ? unserialize(\$val) : null; }, \$arrayAdapter->getValues());

        \$this->warmUpPhpArrayAdapter(new PhpArrayAdapter(\$this->phpArrayFile, new NullAdapter()), \$values);
    }

    protected function warmUpPhpArrayAdapter(PhpArrayAdapter \$phpArrayAdapter, array \$values)
    {
        \$phpArrayAdapter->warmUp(\$values);
    }

    /**
     * @internal
     */
    final protected function ignoreAutoloadException(string \$class, \\Exception \$exception): void
    {
        try {
            ClassExistenceResource::throwOnRequiredClass(\$class, \$exception);
        } catch (\\ReflectionException \$e) {
        }
    }

    /**
     * @return bool false if there is nothing to warm-up
     */
    abstract protected function doWarmUp(string \$cacheDir, ArrayAdapter \$arrayAdapter);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php";
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

use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Cache\\Adapter\\NullAdapter;
use Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter;
use Symfony\\Component\\Config\\Resource\\ClassExistenceResource;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface;

/**
 * @internal
 */
abstract class AbstractPhpFileCacheWarmer implements CacheWarmerInterface
{
    private \$phpArrayFile;

    /**
     * @param string \$phpArrayFile The PHP file where metadata are cached
     */
    public function __construct(string \$phpArrayFile)
    {
        \$this->phpArrayFile = \$phpArrayFile;
    }

    /**
     * {@inheritdoc}
     */
    public function isOptional()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function warmUp(string \$cacheDir)
    {
        \$arrayAdapter = new ArrayAdapter();

        spl_autoload_register([ClassExistenceResource::class, 'throwOnRequiredClass']);
        try {
            if (!\$this->doWarmUp(\$cacheDir, \$arrayAdapter)) {
                return;
            }
        } finally {
            spl_autoload_unregister([ClassExistenceResource::class, 'throwOnRequiredClass']);
        }

        // the ArrayAdapter stores the values serialized
        // to avoid mutation of the data after it was written to the cache
        // so here we un-serialize the values first
        \$values = array_map(function (\$val) { return null !== \$val ? unserialize(\$val) : null; }, \$arrayAdapter->getValues());

        \$this->warmUpPhpArrayAdapter(new PhpArrayAdapter(\$this->phpArrayFile, new NullAdapter()), \$values);
    }

    protected function warmUpPhpArrayAdapter(PhpArrayAdapter \$phpArrayAdapter, array \$values)
    {
        \$phpArrayAdapter->warmUp(\$values);
    }

    /**
     * @internal
     */
    final protected function ignoreAutoloadException(string \$class, \\Exception \$exception): void
    {
        try {
            ClassExistenceResource::throwOnRequiredClass(\$class, \$exception);
        } catch (\\ReflectionException \$e) {
        }
    }

    /**
     * @return bool false if there is nothing to warm-up
     */
    abstract protected function doWarmUp(string \$cacheDir, ArrayAdapter \$arrayAdapter);
}
", "@app/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\CacheWarmer\\AbstractPhpFileCacheWarmer.php");
    }
}
