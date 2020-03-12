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

/* @app/vendor/psr/event-dispatcher/composer.json */
class __TwigTemplate_c2e308a10040fc0bc9089a212fbb7a80161fd8ef79244fecda4075ddfe7e9e9a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/psr/event-dispatcher/composer.json"));

        // line 1
        echo "{
    \"name\": \"psr/event-dispatcher\",
    \"description\": \"Standard interfaces for event handling.\",
    \"type\": \"library\",
    \"keywords\": [\"psr\", \"psr-14\", \"events\"],
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"PHP-FIG\",
            \"homepage\": \"http://www.php-fig.org/\"
        }
    ],
    \"require\": {
        \"php\": \">=7.2.0\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Psr\\\\EventDispatcher\\\\\": \"src/\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.0.x-dev\"
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/psr/event-dispatcher/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"psr/event-dispatcher\",
    \"description\": \"Standard interfaces for event handling.\",
    \"type\": \"library\",
    \"keywords\": [\"psr\", \"psr-14\", \"events\"],
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"PHP-FIG\",
            \"homepage\": \"http://www.php-fig.org/\"
        }
    ],
    \"require\": {
        \"php\": \">=7.2.0\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Psr\\\\EventDispatcher\\\\\": \"src/\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.0.x-dev\"
        }
    }
}
", "@app/vendor/psr/event-dispatcher/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\psr\\event-dispatcher\\composer.json");
    }
}
