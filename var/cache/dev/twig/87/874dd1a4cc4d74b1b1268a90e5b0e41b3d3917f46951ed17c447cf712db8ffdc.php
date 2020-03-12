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

/* @app/vendor/symfony/config/composer.json */
class __TwigTemplate_3cba37effb5054dde2ac0db937ef2feabcdbf6026544da955c5ca1887197ee2c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/config/composer.json"));

        // line 1
        echo "{
    \"name\": \"symfony/config\",
    \"type\": \"library\",
    \"description\": \"Symfony Config Component\",
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
        \"symfony/filesystem\": \"^4.4|^5.0\",
        \"symfony/polyfill-ctype\": \"~1.8\"
    },
    \"require-dev\": {
        \"symfony/event-dispatcher\": \"^4.4|^5.0\",
        \"symfony/finder\": \"^4.4|^5.0\",
        \"symfony/messenger\": \"^4.4|^5.0\",
        \"symfony/service-contracts\": \"^1.1|^2\",
        \"symfony/yaml\": \"^4.4|^5.0\"
    },
    \"conflict\": {
        \"symfony/finder\": \"<4.4\"
    },
    \"suggest\": {
        \"symfony/yaml\": \"To use the yaml reference dumper\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Config\\\\\": \"\" },
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
        return "@app/vendor/symfony/config/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"symfony/config\",
    \"type\": \"library\",
    \"description\": \"Symfony Config Component\",
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
        \"symfony/filesystem\": \"^4.4|^5.0\",
        \"symfony/polyfill-ctype\": \"~1.8\"
    },
    \"require-dev\": {
        \"symfony/event-dispatcher\": \"^4.4|^5.0\",
        \"symfony/finder\": \"^4.4|^5.0\",
        \"symfony/messenger\": \"^4.4|^5.0\",
        \"symfony/service-contracts\": \"^1.1|^2\",
        \"symfony/yaml\": \"^4.4|^5.0\"
    },
    \"conflict\": {
        \"symfony/finder\": \"<4.4\"
    },
    \"suggest\": {
        \"symfony/yaml\": \"To use the yaml reference dumper\"
    },
    \"autoload\": {
        \"psr-4\": { \"Symfony\\\\Component\\\\Config\\\\\": \"\" },
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
", "@app/vendor/symfony/config/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\config\\composer.json");
    }
}
