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

/* @app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MongoDBCache.php */
class __TwigTemplate_c9b1a0636e962578715a12cd8057bc4712be4248de08c7eab805833373cd1155 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MongoDBCache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

use InvalidArgumentException;
use MongoCollection;
use MongoDB\\Collection;
use const E_USER_DEPRECATED;
use function trigger_error;

/**
 * MongoDB cache provider.
 */
class MongoDBCache extends CacheProvider
{
    /**
     * The data field will store the serialized PHP value.
     */
    public const DATA_FIELD = 'd';

    /**
     * The expiration field will store a MongoDate value indicating when the
     * cache entry should expire.
     *
     * With MongoDB 2.2+, entries can be automatically deleted by MongoDB by
     * indexing this field with the \"expireAfterSeconds\" option equal to zero.
     * This will direct MongoDB to regularly query for and delete any entries
     * whose date is older than the current time. Entries without a date value
     * in this field will be ignored.
     *
     * The cache provider will also check dates on its own, in case expired
     * entries are fetched before MongoDB's TTLMonitor pass can expire them.
     *
     * @see http://docs.mongodb.org/manual/tutorial/expire-data/
     */
    public const EXPIRATION_FIELD = 'e';

    /** @var CacheProvider */
    private \$provider;

    /**
     * This provider will default to the write concern and read preference
     * options set on the collection instance (or inherited from MongoDB or
     * MongoClient). Using an unacknowledged write concern (< 1) may make the
     * return values of delete() and save() unreliable. Reading from secondaries
     * may make contain() and fetch() unreliable.
     *
     * @see http://www.php.net/manual/en/mongo.readpreferences.php
     * @see http://www.php.net/manual/en/mongo.writeconcerns.php
     *
     * @param MongoCollection|Collection \$collection
     */
    public function __construct(\$collection)
    {
        if (\$collection instanceof MongoCollection) {
            @trigger_error('Using a MongoCollection instance for creating a cache adapter is deprecated and will be removed in 2.0', E_USER_DEPRECATED);
            \$this->provider = new LegacyMongoDBCache(\$collection);
        } elseif (\$collection instanceof Collection) {
            \$this->provider = new ExtMongoDBCache(\$collection);
        } else {
            throw new InvalidArgumentException('Invalid collection given - expected a MongoCollection or MongoDB\\Collection instance');
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        return \$this->provider->doFetch(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        return \$this->provider->doContains(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        return \$this->provider->doSave(\$id, \$data, \$lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        return \$this->provider->doDelete(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        return \$this->provider->doFlush();
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        return \$this->provider->doGetStats();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MongoDBCache.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

use InvalidArgumentException;
use MongoCollection;
use MongoDB\\Collection;
use const E_USER_DEPRECATED;
use function trigger_error;

/**
 * MongoDB cache provider.
 */
class MongoDBCache extends CacheProvider
{
    /**
     * The data field will store the serialized PHP value.
     */
    public const DATA_FIELD = 'd';

    /**
     * The expiration field will store a MongoDate value indicating when the
     * cache entry should expire.
     *
     * With MongoDB 2.2+, entries can be automatically deleted by MongoDB by
     * indexing this field with the \"expireAfterSeconds\" option equal to zero.
     * This will direct MongoDB to regularly query for and delete any entries
     * whose date is older than the current time. Entries without a date value
     * in this field will be ignored.
     *
     * The cache provider will also check dates on its own, in case expired
     * entries are fetched before MongoDB's TTLMonitor pass can expire them.
     *
     * @see http://docs.mongodb.org/manual/tutorial/expire-data/
     */
    public const EXPIRATION_FIELD = 'e';

    /** @var CacheProvider */
    private \$provider;

    /**
     * This provider will default to the write concern and read preference
     * options set on the collection instance (or inherited from MongoDB or
     * MongoClient). Using an unacknowledged write concern (< 1) may make the
     * return values of delete() and save() unreliable. Reading from secondaries
     * may make contain() and fetch() unreliable.
     *
     * @see http://www.php.net/manual/en/mongo.readpreferences.php
     * @see http://www.php.net/manual/en/mongo.writeconcerns.php
     *
     * @param MongoCollection|Collection \$collection
     */
    public function __construct(\$collection)
    {
        if (\$collection instanceof MongoCollection) {
            @trigger_error('Using a MongoCollection instance for creating a cache adapter is deprecated and will be removed in 2.0', E_USER_DEPRECATED);
            \$this->provider = new LegacyMongoDBCache(\$collection);
        } elseif (\$collection instanceof Collection) {
            \$this->provider = new ExtMongoDBCache(\$collection);
        } else {
            throw new InvalidArgumentException('Invalid collection given - expected a MongoCollection or MongoDB\\Collection instance');
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        return \$this->provider->doFetch(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        return \$this->provider->doContains(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        return \$this->provider->doSave(\$id, \$data, \$lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        return \$this->provider->doDelete(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        return \$this->provider->doFlush();
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        return \$this->provider->doGetStats();
    }
}
", "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MongoDBCache.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MongoDBCache.php");
    }
}
