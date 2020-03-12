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

/* @app/vendor/doctrine/migrations/docs/en/reference/custom-configuration.rst */
class __TwigTemplate_a2ed97440ffdef778216fb424e2dc327a56d8fbca09ffaea8fb080fc4ff354cc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/docs/en/reference/custom-configuration.rst"));

        // line 1
        echo "Custom Configuration
====================

It is possible to build a custom configuration where you manually build the ``Doctrine\\Migrations\\Configuration\\Configuration``
instance instead of using YAML, XML, etc. In order to do this, you will need to setup a :ref:`Custom Integration <custom-integration>`.

Once you have your custom integration setup, you can modify it to look like the following:

.. code-block:: php

    #!/usr/bin/env php
    <?php

    require_once __DIR__.'/vendor/autoload.php';

    use Doctrine\\DBAL\\DriverManager;
    use Doctrine\\DBAL\\Tools\\Console\\Helper\\ConnectionHelper;
    use Doctrine\\Migrations\\Configuration\\Configuration;
    use Doctrine\\Migrations\\Tools\\Console\\Command;
    use Doctrine\\Migrations\\Tools\\Console\\Helper\\ConfigurationHelper;
    use Symfony\\Component\\Console\\Application;
    use Symfony\\Component\\Console\\Helper\\HelperSet;
    use Symfony\\Component\\Console\\Helper\\QuestionHelper;

    \$dbParams = [
        'dbname' => 'migrations_docs_example',
        'user' => 'root',
        'password' => '',
        'host' => 'localhost',
        'driver' => 'pdo_mysql',
    ];

    \$connection = DriverManager::getConnection(\$dbParams);

    \$configuration = new Configuration(\$connection);
    \$configuration->setName('My Project Migrations');
    \$configuration->setMigrationsNamespace('MyProject\\Migrations');
    \$configuration->setMigrationsTableName('doctrine_migration_versions');
    \$configuration->setMigrationsColumnName('version');
    \$configuration->setMigrationsColumnLength(255);
    \$configuration->setMigrationsExecutedAtColumnName('executed_at');
    \$configuration->setMigrationsDirectory('/data/doctrine/migrations-docs-example/lib/MyProject/Migrations');
    \$configuration->setAllOrNothing(true);
    \$configuration->setCheckDatabasePlatform(false);

    \$helperSet = new HelperSet();
    \$helperSet->set(new QuestionHelper(), 'question');
    \$helperSet->set(new ConnectionHelper(\$connection), 'db');
    \$helperSet->set(new ConfigurationHelper(\$connection, \$configuration));

    \$cli = new Application('Doctrine Migrations');
    \$cli->setCatchExceptions(true);
    \$cli->setHelperSet(\$helperSet);

    \$cli->addCommands(array(
        new Command\\DumpSchemaCommand(),
        new Command\\ExecuteCommand(),
        new Command\\GenerateCommand(),
        new Command\\LatestCommand(),
        new Command\\MigrateCommand(),
        new Command\\RollupCommand(),
        new Command\\StatusCommand(),
        new Command\\VersionCommand()
    ));

    \$cli->run();

:ref:`Next Chapter: Migrations Events <events>`
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/docs/en/reference/custom-configuration.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Custom Configuration
====================

It is possible to build a custom configuration where you manually build the ``Doctrine\\Migrations\\Configuration\\Configuration``
instance instead of using YAML, XML, etc. In order to do this, you will need to setup a :ref:`Custom Integration <custom-integration>`.

Once you have your custom integration setup, you can modify it to look like the following:

.. code-block:: php

    #!/usr/bin/env php
    <?php

    require_once __DIR__.'/vendor/autoload.php';

    use Doctrine\\DBAL\\DriverManager;
    use Doctrine\\DBAL\\Tools\\Console\\Helper\\ConnectionHelper;
    use Doctrine\\Migrations\\Configuration\\Configuration;
    use Doctrine\\Migrations\\Tools\\Console\\Command;
    use Doctrine\\Migrations\\Tools\\Console\\Helper\\ConfigurationHelper;
    use Symfony\\Component\\Console\\Application;
    use Symfony\\Component\\Console\\Helper\\HelperSet;
    use Symfony\\Component\\Console\\Helper\\QuestionHelper;

    \$dbParams = [
        'dbname' => 'migrations_docs_example',
        'user' => 'root',
        'password' => '',
        'host' => 'localhost',
        'driver' => 'pdo_mysql',
    ];

    \$connection = DriverManager::getConnection(\$dbParams);

    \$configuration = new Configuration(\$connection);
    \$configuration->setName('My Project Migrations');
    \$configuration->setMigrationsNamespace('MyProject\\Migrations');
    \$configuration->setMigrationsTableName('doctrine_migration_versions');
    \$configuration->setMigrationsColumnName('version');
    \$configuration->setMigrationsColumnLength(255);
    \$configuration->setMigrationsExecutedAtColumnName('executed_at');
    \$configuration->setMigrationsDirectory('/data/doctrine/migrations-docs-example/lib/MyProject/Migrations');
    \$configuration->setAllOrNothing(true);
    \$configuration->setCheckDatabasePlatform(false);

    \$helperSet = new HelperSet();
    \$helperSet->set(new QuestionHelper(), 'question');
    \$helperSet->set(new ConnectionHelper(\$connection), 'db');
    \$helperSet->set(new ConfigurationHelper(\$connection, \$configuration));

    \$cli = new Application('Doctrine Migrations');
    \$cli->setCatchExceptions(true);
    \$cli->setHelperSet(\$helperSet);

    \$cli->addCommands(array(
        new Command\\DumpSchemaCommand(),
        new Command\\ExecuteCommand(),
        new Command\\GenerateCommand(),
        new Command\\LatestCommand(),
        new Command\\MigrateCommand(),
        new Command\\RollupCommand(),
        new Command\\StatusCommand(),
        new Command\\VersionCommand()
    ));

    \$cli->run();

:ref:`Next Chapter: Migrations Events <events>`
", "@app/vendor/doctrine/migrations/docs/en/reference/custom-configuration.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\docs\\en\\reference\\custom-configuration.rst");
    }
}
