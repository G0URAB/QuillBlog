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

/* @app/vendor/symfony/framework-bundle/Resources/config/notifier.xml */
class __TwigTemplate_7bca307720341d7eea40aa1678fe07ffd6ff014921ef56a18eab9428a1f1d00e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/notifier.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"notifier\" class=\"Symfony\\Component\\Notifier\\Notifier\">
            <argument type=\"tagged_locator\" tag=\"notifier.channel\" index-by=\"channel\" />
            <argument type=\"service\" id=\"notifier.channel_policy\" on-invalid=\"ignore\" />
        </service>
        <service id=\"Symfony\\Component\\Notifier\\NotifierInterface\" alias=\"notifier\" />

        <service id=\"notifier.channel_policy\" class=\"Symfony\\Component\\Notifier\\Channel\\ChannelPolicy\">
            <argument type=\"collection\" /> <!-- policy -->
        </service>

        <service id=\"notifier.channel.browser\" class=\"Symfony\\Component\\Notifier\\Channel\\BrowserChannel\">
            <argument type=\"service\" id=\"request_stack\" />
            <tag name=\"notifier.channel\" channel=\"browser\" />
        </service>

        <service id=\"notifier.channel.chat\" class=\"Symfony\\Component\\Notifier\\Channel\\ChatChannel\">
            <argument type=\"service\" id=\"chatter.transports\" />
            <argument type=\"service\" id=\"messenger.default_bus\" on-invalid=\"ignore\" />
            <tag name=\"notifier.channel\" channel=\"chat\" />
        </service>

        <service id=\"notifier.channel.sms\" class=\"Symfony\\Component\\Notifier\\Channel\\SmsChannel\">
            <argument type=\"service\" id=\"texter.transports\" />
            <argument type=\"service\" id=\"messenger.default_bus\" on-invalid=\"ignore\" />
            <tag name=\"notifier.channel\" channel=\"sms\" />
        </service>

        <service id=\"notifier.channel.email\" class=\"Symfony\\Component\\Notifier\\Channel\\EmailChannel\">
            <argument type=\"service\" id=\"mailer.transports\" />
            <argument type=\"service\" id=\"messenger.default_bus\" on-invalid=\"ignore\" />
            <tag name=\"notifier.channel\" channel=\"email\" />
        </service>

        <service id=\"notifier.monolog_handler\" class=\"Symfony\\Bridge\\Monolog\\Handler\\NotifierHandler\">
            <argument type=\"service\" id=\"notifier\" />
        </service>

        <service id=\"notifier.failed_message_listener\" class=\"Symfony\\Component\\Notifier\\EventListener\\SendFailedMessageToNotifierListener\">
            <argument type=\"service\" id=\"notifier\" />
        </service>

        <!-- chatter -->
        <service id=\"chatter\" class=\"Symfony\\Component\\Notifier\\Chatter\">
            <argument type=\"service\" id=\"chatter.transports\" />
            <argument type=\"service\" id=\"messenger.default_bus\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"ignore\" />
        </service>
        <service id=\"Symfony\\Component\\Notifier\\ChatterInterface\" alias=\"chatter\" />

        <service id=\"chatter.transports\" class=\"Symfony\\Component\\Notifier\\Transport\\Transports\">
            <factory service=\"chatter.transport_factory\" method=\"fromStrings\" />
            <argument type=\"collection\" /> <!-- transports -->
        </service>

        <service id=\"chatter.transport_factory\" class=\"Symfony\\Component\\Notifier\\Transport\">
            <argument type=\"tagged_iterator\" tag=\"chatter.transport_factory\" />
        </service>

        <service id=\"chatter.messenger.chat_handler\" class=\"Symfony\\Component\\Notifier\\Messenger\\MessageHandler\">
            <argument type=\"service\" id=\"chatter.transports\" />
            <tag name=\"messenger.message_handler\" handles=\"Symfony\\Component\\Notifier\\Message\\ChatMessage\" />
        </service>

        <!-- texter -->
        <service id=\"texter\" class=\"Symfony\\Component\\Notifier\\Texter\">
            <argument type=\"service\" id=\"texter.transports\" />
            <argument type=\"service\" id=\"messenger.default_bus\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"ignore\" />
        </service>
        <service id=\"Symfony\\Component\\Notifier\\TexterInterface\" alias=\"texter\" />

        <service id=\"texter.transports\" class=\"Symfony\\Component\\Notifier\\Transport\\Transports\">
            <factory service=\"texter.transport_factory\" method=\"fromStrings\" />
            <argument type=\"collection\" /> <!-- transports -->
        </service>

        <service id=\"texter.transport_factory\" class=\"Symfony\\Component\\Notifier\\Transport\">
            <argument type=\"tagged_iterator\" tag=\"texter.transport_factory\" />
        </service>

        <service id=\"texter.messenger.sms_handler\" class=\"Symfony\\Component\\Notifier\\Messenger\\MessageHandler\">
            <argument type=\"service\" id=\"texter.transports\" />
            <tag name=\"messenger.message_handler\" handles=\"Symfony\\Component\\Notifier\\Message\\SmsMessage\" />
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/notifier.xml";
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
        <service id=\"notifier\" class=\"Symfony\\Component\\Notifier\\Notifier\">
            <argument type=\"tagged_locator\" tag=\"notifier.channel\" index-by=\"channel\" />
            <argument type=\"service\" id=\"notifier.channel_policy\" on-invalid=\"ignore\" />
        </service>
        <service id=\"Symfony\\Component\\Notifier\\NotifierInterface\" alias=\"notifier\" />

        <service id=\"notifier.channel_policy\" class=\"Symfony\\Component\\Notifier\\Channel\\ChannelPolicy\">
            <argument type=\"collection\" /> <!-- policy -->
        </service>

        <service id=\"notifier.channel.browser\" class=\"Symfony\\Component\\Notifier\\Channel\\BrowserChannel\">
            <argument type=\"service\" id=\"request_stack\" />
            <tag name=\"notifier.channel\" channel=\"browser\" />
        </service>

        <service id=\"notifier.channel.chat\" class=\"Symfony\\Component\\Notifier\\Channel\\ChatChannel\">
            <argument type=\"service\" id=\"chatter.transports\" />
            <argument type=\"service\" id=\"messenger.default_bus\" on-invalid=\"ignore\" />
            <tag name=\"notifier.channel\" channel=\"chat\" />
        </service>

        <service id=\"notifier.channel.sms\" class=\"Symfony\\Component\\Notifier\\Channel\\SmsChannel\">
            <argument type=\"service\" id=\"texter.transports\" />
            <argument type=\"service\" id=\"messenger.default_bus\" on-invalid=\"ignore\" />
            <tag name=\"notifier.channel\" channel=\"sms\" />
        </service>

        <service id=\"notifier.channel.email\" class=\"Symfony\\Component\\Notifier\\Channel\\EmailChannel\">
            <argument type=\"service\" id=\"mailer.transports\" />
            <argument type=\"service\" id=\"messenger.default_bus\" on-invalid=\"ignore\" />
            <tag name=\"notifier.channel\" channel=\"email\" />
        </service>

        <service id=\"notifier.monolog_handler\" class=\"Symfony\\Bridge\\Monolog\\Handler\\NotifierHandler\">
            <argument type=\"service\" id=\"notifier\" />
        </service>

        <service id=\"notifier.failed_message_listener\" class=\"Symfony\\Component\\Notifier\\EventListener\\SendFailedMessageToNotifierListener\">
            <argument type=\"service\" id=\"notifier\" />
        </service>

        <!-- chatter -->
        <service id=\"chatter\" class=\"Symfony\\Component\\Notifier\\Chatter\">
            <argument type=\"service\" id=\"chatter.transports\" />
            <argument type=\"service\" id=\"messenger.default_bus\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"ignore\" />
        </service>
        <service id=\"Symfony\\Component\\Notifier\\ChatterInterface\" alias=\"chatter\" />

        <service id=\"chatter.transports\" class=\"Symfony\\Component\\Notifier\\Transport\\Transports\">
            <factory service=\"chatter.transport_factory\" method=\"fromStrings\" />
            <argument type=\"collection\" /> <!-- transports -->
        </service>

        <service id=\"chatter.transport_factory\" class=\"Symfony\\Component\\Notifier\\Transport\">
            <argument type=\"tagged_iterator\" tag=\"chatter.transport_factory\" />
        </service>

        <service id=\"chatter.messenger.chat_handler\" class=\"Symfony\\Component\\Notifier\\Messenger\\MessageHandler\">
            <argument type=\"service\" id=\"chatter.transports\" />
            <tag name=\"messenger.message_handler\" handles=\"Symfony\\Component\\Notifier\\Message\\ChatMessage\" />
        </service>

        <!-- texter -->
        <service id=\"texter\" class=\"Symfony\\Component\\Notifier\\Texter\">
            <argument type=\"service\" id=\"texter.transports\" />
            <argument type=\"service\" id=\"messenger.default_bus\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"ignore\" />
        </service>
        <service id=\"Symfony\\Component\\Notifier\\TexterInterface\" alias=\"texter\" />

        <service id=\"texter.transports\" class=\"Symfony\\Component\\Notifier\\Transport\\Transports\">
            <factory service=\"texter.transport_factory\" method=\"fromStrings\" />
            <argument type=\"collection\" /> <!-- transports -->
        </service>

        <service id=\"texter.transport_factory\" class=\"Symfony\\Component\\Notifier\\Transport\">
            <argument type=\"tagged_iterator\" tag=\"texter.transport_factory\" />
        </service>

        <service id=\"texter.messenger.sms_handler\" class=\"Symfony\\Component\\Notifier\\Messenger\\MessageHandler\">
            <argument type=\"service\" id=\"texter.transports\" />
            <tag name=\"messenger.message_handler\" handles=\"Symfony\\Component\\Notifier\\Message\\SmsMessage\" />
        </service>
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/notifier.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\notifier.xml");
    }
}
