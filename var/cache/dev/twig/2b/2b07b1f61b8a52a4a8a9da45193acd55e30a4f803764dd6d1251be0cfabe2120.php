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

/* @app/vendor/symfony/dependency-injection/Compiler/ResolveInstanceofConditionalsPass.php */
class __TwigTemplate_7f6cf9f680d88636f71ec98deeb5f717d3886016f37a7069695201f51132f038 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Compiler/ResolveInstanceofConditionalsPass.php"));

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

use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

/**
 * Applies instanceof conditionals to definitions.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ResolveInstanceofConditionalsPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        foreach (\$container->getAutoconfiguredInstanceof() as \$interface => \$definition) {
            if (\$definition->getArguments()) {
                throw new InvalidArgumentException(sprintf('Autoconfigured instanceof for type \"%s\" defines arguments but these are not supported and should be removed.', \$interface));
            }
        }

        foreach (\$container->getDefinitions() as \$id => \$definition) {
            if (\$definition instanceof ChildDefinition) {
                // don't apply \"instanceof\" to children: it will be applied to their parent
                continue;
            }
            \$container->setDefinition(\$id, \$this->processDefinition(\$container, \$id, \$definition));
        }
    }

    private function processDefinition(ContainerBuilder \$container, string \$id, Definition \$definition): Definition
    {
        \$instanceofConditionals = \$definition->getInstanceofConditionals();
        \$autoconfiguredInstanceof = \$definition->isAutoconfigured() ? \$container->getAutoconfiguredInstanceof() : [];
        if (!\$instanceofConditionals && !\$autoconfiguredInstanceof) {
            return \$definition;
        }

        if (!\$class = \$container->getParameterBag()->resolveValue(\$definition->getClass())) {
            return \$definition;
        }

        \$conditionals = \$this->mergeConditionals(\$autoconfiguredInstanceof, \$instanceofConditionals, \$container);

        \$definition->setInstanceofConditionals([]);
        \$parent = \$shared = null;
        \$instanceofTags = [];
        \$instanceofCalls = [];
        \$instanceofBindings = [];
        \$reflectionClass = null;

        foreach (\$conditionals as \$interface => \$instanceofDefs) {
            if (\$interface !== \$class && !(null === \$reflectionClass ? \$reflectionClass = (\$container->getReflectionClass(\$class, false) ?: false) : \$reflectionClass)) {
                continue;
            }

            if (\$interface !== \$class && !is_subclass_of(\$class, \$interface)) {
                continue;
            }

            foreach (\$instanceofDefs as \$key => \$instanceofDef) {
                /** @var ChildDefinition \$instanceofDef */
                \$instanceofDef = clone \$instanceofDef;
                \$instanceofDef->setAbstract(true)->setParent(\$parent ?: '.abstract.instanceof.'.\$id);
                \$parent = '.instanceof.'.\$interface.'.'.\$key.'.'.\$id;
                \$container->setDefinition(\$parent, \$instanceofDef);
                \$instanceofTags[] = \$instanceofDef->getTags();
                \$instanceofBindings = \$instanceofDef->getBindings() + \$instanceofBindings;

                foreach (\$instanceofDef->getMethodCalls() as \$methodCall) {
                    \$instanceofCalls[] = \$methodCall;
                }

                \$instanceofDef->setTags([]);
                \$instanceofDef->setMethodCalls([]);
                \$instanceofDef->setBindings([]);

                if (isset(\$instanceofDef->getChanges()['shared'])) {
                    \$shared = \$instanceofDef->isShared();
                }
            }
        }

        if (\$parent) {
            \$bindings = \$definition->getBindings();
            \$abstract = \$container->setDefinition('.abstract.instanceof.'.\$id, \$definition);

            // cast Definition to ChildDefinition
            \$definition->setBindings([]);
            \$definition = serialize(\$definition);
            \$definition = substr_replace(\$definition, '53', 2, 2);
            \$definition = substr_replace(\$definition, 'Child', 44, 0);
            /** @var ChildDefinition \$definition */
            \$definition = unserialize(\$definition);
            \$definition->setParent(\$parent);

            if (null !== \$shared && !isset(\$definition->getChanges()['shared'])) {
                \$definition->setShared(\$shared);
            }

            // Don't add tags to service decorators
            if (null === \$definition->getDecoratedService()) {
                \$i = \\count(\$instanceofTags);
                while (0 <= --\$i) {
                    foreach (\$instanceofTags[\$i] as \$k => \$v) {
                        foreach (\$v as \$v) {
                            if (\$definition->hasTag(\$k) && \\in_array(\$v, \$definition->getTag(\$k))) {
                                continue;
                            }
                            \$definition->addTag(\$k, \$v);
                        }
                    }
                }
            }

            \$definition->setMethodCalls(array_merge(\$instanceofCalls, \$definition->getMethodCalls()));
            \$definition->setBindings(\$bindings + \$instanceofBindings);

            // reset fields with \"merge\" behavior
            \$abstract
                ->setBindings([])
                ->setArguments([])
                ->setMethodCalls([])
                ->setDecoratedService(null)
                ->setTags([])
                ->setAbstract(true);
        }

        return \$definition;
    }

    private function mergeConditionals(array \$autoconfiguredInstanceof, array \$instanceofConditionals, ContainerBuilder \$container): array
    {
        // make each value an array of ChildDefinition
        \$conditionals = array_map(function (\$childDef) { return [\$childDef]; }, \$autoconfiguredInstanceof);

        foreach (\$instanceofConditionals as \$interface => \$instanceofDef) {
            // make sure the interface/class exists (but don't validate automaticInstanceofConditionals)
            if (!\$container->getReflectionClass(\$interface)) {
                throw new RuntimeException(sprintf('\"%s\" is set as an \"instanceof\" conditional, but it does not exist.', \$interface));
            }

            if (!isset(\$autoconfiguredInstanceof[\$interface])) {
                \$conditionals[\$interface] = [];
            }

            \$conditionals[\$interface][] = \$instanceofDef;
        }

        return \$conditionals;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Compiler/ResolveInstanceofConditionalsPass.php";
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

use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

/**
 * Applies instanceof conditionals to definitions.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ResolveInstanceofConditionalsPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        foreach (\$container->getAutoconfiguredInstanceof() as \$interface => \$definition) {
            if (\$definition->getArguments()) {
                throw new InvalidArgumentException(sprintf('Autoconfigured instanceof for type \"%s\" defines arguments but these are not supported and should be removed.', \$interface));
            }
        }

        foreach (\$container->getDefinitions() as \$id => \$definition) {
            if (\$definition instanceof ChildDefinition) {
                // don't apply \"instanceof\" to children: it will be applied to their parent
                continue;
            }
            \$container->setDefinition(\$id, \$this->processDefinition(\$container, \$id, \$definition));
        }
    }

    private function processDefinition(ContainerBuilder \$container, string \$id, Definition \$definition): Definition
    {
        \$instanceofConditionals = \$definition->getInstanceofConditionals();
        \$autoconfiguredInstanceof = \$definition->isAutoconfigured() ? \$container->getAutoconfiguredInstanceof() : [];
        if (!\$instanceofConditionals && !\$autoconfiguredInstanceof) {
            return \$definition;
        }

        if (!\$class = \$container->getParameterBag()->resolveValue(\$definition->getClass())) {
            return \$definition;
        }

        \$conditionals = \$this->mergeConditionals(\$autoconfiguredInstanceof, \$instanceofConditionals, \$container);

        \$definition->setInstanceofConditionals([]);
        \$parent = \$shared = null;
        \$instanceofTags = [];
        \$instanceofCalls = [];
        \$instanceofBindings = [];
        \$reflectionClass = null;

        foreach (\$conditionals as \$interface => \$instanceofDefs) {
            if (\$interface !== \$class && !(null === \$reflectionClass ? \$reflectionClass = (\$container->getReflectionClass(\$class, false) ?: false) : \$reflectionClass)) {
                continue;
            }

            if (\$interface !== \$class && !is_subclass_of(\$class, \$interface)) {
                continue;
            }

            foreach (\$instanceofDefs as \$key => \$instanceofDef) {
                /** @var ChildDefinition \$instanceofDef */
                \$instanceofDef = clone \$instanceofDef;
                \$instanceofDef->setAbstract(true)->setParent(\$parent ?: '.abstract.instanceof.'.\$id);
                \$parent = '.instanceof.'.\$interface.'.'.\$key.'.'.\$id;
                \$container->setDefinition(\$parent, \$instanceofDef);
                \$instanceofTags[] = \$instanceofDef->getTags();
                \$instanceofBindings = \$instanceofDef->getBindings() + \$instanceofBindings;

                foreach (\$instanceofDef->getMethodCalls() as \$methodCall) {
                    \$instanceofCalls[] = \$methodCall;
                }

                \$instanceofDef->setTags([]);
                \$instanceofDef->setMethodCalls([]);
                \$instanceofDef->setBindings([]);

                if (isset(\$instanceofDef->getChanges()['shared'])) {
                    \$shared = \$instanceofDef->isShared();
                }
            }
        }

        if (\$parent) {
            \$bindings = \$definition->getBindings();
            \$abstract = \$container->setDefinition('.abstract.instanceof.'.\$id, \$definition);

            // cast Definition to ChildDefinition
            \$definition->setBindings([]);
            \$definition = serialize(\$definition);
            \$definition = substr_replace(\$definition, '53', 2, 2);
            \$definition = substr_replace(\$definition, 'Child', 44, 0);
            /** @var ChildDefinition \$definition */
            \$definition = unserialize(\$definition);
            \$definition->setParent(\$parent);

            if (null !== \$shared && !isset(\$definition->getChanges()['shared'])) {
                \$definition->setShared(\$shared);
            }

            // Don't add tags to service decorators
            if (null === \$definition->getDecoratedService()) {
                \$i = \\count(\$instanceofTags);
                while (0 <= --\$i) {
                    foreach (\$instanceofTags[\$i] as \$k => \$v) {
                        foreach (\$v as \$v) {
                            if (\$definition->hasTag(\$k) && \\in_array(\$v, \$definition->getTag(\$k))) {
                                continue;
                            }
                            \$definition->addTag(\$k, \$v);
                        }
                    }
                }
            }

            \$definition->setMethodCalls(array_merge(\$instanceofCalls, \$definition->getMethodCalls()));
            \$definition->setBindings(\$bindings + \$instanceofBindings);

            // reset fields with \"merge\" behavior
            \$abstract
                ->setBindings([])
                ->setArguments([])
                ->setMethodCalls([])
                ->setDecoratedService(null)
                ->setTags([])
                ->setAbstract(true);
        }

        return \$definition;
    }

    private function mergeConditionals(array \$autoconfiguredInstanceof, array \$instanceofConditionals, ContainerBuilder \$container): array
    {
        // make each value an array of ChildDefinition
        \$conditionals = array_map(function (\$childDef) { return [\$childDef]; }, \$autoconfiguredInstanceof);

        foreach (\$instanceofConditionals as \$interface => \$instanceofDef) {
            // make sure the interface/class exists (but don't validate automaticInstanceofConditionals)
            if (!\$container->getReflectionClass(\$interface)) {
                throw new RuntimeException(sprintf('\"%s\" is set as an \"instanceof\" conditional, but it does not exist.', \$interface));
            }

            if (!isset(\$autoconfiguredInstanceof[\$interface])) {
                \$conditionals[\$interface] = [];
            }

            \$conditionals[\$interface][] = \$instanceofDef;
        }

        return \$conditionals;
    }
}
", "@app/vendor/symfony/dependency-injection/Compiler/ResolveInstanceofConditionalsPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Compiler\\ResolveInstanceofConditionalsPass.php");
    }
}
