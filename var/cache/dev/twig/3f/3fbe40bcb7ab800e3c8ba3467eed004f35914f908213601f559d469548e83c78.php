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

/* @app/vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/EntityListenerPass.php */
class __TwigTemplate_00c451e3399a30505647a41716f365994854a845020ebd9dd68fc38bf499e6e2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/EntityListenerPass.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler;

use Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver;
use Doctrine\\Bundle\\DoctrineBundle\\Mapping\\EntityListenerServiceResolver;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Class for Symfony bundles to register entity listeners
 */
class EntityListenerPass implements CompilerPassInterface
{
    /**
     * {@inheritDoc}
     */
    public function process(ContainerBuilder \$container)
    {
        \$resolvers = \$container->findTaggedServiceIds('doctrine.orm.entity_listener');

        \$lazyServiceReferencesByResolver = [];

        foreach (\$resolvers as \$id => \$tagAttributes) {
            foreach (\$tagAttributes as \$attributes) {
                \$name          = isset(\$attributes['entity_manager']) ? \$attributes['entity_manager'] : \$container->getParameter('doctrine.default_entity_manager');
                \$entityManager = sprintf('doctrine.orm.%s_entity_manager', \$name);

                if (! \$container->hasDefinition(\$entityManager)) {
                    continue;
                }

                \$resolverId = sprintf('doctrine.orm.%s_entity_listener_resolver', \$name);

                if (! \$container->has(\$resolverId)) {
                    continue;
                }

                \$resolver = \$container->findDefinition(\$resolverId);
                \$resolver->setPublic(true);

                if (isset(\$attributes['entity']) && isset(\$attributes['event'])) {
                    \$this->attachToListener(\$container, \$name, \$this->getConcreteDefinitionClass(\$container->findDefinition(\$id), \$container, \$id), \$attributes);
                }

                \$resolverClass                 = \$this->getResolverClass(\$resolver, \$container, \$resolverId);
                \$resolverSupportsLazyListeners = is_a(\$resolverClass, EntityListenerServiceResolver::class, true);

                \$lazyByAttribute = isset(\$attributes['lazy']) && \$attributes['lazy'];
                if (\$lazyByAttribute && ! \$resolverSupportsLazyListeners) {
                    throw new InvalidArgumentException(sprintf(
                        'Lazy-loaded entity listeners can only be resolved by a resolver implementing %s.',
                        EntityListenerServiceResolver::class
                    ));
                }

                if (! isset(\$attributes['lazy']) && \$resolverSupportsLazyListeners || \$lazyByAttribute) {
                    \$listener = \$container->findDefinition(\$id);

                    if (\$listener->isAbstract()) {
                        throw new InvalidArgumentException(sprintf('The service \"%s\" must not be abstract as this entity listener is lazy-loaded.', \$id));
                    }

                    \$resolver->addMethodCall('registerService', [\$this->getConcreteDefinitionClass(\$listener, \$container, \$id), \$id]);

                    // if the resolver uses the default class we will use a service locator for all listeners
                    if (\$resolverClass === ContainerEntityListenerResolver::class) {
                        if (! isset(\$lazyServiceReferencesByResolver[\$resolverId])) {
                            \$lazyServiceReferencesByResolver[\$resolverId] = [];
                        }
                        \$lazyServiceReferencesByResolver[\$resolverId][\$id] = new Reference(\$id);
                    } else {
                        \$listener->setPublic(true);
                    }
                } else {
                    \$resolver->addMethodCall('register', [new Reference(\$id)]);
                }
            }
        }

        foreach (\$lazyServiceReferencesByResolver as \$resolverId => \$listenerReferences) {
            \$container->findDefinition(\$resolverId)->setArgument(0, ServiceLocatorTagPass::register(\$container, \$listenerReferences));
        }
    }

    private function attachToListener(ContainerBuilder \$container, string \$name, string \$class, array \$attributes) : void
    {
        \$listenerId = sprintf('doctrine.orm.%s_listeners.attach_entity_listeners', \$name);

        if (! \$container->has(\$listenerId)) {
            return;
        }

        \$args = [
            \$attributes['entity'],
            \$class,
            \$attributes['event'],
        ];

        if (isset(\$attributes['method'])) {
            \$args[] = \$attributes['method'];
        } elseif (! method_exists(\$class, \$attributes['event']) && method_exists(\$class, '__invoke')) {
            \$args[] = '__invoke';
        }

        \$container->findDefinition(\$listenerId)->addMethodCall('addEntityListener', \$args);
    }

    private function getResolverClass(Definition \$resolver, ContainerBuilder \$container, string \$id) : string
    {
        \$resolverClass = \$this->getConcreteDefinitionClass(\$resolver, \$container, \$id);

        if (substr(\$resolverClass, 0, 1) === '%') {
            // resolve container parameter first
            \$resolverClass = \$container->getParameterBag()->resolveValue(\$resolverClass);
        }

        return \$resolverClass;
    }

