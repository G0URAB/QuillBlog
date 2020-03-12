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

/* @app/vendor/symfony/framework-bundle/Resources/config/debug.xml */
class __TwigTemplate_a99b0ae82e149a394b94b6d0707f5e51d5b5b9d246cc5657ce72ae4affadc7fa extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/debug.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"debug.event_dispatcher\" class=\"Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher\" decorates=\"event_dispatcher\">
            <tag name=\"monolog.logger\" channel=\"event\" />
            <tag name=\"kernel.reset\" method=\"reset\" />
            <argument type=\"service\" id=\"debug.event_dispatcher.inner\" />
            <argument type=\"service\" id=\"debug.stopwatch\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"request_stack\" on-invalid=\"null\" />
        </service>

        <service id=\"debug.controller_resolver\" decorates=\"controller_resolver\" class=\"Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver\">
            <argument type=\"service\" id=\"debug.controller_resolver.inner\" />
            <argument type=\"service\" id=\"debug.stopwatch\" />
        </service>

        <service id=\"debug.argument_resolver\" decorates=\"argument_resolver\" class=\"Symfony\\Component\\HttpKernel\\Controller\\TraceableArgumentResolver\">
            <argument type=\"service\" id=\"debug.argument_resolver.inner\" />
            <argument type=\"service\" id=\"debug.stopwatch\" />
        </service>

        <service id=\"argument_resolver.not_tagged_controller\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\NotTaggedControllerValueResolver\">
            <tag name=\"controller.argument_value_resolver\" priority=\"-200\" />
            <argument />
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/debug.xml";
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

        <service id=\"debug.event_dispatcher\" class=\"Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher\" decorates=\"event_dispatcher\">
            <tag name=\"monolog.logger\" channel=\"event\" />
            <tag name=\"kernel.reset\" method=\"reset\" />
            <argument type=\"service\" id=\"debug.event_dispatcher.inner\" />
            <argument type=\"service\" id=\"debug.stopwatch\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument type=\"service\" id=\"request_stack\" on-invalid=\"null\" />
        </service>

        <service id=\"debug.controller_resolver\" decorates=\"controller_resolver\" class=\"Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver\">
            <argument type=\"service\" id=\"debug.controller_resolver.inner\" />
            <argument type=\"service\" id=\"debug.stopwatch\" />
        </service>

        <service id=\"debug.argument_resolver\" decorates=\"argument_resolver\" class=\"Symfony\\Component\\HttpKernel\\Controller\\TraceableArgumentResolver\">
            <argument type=\"service\" id=\"debug.argument_resolver.inner\" />
            <argument type=\"service\" id=\"debug.stopwatch\" />
        </service>

        <service id=\"argument_resolver.not_tagged_controller\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\NotTaggedControllerValueResolver\">
            <tag name=\"controller.argument_value_resolver\" priority=\"-200\" />
            <argument />
        </service>
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/debug.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\debug.xml");
    }
}
