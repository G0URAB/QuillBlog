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

/* @app/vendor/doctrine/orm/docs/bin/generate-docs.sh */
class __TwigTemplate_dadc6c37e46f7b7339a6b585b74a98327205da4eab73579b11c13069eb741c82 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/docs/bin/generate-docs.sh"));

        // line 1
        echo "#!/bin/bash
EXECPATH=`dirname \$0`
cd \$EXECPATH
cd ..

rm build -Rf
sphinx-build en build

sphinx-build -b latex en build/pdf
rubber --into build/pdf --pdf build/pdf/Doctrine2ORM.tex";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/docs/bin/generate-docs.sh";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#!/bin/bash
EXECPATH=`dirname \$0`
cd \$EXECPATH
cd ..

rm build -Rf
sphinx-build en build

sphinx-build -b latex en build/pdf
rubber --into build/pdf --pdf build/pdf/Doctrine2ORM.tex", "@app/vendor/doctrine/orm/docs/bin/generate-docs.sh", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\docs\\bin\\generate-docs.sh");
    }
}
