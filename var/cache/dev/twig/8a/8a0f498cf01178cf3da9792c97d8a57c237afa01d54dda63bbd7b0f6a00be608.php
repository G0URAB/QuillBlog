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

/* @app/vendor/twig/twig/doc/functions/dump.rst */
class __TwigTemplate_a0a549f7b4af1b654b78d9badbd8db403ee537b92f0bd15902692576b8cab21e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/functions/dump.rst"));

        // line 1
        echo "``dump``
========

The ``dump`` function dumps information about a template variable. This is
mostly useful to debug a template that does not behave as expected by
introspecting its variables:

.. code-block:: twig

    ";
        // line 10
        echo twig_var_dump($this->env, $context, ...[0 => (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })())]);
        echo "

.. note::

    The ``dump`` function is not available by default. You must add the
    ``\\Twig\\Extension\\DebugExtension`` extension explicitly when creating your Twig
    environment::

        \$twig = new \\Twig\\Environment(\$loader, [
            'debug' => true,
            // ...
        ]);
        \$twig->addExtension(new \\Twig\\Extension\\DebugExtension());

    Even when enabled, the ``dump`` function won't display anything if the
    ``debug`` option on the environment is not enabled (to avoid leaking debug
    information on a production server).

In an HTML context, wrap the output with a ``pre`` tag to make it easier to
read:

.. code-block:: twig

    <pre>
        ";
        // line 34
        echo twig_var_dump($this->env, $context, ...[0 => (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })())]);
        echo "
    </pre>

.. tip::

    Using a ``pre`` tag is not needed when `XDebug`_ is enabled and
    ``html_errors`` is ``on``; as a bonus, the output is also nicer with
    XDebug enabled.

You can debug several variables by passing them as additional arguments:

.. code-block:: twig

    ";
        // line 47
        echo twig_var_dump($this->env, $context, ...[0 => (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), 1 => (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 47, $this->source); })())]);
        echo "

If you don't pass any value, all variables from the current context are
dumped:

.. code-block:: twig

    ";
        // line 54
        echo twig_var_dump($this->env, $context);
        echo "

.. note::

    Internally, Twig uses the PHP `var_dump`_ function.

Arguments
---------

* ``context``: The context to dump

.. _`XDebug`:   https://xdebug.org/docs/display
.. _`var_dump`: https://secure.php.net/var_dump
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/functions/dump.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 54,  94 => 47,  78 => 34,  51 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``dump``
========

The ``dump`` function dumps information about a template variable. This is
mostly useful to debug a template that does not behave as expected by
introspecting its variables:

.. code-block:: twig

    {{ dump(user) }}

.. note::

    The ``dump`` function is not available by default. You must add the
    ``\\Twig\\Extension\\DebugExtension`` extension explicitly when creating your Twig
    environment::

        \$twig = new \\Twig\\Environment(\$loader, [
            'debug' => true,
            // ...
        ]);
        \$twig->addExtension(new \\Twig\\Extension\\DebugExtension());

    Even when enabled, the ``dump`` function won't display anything if the
    ``debug`` option on the environment is not enabled (to avoid leaking debug
    information on a production server).

In an HTML context, wrap the output with a ``pre`` tag to make it easier to
read:

.. code-block:: twig

    <pre>
        {{ dump(user) }}
    </pre>

.. tip::

    Using a ``pre`` tag is not needed when `XDebug`_ is enabled and
    ``html_errors`` is ``on``; as a bonus, the output is also nicer with
    XDebug enabled.

You can debug several variables by passing them as additional arguments:

.. code-block:: twig

    {{ dump(user, categories) }}

If you don't pass any value, all variables from the current context are
dumped:

.. code-block:: twig

    {{ dump() }}

.. note::

    Internally, Twig uses the PHP `var_dump`_ function.

Arguments
---------

* ``context``: The context to dump

.. _`XDebug`:   https://xdebug.org/docs/display
.. _`var_dump`: https://secure.php.net/var_dump
", "@app/vendor/twig/twig/doc/functions/dump.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\functions\\dump.rst");
    }
}
