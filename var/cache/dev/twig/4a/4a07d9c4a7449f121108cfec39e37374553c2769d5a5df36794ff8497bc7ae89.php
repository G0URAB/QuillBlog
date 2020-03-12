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

/* @app/vendor/doctrine/annotations/composer.json */
class __TwigTemplate_2aac841f2b8079d73b006af24824668af5fe768e5977bf1adce099f8936f33e6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/annotations/composer.json"));

        // line 1
        echo "{
    \"name\": \"doctrine/annotations\",
    \"type\": \"library\",
    \"description\": \"Docblock Annotations Parser\",
    \"keywords\": [\"annotations\", \"docblock\", \"parser\"],
    \"homepage\": \"http://www.doctrine-project.org\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Guilherme Blanco\", \"email\": \"guilhermeblanco@gmail.com\"},
        {\"name\": \"Roman Borschel\", \"email\": \"roman@code-factory.org\"},
        {\"name\": \"Benjamin Eberlei\", \"email\": \"kontakt@beberlei.de\"},
        {\"name\": \"Jonathan Wage\", \"email\": \"jonwage@gmail.com\"},
        {\"name\": \"Johannes Schmitt\", \"email\": \"schmittjoh@gmail.com\"}
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"doctrine/lexer\": \"1.*\"
    },
    \"require-dev\": {
        \"doctrine/cache\": \"1.*\",
        \"phpunit/phpunit\": \"^7.5\"
    },
    \"config\": {
        \"sort-packages\": true
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Common\\\\Annotations\\\\\": \"lib/Doctrine/Common/Annotations\" }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"Doctrine\\\\Performance\\\\Common\\\\Annotations\\\\\": \"tests/Doctrine/Performance/Common/Annotations\",
            \"Doctrine\\\\Tests\\\\Common\\\\Annotations\\\\\": \"tests/Doctrine/Tests/Common/Annotations\"
        },
        \"files\": [
            \"tests/Doctrine/Tests/Common/Annotations/Fixtures/SingleClassLOC1000.php\"
        ]
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.7.x-dev\"
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/annotations/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"doctrine/annotations\",
    \"type\": \"library\",
    \"description\": \"Docblock Annotations Parser\",
    \"keywords\": [\"annotations\", \"docblock\", \"parser\"],
    \"homepage\": \"http://www.doctrine-project.org\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Guilherme Blanco\", \"email\": \"guilhermeblanco@gmail.com\"},
        {\"name\": \"Roman Borschel\", \"email\": \"roman@code-factory.org\"},
        {\"name\": \"Benjamin Eberlei\", \"email\": \"kontakt@beberlei.de\"},
        {\"name\": \"Jonathan Wage\", \"email\": \"jonwage@gmail.com\"},
        {\"name\": \"Johannes Schmitt\", \"email\": \"schmittjoh@gmail.com\"}
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"doctrine/lexer\": \"1.*\"
    },
    \"require-dev\": {
        \"doctrine/cache\": \"1.*\",
        \"phpunit/phpunit\": \"^7.5\"
    },
    \"config\": {
        \"sort-packages\": true
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Common\\\\Annotations\\\\\": \"lib/Doctrine/Common/Annotations\" }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"Doctrine\\\\Performance\\\\Common\\\\Annotations\\\\\": \"tests/Doctrine/Performance/Common/Annotations\",
            \"Doctrine\\\\Tests\\\\Common\\\\Annotations\\\\\": \"tests/Doctrine/Tests/Common/Annotations\"
        },
        \"files\": [
            \"tests/Doctrine/Tests/Common/Annotations/Fixtures/SingleClassLOC1000.php\"
        ]
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.7.x-dev\"
        }
    }
}
", "@app/vendor/doctrine/annotations/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\annotations\\composer.json");
    }
}
