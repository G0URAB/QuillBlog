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

/* @app/vendor/doctrine/collections/composer.json */
class __TwigTemplate_beb9f4a27db12de024a80c0792c54f1666cf56b1073e203f930b43f1bb3cdd11 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/collections/composer.json"));

        // line 1
        echo "{
    \"name\": \"doctrine/collections\",
    \"type\": \"library\",
    \"description\": \"PHP Doctrine Collections library that adds additional functionality on top of PHP arrays.\",
    \"keywords\": [
        \"php\",
        \"collections\",
        \"array\",
        \"iterators\"
    ],
    \"homepage\": \"https://www.doctrine-project.org/projects/collections.html\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Guilherme Blanco\", \"email\": \"guilhermeblanco@gmail.com\"},
        {\"name\": \"Roman Borschel\", \"email\": \"roman@code-factory.org\"},
        {\"name\": \"Benjamin Eberlei\", \"email\": \"kontakt@beberlei.de\"},
        {\"name\": \"Jonathan Wage\", \"email\": \"jonwage@gmail.com\"},
        {\"name\": \"Johannes Schmitt\", \"email\": \"schmittjoh@gmail.com\"}
    ],
    \"require\": {
        \"php\": \"^7.1.3\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"^7.0\",
        \"doctrine/coding-standard\": \"^6.0\",
        \"phpstan/phpstan-shim\": \"^0.9.2\",
        \"vimeo/psalm\": \"^3.2.2\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Common\\\\Collections\\\\\": \"lib/Doctrine/Common/Collections\" }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine/Tests\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.6.x-dev\"
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/collections/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"doctrine/collections\",
    \"type\": \"library\",
    \"description\": \"PHP Doctrine Collections library that adds additional functionality on top of PHP arrays.\",
    \"keywords\": [
        \"php\",
        \"collections\",
        \"array\",
        \"iterators\"
    ],
    \"homepage\": \"https://www.doctrine-project.org/projects/collections.html\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Guilherme Blanco\", \"email\": \"guilhermeblanco@gmail.com\"},
        {\"name\": \"Roman Borschel\", \"email\": \"roman@code-factory.org\"},
        {\"name\": \"Benjamin Eberlei\", \"email\": \"kontakt@beberlei.de\"},
        {\"name\": \"Jonathan Wage\", \"email\": \"jonwage@gmail.com\"},
        {\"name\": \"Johannes Schmitt\", \"email\": \"schmittjoh@gmail.com\"}
    ],
    \"require\": {
        \"php\": \"^7.1.3\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"^7.0\",
        \"doctrine/coding-standard\": \"^6.0\",
        \"phpstan/phpstan-shim\": \"^0.9.2\",
        \"vimeo/psalm\": \"^3.2.2\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Common\\\\Collections\\\\\": \"lib/Doctrine/Common/Collections\" }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine/Tests\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.6.x-dev\"
        }
    }
}
", "@app/vendor/doctrine/collections/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\collections\\composer.json");
    }
}
