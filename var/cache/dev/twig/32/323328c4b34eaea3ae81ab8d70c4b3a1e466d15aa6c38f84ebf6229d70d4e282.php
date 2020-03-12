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

/* @app/vendor/symfony/framework-bundle/Resources/config/mailer.xml */
class __TwigTemplate_d4f3ecb7809b9f90df88490729b5f608f06fcb231a7ffd6c30e9d488b0529bd3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/mailer.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"mailer.mailer\" class=\"Symfony\\Component\\Mailer\\Mailer\">
            <argument type=\"service\" id=\"mailer.transports\" />
            <argument type=\"service\" id=\"messenger.default_bus\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"ignore\" />
        </service>
        <service id=\"mailer\" alias=\"mailer.mailer\" />
        <service id=\"Symfony\\Component\\Mailer\\MailerInterface\" alias=\"mailer.mailer\" />

        <service id=\"mailer.transports\" class=\"Symfony\\Component\\Mailer\\Transport\\Transports\">
            <factory service=\"mailer.transport_factory\" method=\"fromStrings\" />
            <argument type=\"collection\" /> <!-- transports -->
        </service>

        <service id=\"mailer.transport_factory\" class=\"Symfony\\Component\\Mailer\\Transport\">
            <argument type=\"tagged_iterator\" tag=\"mailer.transport_factory\" />
        </service>

        <service id=\"mailer.default_transport\" class=\"Symfony\\Component\\Mailer\\Transport\\TransportInterface\">
            <factory service=\"mailer.transport_factory\" method=\"fromString\" />
            <argument /> <!-- env(MAILER_DSN) -->
        </service>
        <service id=\"Symfony\\Component\\Mailer\\Transport\\TransportInterface\" alias=\"mailer.default_transport\" />

        <service id=\"mailer.messenger.message_handler\" class=\"Symfony\\Component\\Mailer\\Messenger\\MessageHandler\">
            <argument type=\"service\" id=\"mailer.transports\" />
            <tag name=\"messenger.message_handler\" />
        </service>

        <service id=\"mailer.envelope_listener\" class=\"Symfony\\Component\\Mailer\\EventListener\\EnvelopeListener\">
            <argument /> <!-- sender -->
            <argument /> <!-- recipients -->
            <tag name=\"kernel.event_subscriber\"/>
        </service>

        <service id=\"mailer.logger_message_listener\" class=\"Symfony\\Component\\Mailer\\EventListener\\MessageLoggerListener\">
            <tag name=\"kernel.event_subscriber\"/>
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/mailer.xml";
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
        <service id=\"mailer.mailer\" class=\"Symfony\\Component\\Mailer\\Mailer\">
            <argument type=\"service\" id=\"mailer.transports\" />
            <argument type=\"service\" id=\"messenger.default_bus\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"event_dispatcher\" on-invalid=\"ignore\" />
        </service>
        <service id=\"mailer\" alias=\"mailer.mailer\" />
        <service id=\"Symfony\\Component\\Mailer\\MailerInterface\" alias=\"mailer.mailer\" />

        <service id=\"mailer.transports\" class=\"Symfony\\Component\\Mailer\\Transport\\Transports\">
            <factory service=\"mailer.transport_factory\" method=\"fromStrings\" />
            <argument type=\"collection\" /> <!-- transports -->
        </service>

        <service id=\"mailer.transport_factory\" class=\"Symfony\\Component\\Mailer\\Transport\">
            <argument type=\"tagged_iterator\" tag=\"mailer.transport_factory\" />
        </service>

        <service id=\"mailer.default_transport\" class=\"Symfony\\Component\\Mailer\\Transport\\TransportInterface\">
            <factory service=\"mailer.transport_factory\" method=\"fromString\" />
            <argument /> <!-- env(MAILER_DSN) -->
        </service>
        <service id=\"Symfony\\Component\\Mailer\\Transport\\TransportInterface\" alias=\"mailer.default_transport\" />

        <service id=\"mailer.messenger.message_handler\" class=\"Symfony\\Component\\Mailer\\Messenger\\MessageHandler\">
            <argument type=\"service\" id=\"mailer.transports\" />
            <tag name=\"messenger.message_handler\" />
        </service>

        <service id=\"mailer.envelope_listener\" class=\"Symfony\\Component\\Mailer\\EventListener\\EnvelopeListener\">
            <argument /> <!-- sender -->
            <argument /> <!-- recipients -->
            <tag name=\"kernel.event_subscriber\"/>
        </service>

        <service id=\"mailer.logger_message_listener\" class=\"Symfony\\Component\\Mailer\\EventListener\\MessageLoggerListener\">
            <tag name=\"kernel.event_subscriber\"/>
        </service>
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/mailer.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\mailer.xml");
    }
}
