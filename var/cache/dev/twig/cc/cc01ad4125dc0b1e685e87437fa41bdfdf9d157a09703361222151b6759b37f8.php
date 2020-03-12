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

/* @app/vendor/twig/twig/doc/tags/with.rst */
class __TwigTemplate_12c88b6028694549c905d077469c89c15f61c19df3ac90b24bc708d3cd9e9cb9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/tags/with.rst"));

        // line 1
        echo "``with``
========

Use the ``with`` tag to create a new inner scope. Variables set within this
scope are not visible outside of the scope:

.. code-block:: twig

    ";
        // line 9
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context;
        // line 10
        echo "        ";
        $context["foo"] = 42;
        // line 11
        echo "        ";
        echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        // line 12
        echo "    ";
        $context = $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4;
        // line 13
        echo "    foo is not visible here any longer

Instead of defining variables at the beginning of the scope, you can pass a
hash of variables you want to define in the ``with`` tag; the previous example
is equivalent to the following one:

.. code-block:: twig

    ";
        // line 21
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context;
        $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ["foo" => 42];
        if (!twig_test_iterable($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 21, $this->getSourceContext());
        }
        $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_to_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b));
        // line 22
        echo "        ";
        echo twig_escape_filter($this->env, (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " ";
        // line 23
        echo "    ";
        $context = $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144;
        // line 24
        echo "    foo is not visible here any longer

    ";
        // line 27
        echo "    ";
        $context["vars"] = ["foo" => 42];
        // line 28
        echo "    ";
        $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context;
        $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 28, $this->source); })());
        if (!twig_test_iterable($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 28, $this->getSourceContext());
        }
        $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_to_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4));
        // line 29
        echo "        ...
    ";
        $context = $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002;
        // line 31
        echo "
By default, the inner scope has access to the outer scope context; you can
disable this behavior by appending the ``only`` keyword:

.. code-block:: twig

    ";
        // line 37
        $context["bar"] = "bar";
        // line 38
        echo "    ";
        $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context;
        $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ["foo" => 42];
        if (!twig_test_iterable($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 38, $this->getSourceContext());
        }
        $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_to_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e);
        $context = [];
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e));
        // line 39
        echo "        ";
        // line 40
        echo "        ";
        // line 41
        echo "    ";
        $context = $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/tags/with.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 41,  129 => 40,  127 => 39,  117 => 38,  115 => 37,  107 => 31,  103 => 29,  94 => 28,  91 => 27,  87 => 24,  84 => 23,  80 => 22,  72 => 21,  62 => 13,  59 => 12,  55 => 11,  52 => 10,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``with``
========

Use the ``with`` tag to create a new inner scope. Variables set within this
scope are not visible outside of the scope:

.. code-block:: twig

    {% with %}
        {% set foo = 42 %}
        {{ foo }} {# foo is 42 here #}
    {% endwith %}
    foo is not visible here any longer

Instead of defining variables at the beginning of the scope, you can pass a
hash of variables you want to define in the ``with`` tag; the previous example
is equivalent to the following one:

.. code-block:: twig

    {% with { foo: 42 } %}
        {{ foo }} {# foo is 42 here #}
    {% endwith %}
    foo is not visible here any longer

    {# it works with any expression that resolves to a hash #}
    {% set vars = { foo: 42 } %}
    {% with vars %}
        ...
    {% endwith %}

By default, the inner scope has access to the outer scope context; you can
disable this behavior by appending the ``only`` keyword:

.. code-block:: twig

    {% set bar = 'bar' %}
    {% with { foo: 42 } only %}
        {# only foo is defined #}
        {# bar is not defined #}
    {% endwith %}
", "@app/vendor/twig/twig/doc/tags/with.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\tags\\with.rst");
    }
}
