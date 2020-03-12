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

/* @app/vendor/symfony/var-dumper/composer.json */
class __TwigTemplate_fec16e7dfda052f0f5c6663ac57fdaeabdcdc363f5072e47956db20f8ca73bca extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/var-dumper/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/var-dumper\",
    \"type\": \"library\",
    \"description\": \"Symfony mechanism for exploring and dumping PHP variables\",
    \"keywords\": [\"dump\", \"debug\"],
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
        \"php\": \"^7.2.5\",
        \"symfony/polyfill-mbstring\": \"~1.0\"
    },
    \"require-dev\": {
        \"ext-iconv\": \"*\",
        \"symfony/console\": \"^4.4|^5.0\",
        \"symfony/process\": \"^4.4|^5.0\",
        \"twig/twig\": \"^2.4|^3.0\"
    },
    \"conflict\": {
        \"phpunit/phpunit\": \"<5.4.3\",
        \"symfony/console\": \"<4.4\"
    },
    \"suggest\": {
        \"ext-iconv\": \"To convert non-UTF-8 strings to UTF-8 (or symfony/polyfill-iconv in case ext-iconv cannot be used).\",
        \"ext-intl\": \"To show region name in time zone dump\",
        \"symfony/console\": \"To use the ServerDumpCommand and/or the bin/var-dump-server script\"
    },
    \"autoload\": {
        \"files\": [ \"Resources/functions/dump.php\" ],
        \"psr-4\": { \"Symfony\\\\Component\\\\VarDumper\\\\\": \"\" },
        \"exclude-from-classmap\": [
            \"/Tests/\"
        ]
    },
    \"bin\": [
        \"Resources/bin/var-dump-server\"
    ],
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
        return "@app/vendor/symfony/var-dumper/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/var-dumper\",
    \"type\": \"library\",
    \"description\": \"Symfony mechanism for exploring and dumping PHP variables\",
    \"keywords\": [\"dump\", \"debug\"],
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
        \"php\": \"^7.2.5\",
        \"symfony/polyfill-mbstring\": \"~1.0\"
    },
    \"require-dev\": {
        \"ext-iconv\": \"*\",
        \"symfony/console\": \"^4.4|^5.0\",
        \"symfony/process\": \"^4.4|^5.0\",
        \"twig/twig\": \"^2.4|^3.0\"
    },
    \"conflict\": {
        \"phpunit/phpunit\": \"<5.4.3\",
        \"symfony/console\": \"<4.4\"
    },
    \"suggest\": {
        \"ext-iconv\": \"To convert non-UTF-8 strings to UTF-8 (or symfony/polyfill-iconv in case ext-iconv cannot be used).\",
        \"ext-intl\": \"To show region name in time zone dump\",
        \"symfony/console\": \"To use the ServerDumpCommand and/or the bin/var-dump-server script\"
    },
    \"autoload\": {
        \"files\": [ \"Resources/functions/dump.php\" ],
        \"psr-4\": { \"Symfony\\\\Component\\\\VarDumper\\\\\": \"\" },
        \"exclude-from-classmap\": [
            \"/Tests/\"
        ]
    },
    \"bin\": [
        \"Resources/bin/var-dump-server\"
    ],
    \"minimum-stability\": \"dev\",
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"5.0-dev\"
        }
    }
}
", "@app/vendor/symfony/var-dumper/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\var-dumper\\composer.json");
    }
}
