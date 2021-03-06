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

/* @app/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php */
class __TwigTemplate_d52986ab38a05ae338dbbf1765707e104a8ea7385683727da353e62fb8a5ed5e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php"));

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

namespace Symfony\\Component\\HttpKernel\\Controller;

use Psr\\Container\\ContainerInterface;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\DependencyInjection\\Container;

/**
 * A controller resolver searching for a controller in a psr-11 container when using the \"service:method\" notation.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ContainerControllerResolver extends ControllerResolver
{
    protected \$container;

    public function __construct(ContainerInterface \$container, LoggerInterface \$logger = null)
    {
        \$this->container = \$container;

        parent::__construct(\$logger);
    }

    protected function createController(string \$controller)
    {
        if (1 === substr_count(\$controller, ':')) {
            \$controller = str_replace(':', '::', \$controller);
            // TODO deprecate this in 5.1
        }

        return parent::createController(\$controller);
    }

    /**
     * {@inheritdoc}
     */
    protected function instantiateController(string \$class)
    {
        \$class = ltrim(\$class, '\\\\');

        if (\$this->container->has(\$class)) {
            return \$this->container->get(\$class);
        }

        try {
            return parent::instantiateController(\$class);
        } catch (\\Error \$e) {
        }

        \$this->throwExceptionIfControllerWasRemoved(\$class, \$e);

        if (\$e instanceof \\ArgumentCountError) {
            throw new \\InvalidArgumentException(sprintf('Controller \"%s\" has required constructor arguments and does not exist in the container. Did you forget to define the controller as a service?', \$class), 0, \$e);
        }

        throw new \\InvalidArgumentException(sprintf('Controller \"%s\" does neither exist as service nor as class', \$class), 0, \$e);
    }

    private function throwExceptionIfControllerWasRemoved(string \$controller, \\Throwable \$previous)
    {
        if (\$this->container instanceof Container && isset(\$this->container->getRemovedIds()[\$controller])) {
            throw new \\InvalidArgumentException(sprintf('Controller \"%s\" cannot be fetched from the container because it is private. Did you forget to tag the service with \"controller.service_arguments\"?', \$controller), 0, \$previous);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php";
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

namespace Symfony\\Component\\HttpKernel\\Controller;

use Psr\\Container\\ContainerInterface;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\DependencyInjection\\Container;

/**
 * A controller resolver searching for a controller in a psr-11 container when using the \"service:method\" notation.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ContainerControllerResolver extends ControllerResolver
{
    protected \$container;

    public function __construct(ContainerInterface \$container, LoggerInterface \$logger = null)
    {
        \$this->container = \$container;

        parent::__construct(\$logger);
    }

    protected function createController(string \$controller)
    {
        if (1 === substr_count(\$controller, ':')) {
            \$controller = str_replace(':', '::', \$controller);
            // TODO deprecate this in 5.1
        }

        return parent::createController(\$controller);
    }

    /**
     * {@inheritdoc}
     */
    protected function instantiateController(string \$class)
    {
        \$class = ltrim(\$class, '\\\\');

        if (\$this->container->has(\$class)) {
            return \$this->container->get(\$class);
        }

        try {
            return parent::instantiateController(\$class);
        } catch (\\Error \$e) {
        }

        \$this->throwExceptionIfControllerWasRemoved(\$class, \$e);

        if (\$e instanceof \\ArgumentCountError) {
            throw new \\InvalidArgumentException(sprintf('Controller \"%s\" has required constructor arguments and does not exist in the container. Did you forget to define the controller as a service?', \$class), 0, \$e);
        }

        throw new \\InvalidArgumentException(sprintf('Controller \"%s\" does neither exist as service nor as class', \$class), 0, \$e);
    }

    private function throwExceptionIfControllerWasRemoved(string \$controller, \\Throwable \$previous)
    {
        if (\$this->container instanceof Container && isset(\$this->container->getRemovedIds()[\$controller])) {
            throw new \\InvalidArgumentException(sprintf('Controller \"%s\" cannot be fetched from the container because it is private. Did you forget to tag the service with \"controller.service_arguments\"?', \$controller), 0, \$previous);
        }
    }
}
", "@app/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\Controller\\ContainerControllerResolver.php");
    }
}
