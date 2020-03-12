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

/* @app/vendor/symfony/dependency-injection/Compiler/ResolveHotPathPass.php */
class __TwigTemplate_998b70db6de114946c83e03b3d5a6b54ce3802c0dc5b4fba64a099bd3c82a154 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Compiler/ResolveHotPathPass.php"));

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

use Symfony\\Component\\DependencyInjection\\Argument\\ArgumentInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Propagate \"container.hot_path\" tags to referenced services.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ResolveHotPathPass extends AbstractRecursivePass
{
    private \$tagName;
    private \$resolvedIds = [];

    public function __construct(string \$tagName = 'container.hot_path')
    {
        \$this->tagName = \$tagName;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        try {
            parent::process(\$container);
            \$container->getDefinition('service_container')->clearTag(\$this->tagName);
        } finally {
            \$this->resolvedIds = [];
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, bool \$isRoot = false)
    {
        if (\$value instanceof ArgumentInterface) {
            return \$value;
        }
        if (\$value instanceof Definition && \$isRoot && (isset(\$this->resolvedIds[\$this->currentId]) || !\$value->hasTag(\$this->tagName) || \$value->isDeprecated())) {
            return \$value->isDeprecated() ? \$value->clearTag(\$this->tagName) : \$value;
        }
        if (\$value instanceof Reference && ContainerBuilder::IGNORE_ON_UNINITIALIZED_REFERENCE !== \$value->getInvalidBehavior() && \$this->container->has(\$id = (string) \$value)) {
            \$definition = \$this->container->findDefinition(\$id);
            if (!\$definition->hasTag(\$this->tagName) && !\$definition->isDeprecated()) {
                \$this->resolvedIds[\$id] = true;
                \$definition->addTag(\$this->tagName);
                parent::processValue(\$definition, false);
            }

            return \$value;
        }

        return parent::processValue(\$value, \$isRoot);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Compiler/ResolveHotPathPass.php";
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

use Symfony\\Component\\DependencyInjection\\Argument\\ArgumentInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Propagate \"container.hot_path\" tags to referenced services.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ResolveHotPathPass extends AbstractRecursivePass
{
    private \$tagName;
    private \$resolvedIds = [];

    public function __construct(string \$tagName = 'container.hot_path')
    {
        \$this->tagName = \$tagName;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        try {
            parent::process(\$container);
            \$container->getDefinition('service_container')->clearTag(\$this->tagName);
        } finally {
            \$this->resolvedIds = [];
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, bool \$isRoot = false)
    {
        if (\$value instanceof ArgumentInterface) {
            return \$value;
        }
        if (\$value instanceof Definition && \$isRoot && (isset(\$this->resolvedIds[\$this->currentId]) || !\$value->hasTag(\$this->tagName) || \$value->isDeprecated())) {
            return \$value->isDeprecated() ? \$value->clearTag(\$this->tagName) : \$value;
        }
        if (\$value instanceof Reference && ContainerBuilder::IGNORE_ON_UNINITIALIZED_REFERENCE !== \$value->getInvalidBehavior() && \$this->container->has(\$id = (string) \$value)) {
            \$definition = \$this->container->findDefinition(\$id);
            if (!\$definition->hasTag(\$this->tagName) && !\$definition->isDeprecated()) {
                \$this->resolvedIds[\$id] = true;
                \$definition->addTag(\$this->tagName);
                parent::processValue(\$definition, false);
            }

            return \$value;
        }

        return parent::processValue(\$value, \$isRoot);
    }
}
", "@app/vendor/symfony/dependency-injection/Compiler/ResolveHotPathPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Compiler\\ResolveHotPathPass.php");
    }
}
