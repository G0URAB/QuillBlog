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

/* @app/vendor/symfony/event-dispatcher/CHANGELOG.md */
class __TwigTemplate_b45f5b3948cdc7339d0cc961e5607d99e5b753c522a8fc2b2827b5a42ad1c20a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/event-dispatcher/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

5.0.0
-----

 * The signature of the `EventDispatcherInterface::dispatch()` method has been changed to `dispatch(\$event, string \$eventName = null): object`.
 * The `Event` class has been removed in favor of `Symfony\\Contracts\\EventDispatcher\\Event`.
 * The `TraceableEventDispatcherInterface` has been removed.
 * The `WrappedListener` class is now final.

4.4.0
-----

 * `AddEventAliasesPass` has been added, allowing applications and bundles to extend the event alias mapping used by `RegisterListenersPass`.
 * Made the `event` attribute of the `kernel.event_listener` tag optional for FQCN events.

4.3.0
-----

 * The signature of the `EventDispatcherInterface::dispatch()` method should be updated to `dispatch(\$event, string \$eventName = null)`, not doing so is deprecated
 * deprecated the `Event` class, use `Symfony\\Contracts\\EventDispatcher\\Event` instead

4.1.0
-----

 * added support for invokable event listeners tagged with `kernel.event_listener` by default
 * The `TraceableEventDispatcher::getOrphanedEvents()` method has been added.
 * The `TraceableEventDispatcherInterface` has been deprecated.

4.0.0
-----

 * removed the `ContainerAwareEventDispatcher` class
 * added the `reset()` method to the `TraceableEventDispatcherInterface`

3.4.0
-----

  * Implementing `TraceableEventDispatcherInterface` without the `reset()` method has been deprecated.

3.3.0
-----

  * The ContainerAwareEventDispatcher class has been deprecated. Use EventDispatcher with closure factories instead.

3.0.0
-----

  * The method `getListenerPriority(\$eventName, \$listener)` has been added to the
    `EventDispatcherInterface`.
  * The methods `Event::setDispatcher()`, `Event::getDispatcher()`, `Event::setName()`
    and `Event::getName()` have been removed.
    The event dispatcher and the event name are passed to the listener call.

2.5.0
-----

 * added Debug\\TraceableEventDispatcher (originally in HttpKernel)
 * changed Debug\\TraceableEventDispatcherInterface to extend EventDispatcherInterface
 * added RegisterListenersPass (originally in HttpKernel)

2.1.0
-----

 * added TraceableEventDispatcherInterface
 * added ContainerAwareEventDispatcher
 * added a reference to the EventDispatcher on the Event
 * added a reference to the Event name on the event
 * added fluid interface to the dispatch() method which now returns the Event
   object
 * added GenericEvent event class
 * added the possibility for subscribers to subscribe several times for the
   same event
 * added ImmutableEventDispatcher
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/event-dispatcher/CHANGELOG.md";
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

 * The signature of the `EventDispatcherInterface::dispatch()` method has been changed to `dispatch(\$event, string \$eventName = null): object`.
 * The `Event` class has been removed in favor of `Symfony\\Contracts\\EventDispatcher\\Event`.
 * The `TraceableEventDispatcherInterface` has been removed.
 * The `WrappedListener` class is now final.

4.4.0
-----

 * `AddEventAliasesPass` has been added, allowing applications and bundles to extend the event alias mapping used by `RegisterListenersPass`.
 * Made the `event` attribute of the `kernel.event_listener` tag optional for FQCN events.

4.3.0
-----

 * The signature of the `EventDispatcherInterface::dispatch()` method should be updated to `dispatch(\$event, string \$eventName = null)`, not doing so is deprecated
 * deprecated the `Event` class, use `Symfony\\Contracts\\EventDispatcher\\Event` instead

4.1.0
-----

 * added support for invokable event listeners tagged with `kernel.event_listener` by default
 * The `TraceableEventDispatcher::getOrphanedEvents()` method has been added.
 * The `TraceableEventDispatcherInterface` has been deprecated.

4.0.0
-----

 * removed the `ContainerAwareEventDispatcher` class
 * added the `reset()` method to the `TraceableEventDispatcherInterface`

3.4.0
-----

  * Implementing `TraceableEventDispatcherInterface` without the `reset()` method has been deprecated.

3.3.0
-----

  * The ContainerAwareEventDispatcher class has been deprecated. Use EventDispatcher with closure factories instead.

3.0.0
-----

  * The method `getListenerPriority(\$eventName, \$listener)` has been added to the
    `EventDispatcherInterface`.
  * The methods `Event::setDispatcher()`, `Event::getDispatcher()`, `Event::setName()`
    and `Event::getName()` have been removed.
    The event dispatcher and the event name are passed to the listener call.

2.5.0
-----

 * added Debug\\TraceableEventDispatcher (originally in HttpKernel)
 * changed Debug\\TraceableEventDispatcherInterface to extend EventDispatcherInterface
 * added RegisterListenersPass (originally in HttpKernel)

2.1.0
-----

 * added TraceableEventDispatcherInterface
 * added ContainerAwareEventDispatcher
 * added a reference to the EventDispatcher on the Event
 * added a reference to the Event name on the event
 * added fluid interface to the dispatch() method which now returns the Event
   object
 * added GenericEvent event class
 * added the possibility for subscribers to subscribe several times for the
   same event
 * added ImmutableEventDispatcher
", "@app/vendor/symfony/event-dispatcher/CHANGELOG.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\event-dispatcher\\CHANGELOG.md");
    }
}
