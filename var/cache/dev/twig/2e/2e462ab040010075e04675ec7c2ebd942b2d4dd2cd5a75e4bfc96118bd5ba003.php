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

/* @app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/SQLite3Cache.php */
class __TwigTemplate_08c40fb19fead568c7e3e258f01f7e9b6193e7c6a08775ac4cb1f13e7a7cfc89 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/SQLite3Cache.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Cache;

use SQLite3;
use SQLite3Result;
use const SQLITE3_ASSOC;
use const SQLITE3_BLOB;
use const SQLITE3_TEXT;
use function array_search;
use function implode;
use function serialize;
use function sprintf;
use function time;
use function unserialize;

/**
 * SQLite3 cache provider.
 */
class SQLite3Cache extends CacheProvider
{
    /**
     * The ID field will store the cache key.
     */
    public const ID_FIELD = 'k';

    /**
     * The data field will store the serialized PHP value.
     */
    public const DATA_FIELD = 'd';

    /**
     * The expiration field will store a date value indicating when the
     * cache entry should expire.
     */
    public const EXPIRATION_FIELD = 'e';

    /** @var SQLite3 */
    private \$sqlite;

    /** @var string */
    private \$table;

    /**
     * Calling the constructor will ensure that the database file and table
     * exist and will create both if they don't.
     *
     * @param string \$table
     */
    public function __construct(SQLite3 \$sqlite, \$table)
    {
        \$this->sqlite = \$sqlite;
        \$this->table  = (string) \$table;

        \$this->ensureTableExists();
    }

