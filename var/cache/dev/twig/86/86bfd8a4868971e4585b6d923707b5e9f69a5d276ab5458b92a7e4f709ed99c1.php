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

/* @app/vendor/twig/extra-bundle/composer.json */
class __TwigTemplate_a752d95bf8689d1e6a3310b01990bcce510cbf18eb350195031ab565b118875a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/extra-bundle/composer.json"));

        // line 1
        echo "{
    \"name\": \"twig/extra-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"A Symfony bundle for extra Twig extensions\",
    \"keywords\": [\"twig\", \"extra\", \"bundle\"],
    \"homepage\": \"https://twig.symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\",
            \"homepage\": \"http://fabien.potencier.org\",
            \"role\": \"Lead Developer\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1.3\",
        \"symfony/framework-bundle\": \"^4.3|^5.0\",
        \"symfony/twig-bundle\": \"^4.3|^5.0\",
        \"twig/twig\": \"^2.4|^3.0\"
    },
    \"require-dev\": {
        \"twig/cssinliner-extra\": \"^2.12|^3.0\",
        \"twig/html-extra\": \"^2.12|^3.0\",
        \"twig/inky-extra\": \"^2.12|^3.0\",
        \"twig/intl-extra\": \"^2.12|^3.0\",
        \"twig/markdown-extra\": \"^2.12|^3.0\"
    },
    \"autoload\": {
        \"psr-4\" : {
            \"Twig\\\\Extra\\\\TwigExtraBundle\\\\\" : \"src/\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\" : {
            \"Twig\\\\Extra\\\\TwigExtraBundle\\\\Tests\\\\\" : \"tests/\"
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
        return "@app/vendor/twig/extra-bundle/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"twig/extra-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"A Symfony bundle for extra Twig extensions\",
    \"keywords\": [\"twig\", \"extra\", \"bundle\"],
    \"homepage\": \"https://twig.symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Fabien Potencier\",
            \"email\": \"fabien@symfony.com\",
            \"homepage\": \"http://fabien.potencier.org\",
            \"role\": \"Lead Developer\"
        }
    ],
    \"require\": {
        \"php\": \"^7.1.3\",
        \"symfony/framework-bundle\": \"^4.3|^5.0\",
        \"symfony/twig-bundle\": \"^4.3|^5.0\",
        \"twig/twig\": \"^2.4|^3.0\"
    },
    \"require-dev\": {
        \"twig/cssinliner-extra\": \"^2.12|^3.0\",
        \"twig/html-extra\": \"^2.12|^3.0\",
        \"twig/inky-extra\": \"^2.12|^3.0\",
        \"twig/intl-extra\": \"^2.12|^3.0\",
        \"twig/markdown-extra\": \"^2.12|^3.0\"
    },
    \"autoload\": {
        \"psr-4\" : {
            \"Twig\\\\Extra\\\\TwigExtraBundle\\\\\" : \"src/\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\" : {
            \"Twig\\\\Extra\\\\TwigExtraBundle\\\\Tests\\\\\" : \"tests/\"
        }
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"3.0-dev\"
        }
    }
}
", "@app/vendor/twig/extra-bundle/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\extra-bundle\\composer.json");
    }
}
