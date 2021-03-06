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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractSQLiteDriver.php */
class __TwigTemplate_24218044e7eb8da993c28f12516ed0c60f4279b0fb435a3e79fd3c84226e85dd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractSQLiteDriver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Driver;
use Doctrine\\DBAL\\Exception;
use Doctrine\\DBAL\\Platforms\\SqlitePlatform;
use Doctrine\\DBAL\\Schema\\SqliteSchemaManager;
use function strpos;

/**
 * Abstract base implementation of the {@link Doctrine\\DBAL\\Driver} interface for SQLite based drivers.
 */
abstract class AbstractSQLiteDriver implements Driver, ExceptionConverterDriver
{
    /**
     * {@inheritdoc}
     *
     * @link http://www.sqlite.org/c3ref/c_abort.html
     */
    public function convertException(\$message, DriverException \$exception)
    {
        if (strpos(\$exception->getMessage(), 'database is locked') !== false) {
            return new Exception\\LockWaitTimeoutException(\$message, \$exception);
        }

        if (strpos(\$exception->getMessage(), 'must be unique') !== false ||
            strpos(\$exception->getMessage(), 'is not unique') !== false ||
            strpos(\$exception->getMessage(), 'are not unique') !== false ||
            strpos(\$exception->getMessage(), 'UNIQUE constraint failed') !== false
        ) {
            return new Exception\\UniqueConstraintViolationException(\$message, \$exception);
        }

        if (strpos(\$exception->getMessage(), 'may not be NULL') !== false ||
            strpos(\$exception->getMessage(), 'NOT NULL constraint failed') !== false
        ) {
            return new Exception\\NotNullConstraintViolationException(\$message, \$exception);
        }

        if (strpos(\$exception->getMessage(), 'no such table:') !== false) {
            return new Exception\\TableNotFoundException(\$message, \$exception);
        }

        if (strpos(\$exception->getMessage(), 'already exists') !== false) {
            return new Exception\\TableExistsException(\$message, \$exception);
        }

        if (strpos(\$exception->getMessage(), 'has no column named') !== false) {
            return new Exception\\InvalidFieldNameException(\$message, \$exception);
        }

        if (strpos(\$exception->getMessage(), 'ambiguous column name') !== false) {
            return new Exception\\NonUniqueFieldNameException(\$message, \$exception);
        }

        if (strpos(\$exception->getMessage(), 'syntax error') !== false) {
            return new Exception\\SyntaxErrorException(\$message, \$exception);
        }

        if (strpos(\$exception->getMessage(), 'attempt to write a readonly database') !== false) {
            return new Exception\\ReadOnlyException(\$message, \$exception);
        }

        if (strpos(\$exception->getMessage(), 'unable to open database file') !== false) {
            return new Exception\\ConnectionException(\$message, \$exception);
        }

        return new Exception\\DriverException(\$message, \$exception);
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabase(Connection \$conn)
    {
        \$params = \$conn->getParams();

        return \$params['path'] ?? null;
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabasePlatform()
    {
        return new SqlitePlatform();
    }

    /**
     * {@inheritdoc}
     */
    public function getSchemaManager(Connection \$conn)
    {
        return new SqliteSchemaManager(\$conn);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractSQLiteDriver.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Driver;
use Doctrine\\DBAL\\Exception;
use Doctrine\\DBAL\\Platforms\\SqlitePlatform;
use Doctrine\\DBAL\\Schema\\SqliteSchemaManager;
use function strpos;

/**
 * Abstract base implementation of the {@link Doctrine\\DBAL\\Driver} interface for SQLite based drivers.
 */
abstract class AbstractSQLiteDriver implements Driver, ExceptionConverterDriver
{
    /**
     * {@inheritdoc}
     *
     * @link http://www.sqlite.org/c3ref/c_abort.html
     */
    public function convertException(\$message, DriverException \$exception)
    {
        if (strpos(\$exception->getMessage(), 'database is locked') !== false) {
            return new Exception\\LockWaitTimeoutException(\$message, \$exception);
        }

        if (strpos(\$exception->getMessage(), 'must be unique') !== false ||
            strpos(\$exception->getMessage(), 'is not unique') !== false ||
            strpos(\$exception->getMessage(), 'are not unique') !== false ||
            strpos(\$exception->getMessage(), 'UNIQUE constraint failed') !== false
        ) {
            return new Exception\\UniqueConstraintViolationException(\$message, \$exception);
        }

        if (strpos(\$exception->getMessage(), 'may not be NULL') !== false ||
            strpos(\$exception->getMessage(), 'NOT NULL constraint failed') !== false
        ) {
            return new Exception\\NotNullConstraintViolationException(\$message, \$exception);
        }

        if (strpos(\$exception->getMessage(), 'no such table:') !== false) {
            return new Exception\\TableNotFoundException(\$message, \$exception);
        }

        if (strpos(\$exception->getMessage(), 'already exists') !== false) {
            return new Exception\\TableExistsException(\$message, \$exception);
        }

        if (strpos(\$exception->getMessage(), 'has no column named') !== false) {
            return new Exception\\InvalidFieldNameException(\$message, \$exception);
        }

        if (strpos(\$exception->getMessage(), 'ambiguous column name') !== false) {
            return new Exception\\NonUniqueFieldNameException(\$message, \$exception);
        }

        if (strpos(\$exception->getMessage(), 'syntax error') !== false) {
            return new Exception\\SyntaxErrorException(\$message, \$exception);
        }

        if (strpos(\$exception->getMessage(), 'attempt to write a readonly database') !== false) {
            return new Exception\\ReadOnlyException(\$message, \$exception);
        }

        if (strpos(\$exception->getMessage(), 'unable to open database file') !== false) {
            return new Exception\\ConnectionException(\$message, \$exception);
        }

        return new Exception\\DriverException(\$message, \$exception);
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabase(Connection \$conn)
    {
        \$params = \$conn->getParams();

        return \$params['path'] ?? null;
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabasePlatform()
    {
        return new SqlitePlatform();
    }

    /**
     * {@inheritdoc}
     */
    public function getSchemaManager(Connection \$conn)
    {
        return new SqliteSchemaManager(\$conn);
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractSQLiteDriver.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\AbstractSQLiteDriver.php");
    }
}
