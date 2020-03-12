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

/* @app/vendor/symfony/asset/CHANGELOG.md */
class __TwigTemplate_9c1c1bd433467f90aee0453ebec90a055f3b027adb721ec678409d01539c1eb1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/asset/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

4.2.0
-----

 * added different protocols to be allowed as asset base_urls

3.4.0
-----

 * added optional arguments `\$basePath` and `\$secure` in `RequestStackContext::__construct()`
   to provide a default request context in case the stack is empty

3.3.0
-----
 * Added `JsonManifestVersionStrategy` as a way to read final,
   versioned paths from a JSON manifest file.

2.7.0
-----

 * added the component
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/asset/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("CHANGELOG
=========

4.2.0
-----

 * added different protocols to be allowed as asset base_urls

3.4.0
-----

 * added optional arguments `\$basePath` and `\$secure` in `RequestStackContext::__construct()`
   to provide a default request context in case the stack is empty

3.3.0
-----
 * Added `JsonManifestVersionStrategy` as a way to read final,
   versioned paths from a JSON manifest file.

2.7.0
-----

 * added the component
", "@app/vendor/symfony/asset/CHANGELOG.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\asset\\CHANGELOG.md");
    }
}
