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

/* @app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ChainCache.php */
class __TwigTemplate_770a092ac15860846ca090b9fcde1d4d2b8c794d6e607aca7f1c6a236366bb38 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ChainCache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

use Traversable;
use function array_values;
use function count;
use function iterator_to_array;

/**
 * Cache provider that allows to easily chain multiple cache providers
 */
class ChainCache extends CacheProvider
{
    /** @var CacheProvider[] */
    private \$cacheProviders = [];

    /**
     * @param CacheProvider[] \$cacheProviders
     */
    public function __construct(\$cacheProviders = [])
    {
        \$this->cacheProviders = \$cacheProviders instanceof Traversable
            ? iterator_to_array(\$cacheProviders, false)
            : array_values(\$cacheProviders);
    }

    /**
     * {@inheritDoc}
     */
    public function setNamespace(\$namespace)
    {
        parent::setNamespace(\$namespace);

        foreach (\$this->cacheProviders as \$cacheProvider) {
            \$cacheProvider->setNamespace(\$namespace);
        }
    }

    /**
     * {@inheritDoc}
     */
    protected function doFetch(\$id)
    {
        foreach (\$this->cacheProviders as \$key => \$cacheProvider) {
            if (\$cacheProvider->doContains(\$id)) {
                \$value = \$cacheProvider->doFetch(\$id);

                // We populate all the previous cache layers (that are assumed to be faster)
                for (\$subKey = \$key - 1; \$subKey >= 0; \$subKey--) {
                    \$this->cacheProviders[\$subKey]->doSave(\$id, \$value);
                }

                return \$value;
            }
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetchMultiple(array \$keys)
    {
        /** @var CacheProvider[] \$traversedProviders */
        \$traversedProviders = [];
        \$keysCount          = count(\$keys);
        \$fetchedValues      = [];

        foreach (\$this->cacheProviders as \$key => \$cacheProvider) {
            \$fetchedValues = \$cacheProvider->doFetchMultiple(\$keys);

            // We populate all the previous cache layers (that are assumed to be faster)
            if (count(\$fetchedValues) === \$keysCount) {
                foreach (\$traversedProviders as \$previousCacheProvider) {
                    \$previousCacheProvider->doSaveMultiple(\$fetchedValues);
                }

                return \$fetchedValues;
            }

            \$traversedProviders[] = \$cacheProvider;
        }

        return \$fetchedValues;
    }

    /**
     * {@inheritDoc}
     */
    protected function doContains(\$id)
    {
        foreach (\$this->cacheProviders as \$cacheProvider) {
            if (\$cacheProvider->doContains(\$id)) {
                return true;
            }
        }

        return false;
    }

    /**
     * {@inheritDoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        \$stored = true;

        foreach (\$this->cacheProviders as \$cacheProvider) {
            \$stored = \$cacheProvider->doSave(\$id, \$data, \$lifeTime) && \$stored;
        }

        return \$stored;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSaveMultiple(array \$keysAndValues, \$lifetime = 0)
    {
        \$stored = true;

        foreach (\$this->cacheProviders as \$cacheProvider) {
            \$stored = \$cacheProvider->doSaveMultiple(\$keysAndValues, \$lifetime) && \$stored;
        }

        return \$stored;
    }

    /**
     * {@inheritDoc}
     */
    protected function doDelete(\$id)
    {
        \$deleted = true;

        foreach (\$this->cacheProviders as \$cacheProvider) {
            \$deleted = \$cacheProvider->doDelete(\$id) && \$deleted;
        }

        return \$deleted;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDeleteMultiple(array \$keys)
    {
        \$deleted = true;

        foreach (\$this->cacheProviders as \$cacheProvider) {
            \$deleted = \$cacheProvider->doDeleteMultiple(\$keys) && \$deleted;
        }

        return \$deleted;
    }

    /**
     * {@inheritDoc}
     */
    protected function doFlush()
    {
        \$flushed = true;

        foreach (\$this->cacheProviders as \$cacheProvider) {
            \$flushed = \$cacheProvider->doFlush() && \$flushed;
        }

        return \$flushed;
    }

    /**
     * {@inheritDoc}
     */
    protected function doGetStats()
    {
        // We return all the stats from all adapters
        \$stats = [];

        foreach (\$this->cacheProviders as \$cacheProvider) {
            \$stats[] = \$cacheProvider->doGetStats();
        }

        return \$stats;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ChainCache.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

use Traversable;
use function array_values;
use function count;
use function iterator_to_array;

/**
 * Cache provider that allows to easily chain multiple cache providers
 */
class ChainCache extends CacheProvider
{
    /** @var CacheProvider[] */
    private \$cacheProviders = [];

    /**
     * @param CacheProvider[] \$cacheProviders
     */
    public function __construct(\$cacheProviders = [])
    {
        \$this->cacheProviders = \$cacheProviders instanceof Traversable
            ? iterator_to_array(\$cacheProviders, false)
            : array_values(\$cacheProviders);
    }

    /**
     * {@inheritDoc}
     */
    public function setNamespace(\$namespace)
    {
        parent::setNamespace(\$namespace);

        foreach (\$this->cacheProviders as \$cacheProvider) {
            \$cacheProvider->setNamespace(\$namespace);
        }
    }

    /**
     * {@inheritDoc}
     */
    protected function doFetch(\$id)
    {
        foreach (\$this->cacheProviders as \$key => \$cacheProvider) {
            if (\$cacheProvider->doContains(\$id)) {
                \$value = \$cacheProvider->doFetch(\$id);

                // We populate all the previous cache layers (that are assumed to be faster)
                for (\$subKey = \$key - 1; \$subKey >= 0; \$subKey--) {
                    \$this->cacheProviders[\$subKey]->doSave(\$id, \$value);
                }

                return \$value;
            }
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetchMultiple(array \$keys)
    {
        /** @var CacheProvider[] \$traversedProviders */
        \$traversedProviders = [];
        \$keysCount          = count(\$keys);
        \$fetchedValues      = [];

        foreach (\$this->cacheProviders as \$key => \$cacheProvider) {
            \$fetchedValues = \$cacheProvider->doFetchMultiple(\$keys);

            // We populate all the previous cache layers (that are assumed to be faster)
            if (count(\$fetchedValues) === \$keysCount) {
                foreach (\$traversedProviders as \$previousCacheProvider) {
                    \$previousCacheProvider->doSaveMultiple(\$fetchedValues);
                }

                return \$fetchedValues;
            }

            \$traversedProviders[] = \$cacheProvider;
        }

        return \$fetchedValues;
    }

    /**
     * {@inheritDoc}
     */
    protected function doContains(\$id)
    {
        foreach (\$this->cacheProviders as \$cacheProvider) {
            if (\$cacheProvider->doContains(\$id)) {
                return true;
            }
        }

        return false;
    }

    /**
     * {@inheritDoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        \$stored = true;

        foreach (\$this->cacheProviders as \$cacheProvider) {
            \$stored = \$cacheProvider->doSave(\$id, \$data, \$lifeTime) && \$stored;
        }

        return \$stored;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSaveMultiple(array \$keysAndValues, \$lifetime = 0)
    {
        \$stored = true;

        foreach (\$this->cacheProviders as \$cacheProvider) {
            \$stored = \$cacheProvider->doSaveMultiple(\$keysAndValues, \$lifetime) && \$stored;
        }

        return \$stored;
    }

    /**
     * {@inheritDoc}
     */
    protected function doDelete(\$id)
    {
        \$deleted = true;

        foreach (\$this->cacheProviders as \$cacheProvider) {
            \$deleted = \$cacheProvider->doDelete(\$id) && \$deleted;
        }

        return \$deleted;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDeleteMultiple(array \$keys)
    {
        \$deleted = true;

        foreach (\$this->cacheProviders as \$cacheProvider) {
            \$deleted = \$cacheProvider->doDeleteMultiple(\$keys) && \$deleted;
        }

        return \$deleted;
    }

    /**
     * {@inheritDoc}
     */
    protected function doFlush()
    {
        \$flushed = true;

        foreach (\$this->cacheProviders as \$cacheProvider) {
            \$flushed = \$cacheProvider->doFlush() && \$flushed;
        }

        return \$flushed;
    }

    /**
     * {@inheritDoc}
     */
    protected function doGetStats()
    {
        // We return all the stats from all adapters
        \$stats = [];

        foreach (\$this->cacheProviders as \$cacheProvider) {
            \$stats[] = \$cacheProvider->doGetStats();
        }

        return \$stats;
    }
}
", "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ChainCache.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\ChainCache.php");
    }
}
