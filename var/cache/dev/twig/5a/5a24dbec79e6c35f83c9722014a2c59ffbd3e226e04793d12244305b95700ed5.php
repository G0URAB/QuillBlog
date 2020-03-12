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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableManipulator.php */
class __TwigTemplate_835a508e63f74f27a3ac2e7a0edef25e3db357f12eb07df2af114378893ec882 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableManipulator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tracking;

use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;
use Doctrine\\Migrations\\Configuration\\Configuration;

/**
 * The TableManipulator class is responsible for creating and updating the schema of the table used to track
 * the execution state of each migration version.
 *
 * @internal
 */
class TableManipulator
{
    /** @var Configuration */
    private \$configuration;

    /** @var AbstractSchemaManager */
    private \$schemaManager;

    /** @var TableDefinition */
    private \$migrationTable;

    /** @var TableStatus */
    private \$migrationTableStatus;

    /** @var TableUpdater */
    private \$migrationTableUpdater;

    public function __construct(
        Configuration \$configuration,
        AbstractSchemaManager \$schemaManager,
        TableDefinition \$migrationTable,
        TableStatus \$migrationTableStatus,
        TableUpdater \$migrationTableUpdater
    ) {
        \$this->configuration         = \$configuration;
        \$this->schemaManager         = \$schemaManager;
        \$this->migrationTable        = \$migrationTable;
        \$this->migrationTableStatus  = \$migrationTableStatus;
        \$this->migrationTableUpdater = \$migrationTableUpdater;
    }

    public function createMigrationTable() : bool
    {
        \$this->configuration->validate();

        if (\$this->configuration->isDryRun()) {
            return false;
        }

        if (\$this->migrationTableStatus->isCreated()) {
            if (! \$this->migrationTableStatus->isUpToDate()) {
                \$this->migrationTableUpdater->updateMigrationTable();

                \$this->migrationTableStatus->setUpToDate(true);

                return true;
            }

            return false;
        }

        \$table = \$this->migrationTable->getNewDBALTable();

        \$this->schemaManager->createTable(\$table);

        \$this->migrationTableStatus->setCreated(true);

        return true;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableManipulator.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tracking;

use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;
use Doctrine\\Migrations\\Configuration\\Configuration;

/**
 * The TableManipulator class is responsible for creating and updating the schema of the table used to track
 * the execution state of each migration version.
 *
 * @internal
 */
class TableManipulator
{
    /** @var Configuration */
    private \$configuration;

    /** @var AbstractSchemaManager */
    private \$schemaManager;

    /** @var TableDefinition */
    private \$migrationTable;

    /** @var TableStatus */
    private \$migrationTableStatus;

    /** @var TableUpdater */
    private \$migrationTableUpdater;

    public function __construct(
        Configuration \$configuration,
        AbstractSchemaManager \$schemaManager,
        TableDefinition \$migrationTable,
        TableStatus \$migrationTableStatus,
        TableUpdater \$migrationTableUpdater
    ) {
        \$this->configuration         = \$configuration;
        \$this->schemaManager         = \$schemaManager;
        \$this->migrationTable        = \$migrationTable;
        \$this->migrationTableStatus  = \$migrationTableStatus;
        \$this->migrationTableUpdater = \$migrationTableUpdater;
    }

    public function createMigrationTable() : bool
    {
        \$this->configuration->validate();

        if (\$this->configuration->isDryRun()) {
            return false;
        }

        if (\$this->migrationTableStatus->isCreated()) {
            if (! \$this->migrationTableStatus->isUpToDate()) {
                \$this->migrationTableUpdater->updateMigrationTable();

                \$this->migrationTableStatus->setUpToDate(true);

                return true;
            }

            return false;
        }

        \$table = \$this->migrationTable->getNewDBALTable();

        \$this->schemaManager->createTable(\$table);

        \$this->migrationTableStatus->setCreated(true);

        return true;
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tracking/TableManipulator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tracking\\TableManipulator.php");
    }
}
