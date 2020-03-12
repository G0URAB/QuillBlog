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

/* @app/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php */
class __TwigTemplate_2e7c6a228f97071d479d66765d75e7e8091dd36ed1002015acc1d2fd146cb182 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php"));

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

namespace Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentValueResolverInterface;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;

/**
 * Yields a service keyed by _controller and argument name.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class ServiceValueResolver implements ArgumentValueResolverInterface
{
    private \$container;

    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(Request \$request, ArgumentMetadata \$argument): bool
    {
        \$controller = \$request->attributes->get('_controller');

        if (\\is_array(\$controller) && \\is_callable(\$controller, true) && \\is_string(\$controller[0])) {
            \$controller = \$controller[0].'::'.\$controller[1];
        } elseif (!\\is_string(\$controller) || '' === \$controller) {
            return false;
        }

        if ('\\\\' === \$controller[0]) {
            \$controller = ltrim(\$controller, '\\\\');
        }

        if (!\$this->container->has(\$controller) && false !== \$i = strrpos(\$controller, ':')) {
            \$controller = substr(\$controller, 0, \$i).strtolower(substr(\$controller, \$i));
        }

        return \$this->container->has(\$controller) && \$this->container->get(\$controller)->has(\$argument->getName());
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(Request \$request, ArgumentMetadata \$argument): iterable
    {
        if (\\is_array(\$controller = \$request->attributes->get('_controller'))) {
            \$controller = \$controller[0].'::'.\$controller[1];
        }

        if ('\\\\' === \$controller[0]) {
            \$controller = ltrim(\$controller, '\\\\');
        }

        if (!\$this->container->has(\$controller)) {
            \$i = strrpos(\$controller, ':');
            \$controller = substr(\$controller, 0, \$i).strtolower(substr(\$controller, \$i));
        }

        try {
            yield \$this->container->get(\$controller)->get(\$argument->getName());
        } catch (RuntimeException \$e) {
            \$what = sprintf('argument \$%s of \"%s()\"', \$argument->getName(), \$controller);
            \$message = preg_replace('/service \"\\.service_locator\\.[^\"]++\"/', \$what, \$e->getMessage());

            if (\$e->getMessage() === \$message) {
                \$message = sprintf('Cannot resolve %s: %s', \$what, \$message);
            }

            \$r = new \\ReflectionProperty(\$e, 'message');
            \$r->setAccessible(true);
            \$r->setValue(\$e, \$message);

            throw \$e;
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php";
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

namespace Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentValueResolverInterface;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;

/**
 * Yields a service keyed by _controller and argument name.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class ServiceValueResolver implements ArgumentValueResolverInterface
{
    private \$container;

    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(Request \$request, ArgumentMetadata \$argument): bool
    {
        \$controller = \$request->attributes->get('_controller');

        if (\\is_array(\$controller) && \\is_callable(\$controller, true) && \\is_string(\$controller[0])) {
            \$controller = \$controller[0].'::'.\$controller[1];
        } elseif (!\\is_string(\$controller) || '' === \$controller) {
            return false;
        }

        if ('\\\\' === \$controller[0]) {
            \$controller = ltrim(\$controller, '\\\\');
        }

        if (!\$this->container->has(\$controller) && false !== \$i = strrpos(\$controller, ':')) {
            \$controller = substr(\$controller, 0, \$i).strtolower(substr(\$controller, \$i));
        }

        return \$this->container->has(\$controller) && \$this->container->get(\$controller)->has(\$argument->getName());
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(Request \$request, ArgumentMetadata \$argument): iterable
    {
        if (\\is_array(\$controller = \$request->attributes->get('_controller'))) {
            \$controller = \$controller[0].'::'.\$controller[1];
        }

        if ('\\\\' === \$controller[0]) {
            \$controller = ltrim(\$controller, '\\\\');
        }

        if (!\$this->container->has(\$controller)) {
            \$i = strrpos(\$controller, ':');
            \$controller = substr(\$controller, 0, \$i).strtolower(substr(\$controller, \$i));
        }

        try {
            yield \$this->container->get(\$controller)->get(\$argument->getName());
        } catch (RuntimeException \$e) {
            \$what = sprintf('argument \$%s of \"%s()\"', \$argument->getName(), \$controller);
            \$message = preg_replace('/service \"\\.service_locator\\.[^\"]++\"/', \$what, \$e->getMessage());

            if (\$e->getMessage() === \$message) {
                \$message = sprintf('Cannot resolve %s: %s', \$what, \$message);
            }

            \$r = new \\ReflectionProperty(\$e, 'message');
            \$r->setAccessible(true);
            \$r->setValue(\$e, \$message);

            throw \$e;
        }
    }
}
", "@app/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\ServiceValueResolver.php");
    }
}
