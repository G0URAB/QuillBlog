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

/* @app/vendor/symfony/console/composer.json */
class __TwigTemplate_339634c2fcda484cc57113f0a11ae76b072ba420e838484cd62f4b3bce8d30b1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/console\",
    \"type\": \"library\",
    \"description\": \"Symfony Console Component\",
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
        \"symfony/polyfill-mbstring\": \"~1.0\",
        \"symfony/polyfill-php73\": \"^1.8\",
        \"symfony/service-contracts\": \"^1.1|^2\"
    },
    \"require-dev\": {
        \"symfony/config\": \"^4.4|^5.0\",
        \"symfony/event-dispatcher\": \"^4.4|^5.0\",
        \"symfony/dependency-injection\": \"^4.4|^5.0\",
        \"symfony/lock\": \"^4.4|^5.0\",
        \"symfony/process\": \"^4.4|^5.0\",
        \"symfony/var-dumper\": \"^4.4|^5.0\",
        \"psr/log\": \"~1.0\"
    },
    \"provide\": {
        \"psr/log-implementation\": \"1.0\"
    },
    \"suggest\": {
        \"symfony/event-dispatcher\": \"\",
        \"symfony/lock\": \"\",
        \"symfony/process\": \"\",
        \"psr/log\": \"For using the console logger\"
    },
    \"conflict\": {
        \"symfony/dependency-injection\": \"<4.4\",
        \"symfony/event-dispatcher\": \"<4.4\",
        \"symfony/lock\": \"<4.4\",
        \"symfony/process\": \"<4.4\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Console\\\\\": \"\" },
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
        return "@app/vendor/symfony/console/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/console\",
    \"type\": \"library\",
    \"description\": \"Symfony Console Component\",
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
        \"symfony/polyfill-mbstring\": \"~1.0\",
        \"symfony/polyfill-php73\": \"^1.8\",
        \"symfony/service-contracts\": \"^1.1|^2\"
    },
    \"require-dev\": {
        \"symfony/config\": \"^4.4|^5.0\",
        \"symfony/event-dispatcher\": \"^4.4|^5.0\",
        \"symfony/dependency-injection\": \"^4.4|^5.0\",
        \"symfony/lock\": \"^4.4|^5.0\",
        \"symfony/process\": \"^4.4|^5.0\",
        \"symfony/var-dumper\": \"^4.4|^5.0\",
        \"psr/log\": \"~1.0\"
    },
    \"provide\": {
        \"psr/log-implementation\": \"1.0\"
    },
    \"suggest\": {
        \"symfony/event-dispatcher\": \"\",
        \"symfony/lock\": \"\",
        \"symfony/process\": \"\",
        \"psr/log\": \"For using the console logger\"
    },
    \"conflict\": {
        \"symfony/dependency-injection\": \"<4.4\",
        \"symfony/event-dispatcher\": \"<4.4\",
        \"symfony/lock\": \"<4.4\",
        \"symfony/process\": \"<4.4\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Console\\\\\": \"\" },
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
", "@app/vendor/symfony/console/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\composer.json");
    }
}
