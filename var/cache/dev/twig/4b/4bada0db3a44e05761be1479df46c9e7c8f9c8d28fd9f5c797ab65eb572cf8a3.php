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

/* @app/vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php */
class __TwigTemplate_807f63b4aedc5d98f376fdeb3921c17c0d9d14ac8c44e165a67d8b38325c6aa3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php"));

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

namespace Symfony\\Component\\HttpKernel\\DataCollector;

use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\ControllerEvent;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RouterDataCollector extends DataCollector
{
    /**
     * @var \\SplObjectStorage
     */
    protected \$controllers;

    public function __construct()
    {
        \$this->reset();
    }

    /**
     * {@inheritdoc}
     *
     * @final
     */
    public function collect(Request \$request, Response \$response, \\Throwable \$exception = null)
    {
        if (\$response instanceof RedirectResponse) {
            \$this->data['redirect'] = true;
            \$this->data['url'] = \$response->getTargetUrl();

            if (\$this->controllers->contains(\$request)) {
                \$this->data['route'] = \$this->guessRoute(\$request, \$this->controllers[\$request]);
            }
        }

        unset(\$this->controllers[\$request]);
    }

    public function reset()
    {
        \$this->controllers = new \\SplObjectStorage();

        \$this->data = [
            'redirect' => false,
            'url' => null,
            'route' => null,
        ];
    }

    protected function guessRoute(Request \$request, \$controller)
    {
        return 'n/a';
    }

    /**
     * Remembers the controller associated to each request.
     */
    public function onKernelController(ControllerEvent \$event)
    {
        \$this->controllers[\$event->getRequest()] = \$event->getController();
    }

    /**
     * @return bool Whether this request will result in a redirect
     */
    public function getRedirect()
    {
        return \$this->data['redirect'];
    }

    /**
     * @return string|null The target URL
     */
    public function getTargetUrl()
    {
        return \$this->data['url'];
    }

    /**
     * @return string|null The target route
     */
    public function getTargetRoute()
    {
        return \$this->data['route'];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'router';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php";
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

namespace Symfony\\Component\\HttpKernel\\DataCollector;

use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\ControllerEvent;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RouterDataCollector extends DataCollector
{
    /**
     * @var \\SplObjectStorage
     */
    protected \$controllers;

    public function __construct()
    {
        \$this->reset();
    }

    /**
     * {@inheritdoc}
     *
     * @final
     */
    public function collect(Request \$request, Response \$response, \\Throwable \$exception = null)
    {
        if (\$response instanceof RedirectResponse) {
            \$this->data['redirect'] = true;
            \$this->data['url'] = \$response->getTargetUrl();

            if (\$this->controllers->contains(\$request)) {
                \$this->data['route'] = \$this->guessRoute(\$request, \$this->controllers[\$request]);
            }
        }

        unset(\$this->controllers[\$request]);
    }

    public function reset()
    {
        \$this->controllers = new \\SplObjectStorage();

        \$this->data = [
            'redirect' => false,
            'url' => null,
            'route' => null,
        ];
    }

    protected function guessRoute(Request \$request, \$controller)
    {
        return 'n/a';
    }

    /**
     * Remembers the controller associated to each request.
     */
    public function onKernelController(ControllerEvent \$event)
    {
        \$this->controllers[\$event->getRequest()] = \$event->getController();
    }

    /**
     * @return bool Whether this request will result in a redirect
     */
    public function getRedirect()
    {
        return \$this->data['redirect'];
    }

    /**
     * @return string|null The target URL
     */
    public function getTargetUrl()
    {
        return \$this->data['url'];
    }

    /**
     * @return string|null The target route
     */
    public function getTargetRoute()
    {
        return \$this->data['route'];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'router';
    }
}
", "@app/vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\DataCollector\\RouterDataCollector.php");
    }
}
