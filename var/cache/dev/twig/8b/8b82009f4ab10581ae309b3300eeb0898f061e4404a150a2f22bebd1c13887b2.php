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

/* @app/vendor/doctrine/common/composer.json */
class __TwigTemplate_67f57ae89919f158137b16a97f6e65d783c8a0b5d4e253a53c83c8a69d72a165 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/common/composer.json"));

        // line 1
        echo "{
    \"name\": \"doctrine/common\",
    \"type\": \"library\",
    \"description\": \"PHP Doctrine Common project is a library that provides additional functionality that other Doctrine projects depend on such as better reflection support, persistence interfaces, proxies, event system and much more.\",
    \"keywords\": [
        \"php\",
        \"common\",
        \"doctrine\"
    ],
    \"homepage\": \"https://www.doctrine-project.org/projects/common.html\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Guilherme Blanco\", \"email\": \"guilhermeblanco@gmail.com\"},
        {\"name\": \"Roman Borschel\", \"email\": \"roman@code-factory.org\"},
        {\"name\": \"Benjamin Eberlei\", \"email\": \"kontakt@beberlei.de\"},
        {\"name\": \"Jonathan Wage\", \"email\": \"jonwage@gmail.com\"},
        {\"name\": \"Johannes Schmitt\", \"email\": \"schmittjoh@gmail.com\"},
        {\"name\": \"Marco Pivetta\", \"email\": \"ocramius@gmail.com\"}
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"doctrine/inflector\": \"^1.0\",
        \"doctrine/cache\": \"^1.0\",
        \"doctrine/collections\": \"^1.0\",
        \"doctrine/lexer\": \"^1.0\",
        \"doctrine/annotations\": \"^1.0\",
        \"doctrine/event-manager\": \"^1.0\",
        \"doctrine/reflection\": \"^1.0\",
        \"doctrine/persistence\": \"^1.1\"
    },
    \"require-dev\": {
        \"phpstan/phpstan\": \"^0.11\",
        \"phpstan/phpstan-phpunit\": \"^0.11\",
        \"phpunit/phpunit\": \"^7.0\",
        \"doctrine/coding-standard\": \"^1.0\",
        \"squizlabs/php_codesniffer\": \"^3.0\",
        \"symfony/phpunit-bridge\": \"^4.0.5\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine/Tests\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.11.x-dev\"
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/common/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"doctrine/common\",
    \"type\": \"library\",
    \"description\": \"PHP Doctrine Common project is a library that provides additional functionality that other Doctrine projects depend on such as better reflection support, persistence interfaces, proxies, event system and much more.\",
    \"keywords\": [
        \"php\",
        \"common\",
        \"doctrine\"
    ],
    \"homepage\": \"https://www.doctrine-project.org/projects/common.html\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Guilherme Blanco\", \"email\": \"guilhermeblanco@gmail.com\"},
        {\"name\": \"Roman Borschel\", \"email\": \"roman@code-factory.org\"},
        {\"name\": \"Benjamin Eberlei\", \"email\": \"kontakt@beberlei.de\"},
        {\"name\": \"Jonathan Wage\", \"email\": \"jonwage@gmail.com\"},
        {\"name\": \"Johannes Schmitt\", \"email\": \"schmittjoh@gmail.com\"},
        {\"name\": \"Marco Pivetta\", \"email\": \"ocramius@gmail.com\"}
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"doctrine/inflector\": \"^1.0\",
        \"doctrine/cache\": \"^1.0\",
        \"doctrine/collections\": \"^1.0\",
        \"doctrine/lexer\": \"^1.0\",
        \"doctrine/annotations\": \"^1.0\",
        \"doctrine/event-manager\": \"^1.0\",
        \"doctrine/reflection\": \"^1.0\",
        \"doctrine/persistence\": \"^1.1\"
    },
    \"require-dev\": {
        \"phpstan/phpstan\": \"^0.11\",
        \"phpstan/phpstan-phpunit\": \"^0.11\",
        \"phpunit/phpunit\": \"^7.0\",
        \"doctrine/coding-standard\": \"^1.0\",
        \"squizlabs/php_codesniffer\": \"^3.0\",
        \"symfony/phpunit-bridge\": \"^4.0.5\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine/Tests\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.11.x-dev\"
        }
    }
}
", "@app/vendor/doctrine/common/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\common\\composer.json");
    }
}
