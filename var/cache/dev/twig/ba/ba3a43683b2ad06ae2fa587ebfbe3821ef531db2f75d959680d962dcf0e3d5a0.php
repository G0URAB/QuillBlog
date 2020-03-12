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

/* @app/vendor/twig/twig/doc/functions/random.rst */
class __TwigTemplate_4a8e22c4d8652a138dacc2cd2bcac8cf5e1184925f34f7b42fff41c15d1fa6c5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/functions/random.rst"));

        // line 1
        echo "``random``
==========

The ``random`` function returns a random value depending on the supplied
parameter type:

* a random item from a sequence;
* a random character from a string;
* a random integer between 0 and the integer parameter (inclusive).
* a random integer between the integer parameter (when negative) and 0 (inclusive).
* a random integer between the first integer and the second integer parameter (inclusive).

.. code-block:: twig

    ";
        // line 15
        echo twig_escape_filter($this->env, twig_random($this->env, [0 => "apple", 1 => "orange", 2 => "citrus"]), "html", null, true);
        echo " ";
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, twig_random($this->env, "ABC"), "html", null, true);
        echo "                         ";
        // line 17
        echo "    ";
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "                              ";
        // line 18
        echo "    ";
        echo twig_escape_filter($this->env, twig_random($this->env, 5), "html", null, true);
        echo "                             ";
        // line 19
        echo "    ";
        echo twig_escape_filter($this->env, twig_random($this->env, 50, 100), "html", null, true);
        echo "                       ";
        // line 20
        echo "
Arguments
---------

* ``values``: The values
* ``max``: The max value when values is an integer

.. _`mt_rand`: https://secure.php.net/mt_rand
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/functions/random.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  71 => 19,  67 => 18,  63 => 17,  59 => 16,  56 => 15,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``random``
==========

The ``random`` function returns a random value depending on the supplied
parameter type:

* a random item from a sequence;
* a random character from a string;
* a random integer between 0 and the integer parameter (inclusive).
* a random integer between the integer parameter (when negative) and 0 (inclusive).
* a random integer between the first integer and the second integer parameter (inclusive).

.. code-block:: twig

    {{ random(['apple', 'orange', 'citrus']) }} {# example output: orange #}
    {{ random('ABC') }}                         {# example output: C #}
    {{ random() }}                              {# example output: 15386094 (works as the native PHP mt_rand function) #}
    {{ random(5) }}                             {# example output: 3 #}
    {{ random(50, 100) }}                       {# example output: 63 #}

Arguments
---------

* ``values``: The values
* ``max``: The max value when values is an integer

.. _`mt_rand`: https://secure.php.net/mt_rand
", "@app/vendor/twig/twig/doc/functions/random.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\functions\\random.rst");
    }
}
