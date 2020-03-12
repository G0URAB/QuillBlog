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

/* @app/vendor/symfony/http-kernel/EventListener/SurrogateListener.php */
class __TwigTemplate_c8edde411612135726a715cccb21b097ada472c55af7e2a776f7d1e25e7e0a72 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/EventListener/SurrogateListener.php"));

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
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\HttpCache\\HttpCache;
use Symfony\\Component\\HttpKernel\\HttpCache\\SurrogateInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * SurrogateListener adds a Surrogate-Control HTTP header when the Response needs to be parsed for Surrogates.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class SurrogateListener implements EventSubscriberInterface
{
    private \$surrogate;

    public function __construct(SurrogateInterface \$surrogate = null)
    {
        \$this->surrogate = \$surrogate;
    }

    /**
     * Filters the Response.
     */
    public function onKernelResponse(ResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        \$kernel = \$event->getKernel();
        \$surrogate = \$this->surrogate;
        if (\$kernel instanceof HttpCache) {
            \$surrogate = \$kernel->getSurrogate();
            if (null !== \$this->surrogate && \$this->surrogate->getName() !== \$surrogate->getName()) {
                \$surrogate = \$this->surrogate;
            }
        }

        if (null === \$surrogate) {
            return;
        }

        \$surrogate->addSurrogateControl(\$event->getResponse());
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::RESPONSE => 'onKernelResponse',
        ];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/EventListener/SurrogateListener.php";
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
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\HttpCache\\HttpCache;
use Symfony\\Component\\HttpKernel\\HttpCache\\SurrogateInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;

/**
 * SurrogateListener adds a Surrogate-Control HTTP header when the Response needs to be parsed for Surrogates.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class SurrogateListener implements EventSubscriberInterface
{
    private \$surrogate;

    public function __construct(SurrogateInterface \$surrogate = null)
    {
        \$this->surrogate = \$surrogate;
    }

    /**
     * Filters the Response.
     */
    public function onKernelResponse(ResponseEvent \$event)
    {
        if (!\$event->isMasterRequest()) {
            return;
        }

        \$kernel = \$event->getKernel();
        \$surrogate = \$this->surrogate;
        if (\$kernel instanceof HttpCache) {
            \$surrogate = \$kernel->getSurrogate();
            if (null !== \$this->surrogate && \$this->surrogate->getName() !== \$surrogate->getName()) {
                \$surrogate = \$this->surrogate;
            }
        }

        if (null === \$surrogate) {
            return;
        }

        \$surrogate->addSurrogateControl(\$event->getResponse());
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::RESPONSE => 'onKernelResponse',
        ];
    }
}
", "@app/vendor/symfony/http-kernel/EventListener/SurrogateListener.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\EventListener\\SurrogateListener.php");
    }
}
