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

/* @app/vendor/symfony/http-kernel/EventListener/SessionListener.php */
class __TwigTemplate_5842841fe85c0dd80c74117734c0b55a877c5a186294fb2f2bf2decf7b82adf3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/EventListener/SessionListener.php"));

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

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage;

/**
 * Sets the session in the request.
 *
 * When the passed container contains a \"session_storage\" entry which
 * holds a NativeSessionStorage instance, the \"cookie_secure\" option
 * will be set to true whenever the current master request is secure.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class SessionListener extends AbstractSessionListener
{
    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    protected function getSession(): ?SessionInterface
    {
        if (!\$this->container->has('session')) {
            return null;
        }

        if (\$this->container->has('session_storage')
            && (\$storage = \$this->container->get('session_storage')) instanceof NativeSessionStorage
            && (\$masterRequest = \$this->container->get('request_stack')->getMasterRequest())
            && \$masterRequest->isSecure()
        ) {
            \$storage->setOptions(['cookie_secure' => true]);
        }

        return \$this->container->get('session');
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/EventListener/SessionListener.php";
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

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage;

/**
 * Sets the session in the request.
 *
 * When the passed container contains a \"session_storage\" entry which
 * holds a NativeSessionStorage instance, the \"cookie_secure\" option
 * will be set to true whenever the current master request is secure.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class SessionListener extends AbstractSessionListener
{
    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    protected function getSession(): ?SessionInterface
    {
        if (!\$this->container->has('session')) {
            return null;
        }

        if (\$this->container->has('session_storage')
            && (\$storage = \$this->container->get('session_storage')) instanceof NativeSessionStorage
            && (\$masterRequest = \$this->container->get('request_stack')->getMasterRequest())
            && \$masterRequest->isSecure()
        ) {
            \$storage->setOptions(['cookie_secure' => true]);
        }

        return \$this->container->get('session');
    }
}
", "@app/vendor/symfony/http-kernel/EventListener/SessionListener.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\EventListener\\SessionListener.php");
    }
}
