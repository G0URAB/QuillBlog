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

/* @app/vendor/doctrine/cache/composer.json */
class __TwigTemplate_95e19bb430040c5808ed9be92cebadc44ea7613027067acf377b4e52a2b05bc2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/cache/composer.json"));

        // line 1
        echo "{
    \"name\": \"doctrine/cache\",
    \"type\": \"library\",
    \"description\": \"PHP Doctrine Cache library is a popular cache implementation that supports many different drivers such as redis, memcache, apc, mongodb and others.\",
    \"keywords\": [
        \"php\",
        \"cache\",
        \"caching\",
        \"abstraction\",
        \"redis\",
        \"memcached\",
        \"couchdb\",
        \"xcache\",
        \"apcu\"
    ],
    \"homepage\": \"https://www.doctrine-project.org/projects/cache.html\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Guilherme Blanco\", \"email\": \"guilhermeblanco@gmail.com\"},
        {\"name\": \"Roman Borschel\", \"email\": \"roman@code-factory.org\"},
        {\"name\": \"Benjamin Eberlei\", \"email\": \"kontakt@beberlei.de\"},
        {\"name\": \"Jonathan Wage\", \"email\": \"jonwage@gmail.com\"},
        {\"name\": \"Johannes Schmitt\", \"email\": \"schmittjoh@gmail.com\"}
    ],
    \"require\": {
        \"php\": \"~7.1\"
    },
    \"require-dev\": {
        \"alcaeus/mongo-php-adapter\": \"^1.1\",
        \"mongodb/mongodb\": \"^1.1\",
        \"phpunit/phpunit\": \"^7.0\",
        \"predis/predis\":   \"~1.0\",
        \"doctrine/coding-standard\": \"^6.0\"
    },
    \"suggest\": {
        \"alcaeus/mongo-php-adapter\": \"Required to use legacy MongoDB driver\"
    },
    \"conflict\": {
        \"doctrine/common\": \">2.2,<2.4\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Common\\\\Cache\\\\\": \"lib/Doctrine/Common/Cache\" }
    },
    \"autoload-dev\": {
        \"psr-4\": { \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine/Tests\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.9.x-dev\"
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/cache/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"doctrine/cache\",
    \"type\": \"library\",
    \"description\": \"PHP Doctrine Cache library is a popular cache implementation that supports many different drivers such as redis, memcache, apc, mongodb and others.\",
    \"keywords\": [
        \"php\",
        \"cache\",
        \"caching\",
        \"abstraction\",
        \"redis\",
        \"memcached\",
        \"couchdb\",
        \"xcache\",
        \"apcu\"
    ],
    \"homepage\": \"https://www.doctrine-project.org/projects/cache.html\",
    \"license\": \"MIT\",
    \"authors\": [
        {\"name\": \"Guilherme Blanco\", \"email\": \"guilhermeblanco@gmail.com\"},
        {\"name\": \"Roman Borschel\", \"email\": \"roman@code-factory.org\"},
        {\"name\": \"Benjamin Eberlei\", \"email\": \"kontakt@beberlei.de\"},
        {\"name\": \"Jonathan Wage\", \"email\": \"jonwage@gmail.com\"},
        {\"name\": \"Johannes Schmitt\", \"email\": \"schmittjoh@gmail.com\"}
    ],
    \"require\": {
        \"php\": \"~7.1\"
    },
    \"require-dev\": {
        \"alcaeus/mongo-php-adapter\": \"^1.1\",
        \"mongodb/mongodb\": \"^1.1\",
        \"phpunit/phpunit\": \"^7.0\",
        \"predis/predis\":   \"~1.0\",
        \"doctrine/coding-standard\": \"^6.0\"
    },
    \"suggest\": {
        \"alcaeus/mongo-php-adapter\": \"Required to use legacy MongoDB driver\"
    },
    \"conflict\": {
        \"doctrine/common\": \">2.2,<2.4\"
    },
    \"autoload\": {
        \"psr-4\": { \"Doctrine\\\\Common\\\\Cache\\\\\": \"lib/Doctrine/Common/Cache\" }
    },
    \"autoload-dev\": {
        \"psr-4\": { \"Doctrine\\\\Tests\\\\\": \"tests/Doctrine/Tests\" }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.9.x-dev\"
        }
    }
}
", "@app/vendor/doctrine/cache/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\cache\\composer.json");
    }
}
