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

/* @app/vendor/twig/twig/doc/tags/apply.rst */
class __TwigTemplate_bf369ba1ec963b1ce831a24e89b01b84020d55bb1c500f472ca4e0f4a664d8e6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/tags/apply.rst"));

        // line 1
        echo "``apply``
=========

The ``apply`` tag allows you to apply Twig filters on a block of template data:

.. code-block:: twig

    ";
        // line 8
        $___internal_52a2a71df30b76ca4d553352e1219d10edbbff1b7a1bd7082b5c542ac7c73a88_ = ('' === $tmp = "        This text becomes uppercase
    ") ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $___internal_52a2a71df30b76ca4d553352e1219d10edbbff1b7a1bd7082b5c542ac7c73a88_), "html", null, true);
        // line 11
        echo "
You can also chain filters and pass arguments to them:

.. code-block:: twig

    ";
        // line 16
        $___internal_25331b77833eef5f8a32a48ef53da62405ecf74f84a6a9effa618e2986fdda71_ = ('' === $tmp = "        <strong>SOME TEXT</strong>
    ") ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $___internal_25331b77833eef5f8a32a48ef53da62405ecf74f84a6a9effa618e2986fdda71_), "html");
        // line 19
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/tags/apply.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  60 => 16,  53 => 11,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``apply``
=========

The ``apply`` tag allows you to apply Twig filters on a block of template data:

.. code-block:: twig

    {% apply upper %}
        This text becomes uppercase
    {% endapply %}

You can also chain filters and pass arguments to them:

.. code-block:: twig

    {% apply lower|escape('html') %}
        <strong>SOME TEXT</strong>
    {% endapply %}

    {# outputs \"&lt;strong&gt;some text&lt;/strong&gt;\" #}
", "@app/vendor/twig/twig/doc/tags/apply.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\tags\\apply.rst");
    }
}
