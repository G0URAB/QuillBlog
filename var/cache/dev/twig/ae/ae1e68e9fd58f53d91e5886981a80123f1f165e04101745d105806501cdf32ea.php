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

/* @app/vendor/doctrine/doctrine-migrations-bundle/Resources/config/services.xml */
class __TwigTemplate_13034f6480a7fb73dde01061e8766ed1f621b961aedd1f770726b67a0c6b2da8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-migrations-bundle/Resources/config/services.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
           xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"doctrine_migrations.diff_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDiffDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.dump_schema_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDumpSchemaDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.execute_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsExecuteDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.generate_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsGenerateDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.latest_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsLatestDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.migrate_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsMigrateDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.rollup_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsRollupDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.status_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsStatusDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.up_to_date_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsUpToDateDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.version_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsVersionDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
    </services>

</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-migrations-bundle/Resources/config/services.xml";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
           xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"doctrine_migrations.diff_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDiffDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.dump_schema_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDumpSchemaDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.execute_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsExecuteDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.generate_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsGenerateDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.latest_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsLatestDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.migrate_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsMigrateDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.rollup_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsRollupDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.status_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsStatusDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.up_to_date_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsUpToDateDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
        <service id=\"doctrine_migrations.version_command\" class=\"Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsVersionDoctrineCommand\">
            <tag name=\"console.command\" />
        </service>
    </services>

</container>
", "@app/vendor/doctrine/doctrine-migrations-bundle/Resources/config/services.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-migrations-bundle\\Resources\\config\\services.xml");
    }
}
