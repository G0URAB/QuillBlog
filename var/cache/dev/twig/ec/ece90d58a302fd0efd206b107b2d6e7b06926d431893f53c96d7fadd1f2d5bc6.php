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

/* @app/composer.json */
class __TwigTemplate_56402bcdfab04026a6b89b2658f01b98776458e20759e0a9beb616a6ad2589c0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/composer.json"));

        // line 1
        echo "{
    \"type\": \"project\",
    \"license\": \"proprietary\",
    \"require\": {
        \"php\": \"^7.2.5\",
        \"ext-ctype\": \"*\",
        \"ext-iconv\": \"*\",
        \"symfony/asset\": \"5.0.*\",
        \"symfony/console\": \"5.0.*\",
        \"symfony/dotenv\": \"5.0.*\",
        \"symfony/flex\": \"^1.3.1\",
        \"symfony/framework-bundle\": \"5.0.*\",
        \"symfony/maker-bundle\": \"^1.14\",
        \"symfony/orm-pack\": \"^1.0\",
        \"symfony/twig-pack\": \"^1.0\",
        \"symfony/yaml\": \"5.0.*\"
    },
    \"require-dev\": {
    },
    \"config\": {
        \"preferred-install\": {
            \"*\": \"dist\"
        },
        \"sort-packages\": true
    },
    \"autoload\": {
        \"psr-4\": {
            \"App\\\\\": \"src/\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"App\\\\Tests\\\\\": \"tests/\"
        }
    },
    \"replace\": {
        \"paragonie/random_compat\": \"2.*\",
        \"symfony/polyfill-ctype\": \"*\",
        \"symfony/polyfill-iconv\": \"*\",
        \"symfony/polyfill-php72\": \"*\",
        \"symfony/polyfill-php71\": \"*\",
        \"symfony/polyfill-php70\": \"*\",
        \"symfony/polyfill-php56\": \"*\"
    },
    \"scripts\": {
        \"auto-scripts\": {
            \"cache:clear\": \"symfony-cmd\",
            \"assets:install %PUBLIC_DIR%\": \"symfony-cmd\"
        },
        \"post-install-cmd\": [
            \"@auto-scripts\"
        ],
        \"post-update-cmd\": [
            \"@auto-scripts\"
        ]
    },
    \"conflict\": {
        \"symfony/symfony\": \"*\"
    },
    \"extra\": {
        \"symfony\": {
            \"allow-contrib\": false,
            \"require\": \"5.0.*\"
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"type\": \"project\",
    \"license\": \"proprietary\",
    \"require\": {
        \"php\": \"^7.2.5\",
        \"ext-ctype\": \"*\",
        \"ext-iconv\": \"*\",
        \"symfony/asset\": \"5.0.*\",
        \"symfony/console\": \"5.0.*\",
        \"symfony/dotenv\": \"5.0.*\",
        \"symfony/flex\": \"^1.3.1\",
        \"symfony/framework-bundle\": \"5.0.*\",
        \"symfony/maker-bundle\": \"^1.14\",
        \"symfony/orm-pack\": \"^1.0\",
        \"symfony/twig-pack\": \"^1.0\",
        \"symfony/yaml\": \"5.0.*\"
    },
    \"require-dev\": {
    },
    \"config\": {
        \"preferred-install\": {
            \"*\": \"dist\"
        },
        \"sort-packages\": true
    },
    \"autoload\": {
        \"psr-4\": {
            \"App\\\\\": \"src/\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"App\\\\Tests\\\\\": \"tests/\"
        }
    },
    \"replace\": {
        \"paragonie/random_compat\": \"2.*\",
        \"symfony/polyfill-ctype\": \"*\",
        \"symfony/polyfill-iconv\": \"*\",
        \"symfony/polyfill-php72\": \"*\",
        \"symfony/polyfill-php71\": \"*\",
        \"symfony/polyfill-php70\": \"*\",
        \"symfony/polyfill-php56\": \"*\"
    },
    \"scripts\": {
        \"auto-scripts\": {
            \"cache:clear\": \"symfony-cmd\",
            \"assets:install %PUBLIC_DIR%\": \"symfony-cmd\"
        },
        \"post-install-cmd\": [
            \"@auto-scripts\"
        ],
        \"post-update-cmd\": [
            \"@auto-scripts\"
        ]
    },
    \"conflict\": {
        \"symfony/symfony\": \"*\"
    },
    \"extra\": {
        \"symfony\": {
            \"allow-contrib\": false,
            \"require\": \"5.0.*\"
        }
    }
}
", "@app/composer.json", "C:\\wamp64\\www\\QuillBlog\\composer.json");
    }
}
