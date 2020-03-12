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

/* @app/vendor/symfony/cache/DependencyInjection/CachePoolPrunerPass.php */
class __TwigTemplate_9ff29e53fe851e3334668c8a12c39b843562644b3bc97716580fce6de64a9352 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/cache/DependencyInjection/CachePoolPrunerPass.php"));

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

namespace Symfony\\Component\\Cache\\DependencyInjection;

use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Rob Frawley 2nd <rmf@src.run>
 */
class CachePoolPrunerPass implements CompilerPassInterface
{
    private \$cacheCommandServiceId;
    private \$cachePoolTag;

    public function __construct(string \$cacheCommandServiceId = 'console.command.cache_pool_prune', string \$cachePoolTag = 'cache.pool')
    {
        \$this->cacheCommandServiceId = \$cacheCommandServiceId;
        \$this->cachePoolTag = \$cachePoolTag;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->cacheCommandServiceId)) {
            return;
        }

        \$services = [];

        foreach (\$container->findTaggedServiceIds(\$this->cachePoolTag) as \$id => \$tags) {
            \$class = \$container->getParameterBag()->resolveValue(\$container->getDefinition(\$id)->getClass());

            if (!\$reflection = \$container->getReflectionClass(\$class)) {
                throw new InvalidArgumentException(sprintf('Class \"%s\" used for service \"%s\" cannot be found.', \$class, \$id));
            }

            if (\$reflection->implementsInterface(PruneableInterface::class)) {
                \$services[\$id] = new Reference(\$id);
            }
        }

        \$container->getDefinition(\$this->cacheCommandServiceId)->replaceArgument(0, new IteratorArgument(\$services));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/cache/DependencyInjection/CachePoolPrunerPass.php";
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

namespace Symfony\\Component\\Cache\\DependencyInjection;

use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Rob Frawley 2nd <rmf@src.run>
 */
class CachePoolPrunerPass implements CompilerPassInterface
{
    private \$cacheCommandServiceId;
    private \$cachePoolTag;

    public function __construct(string \$cacheCommandServiceId = 'console.command.cache_pool_prune', string \$cachePoolTag = 'cache.pool')
    {
        \$this->cacheCommandServiceId = \$cacheCommandServiceId;
        \$this->cachePoolTag = \$cachePoolTag;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->cacheCommandServiceId)) {
            return;
        }

        \$services = [];

        foreach (\$container->findTaggedServiceIds(\$this->cachePoolTag) as \$id => \$tags) {
            \$class = \$container->getParameterBag()->resolveValue(\$container->getDefinition(\$id)->getClass());

            if (!\$reflection = \$container->getReflectionClass(\$class)) {
                throw new InvalidArgumentException(sprintf('Class \"%s\" used for service \"%s\" cannot be found.', \$class, \$id));
            }

            if (\$reflection->implementsInterface(PruneableInterface::class)) {
                \$services[\$id] = new Reference(\$id);
            }
        }

        \$container->getDefinition(\$this->cacheCommandServiceId)->replaceArgument(0, new IteratorArgument(\$services));
    }
}
", "@app/vendor/symfony/cache/DependencyInjection/CachePoolPrunerPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\cache\\DependencyInjection\\CachePoolPrunerPass.php");
    }
}
