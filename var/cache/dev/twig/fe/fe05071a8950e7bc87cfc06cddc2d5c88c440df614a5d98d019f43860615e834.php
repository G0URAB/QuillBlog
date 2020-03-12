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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/DiffGenerator.php */
class __TwigTemplate_7a42b0e6f3ffe3f34aba06deebe9cb6af370899a914f393a5462598a1e3821d3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/DiffGenerator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Generator;

use Doctrine\\DBAL\\Configuration as DBALConfiguration;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\AbstractAsset;
use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\Generator\\Exception\\NoChangesDetected;
use Doctrine\\Migrations\\Provider\\SchemaProviderInterface;
use function preg_match;
use function strpos;
use function substr;

/**
 * The DiffGenerator class is responsible for comparing two Doctrine\\DBAL\\Schema\\Schema instances and generating a
 * migration class with the SQL statements needed to migrate from one schema to the other.
 *
 * @internal
 */
class DiffGenerator
{
    /** @var DBALConfiguration */
    private \$dbalConfiguration;

    /** @var AbstractSchemaManager */
    private \$schemaManager;

    /** @var SchemaProviderInterface */
    private \$schemaProvider;

    /** @var AbstractPlatform */
    private \$platform;

    /** @var Generator */
    private \$migrationGenerator;

    /** @var SqlGenerator */
    private \$migrationSqlGenerator;

    public function __construct(
        DBALConfiguration \$dbalConfiguration,
        AbstractSchemaManager \$schemaManager,
        SchemaProviderInterface \$schemaProvider,
        AbstractPlatform \$platform,
        Generator \$migrationGenerator,
        SqlGenerator \$migrationSqlGenerator
    ) {
        \$this->dbalConfiguration     = \$dbalConfiguration;
        \$this->schemaManager         = \$schemaManager;
        \$this->schemaProvider        = \$schemaProvider;
        \$this->platform              = \$platform;
        \$this->migrationGenerator    = \$migrationGenerator;
        \$this->migrationSqlGenerator = \$migrationSqlGenerator;
    }

    /**
     * @throws NoChangesDetected
     */
    public function generate(
        string \$versionNumber,
        ?string \$filterExpression,
        bool \$formatted = false,
        int \$lineLength = 120,
        bool \$checkDbPlatform = true
    ) : string {
        if (\$filterExpression !== null) {
            \$this->dbalConfiguration->setSchemaAssetsFilter(
                static function (\$assetName) use (\$filterExpression) {
                    if (\$assetName instanceof AbstractAsset) {
                        \$assetName = \$assetName->getName();
                    }

                    return preg_match(\$filterExpression, \$assetName);
                }
            );
        }

        \$fromSchema = \$this->createFromSchema();

        \$toSchema = \$this->createToSchema();

        \$up = \$this->migrationSqlGenerator->generate(
            \$fromSchema->getMigrateToSql(\$toSchema, \$this->platform),
            \$formatted,
            \$lineLength,
            \$checkDbPlatform
        );

        \$down = \$this->migrationSqlGenerator->generate(
            \$fromSchema->getMigrateFromSql(\$toSchema, \$this->platform),
            \$formatted,
            \$lineLength,
            \$checkDbPlatform
        );

        if (\$up === '' && \$down === '') {
            throw NoChangesDetected::new();
        }

        return \$this->migrationGenerator->generateMigration(
            \$versionNumber,
            \$up,
            \$down
        );
    }

    private function createFromSchema() : Schema
    {
        return \$this->schemaManager->createSchema();
    }

    private function createToSchema() : Schema
    {
        \$toSchema = \$this->schemaProvider->createSchema();

        \$schemaAssetsFilter = \$this->dbalConfiguration->getSchemaAssetsFilter();

        if (\$schemaAssetsFilter !== null) {
            foreach (\$toSchema->getTables() as \$table) {
                \$tableName = \$table->getName();

                if (\$schemaAssetsFilter(\$this->resolveTableName(\$tableName))) {
                    continue;
                }

                \$toSchema->dropTable(\$tableName);
            }
        }

        return \$toSchema;
    }

