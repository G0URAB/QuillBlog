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

/* @app/vendor/symfony/http-kernel/CHANGELOG.md */
class __TwigTemplate_4026232e239aa5fc5a37b5fe2ae9b49cb50ed840596c433cfd2334b2dea7fe1c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

5.0.0
-----

 * removed support for getting the container from a non-booted kernel
 * removed the first and second constructor argument of `ConfigDataCollector` 
 * removed `ConfigDataCollector::getApplicationName()` 
 * removed `ConfigDataCollector::getApplicationVersion()`
 * removed support for `Symfony\\Component\\Templating\\EngineInterface` in `HIncludeFragmentRenderer`, use a `Twig\\Environment` only
 * removed `TranslatorListener` in favor of `LocaleAwareListener`
 * removed `getRootDir()` and `getName()` from `Kernel` and `KernelInterface`
 * removed `FilterControllerArgumentsEvent`, use `ControllerArgumentsEvent` instead
 * removed `FilterControllerEvent`, use `ControllerEvent` instead
 * removed `FilterResponseEvent`, use `ResponseEvent` instead
 * removed `GetResponseEvent`, use `RequestEvent` instead
 * removed `GetResponseForControllerResultEvent`, use `ViewEvent` instead
 * removed `GetResponseForExceptionEvent`, use `ExceptionEvent` instead
 * removed `PostResponseEvent`, use `TerminateEvent` instead
 * removed `SaveSessionListener` in favor of `AbstractSessionListener` 
 * removed `Client`, use `HttpKernelBrowser` instead
 * added method `getProjectDir()` to `KernelInterface`
 * removed methods `serialize` and `unserialize` from `DataCollector`, store the serialized state in the data property instead
 * made `ProfilerStorageInterface` internal
 * removed the second and third argument of `KernelInterface::locateResource`
 * removed the second and third argument of `FileLocator::__construct`
 * removed loading resources from `%kernel.root_dir%/Resources` and `%kernel.root_dir%` as
   fallback directories.
 * removed class `ExceptionListener`, use `ErrorListener` instead

4.4.0
-----

 * The `DebugHandlersListener` class has been marked as `final`
 * Added new Bundle directory convention consistent with standard skeletons
 * Deprecated the second and third argument of `KernelInterface::locateResource`
 * Deprecated the second and third argument of `FileLocator::__construct`
 * Deprecated loading resources from `%kernel.root_dir%/Resources` and `%kernel.root_dir%` as
   fallback directories. Resources like service definitions are usually loaded relative to the
   current directory or with a glob pattern. The fallback directories have never been advocated
   so you likely do not use those in any app based on the SF Standard or Flex edition.
 * Marked all dispatched event classes as `@final`
 * Added `ErrorController` to enable the preview and error rendering mechanism
 * Getting the container from a non-booted kernel is deprecated.
 * Marked the `AjaxDataCollector`, `ConfigDataCollector`, `EventDataCollector`,
   `ExceptionDataCollector`, `LoggerDataCollector`, `MemoryDataCollector`,
   `RequestDataCollector` and `TimeDataCollector` classes as `@final`.
 * Marked the `RouterDataCollector::collect()` method as `@final`.
 * The `DataCollectorInterface::collect()` and `Profiler::collect()` methods third parameter signature
   will be `\\Throwable \$exception = null` instead of `\\Exception \$exception = null` in Symfony 5.0.
 * Deprecated methods `ExceptionEvent::get/setException()`, use `get/setThrowable()` instead
 * Deprecated class `ExceptionListener`, use `ErrorListener` instead

