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

/* @app/vendor/symfony/framework-bundle/Resources/config/error_renderer.xml */
class __TwigTemplate_f2844aba32c25ac0528d66a076315d4e5ca057fc9a549bbbdc39b0cf976724c9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/error_renderer.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
           xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"error_handler.error_renderer.html\" class=\"Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer\">
            <argument type=\"service\">
                <service>
                    <factory class=\"Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer\" method=\"isDebug\" />
                    <argument type=\"service\" id=\"request_stack\" />
                    <argument>%kernel.debug%</argument>
                </service>
            </argument>
            <argument>%kernel.charset%</argument>
            <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\" />
            <argument>%kernel.project_dir%</argument>
            <argument type=\"service\">
                <service>
                    <factory class=\"Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer\" method=\"getAndCleanOutputBuffer\" />
                    <argument type=\"service\" id=\"request_stack\" />
                </service>
            </argument>
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
        </service>

        <service id=\"error_renderer.html\" alias=\"error_handler.error_renderer.html\" />
        <service id=\"error_renderer\" alias=\"error_renderer.html\" />
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/error_renderer.xml";
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
        <service id=\"error_handler.error_renderer.html\" class=\"Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer\">
            <argument type=\"service\">
                <service>
                    <factory class=\"Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer\" method=\"isDebug\" />
                    <argument type=\"service\" id=\"request_stack\" />
                    <argument>%kernel.debug%</argument>
                </service>
            </argument>
            <argument>%kernel.charset%</argument>
            <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"null\" />
            <argument>%kernel.project_dir%</argument>
            <argument type=\"service\">
                <service>
                    <factory class=\"Symfony\\Component\\ErrorHandler\\ErrorRenderer\\HtmlErrorRenderer\" method=\"getAndCleanOutputBuffer\" />
                    <argument type=\"service\" id=\"request_stack\" />
                </service>
            </argument>
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
        </service>

        <service id=\"error_renderer.html\" alias=\"error_handler.error_renderer.html\" />
        <service id=\"error_renderer\" alias=\"error_renderer.html\" />
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/error_renderer.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\error_renderer.xml");
    }
}
