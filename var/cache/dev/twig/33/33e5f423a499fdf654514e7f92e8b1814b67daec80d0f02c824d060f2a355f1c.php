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

/* @app/vendor/symfony/twig-bundle/Resources/config/mailer.xml */
class __TwigTemplate_fe27b8f839690365f9b9a14cdd008f1137d2b2ab8eff0db1d00327c3c30c9836 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bundle/Resources/config/mailer.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"twig.mailer.message_listener\" class=\"Symfony\\Component\\Mailer\\EventListener\\MessageListener\">
            <argument>null</argument>
            <argument type=\"service\" id=\"twig.mime_body_renderer\" />
            <tag name=\"kernel.event_subscriber\"/>
        </service>

        <service id=\"twig.mime_body_renderer\" class=\"Symfony\\Bridge\\Twig\\Mime\\BodyRenderer\">
            <argument type=\"service\" id=\"twig\" />
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bundle/Resources/config/mailer.xml";
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
        <service id=\"twig.mailer.message_listener\" class=\"Symfony\\Component\\Mailer\\EventListener\\MessageListener\">
            <argument>null</argument>
            <argument type=\"service\" id=\"twig.mime_body_renderer\" />
            <tag name=\"kernel.event_subscriber\"/>
        </service>

        <service id=\"twig.mime_body_renderer\" class=\"Symfony\\Bridge\\Twig\\Mime\\BodyRenderer\">
            <argument type=\"service\" id=\"twig\" />
        </service>
    </services>
</container>
", "@app/vendor/symfony/twig-bundle/Resources/config/mailer.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bundle\\Resources\\config\\mailer.xml");
    }
}
