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

/* @app/vendor/symfony/framework-bundle/Resources/config/property_access.xml */
class __TwigTemplate_617e98ca8fdbe85f9c725357afb7c7fdd8e390ec7f30f63676622bc5e96197ad extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/property_access.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"property_accessor\" class=\"Symfony\\Component\\PropertyAccess\\PropertyAccessor\">
            <argument /> <!-- magicCall, set by the extension -->
            <argument /> <!-- throwExceptionOnInvalidIndex, set by the extension -->
            <argument type=\"service\" id=\"cache.property_access\" on-invalid=\"ignore\" />
            <argument /> <!-- throwExceptionOnInvalidPropertyPath, set by the extension -->
        </service>
        <service id=\"Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface\" alias=\"property_accessor\" />
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/property_access.xml";
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

        <service id=\"property_accessor\" class=\"Symfony\\Component\\PropertyAccess\\PropertyAccessor\">
            <argument /> <!-- magicCall, set by the extension -->
            <argument /> <!-- throwExceptionOnInvalidIndex, set by the extension -->
            <argument type=\"service\" id=\"cache.property_access\" on-invalid=\"ignore\" />
            <argument /> <!-- throwExceptionOnInvalidPropertyPath, set by the extension -->
        </service>
        <service id=\"Symfony\\Component\\PropertyAccess\\PropertyAccessorInterface\" alias=\"property_accessor\" />
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/property_access.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\property_access.xml");
    }
}
