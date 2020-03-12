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

/* @app/vendor/symfony/polyfill-intl-idn/composer.json */
class __TwigTemplate_94fb2a6598eeb6f94cd7e317c9e6ba43fa2278cf84d12b52d321fc607cd64f74 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/polyfill-intl-idn/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/polyfill-intl-idn\",
    \"type\": \"library\",
    \"description\": \"Symfony polyfill for intl's idn_to_ascii and idn_to_utf8 functions\",
    \"keywords\": [\"polyfill\", \"shim\", \"compatibility\", \"portable\", \"intl\", \"idn\"],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Laurent Bassin\",
            \"email\": \"laurent@bassin.info\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \">=5.3.3\",
        \"symfony/polyfill-mbstring\": \"^1.3\",
        \"symfony/polyfill-php72\": \"^1.10\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Polyfill\\\\Intl\\\\Idn\\\\\": \"\" },
        \"files\": [ \"bootstrap.php\" ]
    },
    \"suggest\": {
        \"ext-intl\": \"For best performance\"
    },
    \"minimum-stability\": \"dev\",
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.14-dev\"
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/polyfill-intl-idn/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/polyfill-intl-idn\",
    \"type\": \"library\",
    \"description\": \"Symfony polyfill for intl's idn_to_ascii and idn_to_utf8 functions\",
    \"keywords\": [\"polyfill\", \"shim\", \"compatibility\", \"portable\", \"intl\", \"idn\"],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Laurent Bassin\",
            \"email\": \"laurent@bassin.info\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \">=5.3.3\",
        \"symfony/polyfill-mbstring\": \"^1.3\",
        \"symfony/polyfill-php72\": \"^1.10\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Polyfill\\\\Intl\\\\Idn\\\\\": \"\" },
        \"files\": [ \"bootstrap.php\" ]
    },
    \"suggest\": {
        \"ext-intl\": \"For best performance\"
    },
    \"minimum-stability\": \"dev\",
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.14-dev\"
        }
    }
}
", "@app/vendor/symfony/polyfill-intl-idn/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\polyfill-intl-idn\\composer.json");
    }
}
