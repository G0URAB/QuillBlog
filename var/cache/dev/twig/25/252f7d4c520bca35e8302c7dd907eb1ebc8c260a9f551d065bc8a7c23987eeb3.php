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

/* @app/vendor/doctrine/reflection/composer.json */
class __TwigTemplate_6ca6cd9e494ace1d35bf737b6218b00f70a8d2a9163ba3977a2bedbd25c02edd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/reflection/composer.json"));

        // line 1
        echo "{
    \"name\": \"doctrine/reflection\",
    \"type\": \"library\",
    \"description\": \"The Doctrine Reflection project is a simple library used by the various Doctrine projects which adds some additional functionality on top of the reflection functionality that comes with PHP. It allows you to get the reflection information about classes, methods and properties statically.\",
    \"keywords\": [
        \"reflection\",
        \"static\"
    ],
    \"homepage\": \"https://www.doctrine-project.org/projects/reflection.html\",
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
        \"ext-tokenizer\": \"*\",
        \"doctrine/annotations\": \"^1.0\"
    },
    \"require-dev\": {
        \"phpstan/phpstan\": \"^0.11.0\",
        \"phpstan/phpstan-phpunit\": \"^0.11.0\",
        \"phpunit/phpunit\": \"^7.0\",
        \"doctrine/coding-standard\": \"^5.0\",
        \"doctrine/common\": \"^2.10\"
    },
    \"conflict\": {
        \"doctrine/common\": \"<2.9\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine/Tests\",
            \"Doctrine\\\\Tests_PHP74\\\\\": \"tests/Doctrine/Tests_PHP74\"
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
        return "@app/vendor/doctrine/reflection/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"doctrine/reflection\",
    \"type\": \"library\",
    \"description\": \"The Doctrine Reflection project is a simple library used by the various Doctrine projects which adds some additional functionality on top of the reflection functionality that comes with PHP. It allows you to get the reflection information about classes, methods and properties statically.\",
    \"keywords\": [
        \"reflection\",
        \"static\"
    ],
    \"homepage\": \"https://www.doctrine-project.org/projects/reflection.html\",
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
        \"ext-tokenizer\": \"*\",
        \"doctrine/annotations\": \"^1.0\"
    },
    \"require-dev\": {
        \"phpstan/phpstan\": \"^0.11.0\",
        \"phpstan/phpstan-phpunit\": \"^0.11.0\",
        \"phpunit/phpunit\": \"^7.0\",
        \"doctrine/coding-standard\": \"^5.0\",
        \"doctrine/common\": \"^2.10\"
    },
    \"conflict\": {
        \"doctrine/common\": \"<2.9\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine/Tests\",
            \"Doctrine\\\\Tests_PHP74\\\\\": \"tests/Doctrine/Tests_PHP74\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.0.x-dev\"
        }
    }
}
", "@app/vendor/doctrine/reflection/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\reflection\\composer.json");
    }
}
