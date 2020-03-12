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

/* @app/vendor/symfony/dependency-injection/Extension/Extension.php */
class __TwigTemplate_7bdda78c138c0f0a1937fe6157bdbfb475d203389e6b9867313861d9795c6c19 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Extension/Extension.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Extension;

use Symfony\\Component\\Config\\Definition\\ConfigurationInterface;
use Symfony\\Component\\Config\\Definition\\Processor;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Exception\\LogicException;

/**
 * Provides useful features shared by many extensions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Extension implements ExtensionInterface, ConfigurationExtensionInterface
{
    private \$processedConfigs = [];

    /**
     * {@inheritdoc}
     */
    public function getXsdValidationBasePath()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getNamespace()
    {
        return 'http://example.org/schema/dic/'.\$this->getAlias();
    }

    /**
     * Returns the recommended alias to use in XML.
     *
     * This alias is also the mandatory prefix to use when using YAML.
     *
     * This convention is to remove the \"Extension\" postfix from the class
     * name and then lowercase and underscore the result. So:
     *
     *     AcmeHelloExtension
     *
     * becomes
     *
     *     acme_hello
     *
     * This can be overridden in a sub-class to specify the alias manually.
     *
     * @return string The alias
     *
     * @throws BadMethodCallException When the extension name does not follow conventions
     */
    public function getAlias()
    {
        \$className = static::class;
        if ('Extension' != substr(\$className, -9)) {
            throw new BadMethodCallException('This extension does not follow the naming convention; you must overwrite the getAlias() method.');
        }
        \$classBaseName = substr(strrchr(\$className, '\\\\'), 1, -9);

        return Container::underscore(\$classBaseName);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfiguration(array \$config, ContainerBuilder \$container)
    {
        \$class = static::class;

        if (false !== strpos(\$class, \"\\0\")) {
            return null; // ignore anonymous classes
        }

        \$class = substr_replace(\$class, '\\Configuration', strrpos(\$class, '\\\\'));
        \$class = \$container->getReflectionClass(\$class);

        if (!\$class) {
            return null;
        }

        if (!\$class->implementsInterface(ConfigurationInterface::class)) {
            throw new LogicException(sprintf('The extension configuration class \"%s\" must implement \"%s\".', \$class->getName(), ConfigurationInterface::class));
        }

        if (!(\$constructor = \$class->getConstructor()) || !\$constructor->getNumberOfRequiredParameters()) {
            return \$class->newInstance();
        }

        return null;
    }

    final protected function processConfiguration(ConfigurationInterface \$configuration, array \$configs): array
    {
        \$processor = new Processor();

        return \$this->processedConfigs[] = \$processor->processConfiguration(\$configuration, \$configs);
    }

    /**
     * @internal
     */
    final public function getProcessedConfigs(): array
    {
        try {
            return \$this->processedConfigs;
        } finally {
            \$this->processedConfigs = [];
        }
    }

    /**
     * @return bool Whether the configuration is enabled
     *
     * @throws InvalidArgumentException When the config is not enableable
     */
    protected function isConfigEnabled(ContainerBuilder \$container, array \$config)
    {
        if (!\\array_key_exists('enabled', \$config)) {
            throw new InvalidArgumentException(\"The config array has no 'enabled' key.\");
        }

        return (bool) \$container->getParameterBag()->resolveValue(\$config['enabled']);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Extension/Extension.php";
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

namespace Symfony\\Component\\DependencyInjection\\Extension;

use Symfony\\Component\\Config\\Definition\\ConfigurationInterface;
use Symfony\\Component\\Config\\Definition\\Processor;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\BadMethodCallException;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Exception\\LogicException;

/**
 * Provides useful features shared by many extensions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Extension implements ExtensionInterface, ConfigurationExtensionInterface
{
    private \$processedConfigs = [];

    /**
     * {@inheritdoc}
     */
    public function getXsdValidationBasePath()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getNamespace()
    {
        return 'http://example.org/schema/dic/'.\$this->getAlias();
    }

    /**
     * Returns the recommended alias to use in XML.
     *
     * This alias is also the mandatory prefix to use when using YAML.
     *
     * This convention is to remove the \"Extension\" postfix from the class
     * name and then lowercase and underscore the result. So:
     *
     *     AcmeHelloExtension
     *
     * becomes
     *
     *     acme_hello
     *
     * This can be overridden in a sub-class to specify the alias manually.
     *
     * @return string The alias
     *
     * @throws BadMethodCallException When the extension name does not follow conventions
     */
    public function getAlias()
    {
        \$className = static::class;
        if ('Extension' != substr(\$className, -9)) {
            throw new BadMethodCallException('This extension does not follow the naming convention; you must overwrite the getAlias() method.');
        }
        \$classBaseName = substr(strrchr(\$className, '\\\\'), 1, -9);

        return Container::underscore(\$classBaseName);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfiguration(array \$config, ContainerBuilder \$container)
    {
        \$class = static::class;

        if (false !== strpos(\$class, \"\\0\")) {
            return null; // ignore anonymous classes
        }

        \$class = substr_replace(\$class, '\\Configuration', strrpos(\$class, '\\\\'));
        \$class = \$container->getReflectionClass(\$class);

        if (!\$class) {
            return null;
        }

        if (!\$class->implementsInterface(ConfigurationInterface::class)) {
            throw new LogicException(sprintf('The extension configuration class \"%s\" must implement \"%s\".', \$class->getName(), ConfigurationInterface::class));
        }

        if (!(\$constructor = \$class->getConstructor()) || !\$constructor->getNumberOfRequiredParameters()) {
            return \$class->newInstance();
        }

        return null;
    }

    final protected function processConfiguration(ConfigurationInterface \$configuration, array \$configs): array
    {
        \$processor = new Processor();

        return \$this->processedConfigs[] = \$processor->processConfiguration(\$configuration, \$configs);
    }

    /**
     * @internal
     */
    final public function getProcessedConfigs(): array
    {
        try {
            return \$this->processedConfigs;
        } finally {
            \$this->processedConfigs = [];
        }
    }

    /**
     * @return bool Whether the configuration is enabled
     *
     * @throws InvalidArgumentException When the config is not enableable
     */
    protected function isConfigEnabled(ContainerBuilder \$container, array \$config)
    {
        if (!\\array_key_exists('enabled', \$config)) {
            throw new InvalidArgumentException(\"The config array has no 'enabled' key.\");
        }

        return (bool) \$container->getParameterBag()->resolveValue(\$config['enabled']);
    }
}
", "@app/vendor/symfony/dependency-injection/Extension/Extension.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Extension\\Extension.php");
    }
}