4.3.0
-----

 * renamed `Client` to `HttpKernelBrowser`
 * `KernelInterface` doesn't extend `Serializable` anymore
 * deprecated the `Kernel::serialize()` and `unserialize()` methods
 * increased the priority of `Symfony\\Component\\HttpKernel\\EventListener\\AddRequestFormatsListener`
 * made `Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener` set the default locale early
 * deprecated `TranslatorListener` in favor of `LocaleAwareListener`
 * added the registration of all `LocaleAwareInterface` implementations into the `LocaleAwareListener`
 * made `FileLinkFormatter` final and not implement `Serializable` anymore
 * the base `DataCollector` doesn't implement `Serializable` anymore, you should
   store all the serialized state in the data property instead
 * `DumpDataCollector` has been marked as `final`
 * added an event listener to prevent search engines from indexing applications in debug mode.
 * renamed `FilterControllerArgumentsEvent` to `ControllerArgumentsEvent`
 * renamed `FilterControllerEvent` to `ControllerEvent`
 * renamed `FilterResponseEvent` to `ResponseEvent`
 * renamed `GetResponseEvent` to `RequestEvent`
 * renamed `GetResponseForControllerResultEvent` to `ViewEvent`
 * renamed `GetResponseForExceptionEvent` to `ExceptionEvent`
 * renamed `PostResponseEvent` to `TerminateEvent`
 * added `HttpClientKernel` for handling requests with an `HttpClientInterface` instance
 * added `trace_header` and `trace_level` configuration options to `HttpCache`

4.2.0
-----

 * deprecated `KernelInterface::getRootDir()` and the `kernel.root_dir` parameter
 * deprecated `KernelInterface::getName()` and the `kernel.name` parameter
 * deprecated the first and second constructor argument of `ConfigDataCollector`
 * deprecated `ConfigDataCollector::getApplicationName()`
 * deprecated `ConfigDataCollector::getApplicationVersion()`

4.1.0
-----

 * added orphaned events support to `EventDataCollector`
 * `ExceptionListener` now logs exceptions at priority `0` (previously logged at `-128`)
 * Added support for using `service::method` to reference controllers, making it consistent with other cases. It is recommended over the `service:action` syntax with a single colon, which will be deprecated in the future.
 * Added the ability to profile individual argument value resolvers via the
   `Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver`

4.0.0
-----

 * removed the `DataCollector::varToString()` method, use `DataCollector::cloneVar()`
   instead
 * using the `DataCollector::cloneVar()` method requires the VarDumper component
 * removed the `ValueExporter` class
 * removed `ControllerResolverInterface::getArguments()`
 * removed `TraceableControllerResolver::getArguments()`
 * removed `ControllerResolver::getArguments()` and the ability to resolve arguments
 * removed the `argument_resolver` service dependency from the `debug.controller_resolver`
 * removed `LazyLoadingFragmentHandler::addRendererService()`
 * removed `Psr6CacheClearer::addPool()`
 * removed `Extension::addClassesToCompile()` and `Extension::getClassesToCompile()`
 * removed `Kernel::loadClassCache()`, `Kernel::doLoadClassCache()`, `Kernel::setClassCache()`,
   and `Kernel::getEnvParameters()`
 * support for the `X-Status-Code` when handling exceptions in the `HttpKernel`
   has been dropped, use the `HttpKernel::allowCustomResponseCode()` method
   instead
 * removed convention-based commands registration
 * removed the `ChainCacheClearer::add()` method
 * removed the `CacheaWarmerAggregate::add()` and `setWarmers()` methods
 * made `CacheWarmerAggregate` and `ChainCacheClearer` classes final

3.4.0
-----

 * added a minimalist PSR-3 `Logger` class that writes in `stderr`
 * made kernels implementing `CompilerPassInterface` able to process the container
 * deprecated bundle inheritance
 * added `RebootableInterface` and implemented it in `Kernel`
 * deprecated commands auto registration
 * deprecated `EnvParametersResource`
 * added `Symfony\\Component\\HttpKernel\\Client::catchExceptions()`
 * deprecated the `ChainCacheClearer::add()` method
 * deprecated the `CacheaWarmerAggregate::add()` and `setWarmers()` methods
 * made `CacheWarmerAggregate` and `ChainCacheClearer` classes final
 * added the possibility to reset the profiler to its initial state
 * deprecated data collectors without a `reset()` method
 * deprecated implementing `DebugLoggerInterface` without a `clear()` method

