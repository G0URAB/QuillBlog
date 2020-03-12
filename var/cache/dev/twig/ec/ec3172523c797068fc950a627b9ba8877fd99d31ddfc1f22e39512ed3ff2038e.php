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

/* @app/vendor/symfony/http-foundation/Session/Storage/Handler/MongoDbSessionHandler.php */
class __TwigTemplate_6168c9cd7fb2b411bcb664aef0e7a3d2c1e31384b1b0d487a06398f5949380a6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-foundation/Session/Storage/Handler/MongoDbSessionHandler.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler;

/**
 * Session handler using the mongodb/mongodb package and MongoDB driver extension.
 *
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 *
 * @see https://packagist.org/packages/mongodb/mongodb
 * @see https://php.net/mongodb
 */
class MongoDbSessionHandler extends AbstractSessionHandler
{
    private \$mongo;

    /**
     * @var \\MongoDB\\Collection
     */
    private \$collection;

    /**
     * @var array
     */
    private \$options;

    /**
     * Constructor.
     *
     * List of available options:
     *  * database: The name of the database [required]
     *  * collection: The name of the collection [required]
     *  * id_field: The field name for storing the session id [default: _id]
     *  * data_field: The field name for storing the session data [default: data]
     *  * time_field: The field name for storing the timestamp [default: time]
     *  * expiry_field: The field name for storing the expiry-timestamp [default: expires_at].
     *
     * It is strongly recommended to put an index on the `expiry_field` for
     * garbage-collection. Alternatively it's possible to automatically expire
     * the sessions in the database as described below:
     *
     * A TTL collections can be used on MongoDB 2.2+ to cleanup expired sessions
     * automatically. Such an index can for example look like this:
     *
     *     db.<session-collection>.ensureIndex(
     *         { \"<expiry-field>\": 1 },
     *         { \"expireAfterSeconds\": 0 }
     *     )
     *
     * More details on: https://docs.mongodb.org/manual/tutorial/expire-data/
     *
     * If you use such an index, you can drop `gc_probability` to 0 since
     * no garbage-collection is required.
     *
     * @throws \\InvalidArgumentException When \"database\" or \"collection\" not provided
     */
    public function __construct(\\MongoDB\\Client \$mongo, array \$options)
    {
        if (!isset(\$options['database']) || !isset(\$options['collection'])) {
            throw new \\InvalidArgumentException('You must provide the \"database\" and \"collection\" option for MongoDBSessionHandler');
        }

        \$this->mongo = \$mongo;

        \$this->options = array_merge([
            'id_field' => '_id',
            'data_field' => 'data',
            'time_field' => 'time',
            'expiry_field' => 'expires_at',
        ], \$options);
    }

    /**
     * @return bool
     */
    public function close()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDestroy(string \$sessionId)
    {
        \$this->getCollection()->deleteOne([
            \$this->options['id_field'] => \$sessionId,
        ]);

        return true;
    }

