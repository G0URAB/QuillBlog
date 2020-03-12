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

/* @app/vendor/twig/extra-bundle/src/Resources/config/markdown.xml */
class __TwigTemplate_6eae39c497650d2d084061e45960651a6b929587695a8f48942e2dfc0da9c671 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/extra-bundle/src/Resources/config/markdown.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"twig.extension.markdown\" class=\"Twig\\Extra\\Markdown\\MarkdownExtension\">
            <tag name=\"twig.extension\" />
        </service>

        <service id=\"twig.runtime.markdown\" class=\"Twig\\Extra\\Markdown\\MarkdownRuntime\">
            <argument type=\"service\" id=\"twig.markdown.default\" />
            <tag name=\"twig.runtime\" />
        </service>

        <service id=\"twig.markdown.default\" class=\"Twig\\Extra\\Markdown\\DefaultMarkdown\" />
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/extra-bundle/src/Resources/config/markdown.xml";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"twig.extension.markdown\" class=\"Twig\\Extra\\Markdown\\MarkdownExtension\">
            <tag name=\"twig.extension\" />
        </service>

        <service id=\"twig.runtime.markdown\" class=\"Twig\\Extra\\Markdown\\MarkdownRuntime\">
            <argument type=\"service\" id=\"twig.markdown.default\" />
            <tag name=\"twig.runtime\" />
        </service>

        <service id=\"twig.markdown.default\" class=\"Twig\\Extra\\Markdown\\DefaultMarkdown\" />
    </services>
</container>
", "@app/vendor/twig/extra-bundle/src/Resources/config/markdown.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\extra-bundle\\src\\Resources\\config\\markdown.xml");
    }
}