3.3.0
-----

 * added `kernel.project_dir` and `Kernel::getProjectDir()`
 * deprecated `kernel.root_dir` and `Kernel::getRootDir()`
 * deprecated `Kernel::getEnvParameters()`
 * deprecated the special `SYMFONY__` environment variables
 * added the possibility to change the query string parameter used by `UriSigner`
 * deprecated `LazyLoadingFragmentHandler::addRendererService()`
 * deprecated `Extension::addClassesToCompile()` and `Extension::getClassesToCompile()`
 * deprecated `Psr6CacheClearer::addPool()`

3.2.0
-----

 * deprecated `DataCollector::varToString()`, use `cloneVar()` instead
 * changed surrogate capability name in `AbstractSurrogate::addSurrogateCapability` to 'symfony'
 * Added `ControllerArgumentValueResolverPass`

3.1.0
-----
 * deprecated passing objects as URI attributes to the ESI and SSI renderers
 * deprecated `ControllerResolver::getArguments()`
 * added `Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface`
 * added `Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface` as argument to `HttpKernel`
 * added `Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver`
 * added `Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector::getMethod()`
 * added `Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector::getRedirect()`
 * added the `kernel.controller_arguments` event, triggered after controller arguments have been resolved

3.0.0
-----

 * removed `Symfony\\Component\\HttpKernel\\Kernel::init()`
 * removed `Symfony\\Component\\HttpKernel\\Kernel::isClassInActiveBundle()` and `Symfony\\Component\\HttpKernel\\KernelInterface::isClassInActiveBundle()`
 * removed `Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher::setProfiler()`
 * removed `Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener::getLocalIpAddresses()`
 * removed `Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener::setRequest()`
 * removed `Symfony\\Component\\HttpKernel\\EventListener\\RouterListener::setRequest()`
 * removed `Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener::onKernelRequest()`
 * removed `Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler::setRequest()`
 * removed `Symfony\\Component\\HttpKernel\\HttpCache\\Esi::hasSurrogateEsiCapability()`
 * removed `Symfony\\Component\\HttpKernel\\HttpCache\\Esi::addSurrogateEsiCapability()`
 * removed `Symfony\\Component\\HttpKernel\\HttpCache\\Esi::needsEsiParsing()`
 * removed `Symfony\\Component\\HttpKernel\\HttpCache\\HttpCache::getEsi()`
 * removed `Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel`
 * removed `Symfony\\Component\\HttpKernel\\DependencyInjection\\RegisterListenersPass`
 * removed `Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener`
 * removed `Symfony\\Component\\HttpKernel\\EventListener\\EsiListener`
 * removed `Symfony\\Component\\HttpKernel\\HttpCache\\EsiResponseCacheStrategy`
 * removed `Symfony\\Component\\HttpKernel\\HttpCache\\EsiResponseCacheStrategyInterface`
 * removed `Symfony\\Component\\HttpKernel\\Log\\LoggerInterface`
 * removed `Symfony\\Component\\HttpKernel\\Log\\NullLogger`
 * removed `Symfony\\Component\\HttpKernel\\Profiler::import()`
 * removed `Symfony\\Component\\HttpKernel\\Profiler::export()`

2.8.0
-----

 * deprecated `Profiler::import` and `Profiler::export`

2.7.0
-----

 * added the HTTP status code to profiles

2.6.0
-----

 * deprecated `Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener`, use `Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener` instead
 * deprecated unused method `Symfony\\Component\\HttpKernel\\Kernel::isClassInActiveBundle` and `Symfony\\Component\\HttpKernel\\KernelInterface::isClassInActiveBundle`

2.5.0
-----

 * deprecated `Symfony\\Component\\HttpKernel\\DependencyInjection\\RegisterListenersPass`, use `Symfony\\Component\\EventDispatcher\\DependencyInjection\\RegisterListenersPass` instead

2.4.0
-----

 * added event listeners for the session
 * added the KernelEvents::FINISH_REQUEST event

2.3.0
-----

 * [BC BREAK] renamed `Symfony\\Component\\HttpKernel\\EventListener\\DeprecationLoggerListener` to `Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener` and changed its constructor
 * deprecated `Symfony\\Component\\HttpKernel\\Debug\\ErrorHandler`, `Symfony\\Component\\HttpKernel\\Debug\\ExceptionHandler`,
   `Symfony\\Component\\HttpKernel\\Exception\\FatalErrorException` and `Symfony\\Component\\HttpKernel\\Exception\\FlattenException`
 * deprecated `Symfony\\Component\\HttpKernel\\Kernel::init()`
 * added the possibility to specify an id an extra attributes to hinclude tags
 * added the collect of data if a controller is a Closure in the Request collector
 * pass exceptions from the ExceptionListener to the logger using the logging context to allow for more
   detailed messages

