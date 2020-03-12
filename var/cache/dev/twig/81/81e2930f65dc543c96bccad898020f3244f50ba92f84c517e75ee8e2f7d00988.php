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

/* @app/vendor/symfony/framework-bundle/Resources/config/profiling.xml */
class __TwigTemplate_2c6adb39bbc53e9a87dbd21581c4a98e801ee07f10334b910ed267fc02a93e40 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/profiling.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"profiler\" class=\"Symfony\\Component\\HttpKernel\\Profiler\\Profiler\" public=\"true\">
            <tag name=\"monolog.logger\" channel=\"profiler\" />
            <argument type=\"service\" id=\"profiler.storage\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
        </service>

        <service id=\"profiler.storage\" class=\"Symfony\\Component\\HttpKernel\\Profiler\\FileProfilerStorage\">
            <argument>%profiler.storage.dsn%</argument>
        </service>

        <service id=\"profiler_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener\">
            <tag name=\"kernel.event_subscriber\" />
            <argument type=\"service\" id=\"profiler\" />
            <argument type=\"service\" id=\"request_stack\" />
            <argument>null</argument>
            <argument>%profiler_listener.only_exceptions%</argument>
            <argument>%profiler_listener.only_master_requests%</argument>
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/profiling.xml";
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

        <service id=\"profiler\" class=\"Symfony\\Component\\HttpKernel\\Profiler\\Profiler\" public=\"true\">
            <tag name=\"monolog.logger\" channel=\"profiler\" />
            <argument type=\"service\" id=\"profiler.storage\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"null\" />
        </service>

        <service id=\"profiler.storage\" class=\"Symfony\\Component\\HttpKernel\\Profiler\\FileProfilerStorage\">
            <argument>%profiler.storage.dsn%</argument>
        </service>

        <service id=\"profiler_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener\">
            <tag name=\"kernel.event_subscriber\" />
            <argument type=\"service\" id=\"profiler\" />
            <argument type=\"service\" id=\"request_stack\" />
            <argument>null</argument>
            <argument>%profiler_listener.only_exceptions%</argument>
            <argument>%profiler_listener.only_master_requests%</argument>
        </service>
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/profiling.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\profiling.xml");
    }
}
