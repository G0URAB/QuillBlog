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

/* @app/vendor/ocramius/proxy-manager/STABILITY.md */
class __TwigTemplate_e38d1df3d233ba2046c8d24315608c494e680a62de028fec08612c904b4cc040 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/STABILITY.md"));

        // line 1
        echo "---
title: Stability
---

This is a list of supported versions, with their expected release/support time-frames:

# 2.0.x

 * Release date: 2016-01-30
 * Bug fixes: till 2017-12-31
 * Security fixes: till 2018-12-31

# 1.0.x

 * Release date: 2014-12-12
 * Bug fixes: till 2015-12-11
 * Security fixes: till 2016-12-11

# 0.5.x

 * Release date: 2013-12-01
 * Bug fixes: till 2015-03-11
 * Security fixes: till 2015-12-11
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/STABILITY.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("---
title: Stability
---

This is a list of supported versions, with their expected release/support time-frames:

# 2.0.x

 * Release date: 2016-01-30
 * Bug fixes: till 2017-12-31
 * Security fixes: till 2018-12-31

# 1.0.x

 * Release date: 2014-12-12
 * Bug fixes: till 2015-12-11
 * Security fixes: till 2016-12-11

# 0.5.x

 * Release date: 2013-12-01
 * Bug fixes: till 2015-03-11
 * Security fixes: till 2015-12-11
", "@app/vendor/ocramius/proxy-manager/STABILITY.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\STABILITY.md");
    }
}
