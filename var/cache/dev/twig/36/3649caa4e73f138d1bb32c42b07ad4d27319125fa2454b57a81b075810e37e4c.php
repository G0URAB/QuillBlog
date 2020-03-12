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

/* @app/vendor/jdorn/sql-formatter/composer.json */
class __TwigTemplate_6d467a74e896647b64e021fdd8c5b9e7b9e97b7d309d9900794876d5fc42fa51 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/jdorn/sql-formatter/composer.json"));

        // line 1
        echo "{
    \"name\": \"jdorn/sql-formatter\",
    \"description\": \"a PHP SQL highlighting library\",
    \"homepage\": \"https://github.com/jdorn/sql-formatter/\",
    \"keywords\": [\"sql\", \"highlight\"],
    \"minimum-stability\": \"dev\",
    \"license\": \"MIT\",
    \"type\": \"library\",
    \"require\": {
        \"php\": \">=5.2.4\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"3.7.*\"
    },
    \"authors\": [
        {
            \"name\": \"Jeremy Dorn\",
            \"email\": \"jeremy@jeremydorn.com\",
            \"homepage\": \"http://jeremydorn.com/\"
        }
    ],
    \"autoload\": {
        \"classmap\": [\"lib\"]
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.3.x-dev\"
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/jdorn/sql-formatter/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"name\": \"jdorn/sql-formatter\",
    \"description\": \"a PHP SQL highlighting library\",
    \"homepage\": \"https://github.com/jdorn/sql-formatter/\",
    \"keywords\": [\"sql\", \"highlight\"],
    \"minimum-stability\": \"dev\",
    \"license\": \"MIT\",
    \"type\": \"library\",
    \"require\": {
        \"php\": \">=5.2.4\"
    },
    \"require-dev\": {
        \"phpunit/phpunit\": \"3.7.*\"
    },
    \"authors\": [
        {
            \"name\": \"Jeremy Dorn\",
            \"email\": \"jeremy@jeremydorn.com\",
            \"homepage\": \"http://jeremydorn.com/\"
        }
    ],
    \"autoload\": {
        \"classmap\": [\"lib\"]
    },
    \"extra\": {
        \"branch-alias\": {
            \"dev-master\": \"1.3.x-dev\"
        }
    }
}
", "@app/vendor/jdorn/sql-formatter/composer.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\jdorn\\sql-formatter\\composer.json");
    }
}
