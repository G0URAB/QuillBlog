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

/* @app/vendor/doctrine/migrations/docs/en/reference/migration-classes.rst */
class __TwigTemplate_fa4daf5d44ddcffb8c87f38c361edfb1614a06ff1be01af3b198c8d6c17629ee extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/docs/en/reference/migration-classes.rst"));

        // line 1
        echo "Migration Classes
=================

Migration classes must extend ``Doctrine\\Migrations\\AbstractMigration`` and at a minimum they must implement the ``up``
and ``down`` methods. You can easily generate a blank migration to modify with the following command:

.. code-block:: sh

    \$ ./vendor/bin/doctrine-migrations generate
    Generated new migration class to \"/data/doctrine/migrations-docs-example/lib/MyProject/Migrations/Version20180601193057.php\"

    To run just this migration for testing purposes, you can use migrations:execute --up 20180601193057

    To revert the migration you can use migrations:execute --down 20180601193057

The above command will generate a PHP class with the path to it visible like above. Here is what the blank
migration looks like:

.. code-block:: php

    <?php

    declare(strict_types=1);

    namespace MyProject\\Migrations;

    use Doctrine\\DBAL\\Schema\\Schema;
    use Doctrine\\Migrations\\AbstractMigration;

    /**
     * Auto-generated Migration: Please modify to your needs!
     */
    final class Version20180601193057 extends AbstractMigration
    {
        public function getDescription() : string
        {
            return '';
        }

        public function up(Schema \$schema) : void
        {
            // this up() migration is auto-generated, please modify it to your needs

        }

        public function down(Schema \$schema) : void
        {
            // this down() migration is auto-generated, please modify it to your needs

        }
    }

Methods to Implement
--------------------

The ``AbstractMigration`` class provides a few methods you can override to define additional behavior for the migration.

isTransactional
~~~~~~~~~~~~~~~

Override this method if you want to disable transactions in a migration. It defaults to true.

.. code-block:: php

    public function isTransactional() : bool
    {
        return false;
    }

getDescription
~~~~~~~~~~~~~~

Override this method if you want to provide a description for your migration. The value returned here
will get outputted when you run the ``./vendor/bin/doctrine-migrations status --show-versions`` command.

.. code-block:: php

    public function getDescription() : string
    {
        return 'The description of my awesome migration!';
    }

preUp
~~~~~

This method gets called before the ``up()`` is called.

.. code-block:: php

    public function preUp(Schema \$schema) : void
    {
    }

postUp
~~~~~

This method gets called after the ``up()`` is called.

.. code-block:: php

    public function postUp(Schema \$schema) : void
    {
    }

preDown
~~~~~~~

This method gets called before the ``down()`` is called.

.. code-block:: php

    public function preDown(Schema \$schema) : void
    {
    }

postDown
~~~~~~~~

This method gets called after the ``down()`` is called.

.. code-block:: php

    public function postDown(Schema \$schema) : void
    {
    }

Methods to Call
---------------

The ``AbstractMigration`` class provides a few methods you can call in your migrations to perform various functions.

warnIf
~~~~~~

Warn with a message if some condition is met.

.. code-block:: php

    public function up(Schema \$schema) : void
    {
        \$this->warnIf(true, 'Something might be going wrong');

        // ...
    }

abortIf
~~~~~~~

Abort the migration if some condition is met:

.. code-block:: php

    public function up(Schema \$schema) : void
    {
        \$this->abortIf(true, 'Something went wrong. Aborting.');

        // ...
    }

skipIf
~~~~~~

Skip the migration if some condition is met.

.. code-block:: php

    public function up(Schema \$schema) : void
    {
        \$this->skipIf(true, 'Skipping this migration.');

        // ...
    }

addSql
~~~~~~

You can use the ``addSql`` method within the ``up`` and ``down`` methods. Internally the ``addSql`` calls are passed
to the executeQuery method in the DBAL. This means that you can use the power of prepared statements easily and that
you don't need to copy paste the same query with different parameters. You can just pass those differents parameters
to the addSql method as parameters.

.. code-block:: php

    public function up(Schema \$schema) : void
    {
        \$users = [
            ['name' => 'mike', 'id' => 1],
            ['name' => 'jwage', 'id' => 2],
            ['name' => 'ocramius', 'id' => 3],
        ];

        foreach (\$users as \$user) {
            \$this->addSql('UPDATE user SET happy = true WHERE name = :name AND id = :id', \$user);
        }
    }

write
~~~~~

Write some debug information to the console.

.. code-block:: php

    public function up(Schema \$schema) : void
    {
        \$this->write('Doing some cool migration!');

        // ...
    }

throwIrreversibleMigrationException
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

If a migration cannot be reversed, you can use this exception in the ``down`` method to indicate such.
The ``throwIrreversibleMigrationException`` method accepts an optional message to output.

.. code-block:: php

    public function down(Schema \$schema) : void
    {
        \$this->throwIrreversibleMigrationException();

        // ...
    }

