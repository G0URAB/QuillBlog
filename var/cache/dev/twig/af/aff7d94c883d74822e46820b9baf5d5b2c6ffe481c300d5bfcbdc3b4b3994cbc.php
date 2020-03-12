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

/* @app/vendor/doctrine/instantiator/composer.json */
class __TwigTemplate_c2670231adcad6b12ccdb5f7c8920de6f479f6c4bada61c2955fdeaa86ad74d9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/instantiator/composer.json"));

        // line 1
        echo "{
    \"name\":              \"doctrine/instantiator\",
    \"description\":       \"A small, lightweight utility to instantiate objects in PHP without invoking their constructors\",
    \"type\":              \"library\",
    \"license\":           \"MIT\",
    \"homepage\":          \"https://www.doctrine-project.org/projects/instantiator.html\",
    \"keywords\":          [
        \"instantiate\",
        \"constructor\"
    ],
    \"authors\": [
        {
            \"name\":     \"Marco Pivetta\",
            \"email\":    \"ocramius@gmail.com\",
            \"homepage\": \"http://ocramius.github.com/\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1\"
    },
    \"require-dev\": {
        \"ext-phar\":                  \"*\",
        \"ext-pdo\":                   \"*\",
        \"doctrine/coding-standard\":  \"^6.0\",
        \"phpbench/phpbench\":         \"^0.13\",
        \"phpstan/phpstan-phpunit\":   \"^0.11\",
        \"phpstan/phpstan-shim\":      \"^0.11\",
        \"phpunit/phpunit\":           \"^7.0\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Doctrine\\\\Instantiator\\\\\": \"src/Doctrine/Instantiator/\"
        }
    },
    \"autoload-dev\": {
        \"psr-0\": {
            \"DoctrineTest\\\\InstantiatorPerformance\\\\\": \"tests\",
            \"DoctrineTest\\\\InstantiatorTest\\\\\": \"tests\",
            \"DoctrineTest\\\\InstantiatorTestAsset\\\\\": \"tests\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.2.x-dev\"
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/instantiator/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\":              \"doctrine/instantiator\",
    \"description\":       \"A small, lightweight utility to instantiate objects in PHP without invoking their constructors\",
    \"type\":              \"library\",
    \"license\":           \"MIT\",
    \"homepage\":          \"https://www.doctrine-project.org/projects/instantiator.html\",
    \"keywords\":          [
        \"instantiate\",
        \"constructor\"
    ],
    \"authors\": [
        {
            \"name\":     \"Marco Pivetta\",
            \"email\":    \"ocramius@gmail.com\",
            \"homepage\": \"http://ocramius.github.com/\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1\"
    },
    \"require-dev\": {
        \"ext-phar\":                  \"*\",
        \"ext-pdo\":                   \"*\",
        \"doctrine/coding-standard\":  \"^6.0\",
        \"phpbench/phpbench\":         \"^0.13\",
        \"phpstan/phpstan-phpunit\":   \"^0.11\",
        \"phpstan/phpstan-shim\":      \"^0.11\",
        \"phpunit/phpunit\":           \"^7.0\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Doctrine\\\\Instantiator\\\\\": \"src/Doctrine/Instantiator/\"
        }
    },
    \"autoload-dev\": {
        \"psr-0\": {
            \"DoctrineTest\\\\InstantiatorPerformance\\\\\": \"tests\",
            \"DoctrineTest\\\\InstantiatorTest\\\\\": \"tests\",
            \"DoctrineTest\\\\InstantiatorTestAsset\\\\\": \"tests\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.2.x-dev\"
        }
    }
}
", "@app/vendor/doctrine/instantiator/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\instantiator\\composer.json");
    }
}
