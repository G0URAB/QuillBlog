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

/* @app/var/cache/dev/pools/dS5rNYipbY/L/8/lqjPyhwDOMLkwIgKhCLQ */
class __TwigTemplate_50b14f7e700b0ec792077849114df60e12eef03192bdf623eeaa5f74184c7570 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/var/cache/dev/pools/dS5rNYipbY/L/8/lqjPyhwDOMLkwIgKhCLQ"));

        // line 1
        echo "<?php //%255BApp%255CController%255CBlogController%2523index%255D%255B1%255D

return [PHP_INT_MAX, static function () { return \\Symfony\\Component\\VarExporter\\Internal\\Hydrator::hydrate(
    \$o = [
        clone (\\Symfony\\Component\\VarExporter\\Internal\\Registry::\$prototypes['Symfony\\\\Component\\\\Routing\\\\Annotation\\\\Route'] ?? \\Symfony\\Component\\VarExporter\\Internal\\Registry::p('Symfony\\\\Component\\\\Routing\\\\Annotation\\\\Route')),
    ],
    null,
    [
        'Symfony\\\\Component\\\\Routing\\\\Annotation\\\\Route' => [
            'path' => [
                '/',
            ],
            'name' => [
                'blog',
            ],
        ],
    ],
    [
        \$o[0],
    ],
    []
); }];
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/var/cache/dev/pools/dS5rNYipbY/L/8/lqjPyhwDOMLkwIgKhCLQ";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php //%255BApp%255CController%255CBlogController%2523index%255D%255B1%255D

return [PHP_INT_MAX, static function () { return \\Symfony\\Component\\VarExporter\\Internal\\Hydrator::hydrate(
    \$o = [
        clone (\\Symfony\\Component\\VarExporter\\Internal\\Registry::\$prototypes['Symfony\\\\Component\\\\Routing\\\\Annotation\\\\Route'] ?? \\Symfony\\Component\\VarExporter\\Internal\\Registry::p('Symfony\\\\Component\\\\Routing\\\\Annotation\\\\Route')),
    ],
    null,
    [
        'Symfony\\\\Component\\\\Routing\\\\Annotation\\\\Route' => [
            'path' => [
                '/',
            ],
            'name' => [
                'blog',
            ],
        ],
    ],
    [
        \$o[0],
    ],
    []
); }];
", "@app/var/cache/dev/pools/dS5rNYipbY/L/8/lqjPyhwDOMLkwIgKhCLQ", "C:\\wamp64\\www\\QuillBlog\\var\\cache\\dev\\pools\\dS5rNYipbY\\L\\8\\lqjPyhwDOMLkwIgKhCLQ");
    }
}
