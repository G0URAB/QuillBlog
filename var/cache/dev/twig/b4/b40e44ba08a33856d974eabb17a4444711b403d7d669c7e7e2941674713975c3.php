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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/SchemaDiffProvider.php */
class __TwigTemplate_81019606a60aec390196ffccaf1a1343c23a8166625596ed701ed9f7b87d1d4c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/SchemaDiffProvider.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Provider;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;
use Doctrine\\DBAL\\Schema\\Schema;

/**
 * The SchemaDiffProvider class is responsible for providing a Doctrine\\DBAL\\Schema\\Schema instance that
 * represents the current state of your database. A clone of this Schema instance is passed to each of your migrations
 * so that you can manipulate the Schema object. Your manipulated Schema object is then compared to the original Schema
 * object to produce the SQL statements that need to be executed.
 *
 * @internal
 *
 * @see Doctrine\\Migrations\\Version\\Executor
 */
class SchemaDiffProvider implements SchemaDiffProviderInterface
{
    /** @var AbstractPlatform */
    private \$platform;

    /** @var AbstractSchemaManager */
    private \$schemaManager;

    public function __construct(AbstractSchemaManager \$schemaManager, AbstractPlatform \$platform)
    {
        \$this->schemaManager = \$schemaManager;
        \$this->platform      = \$platform;
    }

    public function createFromSchema() : Schema
    {
        return \$this->schemaManager->createSchema();
    }

    public function createToSchema(Schema \$fromSchema) : Schema
    {
        return clone \$fromSchema;
    }

    /** @return string[] */
    public function getSqlDiffToMigrate(Schema \$fromSchema, Schema \$toSchema) : array
    {
        return \$fromSchema->getMigrateToSql(\$toSchema, \$this->platform);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/SchemaDiffProvider.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Provider;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;
use Doctrine\\DBAL\\Schema\\Schema;

/**
 * The SchemaDiffProvider class is responsible for providing a Doctrine\\DBAL\\Schema\\Schema instance that
 * represents the current state of your database. A clone of this Schema instance is passed to each of your migrations
 * so that you can manipulate the Schema object. Your manipulated Schema object is then compared to the original Schema
 * object to produce the SQL statements that need to be executed.
 *
 * @internal
 *
 * @see Doctrine\\Migrations\\Version\\Executor
 */
class SchemaDiffProvider implements SchemaDiffProviderInterface
{
    /** @var AbstractPlatform */
    private \$platform;

    /** @var AbstractSchemaManager */
    private \$schemaManager;

    public function __construct(AbstractSchemaManager \$schemaManager, AbstractPlatform \$platform)
    {
        \$this->schemaManager = \$schemaManager;
        \$this->platform      = \$platform;
    }

    public function createFromSchema() : Schema
    {
        return \$this->schemaManager->createSchema();
    }

    public function createToSchema(Schema \$fromSchema) : Schema
    {
        return clone \$fromSchema;
    }

    /** @return string[] */
    public function getSqlDiffToMigrate(Schema \$fromSchema, Schema \$toSchema) : array
    {
        return \$fromSchema->getMigrateToSql(\$toSchema, \$this->platform);
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/SchemaDiffProvider.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Provider\\SchemaDiffProvider.php");
    }
}
