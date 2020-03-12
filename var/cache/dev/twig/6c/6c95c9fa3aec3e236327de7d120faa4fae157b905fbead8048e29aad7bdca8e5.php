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

/* @app/vendor/symfony/event-dispatcher/composer.json */
class __TwigTemplate_3777bf0cbd7b1212ad6e33558b3ffc8cea5f5c89691eff0d3ec04ac837e2993a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/event-dispatcher/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/event-dispatcher\",
    \"type\": \"library\",
    \"description\": \"Symfony EventDispatcher Component\",
    \"keywords\": [],
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
        \"symfony/event-dispatcher-contracts\": \"^2\"
    },
    \"require-dev\": {
        \"symfony/dependency-injection\": \"^4.4|^5.0\",
        \"symfony/expression-language\": \"^4.4|^5.0\",
        \"symfony/config\": \"^4.4|^5.0\",
        \"symfony/http-foundation\": \"^4.4|^5.0\",
        \"symfony/service-contracts\": \"^1.1|^2\",
        \"symfony/stopwatch\": \"^4.4|^5.0\",
        \"psr/log\": \"~1.0\"
    },
    \"conflict\": {
        \"symfony/dependency-injection\": \"<4.4\"
    },
    \"provide\": {
        \"psr/event-dispatcher-implementation\": \"1.0\",
        \"symfony/event-dispatcher-implementation\": \"2.0\"
    },
    \"suggest\": {
        \"symfony/dependency-injection\": \"\",
        \"symfony/http-kernel\": \"\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\EventDispatcher\\\\\": \"\" },
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
        return "@app/vendor/symfony/event-dispatcher/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/event-dispatcher\",
    \"type\": \"library\",
    \"description\": \"Symfony EventDispatcher Component\",
    \"keywords\": [],
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
        \"symfony/event-dispatcher-contracts\": \"^2\"
    },
    \"require-dev\": {
        \"symfony/dependency-injection\": \"^4.4|^5.0\",
        \"symfony/expression-language\": \"^4.4|^5.0\",
        \"symfony/config\": \"^4.4|^5.0\",
        \"symfony/http-foundation\": \"^4.4|^5.0\",
        \"symfony/service-contracts\": \"^1.1|^2\",
        \"symfony/stopwatch\": \"^4.4|^5.0\",
        \"psr/log\": \"~1.0\"
    },
    \"conflict\": {
        \"symfony/dependency-injection\": \"<4.4\"
    },
    \"provide\": {
        \"psr/event-dispatcher-implementation\": \"1.0\",
        \"symfony/event-dispatcher-implementation\": \"2.0\"
    },
    \"suggest\": {
        \"symfony/dependency-injection\": \"\",
        \"symfony/http-kernel\": \"\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\EventDispatcher\\\\\": \"\" },
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
", "@app/vendor/symfony/event-dispatcher/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\event-dispatcher\\composer.json");
    }
}
