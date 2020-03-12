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

/* @app/vendor/symfony/cache/composer.json */
class __TwigTemplate_32369ea9564165a292782666c337376f38f8c0bd5d307160066884ef63baf7b2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/cache/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/cache\",
    \"type\": \"library\",
    \"description\": \"Symfony Cache component with PSR-6, PSR-16, and tags\",
    \"keywords\": [\"caching\", \"psr6\"],
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
    \"provide\": {
        \"psr/cache-implementation\": \"1.0\",
        \"psr/simple-cache-implementation\": \"1.0\",
        \"symfony/cache-implementation\": \"1.0\"
    },
    \"require\": {
        \"php\": \"^7.2.5\",
        \"psr/cache\": \"~1.0\",
        \"psr/log\": \"~1.0\",
        \"symfony/cache-contracts\": \"^1.1.7|^2\",
        \"symfony/service-contracts\": \"^1.1|^2\",
        \"symfony/var-exporter\": \"^4.4|^5.0\"
    },
    \"require-dev\": {
        \"cache/integration-tests\": \"dev-master\",
        \"doctrine/cache\": \"~1.6\",
        \"doctrine/dbal\": \"~2.5\",
        \"predis/predis\": \"~1.1\",
        \"psr/simple-cache\": \"^1.0\",
        \"symfony/config\": \"^4.4|^5.0\",
        \"symfony/dependency-injection\": \"^4.4|^5.0\",
        \"symfony/var-dumper\": \"^4.4|^5.0\"
    },
    \"conflict\": {
        \"doctrine/dbal\": \"<2.5\",
        \"symfony/dependency-injection\": \"<4.4\",
        \"symfony/http-kernel\": \"<4.4\",
        \"symfony/var-dumper\": \"<4.4\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Cache\\\\\": \"\" },
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
        return "@app/vendor/symfony/cache/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/cache\",
    \"type\": \"library\",
    \"description\": \"Symfony Cache component with PSR-6, PSR-16, and tags\",
    \"keywords\": [\"caching\", \"psr6\"],
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
    \"provide\": {
        \"psr/cache-implementation\": \"1.0\",
        \"psr/simple-cache-implementation\": \"1.0\",
        \"symfony/cache-implementation\": \"1.0\"
    },
    \"require\": {
        \"php\": \"^7.2.5\",
        \"psr/cache\": \"~1.0\",
        \"psr/log\": \"~1.0\",
        \"symfony/cache-contracts\": \"^1.1.7|^2\",
        \"symfony/service-contracts\": \"^1.1|^2\",
        \"symfony/var-exporter\": \"^4.4|^5.0\"
    },
    \"require-dev\": {
        \"cache/integration-tests\": \"dev-master\",
        \"doctrine/cache\": \"~1.6\",
        \"doctrine/dbal\": \"~2.5\",
        \"predis/predis\": \"~1.1\",
        \"psr/simple-cache\": \"^1.0\",
        \"symfony/config\": \"^4.4|^5.0\",
        \"symfony/dependency-injection\": \"^4.4|^5.0\",
        \"symfony/var-dumper\": \"^4.4|^5.0\"
    },
    \"conflict\": {
        \"doctrine/dbal\": \"<2.5\",
        \"symfony/dependency-injection\": \"<4.4\",
        \"symfony/http-kernel\": \"<4.4\",
        \"symfony/var-dumper\": \"<4.4\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Cache\\\\\": \"\" },
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
", "@app/vendor/symfony/cache/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\cache\\composer.json");
    }
}
