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

/* @app/vendor/doctrine/doctrine-bundle/composer.json */
class __TwigTemplate_cbfd14db8976de0944f51c738b1704ca45e653921ede772dcc01faf3dfd33e42 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/composer.json"));

        // line 1
        echo "{
    \"name\": \"doctrine/doctrine-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony DoctrineBundle\",
    \"keywords\": [\"DBAL\", \"ORM\", \"Database\", \"Persistence\"],
    \"homepage\": \"http://www.doctrine-project.org\",
    \"license\": \"MIT\",
    \"minimum-stability\": \"dev\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        },
        {
            \"name\": \"Benjamin Eberlei\",
            \"email\": \"kontakt@beberlei.de\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"http://symfony.com/contributors\"
        },
        {
            \"name\": \"Doctrine Project\",
            \"homepage\": \"http://www.doctrine-project.org/\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"doctrine/dbal\": \"^2.9.0\",
        \"doctrine/persistence\": \"^1.3.3\",
        \"jdorn/sql-formatter\": \"^1.2.16\",
        \"symfony/cache\": \"^4.3.3|^5.0\",
        \"symfony/config\": \"^4.3.3|^5.0\",
        \"symfony/console\": \"^3.4.30|^4.3.3|^5.0\",
        \"symfony/dependency-injection\": \"^4.3.3|^5.0\",
        \"symfony/doctrine-bridge\": \"^4.3.7|^5.0\",
        \"symfony/framework-bundle\": \"^3.4.30|^4.3.3|^5.0\",
        \"symfony/service-contracts\": \"^1.1.1|^2.0\"
    },
    \"require-dev\": {
        \"doctrine/coding-standard\": \"^6.0\",
        \"doctrine/orm\": \"^2.6\",
        \"ocramius/proxy-manager\": \"^2.1\",
        \"phpunit/phpunit\": \"^7.5\",
        \"symfony/phpunit-bridge\": \"^4.2\",
        \"symfony/property-info\": \"^4.3.3|^5.0\",
        \"symfony/proxy-manager-bridge\": \"^3.4|^4.3.3|^5.0\",
        \"symfony/twig-bridge\": \"^3.4.30|^4.3.3|^5.0\",
        \"symfony/validator\": \"^3.4.30|^4.3.3|^5.0\",
        \"symfony/web-profiler-bundle\": \"^3.4.30|^4.3.3|^5.0\",
        \"symfony/yaml\": \"^3.4.30|^4.3.3|^5.0\",
        \"twig/twig\": \"^1.34|^2.12\"
    },
    \"config\": {
        \"sort-packages\": true
    },
    \"conflict\": {
        \"doctrine/orm\": \"<2.6\",
        \"twig/twig\": \"<1.34|>=2.0,<2.4\"
    },
    \"suggest\": {
        \"doctrine/orm\": \"The Doctrine ORM integration is optional in the bundle.\",
        \"symfony/web-profiler-bundle\": \"To use the data collector.\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Bundle\\\\DoctrineBundle\\\\\": \"\" }
    },
    \"autoload-dev\": {
        \"psr-4\": { \"\": \"Tests/DependencyInjection\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.0.x-dev\"
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"doctrine/doctrine-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony DoctrineBundle\",
    \"keywords\": [\"DBAL\", \"ORM\", \"Database\", \"Persistence\"],
    \"homepage\": \"http://www.doctrine-project.org\",
    \"license\": \"MIT\",
    \"minimum-stability\": \"dev\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        },
        {
            \"name\": \"Benjamin Eberlei\",
            \"email\": \"kontakt@beberlei.de\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"http://symfony.com/contributors\"
        },
        {
            \"name\": \"Doctrine Project\",
            \"homepage\": \"http://www.doctrine-project.org/\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1\",
        \"doctrine/dbal\": \"^2.9.0\",
        \"doctrine/persistence\": \"^1.3.3\",
        \"jdorn/sql-formatter\": \"^1.2.16\",
        \"symfony/cache\": \"^4.3.3|^5.0\",
        \"symfony/config\": \"^4.3.3|^5.0\",
        \"symfony/console\": \"^3.4.30|^4.3.3|^5.0\",
        \"symfony/dependency-injection\": \"^4.3.3|^5.0\",
        \"symfony/doctrine-bridge\": \"^4.3.7|^5.0\",
        \"symfony/framework-bundle\": \"^3.4.30|^4.3.3|^5.0\",
        \"symfony/service-contracts\": \"^1.1.1|^2.0\"
    },
    \"require-dev\": {
        \"doctrine/coding-standard\": \"^6.0\",
        \"doctrine/orm\": \"^2.6\",
        \"ocramius/proxy-manager\": \"^2.1\",
        \"phpunit/phpunit\": \"^7.5\",
        \"symfony/phpunit-bridge\": \"^4.2\",
        \"symfony/property-info\": \"^4.3.3|^5.0\",
        \"symfony/proxy-manager-bridge\": \"^3.4|^4.3.3|^5.0\",
        \"symfony/twig-bridge\": \"^3.4.30|^4.3.3|^5.0\",
        \"symfony/validator\": \"^3.4.30|^4.3.3|^5.0\",
        \"symfony/web-profiler-bundle\": \"^3.4.30|^4.3.3|^5.0\",
        \"symfony/yaml\": \"^3.4.30|^4.3.3|^5.0\",
        \"twig/twig\": \"^1.34|^2.12\"
    },
    \"config\": {
        \"sort-packages\": true
    },
    \"conflict\": {
        \"doctrine/orm\": \"<2.6\",
        \"twig/twig\": \"<1.34|>=2.0,<2.4\"
    },
    \"suggest\": {
        \"doctrine/orm\": \"The Doctrine ORM integration is optional in the bundle.\",
        \"symfony/web-profiler-bundle\": \"To use the data collector.\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Bundle\\\\DoctrineBundle\\\\\": \"\" }
    },
    \"autoload-dev\": {
        \"psr-4\": { \"\": \"Tests/DependencyInjection\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.0.x-dev\"
        }
    }
}
", "@app/vendor/doctrine/doctrine-bundle/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\composer.json");
    }
}
