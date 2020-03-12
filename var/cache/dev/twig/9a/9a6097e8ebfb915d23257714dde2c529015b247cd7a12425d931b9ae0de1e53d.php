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

/* @app/vendor/symfony/http-kernel/composer.json */
class __TwigTemplate_9fd37542deb414b7f4cbea23b45742bcc74a157957050a8634a844e661352596 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/http-kernel\",
    \"type\": \"library\",
    \"description\": \"Symfony HttpKernel Component\",
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
        \"symfony/error-handler\": \"^4.4|^5.0\",
        \"symfony/event-dispatcher\": \"^5.0\",
        \"symfony/http-foundation\": \"^4.4|^5.0\",
        \"symfony/polyfill-ctype\": \"^1.8\",
        \"symfony/polyfill-php73\": \"^1.9\",
        \"psr/log\": \"~1.0\"
    },
    \"require-dev\": {
        \"symfony/browser-kit\": \"^4.4|^5.0\",
        \"symfony/config\": \"^5.0\",
        \"symfony/console\": \"^4.4|^5.0\",
        \"symfony/css-selector\": \"^4.4|^5.0\",
        \"symfony/dependency-injection\": \"^4.4|^5.0\",
        \"symfony/dom-crawler\": \"^4.4|^5.0\",
        \"symfony/expression-language\": \"^4.4|^5.0\",
        \"symfony/finder\": \"^4.4|^5.0\",
        \"symfony/process\": \"^4.4|^5.0\",
        \"symfony/routing\": \"^4.4|^5.0\",
        \"symfony/stopwatch\": \"^4.4|^5.0\",
        \"symfony/translation\": \"^4.4|^5.0\",
        \"symfony/translation-contracts\": \"^1.1|^2\",
        \"psr/cache\": \"~1.0\",
        \"twig/twig\": \"^2.4|^3.0\"
    },
    \"provide\": {
        \"psr/log-implementation\": \"1.0\"
    },
    \"conflict\": {
        \"symfony/browser-kit\": \"<4.4\",
        \"symfony/cache\": \"<5.0\",
        \"symfony/config\": \"<5.0\",
        \"symfony/form\": \"<5.0\",
        \"symfony/dependency-injection\": \"<4.4\",
        \"symfony/doctrine-bridge\": \"<5.0\",
        \"symfony/http-client\": \"<5.0\",
        \"symfony/mailer\": \"<5.0\",
        \"symfony/messenger\": \"<5.0\",
        \"symfony/translation\": \"<5.0\",
        \"symfony/twig-bridge\": \"<5.0\",
        \"symfony/validator\": \"<5.0\",
        \"twig/twig\": \"<2.4\"
    },
    \"suggest\": {
        \"symfony/browser-kit\": \"\",
        \"symfony/config\": \"\",
        \"symfony/console\": \"\",
        \"symfony/dependency-injection\": \"\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\HttpKernel\\\\\": \"\" },
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
        return "@app/vendor/symfony/http-kernel/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/http-kernel\",
    \"type\": \"library\",
    \"description\": \"Symfony HttpKernel Component\",
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
        \"symfony/error-handler\": \"^4.4|^5.0\",
        \"symfony/event-dispatcher\": \"^5.0\",
        \"symfony/http-foundation\": \"^4.4|^5.0\",
        \"symfony/polyfill-ctype\": \"^1.8\",
        \"symfony/polyfill-php73\": \"^1.9\",
        \"psr/log\": \"~1.0\"
    },
    \"require-dev\": {
        \"symfony/browser-kit\": \"^4.4|^5.0\",
        \"symfony/config\": \"^5.0\",
        \"symfony/console\": \"^4.4|^5.0\",
        \"symfony/css-selector\": \"^4.4|^5.0\",
        \"symfony/dependency-injection\": \"^4.4|^5.0\",
        \"symfony/dom-crawler\": \"^4.4|^5.0\",
        \"symfony/expression-language\": \"^4.4|^5.0\",
        \"symfony/finder\": \"^4.4|^5.0\",
        \"symfony/process\": \"^4.4|^5.0\",
        \"symfony/routing\": \"^4.4|^5.0\",
        \"symfony/stopwatch\": \"^4.4|^5.0\",
        \"symfony/translation\": \"^4.4|^5.0\",
        \"symfony/translation-contracts\": \"^1.1|^2\",
        \"psr/cache\": \"~1.0\",
        \"twig/twig\": \"^2.4|^3.0\"
    },
    \"provide\": {
        \"psr/log-implementation\": \"1.0\"
    },
    \"conflict\": {
        \"symfony/browser-kit\": \"<4.4\",
        \"symfony/cache\": \"<5.0\",
        \"symfony/config\": \"<5.0\",
        \"symfony/form\": \"<5.0\",
        \"symfony/dependency-injection\": \"<4.4\",
        \"symfony/doctrine-bridge\": \"<5.0\",
        \"symfony/http-client\": \"<5.0\",
        \"symfony/mailer\": \"<5.0\",
        \"symfony/messenger\": \"<5.0\",
        \"symfony/translation\": \"<5.0\",
        \"symfony/twig-bridge\": \"<5.0\",
        \"symfony/validator\": \"<5.0\",
        \"twig/twig\": \"<2.4\"
    },
    \"suggest\": {
        \"symfony/browser-kit\": \"\",
        \"symfony/config\": \"\",
        \"symfony/console\": \"\",
        \"symfony/dependency-injection\": \"\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\HttpKernel\\\\\": \"\" },
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
", "@app/vendor/symfony/http-kernel/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\composer.json");
    }
}
