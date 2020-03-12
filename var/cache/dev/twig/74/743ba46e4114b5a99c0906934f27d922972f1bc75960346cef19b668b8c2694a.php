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

/* @app/vendor/symfony/routing/composer.json */
class __TwigTemplate_8d69f04e1bbc21b8ba95cd1ccdacd55a874801c8c09d5d2595e89c7b75c029df extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/routing/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/routing\",
    \"type\": \"library\",
    \"description\": \"Symfony Routing Component\",
    \"keywords\": [\"routing\", \"router\", \"URL\", \"URI\"],
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
        \"php\": \"^7.2.5\"
    },
    \"require-dev\": {
        \"symfony/config\": \"^5.0\",
        \"symfony/http-foundation\": \"^4.4|^5.0\",
        \"symfony/yaml\": \"^4.4|^5.0\",
        \"symfony/expression-language\": \"^4.4|^5.0\",
        \"symfony/dependency-injection\": \"^4.4|^5.0\",
        \"doctrine/annotations\": \"~1.2\",
        \"psr/log\": \"~1.0\"
    },
    \"conflict\": {
        \"symfony/config\": \"<5.0\",
        \"symfony/dependency-injection\": \"<4.4\",
        \"symfony/yaml\": \"<4.4\"
    },
    \"suggest\": {
        \"symfony/http-foundation\": \"For using a Symfony Request object\",
        \"symfony/config\": \"For using the all-in-one router or any loader\",
        \"symfony/yaml\": \"For using the YAML loader\",
        \"symfony/expression-language\": \"For using expression matching\",
        \"doctrine/annotations\": \"For using the annotation loader\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Routing\\\\\": \"\" },
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
        return "@app/vendor/symfony/routing/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/routing\",
    \"type\": \"library\",
    \"description\": \"Symfony Routing Component\",
    \"keywords\": [\"routing\", \"router\", \"URL\", \"URI\"],
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
        \"php\": \"^7.2.5\"
    },
    \"require-dev\": {
        \"symfony/config\": \"^5.0\",
        \"symfony/http-foundation\": \"^4.4|^5.0\",
        \"symfony/yaml\": \"^4.4|^5.0\",
        \"symfony/expression-language\": \"^4.4|^5.0\",
        \"symfony/dependency-injection\": \"^4.4|^5.0\",
        \"doctrine/annotations\": \"~1.2\",
        \"psr/log\": \"~1.0\"
    },
    \"conflict\": {
        \"symfony/config\": \"<5.0\",
        \"symfony/dependency-injection\": \"<4.4\",
        \"symfony/yaml\": \"<4.4\"
    },
    \"suggest\": {
        \"symfony/http-foundation\": \"For using a Symfony Request object\",
        \"symfony/config\": \"For using the all-in-one router or any loader\",
        \"symfony/yaml\": \"For using the YAML loader\",
        \"symfony/expression-language\": \"For using expression matching\",
        \"doctrine/annotations\": \"For using the annotation loader\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Routing\\\\\": \"\" },
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
", "@app/vendor/symfony/routing/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\routing\\composer.json");
    }
}