    /**
     * Resolve a table name from its fully qualified name. The `\$name` argument
     * comes from Doctrine\\DBAL\\Schema\\Table#getName which can sometimes return
     * a namespaced name with the form `{namespace}.{tableName}`. This extracts
     * the table name from that.
     */
    private function resolveTableName(string \$name) : string
    {
        \$pos = strpos(\$name, '.');

        return \$pos === false ? \$name : substr(\$name, \$pos + 1);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/DiffGenerator.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Generator;

use Doctrine\\DBAL\\Configuration as DBALConfiguration;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\AbstractAsset;
use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\Generator\\Exception\\NoChangesDetected;
use Doctrine\\Migrations\\Provider\\SchemaProviderInterface;
use function preg_match;
use function strpos;
use function substr;

/**
 * The DiffGenerator class is responsible for comparing two Doctrine\\DBAL\\Schema\\Schema instances and generating a
 * migration class with the SQL statements needed to migrate from one schema to the other.
 *
 * @internal
 */
class DiffGenerator
{
    /** @var DBALConfiguration */
    private \$dbalConfiguration;

    /** @var AbstractSchemaManager */
    private \$schemaManager;

    /** @var SchemaProviderInterface */
    private \$schemaProvider;

    /** @var AbstractPlatform */
    private \$platform;

    /** @var Generator */
    private \$migrationGenerator;

    /** @var SqlGenerator */
    private \$migrationSqlGenerator;

    public function __construct(
        DBALConfiguration \$dbalConfiguration,
        AbstractSchemaManager \$schemaManager,
        SchemaProviderInterface \$schemaProvider,
        AbstractPlatform \$platform,
        Generator \$migrationGenerator,
        SqlGenerator \$migrationSqlGenerator
    ) {
        \$this->dbalConfiguration     = \$dbalConfiguration;
        \$this->schemaManager         = \$schemaManager;
        \$this->schemaProvider        = \$schemaProvider;
        \$this->platform              = \$platform;
        \$this->migrationGenerator    = \$migrationGenerator;
        \$this->migrationSqlGenerator = \$migrationSqlGenerator;
    }

    /**
     * @throws NoChangesDetected
     */
    public function generate(
        string \$versionNumber,
        ?string \$filterExpression,
        bool \$formatted = false,
        int \$lineLength = 120,
        bool \$checkDbPlatform = true
    ) : string {
        if (\$filterExpression !== null) {
            \$this->dbalConfiguration->setSchemaAssetsFilter(
                static function (\$assetName) use (\$filterExpression) {
                    if (\$assetName instanceof AbstractAsset) {
                        \$assetName = \$assetName->getName();
                    }

                    return preg_match(\$filterExpression, \$assetName);
                }
            );
        }

        \$fromSchema = \$this->createFromSchema();

        \$toSchema = \$this->createToSchema();

        \$up = \$this->migrationSqlGenerator->generate(
            \$fromSchema->getMigrateToSql(\$toSchema, \$this->platform),
            \$formatted,
            \$lineLength,
            \$checkDbPlatform
        );

        \$down = \$this->migrationSqlGenerator->generate(
            \$fromSchema->getMigrateFromSql(\$toSchema, \$this->platform),
            \$formatted,
            \$lineLength,
            \$checkDbPlatform
        );

        if (\$up === '' && \$down === '') {
            throw NoChangesDetected::new();
        }

        return \$this->migrationGenerator->generateMigration(
            \$versionNumber,
            \$up,
            \$down
        );
    }

    private function createFromSchema() : Schema
    {
        return \$this->schemaManager->createSchema();
    }

    private function createToSchema() : Schema
    {
        \$toSchema = \$this->schemaProvider->createSchema();

        \$schemaAssetsFilter = \$this->dbalConfiguration->getSchemaAssetsFilter();

        if (\$schemaAssetsFilter !== null) {
            foreach (\$toSchema->getTables() as \$table) {
                \$tableName = \$table->getName();

                if (\$schemaAssetsFilter(\$this->resolveTableName(\$tableName))) {
                    continue;
                }

                \$toSchema->dropTable(\$tableName);
            }
        }

        return \$toSchema;
    }

    /**
     * Resolve a table name from its fully qualified name. The `\$name` argument
     * comes from Doctrine\\DBAL\\Schema\\Table#getName which can sometimes return
     * a namespaced name with the form `{namespace}.{tableName}`. This extracts
     * the table name from that.
     */
    private function resolveTableName(string \$name) : string
    {
        \$pos = strpos(\$name, '.');

        return \$pos === false ? \$name : substr(\$name, \$pos + 1);
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/DiffGenerator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Generator\\DiffGenerator.php");
    }
}