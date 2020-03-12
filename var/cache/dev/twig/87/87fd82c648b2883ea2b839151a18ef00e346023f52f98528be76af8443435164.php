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

/* @app/README.md */
class __TwigTemplate_a4f68c29a05af738c303a96f45bb7896a5f28ccf38b0785ad3ed04fc1af3073a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/README.md"));

        // line 1
        echo "# Notes
1. No worries for database connection because I am using sqlite which is a portable database and is being easily integrated with Symfony.
2. Download the project folder and from inside the project run a terminal and type this command \"php -S localhost:8000 -t public\" to start the server with \"public\" as root directory.
3. Visit the application at http://localhost:8000 and now you can make new blogs and put contents in those blogs using Quill API. 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Notes
1. No worries for database connection because I am using sqlite which is a portable database and is being easily integrated with Symfony.
2. Download the project folder and from inside the project run a terminal and type this command \"php -S localhost:8000 -t public\" to start the server with \"public\" as root directory.
3. Visit the application at http://localhost:8000 and now you can make new blogs and put contents in those blogs using Quill API. 
", "@app/README.md", "C:\\wamp64\\www\\QuillBlog\\README.md");
    }
}
