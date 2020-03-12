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

/* @app/vendor/symfony/http-kernel/DependencyInjection/FragmentRendererPass.php */
class __TwigTemplate_f5d166609d72c8bceac9c055fa4ab30c8cb8fad4f57bdad2ab9829c7063ca8b7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/DependencyInjection/FragmentRendererPass.php"));

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

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\HttpKernel\\Fragment\\FragmentRendererInterface;

/**
 * Adds services tagged kernel.fragment_renderer as HTTP content rendering strategies.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FragmentRendererPass implements CompilerPassInterface
{
    private \$handlerService;
    private \$rendererTag;

    public function __construct(string \$handlerService = 'fragment.handler', string \$rendererTag = 'kernel.fragment_renderer')
    {
        \$this->handlerService = \$handlerService;
        \$this->rendererTag = \$rendererTag;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->handlerService)) {
            return;
        }

        \$definition = \$container->getDefinition(\$this->handlerService);
        \$renderers = [];
        foreach (\$container->findTaggedServiceIds(\$this->rendererTag, true) as \$id => \$tags) {
            \$def = \$container->getDefinition(\$id);
            \$class = \$container->getParameterBag()->resolveValue(\$def->getClass());

            if (!\$r = \$container->getReflectionClass(\$class)) {
                throw new InvalidArgumentException(sprintf('Class \"%s\" used for service \"%s\" cannot be found.', \$class, \$id));
            }
            if (!\$r->isSubclassOf(FragmentRendererInterface::class)) {
                throw new InvalidArgumentException(sprintf('Service \"%s\" must implement interface \"%s\".', \$id, FragmentRendererInterface::class));
            }

            foreach (\$tags as \$tag) {
                \$renderers[\$tag['alias']] = new Reference(\$id);
            }
        }

        \$definition->replaceArgument(0, ServiceLocatorTagPass::register(\$container, \$renderers));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/DependencyInjection/FragmentRendererPass.php";
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

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Component\\HttpKernel\\Fragment\\FragmentRendererInterface;

/**
 * Adds services tagged kernel.fragment_renderer as HTTP content rendering strategies.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FragmentRendererPass implements CompilerPassInterface
{
    private \$handlerService;
    private \$rendererTag;

    public function __construct(string \$handlerService = 'fragment.handler', string \$rendererTag = 'kernel.fragment_renderer')
    {
        \$this->handlerService = \$handlerService;
        \$this->rendererTag = \$rendererTag;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->handlerService)) {
            return;
        }

        \$definition = \$container->getDefinition(\$this->handlerService);
        \$renderers = [];
        foreach (\$container->findTaggedServiceIds(\$this->rendererTag, true) as \$id => \$tags) {
            \$def = \$container->getDefinition(\$id);
            \$class = \$container->getParameterBag()->resolveValue(\$def->getClass());

            if (!\$r = \$container->getReflectionClass(\$class)) {
                throw new InvalidArgumentException(sprintf('Class \"%s\" used for service \"%s\" cannot be found.', \$class, \$id));
            }
            if (!\$r->isSubclassOf(FragmentRendererInterface::class)) {
                throw new InvalidArgumentException(sprintf('Service \"%s\" must implement interface \"%s\".', \$id, FragmentRendererInterface::class));
            }

            foreach (\$tags as \$tag) {
                \$renderers[\$tag['alias']] = new Reference(\$id);
            }
        }

        \$definition->replaceArgument(0, ServiceLocatorTagPass::register(\$container, \$renderers));
    }
}
", "@app/vendor/symfony/http-kernel/DependencyInjection/FragmentRendererPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\DependencyInjection\\FragmentRendererPass.php");
    }
}
