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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/ConsoleRunner.php */
class __TwigTemplate_0b90ccfe4b6a82c9972fd104b31cd1b8ee709f631f52189fbb3b6a6b969354e3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/ConsoleRunner.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Tools\\Console;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Tools\\Console\\Command\\ImportCommand;
use Doctrine\\DBAL\\Tools\\Console\\Command\\ReservedWordsCommand;
use Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand;
use Doctrine\\DBAL\\Tools\\Console\\Helper\\ConnectionHelper;
use Doctrine\\DBAL\\Version;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Helper\\HelperSet;

/**
 * Handles running the Console Tools inside Symfony Console context.
 */
class ConsoleRunner
{
    /**
     * Create a Symfony Console HelperSet
     *
     * @return HelperSet
     */
    public static function createHelperSet(Connection \$connection)
    {
        return new HelperSet([
            'db' => new ConnectionHelper(\$connection),
        ]);
    }

    /**
     * Runs console with the given helperset.
     *
     * @param Command[] \$commands
     *
     * @return void
     */
    public static function run(HelperSet \$helperSet, \$commands = [])
    {
        \$cli = new Application('Doctrine Command Line Interface', Version::VERSION);

        \$cli->setCatchExceptions(true);
        \$cli->setHelperSet(\$helperSet);

        self::addCommands(\$cli);

        \$cli->addCommands(\$commands);
        \$cli->run();
    }

    /**
     * @return void
     */
    public static function addCommands(Application \$cli)
    {
        \$cli->addCommands([
            new RunSqlCommand(),
            new ImportCommand(),
            new ReservedWordsCommand(),
        ]);
    }

    /**
     * Prints the instructions to create a configuration file
     */
    public static function printCliConfigTemplate()
    {
        echo <<<'HELP'
You are missing a \"cli-config.php\" or \"config/cli-config.php\" file in your
project, which is required to get the Doctrine-DBAL Console working. You can use the
following sample as a template:

<?php
use Doctrine\\DBAL\\Tools\\Console\\ConsoleRunner;

// replace with the mechanism to retrieve DBAL connection in your app
\$connection = getDBALConnection();

// You can append new commands to \$commands array, if needed

return ConsoleRunner::createHelperSet(\$connection);

HELP;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/ConsoleRunner.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Tools\\Console;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Tools\\Console\\Command\\ImportCommand;
use Doctrine\\DBAL\\Tools\\Console\\Command\\ReservedWordsCommand;
use Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand;
use Doctrine\\DBAL\\Tools\\Console\\Helper\\ConnectionHelper;
use Doctrine\\DBAL\\Version;
use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Helper\\HelperSet;

/**
 * Handles running the Console Tools inside Symfony Console context.
 */
class ConsoleRunner
{
    /**
     * Create a Symfony Console HelperSet
     *
     * @return HelperSet
     */
    public static function createHelperSet(Connection \$connection)
    {
        return new HelperSet([
            'db' => new ConnectionHelper(\$connection),
        ]);
    }

    /**
     * Runs console with the given helperset.
     *
     * @param Command[] \$commands
     *
     * @return void
     */
    public static function run(HelperSet \$helperSet, \$commands = [])
    {
        \$cli = new Application('Doctrine Command Line Interface', Version::VERSION);

        \$cli->setCatchExceptions(true);
        \$cli->setHelperSet(\$helperSet);

        self::addCommands(\$cli);

        \$cli->addCommands(\$commands);
        \$cli->run();
    }

    /**
     * @return void
     */
    public static function addCommands(Application \$cli)
    {
        \$cli->addCommands([
            new RunSqlCommand(),
            new ImportCommand(),
            new ReservedWordsCommand(),
        ]);
    }

    /**
     * Prints the instructions to create a configuration file
     */
    public static function printCliConfigTemplate()
    {
        echo <<<'HELP'
You are missing a \"cli-config.php\" or \"config/cli-config.php\" file in your
project, which is required to get the Doctrine-DBAL Console working. You can use the
following sample as a template:

<?php
use Doctrine\\DBAL\\Tools\\Console\\ConsoleRunner;

// replace with the mechanism to retrieve DBAL connection in your app
\$connection = getDBALConnection();

// You can append new commands to \$commands array, if needed

return ConsoleRunner::createHelperSet(\$connection);

HELP;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/ConsoleRunner.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Tools\\Console\\ConsoleRunner.php");
    }
}
