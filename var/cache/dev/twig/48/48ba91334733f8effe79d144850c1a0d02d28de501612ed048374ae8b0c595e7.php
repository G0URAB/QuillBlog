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

/* @app/vendor/symfony/maker-bundle/src/Resources/help/MakeController.txt */
class __TwigTemplate_38ec377cfae0621dcb646a74797d8a9492e9f2143a96e5746e9ac2104755ec55 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Resources/help/MakeController.txt"));

        // line 1
        echo "The <info>%command.name%</info> command generates a new controller class.

<info>php %command.full_name% CoolStuffController</info>

If the argument is missing, the command will ask for the controller class name interactively.

You can also generate the controller alone, without template with this option:

<info>php %command.full_name% --no-template</info>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Resources/help/MakeController.txt";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("The <info>%command.name%</info> command generates a new controller class.

<info>php %command.full_name% CoolStuffController</info>

If the argument is missing, the command will ask for the controller class name interactively.

You can also generate the controller alone, without template with this option:

<info>php %command.full_name% --no-template</info>
", "@app/vendor/symfony/maker-bundle/src/Resources/help/MakeController.txt", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Resources\\help\\MakeController.txt");
    }
}
