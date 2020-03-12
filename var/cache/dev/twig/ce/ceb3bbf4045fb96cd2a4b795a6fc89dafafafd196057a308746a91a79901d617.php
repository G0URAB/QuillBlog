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

/* @app/vendor/symfony/polyfill-php73/composer.json */
class __TwigTemplate_b5c4a8c6f8618e4bb60196883d72ba043da5ad672e2ca5e1f48e4e0729c447ac extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/polyfill-php73/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/polyfill-php73\",
    \"type\": \"library\",
    \"description\": \"Symfony polyfill backporting some PHP 7.3+ features to lower PHP versions\",
    \"keywords\": [\"polyfill\", \"shim\", \"compatibility\", \"portable\"],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Nicolas Grekas\",
            \"email\": \"p@tchwork.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \">=5.3.3\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Polyfill\\\\Php73\\\\\": \"\" },
        \"files\": [ \"bootstrap.php\" ],
        \"classmap\": [ \"Resources/stubs\" ]
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
        return "@app/vendor/symfony/polyfill-php73/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/polyfill-php73\",
    \"type\": \"library\",
    \"description\": \"Symfony polyfill backporting some PHP 7.3+ features to lower PHP versions\",
    \"keywords\": [\"polyfill\", \"shim\", \"compatibility\", \"portable\"],
    \"homepage\": \"https://symfony.com\",
    \"license\": \"MIT\",
    \"authors\": [
        {
            \"name\": \"Nicolas Grekas\",
            \"email\": \"p@tchwork.com\"
        },
        {
            \"name\": \"Symfony Community\",
            \"homepage\": \"https://symfony.com/contributors\"
        }
    ],
    \"require\": {
        \"php\": \">=5.3.3\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Polyfill\\\\Php73\\\\\": \"\" },
        \"files\": [ \"bootstrap.php\" ],
        \"classmap\": [ \"Resources/stubs\" ]
    },
    \"minimum-stability\": \"dev\",
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.14-dev\"
        }
    }
}
", "@app/vendor/symfony/polyfill-php73/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\polyfill-php73\\composer.json");
    }
}
