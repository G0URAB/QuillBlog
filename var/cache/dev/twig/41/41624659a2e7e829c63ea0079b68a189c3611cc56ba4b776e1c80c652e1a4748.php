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

/* @app/vendor/symfony/twig-bundle/composer.json */
class __TwigTemplate_586646047ae4962c07b2bf7123803225528733757069745eb8a992ae45721112 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bundle/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/twig-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony TwigBundle\",
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
        \"symfony/config\": \"^4.4|^5.0\",
        \"symfony/twig-bridge\": \"^5.0\",
        \"symfony/http-foundation\": \"^4.4|^5.0\",
        \"symfony/http-kernel\": \"^5.0\",
        \"symfony/polyfill-ctype\": \"~1.8\",
        \"twig/twig\": \"^2.10|^3.0\"
    },
    \"require-dev\": {
        \"symfony/asset\": \"^4.4|^5.0\",
        \"symfony/stopwatch\": \"^4.4|^5.0\",
        \"symfony/dependency-injection\": \"^4.4|^5.0\",
        \"symfony/expression-language\": \"^4.4|^5.0\",
        \"symfony/finder\": \"^4.4|^5.0\",
        \"symfony/form\": \"^4.4|^5.0\",
        \"symfony/routing\": \"^4.4|^5.0\",
        \"symfony/translation\": \"^5.0\",
        \"symfony/yaml\": \"^4.4|^5.0\",
        \"symfony/framework-bundle\": \"^5.0\",
        \"symfony/web-link\": \"^4.4|^5.0\",
        \"doctrine/annotations\": \"~1.7\",
        \"doctrine/cache\": \"~1.0\"
    },
    \"conflict\": {
        \"symfony/dependency-injection\": \"<4.4\",
        \"symfony/framework-bundle\": \"<5.0\",
        \"symfony/translation\": \"<5.0\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\TwigBundle\\\\\": \"\" },
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
        return "@app/vendor/symfony/twig-bundle/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/twig-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony TwigBundle\",
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
        \"symfony/config\": \"^4.4|^5.0\",
        \"symfony/twig-bridge\": \"^5.0\",
        \"symfony/http-foundation\": \"^4.4|^5.0\",
        \"symfony/http-kernel\": \"^5.0\",
        \"symfony/polyfill-ctype\": \"~1.8\",
        \"twig/twig\": \"^2.10|^3.0\"
    },
    \"require-dev\": {
        \"symfony/asset\": \"^4.4|^5.0\",
        \"symfony/stopwatch\": \"^4.4|^5.0\",
        \"symfony/dependency-injection\": \"^4.4|^5.0\",
        \"symfony/expression-language\": \"^4.4|^5.0\",
        \"symfony/finder\": \"^4.4|^5.0\",
        \"symfony/form\": \"^4.4|^5.0\",
        \"symfony/routing\": \"^4.4|^5.0\",
        \"symfony/translation\": \"^5.0\",
        \"symfony/yaml\": \"^4.4|^5.0\",
        \"symfony/framework-bundle\": \"^5.0\",
        \"symfony/web-link\": \"^4.4|^5.0\",
        \"doctrine/annotations\": \"~1.7\",
        \"doctrine/cache\": \"~1.0\"
    },
    \"conflict\": {
        \"symfony/dependency-injection\": \"<4.4\",
        \"symfony/framework-bundle\": \"<5.0\",
        \"symfony/translation\": \"<5.0\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\TwigBundle\\\\\": \"\" },
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
", "@app/vendor/symfony/twig-bundle/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bundle\\composer.json");
    }
}
