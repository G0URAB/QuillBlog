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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/ConsoleRunner.php */
class __TwigTemplate_ba577d78e292f22a797c372e8504a0ef67870183ed95a8b34e6594ea670d5f19 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/ConsoleRunner.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console;

use Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\DiffCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\DumpSchemaCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\ExecuteCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\GenerateCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\LatestCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\MigrateCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\RollupCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\StatusCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\UpToDateCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\VersionCommand;
use PackageVersions\\Versions;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Helper\\HelperSet;

/**
 * The ConsoleRunner class is used to create the Symfony Console application for the Doctrine Migrations console.
 *
 * @internal
 *
 * @see bin/doctrine-migrations.php
 */
class ConsoleRunner
{
    /** @param AbstractCommand[] \$commands */
    public static function run(HelperSet \$helperSet, array \$commands = []) : void
    {
        \$cli = static::createApplication(\$helperSet, \$commands);
        \$cli->run();
    }

    /** @param AbstractCommand[] \$commands */
    public static function createApplication(HelperSet \$helperSet, array \$commands = []) : Application
    {
        \$cli = new Application('Doctrine Migrations', Versions::getVersion('doctrine/migrations'));
        \$cli->setCatchExceptions(true);
        \$cli->setHelperSet(\$helperSet);
        self::addCommands(\$cli);
        \$cli->addCommands(\$commands);

        return \$cli;
    }

    public static function addCommands(Application \$cli) : void
    {
        \$cli->addCommands([
            new DumpSchemaCommand(),
            new ExecuteCommand(),
            new GenerateCommand(),
            new LatestCommand(),
            new MigrateCommand(),
            new RollupCommand(),
            new StatusCommand(),
            new VersionCommand(),
            new UpToDateCommand(),
        ]);

        if (! \$cli->getHelperSet()->has('em')) {
            return;
        }

        \$cli->add(new DiffCommand());
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/ConsoleRunner.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console;

use Doctrine\\Migrations\\Tools\\Console\\Command\\AbstractCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\DiffCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\DumpSchemaCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\ExecuteCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\GenerateCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\LatestCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\MigrateCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\RollupCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\StatusCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\UpToDateCommand;
use Doctrine\\Migrations\\Tools\\Console\\Command\\VersionCommand;
use PackageVersions\\Versions;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Helper\\HelperSet;

/**
 * The ConsoleRunner class is used to create the Symfony Console application for the Doctrine Migrations console.
 *
 * @internal
 *
 * @see bin/doctrine-migrations.php
 */
class ConsoleRunner
{
    /** @param AbstractCommand[] \$commands */
    public static function run(HelperSet \$helperSet, array \$commands = []) : void
    {
        \$cli = static::createApplication(\$helperSet, \$commands);
        \$cli->run();
    }

    /** @param AbstractCommand[] \$commands */
    public static function createApplication(HelperSet \$helperSet, array \$commands = []) : Application
    {
        \$cli = new Application('Doctrine Migrations', Versions::getVersion('doctrine/migrations'));
        \$cli->setCatchExceptions(true);
        \$cli->setHelperSet(\$helperSet);
        self::addCommands(\$cli);
        \$cli->addCommands(\$commands);

        return \$cli;
    }

    public static function addCommands(Application \$cli) : void
    {
        \$cli->addCommands([
            new DumpSchemaCommand(),
            new ExecuteCommand(),
            new GenerateCommand(),
            new LatestCommand(),
            new MigrateCommand(),
            new RollupCommand(),
            new StatusCommand(),
            new VersionCommand(),
            new UpToDateCommand(),
        ]);

        if (! \$cli->getHelperSet()->has('em')) {
            return;
        }

        \$cli->add(new DiffCommand());
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/ConsoleRunner.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\ConsoleRunner.php");
    }
}
