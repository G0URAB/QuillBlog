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

/* @app/vendor/symfony/dependency-injection/Compiler/ResolveParameterPlaceHoldersPass.php */
class __TwigTemplate_c4fe50cd9b124d5bcc03c790bae2a9e6c972508f30f2844cebdbdf71ae7f0801 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Compiler/ResolveParameterPlaceHoldersPass.php"));

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
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\ParameterNotFoundException;

/**
 * Resolves all parameter placeholders \"%somevalue%\" to their real values.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ResolveParameterPlaceHoldersPass extends AbstractRecursivePass
{
    private \$bag;
    private \$resolveArrays;
    private \$throwOnResolveException;

    public function __construct(\$resolveArrays = true, \$throwOnResolveException = true)
    {
        \$this->resolveArrays = \$resolveArrays;
        \$this->throwOnResolveException = \$throwOnResolveException;
    }

    /**
     * {@inheritdoc}
     *
     * @throws ParameterNotFoundException
     */
    public function process(ContainerBuilder \$container)
    {
        \$this->bag = \$container->getParameterBag();

        try {
            parent::process(\$container);

            \$aliases = [];
            foreach (\$container->getAliases() as \$name => \$target) {
                \$this->currentId = \$name;
                \$aliases[\$this->bag->resolveValue(\$name)] = \$target;
            }
            \$container->setAliases(\$aliases);
        } catch (ParameterNotFoundException \$e) {
            \$e->setSourceId(\$this->currentId);

            throw \$e;
        }

        \$this->bag->resolve();
        \$this->bag = null;
    }

    protected function processValue(\$value, bool \$isRoot = false)
    {
        if (\\is_string(\$value)) {
            try {
                \$v = \$this->bag->resolveValue(\$value);
            } catch (ParameterNotFoundException \$e) {
                if (\$this->throwOnResolveException) {
                    throw \$e;
                }

                \$v = null;
                \$this->container->getDefinition(\$this->currentId)->addError(\$e->getMessage());
            }

            return \$this->resolveArrays || !\$v || !\\is_array(\$v) ? \$v : \$value;
        }
        if (\$value instanceof Definition) {
            \$value->setBindings(\$this->processValue(\$value->getBindings()));
            \$changes = \$value->getChanges();
            if (isset(\$changes['class'])) {
                \$value->setClass(\$this->bag->resolveValue(\$value->getClass()));
            }
            if (isset(\$changes['file'])) {
                \$value->setFile(\$this->bag->resolveValue(\$value->getFile()));
            }
        }

        \$value = parent::processValue(\$value, \$isRoot);

        if (\$value && \\is_array(\$value)) {
            \$value = array_combine(\$this->bag->resolveValue(array_keys(\$value)), \$value);
        }

        return \$value;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Compiler/ResolveParameterPlaceHoldersPass.php";
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
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\ParameterNotFoundException;

/**
 * Resolves all parameter placeholders \"%somevalue%\" to their real values.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ResolveParameterPlaceHoldersPass extends AbstractRecursivePass
{
    private \$bag;
    private \$resolveArrays;
    private \$throwOnResolveException;

    public function __construct(\$resolveArrays = true, \$throwOnResolveException = true)
    {
        \$this->resolveArrays = \$resolveArrays;
        \$this->throwOnResolveException = \$throwOnResolveException;
    }

    /**
     * {@inheritdoc}
     *
     * @throws ParameterNotFoundException
     */
    public function process(ContainerBuilder \$container)
    {
        \$this->bag = \$container->getParameterBag();

        try {
            parent::process(\$container);

            \$aliases = [];
            foreach (\$container->getAliases() as \$name => \$target) {
                \$this->currentId = \$name;
                \$aliases[\$this->bag->resolveValue(\$name)] = \$target;
            }
            \$container->setAliases(\$aliases);
        } catch (ParameterNotFoundException \$e) {
            \$e->setSourceId(\$this->currentId);

            throw \$e;
        }

        \$this->bag->resolve();
        \$this->bag = null;
    }

    protected function processValue(\$value, bool \$isRoot = false)
    {
        if (\\is_string(\$value)) {
            try {
                \$v = \$this->bag->resolveValue(\$value);
            } catch (ParameterNotFoundException \$e) {
                if (\$this->throwOnResolveException) {
                    throw \$e;
                }

                \$v = null;
                \$this->container->getDefinition(\$this->currentId)->addError(\$e->getMessage());
            }

            return \$this->resolveArrays || !\$v || !\\is_array(\$v) ? \$v : \$value;
        }
        if (\$value instanceof Definition) {
            \$value->setBindings(\$this->processValue(\$value->getBindings()));
            \$changes = \$value->getChanges();
            if (isset(\$changes['class'])) {
                \$value->setClass(\$this->bag->resolveValue(\$value->getClass()));
            }
            if (isset(\$changes['file'])) {
                \$value->setFile(\$this->bag->resolveValue(\$value->getFile()));
            }
        }

        \$value = parent::processValue(\$value, \$isRoot);

        if (\$value && \\is_array(\$value)) {
            \$value = array_combine(\$this->bag->resolveValue(array_keys(\$value)), \$value);
        }

        return \$value;
    }
}
", "@app/vendor/symfony/dependency-injection/Compiler/ResolveParameterPlaceHoldersPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Compiler\\ResolveParameterPlaceHoldersPass.php");
    }
}
