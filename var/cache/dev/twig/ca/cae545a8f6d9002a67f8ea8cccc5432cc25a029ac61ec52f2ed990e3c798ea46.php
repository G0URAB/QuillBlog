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

/* @app/vendor/symfony/event-dispatcher/Debug/WrappedListener.php */
class __TwigTemplate_7f6dd8e7a5600491e4e9787d1e976a5e7ff75349be7a3470a2b92ed9b1f7114d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/event-dispatcher/Debug/WrappedListener.php"));

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

namespace Symfony\\Component\\EventDispatcher\\Debug;

use Psr\\EventDispatcher\\StoppableEventInterface;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Stopwatch\\Stopwatch;
use Symfony\\Component\\VarDumper\\Caster\\ClassStub;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class WrappedListener
{
    private \$listener;
    private \$optimizedListener;
    private \$name;
    private \$called;
    private \$stoppedPropagation;
    private \$stopwatch;
    private \$dispatcher;
    private \$pretty;
    private \$stub;
    private \$priority;
    private static \$hasClassStub;

    public function __construct(\$listener, ?string \$name, Stopwatch \$stopwatch, EventDispatcherInterface \$dispatcher = null)
    {
        \$this->listener = \$listener;
        \$this->optimizedListener = \$listener instanceof \\Closure ? \$listener : (\\is_callable(\$listener) ? \\Closure::fromCallable(\$listener) : null);
        \$this->stopwatch = \$stopwatch;
        \$this->dispatcher = \$dispatcher;
        \$this->called = false;
        \$this->stoppedPropagation = false;

        if (\\is_array(\$listener)) {
            \$this->name = \\is_object(\$listener[0]) ? \\get_class(\$listener[0]) : \$listener[0];
            \$this->pretty = \$this->name.'::'.\$listener[1];
        } elseif (\$listener instanceof \\Closure) {
            \$r = new \\ReflectionFunction(\$listener);
            if (false !== strpos(\$r->name, '{closure}')) {
                \$this->pretty = \$this->name = 'closure';
            } elseif (\$class = \$r->getClosureScopeClass()) {
                \$this->name = \$class->name;
                \$this->pretty = \$this->name.'::'.\$r->name;
            } else {
                \$this->pretty = \$this->name = \$r->name;
            }
        } elseif (\\is_string(\$listener)) {
            \$this->pretty = \$this->name = \$listener;
        } else {
            \$this->name = \\get_class(\$listener);
            \$this->pretty = \$this->name.'::__invoke';
        }

        if (null !== \$name) {
            \$this->name = \$name;
        }

        if (null === self::\$hasClassStub) {
            self::\$hasClassStub = class_exists(ClassStub::class);
        }
    }

    public function getWrappedListener()
    {
        return \$this->listener;
    }

    public function wasCalled(): bool
    {
        return \$this->called;
    }

    public function stoppedPropagation(): bool
    {
        return \$this->stoppedPropagation;
    }

    public function getPretty(): string
    {
        return \$this->pretty;
    }

    public function getInfo(string \$eventName): array
    {
        if (null === \$this->stub) {
            \$this->stub = self::\$hasClassStub ? new ClassStub(\$this->pretty.'()', \$this->listener) : \$this->pretty.'()';
        }

        return [
            'event' => \$eventName,
            'priority' => null !== \$this->priority ? \$this->priority : (null !== \$this->dispatcher ? \$this->dispatcher->getListenerPriority(\$eventName, \$this->listener) : null),
            'pretty' => \$this->pretty,
            'stub' => \$this->stub,
        ];
    }

    public function __invoke(object \$event, string \$eventName, EventDispatcherInterface \$dispatcher): void
    {
        \$dispatcher = \$this->dispatcher ?: \$dispatcher;

        \$this->called = true;
        \$this->priority = \$dispatcher->getListenerPriority(\$eventName, \$this->listener);

        \$e = \$this->stopwatch->start(\$this->name, 'event_listener');

        (\$this->optimizedListener ?? \$this->listener)(\$event, \$eventName, \$dispatcher);

        if (\$e->isStarted()) {
            \$e->stop();
        }

        if (\$event instanceof StoppableEventInterface && \$event->isPropagationStopped()) {
            \$this->stoppedPropagation = true;
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/event-dispatcher/Debug/WrappedListener.php";
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

namespace Symfony\\Component\\EventDispatcher\\Debug;

use Psr\\EventDispatcher\\StoppableEventInterface;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Stopwatch\\Stopwatch;
use Symfony\\Component\\VarDumper\\Caster\\ClassStub;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class WrappedListener
{
    private \$listener;
    private \$optimizedListener;
    private \$name;
    private \$called;
    private \$stoppedPropagation;
    private \$stopwatch;
    private \$dispatcher;
    private \$pretty;
    private \$stub;
    private \$priority;
    private static \$hasClassStub;

    public function __construct(\$listener, ?string \$name, Stopwatch \$stopwatch, EventDispatcherInterface \$dispatcher = null)
    {
        \$this->listener = \$listener;
        \$this->optimizedListener = \$listener instanceof \\Closure ? \$listener : (\\is_callable(\$listener) ? \\Closure::fromCallable(\$listener) : null);
        \$this->stopwatch = \$stopwatch;
        \$this->dispatcher = \$dispatcher;
        \$this->called = false;
        \$this->stoppedPropagation = false;

        if (\\is_array(\$listener)) {
            \$this->name = \\is_object(\$listener[0]) ? \\get_class(\$listener[0]) : \$listener[0];
            \$this->pretty = \$this->name.'::'.\$listener[1];
        } elseif (\$listener instanceof \\Closure) {
            \$r = new \\ReflectionFunction(\$listener);
            if (false !== strpos(\$r->name, '{closure}')) {
                \$this->pretty = \$this->name = 'closure';
            } elseif (\$class = \$r->getClosureScopeClass()) {
                \$this->name = \$class->name;
                \$this->pretty = \$this->name.'::'.\$r->name;
            } else {
                \$this->pretty = \$this->name = \$r->name;
            }
        } elseif (\\is_string(\$listener)) {
            \$this->pretty = \$this->name = \$listener;
        } else {
            \$this->name = \\get_class(\$listener);
            \$this->pretty = \$this->name.'::__invoke';
        }

        if (null !== \$name) {
            \$this->name = \$name;
        }

        if (null === self::\$hasClassStub) {
            self::\$hasClassStub = class_exists(ClassStub::class);
        }
    }

    public function getWrappedListener()
    {
        return \$this->listener;
    }

    public function wasCalled(): bool
    {
        return \$this->called;
    }

    public function stoppedPropagation(): bool
    {
        return \$this->stoppedPropagation;
    }

    public function getPretty(): string
    {
        return \$this->pretty;
    }

    public function getInfo(string \$eventName): array
    {
        if (null === \$this->stub) {
            \$this->stub = self::\$hasClassStub ? new ClassStub(\$this->pretty.'()', \$this->listener) : \$this->pretty.'()';
        }

        return [
            'event' => \$eventName,
            'priority' => null !== \$this->priority ? \$this->priority : (null !== \$this->dispatcher ? \$this->dispatcher->getListenerPriority(\$eventName, \$this->listener) : null),
            'pretty' => \$this->pretty,
            'stub' => \$this->stub,
        ];
    }

    public function __invoke(object \$event, string \$eventName, EventDispatcherInterface \$dispatcher): void
    {
        \$dispatcher = \$this->dispatcher ?: \$dispatcher;

        \$this->called = true;
        \$this->priority = \$dispatcher->getListenerPriority(\$eventName, \$this->listener);

        \$e = \$this->stopwatch->start(\$this->name, 'event_listener');

        (\$this->optimizedListener ?? \$this->listener)(\$event, \$eventName, \$dispatcher);

        if (\$e->isStarted()) {
            \$e->stop();
        }

        if (\$event instanceof StoppableEventInterface && \$event->isPropagationStopped()) {
            \$this->stoppedPropagation = true;
        }
    }
}
", "@app/vendor/symfony/event-dispatcher/Debug/WrappedListener.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\event-dispatcher\\Debug\\WrappedListener.php");
    }
}
