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

/* @app/vendor/symfony/twig-bridge/Extension/HttpKernelRuntime.php */
class __TwigTemplate_12195ea3413f514d0f87989c09547b71dcb924762d80e241e339b4c8c0b02910 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/Extension/HttpKernelRuntime.php"));

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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;
use Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler;

/**
 * Provides integration with the HttpKernel component.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class HttpKernelRuntime
{
    private \$handler;

    public function __construct(FragmentHandler \$handler)
    {
        \$this->handler = \$handler;
    }

    /**
     * Renders a fragment.
     *
     * @param string|ControllerReference \$uri A URI as a string or a ControllerReference instance
     *
     * @see FragmentHandler::render()
     */
    public function renderFragment(\$uri, array \$options = []): string
    {
        \$strategy = isset(\$options['strategy']) ? \$options['strategy'] : 'inline';
        unset(\$options['strategy']);

        return \$this->handler->render(\$uri, \$strategy, \$options);
    }

    /**
     * Renders a fragment.
     *
     * @param string|ControllerReference \$uri A URI as a string or a ControllerReference instance
     *
     * @see FragmentHandler::render()
     */
    public function renderFragmentStrategy(string \$strategy, \$uri, array \$options = []): string
    {
        return \$this->handler->render(\$uri, \$strategy, \$options);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/Extension/HttpKernelRuntime.php";
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

namespace Symfony\\Bridge\\Twig\\Extension;

use Symfony\\Component\\HttpKernel\\Controller\\ControllerReference;
use Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler;

/**
 * Provides integration with the HttpKernel component.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class HttpKernelRuntime
{
    private \$handler;

    public function __construct(FragmentHandler \$handler)
    {
        \$this->handler = \$handler;
    }

    /**
     * Renders a fragment.
     *
     * @param string|ControllerReference \$uri A URI as a string or a ControllerReference instance
     *
     * @see FragmentHandler::render()
     */
    public function renderFragment(\$uri, array \$options = []): string
    {
        \$strategy = isset(\$options['strategy']) ? \$options['strategy'] : 'inline';
        unset(\$options['strategy']);

        return \$this->handler->render(\$uri, \$strategy, \$options);
    }

    /**
     * Renders a fragment.
     *
     * @param string|ControllerReference \$uri A URI as a string or a ControllerReference instance
     *
     * @see FragmentHandler::render()
     */
    public function renderFragmentStrategy(string \$strategy, \$uri, array \$options = []): string
    {
        return \$this->handler->render(\$uri, \$strategy, \$options);
    }
}
", "@app/vendor/symfony/twig-bridge/Extension/HttpKernelRuntime.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\Extension\\HttpKernelRuntime.php");
    }
}
