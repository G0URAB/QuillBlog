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

/* @app/vendor/symfony/maker-bundle/src/Resources/help/MakeEntity.txt */
class __TwigTemplate_636acd0785bc37925adf594b7ed8c49b1812d31d7d6c7247ea00a63ed93e9efc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/src/Resources/help/MakeEntity.txt"));

        // line 1
        echo "The <info>%command.name%</info> command creates or updates an entity and repository class.

<info>php %command.full_name% BlogPost</info>

If the argument is missing, the command will ask for the entity class name interactively.

You can also mark this class as an API Platform resource. A hypermedia CRUD API will
automatically be available for this entity class:

<info>php %command.full_name% --api-resource</info>

You can also generate all the getter/setter/adder/remover methods
for the properties of existing entities:

<info>php %command.full_name% --regenerate</info>

You can also *overwrite* any existing methods:

<info>php %command.full_name% --regenerate --overwrite</info>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/src/Resources/help/MakeEntity.txt";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("The <info>%command.name%</info> command creates or updates an entity and repository class.

<info>php %command.full_name% BlogPost</info>

If the argument is missing, the command will ask for the entity class name interactively.

You can also mark this class as an API Platform resource. A hypermedia CRUD API will
automatically be available for this entity class:

<info>php %command.full_name% --api-resource</info>

You can also generate all the getter/setter/adder/remover methods
for the properties of existing entities:

<info>php %command.full_name% --regenerate</info>

You can also *overwrite* any existing methods:

<info>php %command.full_name% --regenerate --overwrite</info>
", "@app/vendor/symfony/maker-bundle/src/Resources/help/MakeEntity.txt", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\src\\Resources\\help\\MakeEntity.txt");
    }
}
