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

/* @app/vendor/symfony/framework-bundle/Resources/config/fragment_renderer.xml */
class __TwigTemplate_450a2c9ac52ee4531fab684c2d371e16e3d1b3d839c2044fd2a135ff7ee2ff6c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/fragment_renderer.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <parameters>
        <parameter key=\"fragment.renderer.hinclude.global_template\"></parameter>
        <parameter key=\"fragment.path\">/_fragment</parameter>
    </parameters>

    <services>
        <defaults public=\"false\" />

        <service id=\"fragment.handler\" class=\"Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler\">
            <argument /> <!-- fragment renderer locator -->
            <argument type=\"service\" id=\"request_stack\" />
            <argument>%kernel.debug%</argument>
        </service>

        <service id=\"fragment.renderer.inline\" class=\"Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer\">
            <tag name=\"kernel.fragment_renderer\" alias=\"inline\" />
            <argument type=\"service\" id=\"http_kernel\" />
            <argument type=\"service\" id=\"event_dispatcher\" />
            <call method=\"setFragmentPath\"><argument>%fragment.path%</argument></call>
        </service>

        <service id=\"fragment.renderer.hinclude\" class=\"Symfony\\Component\\HttpKernel\\Fragment\\HIncludeFragmentRenderer\">
            <argument type=\"service\" id=\"twig\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"uri_signer\" />
            <argument>%fragment.renderer.hinclude.global_template%</argument>
            <call method=\"setFragmentPath\"><argument>%fragment.path%</argument></call>
        </service>

        <service id=\"fragment.renderer.esi\" class=\"Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer\">
            <tag name=\"kernel.fragment_renderer\" alias=\"esi\" />
            <argument type=\"service\" id=\"esi\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"fragment.renderer.inline\" />
            <argument type=\"service\" id=\"uri_signer\" />
            <call method=\"setFragmentPath\"><argument>%fragment.path%</argument></call>
        </service>

        <service id=\"fragment.renderer.ssi\" class=\"Symfony\\Component\\HttpKernel\\Fragment\\SsiFragmentRenderer\">
            <tag name=\"kernel.fragment_renderer\" alias=\"ssi\" />
            <argument type=\"service\" id=\"ssi\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"fragment.renderer.inline\" />
            <argument type=\"service\" id=\"uri_signer\" />
            <call method=\"setFragmentPath\"><argument>%fragment.path%</argument></call>
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/fragment_renderer.xml";
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

    <parameters>
        <parameter key=\"fragment.renderer.hinclude.global_template\"></parameter>
        <parameter key=\"fragment.path\">/_fragment</parameter>
    </parameters>

    <services>
        <defaults public=\"false\" />

        <service id=\"fragment.handler\" class=\"Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler\">
            <argument /> <!-- fragment renderer locator -->
            <argument type=\"service\" id=\"request_stack\" />
            <argument>%kernel.debug%</argument>
        </service>

        <service id=\"fragment.renderer.inline\" class=\"Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer\">
            <tag name=\"kernel.fragment_renderer\" alias=\"inline\" />
            <argument type=\"service\" id=\"http_kernel\" />
            <argument type=\"service\" id=\"event_dispatcher\" />
            <call method=\"setFragmentPath\"><argument>%fragment.path%</argument></call>
        </service>

        <service id=\"fragment.renderer.hinclude\" class=\"Symfony\\Component\\HttpKernel\\Fragment\\HIncludeFragmentRenderer\">
            <argument type=\"service\" id=\"twig\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"uri_signer\" />
            <argument>%fragment.renderer.hinclude.global_template%</argument>
            <call method=\"setFragmentPath\"><argument>%fragment.path%</argument></call>
        </service>

        <service id=\"fragment.renderer.esi\" class=\"Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer\">
            <tag name=\"kernel.fragment_renderer\" alias=\"esi\" />
            <argument type=\"service\" id=\"esi\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"fragment.renderer.inline\" />
            <argument type=\"service\" id=\"uri_signer\" />
            <call method=\"setFragmentPath\"><argument>%fragment.path%</argument></call>
        </service>

        <service id=\"fragment.renderer.ssi\" class=\"Symfony\\Component\\HttpKernel\\Fragment\\SsiFragmentRenderer\">
            <tag name=\"kernel.fragment_renderer\" alias=\"ssi\" />
            <argument type=\"service\" id=\"ssi\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"fragment.renderer.inline\" />
            <argument type=\"service\" id=\"uri_signer\" />
            <call method=\"setFragmentPath\"><argument>%fragment.path%</argument></call>
        </service>
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/fragment_renderer.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\fragment_renderer.xml");
    }
}
