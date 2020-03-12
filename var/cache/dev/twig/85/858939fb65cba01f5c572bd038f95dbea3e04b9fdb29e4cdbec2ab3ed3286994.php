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

/* @app/vendor/symfony/twig-pack/composer.json */
class __TwigTemplate_f61a65fca3a49ddaf8b147f1ac2d571de1a941c3bb88f3aaf26fd5736436988c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-pack/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/twig-pack\",
    \"type\": \"symfony-pack\",
    \"license\": \"MIT\",
    \"description\": \"A Twig pack for Symfony projects\",
    \"require\": {
        \"php\": \"^7.0\",
        \"symfony/twig-bundle\": \"*\",
        \"twig/twig\": \"^2.12|^3.0\",
        \"twig/extra-bundle\": \"^2.12|^3.0\"
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-pack/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/twig-pack\",
    \"type\": \"symfony-pack\",
    \"license\": \"MIT\",
    \"description\": \"A Twig pack for Symfony projects\",
    \"require\": {
        \"php\": \"^7.0\",
        \"symfony/twig-bundle\": \"*\",
        \"twig/twig\": \"^2.12|^3.0\",
        \"twig/extra-bundle\": \"^2.12|^3.0\"
    }
}
", "@app/vendor/symfony/twig-pack/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-pack\\composer.json");
    }
}
