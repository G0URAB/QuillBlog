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

/* @app/vendor/doctrine/doctrine-migrations-bundle/composer.json */
class __TwigTemplate_80e855b62b9975ec73afa3140dccbdba3db9869e48c02439215c2bc793ce784f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-migrations-bundle/composer.json"));

        // line 1
        echo "{
    \"name\": \"doctrine/doctrine-migrations-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony DoctrineMigrationsBundle\",
    \"keywords\": [\"DBAL\", \"Migrations\", \"Schema\"],
    \"homepage\": \"https://www.doctrine-project.org\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        },
        {
            \"name\": \"Doctrine Project\",
            \"homepage\": \"http://www.doctrine-project.org\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"http://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"symfony/framework-bundle\": \"~3.4|~4.0|~5.0\",
        \"doctrine/doctrine-bundle\": \"~1.0|~2.0\",
        \"doctrine/migrations\": \"^2.2\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"^6.4|^7.0\",
        \"mikey179/vfsstream\": \"^1.6\",
        \"doctrine/coding-standard\": \"^5.0\",
        \"phpstan/phpstan\": \"^0.9.2\",
        \"phpstan/phpstan-strict-rules\": \"^0.9\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Bundle\\\\MigrationsBundle\\\\\": \"\" },
        \"exclude-from-classmap\": [
            \"/Tests/\"
        ]
    },
    \"autoload-dev\": {
        \"psr-4\": { \"Doctrine\\\\Bundle\\\\MigrationsBundle\\\\Tests\\\\\": \"Tests\" }
    },
    \"extra\": {
        \"branch-alias\": {
          \"dev-master\": \"2.1.x-dev\"
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-migrations-bundle/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"doctrine/doctrine-migrations-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony DoctrineMigrationsBundle\",
    \"keywords\": [\"DBAL\", \"Migrations\", \"Schema\"],
    \"homepage\": \"https://www.doctrine-project.org\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        },
        {
            \"name\": \"Doctrine Project\",
            \"homepage\": \"http://www.doctrine-project.org\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"http://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"symfony/framework-bundle\": \"~3.4|~4.0|~5.0\",
        \"doctrine/doctrine-bundle\": \"~1.0|~2.0\",
        \"doctrine/migrations\": \"^2.2\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"^6.4|^7.0\",
        \"mikey179/vfsstream\": \"^1.6\",
        \"doctrine/coding-standard\": \"^5.0\",
        \"phpstan/phpstan\": \"^0.9.2\",
        \"phpstan/phpstan-strict-rules\": \"^0.9\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Bundle\\\\MigrationsBundle\\\\\": \"\" },
        \"exclude-from-classmap\": [
            \"/Tests/\"
        ]
    },
    \"autoload-dev\": {
        \"psr-4\": { \"Doctrine\\\\Bundle\\\\MigrationsBundle\\\\Tests\\\\\": \"Tests\" }
    },
    \"extra\": {
        \"branch-alias\": {
          \"dev-master\": \"2.1.x-dev\"
        }
    }
}
", "@app/vendor/doctrine/doctrine-migrations-bundle/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-migrations-bundle\\composer.json");
    }
}
