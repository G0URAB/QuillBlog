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

/* @app/vendor/twig/twig/doc/tags/macro.rst */
class __TwigTemplate_185ca96d56ca98fcda65de20685a4082eb929debe38b21531598835759050fdd extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/tags/macro.rst"));

        // line 1
        echo "``macro``
=========

Macros are comparable with functions in regular programming languages. They
are useful to reuse template fragments to not repeat yourself.

Macros are defined in regular templates.

Imagine having a generic helper template that define how to render HTML forms
via macros (called ``forms.html``):

.. code-block:: twig

    ";
        // line 17
        echo "
    ";
        // line 21
        echo "
Each macro argument can have a default value (here ``text`` is the default value
for ``type`` if not provided in the call).

Macros differ from native PHP functions in a few ways:

* Arguments of a macro are always optional.

* If extra positional arguments are passed to a macro, they end up in the
  special ``varargs`` variable as a list of values.

But as with PHP functions, macros don't have access to the current template
variables.

.. tip::

    You can pass the whole context as an argument by using the special
    ``_context`` variable.

Importing Macros
----------------

There are two ways to import macros. You can import the complete template
containing the macros into a local variable (via the ``import`` tag) or only
import specific macros from the template (via the ``from`` tag).

To import all macros from a template into a local variable, use the ``import``
tag:

.. code-block:: twig

    ";
        // line 52
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.html", "@app/vendor/twig/twig/doc/tags/macro.rst", 52)->unwrap();
        // line 53
        echo "
The above ``import`` call imports the ``forms.html`` file (which can contain
only macros, or a template and some macros), and import the macros as items of
the ``forms`` local variable.

The macros can then be called at will in the *current* template:

.. code-block:: twig

    <p>";
        // line 62
        echo twig_call_macro($macros["forms"], "macro_input", ["username"], 62, $context, $this->getSourceContext());
        echo "</p>
    <p>";
        // line 63
        echo twig_call_macro($macros["forms"], "macro_input", ["password", null, "password"], 63, $context, $this->getSourceContext());
        echo "</p>

Alternatively you can import names from the template into the current namespace
via the ``from`` tag:

.. code-block:: twig

    ";
        // line 70
        $macros["__internal_7ff24d689510c84de3bb5f50e9e76be3beaf5a51fb20829210a569e97a4466c7"] = $this->macros["__internal_7ff24d689510c84de3bb5f50e9e76be3beaf5a51fb20829210a569e97a4466c7"] = $this->loadTemplate("forms.html", "@app/vendor/twig/twig/doc/tags/macro.rst", 70)->unwrap();
        // line 71
        echo "
    <p>";
        // line 72
        echo twig_call_macro($macros["__internal_7ff24d689510c84de3bb5f50e9e76be3beaf5a51fb20829210a569e97a4466c7"], "macro_input", ["password", "", "password"], 72, $context, $this->getSourceContext());
        echo "</p>
    <p>";
        // line 73
        echo twig_call_macro($macros["__internal_7ff24d689510c84de3bb5f50e9e76be3beaf5a51fb20829210a569e97a4466c7"], "macro_textarea", ["comment"], 73, $context, $this->getSourceContext());
        echo "</p>

.. tip::

    When macro usages and definitions are in the same template, you don't need to
    import the macros as they are automatically available under the special
    ``_self`` variable:

    .. code-block:: twig

        <p>";
        // line 83
        echo twig_call_macro($macros["_self"], "macro_input", ["password", "", "password"], 83, $context, $this->getSourceContext());
        echo "</p>

        ";
        // line 88
        echo "
Macros Scoping
--------------

The scoping rules are the same whether you imported macros via ``import`` or
``from``.

Imported macros are always **local** to the current template. It means that
macros are available in all blocks and other macros defined in the current
template, but they are not available in included templates or child templates;
you need to explicitely re-import macros in each template.

When calling ``import`` or ``from`` from a ``block`` tag, the imported macros
are only defined in the current block and they override macros defined at the
template level with the same names.

When calling ``import`` or ``from`` from a ``macro`` tag, the imported macros
are only defined in the current macro and they override macros defined at the
template level with the same names.

Checking if a Macro is defined
------------------------------

You can check if a macro is defined via the ``defined`` test:

.. code-block:: twig

    ";
        // line 115
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("macros.twig", "@app/vendor/twig/twig/doc/tags/macro.rst", 115)->unwrap();
        // line 116
        echo "
    ";
        // line 117
        $macros["__internal_0fa367f92857345a3d6e8f60ba95346d52313b3acdecbe5ea1f4f2cd4b1c42aa"] = $this->macros["__internal_0fa367f92857345a3d6e8f60ba95346d52313b3acdecbe5ea1f4f2cd4b1c42aa"] = $this->loadTemplate("macros.twig", "@app/vendor/twig/twig/doc/tags/macro.rst", 117)->unwrap();
        // line 118
        echo "
    ";
        // line 119
        if (method_exists($macros["macros"], "macro_hello")) {
            // line 120
            echo "OK
    ";
        }
        // line 122
        echo "
    ";
        // line 123
        if (method_exists($macros["__internal_0fa367f92857345a3d6e8f60ba95346d52313b3acdecbe5ea1f4f2cd4b1c42aa"], "macro_hello")) {
            // line 124
            echo "OK
    ";
        }
        // line 126
        echo "
