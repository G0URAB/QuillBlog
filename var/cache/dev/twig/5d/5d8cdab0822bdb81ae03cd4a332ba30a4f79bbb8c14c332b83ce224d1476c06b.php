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

/* @app/vendor/symfony/dependency-injection/Loader/Configurator/ContainerConfigurator.php */
class __TwigTemplate_69408c753401fdc3febeb96a13d52f2998e63ce3e3e2331a2cbbe4b46df7faff extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Loader/Configurator/ContainerConfigurator.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator;

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument;
use Symfony\\Component\\DependencyInjection\\Argument\\TaggedIteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface;
use Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader;
use Symfony\\Component\\ExpressionLanguage\\Expression;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ContainerConfigurator extends AbstractConfigurator
{
    const FACTORY = 'container';

    private \$container;
    private \$loader;
    private \$instanceof;
    private \$path;
    private \$file;
    private \$anonymousCount = 0;

    public function __construct(ContainerBuilder \$container, PhpFileLoader \$loader, array &\$instanceof, string \$path, string \$file)
    {
        \$this->container = \$container;
        \$this->loader = \$loader;
        \$this->instanceof = &\$instanceof;
        \$this->path = \$path;
        \$this->file = \$file;
    }

    final public function extension(string \$namespace, array \$config)
    {
        if (!\$this->container->hasExtension(\$namespace)) {
            \$extensions = array_filter(array_map(function (ExtensionInterface \$ext) { return \$ext->getAlias(); }, \$this->container->getExtensions()));
            throw new InvalidArgumentException(sprintf('There is no extension able to load the configuration for \"%s\" (in %s). Looked for namespace \"%s\", found %s', \$namespace, \$this->file, \$namespace, \$extensions ? sprintf('\"%s\"', implode('\", \"', \$extensions)) : 'none'));
        }

        \$this->container->loadFromExtension(\$namespace, static::processValue(\$config));
    }

    final public function import(string \$resource, string \$type = null, \$ignoreErrors = false)
    {
        \$this->loader->setCurrentDir(\\dirname(\$this->path));
        \$this->loader->import(\$resource, \$type, \$ignoreErrors, \$this->file);
    }

    final public function parameters(): ParametersConfigurator
    {
        return new ParametersConfigurator(\$this->container);
    }

    final public function services(): ServicesConfigurator
    {
        return new ServicesConfigurator(\$this->container, \$this->loader, \$this->instanceof, \$this->path, \$this->anonymousCount);
    }
}

/**
 * Creates a service reference.
 */
function ref(string \$id): ReferenceConfigurator
{
    return new ReferenceConfigurator(\$id);
}

/**
 * Creates an inline service.
 */
function inline(string \$class = null): InlineServiceConfigurator
{
    return new InlineServiceConfigurator(new Definition(\$class));
}

/**
 * Creates a service locator.
 *
 * @param ReferenceConfigurator[] \$values
 */
function service_locator(array \$values): ServiceLocatorArgument
{
    return new ServiceLocatorArgument(AbstractConfigurator::processValue(\$values, true));
}

/**
 * Creates a lazy iterator.
 *
 * @param ReferenceConfigurator[] \$values
 */
function iterator(array \$values): IteratorArgument
{
    return new IteratorArgument(AbstractConfigurator::processValue(\$values, true));
}

/**
 * Creates a lazy iterator by tag name.
 */
function tagged_iterator(string \$tag, string \$indexAttribute = null, string \$defaultIndexMethod = null, string \$defaultPriorityMethod = null): TaggedIteratorArgument
{
    return new TaggedIteratorArgument(\$tag, \$indexAttribute, \$defaultIndexMethod, false, \$defaultPriorityMethod);
}

/**
 * Creates a service locator by tag name.
 */
function tagged_locator(string \$tag, string \$indexAttribute = null, string \$defaultIndexMethod = null): ServiceLocatorArgument
{
    return new ServiceLocatorArgument(new TaggedIteratorArgument(\$tag, \$indexAttribute, \$defaultIndexMethod, true));
}

