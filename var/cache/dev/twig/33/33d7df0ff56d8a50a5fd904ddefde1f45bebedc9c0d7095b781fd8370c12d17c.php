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

/* @app/vendor/symfony/dependency-injection/Compiler/DecoratorServicePass.php */
class __TwigTemplate_d366e850f16c06444a680c1db09d554628d6307281fba5d55268b47cd19bcea9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Compiler/DecoratorServicePass.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Overwrites a service but keeps the overridden one.
 *
 * @author Christophe Coevoet <stof@notk.org>
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Diego Saint Esteben <diego@saintesteben.me>
 */
class DecoratorServicePass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        \$definitions = new \\SplPriorityQueue();
        \$order = PHP_INT_MAX;

        foreach (\$container->getDefinitions() as \$id => \$definition) {
            if (!\$decorated = \$definition->getDecoratedService()) {
                continue;
            }
            \$definitions->insert([\$id, \$definition], [\$decorated[2], --\$order]);
        }
        \$decoratingDefinitions = [];

        foreach (\$definitions as list(\$id, \$definition)) {
            \$decoratedService = \$definition->getDecoratedService();
            list(\$inner, \$renamedId) = \$decoratedService;
            \$invalidBehavior = \$decoratedService[3] ?? ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE;

            \$definition->setDecoratedService(null);

            if (!\$renamedId) {
                \$renamedId = \$id.'.inner';
            }
            \$definition->innerServiceId = \$renamedId;
            \$definition->decorationOnInvalid = \$invalidBehavior;

            // we create a new alias/service for the service we are replacing
            // to be able to reference it in the new one
            if (\$container->hasAlias(\$inner)) {
                \$alias = \$container->getAlias(\$inner);
                \$public = \$alias->isPublic();
                \$private = \$alias->isPrivate();
                \$container->setAlias(\$renamedId, new Alias((string) \$alias, false));
            } elseif (\$container->hasDefinition(\$inner)) {
                \$decoratedDefinition = \$container->getDefinition(\$inner);
                \$public = \$decoratedDefinition->isPublic();
                \$private = \$decoratedDefinition->isPrivate();
                \$decoratedDefinition->setPublic(false);
                \$container->setDefinition(\$renamedId, \$decoratedDefinition);
                \$decoratingDefinitions[\$inner] = \$decoratedDefinition;
            } elseif (ContainerInterface::IGNORE_ON_INVALID_REFERENCE === \$invalidBehavior) {
                \$container->removeDefinition(\$id);
                continue;
            } elseif (ContainerInterface::NULL_ON_INVALID_REFERENCE === \$invalidBehavior) {
                \$public = \$definition->isPublic();
                \$private = \$definition->isPrivate();
            } else {
                throw new ServiceNotFoundException(\$inner, \$id);
            }

            if (isset(\$decoratingDefinitions[\$inner])) {
                \$decoratingDefinition = \$decoratingDefinitions[\$inner];

                \$decoratingTags = \$decoratingDefinition->getTags();
                \$resetTags = [];

                if (isset(\$decoratingTags['container.service_locator'])) {
                    // container.service_locator has special logic and it must not be transferred out to decorators
                    \$resetTags = ['container.service_locator' => \$decoratingTags['container.service_locator']];
                    unset(\$decoratingTags['container.service_locator']);
                }

                \$definition->setTags(array_merge(\$decoratingTags, \$definition->getTags()));
                \$decoratingDefinition->setTags(\$resetTags);
                \$decoratingDefinitions[\$inner] = \$definition;
            }

            \$container->setAlias(\$inner, \$id)->setPublic(\$public)->setPrivate(\$private);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Compiler/DecoratorServicePass.php";
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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Overwrites a service but keeps the overridden one.
 *
 * @author Christophe Coevoet <stof@notk.org>
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Diego Saint Esteben <diego@saintesteben.me>
 */
class DecoratorServicePass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        \$definitions = new \\SplPriorityQueue();
        \$order = PHP_INT_MAX;

        foreach (\$container->getDefinitions() as \$id => \$definition) {
            if (!\$decorated = \$definition->getDecoratedService()) {
                continue;
            }
            \$definitions->insert([\$id, \$definition], [\$decorated[2], --\$order]);
        }
        \$decoratingDefinitions = [];

        foreach (\$definitions as list(\$id, \$definition)) {
            \$decoratedService = \$definition->getDecoratedService();
            list(\$inner, \$renamedId) = \$decoratedService;
            \$invalidBehavior = \$decoratedService[3] ?? ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE;

            \$definition->setDecoratedService(null);

            if (!\$renamedId) {
                \$renamedId = \$id.'.inner';
            }
            \$definition->innerServiceId = \$renamedId;
            \$definition->decorationOnInvalid = \$invalidBehavior;

            // we create a new alias/service for the service we are replacing
            // to be able to reference it in the new one
            if (\$container->hasAlias(\$inner)) {
                \$alias = \$container->getAlias(\$inner);
                \$public = \$alias->isPublic();
                \$private = \$alias->isPrivate();
                \$container->setAlias(\$renamedId, new Alias((string) \$alias, false));
            } elseif (\$container->hasDefinition(\$inner)) {
                \$decoratedDefinition = \$container->getDefinition(\$inner);
                \$public = \$decoratedDefinition->isPublic();
                \$private = \$decoratedDefinition->isPrivate();
                \$decoratedDefinition->setPublic(false);
                \$container->setDefinition(\$renamedId, \$decoratedDefinition);
                \$decoratingDefinitions[\$inner] = \$decoratedDefinition;
            } elseif (ContainerInterface::IGNORE_ON_INVALID_REFERENCE === \$invalidBehavior) {
                \$container->removeDefinition(\$id);
                continue;
            } elseif (ContainerInterface::NULL_ON_INVALID_REFERENCE === \$invalidBehavior) {
                \$public = \$definition->isPublic();
                \$private = \$definition->isPrivate();
            } else {
                throw new ServiceNotFoundException(\$inner, \$id);
            }

            if (isset(\$decoratingDefinitions[\$inner])) {
                \$decoratingDefinition = \$decoratingDefinitions[\$inner];

                \$decoratingTags = \$decoratingDefinition->getTags();
                \$resetTags = [];

                if (isset(\$decoratingTags['container.service_locator'])) {
                    // container.service_locator has special logic and it must not be transferred out to decorators
                    \$resetTags = ['container.service_locator' => \$decoratingTags['container.service_locator']];
                    unset(\$decoratingTags['container.service_locator']);
                }

                \$definition->setTags(array_merge(\$decoratingTags, \$definition->getTags()));
                \$decoratingDefinition->setTags(\$resetTags);
                \$decoratingDefinitions[\$inner] = \$definition;
            }

            \$container->setAlias(\$inner, \$id)->setPublic(\$public)->setPrivate(\$private);
        }
    }
}
", "@app/vendor/symfony/dependency-injection/Compiler/DecoratorServicePass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Compiler\\DecoratorServicePass.php");
    }
}
