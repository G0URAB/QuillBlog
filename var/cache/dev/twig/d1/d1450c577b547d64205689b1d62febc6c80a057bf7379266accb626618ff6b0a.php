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

/* @app/vendor/symfony/http-kernel/EventListener/ErrorListener.php */
class __TwigTemplate_228e142355216ad45156dfd3d373984f186a6773905c51c49ce87a6f4f3ac666 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/EventListener/ErrorListener.php"));

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

namespace Symfony\\Component\\HttpKernel\\EventListener;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Debug\\Exception\\FlattenException as LegacyFlattenException;
use Symfony\\Component\\ErrorHandler\\Exception\\FlattenException;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent;
use Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent;
use Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ErrorListener implements EventSubscriberInterface
{
    protected \$controller;
    protected \$logger;
    protected \$debug;

    public function __construct(\$controller, LoggerInterface \$logger = null, \$debug = false)
    {
        \$this->controller = \$controller;
        \$this->logger = \$logger;
        \$this->debug = \$debug;
    }

    public function logKernelException(ExceptionEvent \$event)
    {
        \$e = FlattenException::createFromThrowable(\$event->getThrowable());

        \$this->logException(\$event->getThrowable(), sprintf('Uncaught PHP Exception %s: \"%s\" at %s line %s', \$e->getClass(), \$e->getMessage(), \$e->getFile(), \$e->getLine()));
    }

    public function onKernelException(ExceptionEvent \$event, string \$eventName = null, EventDispatcherInterface \$eventDispatcher = null)
    {
        if (null === \$this->controller) {
            return;
        }

        \$exception = \$event->getThrowable();
        \$request = \$this->duplicateRequest(\$exception, \$event->getRequest());

        try {
            \$response = \$event->getKernel()->handle(\$request, HttpKernelInterface::SUB_REQUEST, false);
        } catch (\\Exception \$e) {
            \$f = FlattenException::createFromThrowable(\$e);

            \$this->logException(\$e, sprintf('Exception thrown when handling an exception (%s: %s at %s line %s)', \$f->getClass(), \$f->getMessage(), \$e->getFile(), \$e->getLine()));

            \$prev = \$e;
            do {
                if (\$exception === \$wrapper = \$prev) {
                    throw \$e;
                }
            } while (\$prev = \$wrapper->getPrevious());

            \$prev = new \\ReflectionProperty(\$wrapper instanceof \\Exception ? \\Exception::class : \\Error::class, 'previous');
            \$prev->setAccessible(true);
            \$prev->setValue(\$wrapper, \$exception);

            throw \$e;
        }

        \$event->setResponse(\$response);

        if (\$this->debug && \$eventDispatcher instanceof EventDispatcherInterface) {
            \$cspRemovalListener = function (\$event) use (&\$cspRemovalListener, \$eventDispatcher) {
                \$event->getResponse()->headers->remove('Content-Security-Policy');
                \$eventDispatcher->removeListener(KernelEvents::RESPONSE, \$cspRemovalListener);
            };
            \$eventDispatcher->addListener(KernelEvents::RESPONSE, \$cspRemovalListener, -128);
        }
    }

    public function onControllerArguments(ControllerArgumentsEvent \$event)
    {
        \$e = \$event->getRequest()->attributes->get('exception');

        if (!\$e instanceof \\Throwable || false === \$k = array_search(\$e, \$event->getArguments(), true)) {
            return;
        }

        \$r = new \\ReflectionFunction(\\Closure::fromCallable(\$event->getController()));
        \$r = \$r->getParameters()[\$k] ?? null;

        if (\$r && (!\$r->hasType() || \\in_array(\$r->getType()->getName(), [FlattenException::class, LegacyFlattenException::class], true))) {
            \$arguments = \$event->getArguments();
            \$arguments[\$k] = FlattenException::createFromThrowable(\$e);
            \$event->setArguments(\$arguments);
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::CONTROLLER_ARGUMENTS => 'onControllerArguments',
            KernelEvents::EXCEPTION => [
                ['logKernelException', 0],
                ['onKernelException', -128],
            ],
        ];
    }

    /**
     * Logs an exception.
     */
    protected function logException(\\Throwable \$exception, string \$message): void
    {
        if (null !== \$this->logger) {
            if (!\$exception instanceof HttpExceptionInterface || \$exception->getStatusCode() >= 500) {
                \$this->logger->critical(\$message, ['exception' => \$exception]);
            } else {
                \$this->logger->error(\$message, ['exception' => \$exception]);
            }
        }
    }

    /**
     * Clones the request for the exception.
     */
    protected function duplicateRequest(\\Throwable \$exception, Request \$request): Request
    {
        \$attributes = [
            '_controller' => \$this->controller,
            'exception' => \$exception,
            'logger' => \$this->logger instanceof DebugLoggerInterface ? \$this->logger : null,
        ];
        \$request = \$request->duplicate(null, null, \$attributes);
        \$request->setMethod('GET');

        return \$request;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/EventListener/ErrorListener.php";
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

namespace Symfony\\Component\\HttpKernel\\EventListener;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Debug\\Exception\\FlattenException as LegacyFlattenException;
use Symfony\\Component\\ErrorHandler\\Exception\\FlattenException;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent;
use Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent;
use Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ErrorListener implements EventSubscriberInterface
{
    protected \$controller;
    protected \$logger;
    protected \$debug;

    public function __construct(\$controller, LoggerInterface \$logger = null, \$debug = false)
    {
        \$this->controller = \$controller;
        \$this->logger = \$logger;
        \$this->debug = \$debug;
    }

    public function logKernelException(ExceptionEvent \$event)
    {
        \$e = FlattenException::createFromThrowable(\$event->getThrowable());

        \$this->logException(\$event->getThrowable(), sprintf('Uncaught PHP Exception %s: \"%s\" at %s line %s', \$e->getClass(), \$e->getMessage(), \$e->getFile(), \$e->getLine()));
    }

    public function onKernelException(ExceptionEvent \$event, string \$eventName = null, EventDispatcherInterface \$eventDispatcher = null)
    {
        if (null === \$this->controller) {
            return;
        }

        \$exception = \$event->getThrowable();
        \$request = \$this->duplicateRequest(\$exception, \$event->getRequest());

        try {
            \$response = \$event->getKernel()->handle(\$request, HttpKernelInterface::SUB_REQUEST, false);
        } catch (\\Exception \$e) {
            \$f = FlattenException::createFromThrowable(\$e);

            \$this->logException(\$e, sprintf('Exception thrown when handling an exception (%s: %s at %s line %s)', \$f->getClass(), \$f->getMessage(), \$e->getFile(), \$e->getLine()));

            \$prev = \$e;
            do {
                if (\$exception === \$wrapper = \$prev) {
                    throw \$e;
                }
            } while (\$prev = \$wrapper->getPrevious());

            \$prev = new \\ReflectionProperty(\$wrapper instanceof \\Exception ? \\Exception::class : \\Error::class, 'previous');
            \$prev->setAccessible(true);
            \$prev->setValue(\$wrapper, \$exception);

            throw \$e;
        }

        \$event->setResponse(\$response);

        if (\$this->debug && \$eventDispatcher instanceof EventDispatcherInterface) {
            \$cspRemovalListener = function (\$event) use (&\$cspRemovalListener, \$eventDispatcher) {
                \$event->getResponse()->headers->remove('Content-Security-Policy');
                \$eventDispatcher->removeListener(KernelEvents::RESPONSE, \$cspRemovalListener);
            };
            \$eventDispatcher->addListener(KernelEvents::RESPONSE, \$cspRemovalListener, -128);
        }
    }

    public function onControllerArguments(ControllerArgumentsEvent \$event)
    {
        \$e = \$event->getRequest()->attributes->get('exception');

        if (!\$e instanceof \\Throwable || false === \$k = array_search(\$e, \$event->getArguments(), true)) {
            return;
        }

        \$r = new \\ReflectionFunction(\\Closure::fromCallable(\$event->getController()));
        \$r = \$r->getParameters()[\$k] ?? null;

        if (\$r && (!\$r->hasType() || \\in_array(\$r->getType()->getName(), [FlattenException::class, LegacyFlattenException::class], true))) {
            \$arguments = \$event->getArguments();
            \$arguments[\$k] = FlattenException::createFromThrowable(\$e);
            \$event->setArguments(\$arguments);
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::CONTROLLER_ARGUMENTS => 'onControllerArguments',
            KernelEvents::EXCEPTION => [
                ['logKernelException', 0],
                ['onKernelException', -128],
            ],
        ];
    }

    /**
     * Logs an exception.
     */
    protected function logException(\\Throwable \$exception, string \$message): void
    {
        if (null !== \$this->logger) {
            if (!\$exception instanceof HttpExceptionInterface || \$exception->getStatusCode() >= 500) {
                \$this->logger->critical(\$message, ['exception' => \$exception]);
            } else {
                \$this->logger->error(\$message, ['exception' => \$exception]);
            }
        }
    }

    /**
     * Clones the request for the exception.
     */
    protected function duplicateRequest(\\Throwable \$exception, Request \$request): Request
    {
        \$attributes = [
            '_controller' => \$this->controller,
            'exception' => \$exception,
            'logger' => \$this->logger instanceof DebugLoggerInterface ? \$this->logger : null,
        ];
        \$request = \$request->duplicate(null, null, \$attributes);
        \$request->setMethod('GET');

        return \$request;
    }
}
", "@app/vendor/symfony/http-kernel/EventListener/ErrorListener.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\EventListener\\ErrorListener.php");
    }
}
