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

/* @app/vendor/symfony/framework-bundle/Resources/config/routing/errors.xml */
class __TwigTemplate_a4fff691086d8efd89c997996098287ecc4eae3b4e6f7ab217cec935ec274848 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/routing/errors.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<routes xmlns=\"http://symfony.com/schema/routing\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/routing https://symfony.com/schema/routing/routing-1.0.xsd\">

    <route id=\"_preview_error\" path=\"/{code}.{_format}\">
        <default key=\"_controller\">error_controller::preview</default>
        <default key=\"_format\">html</default>
        <requirement key=\"code\">\\d+</requirement>
    </route>
</routes>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/routing/errors.xml";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<routes xmlns=\"http://symfony.com/schema/routing\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/routing https://symfony.com/schema/routing/routing-1.0.xsd\">

    <route id=\"_preview_error\" path=\"/{code}.{_format}\">
        <default key=\"_controller\">error_controller::preview</default>
        <default key=\"_format\">html</default>
        <requirement key=\"code\">\\d+</requirement>
    </route>
</routes>
", "@app/vendor/symfony/framework-bundle/Resources/config/routing/errors.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\routing\\errors.xml");
    }
}
