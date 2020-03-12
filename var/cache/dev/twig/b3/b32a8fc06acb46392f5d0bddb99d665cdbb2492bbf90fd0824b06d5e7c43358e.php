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

/* @app/vendor/doctrine/migrations/docs/en/reference/introduction.rst */
class __TwigTemplate_2cb043cc67eb534464c9bc9e8a437d76adf705b47eb038ef834728965fb8068d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/docs/en/reference/introduction.rst"));

        // line 1
        echo "Introduction
============

The Doctrine Migrations project offers additional functionality on top of the
DBAL_ and ORM_ for versioning your database schema. It makes it easy and safe
to deploy changes to it in a way that can be reviewed and tested before being
deployed to production.

Installation
------------

You can use the Doctrine Migrations project by installing it with Composer_ or by downloading
the latest PHAR from the releases_ page on GitHub.

For this documentation exercise we will assume you are starting a new project so create a new folder to work in:

.. code-block:: sh

    \$ mkdir /data/doctrine/migrations-docs-example
    \$ cd /data/doctrine/migrations-docs-example

Composer
~~~~~~~~

Now to install with Composer it is as simple as running the following command in your project.

.. code-block:: sh

    composer require \"doctrine/migrations:^2.0\"

Now you will have a file in ``vendor/bin`` available to run the migrations console application:

.. code-block:: sh

    ./vendor/bin/doctrine-migrations

PHAR
~~~~

To install by downloading the PHAR, you just need to download the latest PHAR file from the
releases_ page on GitHub.

Here is an example using the ``2.0.0`` release:

.. code-block:: sh

    wget https://github.com/doctrine/migrations/releases/download/v2.0.0/doctrine-migrations.phar

Now you can execute the PHAR like this:

.. code-block:: sh

    php doctrine-migrations.phar

:ref:`Next Chapter: Configuration <configuration>`

.. _Composer: https://getcomposer.org/
.. _DBAL: https://www.doctrine-project.org/projects/dbal.html
.. _ORM: https://www.doctrine-project.org/projects/orm.html
.. _releases: https://github.com/doctrine/migrations/releases
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/docs/en/reference/introduction.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Introduction
============

The Doctrine Migrations project offers additional functionality on top of the
DBAL_ and ORM_ for versioning your database schema. It makes it easy and safe
to deploy changes to it in a way that can be reviewed and tested before being
deployed to production.

Installation
------------

You can use the Doctrine Migrations project by installing it with Composer_ or by downloading
the latest PHAR from the releases_ page on GitHub.

For this documentation exercise we will assume you are starting a new project so create a new folder to work in:

.. code-block:: sh

    \$ mkdir /data/doctrine/migrations-docs-example
    \$ cd /data/doctrine/migrations-docs-example

Composer
~~~~~~~~

Now to install with Composer it is as simple as running the following command in your project.

.. code-block:: sh

    composer require \"doctrine/migrations:^2.0\"

Now you will have a file in ``vendor/bin`` available to run the migrations console application:

.. code-block:: sh

    ./vendor/bin/doctrine-migrations

PHAR
~~~~

To install by downloading the PHAR, you just need to download the latest PHAR file from the
releases_ page on GitHub.

Here is an example using the ``2.0.0`` release:

.. code-block:: sh

    wget https://github.com/doctrine/migrations/releases/download/v2.0.0/doctrine-migrations.phar

Now you can execute the PHAR like this:

.. code-block:: sh

    php doctrine-migrations.phar

:ref:`Next Chapter: Configuration <configuration>`

.. _Composer: https://getcomposer.org/
.. _DBAL: https://www.doctrine-project.org/projects/dbal.html
.. _ORM: https://www.doctrine-project.org/projects/orm.html
.. _releases: https://github.com/doctrine/migrations/releases
", "@app/vendor/doctrine/migrations/docs/en/reference/introduction.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\docs\\en\\reference\\introduction.rst");
    }
}
