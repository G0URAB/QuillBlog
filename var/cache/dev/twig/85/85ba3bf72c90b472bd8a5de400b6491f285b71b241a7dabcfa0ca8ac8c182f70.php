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

/* @app/vendor/symfony/framework-bundle/Resources/config/test.xml */
class __TwigTemplate_d69df714ca9ba0de10de22a89d3207c8dcffc2b14e767169880f881a1e012343 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/test.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <parameters>
        <parameter key=\"test.client.parameters\" type=\"collection\"></parameter>
    </parameters>

    <services>
        <defaults public=\"false\" />

        <service id=\"test.client\" class=\"Symfony\\Bundle\\FrameworkBundle\\KernelBrowser\" shared=\"false\" public=\"true\">
            <argument type=\"service\" id=\"kernel\" />
            <argument>%test.client.parameters%</argument>
            <argument type=\"service\" id=\"test.client.history\" />
            <argument type=\"service\" id=\"test.client.cookiejar\" />
        </service>

        <service id=\"test.client.history\" class=\"Symfony\\Component\\BrowserKit\\History\" shared=\"false\" />

        <service id=\"test.client.cookiejar\" class=\"Symfony\\Component\\BrowserKit\\CookieJar\" shared=\"false\" />

        <service id=\"test.session.listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\TestSessionListener\">
            <tag name=\"kernel.event_subscriber\" />
            <argument type=\"service_locator\">
                <argument key=\"session\" type=\"service\" id=\"session\" on-invalid=\"ignore\" />
            </argument>
        </service>

        <service id=\"test.service_container\" class=\"Symfony\\Bundle\\FrameworkBundle\\Test\\TestContainer\" public=\"true\">
            <argument type=\"service\" id=\"kernel\" />
            <argument>test.private_services_locator</argument>
        </service>

        <service id=\"test.private_services_locator\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"true\">
            <argument type=\"collection\" />
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/test.xml";
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
        <parameter key=\"test.client.parameters\" type=\"collection\"></parameter>
    </parameters>

    <services>
        <defaults public=\"false\" />

        <service id=\"test.client\" class=\"Symfony\\Bundle\\FrameworkBundle\\KernelBrowser\" shared=\"false\" public=\"true\">
            <argument type=\"service\" id=\"kernel\" />
            <argument>%test.client.parameters%</argument>
            <argument type=\"service\" id=\"test.client.history\" />
            <argument type=\"service\" id=\"test.client.cookiejar\" />
        </service>

        <service id=\"test.client.history\" class=\"Symfony\\Component\\BrowserKit\\History\" shared=\"false\" />

        <service id=\"test.client.cookiejar\" class=\"Symfony\\Component\\BrowserKit\\CookieJar\" shared=\"false\" />

        <service id=\"test.session.listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\TestSessionListener\">
            <tag name=\"kernel.event_subscriber\" />
            <argument type=\"service_locator\">
                <argument key=\"session\" type=\"service\" id=\"session\" on-invalid=\"ignore\" />
            </argument>
        </service>

        <service id=\"test.service_container\" class=\"Symfony\\Bundle\\FrameworkBundle\\Test\\TestContainer\" public=\"true\">
            <argument type=\"service\" id=\"kernel\" />
            <argument>test.private_services_locator</argument>
        </service>

        <service id=\"test.private_services_locator\" class=\"Symfony\\Component\\DependencyInjection\\ServiceLocator\" public=\"true\">
            <argument type=\"collection\" />
        </service>
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/test.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\test.xml");
    }
}
