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

/* @app/vendor/doctrine/common/README.md */
class __TwigTemplate_f0bbf4ce308ff3f4aea2bf7bd133ebcfa6b5c8e51d5b3130f90e4a539871210c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/common/README.md"));

        // line 1
        echo "# Doctrine Common

[![Build Status](https://secure.travis-ci.org/doctrine/common.png)](https://travis-ci.org/doctrine/common)

The Doctrine Common project is a library that provides extensions to core PHP functionality.

## More resources:

* [Website](https://www.doctrine-project.org/)
* [Documentation](https://www.doctrine-project.org/projects/doctrine-common/en/latest/)
* [Downloads](https://github.com/doctrine/common/releases)
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/common/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Doctrine Common

[![Build Status](https://secure.travis-ci.org/doctrine/common.png)](https://travis-ci.org/doctrine/common)

The Doctrine Common project is a library that provides extensions to core PHP functionality.

## More resources:

* [Website](https://www.doctrine-project.org/)
* [Documentation](https://www.doctrine-project.org/projects/doctrine-common/en/latest/)
* [Downloads](https://github.com/doctrine/common/releases)
", "@app/vendor/doctrine/common/README.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\common\\README.md");
    }
}
