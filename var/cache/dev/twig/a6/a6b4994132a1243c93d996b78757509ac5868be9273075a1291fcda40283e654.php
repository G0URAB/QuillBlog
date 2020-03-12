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

/* @app/vendor/symfony/maker-bundle/README.md */
class __TwigTemplate_90a4a7334d729766fe9698160f97f9c113323ebfafa374a9251db8ad6dc93e71 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/maker-bundle/README.md"));

        // line 1
        echo "The Symfony MakerBundle
=======================

The MakerBundle is the fastest way to generate the most common code you'll
need in a Symfony app: commands, controllers, form classes, event subscribers
and more! This bundle is an alternative to [SensioGeneratorBundle][1] for modern
Symfony applications and requires Symfony 3.4 or newer and [Symfony Flex][2].

[Read the documentation][3]

Backwards Compatibility Promise
-------------------------------

This bundle shares the [backwards compatibility promise][4] from
Symfony. But, with a few clarifications.

A) The input arguments or options to a command *may* change between
   minor releases. If you're using the commands in an automated,
   scripted way, be aware of this.

B) The generated code itself may change between minor releases. This
   will allow us to continuously improve the generated code!

[1]: https://github.com/sensiolabs/SensioGeneratorBundle
[2]: https://symfony.com/doc/current/setup/flex.html
[3]: https://symfony.com/doc/current/bundles/SymfonyMakerBundle/index.html
[4]: https://symfony.com/doc/current/contributing/code/bc.html
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/maker-bundle/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("The Symfony MakerBundle
=======================

The MakerBundle is the fastest way to generate the most common code you'll
need in a Symfony app: commands, controllers, form classes, event subscribers
and more! This bundle is an alternative to [SensioGeneratorBundle][1] for modern
Symfony applications and requires Symfony 3.4 or newer and [Symfony Flex][2].

[Read the documentation][3]

Backwards Compatibility Promise
-------------------------------

This bundle shares the [backwards compatibility promise][4] from
Symfony. But, with a few clarifications.

A) The input arguments or options to a command *may* change between
   minor releases. If you're using the commands in an automated,
   scripted way, be aware of this.

B) The generated code itself may change between minor releases. This
   will allow us to continuously improve the generated code!

[1]: https://github.com/sensiolabs/SensioGeneratorBundle
[2]: https://symfony.com/doc/current/setup/flex.html
[3]: https://symfony.com/doc/current/bundles/SymfonyMakerBundle/index.html
[4]: https://symfony.com/doc/current/contributing/code/bc.html
", "@app/vendor/symfony/maker-bundle/README.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\maker-bundle\\README.md");
    }
}
