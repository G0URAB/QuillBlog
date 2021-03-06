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

/* @app/vendor/symfony/event-dispatcher-contracts/composer.json */
class __TwigTemplate_ca5321acd54f1798ac6e88c7ee50e83f5484acb3238123a37a7d92546fa878a7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/event-dispatcher-contracts/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/event-dispatcher-contracts\",
    \"type\": \"library\",
    \"description\": \"Generic abstractions related to dispatching event\",
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
        \"psr/event-dispatcher\": \"^1\"
    },
    \"suggest\": {
        \"symfony/event-dispatcher-implementation\": \"\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Contracts\\\\EventDispatcher\\\\\": \"\" }
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
        return "@app/vendor/symfony/event-dispatcher-contracts/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/event-dispatcher-contracts\",
    \"type\": \"library\",
    \"description\": \"Generic abstractions related to dispatching event\",
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
        \"psr/event-dispatcher\": \"^1\"
    },
    \"suggest\": {
        \"symfony/event-dispatcher-implementation\": \"\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Contracts\\\\EventDispatcher\\\\\": \"\" }
    },
    \"minimum-stability\": \"dev\",
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.0-dev\"
        }
    }
}
", "@app/vendor/symfony/event-dispatcher-contracts/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\event-dispatcher-contracts\\composer.json");
    }
}
