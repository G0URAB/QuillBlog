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

/* @app/vendor/symfony/service-contracts/composer.json */
class __TwigTemplate_0bed3a2df0ae77f0b360dfccea74366c9714cac4c39cee5e63a7eb6d8360c948 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/service-contracts/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/service-contracts\",
    \"type\": \"library\",
    \"description\": \"Generic abstractions related to writing services\",
    \"keywords\": [\"abstractions\", \"contracts\", \"decoupling\", \"interfaces\", \"interoperability\", \"standards\"],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Nicolas Grekas\",
            \"email\": \"p@tchwork.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.2.5\",
        \"psr/container\": \"^1.0\"
    },
    \"suggest\": {
        \"symfony/service-implementation\": \"\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Contracts\\\\Service\\\\\": \"\" }
    },
    \"minimum-stability\": \"dev\",
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.0-dev\"
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/service-contracts/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/service-contracts\",
    \"type\": \"library\",
    \"description\": \"Generic abstractions related to writing services\",
    \"keywords\": [\"abstractions\", \"contracts\", \"decoupling\", \"interfaces\", \"interoperability\", \"standards\"],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Nicolas Grekas\",
            \"email\": \"p@tchwork.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.2.5\",
        \"psr/container\": \"^1.0\"
    },
    \"suggest\": {
        \"symfony/service-implementation\": \"\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Contracts\\\\Service\\\\\": \"\" }
    },
    \"minimum-stability\": \"dev\",
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.0-dev\"
        }
    }
}
", "@app/vendor/symfony/service-contracts/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\service-contracts\\composer.json");
    }
}
