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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/AbstractMigration.php */
class __TwigTemplate_716a315b43c5573ce6b0e0b66a58c255378ded362e023849fc88c4409f116bc7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/AbstractMigration.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\Exception\\AbortMigration;
use Doctrine\\Migrations\\Exception\\IrreversibleMigration;
use Doctrine\\Migrations\\Exception\\MigrationException;
use Doctrine\\Migrations\\Exception\\SkipMigration;
use Doctrine\\Migrations\\Version\\Version;
use function sprintf;

/**
 * The AbstractMigration class is for end users to extend from when creating migrations. Extend this class
 * and implement the required up() and down() methods.
 */
abstract class AbstractMigration
{
    /** @var Version */
    protected \$version;

    /** @var Connection */
    protected \$connection;

    /** @var AbstractSchemaManager */
    protected \$sm;

    /** @var AbstractPlatform */
    protected \$platform;

    /** @var OutputWriter */
    private \$outputWriter;

    public function __construct(Version \$version)
    {
        \$config = \$version->getConfiguration();

        \$this->version      = \$version;
        \$this->connection   = \$config->getConnection();
        \$this->sm           = \$this->connection->getSchemaManager();
        \$this->platform     = \$this->connection->getDatabasePlatform();
        \$this->outputWriter = \$config->getOutputWriter();
    }

    /**
     * Indicates the transactional mode of this migration.
     *
     * If this function returns true (default) the migration will be executed
     * in one transaction, otherwise non-transactional state will be used to
     * execute each of the migration SQLs.
     *
     * Extending class should override this function to alter the return value.
     */
    public function isTransactional() : bool
    {
        return true;
    }

    public function getDescription() : string
    {
        return '';
    }

    public function warnIf(bool \$condition, string \$message = '') : void
    {
        if (! \$condition) {
            return;
        }

        \$message = \$message ?: 'Unknown Reason';

        \$this->outputWriter->write(sprintf(
            '    <comment>Warning during %s: %s</comment>',
            \$this->version->getExecutionState(),
            \$message
        ));
    }

    /**
     * @throws AbortMigration
     */
    public function abortIf(bool \$condition, string \$message = '') : void
    {
        if (\$condition) {
            throw new AbortMigration(\$message ?: 'Unknown Reason');
        }
    }

    /**
     * @throws SkipMigration
     */
    public function skipIf(bool \$condition, string \$message = '') : void
    {
        if (\$condition) {
            throw new SkipMigration(\$message ?: 'Unknown Reason');
        }
    }

    /**
     * @throws MigrationException|DBALException
     */
    public function preUp(Schema \$schema) : void
    {
    }

    /**
     * @throws MigrationException|DBALException
     */
    public function postUp(Schema \$schema) : void
    {
    }

    /**
     * @throws MigrationException|DBALException
     */
    public function preDown(Schema \$schema) : void
    {
    }

    /**
     * @throws MigrationException|DBALException
     */
    public function postDown(Schema \$schema) : void
    {
    }

    /**
     * @throws MigrationException|DBALException
     */
    abstract public function up(Schema \$schema) : void;

    /**
     * @throws MigrationException|DBALException
     */
    abstract public function down(Schema \$schema) : void;

    /**
     * @param mixed[] \$params
     * @param mixed[] \$types
     */
    protected function addSql(
        string \$sql,
        array \$params = [],
        array \$types = []
    ) : void {
        \$this->version->addSql(\$sql, \$params, \$types);
    }

    protected function write(string \$message) : void
    {
        \$this->outputWriter->write(\$message);
    }

    /**
     * @throws IrreversibleMigration
     */
    protected function throwIrreversibleMigrationException(?string \$message = null) : void
    {
        if (\$message === null) {
            \$message = 'This migration is irreversible and cannot be reverted.';
        }

        throw new IrreversibleMigration(\$message);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/AbstractMigration.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\Exception\\AbortMigration;
use Doctrine\\Migrations\\Exception\\IrreversibleMigration;
use Doctrine\\Migrations\\Exception\\MigrationException;
use Doctrine\\Migrations\\Exception\\SkipMigration;
use Doctrine\\Migrations\\Version\\Version;
use function sprintf;

/**
 * The AbstractMigration class is for end users to extend from when creating migrations. Extend this class
 * and implement the required up() and down() methods.
 */
abstract class AbstractMigration
{
    /** @var Version */
    protected \$version;

    /** @var Connection */
    protected \$connection;

    /** @var AbstractSchemaManager */
    protected \$sm;

    /** @var AbstractPlatform */
    protected \$platform;

    /** @var OutputWriter */
    private \$outputWriter;

    public function __construct(Version \$version)
    {
        \$config = \$version->getConfiguration();

        \$this->version      = \$version;
        \$this->connection   = \$config->getConnection();
        \$this->sm           = \$this->connection->getSchemaManager();
        \$this->platform     = \$this->connection->getDatabasePlatform();
        \$this->outputWriter = \$config->getOutputWriter();
    }

    /**
     * Indicates the transactional mode of this migration.
     *
     * If this function returns true (default) the migration will be executed
     * in one transaction, otherwise non-transactional state will be used to
     * execute each of the migration SQLs.
     *
     * Extending class should override this function to alter the return value.
     */
    public function isTransactional() : bool
    {
        return true;
    }

    public function getDescription() : string
    {
        return '';
    }

    public function warnIf(bool \$condition, string \$message = '') : void
    {
        if (! \$condition) {
            return;
        }

        \$message = \$message ?: 'Unknown Reason';

        \$this->outputWriter->write(sprintf(
            '    <comment>Warning during %s: %s</comment>',
            \$this->version->getExecutionState(),
            \$message
        ));
    }

    /**
     * @throws AbortMigration
     */
    public function abortIf(bool \$condition, string \$message = '') : void
    {
        if (\$condition) {
            throw new AbortMigration(\$message ?: 'Unknown Reason');
        }
    }

    /**
     * @throws SkipMigration
     */
    public function skipIf(bool \$condition, string \$message = '') : void
    {
        if (\$condition) {
            throw new SkipMigration(\$message ?: 'Unknown Reason');
        }
    }

    /**
     * @throws MigrationException|DBALException
     */
    public function preUp(Schema \$schema) : void
    {
    }

    /**
     * @throws MigrationException|DBALException
     */
    public function postUp(Schema \$schema) : void
    {
    }

    /**
     * @throws MigrationException|DBALException
     */
    public function preDown(Schema \$schema) : void
    {
    }

    /**
     * @throws MigrationException|DBALException
     */
    public function postDown(Schema \$schema) : void
    {
    }

    /**
     * @throws MigrationException|DBALException
     */
    abstract public function up(Schema \$schema) : void;

    /**
     * @throws MigrationException|DBALException
     */
    abstract public function down(Schema \$schema) : void;

    /**
     * @param mixed[] \$params
     * @param mixed[] \$types
     */
    protected function addSql(
        string \$sql,
        array \$params = [],
        array \$types = []
    ) : void {
        \$this->version->addSql(\$sql, \$params, \$types);
    }

    protected function write(string \$message) : void
    {
        \$this->outputWriter->write(\$message);
    }

    /**
     * @throws IrreversibleMigration
     */
    protected function throwIrreversibleMigrationException(?string \$message = null) : void
    {
        if (\$message === null) {
            \$message = 'This migration is irreversible and cannot be reverted.';
        }

        throw new IrreversibleMigration(\$message);
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/AbstractMigration.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\AbstractMigration.php");
    }
}
