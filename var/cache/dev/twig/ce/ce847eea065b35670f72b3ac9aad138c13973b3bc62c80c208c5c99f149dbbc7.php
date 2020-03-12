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

/* @app/vendor/symfony/event-dispatcher/EventDispatcherInterface.php */
class __TwigTemplate_d64eb391a995e131e13c342ede68bad1c2cadd39e1524a5018aec52f4562f40e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/event-dispatcher/EventDispatcherInterface.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\EventDispatcher;

use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface as ContractsEventDispatcherInterface;

/**
 * The EventDispatcherInterface is the central point of Symfony's event listener system.
 * Listeners are registered on the manager and events are dispatched through the
 * manager.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface EventDispatcherInterface extends ContractsEventDispatcherInterface
{
    /**
     * Adds an event listener that listens on the specified events.
     *
     * @param callable \$listener The listener
     * @param int      \$priority The higher this value, the earlier an event
     *                           listener will be triggered in the chain (defaults to 0)
     */
    public function addListener(string \$eventName, \$listener, int \$priority = 0);

    /**
     * Adds an event subscriber.
     *
     * The subscriber is asked for all the events it is
     * interested in and added as a listener for these events.
     */
    public function addSubscriber(EventSubscriberInterface \$subscriber);

    /**
     * Removes an event listener from the specified events.
     *
     * @param callable \$listener The listener to remove
     */
    public function removeListener(string \$eventName, \$listener);

    public function removeSubscriber(EventSubscriberInterface \$subscriber);

    /**
     * Gets the listeners of a specific event or all listeners sorted by descending priority.
     *
     * @return array The event listeners for the specified event, or all event listeners by event name
     */
    public function getListeners(string \$eventName = null);

    /**
     * Gets the listener priority for a specific event.
     *
     * Returns null if the event or the listener does not exist.
     *
     * @param callable \$listener The listener
     *
     * @return int|null The event listener priority
     */
    public function getListenerPriority(string \$eventName, \$listener);

    /**
     * Checks whether an event has any registered listeners.
     *
     * @return bool true if the specified event has any listeners, false otherwise
     */
    public function hasListeners(string \$eventName = null);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/event-dispatcher/EventDispatcherInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\EventDispatcher;

use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface as ContractsEventDispatcherInterface;

/**
 * The EventDispatcherInterface is the central point of Symfony's event listener system.
 * Listeners are registered on the manager and events are dispatched through the
 * manager.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface EventDispatcherInterface extends ContractsEventDispatcherInterface
{
    /**
     * Adds an event listener that listens on the specified events.
     *
     * @param callable \$listener The listener
     * @param int      \$priority The higher this value, the earlier an event
     *                           listener will be triggered in the chain (defaults to 0)
     */
    public function addListener(string \$eventName, \$listener, int \$priority = 0);

    /**
     * Adds an event subscriber.
     *
     * The subscriber is asked for all the events it is
     * interested in and added as a listener for these events.
     */
    public function addSubscriber(EventSubscriberInterface \$subscriber);

    /**
     * Removes an event listener from the specified events.
     *
     * @param callable \$listener The listener to remove
     */
    public function removeListener(string \$eventName, \$listener);

    public function removeSubscriber(EventSubscriberInterface \$subscriber);

    /**
     * Gets the listeners of a specific event or all listeners sorted by descending priority.
     *
     * @return array The event listeners for the specified event, or all event listeners by event name
     */
    public function getListeners(string \$eventName = null);

    /**
     * Gets the listener priority for a specific event.
     *
     * Returns null if the event or the listener does not exist.
     *
     * @param callable \$listener The listener
     *
     * @return int|null The event listener priority
     */
    public function getListenerPriority(string \$eventName, \$listener);

    /**
     * Checks whether an event has any registered listeners.
     *
     * @return bool true if the specified event has any listeners, false otherwise
     */
    public function hasListeners(string \$eventName = null);
}
", "@app/vendor/symfony/event-dispatcher/EventDispatcherInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\event-dispatcher\\EventDispatcherInterface.php");
    }
}
