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

/* @app/vendor/psr/cache/README.md */
class __TwigTemplate_030dd02e0c49e690de4bdb06b40fbcd2583ac0f0cf2f09ce922c308ac1c38284 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/psr/cache/README.md"));

        // line 1
        echo "PSR Cache
=========

This repository holds all interfaces defined by
[PSR-6](http://www.php-fig.org/psr/psr-6/).

Note that this is not a Cache implementation of its own. It is merely an
interface that describes a Cache implementation. See the specification for more 
details.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/psr/cache/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("PSR Cache
=========

This repository holds all interfaces defined by
[PSR-6](http://www.php-fig.org/psr/psr-6/).

Note that this is not a Cache implementation of its own. It is merely an
interface that describes a Cache implementation. See the specification for more 
details.
", "@app/vendor/psr/cache/README.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\psr\\cache\\README.md");
    }
}
