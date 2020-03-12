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

/* @app/vendor/symfony/dependency-injection/Loader/PhpFileLoader.php */
class __TwigTemplate_9451633bee87f0d544ec4c605b653a46ee125bee49106337a510c4cafdf29e84 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Loader/PhpFileLoader.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Loader;

use Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator;

/**
 * PhpFileLoader loads service definitions from a PHP file.
 *
 * The PHP file is required and the \$container variable can be
 * used within the file to change the container.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class PhpFileLoader extends FileLoader
{
    protected \$autoRegisterAliasesForSinglyImplementedInterfaces = false;

    /**
     * {@inheritdoc}
     */
    public function load(\$resource, \$type = null)
    {
        // the container and loader variables are exposed to the included file below
        \$container = \$this->container;
        \$loader = \$this;

        \$path = \$this->locator->locate(\$resource);
        \$this->setCurrentDir(\\dirname(\$path));
        \$this->container->fileExists(\$path);

        // the closure forbids access to the private scope in the included file
        \$load = \\Closure::bind(function (\$path) use (\$container, \$loader, \$resource, \$type) {
            return include \$path;
        }, \$this, ProtectedPhpFileLoader::class);

        try {
            \$callback = \$load(\$path);

            if (\\is_object(\$callback) && \\is_callable(\$callback)) {
                \$callback(new ContainerConfigurator(\$this->container, \$this, \$this->instanceof, \$path, \$resource), \$this->container, \$this);
            }
        } finally {
            \$this->instanceof = [];
            \$this->registerAliasesForSinglyImplementedInterfaces();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\$resource, string \$type = null)
    {
        if (!\\is_string(\$resource)) {
            return false;
        }

        if (null === \$type && 'php' === pathinfo(\$resource, PATHINFO_EXTENSION)) {
            return true;
        }

        return 'php' === \$type;
    }
}

/**
 * @internal
 */
final class ProtectedPhpFileLoader extends PhpFileLoader
{
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Loader/PhpFileLoader.php";
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

namespace Symfony\\Component\\DependencyInjection\\Loader;

use Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator;

/**
 * PhpFileLoader loads service definitions from a PHP file.
 *
 * The PHP file is required and the \$container variable can be
 * used within the file to change the container.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class PhpFileLoader extends FileLoader
{
    protected \$autoRegisterAliasesForSinglyImplementedInterfaces = false;

    /**
     * {@inheritdoc}
     */
    public function load(\$resource, \$type = null)
    {
        // the container and loader variables are exposed to the included file below
        \$container = \$this->container;
        \$loader = \$this;

        \$path = \$this->locator->locate(\$resource);
        \$this->setCurrentDir(\\dirname(\$path));
        \$this->container->fileExists(\$path);

        // the closure forbids access to the private scope in the included file
        \$load = \\Closure::bind(function (\$path) use (\$container, \$loader, \$resource, \$type) {
            return include \$path;
        }, \$this, ProtectedPhpFileLoader::class);

        try {
            \$callback = \$load(\$path);

            if (\\is_object(\$callback) && \\is_callable(\$callback)) {
                \$callback(new ContainerConfigurator(\$this->container, \$this, \$this->instanceof, \$path, \$resource), \$this->container, \$this);
            }
        } finally {
            \$this->instanceof = [];
            \$this->registerAliasesForSinglyImplementedInterfaces();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\$resource, string \$type = null)
    {
        if (!\\is_string(\$resource)) {
            return false;
        }

        if (null === \$type && 'php' === pathinfo(\$resource, PATHINFO_EXTENSION)) {
            return true;
        }

        return 'php' === \$type;
    }
}

/**
 * @internal
 */
final class ProtectedPhpFileLoader extends PhpFileLoader
{
}
", "@app/vendor/symfony/dependency-injection/Loader/PhpFileLoader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Loader\\PhpFileLoader.php");
    }
}
