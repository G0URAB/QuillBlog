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

/* @app/vendor/symfony/framework-bundle/Resources/config/security_csrf.xml */
class __TwigTemplate_2bec814ac1babb5a9686d9765879b5928e8be7258fce5f46c251f4527f5d53e4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/security_csrf.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"security.csrf.token_generator\" class=\"Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator\" />
        <service id=\"Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface\" alias=\"security.csrf.token_generator\" />

        <service id=\"security.csrf.token_storage\" class=\"Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage\">
            <argument type=\"service\" id=\"session\" />
        </service>
        <service id=\"Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface\" alias=\"security.csrf.token_storage\" />

        <service id=\"security.csrf.token_manager\" class=\"Symfony\\Component\\Security\\Csrf\\CsrfTokenManager\" public=\"true\">
            <argument type=\"service\" id=\"security.csrf.token_generator\" />
            <argument type=\"service\" id=\"security.csrf.token_storage\" />
            <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\" />
        </service>
        <service id=\"Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface\" alias=\"security.csrf.token_manager\" />

        <service id=\"twig.runtime.security_csrf\" class=\"Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime\">
            <tag name=\"twig.runtime\" />
            <argument type=\"service\" id=\"security.csrf.token_manager\" />
        </service>

        <service id=\"twig.extension.security_csrf\" class=\"Symfony\\Bridge\\Twig\\Extension\\CsrfExtension\">
            <tag name=\"twig.extension\" />
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/security_csrf.xml";
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

        <service id=\"security.csrf.token_generator\" class=\"Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator\" />
        <service id=\"Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface\" alias=\"security.csrf.token_generator\" />

        <service id=\"security.csrf.token_storage\" class=\"Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage\">
            <argument type=\"service\" id=\"session\" />
        </service>
        <service id=\"Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface\" alias=\"security.csrf.token_storage\" />

        <service id=\"security.csrf.token_manager\" class=\"Symfony\\Component\\Security\\Csrf\\CsrfTokenManager\" public=\"true\">
            <argument type=\"service\" id=\"security.csrf.token_generator\" />
            <argument type=\"service\" id=\"security.csrf.token_storage\" />
            <argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\" />
        </service>
        <service id=\"Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface\" alias=\"security.csrf.token_manager\" />

        <service id=\"twig.runtime.security_csrf\" class=\"Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime\">
            <tag name=\"twig.runtime\" />
            <argument type=\"service\" id=\"security.csrf.token_manager\" />
        </service>

        <service id=\"twig.extension.security_csrf\" class=\"Symfony\\Bridge\\Twig\\Extension\\CsrfExtension\">
            <tag name=\"twig.extension\" />
        </service>
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/security_csrf.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\security_csrf.xml");
    }
}
