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

/* @app/vendor/symfony/dotenv/CHANGELOG.md */
class __TwigTemplate_6ddd010c09cfb7ad4430025de78a2fb23b641273f86d73151c9df68308031652 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dotenv/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

5.0.0
-----

 * using `putenv()` is disabled by default

4.3.0
-----

 * deprecated use of `putenv()` by default. This feature will be opted-in with a constructor argument to `Dotenv`

4.2.0
-----

 * added `Dotenv::overload()` and `\$overrideExistingVars` as optional parameter of `Dotenv::populate()`
 * added `Dotenv::loadEnv()` to load a .env file and its corresponding .env.local, .env.\$env and .env.\$env.local files if they exist

3.3.0
-----

 * [BC BREAK] Since v3.3.7, the latest Dotenv files override the previous ones. Real env vars are not affected and are not overridden.
 * added the component
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dotenv/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("CHANGELOG
=========

5.0.0
-----

 * using `putenv()` is disabled by default

4.3.0
-----

 * deprecated use of `putenv()` by default. This feature will be opted-in with a constructor argument to `Dotenv`

4.2.0
-----

 * added `Dotenv::overload()` and `\$overrideExistingVars` as optional parameter of `Dotenv::populate()`
 * added `Dotenv::loadEnv()` to load a .env file and its corresponding .env.local, .env.\$env and .env.\$env.local files if they exist

3.3.0
-----

 * [BC BREAK] Since v3.3.7, the latest Dotenv files override the previous ones. Real env vars are not affected and are not overridden.
 * added the component
", "@app/vendor/symfony/dotenv/CHANGELOG.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dotenv\\CHANGELOG.md");
    }
}