Named Macro End-Tags
--------------------

Twig allows you to put the name of the macro after the end tag for better
readability (the name after the ``endmacro`` word must match the macro name):

.. code-block:: twig

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 135
    public function macro_input(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "input"));

            // line 136
            echo "        ...
    ";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 18
    public function macro_textarea($__name__ = null, $__value__ = null, $__rows__ = 10, $__cols__ = 40, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "rows" => $__rows__,
            "cols" => $__cols__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "textarea"));

            // line 19
            echo "        <textarea name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\" rows=\"";
            echo twig_escape_filter($this->env, (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\" cols=\"";
            echo twig_escape_filter($this->env, (isset($context["cols"]) || array_key_exists("cols", $context) ? $context["cols"] : (function () { throw new RuntimeError('Variable "cols" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 19, $this->source); })()));
            echo "</textarea>
    ";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/tags/macro.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 19,  244 => 18,  231 => 136,  216 => 135,  200 => 126,  196 => 124,  194 => 123,  191 => 122,  187 => 120,  185 => 119,  182 => 118,  180 => 117,  177 => 116,  175 => 115,  146 => 88,  141 => 83,  128 => 73,  124 => 72,  121 => 71,  119 => 70,  109 => 63,  105 => 62,  94 => 53,  92 => 52,  59 => 21,  56 => 17,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``macro``
=========

Macros are comparable with functions in regular programming languages. They
are useful to reuse template fragments to not repeat yourself.

Macros are defined in regular templates.

Imagine having a generic helper template that define how to render HTML forms
via macros (called ``forms.html``):

.. code-block:: twig

    {% macro input(name, value, type = \"text\", size = 20) %}
        <input type=\"{{ type }}\" name=\"{{ name }}\" value=\"{{ value|e }}\" size=\"{{ size }}\" />
    {% endmacro %}

    {% macro textarea(name, value, rows = 10, cols = 40) %}
        <textarea name=\"{{ name }}\" rows=\"{{ rows }}\" cols=\"{{ cols }}\">{{ value|e }}</textarea>
    {% endmacro %}

Each macro argument can have a default value (here ``text`` is the default value
for ``type`` if not provided in the call).

Macros differ from native PHP functions in a few ways:

* Arguments of a macro are always optional.

* If extra positional arguments are passed to a macro, they end up in the
  special ``varargs`` variable as a list of values.

But as with PHP functions, macros don't have access to the current template
variables.

.. tip::

    You can pass the whole context as an argument by using the special
    ``_context`` variable.

Importing Macros
----------------

There are two ways to import macros. You can import the complete template
containing the macros into a local variable (via the ``import`` tag) or only
import specific macros from the template (via the ``from`` tag).

To import all macros from a template into a local variable, use the ``import``
tag:

.. code-block:: twig

    {% import \"forms.html\" as forms %}

The above ``import`` call imports the ``forms.html`` file (which can contain
only macros, or a template and some macros), and import the macros as items of
the ``forms`` local variable.

The macros can then be called at will in the *current* template:

.. code-block:: twig

    <p>{{ forms.input('username') }}</p>
    <p>{{ forms.input('password', null, 'password') }}</p>

Alternatively you can import names from the template into the current namespace
via the ``from`` tag:

.. code-block:: twig

    {% from 'forms.html' import input as input_field, textarea %}

    <p>{{ input_field('password', '', 'password') }}</p>
    <p>{{ textarea('comment') }}</p>

.. tip::

    When macro usages and definitions are in the same template, you don't need to
    import the macros as they are automatically available under the special
    ``_self`` variable:

    .. code-block:: twig

        <p>{{ _self.input('password', '', 'password') }}</p>

        {% macro input(name, value, type = \"text\", size = 20) %}
            <input type=\"{{ type }}\" name=\"{{ name }}\" value=\"{{ value|e }}\" size=\"{{ size }}\" />
        {% endmacro %}

Macros Scoping
--------------

The scoping rules are the same whether you imported macros via ``import`` or
``from``.

Imported macros are always **local** to the current template. It means that
macros are available in all blocks and other macros defined in the current
template, but they are not available in included templates or child templates;
you need to explicitely re-import macros in each template.

When calling ``import`` or ``from`` from a ``block`` tag, the imported macros
are only defined in the current block and they override macros defined at the
template level with the same names.

When calling ``import`` or ``from`` from a ``macro`` tag, the imported macros
are only defined in the current macro and they override macros defined at the
template level with the same names.

Checking if a Macro is defined
------------------------------

You can check if a macro is defined via the ``defined`` test:

.. code-block:: twig

    {% import \"macros.twig\" as macros %}

    {% from \"macros.twig\" import hello %}

    {% if macros.hello is defined -%}
        OK
    {% endif %}

    {% if hello is defined -%}
        OK
    {% endif %}

Named Macro End-Tags
--------------------

Twig allows you to put the name of the macro after the end tag for better
readability (the name after the ``endmacro`` word must match the macro name):

.. code-block:: twig

    {% macro input() %}
        ...
    {% endmacro input %}
", "@app/vendor/twig/twig/doc/tags/macro.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\tags\\macro.rst");
    }
}
