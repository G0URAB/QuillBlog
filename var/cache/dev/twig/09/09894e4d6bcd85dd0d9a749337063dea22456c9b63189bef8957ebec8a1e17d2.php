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

/* @app/vendor/doctrine/orm/phpbench.json */
class __TwigTemplate_02354a35cdc677a597f54f9fe07ac2262c800e002ac105d86ddc68bb74246fc2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/phpbench.json"));

        // line 1
        echo "{
    \"bootstrap\": \"vendor/autoload.php\",
    \"path\": \"tests/Doctrine/Performance\",

    \"extensions\": [
        \"PhpBench\\\\Extensions\\\\Dbal\\\\DbalExtension\",
        \"PhpBench\\\\Extensions\\\\XDebug\\\\XDebugExtension\"
    ],

    \"storage\": \"dbal\",
    \"storage.dbal.connection\": {
        \"driver\": \"pdo_sqlite\",
        \"path\": \"tests/Doctrine/Performance/history.db\"
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/phpbench.json";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"bootstrap\": \"vendor/autoload.php\",
    \"path\": \"tests/Doctrine/Performance\",

    \"extensions\": [
        \"PhpBench\\\\Extensions\\\\Dbal\\\\DbalExtension\",
        \"PhpBench\\\\Extensions\\\\XDebug\\\\XDebugExtension\"
    ],

    \"storage\": \"dbal\",
    \"storage.dbal.connection\": {
        \"driver\": \"pdo_sqlite\",
        \"path\": \"tests/Doctrine/Performance/history.db\"
    }
}
", "@app/vendor/doctrine/orm/phpbench.json", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\phpbench.json");
    }
}
