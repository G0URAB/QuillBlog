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

/* @app/vendor/symfony/framework-bundle/Resources/config/mailer_transports.xml */
class __TwigTemplate_877c760c96f1e5530f9b9e48d27e586824b414b467a41b2bb16c8923c1d6c9ef extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/mailer_transports.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
           xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"mailer.transport_factory.abstract\" class=\"Symfony\\Component\\Mailer\\Transport\\AbstractTransportFactory\" abstract=\"true\">
            <argument type=\"service\" id=\"event_dispatcher\" />
            <argument type=\"service\" id=\"http_client\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
        </service>

        <service id=\"mailer.transport_factory.amazon\" class=\"Symfony\\Component\\Mailer\\Bridge\\Amazon\\Transport\\SesTransportFactory\" parent=\"mailer.transport_factory.abstract\">
            <tag name=\"mailer.transport_factory\" />
        </service>

        <service id=\"mailer.transport_factory.gmail\" class=\"Symfony\\Component\\Mailer\\Bridge\\Google\\Transport\\GmailTransportFactory\" parent=\"mailer.transport_factory.abstract\">
            <tag name=\"mailer.transport_factory\" />
        </service>

        <service id=\"mailer.transport_factory.mailchimp\" class=\"Symfony\\Component\\Mailer\\Bridge\\Mailchimp\\Transport\\MandrillTransportFactory\" parent=\"mailer.transport_factory.abstract\">
            <tag name=\"mailer.transport_factory\" />
        </service>

        <service id=\"mailer.transport_factory.mailgun\" class=\"Symfony\\Component\\Mailer\\Bridge\\Mailgun\\Transport\\MailgunTransportFactory\" parent=\"mailer.transport_factory.abstract\">
            <tag name=\"mailer.transport_factory\" />
        </service>

        <service id=\"mailer.transport_factory.postmark\" class=\"Symfony\\Component\\Mailer\\Bridge\\Postmark\\Transport\\PostmarkTransportFactory\" parent=\"mailer.transport_factory.abstract\">
            <tag name=\"mailer.transport_factory\" />
        </service>

        <service id=\"mailer.transport_factory.sendgrid\" class=\"Symfony\\Component\\Mailer\\Bridge\\Sendgrid\\Transport\\SendgridTransportFactory\" parent=\"mailer.transport_factory.abstract\">
            <tag name=\"mailer.transport_factory\" />
        </service>

        <service id=\"mailer.transport_factory.null\" class=\"Symfony\\Component\\Mailer\\Transport\\NullTransportFactory\" parent=\"mailer.transport_factory.abstract\">
            <tag name=\"mailer.transport_factory\" />
        </service>

        <service id=\"mailer.transport_factory.sendmail\" class=\"Symfony\\Component\\Mailer\\Transport\\SendmailTransportFactory\" parent=\"mailer.transport_factory.abstract\">
            <tag name=\"mailer.transport_factory\" />
        </service>

        <service id=\"mailer.transport_factory.smtp\" class=\"Symfony\\Component\\Mailer\\Transport\\Smtp\\EsmtpTransportFactory\" parent=\"mailer.transport_factory.abstract\">
            <tag name=\"mailer.transport_factory\" priority=\"-100\" />
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/mailer_transports.xml";
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
        <service id=\"mailer.transport_factory.abstract\" class=\"Symfony\\Component\\Mailer\\Transport\\AbstractTransportFactory\" abstract=\"true\">
            <argument type=\"service\" id=\"event_dispatcher\" />
            <argument type=\"service\" id=\"http_client\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
        </service>

        <service id=\"mailer.transport_factory.amazon\" class=\"Symfony\\Component\\Mailer\\Bridge\\Amazon\\Transport\\SesTransportFactory\" parent=\"mailer.transport_factory.abstract\">
            <tag name=\"mailer.transport_factory\" />
        </service>

        <service id=\"mailer.transport_factory.gmail\" class=\"Symfony\\Component\\Mailer\\Bridge\\Google\\Transport\\GmailTransportFactory\" parent=\"mailer.transport_factory.abstract\">
            <tag name=\"mailer.transport_factory\" />
        </service>

        <service id=\"mailer.transport_factory.mailchimp\" class=\"Symfony\\Component\\Mailer\\Bridge\\Mailchimp\\Transport\\MandrillTransportFactory\" parent=\"mailer.transport_factory.abstract\">
            <tag name=\"mailer.transport_factory\" />
        </service>

        <service id=\"mailer.transport_factory.mailgun\" class=\"Symfony\\Component\\Mailer\\Bridge\\Mailgun\\Transport\\MailgunTransportFactory\" parent=\"mailer.transport_factory.abstract\">
            <tag name=\"mailer.transport_factory\" />
        </service>

        <service id=\"mailer.transport_factory.postmark\" class=\"Symfony\\Component\\Mailer\\Bridge\\Postmark\\Transport\\PostmarkTransportFactory\" parent=\"mailer.transport_factory.abstract\">
            <tag name=\"mailer.transport_factory\" />
        </service>

        <service id=\"mailer.transport_factory.sendgrid\" class=\"Symfony\\Component\\Mailer\\Bridge\\Sendgrid\\Transport\\SendgridTransportFactory\" parent=\"mailer.transport_factory.abstract\">
            <tag name=\"mailer.transport_factory\" />
        </service>

        <service id=\"mailer.transport_factory.null\" class=\"Symfony\\Component\\Mailer\\Transport\\NullTransportFactory\" parent=\"mailer.transport_factory.abstract\">
            <tag name=\"mailer.transport_factory\" />
        </service>

        <service id=\"mailer.transport_factory.sendmail\" class=\"Symfony\\Component\\Mailer\\Transport\\SendmailTransportFactory\" parent=\"mailer.transport_factory.abstract\">
            <tag name=\"mailer.transport_factory\" />
        </service>

        <service id=\"mailer.transport_factory.smtp\" class=\"Symfony\\Component\\Mailer\\Transport\\Smtp\\EsmtpTransportFactory\" parent=\"mailer.transport_factory.abstract\">
            <tag name=\"mailer.transport_factory\" priority=\"-100\" />
        </service>
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/mailer_transports.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\mailer_transports.xml");
    }
}
