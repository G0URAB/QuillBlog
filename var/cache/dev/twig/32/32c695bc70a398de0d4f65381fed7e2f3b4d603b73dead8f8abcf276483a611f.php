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

/* @app/vendor/doctrine/orm/composer.json */
class __TwigTemplate_369485209b2e5499e1b00b641cf36dbe137e4d5702a8efe371fcef1014bde571 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/composer.json"));

        // line 1
        echo "{
    \"name\": \"doctrine/orm\",
    \"type\": \"library\",
    \"description\": \"Object-Relational-Mapper for PHP\",
    \"keywords\": [\"orm\", \"database\"],
    \"homepage\": \"https://www.doctrine-project.org/projects/orm.html\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Guilherme Blanco\", \"email\": \"guilhermeblanco@gmail.com\"},
        {\"name\": \"Roman Borschel\", \"email\": \"roman@code-factory.org\"},
        {\"name\": \"Benjamin Eberlei\", \"email\": \"kontakt@beberlei.de\"},
        {\"name\": \"Jonathan Wage\", \"email\": \"jonwage@gmail.com\"},
        {\"name\": \"Marco Pivetta\", \"email\": \"ocramius@gmail.com\"}
    ],
    \"config\": {
        \"sort-packages\": true
    },
    \"require\": {
        \"php\": \"^7.1\",
        \"ext-pdo\": \"*\",
        \"doctrine/annotations\": \"^1.8\",
        \"doctrine/cache\": \"^1.9.1\",
        \"doctrine/collections\": \"^1.5\",
        \"doctrine/common\": \"^2.11\",
        \"doctrine/dbal\": \"^2.9.3\",
        \"doctrine/event-manager\": \"^1.1\",
        \"doctrine/instantiator\": \"^1.3\",
        \"doctrine/persistence\": \"^1.2\",
        \"ocramius/package-versions\": \"^1.2\",
        \"symfony/console\": \"^3.0|^4.0|^5.0\"
    },
    \"require-dev\": {
        \"doctrine/coding-standard\": \"^5.0\",
        \"phpunit/phpunit\": \"^7.5\",
        \"symfony/yaml\": \"^3.4|^4.0|^5.0\"
    },
    \"suggest\": {
        \"symfony/yaml\": \"If you want to use YAML Metadata Mapping Driver\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\ORM\\\\\": \"lib/Doctrine/ORM\" }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine/Tests\",
            \"Doctrine\\\\Performance\\\\\": \"tests/Doctrine/Performance\"
        }
    },
    \"bin\": [\"bin/doctrine\"],
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.7.x-dev\"
        }
    },
    \"archive\": {
        \"exclude\": [\"!vendor\", \"tests\", \"*phpunit.xml\", \".travis.yml\", \"build.xml\", \"build.properties\", \"composer.phar\", \"vendor/satooshi\", \"lib/vendor\", \"*.swp\"]
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"doctrine/orm\",
    \"type\": \"library\",
    \"description\": \"Object-Relational-Mapper for PHP\",
    \"keywords\": [\"orm\", \"database\"],
    \"homepage\": \"https://www.doctrine-project.org/projects/orm.html\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Guilherme Blanco\", \"email\": \"guilhermeblanco@gmail.com\"},
        {\"name\": \"Roman Borschel\", \"email\": \"roman@code-factory.org\"},
        {\"name\": \"Benjamin Eberlei\", \"email\": \"kontakt@beberlei.de\"},
        {\"name\": \"Jonathan Wage\", \"email\": \"jonwage@gmail.com\"},
        {\"name\": \"Marco Pivetta\", \"email\": \"ocramius@gmail.com\"}
    ],
    \"config\": {
        \"sort-packages\": true
    },
    \"require\": {
        \"php\": \"^7.1\",
        \"ext-pdo\": \"*\",
        \"doctrine/annotations\": \"^1.8\",
        \"doctrine/cache\": \"^1.9.1\",
        \"doctrine/collections\": \"^1.5\",
        \"doctrine/common\": \"^2.11\",
        \"doctrine/dbal\": \"^2.9.3\",
        \"doctrine/event-manager\": \"^1.1\",
        \"doctrine/instantiator\": \"^1.3\",
        \"doctrine/persistence\": \"^1.2\",
        \"ocramius/package-versions\": \"^1.2\",
        \"symfony/console\": \"^3.0|^4.0|^5.0\"
    },
    \"require-dev\": {
        \"doctrine/coding-standard\": \"^5.0\",
        \"phpunit/phpunit\": \"^7.5\",
        \"symfony/yaml\": \"^3.4|^4.0|^5.0\"
    },
    \"suggest\": {
        \"symfony/yaml\": \"If you want to use YAML Metadata Mapping Driver\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\ORM\\\\\": \"lib/Doctrine/ORM\" }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine/Tests\",
            \"Doctrine\\\\Performance\\\\\": \"tests/Doctrine/Performance\"
        }
    },
    \"bin\": [\"bin/doctrine\"],
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.7.x-dev\"
        }
    },
    \"archive\": {
        \"exclude\": [\"!vendor\", \"tests\", \"*phpunit.xml\", \".travis.yml\", \"build.xml\", \"build.properties\", \"composer.phar\", \"vendor/satooshi\", \"lib/vendor\", \"*.swp\"]
    }
}
", "@app/vendor/doctrine/orm/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\composer.json");
    }
}
