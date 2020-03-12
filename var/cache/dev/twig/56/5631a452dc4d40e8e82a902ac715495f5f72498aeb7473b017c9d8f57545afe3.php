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

/* @app/vendor/symfony/event-dispatcher-contracts/README.md */
class __TwigTemplate_c6cc7695e5e519fd7ac9a3f69e8141477347dba4c91221fa42efdf794d46150c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/event-dispatcher-contracts/README.md"));

        // line 1
        echo "Symfony EventDispatcher Contracts
=================================

A set of abstractions extracted out of the Symfony components.

Can be used to build on semantics that the Symfony components proved useful - and
that already have battle tested implementations.

See https://github.com/symfony/contracts/blob/master/README.md for more information.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/event-dispatcher-contracts/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Symfony EventDispatcher Contracts
=================================

A set of abstractions extracted out of the Symfony components.

Can be used to build on semantics that the Symfony components proved useful - and
that already have battle tested implementations.

See https://github.com/symfony/contracts/blob/master/README.md for more information.
", "@app/vendor/symfony/event-dispatcher-contracts/README.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\event-dispatcher-contracts\\README.md");
    }
}
