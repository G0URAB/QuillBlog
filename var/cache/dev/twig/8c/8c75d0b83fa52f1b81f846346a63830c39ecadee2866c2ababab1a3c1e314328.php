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

/* @app/vendor/symfony/framework-bundle/Resources/config/translation_debug.xml */
class __TwigTemplate_93be24a968a8f172dedddba2bfe0e3d4c0c1618cb31a52a7a23a16f7908425df extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/translation_debug.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <!-- DataCollectorTranslator -->
        <service id=\"translator.data_collector\" class=\"Symfony\\Component\\Translation\\DataCollectorTranslator\">
            <argument type=\"service\" id=\"translator.data_collector.inner\" />
        </service>

        <!-- DataCollector -->
        <service id=\"data_collector.translation\" class=\"Symfony\\Component\\Translation\\DataCollector\\TranslationDataCollector\">
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/translation.html.twig\" id=\"translation\" priority=\"275\" />
            <argument type=\"service\" id=\"translator.data_collector\" />
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/translation_debug.xml";
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

        <!-- DataCollectorTranslator -->
        <service id=\"translator.data_collector\" class=\"Symfony\\Component\\Translation\\DataCollectorTranslator\">
            <argument type=\"service\" id=\"translator.data_collector.inner\" />
        </service>

        <!-- DataCollector -->
        <service id=\"data_collector.translation\" class=\"Symfony\\Component\\Translation\\DataCollector\\TranslationDataCollector\">
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/translation.html.twig\" id=\"translation\" priority=\"275\" />
            <argument type=\"service\" id=\"translator.data_collector\" />
        </service>
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/translation_debug.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\translation_debug.xml");
    }
}
