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

/* @app/vendor/symfony/framework-bundle/Resources/config/form_csrf.xml */
class __TwigTemplate_6a0a4d3f6d68a7cbd3364d8890b7e24515a55ec5a45b36c1589fb39740ded868 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/form_csrf.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"form.type_extension.csrf\" class=\"Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension\">
            <tag name=\"form.type_extension\" />
            <argument type=\"service\" id=\"security.csrf.token_manager\" />
            <argument>%form.type_extension.csrf.enabled%</argument>
            <argument>%form.type_extension.csrf.field_name%</argument>
            <argument type=\"service\" id=\"translator\" on-invalid=\"null\" />
            <argument>%validator.translation_domain%</argument>
            <argument type=\"service\" id=\"form.server_params\" />
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/form_csrf.xml";
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

        <service id=\"form.type_extension.csrf\" class=\"Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension\">
            <tag name=\"form.type_extension\" />
            <argument type=\"service\" id=\"security.csrf.token_manager\" />
            <argument>%form.type_extension.csrf.enabled%</argument>
            <argument>%form.type_extension.csrf.field_name%</argument>
            <argument type=\"service\" id=\"translator\" on-invalid=\"null\" />
            <argument>%validator.translation_domain%</argument>
            <argument type=\"service\" id=\"form.server_params\" />
        </service>
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/form_csrf.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\form_csrf.xml");
    }
}
