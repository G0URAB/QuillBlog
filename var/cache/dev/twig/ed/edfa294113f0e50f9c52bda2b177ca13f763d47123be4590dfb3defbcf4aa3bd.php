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

/* @app/vendor/symfony/orm-pack/composer.json */
class __TwigTemplate_4a9be41edff2154885eb45ef5dd029aa8735870057b900a757454fae6996b8ed extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/orm-pack/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/orm-pack\",
    \"type\": \"symfony-pack\",
    \"license\": \"MIT\",
    \"description\": \"A pack for the Doctrine ORM\",
    \"require\": {
        \"doctrine/orm\": \"*\",
        \"doctrine/doctrine-bundle\": \"*\",
        \"doctrine/doctrine-migrations-bundle\": \"*\"
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/orm-pack/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/orm-pack\",
    \"type\": \"symfony-pack\",
    \"license\": \"MIT\",
    \"description\": \"A pack for the Doctrine ORM\",
    \"require\": {
        \"doctrine/orm\": \"*\",
        \"doctrine/doctrine-bundle\": \"*\",
        \"doctrine/doctrine-migrations-bundle\": \"*\"
    }
}
", "@app/vendor/symfony/orm-pack/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\orm-pack\\composer.json");
    }
}
