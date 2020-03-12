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

/* @app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php */
class __TwigTemplate_8dd6aa5f1fca83806ba518189eac8f8068d91cb3820e161f2ba87ea15de2555c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

/**
 * Interface for cache drivers.
 *
 * @link   www.doctrine-project.org
 */
interface Cache
{
    public const STATS_HITS             = 'hits';
    public const STATS_MISSES           = 'misses';
    public const STATS_UPTIME           = 'uptime';
    public const STATS_MEMORY_USAGE     = 'memory_usage';
    public const STATS_MEMORY_AVAILABLE = 'memory_available';
    /**
     * Only for backward compatibility (may be removed in next major release)
     *
     * @deprecated
     */
    public const STATS_MEMORY_AVAILIABLE = 'memory_available';

    /**
     * Fetches an entry from the cache.
     *
     * @param string \$id The id of the cache entry to fetch.
     *
     * @return mixed The cached data or FALSE, if no cache entry exists for the given id.
     */
    public function fetch(\$id);

    /**
     * Tests if an entry exists in the cache.
     *
     * @param string \$id The cache id of the entry to check for.
     *
     * @return bool TRUE if a cache entry exists for the given cache id, FALSE otherwise.
     */
    public function contains(\$id);

    /**
     * Puts data into the cache.
     *
     * If a cache entry with the given id already exists, its data will be replaced.
     *
     * @param string \$id       The cache id.
     * @param mixed  \$data     The cache entry/data.
     * @param int    \$lifeTime The lifetime in number of seconds for this cache entry.
     *                         If zero (the default), the entry never expires (although it may be deleted from the cache
     *                         to make place for other entries).
     *
     * @return bool TRUE if the entry was successfully stored in the cache, FALSE otherwise.
     */
    public function save(\$id, \$data, \$lifeTime = 0);

    /**
     * Deletes a cache entry.
     *
     * @param string \$id The cache id.
     *
     * @return bool TRUE if the cache entry was successfully deleted, FALSE otherwise.
     *              Deleting a non-existing entry is considered successful.
     */
    public function delete(\$id);

    /**
     * Retrieves cached information from the data store.
     *
     * The server's statistics array has the following values:
     *
     * - <b>hits</b>
     * Number of keys that have been requested and found present.
     *
     * - <b>misses</b>
     * Number of items that have been requested and not found.
     *
     * - <b>uptime</b>
     * Time that the server is running.
     *
     * - <b>memory_usage</b>
     * Memory used by this server to store items.
     *
     * - <b>memory_available</b>
     * Memory allowed to use for storage.
     *
     * @return array|null An associative array with server's statistics if available, NULL otherwise.
     */
    public function getStats();
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

/**
 * Interface for cache drivers.
 *
 * @link   www.doctrine-project.org
 */
interface Cache
{
    public const STATS_HITS             = 'hits';
    public const STATS_MISSES           = 'misses';
    public const STATS_UPTIME           = 'uptime';
    public const STATS_MEMORY_USAGE     = 'memory_usage';
    public const STATS_MEMORY_AVAILABLE = 'memory_available';
    /**
     * Only for backward compatibility (may be removed in next major release)
     *
     * @deprecated
     */
    public const STATS_MEMORY_AVAILIABLE = 'memory_available';

    /**
     * Fetches an entry from the cache.
     *
     * @param string \$id The id of the cache entry to fetch.
     *
     * @return mixed The cached data or FALSE, if no cache entry exists for the given id.
     */
    public function fetch(\$id);

    /**
     * Tests if an entry exists in the cache.
     *
     * @param string \$id The cache id of the entry to check for.
     *
     * @return bool TRUE if a cache entry exists for the given cache id, FALSE otherwise.
     */
    public function contains(\$id);

    /**
     * Puts data into the cache.
     *
     * If a cache entry with the given id already exists, its data will be replaced.
     *
     * @param string \$id       The cache id.
     * @param mixed  \$data     The cache entry/data.
     * @param int    \$lifeTime The lifetime in number of seconds for this cache entry.
     *                         If zero (the default), the entry never expires (although it may be deleted from the cache
     *                         to make place for other entries).
     *
     * @return bool TRUE if the entry was successfully stored in the cache, FALSE otherwise.
     */
    public function save(\$id, \$data, \$lifeTime = 0);

    /**
     * Deletes a cache entry.
     *
     * @param string \$id The cache id.
     *
     * @return bool TRUE if the cache entry was successfully deleted, FALSE otherwise.
     *              Deleting a non-existing entry is considered successful.
     */
    public function delete(\$id);

    /**
     * Retrieves cached information from the data store.
     *
     * The server's statistics array has the following values:
     *
     * - <b>hits</b>
     * Number of keys that have been requested and found present.
     *
     * - <b>misses</b>
     * Number of items that have been requested and not found.
     *
     * - <b>uptime</b>
     * Time that the server is running.
     *
     * - <b>memory_usage</b>
     * Memory used by this server to store items.
     *
     * - <b>memory_available</b>
     * Memory allowed to use for storage.
     *
     * @return array|null An associative array with server's statistics if available, NULL otherwise.
     */
    public function getStats();
}
", "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\Cache.php");
    }
}
