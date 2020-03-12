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

/* @app/vendor/doctrine/dbal/composer.json */
class __TwigTemplate_c3ba4d180543f7c14c77b45bbbd5bbf956efcb8f9232c64a166df37c4ed7b82f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/composer.json"));

        // line 1
        echo "{
    \"name\": \"doctrine/dbal\",
    \"type\": \"library\",
    \"description\": \"Powerful PHP database abstraction layer (DBAL) with many features for database schema introspection and management.\",
    \"keywords\": [
        \"abstraction\",
        \"database\",
        \"dbal\",
        \"db2\",
        \"mariadb\",
        \"mssql\",
        \"mysql\",
        \"pgsql\",
        \"postgresql\",
        \"oci8\",
        \"oracle\",
        \"pdo\",
        \"queryobject\",
        \"sasql\",
        \"sql\",
        \"sqlanywhere\",
        \"sqlite\",
        \"sqlserver\",
        \"sqlsrv\"
    ],
    \"homepage\": \"https://www.doctrine-project.org/projects/dbal.html\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Guilherme Blanco\", \"email\": \"guilhermeblanco@gmail.com\"},
        {\"name\": \"Roman Borschel\", \"email\": \"roman@code-factory.org\"},
        {\"name\": \"Benjamin Eberlei\", \"email\": \"kontakt@beberlei.de\"},
        {\"name\": \"Jonathan Wage\", \"email\": \"jonwage@gmail.com\"}
    ],
    \"require\": {
        \"php\": \"^7.2\",
        \"ext-pdo\": \"*\",
        \"doctrine/cache\": \"^1.0\",
        \"doctrine/event-manager\": \"^1.0\"
    },
    \"require-dev\": {
        \"doctrine/coding-standard\": \"^6.0\",
        \"jetbrains/phpstorm-stubs\": \"^2019.1\",
        \"phpstan/phpstan\": \"^0.11.3\",
        \"phpunit/phpunit\": \"^8.4.1\",
        \"symfony/console\": \"^2.0.5|^3.0|^4.0|^5.0\"
    },
    \"suggest\": {
        \"symfony/console\": \"For helpful console commands such as SQL execution and import of files.\"
    },
    \"bin\": [\"bin/doctrine-dbal\"],
    \"config\": {
        \"sort-packages\": true
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\DBAL\\\\\": \"lib/Doctrine/DBAL\" }
    },
    \"autoload-dev\": {
        \"psr-4\": { \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine/Tests\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.10.x-dev\",
            \"dev-develop\": \"3.0.x-dev\"
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"doctrine/dbal\",
    \"type\": \"library\",
    \"description\": \"Powerful PHP database abstraction layer (DBAL) with many features for database schema introspection and management.\",
    \"keywords\": [
        \"abstraction\",
        \"database\",
        \"dbal\",
        \"db2\",
        \"mariadb\",
        \"mssql\",
        \"mysql\",
        \"pgsql\",
        \"postgresql\",
        \"oci8\",
        \"oracle\",
        \"pdo\",
        \"queryobject\",
        \"sasql\",
        \"sql\",
        \"sqlanywhere\",
        \"sqlite\",
        \"sqlserver\",
        \"sqlsrv\"
    ],
    \"homepage\": \"https://www.doctrine-project.org/projects/dbal.html\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Guilherme Blanco\", \"email\": \"guilhermeblanco@gmail.com\"},
        {\"name\": \"Roman Borschel\", \"email\": \"roman@code-factory.org\"},
        {\"name\": \"Benjamin Eberlei\", \"email\": \"kontakt@beberlei.de\"},
        {\"name\": \"Jonathan Wage\", \"email\": \"jonwage@gmail.com\"}
    ],
    \"require\": {
        \"php\": \"^7.2\",
        \"ext-pdo\": \"*\",
        \"doctrine/cache\": \"^1.0\",
        \"doctrine/event-manager\": \"^1.0\"
    },
    \"require-dev\": {
        \"doctrine/coding-standard\": \"^6.0\",
        \"jetbrains/phpstorm-stubs\": \"^2019.1\",
        \"phpstan/phpstan\": \"^0.11.3\",
        \"phpunit/phpunit\": \"^8.4.1\",
        \"symfony/console\": \"^2.0.5|^3.0|^4.0|^5.0\"
    },
    \"suggest\": {
        \"symfony/console\": \"For helpful console commands such as SQL execution and import of files.\"
    },
    \"bin\": [\"bin/doctrine-dbal\"],
    \"config\": {
        \"sort-packages\": true
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\DBAL\\\\\": \"lib/Doctrine/DBAL\" }
    },
    \"autoload-dev\": {
        \"psr-4\": { \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine/Tests\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"2.10.x-dev\",
            \"dev-develop\": \"3.0.x-dev\"
        }
    }
}
", "@app/vendor/doctrine/dbal/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\composer.json");
    }
}
