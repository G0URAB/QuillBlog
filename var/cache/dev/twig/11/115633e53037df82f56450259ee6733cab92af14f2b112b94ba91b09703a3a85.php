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

/* @app/vendor/symfony/doctrine-bridge/composer.json */
class __TwigTemplate_e26d284d06d8d50b7d28db29b34813d0bab1c01bb4ca517251cc037b11aba836 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/doctrine-bridge\",
    \"type\": \"symfony-bridge\",
    \"description\": \"Symfony Doctrine Bridge\",
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
        \"doctrine/event-manager\": \"~1.0\",
        \"doctrine/persistence\": \"^1.3\",
        \"symfony/polyfill-ctype\": \"~1.8\",
        \"symfony/polyfill-mbstring\": \"~1.0\",
        \"symfony/service-contracts\": \"^1.1|^2\"
    },
    \"require-dev\": {
        \"symfony/stopwatch\": \"^4.4|^5.0\",
        \"symfony/config\": \"^4.4|^5.0\",
        \"symfony/dependency-injection\": \"^4.4|^5.0\",
        \"symfony/form\": \"^5.0\",
        \"symfony/http-kernel\": \"^5.0\",
        \"symfony/messenger\": \"^4.4|^5.0\",
        \"symfony/property-access\": \"^4.4|^5.0\",
        \"symfony/property-info\": \"^5.0\",
        \"symfony/proxy-manager-bridge\": \"^4.4|^5.0\",
        \"symfony/security-core\": \"^5.0\",
        \"symfony/expression-language\": \"^4.4|^5.0\",
        \"symfony/validator\": \"^5.0.2\",
        \"symfony/translation\": \"^4.4|^5.0\",
        \"symfony/var-dumper\": \"^4.4|^5.0\",
        \"doctrine/annotations\": \"~1.7\",
        \"doctrine/cache\": \"~1.6\",
        \"doctrine/collections\": \"~1.0\",
        \"doctrine/data-fixtures\": \"1.0.*\",
        \"doctrine/dbal\": \"~2.4\",
        \"doctrine/orm\": \"^2.6.3\",
        \"doctrine/reflection\": \"~1.0\"
    },
    \"conflict\": {
        \"phpunit/phpunit\": \"<5.4.3\",
        \"symfony/dependency-injection\": \"<4.4\",
        \"symfony/form\": \"<5\",
        \"symfony/http-kernel\": \"<5\",
        \"symfony/messenger\": \"<4.4\",
        \"symfony/property-info\": \"<5\",
        \"symfony/security-bundle\": \"<5\",
        \"symfony/security-core\": \"<5\",
        \"symfony/validator\": \"<5.0.2\"
    },
    \"suggest\": {
        \"symfony/form\": \"\",
        \"symfony/validator\": \"\",
        \"symfony/property-info\": \"\",
        \"doctrine/data-fixtures\": \"\",
        \"doctrine/dbal\": \"\",
        \"doctrine/orm\": \"\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bridge\\\\Doctrine\\\\\": \"\" },
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
        return "@app/vendor/symfony/doctrine-bridge/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/doctrine-bridge\",
    \"type\": \"symfony-bridge\",
    \"description\": \"Symfony Doctrine Bridge\",
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
        \"doctrine/event-manager\": \"~1.0\",
        \"doctrine/persistence\": \"^1.3\",
        \"symfony/polyfill-ctype\": \"~1.8\",
        \"symfony/polyfill-mbstring\": \"~1.0\",
        \"symfony/service-contracts\": \"^1.1|^2\"
    },
    \"require-dev\": {
        \"symfony/stopwatch\": \"^4.4|^5.0\",
        \"symfony/config\": \"^4.4|^5.0\",
        \"symfony/dependency-injection\": \"^4.4|^5.0\",
        \"symfony/form\": \"^5.0\",
        \"symfony/http-kernel\": \"^5.0\",
        \"symfony/messenger\": \"^4.4|^5.0\",
        \"symfony/property-access\": \"^4.4|^5.0\",
        \"symfony/property-info\": \"^5.0\",
        \"symfony/proxy-manager-bridge\": \"^4.4|^5.0\",
        \"symfony/security-core\": \"^5.0\",
        \"symfony/expression-language\": \"^4.4|^5.0\",
        \"symfony/validator\": \"^5.0.2\",
        \"symfony/translation\": \"^4.4|^5.0\",
        \"symfony/var-dumper\": \"^4.4|^5.0\",
        \"doctrine/annotations\": \"~1.7\",
        \"doctrine/cache\": \"~1.6\",
        \"doctrine/collections\": \"~1.0\",
        \"doctrine/data-fixtures\": \"1.0.*\",
        \"doctrine/dbal\": \"~2.4\",
        \"doctrine/orm\": \"^2.6.3\",
        \"doctrine/reflection\": \"~1.0\"
    },
    \"conflict\": {
        \"phpunit/phpunit\": \"<5.4.3\",
        \"symfony/dependency-injection\": \"<4.4\",
        \"symfony/form\": \"<5\",
        \"symfony/http-kernel\": \"<5\",
        \"symfony/messenger\": \"<4.4\",
        \"symfony/property-info\": \"<5\",
        \"symfony/security-bundle\": \"<5\",
        \"symfony/security-core\": \"<5\",
        \"symfony/validator\": \"<5.0.2\"
    },
    \"suggest\": {
        \"symfony/form\": \"\",
        \"symfony/validator\": \"\",
        \"symfony/property-info\": \"\",
        \"doctrine/data-fixtures\": \"\",
        \"doctrine/dbal\": \"\",
        \"doctrine/orm\": \"\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bridge\\\\Doctrine\\\\\": \"\" },
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
", "@app/vendor/symfony/doctrine-bridge/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\composer.json");
    }
}