:ref:`Next Chapter: Managing Migrations <managing-migrations>`
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/docs/en/reference/migration-classes.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Migration Classes
=================

Migration classes must extend ``Doctrine\\Migrations\\AbstractMigration`` and at a minimum they must implement the ``up``
and ``down`` methods. You can easily generate a blank migration to modify with the following command:

.. code-block:: sh

    \$ ./vendor/bin/doctrine-migrations generate
    Generated new migration class to \"/data/doctrine/migrations-docs-example/lib/MyProject/Migrations/Version20180601193057.php\"

    To run just this migration for testing purposes, you can use migrations:execute --up 20180601193057

    To revert the migration you can use migrations:execute --down 20180601193057

The above command will generate a PHP class with the path to it visible like above. Here is what the blank
migration looks like:

.. code-block:: php

    <?php

    declare(strict_types=1);

    namespace MyProject\\Migrations;

    use Doctrine\\DBAL\\Schema\\Schema;
    use Doctrine\\Migrations\\AbstractMigration;

    /**
     * Auto-generated Migration: Please modify to your needs!
     */
    final class Version20180601193057 extends AbstractMigration
    {
        public function getDescription() : string
        {
            return '';
        }

        public function up(Schema \$schema) : void
        {
            // this up() migration is auto-generated, please modify it to your needs

        }

        public function down(Schema \$schema) : void
        {
            // this down() migration is auto-generated, please modify it to your needs

        }
    }

Methods to Implement
--------------------

The ``AbstractMigration`` class provides a few methods you can override to define additional behavior for the migration.

isTransactional
~~~~~~~~~~~~~~~

Override this method if you want to disable transactions in a migration. It defaults to true.

.. code-block:: php

    public function isTransactional() : bool
    {
        return false;
    }

getDescription
~~~~~~~~~~~~~~

Override this method if you want to provide a description for your migration. The value returned here
will get outputted when you run the ``./vendor/bin/doctrine-migrations status --show-versions`` command.

.. code-block:: php

    public function getDescription() : string
    {
        return 'The description of my awesome migration!';
    }

preUp
~~~~~

This method gets called before the ``up()`` is called.

.. code-block:: php

    public function preUp(Schema \$schema) : void
    {
    }

postUp
~~~~~

This method gets called after the ``up()`` is called.

.. code-block:: php

    public function postUp(Schema \$schema) : void
    {
    }

preDown
~~~~~~~

This method gets called before the ``down()`` is called.

.. code-block:: php

    public function preDown(Schema \$schema) : void
    {
    }

postDown
~~~~~~~~

This method gets called after the ``down()`` is called.

.. code-block:: php

    public function postDown(Schema \$schema) : void
    {
    }

Methods to Call
---------------

The ``AbstractMigration`` class provides a few methods you can call in your migrations to perform various functions.

warnIf
~~~~~~

Warn with a message if some condition is met.

.. code-block:: php

    public function up(Schema \$schema) : void
    {
        \$this->warnIf(true, 'Something might be going wrong');

        // ...
    }

abortIf
~~~~~~~

Abort the migration if some condition is met:

.. code-block:: php

    public function up(Schema \$schema) : void
    {
        \$this->abortIf(true, 'Something went wrong. Aborting.');

        // ...
    }

skipIf
~~~~~~

Skip the migration if some condition is met.

.. code-block:: php

    public function up(Schema \$schema) : void
    {
        \$this->skipIf(true, 'Skipping this migration.');

        // ...
    }

addSql
~~~~~~

You can use the ``addSql`` method within the ``up`` and ``down`` methods. Internally the ``addSql`` calls are passed
to the executeQuery method in the DBAL. This means that you can use the power of prepared statements easily and that
you don't need to copy paste the same query with different parameters. You can just pass those differents parameters
to the addSql method as parameters.

.. code-block:: php

    public function up(Schema \$schema) : void
    {
        \$users = [
            ['name' => 'mike', 'id' => 1],
            ['name' => 'jwage', 'id' => 2],
            ['name' => 'ocramius', 'id' => 3],
        ];

        foreach (\$users as \$user) {
            \$this->addSql('UPDATE user SET happy = true WHERE name = :name AND id = :id', \$user);
        }
    }

write
~~~~~

Write some debug information to the console.

.. code-block:: php

    public function up(Schema \$schema) : void
    {
        \$this->write('Doing some cool migration!');

        // ...
    }

throwIrreversibleMigrationException
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

If a migration cannot be reversed, you can use this exception in the ``down`` method to indicate such.
The ``throwIrreversibleMigrationException`` method accepts an optional message to output.

.. code-block:: php

    public function down(Schema \$schema) : void
    {
        \$this->throwIrreversibleMigrationException();

        // ...
    }

:ref:`Next Chapter: Managing Migrations <managing-migrations>`
", "@app/vendor/doctrine/migrations/docs/en/reference/migration-classes.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\docs\\en\\reference\\migration-classes.rst");
    }
}
