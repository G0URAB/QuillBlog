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

/* @app/vendor/psr/cache/composer.json */
class __TwigTemplate_9f8720981e9a996a25e0486be1abd93c8c8fc4fd82708ebf4c1e0266304a3d48 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/psr/cache/composer.json"));

        // line 1
        echo "{
    \"name\": \"psr/cache\",
    \"description\": \"Common interface for caching libraries\",
    \"keywords\": [\"psr\", \"psr-6\", \"cache\"],
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"PHP-FIG\",
            \"homepage\": \"http://www.php-fig.org/\"
        }
    ],
    \"require\": {
        \"php\": \">=5.3.0\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Psr\\\\Cache\\\\\": \"src/\"
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
        return "@app/vendor/psr/cache/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"psr/cache\",
    \"description\": \"Common interface for caching libraries\",
    \"keywords\": [\"psr\", \"psr-6\", \"cache\"],
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"PHP-FIG\",
            \"homepage\": \"http://www.php-fig.org/\"
        }
    ],
    \"require\": {
        \"php\": \">=5.3.0\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Psr\\\\Cache\\\\\": \"src/\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.0.x-dev\"
        }
    }
}
", "@app/vendor/psr/cache/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\psr\\cache\\composer.json");
    }
}
