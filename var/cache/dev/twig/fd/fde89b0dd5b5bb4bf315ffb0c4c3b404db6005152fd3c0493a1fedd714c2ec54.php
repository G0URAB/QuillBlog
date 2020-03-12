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

/* @app/vendor/symfony/routing/DependencyInjection/RoutingResolverPass.php */
class __TwigTemplate_96d2270598c98fdf554b31ac83b086672bac3198bf51f7d8c4b69bfda4d884dc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/routing/DependencyInjection/RoutingResolverPass.php"));

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

namespace Symfony\\Component\\Routing\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\PriorityTaggedServiceTrait;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Adds tagged routing.loader services to routing.resolver service.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RoutingResolverPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    private \$resolverServiceId;
    private \$loaderTag;

    public function __construct(string \$resolverServiceId = 'routing.resolver', string \$loaderTag = 'routing.loader')
    {
        \$this->resolverServiceId = \$resolverServiceId;
        \$this->loaderTag = \$loaderTag;
    }

    public function process(ContainerBuilder \$container)
    {
        if (false === \$container->hasDefinition(\$this->resolverServiceId)) {
            return;
        }

        \$definition = \$container->getDefinition(\$this->resolverServiceId);

        foreach (\$this->findAndSortTaggedServices(\$this->loaderTag, \$container) as \$id) {
            \$definition->addMethodCall('addLoader', [new Reference(\$id)]);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/routing/DependencyInjection/RoutingResolverPass.php";
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

namespace Symfony\\Component\\Routing\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\PriorityTaggedServiceTrait;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Adds tagged routing.loader services to routing.resolver service.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RoutingResolverPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    private \$resolverServiceId;
    private \$loaderTag;

    public function __construct(string \$resolverServiceId = 'routing.resolver', string \$loaderTag = 'routing.loader')
    {
        \$this->resolverServiceId = \$resolverServiceId;
        \$this->loaderTag = \$loaderTag;
    }

    public function process(ContainerBuilder \$container)
    {
        if (false === \$container->hasDefinition(\$this->resolverServiceId)) {
            return;
        }

        \$definition = \$container->getDefinition(\$this->resolverServiceId);

        foreach (\$this->findAndSortTaggedServices(\$this->loaderTag, \$container) as \$id) {
            \$definition->addMethodCall('addLoader', [new Reference(\$id)]);
        }
    }
}
", "@app/vendor/symfony/routing/DependencyInjection/RoutingResolverPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\routing\\DependencyInjection\\RoutingResolverPass.php");
    }
}
