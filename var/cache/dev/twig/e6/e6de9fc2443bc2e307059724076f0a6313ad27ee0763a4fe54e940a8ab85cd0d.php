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

/* @app/vendor/twig/twig/doc/intro.rst */
class __TwigTemplate_b4d8e9e77283b2f5a6060c2f6c094cd1dd2b2d57aac3a7413519973809a36493 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/intro.rst"));

        // line 1
        echo "Introduction
============

Welcome to the documentation for Twig, the flexible, fast, and secure template
engine for PHP.

Twig is both designer and developer friendly by sticking to PHP's principles and
adding functionality useful for templating environments.

The key-features are...

* *Fast*: Twig compiles templates down to plain optimized PHP code. The
  overhead compared to regular PHP code was reduced to the very minimum.

* *Secure*: Twig has a sandbox mode to evaluate untrusted template code. This
  allows Twig to be used as a template language for applications where users
  may modify the template design.

* *Flexible*: Twig is powered by a flexible lexer and parser. This allows the
  developer to define their own custom tags and filters, and to create their own DSL.

Twig is used by many Open-Source projects like Symfony, Drupal8, eZPublish,
phpBB, Matomo, OroCRM; and many frameworks have support for it as well like
Slim, Yii, Laravel, and Codeigniter — just to name a few.

Prerequisites
-------------

Twig needs at least **PHP 7.2.0** to run.

Installation
------------

The recommended way to install Twig is via Composer:

.. code-block:: bash

    composer require \"twig/twig:^3.0\"

Basic API Usage
---------------

This section gives you a brief introduction to the PHP API for Twig.

.. code-block:: php

    require_once '/path/to/vendor/autoload.php';

    \$loader = new \\Twig\\Loader\\ArrayLoader([
        'index' => 'Hello ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "!',
    ]);
    \$twig = new \\Twig\\Environment(\$loader);

    echo \$twig->render('index', ['name' => 'Fabien']);

Twig uses a loader (``\\Twig\\Loader\\ArrayLoader``) to locate templates, and an
environment (``\\Twig\\Environment``) to store its configuration.

The ``render()`` method loads the template passed as a first argument and
renders it with the variables passed as a second argument.

As templates are generally stored on the filesystem, Twig also comes with a
filesystem loader::

    \$loader = new \\Twig\\Loader\\FilesystemLoader('/path/to/templates');
    \$twig = new \\Twig\\Environment(\$loader, [
        'cache' => '/path/to/compilation_cache',
    ]);

    echo \$twig->render('index.html', ['name' => 'Fabien']);
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/intro.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 50,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Introduction
============

Welcome to the documentation for Twig, the flexible, fast, and secure template
engine for PHP.

Twig is both designer and developer friendly by sticking to PHP's principles and
adding functionality useful for templating environments.

The key-features are...

* *Fast*: Twig compiles templates down to plain optimized PHP code. The
  overhead compared to regular PHP code was reduced to the very minimum.

* *Secure*: Twig has a sandbox mode to evaluate untrusted template code. This
  allows Twig to be used as a template language for applications where users
  may modify the template design.

* *Flexible*: Twig is powered by a flexible lexer and parser. This allows the
  developer to define their own custom tags and filters, and to create their own DSL.

Twig is used by many Open-Source projects like Symfony, Drupal8, eZPublish,
phpBB, Matomo, OroCRM; and many frameworks have support for it as well like
Slim, Yii, Laravel, and Codeigniter — just to name a few.

Prerequisites
-------------

Twig needs at least **PHP 7.2.0** to run.

Installation
------------

The recommended way to install Twig is via Composer:

.. code-block:: bash

    composer require \"twig/twig:^3.0\"

Basic API Usage
---------------

This section gives you a brief introduction to the PHP API for Twig.

.. code-block:: php

    require_once '/path/to/vendor/autoload.php';

    \$loader = new \\Twig\\Loader\\ArrayLoader([
        'index' => 'Hello {{ name }}!',
    ]);
    \$twig = new \\Twig\\Environment(\$loader);

    echo \$twig->render('index', ['name' => 'Fabien']);

Twig uses a loader (``\\Twig\\Loader\\ArrayLoader``) to locate templates, and an
environment (``\\Twig\\Environment``) to store its configuration.

The ``render()`` method loads the template passed as a first argument and
renders it with the variables passed as a second argument.

As templates are generally stored on the filesystem, Twig also comes with a
filesystem loader::

    \$loader = new \\Twig\\Loader\\FilesystemLoader('/path/to/templates');
    \$twig = new \\Twig\\Environment(\$loader, [
        'cache' => '/path/to/compilation_cache',
    ]);

    echo \$twig->render('index.html', ['name' => 'Fabien']);
", "@app/vendor/twig/twig/doc/intro.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\intro.rst");
    }
}
