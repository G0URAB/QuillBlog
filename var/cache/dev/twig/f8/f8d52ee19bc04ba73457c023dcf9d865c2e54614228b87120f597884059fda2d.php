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

/* @app/vendor/symfony/framework-bundle/Resources/config/web.xml */
class __TwigTemplate_c616462d07f60757b56258b1d39d34ebe33de9cd738d29fd07784b593906560b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/web.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"controller_resolver\" class=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver\">
            <tag name=\"monolog.logger\" channel=\"request\" />
            <argument type=\"service\" id=\"service_container\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
        </service>

        <service id=\"argument_metadata_factory\" class=\"Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadataFactory\" />

        <service id=\"argument_resolver\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\">
            <argument type=\"service\" id=\"argument_metadata_factory\" />
            <argument /> <!-- argument value resolvers -->
        </service>

        <service id=\"argument_resolver.request_attribute\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\RequestAttributeValueResolver\">
            <tag name=\"controller.argument_value_resolver\" priority=\"100\" />
        </service>

        <service id=\"argument_resolver.request\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\RequestValueResolver\">
            <tag name=\"controller.argument_value_resolver\" priority=\"50\" />
        </service>

        <service id=\"argument_resolver.session\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\SessionValueResolver\">
            <tag name=\"controller.argument_value_resolver\" priority=\"50\" />
        </service>

        <service id=\"argument_resolver.service\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\ServiceValueResolver\">
            <tag name=\"controller.argument_value_resolver\" priority=\"-50\" />
            <argument />
        </service>

        <service id=\"argument_resolver.default\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\DefaultValueResolver\">
            <tag name=\"controller.argument_value_resolver\" priority=\"-100\" />
        </service>

        <service id=\"argument_resolver.variadic\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\VariadicValueResolver\">
            <tag name=\"controller.argument_value_resolver\" priority=\"-150\" />
        </service>

        <service id=\"response_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener\">
            <tag name=\"kernel.event_subscriber\" />
            <argument>%kernel.charset%</argument>
        </service>

        <service id=\"streamed_response_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener\">
            <tag name=\"kernel.event_subscriber\" />
        </service>

        <service id=\"locale_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener\">
            <tag name=\"kernel.event_subscriber\" />
            <argument type=\"service\" id=\"request_stack\" />
            <argument>%kernel.default_locale%</argument>
            <argument type=\"service\" id=\"router\" on-invalid=\"ignore\" />
        </service>

        <service id=\"validate_request_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener\">
            <tag name=\"kernel.event_subscriber\" />
        </service>

        <service id=\"disallow_search_engine_index_response_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\DisallowRobotsIndexingListener\">
            <tag name=\"kernel.event_subscriber\" />
        </service>

        <service id=\"error_controller\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ErrorController\" public=\"true\">
            <argument type=\"service\" id=\"http_kernel\" />
            <argument>%kernel.error_controller%</argument>
            <argument type=\"service\" id=\"error_renderer\" />
        </service>

        <service id=\"exception_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ErrorListener\">
            <tag name=\"kernel.event_subscriber\" />
            <tag name=\"monolog.logger\" channel=\"request\" />
            <argument>%kernel.error_controller%</argument>
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument>%kernel.debug%</argument>
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/web.xml";
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

        <service id=\"controller_resolver\" class=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver\">
            <tag name=\"monolog.logger\" channel=\"request\" />
            <argument type=\"service\" id=\"service_container\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
        </service>

        <service id=\"argument_metadata_factory\" class=\"Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadataFactory\" />

        <service id=\"argument_resolver\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\">
            <argument type=\"service\" id=\"argument_metadata_factory\" />
            <argument /> <!-- argument value resolvers -->
        </service>

        <service id=\"argument_resolver.request_attribute\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\RequestAttributeValueResolver\">
            <tag name=\"controller.argument_value_resolver\" priority=\"100\" />
        </service>

        <service id=\"argument_resolver.request\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\RequestValueResolver\">
            <tag name=\"controller.argument_value_resolver\" priority=\"50\" />
        </service>

        <service id=\"argument_resolver.session\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\SessionValueResolver\">
            <tag name=\"controller.argument_value_resolver\" priority=\"50\" />
        </service>

        <service id=\"argument_resolver.service\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\ServiceValueResolver\">
            <tag name=\"controller.argument_value_resolver\" priority=\"-50\" />
            <argument />
        </service>

        <service id=\"argument_resolver.default\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\DefaultValueResolver\">
            <tag name=\"controller.argument_value_resolver\" priority=\"-100\" />
        </service>

        <service id=\"argument_resolver.variadic\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\VariadicValueResolver\">
            <tag name=\"controller.argument_value_resolver\" priority=\"-150\" />
        </service>

        <service id=\"response_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener\">
            <tag name=\"kernel.event_subscriber\" />
            <argument>%kernel.charset%</argument>
        </service>

        <service id=\"streamed_response_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener\">
            <tag name=\"kernel.event_subscriber\" />
        </service>

        <service id=\"locale_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener\">
            <tag name=\"kernel.event_subscriber\" />
            <argument type=\"service\" id=\"request_stack\" />
            <argument>%kernel.default_locale%</argument>
            <argument type=\"service\" id=\"router\" on-invalid=\"ignore\" />
        </service>

        <service id=\"validate_request_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener\">
            <tag name=\"kernel.event_subscriber\" />
        </service>

        <service id=\"disallow_search_engine_index_response_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\DisallowRobotsIndexingListener\">
            <tag name=\"kernel.event_subscriber\" />
        </service>

        <service id=\"error_controller\" class=\"Symfony\\Component\\HttpKernel\\Controller\\ErrorController\" public=\"true\">
            <argument type=\"service\" id=\"http_kernel\" />
            <argument>%kernel.error_controller%</argument>
            <argument type=\"service\" id=\"error_renderer\" />
        </service>

        <service id=\"exception_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ErrorListener\">
            <tag name=\"kernel.event_subscriber\" />
            <tag name=\"monolog.logger\" channel=\"request\" />
            <argument>%kernel.error_controller%</argument>
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
            <argument>%kernel.debug%</argument>
        </service>
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/web.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\web.xml");
    }
}
