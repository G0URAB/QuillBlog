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

/* @app/vendor/symfony/maker-bundle/composer.json */
class __TwigTemplate_8d22f1fd37ff46538aa2d3d661afd303fbf854a761f9aa740d5f3f83da98ad16 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/composer.json"));

        // line 1
        echo "{
    \"description\": \"Symfony Maker helps you create empty commands, controllers, form classes, tests and more so you can forget about writing boilerplate code.\",
    \"homepage\": \"https://symfony.com/doc/current/bundles/SymfonyMakerBundle/index.html\",
    \"name\": \"symfony/maker-bundle\",
    \"type\": \"symfony-bundle\",
    \"license\": \"MIT\",
    \"keywords\": [\"generator\", \"code generator\", \"scaffolding\", \"scaffold\"],
    \"authors\": [
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"minimum-stability\": \"dev\",
    \"require\": {
        \"php\": \"^7.0.8\",
        \"doctrine/inflector\": \"^1.2\",
        \"nikic/php-parser\": \"^4.0\",
        \"symfony/config\": \"^3.4|^4.0|^5.0\",
        \"symfony/console\": \"^3.4|^4.0|^5.0\",
        \"symfony/dependency-injection\": \"^3.4|^4.0|^5.0\",
        \"symfony/filesystem\": \"^3.4|^4.0|^5.0\",
        \"symfony/finder\": \"^3.4|^4.0|^5.0\",
        \"symfony/framework-bundle\": \"^3.4|^4.0|^5.0\",
        \"symfony/http-kernel\": \"^3.4|^4.0|^5.0\"
    },
    \"require-dev\": {
        \"doctrine/doctrine-bundle\": \"^1.8|^2.0\",
        \"doctrine/orm\": \"^2.3\",
        \"friendsofphp/php-cs-fixer\": \"^2.8\",
        \"friendsoftwig/twigcs\": \"^3.1.2\",
        \"symfony/http-client\": \"^4.3|^5.0\",
        \"symfony/phpunit-bridge\": \"^4.3|^5.0\",
        \"symfony/process\": \"^3.4|^4.0|^5.0\",
        \"symfony/security-core\": \"^3.4|^4.0|^5.0\",
        \"symfony/yaml\": \"^3.4|^4.0|^5.0\"
    },
    \"config\": {
        \"preferred-install\": \"dist\",
        \"sort-packages\": true
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\MakerBundle\\\\\": \"src/\" }
    },
    \"autoload-dev\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\MakerBundle\\\\Tests\\\\\": \"tests/\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.0-dev\"
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"description\": \"Symfony Maker helps you create empty commands, controllers, form classes, tests and more so you can forget about writing boilerplate code.\",
    \"homepage\": \"https://symfony.com/doc/current/bundles/SymfonyMakerBundle/index.html\",
    \"name\": \"symfony/maker-bundle\",
    \"type\": \"symfony-bundle\",
    \"license\": \"MIT\",
    \"keywords\": [\"generator\", \"code generator\", \"scaffolding\", \"scaffold\"],
    \"authors\": [
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"minimum-stability\": \"dev\",
    \"require\": {
        \"php\": \"^7.0.8\",
        \"doctrine/inflector\": \"^1.2\",
        \"nikic/php-parser\": \"^4.0\",
        \"symfony/config\": \"^3.4|^4.0|^5.0\",
        \"symfony/console\": \"^3.4|^4.0|^5.0\",
        \"symfony/dependency-injection\": \"^3.4|^4.0|^5.0\",
        \"symfony/filesystem\": \"^3.4|^4.0|^5.0\",
        \"symfony/finder\": \"^3.4|^4.0|^5.0\",
        \"symfony/framework-bundle\": \"^3.4|^4.0|^5.0\",
        \"symfony/http-kernel\": \"^3.4|^4.0|^5.0\"
    },
    \"require-dev\": {
        \"doctrine/doctrine-bundle\": \"^1.8|^2.0\",
        \"doctrine/orm\": \"^2.3\",
        \"friendsofphp/php-cs-fixer\": \"^2.8\",
        \"friendsoftwig/twigcs\": \"^3.1.2\",
        \"symfony/http-client\": \"^4.3|^5.0\",
        \"symfony/phpunit-bridge\": \"^4.3|^5.0\",
        \"symfony/process\": \"^3.4|^4.0|^5.0\",
        \"symfony/security-core\": \"^3.4|^4.0|^5.0\",
        \"symfony/yaml\": \"^3.4|^4.0|^5.0\"
    },
    \"config\": {
        \"preferred-install\": \"dist\",
        \"sort-packages\": true
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\MakerBundle\\\\\": \"src/\" }
    },
    \"autoload-dev\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\MakerBundle\\\\Tests\\\\\": \"tests/\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.0-dev\"
        }
    }
}
", "@app/vendor/symfony/maker-bundle/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\composer.json");
    }
}