    private function ensureTableExists() : void
    {
        \$this->sqlite->exec(
            sprintf(
                'CREATE TABLE IF NOT EXISTS %s(%s TEXT PRIMARY KEY NOT NULL, %s BLOB, %s INTEGER)',
                \$this->table,
                static::ID_FIELD,
                static::DATA_FIELD,
                static::EXPIRATION_FIELD
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        \$item = \$this->findById(\$id);

        if (! \$item) {
            return false;
        }

        return unserialize(\$item[self::DATA_FIELD]);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        return \$this->findById(\$id, false) !== null;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        \$statement = \$this->sqlite->prepare(sprintf(
            'INSERT OR REPLACE INTO %s (%s) VALUES (:id, :data, :expire)',
            \$this->table,
            implode(',', \$this->getFields())
        ));

        \$statement->bindValue(':id', \$id);
        \$statement->bindValue(':data', serialize(\$data), SQLITE3_BLOB);
        \$statement->bindValue(':expire', \$lifeTime > 0 ? time() + \$lifeTime : null);

        return \$statement->execute() instanceof SQLite3Result;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        [\$idField] = \$this->getFields();

        \$statement = \$this->sqlite->prepare(sprintf(
            'DELETE FROM %s WHERE %s = :id',
            \$this->table,
            \$idField
        ));

        \$statement->bindValue(':id', \$id);

        return \$statement->execute() instanceof SQLite3Result;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        return \$this->sqlite->exec(sprintf('DELETE FROM %s', \$this->table));
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        // no-op.
    }

    /**
     * Find a single row by ID.
     *
     * @param mixed \$id
     *
     * @return array|null
     */
    private function findById(\$id, bool \$includeData = true) : ?array
    {
        [\$idField] = \$fields = \$this->getFields();

        if (! \$includeData) {
            \$key = array_search(static::DATA_FIELD, \$fields);
            unset(\$fields[\$key]);
        }

        \$statement = \$this->sqlite->prepare(sprintf(
            'SELECT %s FROM %s WHERE %s = :id LIMIT 1',
            implode(',', \$fields),
            \$this->table,
            \$idField
        ));

        \$statement->bindValue(':id', \$id, SQLITE3_TEXT);

        \$item = \$statement->execute()->fetchArray(SQLITE3_ASSOC);

        if (\$item === false) {
            return null;
        }

        if (\$this->isExpired(\$item)) {
            \$this->doDelete(\$id);

            return null;
        }

        return \$item;
    }

    /**
     * Gets an array of the fields in our table.
     *
     * @return array
     */
    private function getFields() : array
    {
        return [static::ID_FIELD, static::DATA_FIELD, static::EXPIRATION_FIELD];
    }

    /**
     * Check if the item is expired.
     *
     * @param array \$item
     */
    private function isExpired(array \$item) : bool
    {
        return isset(\$item[static::EXPIRATION_FIELD]) &&
            \$item[self::EXPIRATION_FIELD] !== null &&
            \$item[self::EXPIRATION_FIELD] < time();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/SQLite3Cache.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Cache;

use SQLite3;
use SQLite3Result;
use const SQLITE3_ASSOC;
use const SQLITE3_BLOB;
use const SQLITE3_TEXT;
use function array_search;
use function implode;
use function serialize;
use function sprintf;
use function time;
use function unserialize;

/**
 * SQLite3 cache provider.
 */
class SQLite3Cache extends CacheProvider
{
    /**
     * The ID field will store the cache key.
     */
    public const ID_FIELD = 'k';

    /**
     * The data field will store the serialized PHP value.
     */
    public const DATA_FIELD = 'd';

    /**
     * The expiration field will store a date value indicating when the
     * cache entry should expire.
     */
    public const EXPIRATION_FIELD = 'e';

    /** @var SQLite3 */
    private \$sqlite;

    /** @var string */
    private \$table;

    /**
     * Calling the constructor will ensure that the database file and table
     * exist and will create both if they don't.
     *
     * @param string \$table
     */
    public function __construct(SQLite3 \$sqlite, \$table)
    {
        \$this->sqlite = \$sqlite;
        \$this->table  = (string) \$table;

        \$this->ensureTableExists();
    }

    private function ensureTableExists() : void
    {
        \$this->sqlite->exec(
            sprintf(
                'CREATE TABLE IF NOT EXISTS %s(%s TEXT PRIMARY KEY NOT NULL, %s BLOB, %s INTEGER)',
                \$this->table,
                static::ID_FIELD,
                static::DATA_FIELD,
                static::EXPIRATION_FIELD
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(\$id)
    {
        \$item = \$this->findById(\$id);

        if (! \$item) {
            return false;
        }

        return unserialize(\$item[self::DATA_FIELD]);
    }

    /**
     * {@inheritdoc}
     */
    protected function doContains(\$id)
    {
        return \$this->findById(\$id, false) !== null;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(\$id, \$data, \$lifeTime = 0)
    {
        \$statement = \$this->sqlite->prepare(sprintf(
            'INSERT OR REPLACE INTO %s (%s) VALUES (:id, :data, :expire)',
            \$this->table,
            implode(',', \$this->getFields())
        ));

        \$statement->bindValue(':id', \$id);
        \$statement->bindValue(':data', serialize(\$data), SQLITE3_BLOB);
        \$statement->bindValue(':expire', \$lifeTime > 0 ? time() + \$lifeTime : null);

        return \$statement->execute() instanceof SQLite3Result;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(\$id)
    {
        [\$idField] = \$this->getFields();

        \$statement = \$this->sqlite->prepare(sprintf(
            'DELETE FROM %s WHERE %s = :id',
            \$this->table,
            \$idField
        ));

        \$statement->bindValue(':id', \$id);

        return \$statement->execute() instanceof SQLite3Result;
    }

    /**
     * {@inheritdoc}
     */
    protected function doFlush()
    {
        return \$this->sqlite->exec(sprintf('DELETE FROM %s', \$this->table));
    }

    /**
     * {@inheritdoc}
     */
    protected function doGetStats()
    {
        // no-op.
    }

    /**
     * Find a single row by ID.
     *
     * @param mixed \$id
     *
     * @return array|null
     */
    private function findById(\$id, bool \$includeData = true) : ?array
    {
        [\$idField] = \$fields = \$this->getFields();

        if (! \$includeData) {
            \$key = array_search(static::DATA_FIELD, \$fields);
            unset(\$fields[\$key]);
        }

        \$statement = \$this->sqlite->prepare(sprintf(
            'SELECT %s FROM %s WHERE %s = :id LIMIT 1',
            implode(',', \$fields),
            \$this->table,
            \$idField
        ));

        \$statement->bindValue(':id', \$id, SQLITE3_TEXT);

        \$item = \$statement->execute()->fetchArray(SQLITE3_ASSOC);

        if (\$item === false) {
            return null;
        }

        if (\$this->isExpired(\$item)) {
            \$this->doDelete(\$id);

            return null;
        }

        return \$item;
    }

    /**
     * Gets an array of the fields in our table.
     *
     * @return array
     */
    private function getFields() : array
    {
        return [static::ID_FIELD, static::DATA_FIELD, static::EXPIRATION_FIELD];
    }

    /**
     * Check if the item is expired.
     *
     * @param array \$item
     */
    private function isExpired(array \$item) : bool
    {
        return isset(\$item[static::EXPIRATION_FIELD]) &&
            \$item[self::EXPIRATION_FIELD] !== null &&
            \$item[self::EXPIRATION_FIELD] < time();
    }
}
", "@app/vendor/doctrine/cache/lib/Doctrine/Common/Cache/SQLite3Cache.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\SQLite3Cache.php");
    }
}