    /**
     * @return bool
     */
    public function gc(\$maxlifetime)
    {
        \$this->getCollection()->deleteMany([
            \$this->options['expiry_field'] => ['\$lt' => new \\MongoDB\\BSON\\UTCDateTime()],
        ]);

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWrite(string \$sessionId, string \$data)
    {
        \$expiry = new \\MongoDB\\BSON\\UTCDateTime((time() + (int) ini_get('session.gc_maxlifetime')) * 1000);

        \$fields = [
            \$this->options['time_field'] => new \\MongoDB\\BSON\\UTCDateTime(),
            \$this->options['expiry_field'] => \$expiry,
            \$this->options['data_field'] => new \\MongoDB\\BSON\\Binary(\$data, \\MongoDB\\BSON\\Binary::TYPE_OLD_BINARY),
        ];

        \$this->getCollection()->updateOne(
            [\$this->options['id_field'] => \$sessionId],
            ['\$set' => \$fields],
            ['upsert' => true]
        );

        return true;
    }

    /**
     * @return bool
     */
    public function updateTimestamp(\$sessionId, \$data)
    {
        \$expiry = new \\MongoDB\\BSON\\UTCDateTime((time() + (int) ini_get('session.gc_maxlifetime')) * 1000);

        \$this->getCollection()->updateOne(
            [\$this->options['id_field'] => \$sessionId],
            ['\$set' => [
                \$this->options['time_field'] => new \\MongoDB\\BSON\\UTCDateTime(),
                \$this->options['expiry_field'] => \$expiry,
            ]]
        );

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doRead(string \$sessionId)
    {
        \$dbData = \$this->getCollection()->findOne([
            \$this->options['id_field'] => \$sessionId,
            \$this->options['expiry_field'] => ['\$gte' => new \\MongoDB\\BSON\\UTCDateTime()],
        ]);

        if (null === \$dbData) {
            return '';
        }

        return \$dbData[\$this->options['data_field']]->getData();
    }

    private function getCollection(): \\MongoDB\\Collection
    {
        if (null === \$this->collection) {
            \$this->collection = \$this->mongo->selectCollection(\$this->options['database'], \$this->options['collection']);
        }

        return \$this->collection;
    }

    /**
     * @return \\MongoDB\\Client
     */
    protected function getMongo()
    {
        return \$this->mongo;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-foundation/Session/Storage/Handler/MongoDbSessionHandler.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler;

/**
 * Session handler using the mongodb/mongodb package and MongoDB driver extension.
 *
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 *
 * @see https://packagist.org/packages/mongodb/mongodb
 * @see https://php.net/mongodb
 */
class MongoDbSessionHandler extends AbstractSessionHandler
{
    private \$mongo;

    /**
     * @var \\MongoDB\\Collection
     */
    private \$collection;

    /**
     * @var array
     */
    private \$options;

    /**
     * Constructor.
     *
     * List of available options:
     *  * database: The name of the database [required]
     *  * collection: The name of the collection [required]
     *  * id_field: The field name for storing the session id [default: _id]
     *  * data_field: The field name for storing the session data [default: data]
     *  * time_field: The field name for storing the timestamp [default: time]
     *  * expiry_field: The field name for storing the expiry-timestamp [default: expires_at].
     *
     * It is strongly recommended to put an index on the `expiry_field` for
     * garbage-collection. Alternatively it's possible to automatically expire
     * the sessions in the database as described below:
     *
     * A TTL collections can be used on MongoDB 2.2+ to cleanup expired sessions
     * automatically. Such an index can for example look like this:
     *
     *     db.<session-collection>.ensureIndex(
     *         { \"<expiry-field>\": 1 },
     *         { \"expireAfterSeconds\": 0 }
     *     )
     *
     * More details on: https://docs.mongodb.org/manual/tutorial/expire-data/
     *
     * If you use such an index, you can drop `gc_probability` to 0 since
     * no garbage-collection is required.
     *
     * @throws \\InvalidArgumentException When \"database\" or \"collection\" not provided
     */
    public function __construct(\\MongoDB\\Client \$mongo, array \$options)
    {
        if (!isset(\$options['database']) || !isset(\$options['collection'])) {
            throw new \\InvalidArgumentException('You must provide the \"database\" and \"collection\" option for MongoDBSessionHandler');
        }

        \$this->mongo = \$mongo;

        \$this->options = array_merge([
            'id_field' => '_id',
            'data_field' => 'data',
            'time_field' => 'time',
            'expiry_field' => 'expires_at',
        ], \$options);
    }

    /**
     * @return bool
     */
    public function close()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDestroy(string \$sessionId)
    {
        \$this->getCollection()->deleteOne([
            \$this->options['id_field'] => \$sessionId,
        ]);

        return true;
    }

    /**
     * @return bool
     */
    public function gc(\$maxlifetime)
    {
        \$this->getCollection()->deleteMany([
            \$this->options['expiry_field'] => ['\$lt' => new \\MongoDB\\BSON\\UTCDateTime()],
        ]);

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWrite(string \$sessionId, string \$data)
    {
        \$expiry = new \\MongoDB\\BSON\\UTCDateTime((time() + (int) ini_get('session.gc_maxlifetime')) * 1000);

        \$fields = [
            \$this->options['time_field'] => new \\MongoDB\\BSON\\UTCDateTime(),
            \$this->options['expiry_field'] => \$expiry,
            \$this->options['data_field'] => new \\MongoDB\\BSON\\Binary(\$data, \\MongoDB\\BSON\\Binary::TYPE_OLD_BINARY),
        ];

        \$this->getCollection()->updateOne(
            [\$this->options['id_field'] => \$sessionId],
            ['\$set' => \$fields],
            ['upsert' => true]
        );

        return true;
    }

    /**
     * @return bool
     */
    public function updateTimestamp(\$sessionId, \$data)
    {
        \$expiry = new \\MongoDB\\BSON\\UTCDateTime((time() + (int) ini_get('session.gc_maxlifetime')) * 1000);

        \$this->getCollection()->updateOne(
            [\$this->options['id_field'] => \$sessionId],
            ['\$set' => [
                \$this->options['time_field'] => new \\MongoDB\\BSON\\UTCDateTime(),
                \$this->options['expiry_field'] => \$expiry,
            ]]
        );

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doRead(string \$sessionId)
    {
        \$dbData = \$this->getCollection()->findOne([
            \$this->options['id_field'] => \$sessionId,
            \$this->options['expiry_field'] => ['\$gte' => new \\MongoDB\\BSON\\UTCDateTime()],
        ]);

        if (null === \$dbData) {
            return '';
        }

        return \$dbData[\$this->options['data_field']]->getData();
    }

    private function getCollection(): \\MongoDB\\Collection
    {
        if (null === \$this->collection) {
            \$this->collection = \$this->mongo->selectCollection(\$this->options['database'], \$this->options['collection']);
        }

        return \$this->collection;
    }

    /**
     * @return \\MongoDB\\Client
     */
    protected function getMongo()
    {
        return \$this->mongo;
    }
}
", "@app/vendor/symfony/http-foundation/Session/Storage/Handler/MongoDbSessionHandler.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-foundation\\Session\\Storage\\Handler\\MongoDbSessionHandler.php");
    }
}
