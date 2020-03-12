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

/* @app/vendor/doctrine/lexer/composer.json */
class __TwigTemplate_e84f50e9a12cebbcc7a2bebad67e7274739e066310b0834908ae0627dec9dde6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/lexer/composer.json"));

        // line 1
        echo "{
    \"name\": \"doctrine/lexer\",
    \"type\": \"library\",
    \"description\": \"PHP Doctrine Lexer parser library that can be used in Top-Down, Recursive Descent Parsers.\",
    \"keywords\": [
        \"php\",
        \"parser\",
        \"lexer\",
        \"annotations\",
        \"docblock\"
    ],
    \"homepage\": \"https://www.doctrine-project.org/projects/lexer.html\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Guilherme Blanco\", \"email\": \"guilhermeblanco@gmail.com\"},
        {\"name\": \"Roman Borschel\", \"email\": \"roman@code-factory.org\"},
        {\"name\": \"Johannes Schmitt\", \"email\": \"schmittjoh@gmail.com\"}
    ],
    \"require\": {
        \"php\": \"^7.2\"
    },
    \"require-dev\": {
        \"doctrine/coding-standard\": \"^6.0\",
        \"phpstan/phpstan\": \"^0.11.8\",
        \"phpunit/phpunit\": \"^8.2\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Common\\\\Lexer\\\\\": \"lib/Doctrine/Common/Lexer\" }
    },
    \"autoload-dev\": {
        \"psr-4\": { \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.2.x-dev\"
        }
    },
    \"config\": {
        \"sort-packages\": true
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/lexer/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"doctrine/lexer\",
    \"type\": \"library\",
    \"description\": \"PHP Doctrine Lexer parser library that can be used in Top-Down, Recursive Descent Parsers.\",
    \"keywords\": [
        \"php\",
        \"parser\",
        \"lexer\",
        \"annotations\",
        \"docblock\"
    ],
    \"homepage\": \"https://www.doctrine-project.org/projects/lexer.html\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Guilherme Blanco\", \"email\": \"guilhermeblanco@gmail.com\"},
        {\"name\": \"Roman Borschel\", \"email\": \"roman@code-factory.org\"},
        {\"name\": \"Johannes Schmitt\", \"email\": \"schmittjoh@gmail.com\"}
    ],
    \"require\": {
        \"php\": \"^7.2\"
    },
    \"require-dev\": {
        \"doctrine/coding-standard\": \"^6.0\",
        \"phpstan/phpstan\": \"^0.11.8\",
        \"phpunit/phpunit\": \"^8.2\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Common\\\\Lexer\\\\\": \"lib/Doctrine/Common/Lexer\" }
    },
    \"autoload-dev\": {
        \"psr-4\": { \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.2.x-dev\"
        }
    },
    \"config\": {
        \"sort-packages\": true
    }
}
", "@app/vendor/doctrine/lexer/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\lexer\\composer.json");
    }
}
