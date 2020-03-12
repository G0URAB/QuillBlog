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

/* @app/vendor/symfony/twig-bridge/composer.json */
class __TwigTemplate_2d1d2ee89f814b62cfc0110fb79b5f32e0e19a500c2abec9fc58a14792f26330 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/twig-bridge\",
    \"type\": \"symfony-bridge\",
    \"description\": \"Symfony Twig Bridge\",
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
        \"symfony/translation-contracts\": \"^1.1|^2\",
        \"twig/twig\": \"^2.10|^3.0\"
    },
    \"require-dev\": {
        \"egulias/email-validator\": \"^2.1.10\",
        \"symfony/asset\": \"^4.4|^5.0\",
        \"symfony/dependency-injection\": \"^4.4|^5.0\",
        \"symfony/finder\": \"^4.4|^5.0\",
        \"symfony/form\": \"^5.0\",
        \"symfony/http-foundation\": \"^4.4|^5.0\",
        \"symfony/http-kernel\": \"^4.4|^5.0\",
        \"symfony/mime\": \"^4.4|^5.0\",
        \"symfony/polyfill-intl-icu\": \"~1.0\",
        \"symfony/routing\": \"^4.4|^5.0\",
        \"symfony/translation\": \"^5.0\",
        \"symfony/yaml\": \"^4.4|^5.0\",
        \"symfony/security-acl\": \"^2.8|^3.0\",
        \"symfony/security-core\": \"^4.4|^5.0\",
        \"symfony/security-csrf\": \"^4.4|^5.0\",
        \"symfony/security-http\": \"^4.4|^5.0\",
        \"symfony/stopwatch\": \"^4.4|^5.0\",
        \"symfony/console\": \"^4.4|^5.0\",
        \"symfony/expression-language\": \"^4.4|^5.0\",
        \"symfony/web-link\": \"^4.4|^5.0\",
        \"symfony/workflow\": \"^4.4|^5.0\",
        \"twig/cssinliner-extra\": \"^2.12\",
        \"twig/inky-extra\": \"^2.12\",
        \"twig/markdown-extra\": \"^2.12\"
    },
    \"conflict\": {
        \"symfony/console\": \"<4.4\",
        \"symfony/form\": \"<5.0\",
        \"symfony/http-foundation\": \"<4.4\",
        \"symfony/http-kernel\": \"<4.4\",
        \"symfony/translation\": \"<5.0\",
        \"symfony/workflow\": \"<4.4\"
    },
    \"suggest\": {
        \"symfony/finder\": \"\",
        \"symfony/asset\": \"For using the AssetExtension\",
        \"symfony/form\": \"For using the FormExtension\",
        \"symfony/http-kernel\": \"For using the HttpKernelExtension\",
        \"symfony/routing\": \"For using the RoutingExtension\",
        \"symfony/translation\": \"For using the TranslationExtension\",
        \"symfony/yaml\": \"For using the YamlExtension\",
        \"symfony/security-core\": \"For using the SecurityExtension\",
        \"symfony/security-csrf\": \"For using the CsrfExtension\",
        \"symfony/security-http\": \"For using the LogoutUrlExtension\",
        \"symfony/stopwatch\": \"For using the StopwatchExtension\",
        \"symfony/var-dumper\": \"For using the DumpExtension\",
        \"symfony/expression-language\": \"For using the ExpressionExtension\",
        \"symfony/web-link\": \"For using the WebLinkExtension\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bridge\\\\Twig\\\\\": \"\" },
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
        return "@app/vendor/symfony/twig-bridge/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/twig-bridge\",
    \"type\": \"symfony-bridge\",
    \"description\": \"Symfony Twig Bridge\",
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
        \"symfony/translation-contracts\": \"^1.1|^2\",
        \"twig/twig\": \"^2.10|^3.0\"
    },
    \"require-dev\": {
        \"egulias/email-validator\": \"^2.1.10\",
        \"symfony/asset\": \"^4.4|^5.0\",
        \"symfony/dependency-injection\": \"^4.4|^5.0\",
        \"symfony/finder\": \"^4.4|^5.0\",
        \"symfony/form\": \"^5.0\",
        \"symfony/http-foundation\": \"^4.4|^5.0\",
        \"symfony/http-kernel\": \"^4.4|^5.0\",
        \"symfony/mime\": \"^4.4|^5.0\",
        \"symfony/polyfill-intl-icu\": \"~1.0\",
        \"symfony/routing\": \"^4.4|^5.0\",
        \"symfony/translation\": \"^5.0\",
        \"symfony/yaml\": \"^4.4|^5.0\",
        \"symfony/security-acl\": \"^2.8|^3.0\",
        \"symfony/security-core\": \"^4.4|^5.0\",
        \"symfony/security-csrf\": \"^4.4|^5.0\",
        \"symfony/security-http\": \"^4.4|^5.0\",
        \"symfony/stopwatch\": \"^4.4|^5.0\",
        \"symfony/console\": \"^4.4|^5.0\",
        \"symfony/expression-language\": \"^4.4|^5.0\",
        \"symfony/web-link\": \"^4.4|^5.0\",
        \"symfony/workflow\": \"^4.4|^5.0\",
        \"twig/cssinliner-extra\": \"^2.12\",
        \"twig/inky-extra\": \"^2.12\",
        \"twig/markdown-extra\": \"^2.12\"
    },
    \"conflict\": {
        \"symfony/console\": \"<4.4\",
        \"symfony/form\": \"<5.0\",
        \"symfony/http-foundation\": \"<4.4\",
        \"symfony/http-kernel\": \"<4.4\",
        \"symfony/translation\": \"<5.0\",
        \"symfony/workflow\": \"<4.4\"
    },
    \"suggest\": {
        \"symfony/finder\": \"\",
        \"symfony/asset\": \"For using the AssetExtension\",
        \"symfony/form\": \"For using the FormExtension\",
        \"symfony/http-kernel\": \"For using the HttpKernelExtension\",
        \"symfony/routing\": \"For using the RoutingExtension\",
        \"symfony/translation\": \"For using the TranslationExtension\",
        \"symfony/yaml\": \"For using the YamlExtension\",
        \"symfony/security-core\": \"For using the SecurityExtension\",
        \"symfony/security-csrf\": \"For using the CsrfExtension\",
        \"symfony/security-http\": \"For using the LogoutUrlExtension\",
        \"symfony/stopwatch\": \"For using the StopwatchExtension\",
        \"symfony/var-dumper\": \"For using the DumpExtension\",
        \"symfony/expression-language\": \"For using the ExpressionExtension\",
        \"symfony/web-link\": \"For using the WebLinkExtension\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Bridge\\\\Twig\\\\\": \"\" },
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
", "@app/vendor/symfony/twig-bridge/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\composer.json");
    }
}
