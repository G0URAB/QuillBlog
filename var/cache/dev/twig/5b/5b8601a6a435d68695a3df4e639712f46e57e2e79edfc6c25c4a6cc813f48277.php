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

/* @app/vendor/symfony/http-kernel/EventListener/ProfilerListener.php */
class __TwigTemplate_d4a64c9c38cdd3814902b303af9f68e00db277f09f9d6a7ff7f7bdca84f07fce extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/EventListener/ProfilerListener.php"));

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

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\RequestMatcherInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\TerminateEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\HttpKernel\\Profiler\\Profiler;

/**
 * ProfilerListener collects data for the current request by listening to the kernel events.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class ProfilerListener implements EventSubscriberInterface
{
    protected \$profiler;
    protected \$matcher;
    protected \$onlyException;
    protected \$onlyMasterRequests;
    protected \$exception;
    protected \$profiles;
    protected \$requestStack;
    protected \$parents;

    /**
     * @param bool \$onlyException      True if the profiler only collects data when an exception occurs, false otherwise
     * @param bool \$onlyMasterRequests True if the profiler only collects data when the request is a master request, false otherwise
     */
    public function __construct(Profiler \$profiler, RequestStack \$requestStack, RequestMatcherInterface \$matcher = null, bool \$onlyException = false, bool \$onlyMasterRequests = false)
    {
        \$this->profiler = \$profiler;
        \$this->matcher = \$matcher;
        \$this->onlyException = \$onlyException;
        \$this->onlyMasterRequests = \$onlyMasterRequests;
        \$this->profiles = new \\SplObjectStorage();
        \$this->parents = new \\SplObjectStorage();
        \$this->requestStack = \$requestStack;
    }

    /**
     * Handles the onKernelException event.
     */
    public function onKernelException(ExceptionEvent \$event)
    {
        if (\$this->onlyMasterRequests && !\$event->isMasterRequest()) {
            return;
        }

        \$this->exception = \$event->getThrowable();
    }

    /**
     * Handles the onKernelResponse event.
     */
    public function onKernelResponse(ResponseEvent \$event)
    {
        \$master = \$event->isMasterRequest();
        if (\$this->onlyMasterRequests && !\$master) {
            return;
        }

        if (\$this->onlyException && null === \$this->exception) {
            return;
        }

        \$request = \$event->getRequest();
        \$exception = \$this->exception;
        \$this->exception = null;

        if (null !== \$this->matcher && !\$this->matcher->matches(\$request)) {
            return;
        }

        if (!\$profile = \$this->profiler->collect(\$request, \$event->getResponse(), \$exception)) {
            return;
        }

        \$this->profiles[\$request] = \$profile;

        \$this->parents[\$request] = \$this->requestStack->getParentRequest();
    }

    public function onKernelTerminate(TerminateEvent \$event)
    {
        // attach children to parents
        foreach (\$this->profiles as \$request) {
            if (null !== \$parentRequest = \$this->parents[\$request]) {
                if (isset(\$this->profiles[\$parentRequest])) {
                    \$this->profiles[\$parentRequest]->addChild(\$this->profiles[\$request]);
                }
            }
        }

        // save profiles
        foreach (\$this->profiles as \$request) {
            \$this->profiler->saveProfile(\$this->profiles[\$request]);
        }

        \$this->profiles = new \\SplObjectStorage();
        \$this->parents = new \\SplObjectStorage();
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::RESPONSE => ['onKernelResponse', -100],
            KernelEvents::EXCEPTION => ['onKernelException', 0],
            KernelEvents::TERMINATE => ['onKernelTerminate', -1024],
        ];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/EventListener/ProfilerListener.php";
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

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\RequestMatcherInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\Event\\TerminateEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\HttpKernel\\Profiler\\Profiler;

/**
 * ProfilerListener collects data for the current request by listening to the kernel events.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class ProfilerListener implements EventSubscriberInterface
{
    protected \$profiler;
    protected \$matcher;
    protected \$onlyException;
    protected \$onlyMasterRequests;
    protected \$exception;
    protected \$profiles;
    protected \$requestStack;
    protected \$parents;

    /**
     * @param bool \$onlyException      True if the profiler only collects data when an exception occurs, false otherwise
     * @param bool \$onlyMasterRequests True if the profiler only collects data when the request is a master request, false otherwise
     */
    public function __construct(Profiler \$profiler, RequestStack \$requestStack, RequestMatcherInterface \$matcher = null, bool \$onlyException = false, bool \$onlyMasterRequests = false)
    {
        \$this->profiler = \$profiler;
        \$this->matcher = \$matcher;
        \$this->onlyException = \$onlyException;
        \$this->onlyMasterRequests = \$onlyMasterRequests;
        \$this->profiles = new \\SplObjectStorage();
        \$this->parents = new \\SplObjectStorage();
        \$this->requestStack = \$requestStack;
    }

    /**
     * Handles the onKernelException event.
     */
    public function onKernelException(ExceptionEvent \$event)
    {
        if (\$this->onlyMasterRequests && !\$event->isMasterRequest()) {
            return;
        }

        \$this->exception = \$event->getThrowable();
    }

    /**
     * Handles the onKernelResponse event.
     */
    public function onKernelResponse(ResponseEvent \$event)
    {
        \$master = \$event->isMasterRequest();
        if (\$this->onlyMasterRequests && !\$master) {
            return;
        }

        if (\$this->onlyException && null === \$this->exception) {
            return;
        }

        \$request = \$event->getRequest();
        \$exception = \$this->exception;
        \$this->exception = null;

        if (null !== \$this->matcher && !\$this->matcher->matches(\$request)) {
            return;
        }

        if (!\$profile = \$this->profiler->collect(\$request, \$event->getResponse(), \$exception)) {
            return;
        }

        \$this->profiles[\$request] = \$profile;

        \$this->parents[\$request] = \$this->requestStack->getParentRequest();
    }

    public function onKernelTerminate(TerminateEvent \$event)
    {
        // attach children to parents
        foreach (\$this->profiles as \$request) {
            if (null !== \$parentRequest = \$this->parents[\$request]) {
                if (isset(\$this->profiles[\$parentRequest])) {
                    \$this->profiles[\$parentRequest]->addChild(\$this->profiles[\$request]);
                }
            }
        }

        // save profiles
        foreach (\$this->profiles as \$request) {
            \$this->profiler->saveProfile(\$this->profiles[\$request]);
        }

        \$this->profiles = new \\SplObjectStorage();
        \$this->parents = new \\SplObjectStorage();
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::RESPONSE => ['onKernelResponse', -100],
            KernelEvents::EXCEPTION => ['onKernelException', 0],
            KernelEvents::TERMINATE => ['onKernelTerminate', -1024],
        ];
    }
}
", "@app/vendor/symfony/http-kernel/EventListener/ProfilerListener.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\EventListener\\ProfilerListener.php");
    }
}
