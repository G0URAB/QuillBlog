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

/* @app/vendor/symfony/event-dispatcher/ImmutableEventDispatcher.php */
class __TwigTemplate_f743bad7f354612390d6a71d3e3293288afb5ab24934f84f4d4da32aba9a9241 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/event-dispatcher/ImmutableEventDispatcher.php"));

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

/**
 * A read-only proxy for an event dispatcher.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ImmutableEventDispatcher implements EventDispatcherInterface
{
    private \$dispatcher;

    public function __construct(EventDispatcherInterface \$dispatcher)
    {
        \$this->dispatcher = \$dispatcher;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(object \$event, string \$eventName = null): object
    {
        return \$this->dispatcher->dispatch(\$event, \$eventName);
    }

    /**
     * {@inheritdoc}
     */
    public function addListener(string \$eventName, \$listener, int \$priority = 0)
    {
        throw new \\BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

    /**
     * {@inheritdoc}
     */
    public function addSubscriber(EventSubscriberInterface \$subscriber)
    {
        throw new \\BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

    /**
     * {@inheritdoc}
     */
    public function removeListener(string \$eventName, \$listener)
    {
        throw new \\BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

    /**
     * {@inheritdoc}
     */
    public function removeSubscriber(EventSubscriberInterface \$subscriber)
    {
        throw new \\BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

    /**
     * {@inheritdoc}
     */
    public function getListeners(string \$eventName = null)
    {
        return \$this->dispatcher->getListeners(\$eventName);
    }

    /**
     * {@inheritdoc}
     */
    public function getListenerPriority(string \$eventName, \$listener)
    {
        return \$this->dispatcher->getListenerPriority(\$eventName, \$listener);
    }

    /**
     * {@inheritdoc}
     */
    public function hasListeners(string \$eventName = null)
    {
        return \$this->dispatcher->hasListeners(\$eventName);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/event-dispatcher/ImmutableEventDispatcher.php";
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

/**
 * A read-only proxy for an event dispatcher.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ImmutableEventDispatcher implements EventDispatcherInterface
{
    private \$dispatcher;

    public function __construct(EventDispatcherInterface \$dispatcher)
    {
        \$this->dispatcher = \$dispatcher;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(object \$event, string \$eventName = null): object
    {
        return \$this->dispatcher->dispatch(\$event, \$eventName);
    }

    /**
     * {@inheritdoc}
     */
    public function addListener(string \$eventName, \$listener, int \$priority = 0)
    {
        throw new \\BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

    /**
     * {@inheritdoc}
     */
    public function addSubscriber(EventSubscriberInterface \$subscriber)
    {
        throw new \\BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

    /**
     * {@inheritdoc}
     */
    public function removeListener(string \$eventName, \$listener)
    {
        throw new \\BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

    /**
     * {@inheritdoc}
     */
    public function removeSubscriber(EventSubscriberInterface \$subscriber)
    {
        throw new \\BadMethodCallException('Unmodifiable event dispatchers must not be modified.');
    }

    /**
     * {@inheritdoc}
     */
    public function getListeners(string \$eventName = null)
    {
        return \$this->dispatcher->getListeners(\$eventName);
    }

    /**
     * {@inheritdoc}
     */
    public function getListenerPriority(string \$eventName, \$listener)
    {
        return \$this->dispatcher->getListenerPriority(\$eventName, \$listener);
    }

    /**
     * {@inheritdoc}
     */
    public function hasListeners(string \$eventName = null)
    {
        return \$this->dispatcher->hasListeners(\$eventName);
    }
}
", "@app/vendor/symfony/event-dispatcher/ImmutableEventDispatcher.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\event-dispatcher\\ImmutableEventDispatcher.php");
    }
}
