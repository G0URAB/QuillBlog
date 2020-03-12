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

/* @app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ApcCache.php */
class __TwigTemplate_42c9a4812660507f136292c3bcea93d9d18d29d909c81a1e5ff65dcc98a28b73 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ApcCache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

use const PHP_VERSION_ID;
use function apc_cache_info;
use function apc_clear_cache;
use function apc_delete;
use function apc_exists;
use function apc_fetch;
use function apc_sma_info;
use function apc_store;

/**
 * APC cache provider.
 *
 * @deprecated since version 1.6, use ApcuCache instead
 *
 * @link       www.doctrine-project.org
 */
class ApcCache extends CacheProvider
{
    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        return apc_fetch(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        return apc_exists(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        return apc_store(\$id, \$data, \$lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        // apc_delete returns false if the id does not exist
        return apc_delete(\$id) || ! apc_exists(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        return apc_clear_cache() && apc_clear_cache('user');
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetchMultiple(array \$keys)
    {
        return apc_fetch(\$keys) ?: [];
    }

    /**
     * {@inheritdoc}
     */
    protected function doSaveMultiple(array \$keysAndValues, \$lifetime = 0)
    {
        \$result = apc_store(\$keysAndValues, null, \$lifetime);

        return empty(\$result);
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        \$info = apc_cache_info('', true);
        \$sma  = apc_sma_info();

        // @TODO - Temporary fix @see https://github.com/krakjoe/apcu/pull/42
        if (PHP_VERSION_ID >= 50500) {
            \$info['num_hits']   = \$info['num_hits'] ?? \$info['nhits'];
            \$info['num_misses'] = \$info['num_misses'] ?? \$info['nmisses'];
            \$info['start_time'] = \$info['start_time'] ?? \$info['stime'];
        }

        return [
            Cache::STATS_HITS             => \$info['num_hits'],
            Cache::STATS_MISSES           => \$info['num_misses'],
            Cache::STATS_UPTIME           => \$info['start_time'],
            Cache::STATS_MEMORY_USAGE     => \$info['mem_size'],
            Cache::STATS_MEMORY_AVAILABLE => \$sma['avail_mem'],
        ];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ApcCache.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

use const PHP_VERSION_ID;
use function apc_cache_info;
use function apc_clear_cache;
use function apc_delete;
use function apc_exists;
use function apc_fetch;
use function apc_sma_info;
use function apc_store;

/**
 * APC cache provider.
 *
 * @deprecated since version 1.6, use ApcuCache instead
 *
 * @link       www.doctrine-project.org
 */
class ApcCache extends CacheProvider
{
    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        return apc_fetch(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        return apc_exists(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        return apc_store(\$id, \$data, \$lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        // apc_delete returns false if the id does not exist
        return apc_delete(\$id) || ! apc_exists(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        return apc_clear_cache() && apc_clear_cache('user');
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetchMultiple(array \$keys)
    {
        return apc_fetch(\$keys) ?: [];
    }

    /**
     * {@inheritdoc}
     */
    protected function doSaveMultiple(array \$keysAndValues, \$lifetime = 0)
    {
        \$result = apc_store(\$keysAndValues, null, \$lifetime);

        return empty(\$result);
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        \$info = apc_cache_info('', true);
        \$sma  = apc_sma_info();

        // @TODO - Temporary fix @see https://github.com/krakjoe/apcu/pull/42
        if (PHP_VERSION_ID >= 50500) {
            \$info['num_hits']   = \$info['num_hits'] ?? \$info['nhits'];
            \$info['num_misses'] = \$info['num_misses'] ?? \$info['nmisses'];
            \$info['start_time'] = \$info['start_time'] ?? \$info['stime'];
        }

        return [
            Cache::STATS_HITS             => \$info['num_hits'],
            Cache::STATS_MISSES           => \$info['num_misses'],
            Cache::STATS_UPTIME           => \$info['start_time'],
            Cache::STATS_MEMORY_USAGE     => \$info['mem_size'],
            Cache::STATS_MEMORY_AVAILABLE => \$sma['avail_mem'],
        ];
    }
}
", "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ApcCache.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\ApcCache.php");
    }
}
