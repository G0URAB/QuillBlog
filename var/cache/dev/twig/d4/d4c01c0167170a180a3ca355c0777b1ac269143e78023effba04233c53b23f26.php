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

/* @app/vendor/symfony/framework-bundle/Resources/config/routing.xml */
class __TwigTemplate_c426296d00af014cae9c8f4bc910b91dbf96a839710f7672b2e1dc2bbf423598 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/routing.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <parameters>
        <parameter key=\"router.request_context.host\">localhost</parameter>
        <parameter key=\"router.request_context.scheme\">http</parameter>
        <parameter key=\"router.request_context.base_url\"></parameter>
    </parameters>

    <services>
        <defaults public=\"false\" />

        <service id=\"routing.resolver\" class=\"Symfony\\Component\\Config\\Loader\\LoaderResolver\" />

        <service id=\"routing.loader.xml\" class=\"Symfony\\Component\\Routing\\Loader\\XmlFileLoader\">
            <tag name=\"routing.loader\" />
            <argument type=\"service\" id=\"file_locator\" />
        </service>

        <service id=\"routing.loader.yml\" class=\"Symfony\\Component\\Routing\\Loader\\YamlFileLoader\">
            <tag name=\"routing.loader\" />
            <argument type=\"service\" id=\"file_locator\" />
        </service>

        <service id=\"routing.loader.php\" class=\"Symfony\\Component\\Routing\\Loader\\PhpFileLoader\">
            <tag name=\"routing.loader\" />
            <argument type=\"service\" id=\"file_locator\" />
        </service>

        <service id=\"routing.loader.glob\" class=\"Symfony\\Component\\Routing\\Loader\\GlobFileLoader\">
            <tag name=\"routing.loader\" />
            <argument type=\"service\" id=\"file_locator\" />
        </service>

        <service id=\"routing.loader.directory\" class=\"Symfony\\Component\\Routing\\Loader\\DirectoryLoader\">
            <tag name=\"routing.loader\" />
            <argument type=\"service\" id=\"file_locator\" />
        </service>

        <service id=\"routing.loader.container\" class=\"Symfony\\Component\\Routing\\Loader\\ContainerLoader\">
            <tag name=\"routing.loader\" />
            <argument type=\"tagged_locator\" tag=\"routing.route_loader\" />
        </service>

        <service id=\"routing.loader\" class=\"Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader\" public=\"true\">
            <argument type=\"service\" id=\"routing.resolver\" />
            <argument type=\"collection\" />
        </service>

        <service id=\"router.default\" class=\"Symfony\\Bundle\\FrameworkBundle\\Routing\\Router\">
            <tag name=\"monolog.logger\" channel=\"router\" />
            <tag name=\"container.service_subscriber\" id=\"routing.loader\" />
            <argument type=\"service\" id=\"Psr\\Container\\ContainerInterface\" />
            <argument>%router.resource%</argument>
            <argument type=\"collection\">
                <argument key=\"cache_dir\">%kernel.cache_dir%</argument>
                <argument key=\"debug\">%kernel.debug%</argument>
                <argument key=\"generator_class\">Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator</argument>
                <argument key=\"generator_dumper_class\">Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper</argument>
                <argument key=\"matcher_class\">Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher</argument>
                <argument key=\"matcher_dumper_class\">Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper</argument>
            </argument>
            <argument type=\"service\" id=\"router.request_context\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"parameter_bag\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            <argument>%kernel.default_locale%</argument>
            <call method=\"setConfigCacheFactory\">
                <argument type=\"service\" id=\"config_cache_factory\" />
            </call>
        </service>

        <service id=\"router\" alias=\"router.default\" public=\"true\" />
        <service id=\"Symfony\\Component\\Routing\\RouterInterface\" alias=\"router\" />
        <service id=\"Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface\" alias=\"router\" />
        <service id=\"Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface\" alias=\"router\" />
        <service id=\"Symfony\\Component\\Routing\\RequestContextAwareInterface\" alias=\"router\" />

        <service id=\"router.request_context\" class=\"Symfony\\Component\\Routing\\RequestContext\">
            <argument>%router.request_context.base_url%</argument>
            <argument>GET</argument>
            <argument>%router.request_context.host%</argument>
            <argument>%router.request_context.scheme%</argument>
            <argument>%request_listener.http_port%</argument>
            <argument>%request_listener.https_port%</argument>
        </service>
        <service id=\"Symfony\\Component\\Routing\\RequestContext\" alias=\"router.request_context\" />

        <service id=\"router.cache_warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer\">
            <tag name=\"container.service_subscriber\" id=\"router\" />
            <tag name=\"kernel.cache_warmer\" />
            <argument type=\"service\" id=\"Psr\\Container\\ContainerInterface\" />
        </service>

        <service id=\"router_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\RouterListener\">
            <tag name=\"kernel.event_subscriber\" />
            <tag name=\"monolog.logger\" channel=\"request\" />
            <argument type=\"service\" id=\"router\" />
            <argument type=\"service\" id=\"request_stack\" />
            <argument type=\"service\" id=\"router.request_context\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            <argument>%kernel.project_dir%</argument>
            <argument>%kernel.debug%</argument>
        </service>

        <service id=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController\" public=\"true\">
            <argument type=\"service\" id=\"router\" />
            <argument>%request_listener.http_port%</argument>
            <argument>%request_listener.https_port%</argument>
        </service>

        <service id=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController\" public=\"true\">
            <argument type=\"service\" id=\"twig\" on-invalid=\"ignore\" />
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/routing.xml";
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

    <parameters>
        <parameter key=\"router.request_context.host\">localhost</parameter>
        <parameter key=\"router.request_context.scheme\">http</parameter>
        <parameter key=\"router.request_context.base_url\"></parameter>
    </parameters>

    <services>
        <defaults public=\"false\" />

        <service id=\"routing.resolver\" class=\"Symfony\\Component\\Config\\Loader\\LoaderResolver\" />

        <service id=\"routing.loader.xml\" class=\"Symfony\\Component\\Routing\\Loader\\XmlFileLoader\">
            <tag name=\"routing.loader\" />
            <argument type=\"service\" id=\"file_locator\" />
        </service>

        <service id=\"routing.loader.yml\" class=\"Symfony\\Component\\Routing\\Loader\\YamlFileLoader\">
            <tag name=\"routing.loader\" />
            <argument type=\"service\" id=\"file_locator\" />
        </service>

        <service id=\"routing.loader.php\" class=\"Symfony\\Component\\Routing\\Loader\\PhpFileLoader\">
            <tag name=\"routing.loader\" />
            <argument type=\"service\" id=\"file_locator\" />
        </service>

        <service id=\"routing.loader.glob\" class=\"Symfony\\Component\\Routing\\Loader\\GlobFileLoader\">
            <tag name=\"routing.loader\" />
            <argument type=\"service\" id=\"file_locator\" />
        </service>

        <service id=\"routing.loader.directory\" class=\"Symfony\\Component\\Routing\\Loader\\DirectoryLoader\">
            <tag name=\"routing.loader\" />
            <argument type=\"service\" id=\"file_locator\" />
        </service>

        <service id=\"routing.loader.container\" class=\"Symfony\\Component\\Routing\\Loader\\ContainerLoader\">
            <tag name=\"routing.loader\" />
            <argument type=\"tagged_locator\" tag=\"routing.route_loader\" />
        </service>

        <service id=\"routing.loader\" class=\"Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader\" public=\"true\">
            <argument type=\"service\" id=\"routing.resolver\" />
            <argument type=\"collection\" />
        </service>

        <service id=\"router.default\" class=\"Symfony\\Bundle\\FrameworkBundle\\Routing\\Router\">
            <tag name=\"monolog.logger\" channel=\"router\" />
            <tag name=\"container.service_subscriber\" id=\"routing.loader\" />
            <argument type=\"service\" id=\"Psr\\Container\\ContainerInterface\" />
            <argument>%router.resource%</argument>
            <argument type=\"collection\">
                <argument key=\"cache_dir\">%kernel.cache_dir%</argument>
                <argument key=\"debug\">%kernel.debug%</argument>
                <argument key=\"generator_class\">Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator</argument>
                <argument key=\"generator_dumper_class\">Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper</argument>
                <argument key=\"matcher_class\">Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher</argument>
                <argument key=\"matcher_dumper_class\">Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper</argument>
            </argument>
            <argument type=\"service\" id=\"router.request_context\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"parameter_bag\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            <argument>%kernel.default_locale%</argument>
            <call method=\"setConfigCacheFactory\">
                <argument type=\"service\" id=\"config_cache_factory\" />
            </call>
        </service>

        <service id=\"router\" alias=\"router.default\" public=\"true\" />
        <service id=\"Symfony\\Component\\Routing\\RouterInterface\" alias=\"router\" />
        <service id=\"Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface\" alias=\"router\" />
        <service id=\"Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface\" alias=\"router\" />
        <service id=\"Symfony\\Component\\Routing\\RequestContextAwareInterface\" alias=\"router\" />

        <service id=\"router.request_context\" class=\"Symfony\\Component\\Routing\\RequestContext\">
            <argument>%router.request_context.base_url%</argument>
            <argument>GET</argument>
            <argument>%router.request_context.host%</argument>
            <argument>%router.request_context.scheme%</argument>
            <argument>%request_listener.http_port%</argument>
            <argument>%request_listener.https_port%</argument>
        </service>
        <service id=\"Symfony\\Component\\Routing\\RequestContext\" alias=\"router.request_context\" />

        <service id=\"router.cache_warmer\" class=\"Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer\">
            <tag name=\"container.service_subscriber\" id=\"router\" />
            <tag name=\"kernel.cache_warmer\" />
            <argument type=\"service\" id=\"Psr\\Container\\ContainerInterface\" />
        </service>

        <service id=\"router_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\RouterListener\">
            <tag name=\"kernel.event_subscriber\" />
            <tag name=\"monolog.logger\" channel=\"request\" />
            <argument type=\"service\" id=\"router\" />
            <argument type=\"service\" id=\"request_stack\" />
            <argument type=\"service\" id=\"router.request_context\" on-invalid=\"ignore\" />
            <argument type=\"service\" id=\"logger\" on-invalid=\"ignore\" />
            <argument>%kernel.project_dir%</argument>
            <argument>%kernel.debug%</argument>
        </service>

        <service id=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController\" public=\"true\">
            <argument type=\"service\" id=\"router\" />
            <argument>%request_listener.http_port%</argument>
            <argument>%request_listener.https_port%</argument>
        </service>

        <service id=\"Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController\" public=\"true\">
            <argument type=\"service\" id=\"twig\" on-invalid=\"ignore\" />
        </service>
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/routing.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\routing.xml");
    }
}
