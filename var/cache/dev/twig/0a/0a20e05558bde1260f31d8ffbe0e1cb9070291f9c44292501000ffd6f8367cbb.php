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

/* @app/vendor/symfony/dependency-injection/Compiler/RemoveUnusedDefinitionsPass.php */
class __TwigTemplate_68aeaa9bfe5f13486de7e436ab0701b80d5774c754e574f8b5e68bda9deb080d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Compiler/RemoveUnusedDefinitionsPass.php"));

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

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Removes unused service definitions from the container.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RemoveUnusedDefinitionsPass extends AbstractRecursivePass
{
    private \$connectedIds = [];

    /**
     * Processes the ContainerBuilder to remove unused definitions.
     */
    public function process(ContainerBuilder \$container)
    {
        try {
            \$this->enableExpressionProcessing();
            \$this->container = \$container;
            \$connectedIds = [];
            \$aliases = \$container->getAliases();

            foreach (\$aliases as \$id => \$alias) {
                if (\$alias->isPublic()) {
                    \$this->connectedIds[] = (string) \$aliases[\$id];
                }
            }

            foreach (\$container->getDefinitions() as \$id => \$definition) {
                if (\$definition->isPublic()) {
                    \$connectedIds[\$id] = true;
                    \$this->processValue(\$definition);
                }
            }

            while (\$this->connectedIds) {
                \$ids = \$this->connectedIds;
                \$this->connectedIds = [];
                foreach (\$ids as \$id) {
                    if (!isset(\$connectedIds[\$id]) && \$container->hasDefinition(\$id)) {
                        \$connectedIds[\$id] = true;
                        \$this->processValue(\$container->getDefinition(\$id));
                    }
                }
            }

            foreach (\$container->getDefinitions() as \$id => \$definition) {
                if (!isset(\$connectedIds[\$id])) {
                    \$container->removeDefinition(\$id);
                    \$container->resolveEnvPlaceholders(!\$definition->hasErrors() ? serialize(\$definition) : \$definition);
                    \$container->log(\$this, sprintf('Removed service \"%s\"; reason: unused.', \$id));
                }
            }
        } finally {
            \$this->container = null;
            \$this->connectedIds = [];
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, bool \$isRoot = false)
    {
        if (!\$value instanceof Reference) {
            return parent::processValue(\$value, \$isRoot);
        }

        if (ContainerBuilder::IGNORE_ON_UNINITIALIZED_REFERENCE !== \$value->getInvalidBehavior()) {
            \$this->connectedIds[] = (string) \$value;
        }

        return \$value;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Compiler/RemoveUnusedDefinitionsPass.php";
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

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Removes unused service definitions from the container.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RemoveUnusedDefinitionsPass extends AbstractRecursivePass
{
    private \$connectedIds = [];

    /**
     * Processes the ContainerBuilder to remove unused definitions.
     */
    public function process(ContainerBuilder \$container)
    {
        try {
            \$this->enableExpressionProcessing();
            \$this->container = \$container;
            \$connectedIds = [];
            \$aliases = \$container->getAliases();

            foreach (\$aliases as \$id => \$alias) {
                if (\$alias->isPublic()) {
                    \$this->connectedIds[] = (string) \$aliases[\$id];
                }
            }

            foreach (\$container->getDefinitions() as \$id => \$definition) {
                if (\$definition->isPublic()) {
                    \$connectedIds[\$id] = true;
                    \$this->processValue(\$definition);
                }
            }

            while (\$this->connectedIds) {
                \$ids = \$this->connectedIds;
                \$this->connectedIds = [];
                foreach (\$ids as \$id) {
                    if (!isset(\$connectedIds[\$id]) && \$container->hasDefinition(\$id)) {
                        \$connectedIds[\$id] = true;
                        \$this->processValue(\$container->getDefinition(\$id));
                    }
                }
            }

            foreach (\$container->getDefinitions() as \$id => \$definition) {
                if (!isset(\$connectedIds[\$id])) {
                    \$container->removeDefinition(\$id);
                    \$container->resolveEnvPlaceholders(!\$definition->hasErrors() ? serialize(\$definition) : \$definition);
                    \$container->log(\$this, sprintf('Removed service \"%s\"; reason: unused.', \$id));
                }
            }
        } finally {
            \$this->container = null;
            \$this->connectedIds = [];
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, bool \$isRoot = false)
    {
        if (!\$value instanceof Reference) {
            return parent::processValue(\$value, \$isRoot);
        }

        if (ContainerBuilder::IGNORE_ON_UNINITIALIZED_REFERENCE !== \$value->getInvalidBehavior()) {
            \$this->connectedIds[] = (string) \$value;
        }

        return \$value;
    }
}
", "@app/vendor/symfony/dependency-injection/Compiler/RemoveUnusedDefinitionsPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Compiler\\RemoveUnusedDefinitionsPass.php");
    }
}
