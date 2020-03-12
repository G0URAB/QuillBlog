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

/* @app/vendor/symfony/twig-bundle/Resources/config/console.xml */
class __TwigTemplate_7c9c390351937f6bbe68e31a1bcdc35fdf09882cfaff833fdae6ad9d0d8b0a91 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bundle/Resources/config/console.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"twig.command.debug\" class=\"Symfony\\Bridge\\Twig\\Command\\DebugCommand\">
            <argument type=\"service\" id=\"twig\" />
            <argument>%kernel.project_dir%</argument>
            <argument>%kernel.bundles_metadata%</argument>
            <argument>%twig.default_path%</argument>
            <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\" />
            <tag name=\"console.command\" command=\"debug:twig\" />
        </service>

        <service id=\"twig.command.lint\" class=\"Symfony\\Bundle\\TwigBundle\\Command\\LintCommand\">
            <argument type=\"service\" id=\"twig\" />
            <tag name=\"console.command\" command=\"lint:twig\" />
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bundle/Resources/config/console.xml";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"twig.command.debug\" class=\"Symfony\\Bridge\\Twig\\Command\\DebugCommand\">
            <argument type=\"service\" id=\"twig\" />
            <argument>%kernel.project_dir%</argument>
            <argument>%kernel.bundles_metadata%</argument>
            <argument>%twig.default_path%</argument>
            <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\" />
            <tag name=\"console.command\" command=\"debug:twig\" />
        </service>

        <service id=\"twig.command.lint\" class=\"Symfony\\Bundle\\TwigBundle\\Command\\LintCommand\">
            <argument type=\"service\" id=\"twig\" />
            <tag name=\"console.command\" command=\"lint:twig\" />
        </service>
    </services>
</container>
", "@app/vendor/symfony/twig-bundle/Resources/config/console.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bundle\\Resources\\config\\console.xml");
    }
}
