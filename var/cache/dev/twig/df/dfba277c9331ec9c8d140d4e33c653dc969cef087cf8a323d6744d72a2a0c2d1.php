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

/* @app/vendor/doctrine/migrations/docs/en/reference/custom-integration.rst */
class __TwigTemplate_e7ff30b3eae0b7cb7924b0a2295aa9a4bdda1f2fce0a43b092760c31430c0f8c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/docs/en/reference/custom-integration.rst"));

        // line 1
        echo "Custom Integration
==================

If you don't want to use the ``./vendor/bin/doctrine-migrations`` script that comes with the project,
you can always setup your own custom integration.

In the root of your project, create a file named ``migrations`` and make it executable:

.. code-block:: bash

    \$ chmod +x migrations

Now place the following code in the ``migrations`` file:

.. code-block:: php

    #!/usr/bin/env php
    <?php

    require_once __DIR__.'/vendor/autoload.php';

    use Doctrine\\DBAL\\DriverManager;
    use Doctrine\\DBAL\\Tools\\Console\\Helper\\ConnectionHelper;
    use Doctrine\\Migrations\\Tools\\Console\\Command;
    use Symfony\\Component\\Console\\Application;
    use Symfony\\Component\\Console\\Helper\\HelperSet;
    use Symfony\\Component\\Console\\Helper\\QuestionHelper;

    \$dbParams = [
        'dbname' => 'migrations_test',
        'user' => 'root',
        'password' => '',
        'host' => 'localhost',
        'driver' => 'pdo_mysql',
    ];

    \$connection = DriverManager::getConnection(\$dbParams);

    \$helperSet = new HelperSet();
    \$helperSet->set(new QuestionHelper(), 'question');
    \$helperSet->set(new ConnectionHelper(\$connection), 'db');

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

Now you can execute the migrations console application like this:

.. code-block:: bash

    \$ ./migrations
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/docs/en/reference/custom-integration.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Custom Integration
==================

If you don't want to use the ``./vendor/bin/doctrine-migrations`` script that comes with the project,
you can always setup your own custom integration.

In the root of your project, create a file named ``migrations`` and make it executable:

.. code-block:: bash

    \$ chmod +x migrations

Now place the following code in the ``migrations`` file:

.. code-block:: php

    #!/usr/bin/env php
    <?php

    require_once __DIR__.'/vendor/autoload.php';

    use Doctrine\\DBAL\\DriverManager;
    use Doctrine\\DBAL\\Tools\\Console\\Helper\\ConnectionHelper;
    use Doctrine\\Migrations\\Tools\\Console\\Command;
    use Symfony\\Component\\Console\\Application;
    use Symfony\\Component\\Console\\Helper\\HelperSet;
    use Symfony\\Component\\Console\\Helper\\QuestionHelper;

    \$dbParams = [
        'dbname' => 'migrations_test',
        'user' => 'root',
        'password' => '',
        'host' => 'localhost',
        'driver' => 'pdo_mysql',
    ];

    \$connection = DriverManager::getConnection(\$dbParams);

    \$helperSet = new HelperSet();
    \$helperSet->set(new QuestionHelper(), 'question');
    \$helperSet->set(new ConnectionHelper(\$connection), 'db');

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

Now you can execute the migrations console application like this:

.. code-block:: bash

    \$ ./migrations
", "@app/vendor/doctrine/migrations/docs/en/reference/custom-integration.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\docs\\en\\reference\\custom-integration.rst");
    }
}
