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

/* @app/vendor/symfony/framework-bundle/Resources/config/lock.xml */
class __TwigTemplate_259b84aa55710145aae24eabb821b6e22ec6d0ae7603d91cd3c0a498e735ffd5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/lock.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"lock.store.combined.abstract\" class=\"Symfony\\Component\\Lock\\Store\\CombinedStore\" abstract=\"true\">
            <argument /> <!-- List of stores -->
            <argument type=\"service\" id=\"lock.strategy.majority\" /> <!-- Strategy -->
        </service>

        <service id=\"lock.strategy.majority\" class=\"Symfony\\Component\\Lock\\Strategy\\ConsensusStrategy\" />

        <service id=\"lock.factory.abstract\" class=\"Symfony\\Component\\Lock\\LockFactory\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"lock\" />
            <argument /> <!-- Store -->
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>

    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/lock.xml";
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

        <service id=\"lock.store.combined.abstract\" class=\"Symfony\\Component\\Lock\\Store\\CombinedStore\" abstract=\"true\">
            <argument /> <!-- List of stores -->
            <argument type=\"service\" id=\"lock.strategy.majority\" /> <!-- Strategy -->
        </service>

        <service id=\"lock.strategy.majority\" class=\"Symfony\\Component\\Lock\\Strategy\\ConsensusStrategy\" />

        <service id=\"lock.factory.abstract\" class=\"Symfony\\Component\\Lock\\LockFactory\" abstract=\"true\">
            <tag name=\"monolog.logger\" channel=\"lock\" />
            <argument /> <!-- Store -->
            <call method=\"setLogger\">
                <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            </call>
        </service>

    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/lock.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\lock.xml");
    }
}
