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

/* @app/vendor/doctrine/persistence/composer.json */
class __TwigTemplate_a9212481ee2f8c0d8b21d76d1a2d5cf767b218c7a8f8075fe49620a587ef48bd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/composer.json"));

        // line 1
        echo "{
    \"name\": \"doctrine/persistence\",
    \"type\": \"library\",
    \"description\": \"The Doctrine Persistence project is a set of shared interfaces and functionality that the different Doctrine object mappers share.\",
    \"keywords\": [
        \"persistence\",
        \"object\",
        \"mapper\",
        \"orm\",
        \"odm\"
    ],
    \"homepage\": \"https://doctrine-project.org/projects/persistence.html\",
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
        \"doctrine/annotations\": \"^1.0\",
        \"doctrine/cache\": \"^1.0\",
        \"doctrine/collections\": \"^1.0\",
        \"doctrine/event-manager\": \"^1.0\",
        \"doctrine/reflection\": \"^1.1\"
    },
    \"require-dev\": {
        \"phpstan/phpstan\": \"^0.11\",
        \"doctrine/coding-standard\": \"^6.0\",
        \"phpunit/phpunit\": \"^7.0\"
    },
    \"conflict\": {
        \"doctrine/common\": \"<2.10@dev\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\",
            \"Doctrine\\\\Persistence\\\\\": \"lib/Doctrine/Persistence\"
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
            \"dev-master\": \"1.3.x-dev\"
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"doctrine/persistence\",
    \"type\": \"library\",
    \"description\": \"The Doctrine Persistence project is a set of shared interfaces and functionality that the different Doctrine object mappers share.\",
    \"keywords\": [
        \"persistence\",
        \"object\",
        \"mapper\",
        \"orm\",
        \"odm\"
    ],
    \"homepage\": \"https://doctrine-project.org/projects/persistence.html\",
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
        \"doctrine/annotations\": \"^1.0\",
        \"doctrine/cache\": \"^1.0\",
        \"doctrine/collections\": \"^1.0\",
        \"doctrine/event-manager\": \"^1.0\",
        \"doctrine/reflection\": \"^1.1\"
    },
    \"require-dev\": {
        \"phpstan/phpstan\": \"^0.11\",
        \"doctrine/coding-standard\": \"^6.0\",
        \"phpunit/phpunit\": \"^7.0\"
    },
    \"conflict\": {
        \"doctrine/common\": \"<2.10@dev\"
    },
    \"autoload\": {
        \"psr-4\": {
            \"Doctrine\\\\Common\\\\\": \"lib/Doctrine/Common\",
            \"Doctrine\\\\Persistence\\\\\": \"lib/Doctrine/Persistence\"
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
            \"dev-master\": \"1.3.x-dev\"
        }
    }
}
", "@app/vendor/doctrine/persistence/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\composer.json");
    }
}
