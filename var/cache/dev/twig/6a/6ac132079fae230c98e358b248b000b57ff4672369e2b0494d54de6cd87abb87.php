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

/* @app/vendor/symfony/framework-bundle/Resources/config/notifier_transports.xml */
class __TwigTemplate_a8a028b77f0de6b41551d10e4f461bdaf109e1b8eb7dc7763dba5e1681e26a2b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/notifier_transports.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
           xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"notifier.transport_factory.abstract\" class=\"Symfony\\Component\\Notifier\\Transport\\AbstractTransportFactory\" abstract=\"true\">
            <argument type=\"service\" id=\"event_dispatcher\" />
            <argument type=\"service\" id=\"http_client\" on-invalid=\"ignore\" />
        </service>

        <service id=\"notifier.transport_factory.slack\" class=\"Symfony\\Component\\Notifier\\Bridge\\Slack\\SlackTransportFactory\" parent=\"notifier.transport_factory.abstract\">
            <tag name=\"chatter.transport_factory\" />
        </service>

        <service id=\"notifier.transport_factory.telegram\" class=\"Symfony\\Component\\Notifier\\Bridge\\Telegram\\TelegramTransportFactory\" parent=\"notifier.transport_factory.abstract\">
            <tag name=\"chatter.transport_factory\" />
        </service>

        <service id=\"notifier.transport_factory.nexmo\" class=\"Symfony\\Component\\Notifier\\Bridge\\Nexmo\\NexmoTransportFactory\" parent=\"notifier.transport_factory.abstract\">
            <tag name=\"texter.transport_factory\" />
        </service>

        <service id=\"notifier.transport_factory.twilio\" class=\"Symfony\\Component\\Notifier\\Bridge\\Twilio\\TwilioTransportFactory\" parent=\"notifier.transport_factory.abstract\">
            <tag name=\"texter.transport_factory\" />
        </service>

        <service id=\"notifier.transport_factory.null\" class=\"Symfony\\Component\\Notifier\\Transport\\NullTransportFactory\" parent=\"notifier.transport_factory.abstract\">
            <tag name=\"chatter.transport_factory\" />
            <tag name=\"texter.transport_factory\" />
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/notifier_transports.xml";
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
        <service id=\"notifier.transport_factory.abstract\" class=\"Symfony\\Component\\Notifier\\Transport\\AbstractTransportFactory\" abstract=\"true\">
            <argument type=\"service\" id=\"event_dispatcher\" />
            <argument type=\"service\" id=\"http_client\" on-invalid=\"ignore\" />
        </service>

        <service id=\"notifier.transport_factory.slack\" class=\"Symfony\\Component\\Notifier\\Bridge\\Slack\\SlackTransportFactory\" parent=\"notifier.transport_factory.abstract\">
            <tag name=\"chatter.transport_factory\" />
        </service>

        <service id=\"notifier.transport_factory.telegram\" class=\"Symfony\\Component\\Notifier\\Bridge\\Telegram\\TelegramTransportFactory\" parent=\"notifier.transport_factory.abstract\">
            <tag name=\"chatter.transport_factory\" />
        </service>

        <service id=\"notifier.transport_factory.nexmo\" class=\"Symfony\\Component\\Notifier\\Bridge\\Nexmo\\NexmoTransportFactory\" parent=\"notifier.transport_factory.abstract\">
            <tag name=\"texter.transport_factory\" />
        </service>

        <service id=\"notifier.transport_factory.twilio\" class=\"Symfony\\Component\\Notifier\\Bridge\\Twilio\\TwilioTransportFactory\" parent=\"notifier.transport_factory.abstract\">
            <tag name=\"texter.transport_factory\" />
        </service>

        <service id=\"notifier.transport_factory.null\" class=\"Symfony\\Component\\Notifier\\Transport\\NullTransportFactory\" parent=\"notifier.transport_factory.abstract\">
            <tag name=\"chatter.transport_factory\" />
            <tag name=\"texter.transport_factory\" />
        </service>
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/notifier_transports.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\notifier_transports.xml");
    }
}
