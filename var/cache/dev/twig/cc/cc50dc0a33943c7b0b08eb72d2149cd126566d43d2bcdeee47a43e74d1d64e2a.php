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

/* @app/vendor/symfony/console/DependencyInjection/AddConsoleCommandPass.php */
class __TwigTemplate_05e2bcfeae7aa07f5809fe60877b0117e2dc9eec46b65683332a85bd591ffeeb extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/console/DependencyInjection/AddConsoleCommandPass.php"));

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

namespace Symfony\\Component\\Console\\DependencyInjection;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\CommandLoader\\ContainerCommandLoader;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\TypedReference;

/**
 * Registers console commands.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class AddConsoleCommandPass implements CompilerPassInterface
{
    private \$commandLoaderServiceId;
    private \$commandTag;

    public function __construct(string \$commandLoaderServiceId = 'console.command_loader', string \$commandTag = 'console.command')
    {
        \$this->commandLoaderServiceId = \$commandLoaderServiceId;
        \$this->commandTag = \$commandTag;
    }

    public function process(ContainerBuilder \$container)
    {
        \$commandServices = \$container->findTaggedServiceIds(\$this->commandTag, true);
        \$lazyCommandMap = [];
        \$lazyCommandRefs = [];
        \$serviceIds = [];

        foreach (\$commandServices as \$id => \$tags) {
            \$definition = \$container->getDefinition(\$id);
            \$class = \$container->getParameterBag()->resolveValue(\$definition->getClass());

            if (isset(\$tags[0]['command'])) {
                \$commandName = \$tags[0]['command'];
            } else {
                if (!\$r = \$container->getReflectionClass(\$class)) {
                    throw new InvalidArgumentException(sprintf('Class \"%s\" used for service \"%s\" cannot be found.', \$class, \$id));
                }
                if (!\$r->isSubclassOf(Command::class)) {
                    throw new InvalidArgumentException(sprintf('The service \"%s\" tagged \"%s\" must be a subclass of \"%s\".', \$id, \$this->commandTag, Command::class));
                }
                \$commandName = \$class::getDefaultName();
            }

            if (null === \$commandName) {
                if (!\$definition->isPublic() || \$definition->isPrivate()) {
                    \$commandId = 'console.command.public_alias.'.\$id;
                    \$container->setAlias(\$commandId, \$id)->setPublic(true);
                    \$id = \$commandId;
                }
                \$serviceIds[] = \$id;

                continue;
            }

            unset(\$tags[0]);
            \$lazyCommandMap[\$commandName] = \$id;
            \$lazyCommandRefs[\$id] = new TypedReference(\$id, \$class);
            \$aliases = [];

            foreach (\$tags as \$tag) {
                if (isset(\$tag['command'])) {
                    \$aliases[] = \$tag['command'];
                    \$lazyCommandMap[\$tag['command']] = \$id;
                }
            }

            \$definition->addMethodCall('setName', [\$commandName]);

            if (\$aliases) {
                \$definition->addMethodCall('setAliases', [\$aliases]);
            }
        }

        \$container
            ->register(\$this->commandLoaderServiceId, ContainerCommandLoader::class)
            ->setPublic(true)
            ->setArguments([ServiceLocatorTagPass::register(\$container, \$lazyCommandRefs), \$lazyCommandMap]);

        \$container->setParameter('console.command.ids', \$serviceIds);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/console/DependencyInjection/AddConsoleCommandPass.php";
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

namespace Symfony\\Component\\Console\\DependencyInjection;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\CommandLoader\\ContainerCommandLoader;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\ServiceLocatorTagPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\TypedReference;

/**
 * Registers console commands.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class AddConsoleCommandPass implements CompilerPassInterface
{
    private \$commandLoaderServiceId;
    private \$commandTag;

    public function __construct(string \$commandLoaderServiceId = 'console.command_loader', string \$commandTag = 'console.command')
    {
        \$this->commandLoaderServiceId = \$commandLoaderServiceId;
        \$this->commandTag = \$commandTag;
    }

    public function process(ContainerBuilder \$container)
    {
        \$commandServices = \$container->findTaggedServiceIds(\$this->commandTag, true);
        \$lazyCommandMap = [];
        \$lazyCommandRefs = [];
        \$serviceIds = [];

        foreach (\$commandServices as \$id => \$tags) {
            \$definition = \$container->getDefinition(\$id);
            \$class = \$container->getParameterBag()->resolveValue(\$definition->getClass());

            if (isset(\$tags[0]['command'])) {
                \$commandName = \$tags[0]['command'];
            } else {
                if (!\$r = \$container->getReflectionClass(\$class)) {
                    throw new InvalidArgumentException(sprintf('Class \"%s\" used for service \"%s\" cannot be found.', \$class, \$id));
                }
                if (!\$r->isSubclassOf(Command::class)) {
                    throw new InvalidArgumentException(sprintf('The service \"%s\" tagged \"%s\" must be a subclass of \"%s\".', \$id, \$this->commandTag, Command::class));
                }
                \$commandName = \$class::getDefaultName();
            }

            if (null === \$commandName) {
                if (!\$definition->isPublic() || \$definition->isPrivate()) {
                    \$commandId = 'console.command.public_alias.'.\$id;
                    \$container->setAlias(\$commandId, \$id)->setPublic(true);
                    \$id = \$commandId;
                }
                \$serviceIds[] = \$id;

                continue;
            }

            unset(\$tags[0]);
            \$lazyCommandMap[\$commandName] = \$id;
            \$lazyCommandRefs[\$id] = new TypedReference(\$id, \$class);
            \$aliases = [];

            foreach (\$tags as \$tag) {
                if (isset(\$tag['command'])) {
                    \$aliases[] = \$tag['command'];
                    \$lazyCommandMap[\$tag['command']] = \$id;
                }
            }

            \$definition->addMethodCall('setName', [\$commandName]);

            if (\$aliases) {
                \$definition->addMethodCall('setAliases', [\$aliases]);
            }
        }

        \$container
            ->register(\$this->commandLoaderServiceId, ContainerCommandLoader::class)
            ->setPublic(true)
            ->setArguments([ServiceLocatorTagPass::register(\$container, \$lazyCommandRefs), \$lazyCommandMap]);

        \$container->setParameter('console.command.ids', \$serviceIds);
    }
}
", "@app/vendor/symfony/console/DependencyInjection/AddConsoleCommandPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\console\\DependencyInjection\\AddConsoleCommandPass.php");
    }
}
