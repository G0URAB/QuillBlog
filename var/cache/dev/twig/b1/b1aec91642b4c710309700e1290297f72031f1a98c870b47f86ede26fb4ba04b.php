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

/* @app/vendor/psr/event-dispatcher/README.md */
class __TwigTemplate_effb13bc9f8ff7c805b127bf3350521b16bcdea72516006f04fe29bda06dee39 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/psr/event-dispatcher/README.md"));

        // line 1
        echo "PSR Event Dispatcher
====================

This repository holds the interfaces related to [PSR-14](http://www.php-fig.org/psr/psr-14/).

Note that this is not an Event Dispatcher implementation of its own. It is merely interfaces that describe the components of an Event Dispatcher.  See the specification for more details.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/psr/event-dispatcher/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("PSR Event Dispatcher
====================

This repository holds the interfaces related to [PSR-14](http://www.php-fig.org/psr/psr-14/).

Note that this is not an Event Dispatcher implementation of its own. It is merely interfaces that describe the components of an Event Dispatcher.  See the specification for more details.
", "@app/vendor/psr/event-dispatcher/README.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\psr\\event-dispatcher\\README.md");
    }
}