    private function getConcreteDefinitionClass(Definition \$definition, ContainerBuilder \$container, string \$id) : string
    {
        \$class = \$definition->getClass();
        if (\$class) {
            return \$class;
        }

        while (\$definition instanceof ChildDefinition) {
            \$definition = \$container->findDefinition(\$definition->getParent());

            \$class = \$definition->getClass();
            if (\$class) {
                return \$class;
            }
        }

        throw new InvalidArgumentException(sprintf('The service \"%s\" must define its class.', \$id));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/EntityListenerPass.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler;

use Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver;
use Doctrine\\Bundle\\DoctrineBundle\\Mapping\\EntityListenerServiceResolver;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Class for Symfony bundles to register entity listeners
 */
class EntityListenerPass implements CompilerPassInterface
{
    /**
     * {@inheritDoc}
     */
    public function process(ContainerBuilder \$container)
    {
        \$resolvers = \$container->findTaggedServiceIds('doctrine.orm.entity_listener');

        \$lazyServiceReferencesByResolver = [];

        foreach (\$resolvers as \$id => \$tagAttributes) {
            foreach (\$tagAttributes as \$attributes) {
                \$name          = isset(\$attributes['entity_manager']) ? \$attributes['entity_manager'] : \$container->getParameter('doctrine.default_entity_manager');
                \$entityManager = sprintf('doctrine.orm.%s_entity_manager', \$name);

                if (! \$container->hasDefinition(\$entityManager)) {
                    continue;
                }

                \$resolverId = sprintf('doctrine.orm.%s_entity_listener_resolver', \$name);

                if (! \$container->has(\$resolverId)) {
                    continue;
                }

                \$resolver = \$container->findDefinition(\$resolverId);
                \$resolver->setPublic(true);

                if (isset(\$attributes['entity']) && isset(\$attributes['event'])) {
                    \$this->attachToListener(\$container, \$name, \$this->getConcreteDefinitionClass(\$container->findDefinition(\$id), \$container, \$id), \$attributes);
                }

                \$resolverClass                 = \$this->getResolverClass(\$resolver, \$container, \$resolverId);
                \$resolverSupportsLazyListeners = is_a(\$resolverClass, EntityListenerServiceResolver::class, true);

                \$lazyByAttribute = isset(\$attributes['lazy']) && \$attributes['lazy'];
                if (\$lazyByAttribute && ! \$resolverSupportsLazyListeners) {
                    throw new InvalidArgumentException(sprintf(
                        'Lazy-loaded entity listeners can only be resolved by a resolver implementing %s.',
                        EntityListenerServiceResolver::class
                    ));
                }

                if (! isset(\$attributes['lazy']) && \$resolverSupportsLazyListeners || \$lazyByAttribute) {
                    \$listener = \$container->findDefinition(\$id);

                    if (\$listener->isAbstract()) {
                        throw new InvalidArgumentException(sprintf('The service \"%s\" must not be abstract as this entity listener is lazy-loaded.', \$id));
                    }

                    \$resolver->addMethodCall('registerService', [\$this->getConcreteDefinitionClass(\$listener, \$container, \$id), \$id]);

                    // if the resolver uses the default class we will use a service locator for all listeners
                    if (\$resolverClass === ContainerEntityListenerResolver::class) {
                        if (! isset(\$lazyServiceReferencesByResolver[\$resolverId])) {
                            \$lazyServiceReferencesByResolver[\$resolverId] = [];
                        }
                        \$lazyServiceReferencesByResolver[\$resolverId][\$id] = new Reference(\$id);
                    } else {
                        \$listener->setPublic(true);
                    }
                } else {
                    \$resolver->addMethodCall('register', [new Reference(\$id)]);
                }
            }
        }

        foreach (\$lazyServiceReferencesByResolver as \$resolverId => \$listenerReferences) {
            \$container->findDefinition(\$resolverId)->setArgument(0, ServiceLocatorTagPass::register(\$container, \$listenerReferences));
        }
    }

    private function attachToListener(ContainerBuilder \$container, string \$name, string \$class, array \$attributes) : void
    {
        \$listenerId = sprintf('doctrine.orm.%s_listeners.attach_entity_listeners', \$name);

        if (! \$container->has(\$listenerId)) {
            return;
        }

        \$args = [
            \$attributes['entity'],
            \$class,
            \$attributes['event'],
        ];

        if (isset(\$attributes['method'])) {
            \$args[] = \$attributes['method'];
        } elseif (! method_exists(\$class, \$attributes['event']) && method_exists(\$class, '__invoke')) {
            \$args[] = '__invoke';
        }

        \$container->findDefinition(\$listenerId)->addMethodCall('addEntityListener', \$args);
    }

    private function getResolverClass(Definition \$resolver, ContainerBuilder \$container, string \$id) : string
    {
        \$resolverClass = \$this->getConcreteDefinitionClass(\$resolver, \$container, \$id);

        if (substr(\$resolverClass, 0, 1) === '%') {
            // resolve container parameter first
            \$resolverClass = \$container->getParameterBag()->resolveValue(\$resolverClass);
        }

        return \$resolverClass;
    }

    private function getConcreteDefinitionClass(Definition \$definition, ContainerBuilder \$container, string \$id) : string
    {
        \$class = \$definition->getClass();
        if (\$class) {
            return \$class;
        }

        while (\$definition instanceof ChildDefinition) {
            \$definition = \$container->findDefinition(\$definition->getParent());

            \$class = \$definition->getClass();
            if (\$class) {
                return \$class;
            }
        }

        throw new InvalidArgumentException(sprintf('The service \"%s\" must define its class.', \$id));
    }
}
", "@app/vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/EntityListenerPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\DependencyInjection\\Compiler\\EntityListenerPass.php");
    }
}
