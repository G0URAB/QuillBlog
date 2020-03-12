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

/* @app/vendor/nikic/php-parser/grammar/tokens.template */
class __TwigTemplate_19cabf443a9492fb84996068f73ab9bb38bb3bfec4b8a772f90a2d8a7c96b37c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/grammar/tokens.template"));

        // line 1
        echo "<?php
\$meta #
#semval(\$) \$this->semValue
#semval(\$,%t) \$this->semValue
#semval(%n) \$this->stackPos-(%l-%n)
#semval(%n,%t) \$this->stackPos-(%l-%n)

namespace PhpParser\\Parser;
#include;

/* GENERATED file based on grammar/tokens.y */
final class Tokens
{
#tokenval
    const %s = %n;
#endtokenval
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/grammar/tokens.template";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
\$meta #
#semval(\$) \$this->semValue
#semval(\$,%t) \$this->semValue
#semval(%n) \$this->stackPos-(%l-%n)
#semval(%n,%t) \$this->stackPos-(%l-%n)

namespace PhpParser\\Parser;
#include;

/* GENERATED file based on grammar/tokens.y */
final class Tokens
{
#tokenval
    const %s = %n;
#endtokenval
}
", "@app/vendor/nikic/php-parser/grammar/tokens.template", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\grammar\\tokens.template");
    }
}
