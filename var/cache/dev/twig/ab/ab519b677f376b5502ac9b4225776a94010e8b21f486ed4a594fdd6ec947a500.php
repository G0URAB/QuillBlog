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

/* @app/vendor/symfony/flex/composer.json */
class __TwigTemplate_831d82af302c8eb94b6be8f832d9f73d26161a6575e380a6ad61c153b00ed8d7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/flex/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/flex\",
    \"type\": \"composer-plugin\",
    \"description\": \"Composer plugin for Symfony\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien.potencier@gmail.com\"
        }
    ],
    \"require\": {
        \"php\": \"^7.0\",
        \"composer-plugin-api\": \"^1.0\"
    },
    \"require-dev\": {
        \"composer/composer\": \"^1.0.2\",
        \"symfony/dotenv\": \"^3.4|^4.0|^5.0\",
        \"symfony/phpunit-bridge\": \"^3.4.19|^4.1.8|^5.0\",
        \"symfony/process\": \"^2.7|^3.0|^4.0|^5.0\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Symfony\\\\Flex\\\\\": \"src\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.5-dev\"
        },
        \"class\": \"Symfony\\\\Flex\\\\Flex\"
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/flex/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/flex\",
    \"type\": \"composer-plugin\",
    \"description\": \"Composer plugin for Symfony\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien.potencier@gmail.com\"
        }
    ],
    \"require\": {
        \"php\": \"^7.0\",
        \"composer-plugin-api\": \"^1.0\"
    },
    \"require-dev\": {
        \"composer/composer\": \"^1.0.2\",
        \"symfony/dotenv\": \"^3.4|^4.0|^5.0\",
        \"symfony/phpunit-bridge\": \"^3.4.19|^4.1.8|^5.0\",
        \"symfony/process\": \"^2.7|^3.0|^4.0|^5.0\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Symfony\\\\Flex\\\\\": \"src\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.5-dev\"
        },
        \"class\": \"Symfony\\\\Flex\\\\Flex\"
    }
}
", "@app/vendor/symfony/flex/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\flex\\composer.json");
    }
}
