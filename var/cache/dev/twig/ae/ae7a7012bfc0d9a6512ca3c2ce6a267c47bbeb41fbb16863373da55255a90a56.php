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

/* @app/vendor/symfony/stopwatch/CHANGELOG.md */
class __TwigTemplate_f3a422ebdc4d93758793d3e44c3c72187f609cac7d658bd500c24569a935cc17 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/stopwatch/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

5.0.0
-----

 * Removed support for passing `null` as 1st (`\$id`) argument of `Section::get()` method, pass a valid child section identifier instead.

4.4.0
-----

 * Deprecated passing `null` as 1st (`\$id`) argument of `Section::get()` method, pass a valid child section identifier instead.

3.4.0
-----

 * added the `Stopwatch::reset()` method
 * allowed to measure sub-millisecond times by introducing an argument to the
   constructor of `Stopwatch`
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/stopwatch/CHANGELOG.md";
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

 * Removed support for passing `null` as 1st (`\$id`) argument of `Section::get()` method, pass a valid child section identifier instead.

4.4.0
-----

 * Deprecated passing `null` as 1st (`\$id`) argument of `Section::get()` method, pass a valid child section identifier instead.

3.4.0
-----

 * added the `Stopwatch::reset()` method
 * allowed to measure sub-millisecond times by introducing an argument to the
   constructor of `Stopwatch`
", "@app/vendor/symfony/stopwatch/CHANGELOG.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\stopwatch\\CHANGELOG.md");
    }
}
