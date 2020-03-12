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

/* @app/vendor/symfony/twig-bundle/Resources/config/form.xml */
class __TwigTemplate_715d7e4c902f8e2e9057ab86b7e140b53dc6c0cc8c423d36e7f8c6714815f336 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bundle/Resources/config/form.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>
<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"twig.extension.form\" class=\"Symfony\\Bridge\\Twig\\Extension\\FormExtension\">
            <argument type=\"collection\">
                <argument type=\"service\" id=\"service_container\" />
                <argument>twig.form.renderer</argument>
            </argument>
        </service>

        <service id=\"twig.form.engine\" class=\"Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine\">
            <argument>%twig.form.resources%</argument>
            <argument type=\"service\" id=\"twig\" />
        </service>

        <service id=\"twig.form.renderer\" class=\"Symfony\\Component\\Form\\FormRenderer\">
            <argument type=\"service\" id=\"twig.form.engine\" />
            <argument type=\"service\" id=\"security.csrf.token_manager\" on-invalid=\"null\" />
            <tag name=\"twig.runtime\" />
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bundle/Resources/config/form.xml";
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

        <service id=\"twig.extension.form\" class=\"Symfony\\Bridge\\Twig\\Extension\\FormExtension\">
            <argument type=\"collection\">
                <argument type=\"service\" id=\"service_container\" />
                <argument>twig.form.renderer</argument>
            </argument>
        </service>

        <service id=\"twig.form.engine\" class=\"Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine\">
            <argument>%twig.form.resources%</argument>
            <argument type=\"service\" id=\"twig\" />
        </service>

        <service id=\"twig.form.renderer\" class=\"Symfony\\Component\\Form\\FormRenderer\">
            <argument type=\"service\" id=\"twig.form.engine\" />
            <argument type=\"service\" id=\"security.csrf.token_manager\" on-invalid=\"null\" />
            <tag name=\"twig.runtime\" />
        </service>
    </services>
</container>
", "@app/vendor/symfony/twig-bundle/Resources/config/form.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bundle\\Resources\\config\\form.xml");
    }
}
