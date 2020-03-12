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

/* @app/vendor/doctrine/orm/docs/README.md */
class __TwigTemplate_c1437b78472eedaff602787e4aa22715f16c361faaba6d5226d82367a7dcf271 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/docs/README.md"));

        // line 1
        echo "# Doctrine ORM Documentation

## How to Generate:
Using Ubuntu 14.04 LTS:

1. Run ./bin/install-dependencies.sh
2. Run ./bin/generate-docs.sh

It will generate the documentation into the build directory of the checkout.


## Theme issues

If you get a \"Theme error\", check if the `en/_theme` subdirectory is empty,
in which case you will need to run:

1. git submodule init
2. git submodule update
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/docs/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Doctrine ORM Documentation

## How to Generate:
Using Ubuntu 14.04 LTS:

1. Run ./bin/install-dependencies.sh
2. Run ./bin/generate-docs.sh

It will generate the documentation into the build directory of the checkout.


## Theme issues

If you get a \"Theme error\", check if the `en/_theme` subdirectory is empty,
in which case you will need to run:

1. git submodule init
2. git submodule update
", "@app/vendor/doctrine/orm/docs/README.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\docs\\README.md");
    }
}
