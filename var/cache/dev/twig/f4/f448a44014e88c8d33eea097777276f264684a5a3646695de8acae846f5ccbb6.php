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

/* @app/vendor/symfony/http-kernel/DependencyInjection/ControllerArgumentValueResolverPass.php */
class __TwigTemplate_ac744d5752266afdebc2d1fff1af3c5f6e2b889f2fd47539c28bc4053fb3d64d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/DependencyInjection/ControllerArgumentValueResolverPass.php"));

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

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\PriorityTaggedServiceTrait;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver;
use Symfony\\Component\\Stopwatch\\Stopwatch;

/**
 * Gathers and configures the argument value resolvers.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
class ControllerArgumentValueResolverPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    private \$argumentResolverService;
    private \$argumentValueResolverTag;
    private \$traceableResolverStopwatch;

    public function __construct(string \$argumentResolverService = 'argument_resolver', string \$argumentValueResolverTag = 'controller.argument_value_resolver', string \$traceableResolverStopwatch = 'debug.stopwatch')
    {
        \$this->argumentResolverService = \$argumentResolverService;
        \$this->argumentValueResolverTag = \$argumentValueResolverTag;
        \$this->traceableResolverStopwatch = \$traceableResolverStopwatch;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->argumentResolverService)) {
            return;
        }

        \$resolvers = \$this->findAndSortTaggedServices(\$this->argumentValueResolverTag, \$container);

        if (\$container->getParameter('kernel.debug') && class_exists(Stopwatch::class) && \$container->has(\$this->traceableResolverStopwatch)) {
            foreach (\$resolvers as \$resolverReference) {
                \$id = (string) \$resolverReference;
                \$container->register(\"debug.\$id\", TraceableValueResolver::class)
                    ->setDecoratedService(\$id)
                    ->setArguments([new Reference(\"debug.\$id.inner\"), new Reference(\$this->traceableResolverStopwatch)]);
            }
        }

        \$container
            ->getDefinition(\$this->argumentResolverService)
            ->replaceArgument(1, new IteratorArgument(\$resolvers))
        ;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/DependencyInjection/ControllerArgumentValueResolverPass.php";
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

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\PriorityTaggedServiceTrait;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\TraceableValueResolver;
use Symfony\\Component\\Stopwatch\\Stopwatch;

/**
 * Gathers and configures the argument value resolvers.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
class ControllerArgumentValueResolverPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    private \$argumentResolverService;
    private \$argumentValueResolverTag;
    private \$traceableResolverStopwatch;

    public function __construct(string \$argumentResolverService = 'argument_resolver', string \$argumentValueResolverTag = 'controller.argument_value_resolver', string \$traceableResolverStopwatch = 'debug.stopwatch')
    {
        \$this->argumentResolverService = \$argumentResolverService;
        \$this->argumentValueResolverTag = \$argumentValueResolverTag;
        \$this->traceableResolverStopwatch = \$traceableResolverStopwatch;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->argumentResolverService)) {
            return;
        }

        \$resolvers = \$this->findAndSortTaggedServices(\$this->argumentValueResolverTag, \$container);

        if (\$container->getParameter('kernel.debug') && class_exists(Stopwatch::class) && \$container->has(\$this->traceableResolverStopwatch)) {
            foreach (\$resolvers as \$resolverReference) {
                \$id = (string) \$resolverReference;
                \$container->register(\"debug.\$id\", TraceableValueResolver::class)
                    ->setDecoratedService(\$id)
                    ->setArguments([new Reference(\"debug.\$id.inner\"), new Reference(\$this->traceableResolverStopwatch)]);
            }
        }

        \$container
            ->getDefinition(\$this->argumentResolverService)
            ->replaceArgument(1, new IteratorArgument(\$resolvers))
        ;
    }
}
", "@app/vendor/symfony/http-kernel/DependencyInjection/ControllerArgumentValueResolverPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\DependencyInjection\\ControllerArgumentValueResolverPass.php");
    }
}
