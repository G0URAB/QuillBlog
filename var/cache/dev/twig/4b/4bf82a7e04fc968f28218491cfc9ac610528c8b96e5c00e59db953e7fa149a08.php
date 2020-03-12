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

/* @app/vendor/symfony/framework-bundle/Resources/config/services.xml */
class __TwigTemplate_1f6d15850eed4a59a8ac2abbbcf2960af097ba021f5f2a96b227ddc071599dad extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Resources/config/services.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd\">

    <parameters>
        <!-- this parameter is used at compile time in RegisterListenersPass -->
        <parameter key=\"event_dispatcher.event_aliases\" type=\"collection\">
            <parameter key=\"Symfony\\Component\\Console\\Event\\ConsoleCommandEvent\">console.command</parameter>
            <parameter key=\"Symfony\\Component\\Console\\Event\\ConsoleErrorEvent\">console.error</parameter>
            <parameter key=\"Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent\">console.terminate</parameter>
            <parameter key=\"Symfony\\Component\\Form\\Event\\PreSubmitEvent\">form.pre_submit</parameter>
            <parameter key=\"Symfony\\Component\\Form\\Event\\SubmitEvent\">form.submit</parameter>
            <parameter key=\"Symfony\\Component\\Form\\Event\\PostSubmitEvent\">form.post_submit</parameter>
            <parameter key=\"Symfony\\Component\\Form\\Event\\PreSetDataEvent\">form.pre_set_data</parameter>
            <parameter key=\"Symfony\\Component\\Form\\Event\\PostSetDataEvent\">form.post_set_data</parameter>
            <parameter key=\"Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent\">kernel.controller_arguments</parameter>
            <parameter key=\"Symfony\\Component\\HttpKernel\\Event\\ControllerEvent\">kernel.controller</parameter>
            <parameter key=\"Symfony\\Component\\HttpKernel\\Event\\ResponseEvent\">kernel.response</parameter>
            <parameter key=\"Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent\">kernel.finish_request</parameter>
            <parameter key=\"Symfony\\Component\\HttpKernel\\Event\\RequestEvent\">kernel.request</parameter>
            <parameter key=\"Symfony\\Component\\HttpKernel\\Event\\ViewEvent\">kernel.view</parameter>
            <parameter key=\"Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent\">kernel.exception</parameter>
            <parameter key=\"Symfony\\Component\\HttpKernel\\Event\\TerminateEvent\">kernel.terminate</parameter>
            <parameter key=\"Symfony\\Component\\Workflow\\Event\\GuardEvent\">workflow.guard</parameter>
            <parameter key=\"Symfony\\Component\\Workflow\\Event\\LeaveEvent\">workflow.leave</parameter>
            <parameter key=\"Symfony\\Component\\Workflow\\Event\\TransitionEvent\">workflow.transition</parameter>
            <parameter key=\"Symfony\\Component\\Workflow\\Event\\EnterEvent\">workflow.enter</parameter>
            <parameter key=\"Symfony\\Component\\Workflow\\Event\\EnteredEvent\">workflow.entered</parameter>
            <parameter key=\"Symfony\\Component\\Workflow\\Event\\CompletedEvent\">workflow.completed</parameter>
            <parameter key=\"Symfony\\Component\\Workflow\\Event\\AnnounceEvent\">workflow.announce</parameter>
        </parameter>
    </parameters>
    <services>
        <defaults public=\"false\" />

        <service id=\"parameter_bag\" class=\"Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBag\">
            <argument type=\"service\" id=\"service_container\" />
        </service>
        <service id=\"Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface\" alias=\"parameter_bag\" />
        <service id=\"Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface\" alias=\"parameter_bag\" />

        <service id=\"event_dispatcher\" class=\"Symfony\\Component\\EventDispatcher\\EventDispatcher\" public=\"true\">
            <tag name=\"container.hot_path\" />
        </service>
        <service id=\"Symfony\\Component\\EventDispatcher\\EventDispatcherInterface\" alias=\"event_dispatcher\" />
        <service id=\"Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface\" alias=\"event_dispatcher\" />

        <service id=\"http_kernel\" class=\"Symfony\\Component\\HttpKernel\\HttpKernel\" public=\"true\">
            <argument type=\"service\" id=\"event_dispatcher\" />
            <argument type=\"service\" id=\"controller_resolver\" />
            <argument type=\"service\" id=\"request_stack\" />
            <argument type=\"service\" id=\"argument_resolver\" />
            <tag name=\"container.hot_path\" />
        </service>
        <service id=\"Symfony\\Component\\HttpKernel\\HttpKernelInterface\" alias=\"http_kernel\" />

        <service id=\"request_stack\" class=\"Symfony\\Component\\HttpFoundation\\RequestStack\" public=\"true\" />
        <service id=\"Symfony\\Component\\HttpFoundation\\RequestStack\" alias=\"request_stack\" />

        <service id=\"url_helper\" class=\"Symfony\\Component\\HttpFoundation\\UrlHelper\">
            <argument type=\"service\" id=\"request_stack\" />
            <argument type=\"service\" id=\"router.request_context\" on-invalid=\"ignore\" />
        </service>
        <service id=\"Symfony\\Component\\HttpFoundation\\UrlHelper\" alias=\"url_helper\" />

        <service id=\"cache_warmer\" class=\"Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate\" public=\"true\">
            <argument type=\"tagged_iterator\" tag=\"kernel.cache_warmer\" />
            <argument>%kernel.debug%</argument>
            <argument>%kernel.cache_dir%/%kernel.container_class%Deprecations.log</argument>
        </service>

        <service id=\"cache_clearer\" class=\"Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer\" public=\"true\">
            <argument type=\"tagged_iterator\" tag=\"kernel.cache_clearer\" />
        </service>

        <service id=\"kernel\" synthetic=\"true\" public=\"true\" />
        <service id=\"Symfony\\Component\\HttpKernel\\KernelInterface\" alias=\"kernel\" />

        <service id=\"filesystem\" class=\"Symfony\\Component\\Filesystem\\Filesystem\" public=\"true\" />
        <service id=\"Symfony\\Component\\Filesystem\\Filesystem\" alias=\"filesystem\" />

        <service id=\"file_locator\" class=\"Symfony\\Component\\HttpKernel\\Config\\FileLocator\">
            <argument type=\"service\" id=\"kernel\" />
        </service>
        <service id=\"Symfony\\Component\\HttpKernel\\Config\\FileLocator\" alias=\"file_locator\" />

        <service id=\"uri_signer\" class=\"Symfony\\Component\\HttpKernel\\UriSigner\">
            <argument>%kernel.secret%</argument>
        </service>

        <service id=\"config_cache_factory\" class=\"Symfony\\Component\\Config\\ResourceCheckerConfigCacheFactory\">
            <argument type=\"tagged_iterator\" tag=\"config_cache.resource_checker\" />
        </service>

        <service id=\"dependency_injection.config.container_parameters_resource_checker\" class=\"Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResourceChecker\">
            <argument type=\"service\" id=\"service_container\" />
            <tag name=\"config_cache.resource_checker\" priority=\"-980\" />
        </service>

        <service id=\"config.resource.self_checking_resource_checker\" class=\"Symfony\\Component\\Config\\Resource\\SelfCheckingResourceChecker\">
            <tag name=\"config_cache.resource_checker\" priority=\"-990\" />
        </service>

        <service id=\"services_resetter\" class=\"Symfony\\Component\\HttpKernel\\DependencyInjection\\ServicesResetter\" public=\"true\" />

        <service id=\"reverse_container\" class=\"Symfony\\Component\\DependencyInjection\\ReverseContainer\">
            <argument type=\"service\" id=\"service_container\" />
            <argument type=\"service_locator\" />
        </service>
        <service id=\"Symfony\\Component\\DependencyInjection\\ReverseContainer\" alias=\"reverse_container\" />

        <service id=\"locale_aware_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\LocaleAwareListener\">
            <argument type=\"collection\" /> <!-- locale aware services -->
            <argument type=\"service\" id=\"request_stack\" />
            <tag name=\"kernel.event_subscriber\" />
        </service>

        <service id=\"container.env_var_processor\" class=\"Symfony\\Component\\DependencyInjection\\EnvVarProcessor\">
            <tag name=\"container.env_var_processor\" />
            <argument type=\"service\" id=\"service_container\" />
            <argument type=\"tagged_iterator\" tag=\"container.env_var_loader\" />
        </service>

        <service id=\"slugger\" class=\"Symfony\\Component\\String\\Slugger\\AsciiSlugger\">
            <argument>%kernel.default_locale%</argument>
            <tag name=\"kernel.locale_aware\" />
        </service>
        <service id=\"Symfony\\Component\\String\\Slugger\\SluggerInterface\" alias=\"slugger\" />
    </services>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Resources/config/services.xml";
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
        <!-- this parameter is used at compile time in RegisterListenersPass -->
        <parameter key=\"event_dispatcher.event_aliases\" type=\"collection\">
            <parameter key=\"Symfony\\Component\\Console\\Event\\ConsoleCommandEvent\">console.command</parameter>
            <parameter key=\"Symfony\\Component\\Console\\Event\\ConsoleErrorEvent\">console.error</parameter>
            <parameter key=\"Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent\">console.terminate</parameter>
            <parameter key=\"Symfony\\Component\\Form\\Event\\PreSubmitEvent\">form.pre_submit</parameter>
            <parameter key=\"Symfony\\Component\\Form\\Event\\SubmitEvent\">form.submit</parameter>
            <parameter key=\"Symfony\\Component\\Form\\Event\\PostSubmitEvent\">form.post_submit</parameter>
            <parameter key=\"Symfony\\Component\\Form\\Event\\PreSetDataEvent\">form.pre_set_data</parameter>
            <parameter key=\"Symfony\\Component\\Form\\Event\\PostSetDataEvent\">form.post_set_data</parameter>
            <parameter key=\"Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent\">kernel.controller_arguments</parameter>
            <parameter key=\"Symfony\\Component\\HttpKernel\\Event\\ControllerEvent\">kernel.controller</parameter>
            <parameter key=\"Symfony\\Component\\HttpKernel\\Event\\ResponseEvent\">kernel.response</parameter>
            <parameter key=\"Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent\">kernel.finish_request</parameter>
            <parameter key=\"Symfony\\Component\\HttpKernel\\Event\\RequestEvent\">kernel.request</parameter>
            <parameter key=\"Symfony\\Component\\HttpKernel\\Event\\ViewEvent\">kernel.view</parameter>
            <parameter key=\"Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent\">kernel.exception</parameter>
            <parameter key=\"Symfony\\Component\\HttpKernel\\Event\\TerminateEvent\">kernel.terminate</parameter>
            <parameter key=\"Symfony\\Component\\Workflow\\Event\\GuardEvent\">workflow.guard</parameter>
            <parameter key=\"Symfony\\Component\\Workflow\\Event\\LeaveEvent\">workflow.leave</parameter>
            <parameter key=\"Symfony\\Component\\Workflow\\Event\\TransitionEvent\">workflow.transition</parameter>
            <parameter key=\"Symfony\\Component\\Workflow\\Event\\EnterEvent\">workflow.enter</parameter>
            <parameter key=\"Symfony\\Component\\Workflow\\Event\\EnteredEvent\">workflow.entered</parameter>
            <parameter key=\"Symfony\\Component\\Workflow\\Event\\CompletedEvent\">workflow.completed</parameter>
            <parameter key=\"Symfony\\Component\\Workflow\\Event\\AnnounceEvent\">workflow.announce</parameter>
        </parameter>
    </parameters>
    <services>
        <defaults public=\"false\" />

        <service id=\"parameter_bag\" class=\"Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBag\">
            <argument type=\"service\" id=\"service_container\" />
        </service>
        <service id=\"Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface\" alias=\"parameter_bag\" />
        <service id=\"Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface\" alias=\"parameter_bag\" />

        <service id=\"event_dispatcher\" class=\"Symfony\\Component\\EventDispatcher\\EventDispatcher\" public=\"true\">
            <tag name=\"container.hot_path\" />
        </service>
        <service id=\"Symfony\\Component\\EventDispatcher\\EventDispatcherInterface\" alias=\"event_dispatcher\" />
        <service id=\"Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface\" alias=\"event_dispatcher\" />

        <service id=\"http_kernel\" class=\"Symfony\\Component\\HttpKernel\\HttpKernel\" public=\"true\">
            <argument type=\"service\" id=\"event_dispatcher\" />
            <argument type=\"service\" id=\"controller_resolver\" />
            <argument type=\"service\" id=\"request_stack\" />
            <argument type=\"service\" id=\"argument_resolver\" />
            <tag name=\"container.hot_path\" />
        </service>
        <service id=\"Symfony\\Component\\HttpKernel\\HttpKernelInterface\" alias=\"http_kernel\" />

        <service id=\"request_stack\" class=\"Symfony\\Component\\HttpFoundation\\RequestStack\" public=\"true\" />
        <service id=\"Symfony\\Component\\HttpFoundation\\RequestStack\" alias=\"request_stack\" />

        <service id=\"url_helper\" class=\"Symfony\\Component\\HttpFoundation\\UrlHelper\">
            <argument type=\"service\" id=\"request_stack\" />
            <argument type=\"service\" id=\"router.request_context\" on-invalid=\"ignore\" />
        </service>
        <service id=\"Symfony\\Component\\HttpFoundation\\UrlHelper\" alias=\"url_helper\" />

        <service id=\"cache_warmer\" class=\"Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate\" public=\"true\">
            <argument type=\"tagged_iterator\" tag=\"kernel.cache_warmer\" />
            <argument>%kernel.debug%</argument>
            <argument>%kernel.cache_dir%/%kernel.container_class%Deprecations.log</argument>
        </service>

        <service id=\"cache_clearer\" class=\"Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer\" public=\"true\">
            <argument type=\"tagged_iterator\" tag=\"kernel.cache_clearer\" />
        </service>

        <service id=\"kernel\" synthetic=\"true\" public=\"true\" />
        <service id=\"Symfony\\Component\\HttpKernel\\KernelInterface\" alias=\"kernel\" />

        <service id=\"filesystem\" class=\"Symfony\\Component\\Filesystem\\Filesystem\" public=\"true\" />
        <service id=\"Symfony\\Component\\Filesystem\\Filesystem\" alias=\"filesystem\" />

        <service id=\"file_locator\" class=\"Symfony\\Component\\HttpKernel\\Config\\FileLocator\">
            <argument type=\"service\" id=\"kernel\" />
        </service>
        <service id=\"Symfony\\Component\\HttpKernel\\Config\\FileLocator\" alias=\"file_locator\" />

        <service id=\"uri_signer\" class=\"Symfony\\Component\\HttpKernel\\UriSigner\">
            <argument>%kernel.secret%</argument>
        </service>

        <service id=\"config_cache_factory\" class=\"Symfony\\Component\\Config\\ResourceCheckerConfigCacheFactory\">
            <argument type=\"tagged_iterator\" tag=\"config_cache.resource_checker\" />
        </service>

        <service id=\"dependency_injection.config.container_parameters_resource_checker\" class=\"Symfony\\Component\\DependencyInjection\\Config\\ContainerParametersResourceChecker\">
            <argument type=\"service\" id=\"service_container\" />
            <tag name=\"config_cache.resource_checker\" priority=\"-980\" />
        </service>

        <service id=\"config.resource.self_checking_resource_checker\" class=\"Symfony\\Component\\Config\\Resource\\SelfCheckingResourceChecker\">
            <tag name=\"config_cache.resource_checker\" priority=\"-990\" />
        </service>

        <service id=\"services_resetter\" class=\"Symfony\\Component\\HttpKernel\\DependencyInjection\\ServicesResetter\" public=\"true\" />

        <service id=\"reverse_container\" class=\"Symfony\\Component\\DependencyInjection\\ReverseContainer\">
            <argument type=\"service\" id=\"service_container\" />
            <argument type=\"service_locator\" />
        </service>
        <service id=\"Symfony\\Component\\DependencyInjection\\ReverseContainer\" alias=\"reverse_container\" />

        <service id=\"locale_aware_listener\" class=\"Symfony\\Component\\HttpKernel\\EventListener\\LocaleAwareListener\">
            <argument type=\"collection\" /> <!-- locale aware services -->
            <argument type=\"service\" id=\"request_stack\" />
            <tag name=\"kernel.event_subscriber\" />
        </service>

        <service id=\"container.env_var_processor\" class=\"Symfony\\Component\\DependencyInjection\\EnvVarProcessor\">
            <tag name=\"container.env_var_processor\" />
            <argument type=\"service\" id=\"service_container\" />
            <argument type=\"tagged_iterator\" tag=\"container.env_var_loader\" />
        </service>

        <service id=\"slugger\" class=\"Symfony\\Component\\String\\Slugger\\AsciiSlugger\">
            <argument>%kernel.default_locale%</argument>
            <tag name=\"kernel.locale_aware\" />
        </service>
        <service id=\"Symfony\\Component\\String\\Slugger\\SluggerInterface\" alias=\"slugger\" />
    </services>
</container>
", "@app/vendor/symfony/framework-bundle/Resources/config/services.xml", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Resources\\config\\services.xml");
    }
}