/**
 * Creates an expression.
 */
function expr(string \$expression): Expression
{
    return new Expression(\$expression);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Loader/Configurator/ContainerConfigurator.php";
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

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator;

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocatorArgument;
use Symfony\\Component\\DependencyInjection\\Argument\\TaggedIteratorArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface;
use Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader;
use Symfony\\Component\\ExpressionLanguage\\Expression;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ContainerConfigurator extends AbstractConfigurator
{
    const FACTORY = 'container';

    private \$container;
    private \$loader;
    private \$instanceof;
    private \$path;
    private \$file;
    private \$anonymousCount = 0;

    public function __construct(ContainerBuilder \$container, PhpFileLoader \$loader, array &\$instanceof, string \$path, string \$file)
    {
        \$this->container = \$container;
        \$this->loader = \$loader;
        \$this->instanceof = &\$instanceof;
        \$this->path = \$path;
        \$this->file = \$file;
    }

    final public function extension(string \$namespace, array \$config)
    {
        if (!\$this->container->hasExtension(\$namespace)) {
            \$extensions = array_filter(array_map(function (ExtensionInterface \$ext) { return \$ext->getAlias(); }, \$this->container->getExtensions()));
            throw new InvalidArgumentException(sprintf('There is no extension able to load the configuration for \"%s\" (in %s). Looked for namespace \"%s\", found %s', \$namespace, \$this->file, \$namespace, \$extensions ? sprintf('\"%s\"', implode('\", \"', \$extensions)) : 'none'));
        }

        \$this->container->loadFromExtension(\$namespace, static::processValue(\$config));
    }

    final public function import(string \$resource, string \$type = null, \$ignoreErrors = false)
    {
        \$this->loader->setCurrentDir(\\dirname(\$this->path));
        \$this->loader->import(\$resource, \$type, \$ignoreErrors, \$this->file);
    }

    final public function parameters(): ParametersConfigurator
    {
        return new ParametersConfigurator(\$this->container);
    }

    final public function services(): ServicesConfigurator
    {
        return new ServicesConfigurator(\$this->container, \$this->loader, \$this->instanceof, \$this->path, \$this->anonymousCount);
    }
}

/**
 * Creates a service reference.
 */
function ref(string \$id): ReferenceConfigurator
{
    return new ReferenceConfigurator(\$id);
}

/**
 * Creates an inline service.
 */
function inline(string \$class = null): InlineServiceConfigurator
{
    return new InlineServiceConfigurator(new Definition(\$class));
}

/**
 * Creates a service locator.
 *
 * @param ReferenceConfigurator[] \$values
 */
function service_locator(array \$values): ServiceLocatorArgument
{
    return new ServiceLocatorArgument(AbstractConfigurator::processValue(\$values, true));
}

/**
 * Creates a lazy iterator.
 *
 * @param ReferenceConfigurator[] \$values
 */
function iterator(array \$values): IteratorArgument
{
    return new IteratorArgument(AbstractConfigurator::processValue(\$values, true));
}

/**
 * Creates a lazy iterator by tag name.
 */
function tagged_iterator(string \$tag, string \$indexAttribute = null, string \$defaultIndexMethod = null, string \$defaultPriorityMethod = null): TaggedIteratorArgument
{
    return new TaggedIteratorArgument(\$tag, \$indexAttribute, \$defaultIndexMethod, false, \$defaultPriorityMethod);
}

/**
 * Creates a service locator by tag name.
 */
function tagged_locator(string \$tag, string \$indexAttribute = null, string \$defaultIndexMethod = null): ServiceLocatorArgument
{
    return new ServiceLocatorArgument(new TaggedIteratorArgument(\$tag, \$indexAttribute, \$defaultIndexMethod, true));
}

/**
 * Creates an expression.
 */
function expr(string \$expression): Expression
{
    return new Expression(\$expression);
}
", "@app/vendor/symfony/dependency-injection/Loader/Configurator/ContainerConfigurator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Loader\\Configurator\\ContainerConfigurator.php");
    }
}
