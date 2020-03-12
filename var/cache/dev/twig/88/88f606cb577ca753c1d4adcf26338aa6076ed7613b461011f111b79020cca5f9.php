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

/* @app/vendor/symfony/translation-contracts/README.md */
class __TwigTemplate_e4423e7f5c5416e34cfe07b8bab9964c9dfe6a687c92c7231057c067d62e50c0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/translation-contracts/README.md"));

        // line 1
        echo "Symfony Translation Contracts
=============================

A set of abstractions extracted out of the Symfony components.

Can be used to build on semantics that the Symfony components proved useful - and
that already have battle tested implementations.

See https://github.com/symfony/contracts/blob/master/README.md for more information.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/translation-contracts/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Symfony Translation Contracts
=============================

A set of abstractions extracted out of the Symfony components.

Can be used to build on semantics that the Symfony components proved useful - and
that already have battle tested implementations.

See https://github.com/symfony/contracts/blob/master/README.md for more information.
", "@app/vendor/symfony/translation-contracts/README.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\translation-contracts\\README.md");
    }
}
