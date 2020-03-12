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

/* @app/vendor/zendframework/zend-eventmanager/composer.json */
class __TwigTemplate_4ae6b71e1ee80fccf1670fc4420a3c3660b0b9f252bdc5d1ea8218b7bda20f7c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-eventmanager/composer.json"));

        // line 1
        echo "{
    \"name\": \"zendframework/zend-eventmanager\",
    \"description\": \"Trigger and listen to events within a PHP application\",
    \"license\": \"BSD-3-Clause\",
    \"keywords\": [
        \"zf2\",
        \"event\",
        \"events\",
        \"eventmanager\"
    ],
    \"homepage\": \"https://github.com/zendframework/zend-eventmanager\",
    \"minimum-stability\": \"dev\",
    \"prefer-stable\": true,
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"3.2-dev\",
            \"dev-develop\": \"3.3-dev\"
        }
    },
    \"autoload\": {
        \"psr-4\": {
            \"Zend\\\\EventManager\\\\\": \"src/\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"ZendTest\\\\EventManager\\\\\": \"test/\",
            \"ZendBench\\\\EventManager\\\\\": \"benchmarks/\"
        },
        \"files\": [
             \"test/_autoload.php\"
        ]
    },
    \"require\": {
        \"php\": \"^5.6 || ^7.0\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"^5.7.27 || ^6.5.8 || ^7.1.2\",
        \"athletic/athletic\": \"^0.1\",
        \"zendframework/zend-stdlib\": \"^2.7.3 || ^3.0\",
        \"container-interop/container-interop\": \"^1.1.0\",
        \"zendframework/zend-coding-standard\": \"~1.0.0\"
    },
    \"suggest\": {
        \"container-interop/container-interop\": \"^1.1.0, to use the lazy listeners feature\",
        \"zendframework/zend-stdlib\": \"^2.7.3 || ^3.0, to use the FilterChain feature\"
    },
    \"scripts\": {
        \"check\": [
            \"@cs-check\",
            \"@test\"
        ],
        \"cs-check\": \"phpcs\",
        \"cs-fix\": \"phpcbf\",
        \"test\": \"phpunit --colors=always\",
        \"test-coverage\": \"phpunit --colors=always --coverage-clover clover.xml\"
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/zendframework/zend-eventmanager/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"zendframework/zend-eventmanager\",
    \"description\": \"Trigger and listen to events within a PHP application\",
    \"license\": \"BSD-3-Clause\",
    \"keywords\": [
        \"zf2\",
        \"event\",
        \"events\",
        \"eventmanager\"
    ],
    \"homepage\": \"https://github.com/zendframework/zend-eventmanager\",
    \"minimum-stability\": \"dev\",
    \"prefer-stable\": true,
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"3.2-dev\",
            \"dev-develop\": \"3.3-dev\"
        }
    },
    \"autoload\": {
        \"psr-4\": {
            \"Zend\\\\EventManager\\\\\": \"src/\"
        }
    },
    \"autoload-dev\": {
        \"psr-4\": {
            \"ZendTest\\\\EventManager\\\\\": \"test/\",
            \"ZendBench\\\\EventManager\\\\\": \"benchmarks/\"
        },
        \"files\": [
             \"test/_autoload.php\"
        ]
    },
    \"require\": {
        \"php\": \"^5.6 || ^7.0\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"^5.7.27 || ^6.5.8 || ^7.1.2\",
        \"athletic/athletic\": \"^0.1\",
        \"zendframework/zend-stdlib\": \"^2.7.3 || ^3.0\",
        \"container-interop/container-interop\": \"^1.1.0\",
        \"zendframework/zend-coding-standard\": \"~1.0.0\"
    },
    \"suggest\": {
        \"container-interop/container-interop\": \"^1.1.0, to use the lazy listeners feature\",
        \"zendframework/zend-stdlib\": \"^2.7.3 || ^3.0, to use the FilterChain feature\"
    },
    \"scripts\": {
        \"check\": [
            \"@cs-check\",
            \"@test\"
        ],
        \"cs-check\": \"phpcs\",
        \"cs-fix\": \"phpcbf\",
        \"test\": \"phpunit --colors=always\",
        \"test-coverage\": \"phpunit --colors=always --coverage-clover clover.xml\"
    }
}
", "@app/vendor/zendframework/zend-eventmanager/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-eventmanager\\composer.json");
    }
}
