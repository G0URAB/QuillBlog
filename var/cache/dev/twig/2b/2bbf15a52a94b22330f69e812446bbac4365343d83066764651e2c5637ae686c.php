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

/* @app/vendor/twig/twig/composer.json */
class __TwigTemplate_8cb84f3706b289811c7213ae58a5b7b4c642fc56fc4a13a05ab89fb9fe40d26e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/composer.json"));

        // line 1
        echo "{
    \"name\": \"twig/twig\",
    \"type\": \"library\",
    \"description\": \"Twig, the flexible, fast, and secure template language for PHP\",
    \"keywords\": [\"templating\"],
    \"homepage\": \"https://twig.symfony.com\",
    \"license\": \"BSD-3-Clause\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\",
            \"homepage\": \"http://fabien.potencier.org\",
            \"role\": \"Lead Developer\"
        },
        {
            \"name\": \"Twig Team\",
            \"role\": \"Contributors\"
        },
        {
            \"name\": \"Armin Ronacher\",
            \"email\": \"armin.ronacher@active-4.com\",
            \"role\": \"Project Founder\"
        }
    ],
    \"require\": {
        \"php\": \"^7.2.5\",
        \"symfony/polyfill-mbstring\": \"^1.3\",
        \"symfony/polyfill-ctype\": \"^1.8\"
    },
    \"require-dev\": {
        \"symfony/phpunit-bridge\": \"^4.4|^5.0\",
        \"psr/container\": \"^1.0\"
    },
    \"autoload\": {
        \"psr-4\" : {
            \"Twig\\\\\" : \"src/\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\" : {
            \"Twig\\\\Tests\\\\\" : \"tests/\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"3.0-dev\"
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"twig/twig\",
    \"type\": \"library\",
    \"description\": \"Twig, the flexible, fast, and secure template language for PHP\",
    \"keywords\": [\"templating\"],
    \"homepage\": \"https://twig.symfony.com\",
    \"license\": \"BSD-3-Clause\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\",
            \"homepage\": \"http://fabien.potencier.org\",
            \"role\": \"Lead Developer\"
        },
        {
            \"name\": \"Twig Team\",
            \"role\": \"Contributors\"
        },
        {
            \"name\": \"Armin Ronacher\",
            \"email\": \"armin.ronacher@active-4.com\",
            \"role\": \"Project Founder\"
        }
    ],
    \"require\": {
        \"php\": \"^7.2.5\",
        \"symfony/polyfill-mbstring\": \"^1.3\",
        \"symfony/polyfill-ctype\": \"^1.8\"
    },
    \"require-dev\": {
        \"symfony/phpunit-bridge\": \"^4.4|^5.0\",
        \"psr/container\": \"^1.0\"
    },
    \"autoload\": {
        \"psr-4\" : {
            \"Twig\\\\\" : \"src/\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\" : {
            \"Twig\\\\Tests\\\\\" : \"tests/\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"3.0-dev\"
        }
    }
}
", "@app/vendor/twig/twig/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\composer.json");
    }
}
