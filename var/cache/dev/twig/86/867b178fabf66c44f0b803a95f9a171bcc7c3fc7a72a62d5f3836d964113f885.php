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

/* @app/vendor/symfony/dependency-injection/composer.json */
class __TwigTemplate_314a107cc88be9008320cf8cb0c23e8079c30f6eabfe74b712c4cc1d130d8b7d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/dependency-injection\",
    \"type\": \"library\",
    \"description\": \"Symfony DependencyInjection Component\",
    \"keywords\": [],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.2.5\",
        \"psr/container\": \"^1.0\",
        \"symfony/service-contracts\": \"^1.1.6|^2\"
    },
    \"require-dev\": {
        \"symfony/yaml\": \"^4.4|^5.0\",
        \"symfony/config\": \"^5.0\",
        \"symfony/expression-language\": \"^4.4|^5.0\"
    },
    \"suggest\": {
        \"symfony/yaml\": \"\",
        \"symfony/config\": \"\",
        \"symfony/finder\": \"For using double-star glob patterns or when GLOB_BRACE portability is required\",
        \"symfony/expression-language\": \"For using expressions in service container configuration\",
        \"symfony/proxy-manager-bridge\": \"Generate service proxies to lazy load them\"
    },
    \"conflict\": {
        \"symfony/config\": \"<5.0\",
        \"symfony/finder\": \"<4.4\",
        \"symfony/proxy-manager-bridge\": \"<4.4\",
        \"symfony/yaml\": \"<4.4\"
    },
    \"provide\": {
        \"psr/container-implementation\": \"1.0\",
        \"symfony/service-implementation\": \"1.0\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\DependencyInjection\\\\\": \"\" },
        \"exclude-from-classmap\": [
            \"/Tests/\"
        ]
    },
    \"minimum-stability\": \"dev\",
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"5.0-dev\"
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/dependency-injection\",
    \"type\": \"library\",
    \"description\": \"Symfony DependencyInjection Component\",
    \"keywords\": [],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.2.5\",
        \"psr/container\": \"^1.0\",
        \"symfony/service-contracts\": \"^1.1.6|^2\"
    },
    \"require-dev\": {
        \"symfony/yaml\": \"^4.4|^5.0\",
        \"symfony/config\": \"^5.0\",
        \"symfony/expression-language\": \"^4.4|^5.0\"
    },
    \"suggest\": {
        \"symfony/yaml\": \"\",
        \"symfony/config\": \"\",
        \"symfony/finder\": \"For using double-star glob patterns or when GLOB_BRACE portability is required\",
        \"symfony/expression-language\": \"For using expressions in service container configuration\",
        \"symfony/proxy-manager-bridge\": \"Generate service proxies to lazy load them\"
    },
    \"conflict\": {
        \"symfony/config\": \"<5.0\",
        \"symfony/finder\": \"<4.4\",
        \"symfony/proxy-manager-bridge\": \"<4.4\",
        \"symfony/yaml\": \"<4.4\"
    },
    \"provide\": {
        \"psr/container-implementation\": \"1.0\",
        \"symfony/service-implementation\": \"1.0\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\DependencyInjection\\\\\": \"\" },
        \"exclude-from-classmap\": [
            \"/Tests/\"
        ]
    },
    \"minimum-stability\": \"dev\",
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"5.0-dev\"
        }
    }
}
", "@app/vendor/symfony/dependency-injection/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\composer.json");
    }
}
