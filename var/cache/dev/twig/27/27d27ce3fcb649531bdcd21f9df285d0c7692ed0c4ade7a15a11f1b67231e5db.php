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

/* @app/vendor/doctrine/orm/bin/doctrine.bat */
class __TwigTemplate_aef6e53aa0fd08d97954149ea02083b65d5df27e6c7c67c207b93190833eecc2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/bin/doctrine.bat"));

        // line 1
        echo "@echo off

if \"%PHPBIN%\" == \"\" set PHPBIN=@php_bin@
if not exist \"%PHPBIN%\" if \"%PHP_PEAR_PHP_BIN%\" neq \"\" goto USE_PEAR_PATH
GOTO RUN
:USE_PEAR_PATH
set PHPBIN=%PHP_PEAR_PHP_BIN%
:RUN
\"%PHPBIN%\" \"@bin_dir@\\doctrine\" %*
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/bin/doctrine.bat";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@echo off

if \"%PHPBIN%\" == \"\" set PHPBIN=@php_bin@
if not exist \"%PHPBIN%\" if \"%PHP_PEAR_PHP_BIN%\" neq \"\" goto USE_PEAR_PATH
GOTO RUN
:USE_PEAR_PATH
set PHPBIN=%PHP_PEAR_PHP_BIN%
:RUN
\"%PHPBIN%\" \"@bin_dir@\\doctrine\" %*
", "@app/vendor/doctrine/orm/bin/doctrine.bat", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\bin\\doctrine.bat");
    }
}
