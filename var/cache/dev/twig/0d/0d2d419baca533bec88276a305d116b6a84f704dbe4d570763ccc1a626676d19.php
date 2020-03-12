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

/* @app/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php */
class __TwigTemplate_3b5453ebf9da3b5ed2b4e43e2aac67e7e9f43d656b12c0732803541ae89468a4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php"));

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

namespace Symfony\\Bridge\\Doctrine;

use Doctrine\\Common\\EventArgs;
use Doctrine\\Common\\EventManager;
use Psr\\Container\\ContainerInterface;

/**
 * Allows lazy loading of listener services.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ContainerAwareEventManager extends EventManager
{
    /**
     * Map of registered listeners.
     *
     * <event> => <listeners>
     */
    private \$listeners = [];
    private \$initialized = [];
    private \$methods = [];
    private \$container;

    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function dispatchEvent(\$eventName, EventArgs \$eventArgs = null)
    {
        if (!isset(\$this->listeners[\$eventName])) {
            return;
        }

        \$eventArgs = null === \$eventArgs ? EventArgs::getEmptyInstance() : \$eventArgs;

        if (!isset(\$this->initialized[\$eventName])) {
            \$this->initializeListeners(\$eventName);
        }

        foreach (\$this->listeners[\$eventName] as \$hash => \$listener) {
            \$listener->{\$this->methods[\$eventName][\$hash]}(\$eventArgs);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return object[][]
     */
    public function getListeners(\$event = null)
    {
        if (null !== \$event) {
            if (!isset(\$this->initialized[\$event])) {
                \$this->initializeListeners(\$event);
            }

            return \$this->listeners[\$event];
        }

        foreach (\$this->listeners as \$event => \$listeners) {
            if (!isset(\$this->initialized[\$event])) {
                \$this->initializeListeners(\$event);
            }
        }

        return \$this->listeners;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function hasListeners(\$event)
    {
        return isset(\$this->listeners[\$event]) && \$this->listeners[\$event];
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function addEventListener(\$events, \$listener)
    {
        \$hash = \$this->getHash(\$listener);

        foreach ((array) \$events as \$event) {
            // Overrides listener if a previous one was associated already
            // Prevents duplicate listeners on same event (same instance only)
            \$this->listeners[\$event][\$hash] = \$listener;

            if (\\is_string(\$listener)) {
                unset(\$this->initialized[\$event]);
            } else {
                \$this->methods[\$event][\$hash] = \$this->getMethod(\$listener, \$event);
            }
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function removeEventListener(\$events, \$listener)
    {
        \$hash = \$this->getHash(\$listener);

        foreach ((array) \$events as \$event) {
            // Check if we actually have this listener associated
            if (isset(\$this->listeners[\$event][\$hash])) {
                unset(\$this->listeners[\$event][\$hash]);
            }

            if (isset(\$this->methods[\$event][\$hash])) {
                unset(\$this->methods[\$event][\$hash]);
            }
        }
    }

    private function initializeListeners(string \$eventName)
    {
        foreach (\$this->listeners[\$eventName] as \$hash => \$listener) {
            if (\\is_string(\$listener)) {
                \$this->listeners[\$eventName][\$hash] = \$listener = \$this->container->get(\$listener);

                \$this->methods[\$eventName][\$hash] = \$this->getMethod(\$listener, \$eventName);
            }
        }
        \$this->initialized[\$eventName] = true;
    }

    /**
     * @param string|object \$listener
     */
    private function getHash(\$listener): string
    {
        if (\\is_string(\$listener)) {
            return '_service_'.\$listener;
        }

        return spl_object_hash(\$listener);
    }

    /**
     * @param object \$listener
     */
    private function getMethod(\$listener, string \$event): string
    {
        if (!method_exists(\$listener, \$event) && method_exists(\$listener, '__invoke')) {
            return '__invoke';
        }

        return \$event;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php";
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

namespace Symfony\\Bridge\\Doctrine;

use Doctrine\\Common\\EventArgs;
use Doctrine\\Common\\EventManager;
use Psr\\Container\\ContainerInterface;

/**
 * Allows lazy loading of listener services.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ContainerAwareEventManager extends EventManager
{
    /**
     * Map of registered listeners.
     *
     * <event> => <listeners>
     */
    private \$listeners = [];
    private \$initialized = [];
    private \$methods = [];
    private \$container;

    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function dispatchEvent(\$eventName, EventArgs \$eventArgs = null)
    {
        if (!isset(\$this->listeners[\$eventName])) {
            return;
        }

        \$eventArgs = null === \$eventArgs ? EventArgs::getEmptyInstance() : \$eventArgs;

        if (!isset(\$this->initialized[\$eventName])) {
            \$this->initializeListeners(\$eventName);
        }

        foreach (\$this->listeners[\$eventName] as \$hash => \$listener) {
            \$listener->{\$this->methods[\$eventName][\$hash]}(\$eventArgs);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return object[][]
     */
    public function getListeners(\$event = null)
    {
        if (null !== \$event) {
            if (!isset(\$this->initialized[\$event])) {
                \$this->initializeListeners(\$event);
            }

            return \$this->listeners[\$event];
        }

        foreach (\$this->listeners as \$event => \$listeners) {
            if (!isset(\$this->initialized[\$event])) {
                \$this->initializeListeners(\$event);
            }
        }

        return \$this->listeners;
    }

    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function hasListeners(\$event)
    {
        return isset(\$this->listeners[\$event]) && \$this->listeners[\$event];
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function addEventListener(\$events, \$listener)
    {
        \$hash = \$this->getHash(\$listener);

        foreach ((array) \$events as \$event) {
            // Overrides listener if a previous one was associated already
            // Prevents duplicate listeners on same event (same instance only)
            \$this->listeners[\$event][\$hash] = \$listener;

            if (\\is_string(\$listener)) {
                unset(\$this->initialized[\$event]);
            } else {
                \$this->methods[\$event][\$hash] = \$this->getMethod(\$listener, \$event);
            }
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function removeEventListener(\$events, \$listener)
    {
        \$hash = \$this->getHash(\$listener);

        foreach ((array) \$events as \$event) {
            // Check if we actually have this listener associated
            if (isset(\$this->listeners[\$event][\$hash])) {
                unset(\$this->listeners[\$event][\$hash]);
            }

            if (isset(\$this->methods[\$event][\$hash])) {
                unset(\$this->methods[\$event][\$hash]);
            }
        }
    }

    private function initializeListeners(string \$eventName)
    {
        foreach (\$this->listeners[\$eventName] as \$hash => \$listener) {
            if (\\is_string(\$listener)) {
                \$this->listeners[\$eventName][\$hash] = \$listener = \$this->container->get(\$listener);

                \$this->methods[\$eventName][\$hash] = \$this->getMethod(\$listener, \$eventName);
            }
        }
        \$this->initialized[\$eventName] = true;
    }

    /**
     * @param string|object \$listener
     */
    private function getHash(\$listener): string
    {
        if (\\is_string(\$listener)) {
            return '_service_'.\$listener;
        }

        return spl_object_hash(\$listener);
    }

    /**
     * @param object \$listener
     */
    private function getMethod(\$listener, string \$event): string
    {
        if (!method_exists(\$listener, \$event) && method_exists(\$listener, '__invoke')) {
            return '__invoke';
        }

        return \$event;
    }
}
", "@app/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\ContainerAwareEventManager.php");
    }
}
