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

/* @app/vendor/symfony/mime/composer.json */
class __TwigTemplate_f8dde5bc3e34ac5a0cb284658a16baadfa0ccc4830d8f98e39fb32c44926663f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/mime\",
    \"type\": \"library\",
    \"description\": \"A library to manipulate MIME messages\",
    \"keywords\": [\"mime\", \"mime-type\"],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.2.5\",
        \"symfony/polyfill-intl-idn\": \"^1.10\",
        \"symfony/polyfill-mbstring\": \"^1.0\"
    },
    \"require-dev\": {
        \"egulias/email-validator\": \"^2.1.10\",
        \"symfony/dependency-injection\": \"^4.4|^5.0\"
    },
    \"conflict\": {
        \"symfony/mailer\": \"<4.4\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Mime\\\\\": \"\" },
        \"exclude-from-classmap\": [
            \"/Tests/\"
        ]
    },
    \"minimum-stability\": \"dev\",
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"5.0-dev\"
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/mime\",
    \"type\": \"library\",
    \"description\": \"A library to manipulate MIME messages\",
    \"keywords\": [\"mime\", \"mime-type\"],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \"^7.2.5\",
        \"symfony/polyfill-intl-idn\": \"^1.10\",
        \"symfony/polyfill-mbstring\": \"^1.0\"
    },
    \"require-dev\": {
        \"egulias/email-validator\": \"^2.1.10\",
        \"symfony/dependency-injection\": \"^4.4|^5.0\"
    },
    \"conflict\": {
        \"symfony/mailer\": \"<4.4\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Mime\\\\\": \"\" },
        \"exclude-from-classmap\": [
            \"/Tests/\"
        ]
    },
    \"minimum-stability\": \"dev\",
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"5.0-dev\"
        }
    }
}
", "@app/vendor/symfony/mime/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\composer.json");
    }
}
