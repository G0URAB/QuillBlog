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

/* @app/vendor/symfony/twig-bundle/Resources/config/twig.xml */
class __TwigTemplate_3ec411b42aeea3f51b7f80a78c65a774d1c5751fe67e2639912777e2cdb7b682 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bundle/Resources/config/twig.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <defaults public=\"false\" />

        <service id=\"twig\" class=\"Twig\\Environment\" public=\"true\">
            <argument type=\"service\" id=\"twig.loader\" />
            <argument /> <!-- Twig options -->
            <call method=\"addGlobal\">
                <argument>app</argument>
                <argument type=\"service\" id=\"twig.app_variable\" />
            </call>
            <call method=\"addRuntimeLoader\">
                <argument type=\"service\" id=\"twig.runtime_loader\" />
            </call>
            <configurator service=\"twig.configurator.environment\" method=\"configure\" />
        </service>
        <service id=\"Twig_Environment\" alias=\"twig\" />
        <service id=\"Twig\\Environment\" alias=\"twig\" />

        <service id=\"twig.app_variable\" class=\"Symfony\\Bridge\\Twig\\AppVariable\">
            <call method=\"setEnvironment\"><argument>%kernel.environment%</argument></call>
            <call method=\"setDebug\"><argument>%kernel.debug%</argument></call>
            <call method=\"setTokenStorage\"><argument type=\"service\" id=\"security.token_storage\" on-invalid=\"ignore\" /></call>
            <call method=\"setRequestStack\"><argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\" /></call>
        </service>

        <service id=\"twig.template_iterator\" class=\"Symfony\\Bundle\\TwigBundle\\TemplateIterator\">
            <argument type=\"service\" id=\"kernel\" />
            <argument type=\"collection\" /> <!-- Twig paths -->
            <argument>%twig.default_path%</argument>
        </service>

        <service id=\"twig.template_cache_warmer\" class=\"Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheWarmer\">
            <tag name=\"kernel.cache_warmer\" />
            <tag name=\"container.service_subscriber\" id=\"twig\" />
            <argument type=\"service\" id=\"Psr\\Container\\ContainerInterface\" />
            <argument type=\"service\" id=\"twig.template_iterator\" />
        </service>

        <service id=\"twig.loader.native_filesystem\" class=\"Twig\\Loader\\FilesystemLoader\">
            <argument type=\"collection\" /> <!-- paths -->
            <argument>%kernel.project_dir%</argument>
            <tag name=\"twig.loader\"/>
        </service>

        <service id=\"twig.loader.chain\" class=\"Twig\\Loader\\ChainLoader\" />

        <service id=\"twig.extension.profiler\" class=\"Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension\">
            <argument type=\"service\" id=\"twig.profile\" />
            <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"null\" />
        </service>

        <service id=\"twig.profile\" class=\"Twig\\Profiler\\Profile\" />

        <service id=\"data_collector.twig\" class=\"Symfony\\Bridge\\Twig\\DataCollector\\TwigDataCollector\">
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/twig.html.twig\" id=\"twig\" priority=\"257\" />
            <argument type=\"service\" id=\"twig.profile\" />
            <argument type=\"service\" id=\"twig\" />
        </service>

        <service id=\"twig.extension.trans\" class=\"Symfony\\Bridge\\Twig\\Extension\\TranslationExtension\">
            <argument type=\"service\" id=\"translator\" on-invalid=\"null\" />
            <tag name=\"twig.extension\" />
        </service>

        <service id=\"twig.extension.assets\" class=\"Symfony\\Bridge\\Twig\\Extension\\AssetExtension\">
            <argument type=\"service\" id=\"assets.packages\" />
        </service>

        <service id=\"twig.extension.code\" class=\"Symfony\\Bridge\\Twig\\Extension\\CodeExtension\">
            <tag name=\"twig.extension\" />
            <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"ignore\" />
            <argument>%kernel.project_dir%</argument>
            <argument>%kernel.charset%</argument>
        </service>

        <service id=\"twig.extension.routing\" class=\"Symfony\\Bridge\\Twig\\Extension\\RoutingExtension\">
            <argument type=\"service\" id=\"router\" />
        </service>

        <service id=\"twig.extension.yaml\" class=\"Symfony\\Bridge\\Twig\\Extension\\YamlExtension\" />

        <service id=\"twig.extension.debug.stopwatch\" class=\"Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension\">
            <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"ignore\" />
            <argument>%kernel.debug%</argument>
        </service>

        <service id=\"twig.extension.expression\" class=\"Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension\" />

        <service id=\"twig.extension.httpkernel\" class=\"Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension\" />

        <service id=\"twig.runtime.httpkernel\" class=\"Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime\">
            <argument type=\"service\" id=\"fragment.handler\" />
        </service>

        <service id=\"twig.extension.httpfoundation\" class=\"Symfony\\Bridge\\Twig\\Extension\\HttpFoundationExtension\">
            <argument type=\"service\" id=\"url_helper\" />
        </service>

        <service id=\"twig.extension.debug\" class=\"Twig\\Extension\\DebugExtension\" />

        <service id=\"twig.extension.weblink\" class=\"Symfony\\Bridge\\Twig\\Extension\\WebLinkExtension\">
            <argument type=\"service\" id=\"request_stack\" />
        </service>

        <service id=\"twig.translation.extractor\" class=\"Symfony\\Bridge\\Twig\\Translation\\TwigExtractor\">
            <argument type=\"service\" id=\"twig\" />
            <tag name=\"translation.extractor\" alias=\"twig\" />
        </service>

        <service id=\"workflow.twig_extension\" class=\"Symfony\\Bridge\\Twig\\Extension\\WorkflowExtension\">
            <argument type=\"service\" id=\"workflow.registry\" />
        </service>

        <service id=\"twig.configurator.environment\" class=\"Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Configurator\\EnvironmentConfigurator\">
            <argument /> <!-- date format, set in TwigExtension -->
            <argument /> <!-- interval format, set in TwigExtension -->
            <argument /> <!-- timezone, set in TwigExtension -->
            <argument /> <!-- decimals, set in TwigExtension -->
            <argument /> <!-- decimal point, set in TwigExtension -->
            <argument /> <!-- thousands separator, set in TwigExtension -->
        </service>

        <service id=\"twig.runtime_loader\" class=\"Twig\\RuntimeLoader\\ContainerRuntimeLoader\">
            <argument /> <!-- runtime locator -->
        </service>

        <service id=\"twig.error_renderer.html\" class=\"Symfony\\Bridge\\Twig\\ErrorRenderer\\TwigErrorRenderer\" decorates=\"error_renderer.html\">
            <argument type=\"service\" id=\"twig\" />
            <argument type=\"service\" id=\"twig.error_renderer.html.inner\" />
            <argument type=\"service\">
                <service>
                    <factory class=\"Symfony\\Bridge\\Twig\\ErrorRenderer\\TwigErrorRenderer\" method=\"isDebug\" />
                    <argument type=\"service\" id=\"request_stack\" />
                    <argument>%kernel.debug%</argument>
                </service>
            </argument>
        </service>
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bundle/Resources/config/twig.xml";
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

        <service id=\"twig\" class=\"Twig\\Environment\" public=\"true\">
            <argument type=\"service\" id=\"twig.loader\" />
            <argument /> <!-- Twig options -->
            <call method=\"addGlobal\">
                <argument>app</argument>
                <argument type=\"service\" id=\"twig.app_variable\" />
            </call>
            <call method=\"addRuntimeLoader\">
                <argument type=\"service\" id=\"twig.runtime_loader\" />
            </call>
            <configurator service=\"twig.configurator.environment\" method=\"configure\" />
        </service>
        <service id=\"Twig_Environment\" alias=\"twig\" />
        <service id=\"Twig\\Environment\" alias=\"twig\" />

        <service id=\"twig.app_variable\" class=\"Symfony\\Bridge\\Twig\\AppVariable\">
            <call method=\"setEnvironment\"><argument>%kernel.environment%</argument></call>
            <call method=\"setDebug\"><argument>%kernel.debug%</argument></call>
            <call method=\"setTokenStorage\"><argument type=\"service\" id=\"security.token_storage\" on-invalid=\"ignore\" /></call>
            <call method=\"setRequestStack\"><argument type=\"service\" id=\"request_stack\" on-invalid=\"ignore\" /></call>
        </service>

        <service id=\"twig.template_iterator\" class=\"Symfony\\Bundle\\TwigBundle\\TemplateIterator\">
            <argument type=\"service\" id=\"kernel\" />
            <argument type=\"collection\" /> <!-- Twig paths -->
            <argument>%twig.default_path%</argument>
        </service>

        <service id=\"twig.template_cache_warmer\" class=\"Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheWarmer\">
            <tag name=\"kernel.cache_warmer\" />
            <tag name=\"container.service_subscriber\" id=\"twig\" />
            <argument type=\"service\" id=\"Psr\\Container\\ContainerInterface\" />
            <argument type=\"service\" id=\"twig.template_iterator\" />
        </service>

        <service id=\"twig.loader.native_filesystem\" class=\"Twig\\Loader\\FilesystemLoader\">
            <argument type=\"collection\" /> <!-- paths -->
            <argument>%kernel.project_dir%</argument>
            <tag name=\"twig.loader\"/>
        </service>

        <service id=\"twig.loader.chain\" class=\"Twig\\Loader\\ChainLoader\" />

        <service id=\"twig.extension.profiler\" class=\"Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension\">
            <argument type=\"service\" id=\"twig.profile\" />
            <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"null\" />
        </service>

        <service id=\"twig.profile\" class=\"Twig\\Profiler\\Profile\" />

        <service id=\"data_collector.twig\" class=\"Symfony\\Bridge\\Twig\\DataCollector\\TwigDataCollector\">
            <tag name=\"data_collector\" template=\"@WebProfiler/Collector/twig.html.twig\" id=\"twig\" priority=\"257\" />
            <argument type=\"service\" id=\"twig.profile\" />
            <argument type=\"service\" id=\"twig\" />
        </service>

        <service id=\"twig.extension.trans\" class=\"Symfony\\Bridge\\Twig\\Extension\\TranslationExtension\">
            <argument type=\"service\" id=\"translator\" on-invalid=\"null\" />
            <tag name=\"twig.extension\" />
        </service>

        <service id=\"twig.extension.assets\" class=\"Symfony\\Bridge\\Twig\\Extension\\AssetExtension\">
            <argument type=\"service\" id=\"assets.packages\" />
        </service>

        <service id=\"twig.extension.code\" class=\"Symfony\\Bridge\\Twig\\Extension\\CodeExtension\">
            <tag name=\"twig.extension\" />
            <argument type=\"service\" id=\"debug.file_link_formatter\" on-invalid=\"ignore\" />
            <argument>%kernel.project_dir%</argument>
            <argument>%kernel.charset%</argument>
        </service>

        <service id=\"twig.extension.routing\" class=\"Symfony\\Bridge\\Twig\\Extension\\RoutingExtension\">
            <argument type=\"service\" id=\"router\" />
        </service>

        <service id=\"twig.extension.yaml\" class=\"Symfony\\Bridge\\Twig\\Extension\\YamlExtension\" />

        <service id=\"twig.extension.debug.stopwatch\" class=\"Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension\">
            <argument type=\"service\" id=\"debug.stopwatch\" on-invalid=\"ignore\" />
            <argument>%kernel.debug%</argument>
        </service>

        <service id=\"twig.extension.expression\" class=\"Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension\" />

        <service id=\"twig.extension.httpkernel\" class=\"Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension\" />

        <service id=\"twig.runtime.httpkernel\" class=\"Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime\">
            <argument type=\"service\" id=\"fragment.handler\" />
        </service>

        <service id=\"twig.extension.httpfoundation\" class=\"Symfony\\Bridge\\Twig\\Extension\\HttpFoundationExtension\">
            <argument type=\"service\" id=\"url_helper\" />
        </service>

        <service id=\"twig.extension.debug\" class=\"Twig\\Extension\\DebugExtension\" />

        <service id=\"twig.extension.weblink\" class=\"Symfony\\Bridge\\Twig\\Extension\\WebLinkExtension\">
            <argument type=\"service\" id=\"request_stack\" />
        </service>

        <service id=\"twig.translation.extractor\" class=\"Symfony\\Bridge\\Twig\\Translation\\TwigExtractor\">
            <argument type=\"service\" id=\"twig\" />
            <tag name=\"translation.extractor\" alias=\"twig\" />
        </service>

        <service id=\"workflow.twig_extension\" class=\"Symfony\\Bridge\\Twig\\Extension\\WorkflowExtension\">
            <argument type=\"service\" id=\"workflow.registry\" />
        </service>

        <service id=\"twig.configurator.environment\" class=\"Symfony\\Bundle\\TwigBundle\\DependencyInjection\\Configurator\\EnvironmentConfigurator\">
            <argument /> <!-- date format, set in TwigExtension -->
            <argument /> <!-- interval format, set in TwigExtension -->
            <argument /> <!-- timezone, set in TwigExtension -->
            <argument /> <!-- decimals, set in TwigExtension -->
            <argument /> <!-- decimal point, set in TwigExtension -->
            <argument /> <!-- thousands separator, set in TwigExtension -->
        </service>

        <service id=\"twig.runtime_loader\" class=\"Twig\\RuntimeLoader\\ContainerRuntimeLoader\">
            <argument /> <!-- runtime locator -->
        </service>

        <service id=\"twig.error_renderer.html\" class=\"Symfony\\Bridge\\Twig\\ErrorRenderer\\TwigErrorRenderer\" decorates=\"error_renderer.html\">
            <argument type=\"service\" id=\"twig\" />
            <argument type=\"service\" id=\"twig.error_renderer.html.inner\" />
            <argument type=\"service\">
                <service>
                    <factory class=\"Symfony\\Bridge\\Twig\\ErrorRenderer\\TwigErrorRenderer\" method=\"isDebug\" />
                    <argument type=\"service\" id=\"request_stack\" />
                    <argument>%kernel.debug%</argument>
                </service>
            </argument>
        </service>
    </services>
</container>
", "@app/vendor/symfony/twig-bundle/Resources/config/twig.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bundle\\Resources\\config\\twig.xml");
    }
}