2.2.0
-----

 * [BC BREAK] the path info for sub-request is now always _fragment (or whatever you configured instead of the default)
 * added Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener
 * added Symfony\\Component\\HttpKernel\\UriSigner
 * added Symfony\\Component\\HttpKernel\\FragmentRenderer and rendering strategies (in Symfony\\Component\\HttpKernel\\Fragment\\FragmentRendererInterface)
 * added Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel
 * added ControllerReference to create reference of Controllers (used in the FragmentRenderer class)
 * [BC BREAK] renamed TimeDataCollector::getTotalTime() to
   TimeDataCollector::getDuration()
 * updated the MemoryDataCollector to include the memory used in the
   kernel.terminate event listeners
 * moved the Stopwatch classes to a new component
 * added TraceableControllerResolver
 * added TraceableEventDispatcher (removed ContainerAwareTraceableEventDispatcher)
 * added support for WinCache opcode cache in ConfigDataCollector

2.1.0
-----

 * [BC BREAK] the charset is now configured via the Kernel::getCharset() method
 * [BC BREAK] the current locale for the user is not stored anymore in the session
 * added the HTTP method to the profiler storage
 * updated all listeners to implement EventSubscriberInterface
 * added TimeDataCollector
 * added ContainerAwareTraceableEventDispatcher
 * moved TraceableEventDispatcherInterface to the EventDispatcher component
 * added RouterListener, LocaleListener, and StreamedResponseListener
 * added CacheClearerInterface (and ChainCacheClearer)
 * added a kernel.terminate event (via TerminableInterface and PostResponseEvent)
 * added a Stopwatch class
 * added WarmableInterface
 * improved extensibility between bundles
 * added profiler storages for Memcache(d), File-based, MongoDB, Redis
 * moved Filesystem class to its own component
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("CHANGELOG
=========

5.0.0
-----

 * removed support for getting the container from a non-booted kernel
 * removed the first and second constructor argument of `ConfigDataCollector` 
 * removed `ConfigDataCollector::getApplicationName()` 
 * removed `ConfigDataCollector::getApplicationVersion()`
 * removed support for `Symfony\\Component\\Templating\\EngineInterface` in `HIncludeFragmentRenderer`, use a `Twig\\Environment` only
 * removed `TranslatorListener` in favor of `LocaleAwareListener`
 * removed `getRootDir()` and `getName()` from `Kernel` and `KernelInterface`
 * removed `FilterControllerArgumentsEvent`, use `ControllerArgumentsEvent` instead
 * removed `FilterControllerEvent`, use `ControllerEvent` instead
 * removed `FilterResponseEvent`, use `ResponseEvent` instead
 * removed `GetResponseEvent`, use `RequestEvent` instead
 * removed `GetResponseForControllerResultEvent`, use `ViewEvent` instead
 * removed `GetResponseForExceptionEvent`, use `ExceptionEvent` instead
 * removed `PostResponseEvent`, use `TerminateEvent` instead
 * removed `SaveSessionListener` in favor of `AbstractSessionListener` 
 * removed `Client`, use `HttpKernelBrowser` instead
 * added method `getProjectDir()` to `KernelInterface`
 * removed methods `serialize` and `unserialize` from `DataCollector`, store the serialized state in the data property instead
 * made `ProfilerStorageInterface` internal
 * removed the second and third argument of `KernelInterface::locateResource`
 * removed the second and third argument of `FileLocator::__construct`
 * removed loading resources from `%kernel.root_dir%/Resources` and `%kernel.root_dir%` as
   fallback directories.
 * removed class `ExceptionListener`, use `ErrorListener` instead

4.4.0
-----

 * The `DebugHandlersListener` class has been marked as `final`
 * Added new Bundle directory convention consistent with standard skeletons
 * Deprecated the second and third argument of `KernelInterface::locateResource`
 * Deprecated the second and third argument of `FileLocator::__construct`
 * Deprecated loading resources from `%kernel.root_dir%/Resources` and `%kernel.root_dir%` as
   fallback directories. Resources like service definitions are usually loaded relative to the
   current directory or with a glob pattern. The fallback directories have never been advocated
   so you likely do not use those in any app based on the SF Standard or Flex edition.
 * Marked all dispatched event classes as `@final`
 * Added `ErrorController` to enable the preview and error rendering mechanism
 * Getting the container from a non-booted kernel is deprecated.
 * Marked the `AjaxDataCollector`, `ConfigDataCollector`, `EventDataCollector`,
   `ExceptionDataCollector`, `LoggerDataCollector`, `MemoryDataCollector`,
   `RequestDataCollector` and `TimeDataCollector` classes as `@final`.
 * Marked the `RouterDataCollector::collect()` method as `@final`.
 * The `DataCollectorInterface::collect()` and `Profiler::collect()` methods third parameter signature
   will be `\\Throwable \$exception = null` instead of `\\Exception \$exception = null` in Symfony 5.0.
 * Deprecated methods `ExceptionEvent::get/setException()`, use `get/setThrowable()` instead
 * Deprecated class `ExceptionListener`, use `ErrorListener` instead

4.3.0
-----

 * renamed `Client` to `HttpKernelBrowser`
 * `KernelInterface` doesn't extend `Serializable` anymore
 * deprecated the `Kernel::serialize()` and `unserialize()` methods
 * increased the priority of `Symfony\\Component\\HttpKernel\\EventListener\\AddRequestFormatsListener`
 * made `Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener` set the default locale early
 * deprecated `TranslatorListener` in favor of `LocaleAwareListener`
 * added the registration of all `LocaleAwareInterface` implementations into the `LocaleAwareListener`
 * made `FileLinkFormatter` final and not implement `Serializable` anymore
 * the base `DataCollector` doesn't implement `Serializable` anymore, you should
   store all the serialized state in the data property instead
 * `DumpDataCollector` has been marked as `final`
 * added an event listener to prevent search engines from indexing applications in debug mode.
 * renamed `FilterControllerArgumentsEvent` to `ControllerArgumentsEvent`
 * renamed `FilterControllerEvent` to `ControllerEvent`
 * renamed `FilterResponseEvent` to `ResponseEvent`
 * renamed `GetResponseEvent` to `RequestEvent`
 * renamed `GetResponseForControllerResultEvent` to `ViewEvent`
 * renamed `GetResponseForExceptionEvent` to `ExceptionEvent`
 * renamed `PostResponseEvent` to `TerminateEvent`
 * added `HttpClientKernel` for handling requests with an `HttpClientInterface` instance
 * added `trace_header` and `trace_level` configuration options to `HttpCache`

4.2.0
-----

 * deprecated `KernelInterface::getRootDir()` and the `kernel.root_dir` parameter
 * deprecated `KernelInterface::getName()` and the `kernel.name` parameter
 * deprecated the first and second constructor argument of `ConfigDataCollector`
 * deprecated `ConfigDataCollector::getApplicationName()`
 * deprecated `ConfigDataCollector::getApplicationVersion()`

4.1.0
-----

 * added orphaned events support to `EventDataCollector`
 * `ExceptionListener` now logs exceptions at priority `0` (previously logged at `-128`)
 * Added support for using `service::method` to reference controllers, making it consistent with other cases. It is recommended over the `service:action` syntax with a single colon, which will be deprecated in the future.
 * Added the ability to profile individual argument value resolvers via the
   `Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver`

4.0.0
-----

 * removed the `DataCollector::varToString()` method, use `DataCollector::cloneVar()`
   instead
 * using the `DataCollector::cloneVar()` method requires the VarDumper component
 * removed the `ValueExporter` class
 * removed `ControllerResolverInterface::getArguments()`
 * removed `TraceableControllerResolver::getArguments()`
 * removed `ControllerResolver::getArguments()` and the ability to resolve arguments
 * removed the `argument_resolver` service dependency from the `debug.controller_resolver`
 * removed `LazyLoadingFragmentHandler::addRendererService()`
 * removed `Psr6CacheClearer::addPool()`
 * removed `Extension::addClassesToCompile()` and `Extension::getClassesToCompile()`
 * removed `Kernel::loadClassCache()`, `Kernel::doLoadClassCache()`, `Kernel::setClassCache()`,
   and `Kernel::getEnvParameters()`
 * support for the `X-Status-Code` when handling exceptions in the `HttpKernel`
   has been dropped, use the `HttpKernel::allowCustomResponseCode()` method
   instead
 * removed convention-based commands registration
 * removed the `ChainCacheClearer::add()` method
 * removed the `CacheaWarmerAggregate::add()` and `setWarmers()` methods
 * made `CacheWarmerAggregate` and `ChainCacheClearer` classes final

3.4.0
-----

 * added a minimalist PSR-3 `Logger` class that writes in `stderr`
 * made kernels implementing `CompilerPassInterface` able to process the container
 * deprecated bundle inheritance
 * added `RebootableInterface` and implemented it in `Kernel`
 * deprecated commands auto registration
 * deprecated `EnvParametersResource`
 * added `Symfony\\Component\\HttpKernel\\Client::catchExceptions()`
 * deprecated the `ChainCacheClearer::add()` method
 * deprecated the `CacheaWarmerAggregate::add()` and `setWarmers()` methods
 * made `CacheWarmerAggregate` and `ChainCacheClearer` classes final
 * added the possibility to reset the profiler to its initial state
 * deprecated data collectors without a `reset()` method
 * deprecated implementing `DebugLoggerInterface` without a `clear()` method

3.3.0
-----

 * added `kernel.project_dir` and `Kernel::getProjectDir()`
 * deprecated `kernel.root_dir` and `Kernel::getRootDir()`
 * deprecated `Kernel::getEnvParameters()`
 * deprecated the special `SYMFONY__` environment variables
 * added the possibility to change the query string parameter used by `UriSigner`
 * deprecated `LazyLoadingFragmentHandler::addRendererService()`
 * deprecated `Extension::addClassesToCompile()` and `Extension::getClassesToCompile()`
 * deprecated `Psr6CacheClearer::addPool()`

3.2.0
-----

 * deprecated `DataCollector::varToString()`, use `cloneVar()` instead
 * changed surrogate capability name in `AbstractSurrogate::addSurrogateCapability` to 'symfony'
 * Added `ControllerArgumentValueResolverPass`

3.1.0
-----
 * deprecated passing objects as URI attributes to the ESI and SSI renderers
 * deprecated `ControllerResolver::getArguments()`
 * added `Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface`
 * added `Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface` as argument to `HttpKernel`
 * added `Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver`
 * added `Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector::getMethod()`
 * added `Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector::getRedirect()`
 * added the `kernel.controller_arguments` event, triggered after controller arguments have been resolved

3.0.0
-----

 * removed `Symfony\\Component\\HttpKernel\\Kernel::init()`
 * removed `Symfony\\Component\\HttpKernel\\Kernel::isClassInActiveBundle()` and `Symfony\\Component\\HttpKernel\\KernelInterface::isClassInActiveBundle()`
 * removed `Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher::setProfiler()`
 * removed `Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener::getLocalIpAddresses()`
 * removed `Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener::setRequest()`
 * removed `Symfony\\Component\\HttpKernel\\EventListener\\RouterListener::setRequest()`
 * removed `Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener::onKernelRequest()`
 * removed `Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler::setRequest()`
 * removed `Symfony\\Component\\HttpKernel\\HttpCache\\Esi::hasSurrogateEsiCapability()`
 * removed `Symfony\\Component\\HttpKernel\\HttpCache\\Esi::addSurrogateEsiCapability()`
 * removed `Symfony\\Component\\HttpKernel\\HttpCache\\Esi::needsEsiParsing()`
 * removed `Symfony\\Component\\HttpKernel\\HttpCache\\HttpCache::getEsi()`
 * removed `Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel`
 * removed `Symfony\\Component\\HttpKernel\\DependencyInjection\\RegisterListenersPass`
 * removed `Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener`
 * removed `Symfony\\Component\\HttpKernel\\EventListener\\EsiListener`
 * removed `Symfony\\Component\\HttpKernel\\HttpCache\\EsiResponseCacheStrategy`
 * removed `Symfony\\Component\\HttpKernel\\HttpCache\\EsiResponseCacheStrategyInterface`
 * removed `Symfony\\Component\\HttpKernel\\Log\\LoggerInterface`
 * removed `Symfony\\Component\\HttpKernel\\Log\\NullLogger`
 * removed `Symfony\\Component\\HttpKernel\\Profiler::import()`
 * removed `Symfony\\Component\\HttpKernel\\Profiler::export()`

2.8.0
-----

 * deprecated `Profiler::import` and `Profiler::export`

2.7.0
-----

 * added the HTTP status code to profiles

2.6.0
-----

 * deprecated `Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener`, use `Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener` instead
 * deprecated unused method `Symfony\\Component\\HttpKernel\\Kernel::isClassInActiveBundle` and `Symfony\\Component\\HttpKernel\\KernelInterface::isClassInActiveBundle`

2.5.0
-----

 * deprecated `Symfony\\Component\\HttpKernel\\DependencyInjection\\RegisterListenersPass`, use `Symfony\\Component\\EventDispatcher\\DependencyInjection\\RegisterListenersPass` instead

2.4.0
-----

 * added event listeners for the session
 * added the KernelEvents::FINISH_REQUEST event

2.3.0
-----

 * [BC BREAK] renamed `Symfony\\Component\\HttpKernel\\EventListener\\DeprecationLoggerListener` to `Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener` and changed its constructor
 * deprecated `Symfony\\Component\\HttpKernel\\Debug\\ErrorHandler`, `Symfony\\Component\\HttpKernel\\Debug\\ExceptionHandler`,
   `Symfony\\Component\\HttpKernel\\Exception\\FatalErrorException` and `Symfony\\Component\\HttpKernel\\Exception\\FlattenException`
 * deprecated `Symfony\\Component\\HttpKernel\\Kernel::init()`
 * added the possibility to specify an id an extra attributes to hinclude tags
 * added the collect of data if a controller is a Closure in the Request collector
 * pass exceptions from the ExceptionListener to the logger using the logging context to allow for more
   detailed messages

2.2.0
-----

 * [BC BREAK] the path info for sub-request is now always _fragment (or whatever you configured instead of the default)
 * added Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener
 * added Symfony\\Component\\HttpKernel\\UriSigner
 * added Symfony\\Component\\HttpKernel\\FragmentRenderer and rendering strategies (in Symfony\\Component\\HttpKernel\\Fragment\\FragmentRendererInterface)
 * added Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel
 * added ControllerReference to create reference of Controllers (used in the FragmentRenderer class)
 * [BC BREAK] renamed TimeDataCollector::getTotalTime() to
   TimeDataCollector::getDuration()
 * updated the MemoryDataCollector to include the memory used in the
   kernel.terminate event listeners
 * moved the Stopwatch classes to a new component
 * added TraceableControllerResolver
 * added TraceableEventDispatcher (removed ContainerAwareTraceableEventDispatcher)
 * added support for WinCache opcode cache in ConfigDataCollector

2.1.0
-----

 * [BC BREAK] the charset is now configured via the Kernel::getCharset() method
 * [BC BREAK] the current locale for the user is not stored anymore in the session
 * added the HTTP method to the profiler storage
 * updated all listeners to implement EventSubscriberInterface
 * added TimeDataCollector
 * added ContainerAwareTraceableEventDispatcher
 * moved TraceableEventDispatcherInterface to the EventDispatcher component
 * added RouterListener, LocaleListener, and StreamedResponseListener
 * added CacheClearerInterface (and ChainCacheClearer)
 * added a kernel.terminate event (via TerminableInterface and PostResponseEvent)
 * added a Stopwatch class
 * added WarmableInterface
 * improved extensibility between bundles
 * added profiler storages for Memcache(d), File-based, MongoDB, Redis
 * moved Filesystem class to its own component
", "@app/vendor/symfony/http-kernel/CHANGELOG.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\CHANGELOG.md");
    }
}
