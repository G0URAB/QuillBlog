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

/* @app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/PredisCache.php */
class __TwigTemplate_a0aeee46d8c53f45863ebfa91c2b7133ff9375136d33fbcd4d4add8db4c19884 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/PredisCache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

use Predis\\ClientInterface;
use function array_combine;
use function array_filter;
use function array_map;
use function call_user_func_array;
use function serialize;
use function unserialize;

/**
 * Predis cache provider.
 */
class PredisCache extends CacheProvider
{
    /** @var ClientInterface */
    private \$client;

    public function __construct(ClientInterface \$client)
    {
        \$this->client = \$client;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        \$result = \$this->client->get(\$id);
        if (\$result === null) {
            return false;
        }

        return unserialize(\$result);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetchMultiple(array \$keys)
    {
        \$fetchedItems = call_user_func_array([\$this->client, 'mget'], \$keys);

        return array_map('unserialize', array_filter(array_combine(\$keys, \$fetchedItems)));
    }

    /**
     * {@inheritdoc}
     */
    protected function doSaveMultiple(array \$keysAndValues, \$lifetime = 0)
    {
        if (\$lifetime) {
            \$success = true;

            // Keys have lifetime, use SETEX for each of them
            foreach (\$keysAndValues as \$key => \$value) {
                \$response = (string) \$this->client->setex(\$key, \$lifetime, serialize(\$value));

                if (\$response == 'OK') {
                    continue;
                }

                \$success = false;
            }

            return \$success;
        }

        // No lifetime, use MSET
        \$response = \$this->client->mset(array_map(static function (\$value) {
            return serialize(\$value);
        }, \$keysAndValues));

        return (string) \$response == 'OK';
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        return (bool) \$this->client->exists(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        \$data = serialize(\$data);
        if (\$lifeTime > 0) {
            \$response = \$this->client->setex(\$id, \$lifeTime, \$data);
        } else {
            \$response = \$this->client->set(\$id, \$data);
        }

        return \$response === true || \$response == 'OK';
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        return \$this->client->del(\$id) >= 0;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDeleteMultiple(array \$keys)
    {
        return \$this->client->del(\$keys) >= 0;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        \$response = \$this->client->flushdb();

        return \$response === true || \$response == 'OK';
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        \$info = \$this->client->info();

        return [
            Cache::STATS_HITS              => \$info['Stats']['keyspace_hits'],
            Cache::STATS_MISSES            => \$info['Stats']['keyspace_misses'],
            Cache::STATS_UPTIME            => \$info['Server']['uptime_in_seconds'],
            Cache::STATS_MEMORY_USAGE      => \$info['Memory']['used_memory'],
            Cache::STATS_MEMORY_AVAILABLE  => false,
        ];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/PredisCache.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

use Predis\\ClientInterface;
use function array_combine;
use function array_filter;
use function array_map;
use function call_user_func_array;
use function serialize;
use function unserialize;

/**
 * Predis cache provider.
 */
class PredisCache extends CacheProvider
{
    /** @var ClientInterface */
    private \$client;

    public function __construct(ClientInterface \$client)
    {
        \$this->client = \$client;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        \$result = \$this->client->get(\$id);
        if (\$result === null) {
            return false;
        }

        return unserialize(\$result);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetchMultiple(array \$keys)
    {
        \$fetchedItems = call_user_func_array([\$this->client, 'mget'], \$keys);

        return array_map('unserialize', array_filter(array_combine(\$keys, \$fetchedItems)));
    }

    /**
     * {@inheritdoc}
     */
    protected function doSaveMultiple(array \$keysAndValues, \$lifetime = 0)
    {
        if (\$lifetime) {
            \$success = true;

            // Keys have lifetime, use SETEX for each of them
            foreach (\$keysAndValues as \$key => \$value) {
                \$response = (string) \$this->client->setex(\$key, \$lifetime, serialize(\$value));

                if (\$response == 'OK') {
                    continue;
                }

                \$success = false;
            }

            return \$success;
        }

        // No lifetime, use MSET
        \$response = \$this->client->mset(array_map(static function (\$value) {
            return serialize(\$value);
        }, \$keysAndValues));

        return (string) \$response == 'OK';
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        return (bool) \$this->client->exists(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        \$data = serialize(\$data);
        if (\$lifeTime > 0) {
            \$response = \$this->client->setex(\$id, \$lifeTime, \$data);
        } else {
            \$response = \$this->client->set(\$id, \$data);
        }

        return \$response === true || \$response == 'OK';
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        return \$this->client->del(\$id) >= 0;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDeleteMultiple(array \$keys)
    {
        return \$this->client->del(\$keys) >= 0;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        \$response = \$this->client->flushdb();

        return \$response === true || \$response == 'OK';
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        \$info = \$this->client->info();

        return [
            Cache::STATS_HITS              => \$info['Stats']['keyspace_hits'],
            Cache::STATS_MISSES            => \$info['Stats']['keyspace_misses'],
            Cache::STATS_UPTIME            => \$info['Server']['uptime_in_seconds'],
            Cache::STATS_MEMORY_USAGE      => \$info['Memory']['used_memory'],
            Cache::STATS_MEMORY_AVAILABLE  => false,
        ];
    }
}
", "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/PredisCache.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\PredisCache.php");
    }
}
