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

/* @app/vendor/symfony/mime/CHANGELOG.md */
class __TwigTemplate_d11be9717da70a77a7f963b75d28d5dbd3c51ea1dee7f51a6e597d4dc28d3b0e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/mime/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

4.4.0
-----

 * [BC BREAK] Removed `NamedAddress` (`Address` now supports a name)
 * Added PHPUnit constraints
 * Added `AbstractPart::asDebugString()`
 * Added `Address::fromString()`

4.3.3
-----

 * [BC BREAK] Renamed method `Headers::getAll()` to `Headers::all()`.

4.3.0
-----

 * Introduced the component as experimental
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/mime/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("CHANGELOG
=========

4.4.0
-----

 * [BC BREAK] Removed `NamedAddress` (`Address` now supports a name)
 * Added PHPUnit constraints
 * Added `AbstractPart::asDebugString()`
 * Added `Address::fromString()`

4.3.3
-----

 * [BC BREAK] Renamed method `Headers::getAll()` to `Headers::all()`.

4.3.0
-----

 * Introduced the component as experimental
", "@app/vendor/symfony/mime/CHANGELOG.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\mime\\CHANGELOG.md");
    }
}
