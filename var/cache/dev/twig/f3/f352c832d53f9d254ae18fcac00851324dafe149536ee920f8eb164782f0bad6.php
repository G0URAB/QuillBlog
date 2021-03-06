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

/* @app/vendor/symfony/http-kernel/EventListener/AbstractTestSessionListener.php */
class __TwigTemplate_340aca69048b0d33ed47b2f254553d519c78a59d41b5aa5cd944c4ee01d84a0b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/EventListener/AbstractTestSessionListener.php"));

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
use Symfony\\Component\\HttpFoundation\\Cookie;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * TestSessionListener.
 *
 * Saves session in test environment.
 *
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
abstract class AbstractTestSessionListener implements EventSubscriberInterface
{
    private \$sessionId;
    private \$sessionOptions;

    public function __construct(array \$sessionOptions = [])
    {
        \$this->sessionOptions = \$sessionOptions;
    }

    public function onKernelRequest(RequestEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        // bootstrap the session
        if (!\$session = \$this->getSession()) {
            return;
        }

        \$cookies = \$event->getRequest()->cookies;

        if (\$cookies->has(\$session->getName())) {
            \$this->sessionId = \$cookies->get(\$session->getName());
            \$session->setId(\$this->sessionId);
        }
    }

    /**
     * Checks if session was initialized and saves if current request is master
     * Runs on 'kernel.response' in test environment.
     */
    public function onKernelResponse(ResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        \$request = \$event->getRequest();
        if (!\$request->hasSession()) {
            return;
        }

        \$session = \$request->getSession();
        if (\$wasStarted = \$session->isStarted()) {
            \$session->save();
        }

        if (\$session instanceof Session ? !\$session->isEmpty() || (null !== \$this->sessionId && \$session->getId() !== \$this->sessionId) : \$wasStarted) {
            \$params = session_get_cookie_params() + ['samesite' => null];
            foreach (\$this->sessionOptions as \$k => \$v) {
                if (0 === strpos(\$k, 'cookie_')) {
                    \$params[substr(\$k, 7)] = \$v;
                }
            }

            foreach (\$event->getResponse()->headers->getCookies() as \$cookie) {
                if (\$session->getName() === \$cookie->getName() && \$params['path'] === \$cookie->getPath() && \$params['domain'] == \$cookie->getDomain()) {
                    return;
                }
            }

            \$event->getResponse()->headers->setCookie(new Cookie(\$session->getName(), \$session->getId(), 0 === \$params['lifetime'] ? 0 : time() + \$params['lifetime'], \$params['path'], \$params['domain'], \$params['secure'], \$params['httponly'], false, \$params['samesite'] ?: null));
            \$this->sessionId = \$session->getId();
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 192],
            KernelEvents::RESPONSE => ['onKernelResponse', -128],
        ];
    }

    /**
     * Gets the session object.
     *
     * @return SessionInterface|null A SessionInterface instance or null if no session is available
     */
    abstract protected function getSession();
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/EventListener/AbstractTestSessionListener.php";
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
use Symfony\\Component\\HttpFoundation\\Cookie;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * TestSessionListener.
 *
 * Saves session in test environment.
 *
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
abstract class AbstractTestSessionListener implements EventSubscriberInterface
{
    private \$sessionId;
    private \$sessionOptions;

    public function __construct(array \$sessionOptions = [])
    {
        \$this->sessionOptions = \$sessionOptions;
    }

    public function onKernelRequest(RequestEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        // bootstrap the session
        if (!\$session = \$this->getSession()) {
            return;
        }

        \$cookies = \$event->getRequest()->cookies;

        if (\$cookies->has(\$session->getName())) {
            \$this->sessionId = \$cookies->get(\$session->getName());
            \$session->setId(\$this->sessionId);
        }
    }

    /**
     * Checks if session was initialized and saves if current request is master
     * Runs on 'kernel.response' in test environment.
     */
    public function onKernelResponse(ResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        \$request = \$event->getRequest();
        if (!\$request->hasSession()) {
            return;
        }

        \$session = \$request->getSession();
        if (\$wasStarted = \$session->isStarted()) {
            \$session->save();
        }

        if (\$session instanceof Session ? !\$session->isEmpty() || (null !== \$this->sessionId && \$session->getId() !== \$this->sessionId) : \$wasStarted) {
            \$params = session_get_cookie_params() + ['samesite' => null];
            foreach (\$this->sessionOptions as \$k => \$v) {
                if (0 === strpos(\$k, 'cookie_')) {
                    \$params[substr(\$k, 7)] = \$v;
                }
            }

            foreach (\$event->getResponse()->headers->getCookies() as \$cookie) {
                if (\$session->getName() === \$cookie->getName() && \$params['path'] === \$cookie->getPath() && \$params['domain'] == \$cookie->getDomain()) {
                    return;
                }
            }

            \$event->getResponse()->headers->setCookie(new Cookie(\$session->getName(), \$session->getId(), 0 === \$params['lifetime'] ? 0 : time() + \$params['lifetime'], \$params['path'], \$params['domain'], \$params['secure'], \$params['httponly'], false, \$params['samesite'] ?: null));
            \$this->sessionId = \$session->getId();
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 192],
            KernelEvents::RESPONSE => ['onKernelResponse', -128],
        ];
    }

    /**
     * Gets the session object.
     *
     * @return SessionInterface|null A SessionInterface instance or null if no session is available
     */
    abstract protected function getSession();
}
", "@app/vendor/symfony/http-kernel/EventListener/AbstractTestSessionListener.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\EventListener\\AbstractTestSessionListener.php");
    }
}
