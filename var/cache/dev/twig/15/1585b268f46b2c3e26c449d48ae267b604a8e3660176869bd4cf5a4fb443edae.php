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

/* @app/vendor/symfony/dependency-injection/Compiler/ResolveReferencesToAliasesPass.php */
class __TwigTemplate_9e89e1be54b6b533ebb378f0ac82ece0d432e13c9982011dd001bcc592a5cd06 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Compiler/ResolveReferencesToAliasesPass.php"));

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
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Replaces all references to aliases with references to the actual service.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ResolveReferencesToAliasesPass extends AbstractRecursivePass
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        parent::process(\$container);

        foreach (\$container->getAliases() as \$id => \$alias) {
            \$aliasId = (string) \$alias;
            \$this->currentId = \$id;

            if (\$aliasId !== \$defId = \$this->getDefinitionId(\$aliasId, \$container)) {
                \$container->setAlias(\$id, \$defId)->setPublic(\$alias->isPublic())->setPrivate(\$alias->isPrivate());
            }
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

        \$defId = \$this->getDefinitionId(\$id = (string) \$value, \$this->container);

        return \$defId !== \$id ? new Reference(\$defId, \$value->getInvalidBehavior()) : \$value;
    }

    private function getDefinitionId(string \$id, ContainerBuilder \$container): string
    {
        if (!\$container->hasAlias(\$id)) {
            return \$id;
        }

        \$alias = \$container->getAlias(\$id);

        if (\$alias->isDeprecated()) {
            @trigger_error(sprintf('%s. It is being referenced by the \"%s\" %s.', rtrim(\$alias->getDeprecationMessage(\$id), '. '), \$this->currentId, \$container->hasDefinition(\$this->currentId) ? 'service' : 'alias'), E_USER_DEPRECATED);
        }

        \$seen = [];
        do {
            if (isset(\$seen[\$id])) {
                throw new ServiceCircularReferenceException(\$id, array_merge(array_keys(\$seen), [\$id]));
            }

            \$seen[\$id] = true;
            \$id = (string) \$container->getAlias(\$id);
        } while (\$container->hasAlias(\$id));

        return \$id;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Compiler/ResolveReferencesToAliasesPass.php";
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
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Replaces all references to aliases with references to the actual service.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ResolveReferencesToAliasesPass extends AbstractRecursivePass
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        parent::process(\$container);

        foreach (\$container->getAliases() as \$id => \$alias) {
            \$aliasId = (string) \$alias;
            \$this->currentId = \$id;

            if (\$aliasId !== \$defId = \$this->getDefinitionId(\$aliasId, \$container)) {
                \$container->setAlias(\$id, \$defId)->setPublic(\$alias->isPublic())->setPrivate(\$alias->isPrivate());
            }
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

        \$defId = \$this->getDefinitionId(\$id = (string) \$value, \$this->container);

        return \$defId !== \$id ? new Reference(\$defId, \$value->getInvalidBehavior()) : \$value;
    }

    private function getDefinitionId(string \$id, ContainerBuilder \$container): string
    {
        if (!\$container->hasAlias(\$id)) {
            return \$id;
        }

        \$alias = \$container->getAlias(\$id);

        if (\$alias->isDeprecated()) {
            @trigger_error(sprintf('%s. It is being referenced by the \"%s\" %s.', rtrim(\$alias->getDeprecationMessage(\$id), '. '), \$this->currentId, \$container->hasDefinition(\$this->currentId) ? 'service' : 'alias'), E_USER_DEPRECATED);
        }

        \$seen = [];
        do {
            if (isset(\$seen[\$id])) {
                throw new ServiceCircularReferenceException(\$id, array_merge(array_keys(\$seen), [\$id]));
            }

            \$seen[\$id] = true;
            \$id = (string) \$container->getAlias(\$id);
        } while (\$container->hasAlias(\$id));

        return \$id;
    }
}
", "@app/vendor/symfony/dependency-injection/Compiler/ResolveReferencesToAliasesPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Compiler\\ResolveReferencesToAliasesPass.php");
    }
}
