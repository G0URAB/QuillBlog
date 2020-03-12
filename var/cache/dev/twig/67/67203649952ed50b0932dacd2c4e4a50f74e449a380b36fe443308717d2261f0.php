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

/* @app/vendor/symfony/framework-bundle/Resources/config/validator_debug.xml */
class __TwigTemplate_e0cc41e6ad39a3fac8269f348157f7757c9da61b5467d3fca51216ce738927fa extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/validator_debug.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"debug.validator\" decorates=\"validator\" decoration-priority=\"255\" class=\"Symfony\\Component\\Validator\\Validator\\TraceableValidator\">
            <argument type=\"service\" id=\"debug.validator.inner\" />
            <tag name=\"kernel.reset\" method=\"reset\" />
        </service>

        <!-- DataCollector -->
        <service id=\"data_collector.validator\" class=\"Symfony\\Component\\Validator\\DataCollector\\ValidatorDataCollector\">
            <argument type=\"service\" id=\"debug.validator\"/>
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/validator.html.twig\" id=\"validator\" priority=\"320\" />
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/validator_debug.xml";
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

        <service id=\"debug.validator\" decorates=\"validator\" decoration-priority=\"255\" class=\"Symfony\\Component\\Validator\\Validator\\TraceableValidator\">
            <argument type=\"service\" id=\"debug.validator.inner\" />
            <tag name=\"kernel.reset\" method=\"reset\" />
        </service>

        <!-- DataCollector -->
        <service id=\"data_collector.validator\" class=\"Symfony\\Component\\Validator\\DataCollector\\ValidatorDataCollector\">
            <argument type=\"service\" id=\"debug.validator\"/>
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/validator.html.twig\" id=\"validator\" priority=\"320\" />
        </service>
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/validator_debug.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\validator_debug.xml");
    }
}
