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

/* @app/vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php */
class __TwigTemplate_90e68024d42247486eb65c7aea166fcda8925eab43fb6274ffa8c2889f29455a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Kernel;

use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Routing\\RouteCollectionBuilder;

/**
 * A Kernel that provides configuration hooks.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 * @author Fabien Potencier <fabien@symfony.com>
 */
trait MicroKernelTrait
{
    /**
     * Add or import routes into your application.
     *
     *     \$routes->import('config/routing.yml');
     *     \$routes->add('/admin', 'App\\Controller\\AdminController::dashboard', 'admin_dashboard');
     */
    abstract protected function configureRoutes(RouteCollectionBuilder \$routes);

    /**
     * Configures the container.
     *
     * You can register extensions:
     *
     *     \$c->loadFromExtension('framework', [
     *         'secret' => '%secret%'
     *     ]);
     *
     * Or services:
     *
     *     \$c->register('halloween', 'FooBundle\\HalloweenProvider');
     *
     * Or parameters:
     *
     *     \$c->setParameter('halloween', 'lot of fun');
     */
    abstract protected function configureContainer(ContainerBuilder \$c, LoaderInterface \$loader);

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface \$loader)
    {
        \$loader->load(function (ContainerBuilder \$container) use (\$loader) {
            \$container->loadFromExtension('framework', [
                'router' => [
                    'resource' => 'kernel::loadRoutes',
                    'type' => 'service',
                ],
            ]);

            if (!\$container->hasDefinition('kernel')) {
                \$container->register('kernel', static::class)
                    ->setSynthetic(true)
                    ->setPublic(true)
                ;
            }

            \$kernelDefinition = \$container->getDefinition('kernel');
            \$kernelDefinition->addTag('routing.route_loader');

            if (\$this instanceof EventSubscriberInterface) {
                \$kernelDefinition->addTag('kernel.event_subscriber');
            }

            \$this->configureContainer(\$container, \$loader);

            \$container->addObjectResource(\$this);
        });
    }

    /**
     * @internal
     */
    public function loadRoutes(LoaderInterface \$loader)
    {
        \$routes = new RouteCollectionBuilder(\$loader);
        \$this->configureRoutes(\$routes);

        return \$routes->build();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Kernel;

use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Routing\\RouteCollectionBuilder;

/**
 * A Kernel that provides configuration hooks.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 * @author Fabien Potencier <fabien@symfony.com>
 */
trait MicroKernelTrait
{
    /**
     * Add or import routes into your application.
     *
     *     \$routes->import('config/routing.yml');
     *     \$routes->add('/admin', 'App\\Controller\\AdminController::dashboard', 'admin_dashboard');
     */
    abstract protected function configureRoutes(RouteCollectionBuilder \$routes);

    /**
     * Configures the container.
     *
     * You can register extensions:
     *
     *     \$c->loadFromExtension('framework', [
     *         'secret' => '%secret%'
     *     ]);
     *
     * Or services:
     *
     *     \$c->register('halloween', 'FooBundle\\HalloweenProvider');
     *
     * Or parameters:
     *
     *     \$c->setParameter('halloween', 'lot of fun');
     */
    abstract protected function configureContainer(ContainerBuilder \$c, LoaderInterface \$loader);

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface \$loader)
    {
        \$loader->load(function (ContainerBuilder \$container) use (\$loader) {
            \$container->loadFromExtension('framework', [
                'router' => [
                    'resource' => 'kernel::loadRoutes',
                    'type' => 'service',
                ],
            ]);

            if (!\$container->hasDefinition('kernel')) {
                \$container->register('kernel', static::class)
                    ->setSynthetic(true)
                    ->setPublic(true)
                ;
            }

            \$kernelDefinition = \$container->getDefinition('kernel');
            \$kernelDefinition->addTag('routing.route_loader');

            if (\$this instanceof EventSubscriberInterface) {
                \$kernelDefinition->addTag('kernel.event_subscriber');
            }

            \$this->configureContainer(\$container, \$loader);

            \$container->addObjectResource(\$this);
        });
    }

    /**
     * @internal
     */
    public function loadRoutes(LoaderInterface \$loader)
    {
        \$routes = new RouteCollectionBuilder(\$loader);
        \$this->configureRoutes(\$routes);

        return \$routes->build();
    }
}
", "@app/vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Kernel\\MicroKernelTrait.php");
    }
}
