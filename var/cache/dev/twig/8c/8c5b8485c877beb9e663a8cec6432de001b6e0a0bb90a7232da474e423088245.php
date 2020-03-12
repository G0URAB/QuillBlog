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

/* @app/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php */
class __TwigTemplate_2238547934b039ff51072a09c5647c8c5b585fc5f86247816b8ba77cef2fb4e7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Routing;

use Symfony\\Component\\Config\\Exception\\LoaderLoadException;
use Symfony\\Component\\Config\\Loader\\DelegatingLoader as BaseDelegatingLoader;
use Symfony\\Component\\Config\\Loader\\LoaderResolverInterface;

/**
 * DelegatingLoader delegates route loading to other loaders using a loader resolver.
 *
 * This implementation resolves the _controller attribute from the short notation
 * to the fully-qualified form (from a:b:c to class::method).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class DelegatingLoader extends BaseDelegatingLoader
{
    private \$loading = false;
    private \$defaultOptions;

    public function __construct(LoaderResolverInterface \$resolver, array \$defaultOptions = [])
    {
        \$this->defaultOptions = \$defaultOptions;

        parent::__construct(\$resolver);
    }

    /**
     * {@inheritdoc}
     */
    public function load(\$resource, string \$type = null)
    {
        if (\$this->loading) {
            // This can happen if a fatal error occurs in parent::load().
            // Here is the scenario:
            // - while routes are being loaded by parent::load() below, a fatal error
            //   occurs (e.g. parse error in a controller while loading annotations);
            // - PHP abruptly empties the stack trace, bypassing all catch/finally blocks;
            //   it then calls the registered shutdown functions;
            // - the ErrorHandler catches the fatal error and re-injects it for rendering
            //   thanks to HttpKernel->terminateWithException() (that calls handleException());
            // - at this stage, if we try to load the routes again, we must prevent
            //   the fatal error from occurring a second time,
            //   otherwise the PHP process would be killed immediately;
            // - while rendering the exception page, the router can be required
            //   (by e.g. the web profiler that needs to generate an URL);
            // - this handles the case and prevents the second fatal error
            //   by triggering an exception beforehand.

            throw new LoaderLoadException(\$resource, null, null, null, \$type);
        }
        \$this->loading = true;

        try {
            \$collection = parent::load(\$resource, \$type);
        } finally {
            \$this->loading = false;
        }

        foreach (\$collection->all() as \$route) {
            if (\$this->defaultOptions) {
                \$route->setOptions(\$route->getOptions() + \$this->defaultOptions);
            }
            if (!\\is_string(\$controller = \$route->getDefault('_controller'))) {
                continue;
            }

            if (false !== strpos(\$controller, '::')) {
                continue;
            }

            \$route->setDefault('_controller', \$controller);
        }

        return \$collection;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Routing;

use Symfony\\Component\\Config\\Exception\\LoaderLoadException;
use Symfony\\Component\\Config\\Loader\\DelegatingLoader as BaseDelegatingLoader;
use Symfony\\Component\\Config\\Loader\\LoaderResolverInterface;

/**
 * DelegatingLoader delegates route loading to other loaders using a loader resolver.
 *
 * This implementation resolves the _controller attribute from the short notation
 * to the fully-qualified form (from a:b:c to class::method).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class DelegatingLoader extends BaseDelegatingLoader
{
    private \$loading = false;
    private \$defaultOptions;

    public function __construct(LoaderResolverInterface \$resolver, array \$defaultOptions = [])
    {
        \$this->defaultOptions = \$defaultOptions;

        parent::__construct(\$resolver);
    }

    /**
     * {@inheritdoc}
     */
    public function load(\$resource, string \$type = null)
    {
        if (\$this->loading) {
            // This can happen if a fatal error occurs in parent::load().
            // Here is the scenario:
            // - while routes are being loaded by parent::load() below, a fatal error
            //   occurs (e.g. parse error in a controller while loading annotations);
            // - PHP abruptly empties the stack trace, bypassing all catch/finally blocks;
            //   it then calls the registered shutdown functions;
            // - the ErrorHandler catches the fatal error and re-injects it for rendering
            //   thanks to HttpKernel->terminateWithException() (that calls handleException());
            // - at this stage, if we try to load the routes again, we must prevent
            //   the fatal error from occurring a second time,
            //   otherwise the PHP process would be killed immediately;
            // - while rendering the exception page, the router can be required
            //   (by e.g. the web profiler that needs to generate an URL);
            // - this handles the case and prevents the second fatal error
            //   by triggering an exception beforehand.

            throw new LoaderLoadException(\$resource, null, null, null, \$type);
        }
        \$this->loading = true;

        try {
            \$collection = parent::load(\$resource, \$type);
        } finally {
            \$this->loading = false;
        }

        foreach (\$collection->all() as \$route) {
            if (\$this->defaultOptions) {
                \$route->setOptions(\$route->getOptions() + \$this->defaultOptions);
            }
            if (!\\is_string(\$controller = \$route->getDefault('_controller'))) {
                continue;
            }

            if (false !== strpos(\$controller, '::')) {
                continue;
            }

            \$route->setDefault('_controller', \$controller);
        }

        return \$collection;
    }
}
", "@app/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Routing\\DelegatingLoader.php");
    }
}
