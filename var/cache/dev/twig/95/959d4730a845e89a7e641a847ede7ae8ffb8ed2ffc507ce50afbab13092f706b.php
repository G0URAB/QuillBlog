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

/* @app/vendor/doctrine/orm/SECURITY.md */
class __TwigTemplate_e711cf08c6e82f1b74635b572c5a8283cec2540034d10d26ce7235cc12f8e7df extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/orm/SECURITY.md"));

        // line 1
        echo "Security
========

The Doctrine library is operating very close to your database and as such needs
to handle and make assumptions about SQL injection vulnerabilities.

It is vital that you understand how Doctrine approaches security, because
we cannot protect you from SQL injection.

Please read the documentation chapter on Security in Doctrine DBAL and ORM to
understand the assumptions we make.

- [DBAL Security Page](https://github.com/doctrine/dbal/blob/master/docs/en/reference/security.rst)
- [ORM Security Page](https://github.com/doctrine/orm/blob/master/docs/en/reference/security.rst)

If you find a Security bug in Doctrine, please report it on Jira and change the
Security Level to \"Security Issues\". It will be visible to Doctrine Core
developers and you only.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/orm/SECURITY.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Security
========

The Doctrine library is operating very close to your database and as such needs
to handle and make assumptions about SQL injection vulnerabilities.

It is vital that you understand how Doctrine approaches security, because
we cannot protect you from SQL injection.

Please read the documentation chapter on Security in Doctrine DBAL and ORM to
understand the assumptions we make.

- [DBAL Security Page](https://github.com/doctrine/dbal/blob/master/docs/en/reference/security.rst)
- [ORM Security Page](https://github.com/doctrine/orm/blob/master/docs/en/reference/security.rst)

If you find a Security bug in Doctrine, please report it on Jira and change the
Security Level to \"Security Issues\". It will be visible to Doctrine Core
developers and you only.
", "@app/vendor/doctrine/orm/SECURITY.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\orm\\SECURITY.md");
    }
}
