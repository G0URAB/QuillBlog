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

/* @app/vendor/symfony/maker-bundle/src/Resources/doc/index.rst */
class __TwigTemplate_c4c0c1885f5084219fdb3df4b47d6c46fb2d42d0ba47b849d76a07dd9f228f37 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Resources/doc/index.rst"));

        // line 1
        echo "The Symfony MakerBundle
=======================

Symfony Maker helps you create empty commands, controllers, form classes,
tests and more so you can forget about writing boilerplate code. This
bundle is an alternative to `SensioGeneratorBundle`_ for modern Symfony
applications and requires using Symfony 3.4 or newer. This bundle
assumes you're using a standard Symfony 4 directory structure, but many
commands can generate code into any application.

Installation
------------

Run this command to install and enable this bundle in your application:

.. code-block:: terminal

    \$ composer require symfony/maker-bundle --dev

Usage
-----

This bundle provides several commands under the ``make:`` namespace. List them
all executing this command:

.. code-block:: terminal

    \$ php bin/console list make

     make:command            Creates a new console command class
     make:controller         Creates a new controller class
     make:entity             Creates a new Doctrine entity class

     [...]

     make:validator          Creates a new validator and constraint class
     make:voter              Creates a new security voter class

The names of the commands are self-explanatory, but some of them include
optional arguments and options. Check them out with the ``--help`` option:

.. code-block:: terminal

    \$ php bin/console make:controller --help

Configuration
-------------

This bundle doesn't require any configuration. But, you *can* configure
the root namespace that is used to \"guess\" what classes you want to generate:

.. code-block:: yaml

    # config/packages/dev/maker.yaml
    # create this file if you need to configure anything
    maker:
        # tell MakerBundle that all of your classes lives in an
        # Acme namespace, instead of the default App
        # (e.g. Acme\\Entity\\Article, Acme\\Command\\MyCommand, etc)
        root_namespace: 'Acme'

Creating your Own Makers
------------------------

In case your applications need to generate custom boilerplate code, you can
create your own ``make:...`` command reusing the tools provided by this bundle.
To do that, you should create a class that extends
`AbstractMaker`_ in your ``src/Maker/``
directory. And this is really it!

For examples of how to complete your new maker command, see the `core maker commands`_.
Make sure your class is registered as a service and tagged with ``maker.command``.
If you're using the standard Symfony ``services.yaml`` configuration, this
will be done automatically.

Overriding the Generated Code
-----------------------------

Generated code can never be perfect for everyone. The MakerBundle tries to balance
adding \"extension points\" with keeping the library simple so that existing commands
can be improved and new commands can be added.

For that reason, in general, the generated code cannot be modified. In many cases,
adding your *own* maker command is so easy, that we recommend that. However, if there
is some extension point that you'd like, please open an issue so we can discuss!

.. _`SensioGeneratorBundle`: https://github.com/sensiolabs/SensioGeneratorBundle
.. _`AbstractMaker`: https://github.com/symfony/maker-bundle/blob/master/src/Maker/AbstractMaker.php
.. _`core maker commands`: https://github.com/symfony/maker-bundle/tree/master/src/Maker
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Resources/doc/index.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("The Symfony MakerBundle
=======================

Symfony Maker helps you create empty commands, controllers, form classes,
tests and more so you can forget about writing boilerplate code. This
bundle is an alternative to `SensioGeneratorBundle`_ for modern Symfony
applications and requires using Symfony 3.4 or newer. This bundle
assumes you're using a standard Symfony 4 directory structure, but many
commands can generate code into any application.

Installation
------------

Run this command to install and enable this bundle in your application:

.. code-block:: terminal

    \$ composer require symfony/maker-bundle --dev

Usage
-----

This bundle provides several commands under the ``make:`` namespace. List them
all executing this command:

.. code-block:: terminal

    \$ php bin/console list make

     make:command            Creates a new console command class
     make:controller         Creates a new controller class
     make:entity             Creates a new Doctrine entity class

     [...]

     make:validator          Creates a new validator and constraint class
     make:voter              Creates a new security voter class

The names of the commands are self-explanatory, but some of them include
optional arguments and options. Check them out with the ``--help`` option:

.. code-block:: terminal

    \$ php bin/console make:controller --help

Configuration
-------------

This bundle doesn't require any configuration. But, you *can* configure
the root namespace that is used to \"guess\" what classes you want to generate:

.. code-block:: yaml

    # config/packages/dev/maker.yaml
    # create this file if you need to configure anything
    maker:
        # tell MakerBundle that all of your classes lives in an
        # Acme namespace, instead of the default App
        # (e.g. Acme\\Entity\\Article, Acme\\Command\\MyCommand, etc)
        root_namespace: 'Acme'

Creating your Own Makers
------------------------

In case your applications need to generate custom boilerplate code, you can
create your own ``make:...`` command reusing the tools provided by this bundle.
To do that, you should create a class that extends
`AbstractMaker`_ in your ``src/Maker/``
directory. And this is really it!

For examples of how to complete your new maker command, see the `core maker commands`_.
Make sure your class is registered as a service and tagged with ``maker.command``.
If you're using the standard Symfony ``services.yaml`` configuration, this
will be done automatically.

Overriding the Generated Code
-----------------------------

Generated code can never be perfect for everyone. The MakerBundle tries to balance
adding \"extension points\" with keeping the library simple so that existing commands
can be improved and new commands can be added.

For that reason, in general, the generated code cannot be modified. In many cases,
adding your *own* maker command is so easy, that we recommend that. However, if there
is some extension point that you'd like, please open an issue so we can discuss!

.. _`SensioGeneratorBundle`: https://github.com/sensiolabs/SensioGeneratorBundle
.. _`AbstractMaker`: https://github.com/symfony/maker-bundle/blob/master/src/Maker/AbstractMaker.php
.. _`core maker commands`: https://github.com/symfony/maker-bundle/tree/master/src/Maker
", "@app/vendor/symfony/maker-bundle/src/Resources/doc/index.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Resources\\doc\\index.rst");
    }
}
