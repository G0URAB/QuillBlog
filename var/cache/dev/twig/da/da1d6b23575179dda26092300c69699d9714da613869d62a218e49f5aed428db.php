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

/* @app/vendor/symfony/framework-bundle/composer.json */
class __TwigTemplate_e1b67ea096c2b8d24fbebbdb82d224df7fd51fdd16eb93859864490e1d60ab4d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/framework-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony FrameworkBundle\",
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
        \"ext-xml\": \"*\",
        \"symfony/cache\": \"^4.4|^5.0\",
        \"symfony/config\": \"^5.0\",
        \"symfony/dependency-injection\": \"^5.0.1\",
        \"symfony/error-handler\": \"^4.4.1|^5.0.1\",
        \"symfony/http-foundation\": \"^4.4|^5.0\",
        \"symfony/http-kernel\": \"^5.0\",
        \"symfony/polyfill-mbstring\": \"~1.0\",
        \"symfony/filesystem\": \"^4.4|^5.0\",
        \"symfony/finder\": \"^4.4|^5.0\",
        \"symfony/routing\": \"^5.0\"
    },
    \"require-dev\": {
        \"doctrine/annotations\": \"~1.7\",
        \"doctrine/cache\": \"~1.0\",
        \"symfony/asset\": \"^4.4|^5.0\",
        \"symfony/browser-kit\": \"^4.4|^5.0\",
        \"symfony/console\": \"^4.4|^5.0\",
        \"symfony/css-selector\": \"^4.4|^5.0\",
        \"symfony/dom-crawler\": \"^4.4|^5.0\",
        \"symfony/dotenv\": \"^4.4|^5.0\",
        \"symfony/polyfill-intl-icu\": \"~1.0\",
        \"symfony/form\": \"^4.4|^5.0\",
        \"symfony/expression-language\": \"^4.4|^5.0\",
        \"symfony/http-client\": \"^4.4|^5.0\",
        \"symfony/lock\": \"^4.4|^5.0\",
        \"symfony/mailer\": \"^4.4|^5.0\",
        \"symfony/messenger\": \"^4.4|^5.0\",
        \"symfony/mime\": \"^4.4|^5.0\",
        \"symfony/process\": \"^4.4|^5.0\",
        \"symfony/security-csrf\": \"^4.4|^5.0\",
        \"symfony/security-http\": \"^4.4|^5.0\",
        \"symfony/serializer\": \"^4.4|^5.0\",
        \"symfony/stopwatch\": \"^4.4|^5.0\",
        \"symfony/string\": \"~5.0.0\",
        \"symfony/translation\": \"^5.0\",
        \"symfony/twig-bundle\": \"^4.4|^5.0\",
        \"symfony/validator\": \"^4.4|^5.0\",
        \"symfony/workflow\": \"^4.4|^5.0\",
        \"symfony/yaml\": \"^4.4|^5.0\",
        \"symfony/property-info\": \"^4.4|^5.0\",
        \"symfony/web-link\": \"^4.4|^5.0\",
        \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
        \"paragonie/sodium_compat\": \"^1.8\",
        \"twig/twig\": \"^2.10|^3.0\"
    },
    \"conflict\": {
        \"doctrine/persistence\": \"<1.3\",
        \"phpdocumentor/reflection-docblock\": \"<3.0\",
        \"phpdocumentor/type-resolver\": \"<0.2.1\",
        \"phpunit/phpunit\": \"<5.4.3\",
        \"symfony/asset\": \"<4.4\",
        \"symfony/browser-kit\": \"<4.4\",
        \"symfony/console\": \"<4.4\",
        \"symfony/dotenv\": \"<4.4\",
        \"symfony/dom-crawler\": \"<4.4\",
        \"symfony/http-client\": \"<4.4\",
        \"symfony/form\": \"<4.4\",
        \"symfony/lock\": \"<4.4\",
        \"symfony/mailer\": \"<4.4\",
        \"symfony/messenger\": \"<4.4\",
        \"symfony/mime\": \"<4.4\",
        \"symfony/property-info\": \"<4.4\",
        \"symfony/serializer\": \"<4.4\",
        \"symfony/stopwatch\": \"<4.4\",
        \"symfony/translation\": \"<5.0\",
        \"symfony/twig-bridge\": \"<4.4\",
        \"symfony/twig-bundle\": \"<4.4\",
        \"symfony/validator\": \"<4.4\",
        \"symfony/web-profiler-bundle\": \"<4.4\",
        \"symfony/workflow\": \"<4.4\"
    },
    \"suggest\": {
        \"ext-apcu\": \"For best performance of the system caches\",
        \"symfony/console\": \"For using the console commands\",
        \"symfony/form\": \"For using forms\",
        \"symfony/serializer\": \"For using the serializer service\",
        \"symfony/validator\": \"For using validation\",
        \"symfony/yaml\": \"For using the debug:config and lint:yaml commands\",
        \"symfony/property-info\": \"For using the property_info service\",
        \"symfony/web-link\": \"For using web links, features such as preloading, prefetching or prerendering\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\FrameworkBundle\\\\\": \"\" },
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
        return "@app/vendor/symfony/framework-bundle/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/framework-bundle\",
    \"type\": \"symfony-bundle\",
    \"description\": \"Symfony FrameworkBundle\",
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
        \"ext-xml\": \"*\",
        \"symfony/cache\": \"^4.4|^5.0\",
        \"symfony/config\": \"^5.0\",
        \"symfony/dependency-injection\": \"^5.0.1\",
        \"symfony/error-handler\": \"^4.4.1|^5.0.1\",
        \"symfony/http-foundation\": \"^4.4|^5.0\",
        \"symfony/http-kernel\": \"^5.0\",
        \"symfony/polyfill-mbstring\": \"~1.0\",
        \"symfony/filesystem\": \"^4.4|^5.0\",
        \"symfony/finder\": \"^4.4|^5.0\",
        \"symfony/routing\": \"^5.0\"
    },
    \"require-dev\": {
        \"doctrine/annotations\": \"~1.7\",
        \"doctrine/cache\": \"~1.0\",
        \"symfony/asset\": \"^4.4|^5.0\",
        \"symfony/browser-kit\": \"^4.4|^5.0\",
        \"symfony/console\": \"^4.4|^5.0\",
        \"symfony/css-selector\": \"^4.4|^5.0\",
        \"symfony/dom-crawler\": \"^4.4|^5.0\",
        \"symfony/dotenv\": \"^4.4|^5.0\",
        \"symfony/polyfill-intl-icu\": \"~1.0\",
        \"symfony/form\": \"^4.4|^5.0\",
        \"symfony/expression-language\": \"^4.4|^5.0\",
        \"symfony/http-client\": \"^4.4|^5.0\",
        \"symfony/lock\": \"^4.4|^5.0\",
        \"symfony/mailer\": \"^4.4|^5.0\",
        \"symfony/messenger\": \"^4.4|^5.0\",
        \"symfony/mime\": \"^4.4|^5.0\",
        \"symfony/process\": \"^4.4|^5.0\",
        \"symfony/security-csrf\": \"^4.4|^5.0\",
        \"symfony/security-http\": \"^4.4|^5.0\",
        \"symfony/serializer\": \"^4.4|^5.0\",
        \"symfony/stopwatch\": \"^4.4|^5.0\",
        \"symfony/string\": \"~5.0.0\",
        \"symfony/translation\": \"^5.0\",
        \"symfony/twig-bundle\": \"^4.4|^5.0\",
        \"symfony/validator\": \"^4.4|^5.0\",
        \"symfony/workflow\": \"^4.4|^5.0\",
        \"symfony/yaml\": \"^4.4|^5.0\",
        \"symfony/property-info\": \"^4.4|^5.0\",
        \"symfony/web-link\": \"^4.4|^5.0\",
        \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
        \"paragonie/sodium_compat\": \"^1.8\",
        \"twig/twig\": \"^2.10|^3.0\"
    },
    \"conflict\": {
        \"doctrine/persistence\": \"<1.3\",
        \"phpdocumentor/reflection-docblock\": \"<3.0\",
        \"phpdocumentor/type-resolver\": \"<0.2.1\",
        \"phpunit/phpunit\": \"<5.4.3\",
        \"symfony/asset\": \"<4.4\",
        \"symfony/browser-kit\": \"<4.4\",
        \"symfony/console\": \"<4.4\",
        \"symfony/dotenv\": \"<4.4\",
        \"symfony/dom-crawler\": \"<4.4\",
        \"symfony/http-client\": \"<4.4\",
        \"symfony/form\": \"<4.4\",
        \"symfony/lock\": \"<4.4\",
        \"symfony/mailer\": \"<4.4\",
        \"symfony/messenger\": \"<4.4\",
        \"symfony/mime\": \"<4.4\",
        \"symfony/property-info\": \"<4.4\",
        \"symfony/serializer\": \"<4.4\",
        \"symfony/stopwatch\": \"<4.4\",
        \"symfony/translation\": \"<5.0\",
        \"symfony/twig-bridge\": \"<4.4\",
        \"symfony/twig-bundle\": \"<4.4\",
        \"symfony/validator\": \"<4.4\",
        \"symfony/web-profiler-bundle\": \"<4.4\",
        \"symfony/workflow\": \"<4.4\"
    },
    \"suggest\": {
        \"ext-apcu\": \"For best performance of the system caches\",
        \"symfony/console\": \"For using the console commands\",
        \"symfony/form\": \"For using forms\",
        \"symfony/serializer\": \"For using the serializer service\",
        \"symfony/validator\": \"For using validation\",
        \"symfony/yaml\": \"For using the debug:config and lint:yaml commands\",
        \"symfony/property-info\": \"For using the property_info service\",
        \"symfony/web-link\": \"For using web links, features such as preloading, prefetching or prerendering\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bundle\\\\FrameworkBundle\\\\\": \"\" },
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
", "@app/vendor/symfony/framework-bundle/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\composer.json");
    }
}
