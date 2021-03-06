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

/* @app/vendor/symfony/http-kernel/Bundle/Bundle.php */
class __TwigTemplate_c86a181107a8d1f289133edcc6e0be98a390630252abaf326b53d45d03f51432 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/Bundle/Bundle.php"));

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

namespace Symfony\\Component\\HttpKernel\\Bundle;

use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ContainerAwareTrait;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface;

/**
 * An implementation of BundleInterface that adds a few conventions for DependencyInjection extensions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Bundle implements BundleInterface
{
    use ContainerAwareTrait;

    protected \$name;
    protected \$extension;
    protected \$path;
    private \$namespace;

    /**
     * {@inheritdoc}
     */
    public function boot()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function shutdown()
    {
    }

    /**
     * {@inheritdoc}
     *
     * This method can be overridden to register compilation passes,
     * other extensions, ...
     */
    public function build(ContainerBuilder \$container)
    {
    }

    /**
     * Returns the bundle's container extension.
     *
     * @return ExtensionInterface|null The container extension
     *
     * @throws \\LogicException
     */
    public function getContainerExtension()
    {
        if (null === \$this->extension) {
            \$extension = \$this->createContainerExtension();

            if (null !== \$extension) {
                if (!\$extension instanceof ExtensionInterface) {
                    throw new \\LogicException(sprintf('Extension %s must implement Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface.', \\get_class(\$extension)));
                }

                // check naming convention
                \$basename = preg_replace('/Bundle\$/', '', \$this->getName());
                \$expectedAlias = Container::underscore(\$basename);

                if (\$expectedAlias != \$extension->getAlias()) {
                    throw new \\LogicException(sprintf('Users will expect the alias of the default extension of a bundle to be the underscored version of the bundle name (\"%s\"). You can override \"Bundle::getContainerExtension()\" if you want to use \"%s\" or another alias.', \$expectedAlias, \$extension->getAlias()));
                }

                \$this->extension = \$extension;
            } else {
                \$this->extension = false;
            }
        }

        return \$this->extension ?: null;
    }

    /**
     * {@inheritdoc}
     */
    public function getNamespace()
    {
        if (null === \$this->namespace) {
            \$this->parseClassName();
        }

        return \$this->namespace;
    }

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
        if (null === \$this->path) {
            \$reflected = new \\ReflectionObject(\$this);
            \$this->path = \\dirname(\$reflected->getFileName());
        }

        return \$this->path;
    }

    /**
     * Returns the bundle name (the class short name).
     */
    final public function getName(): string
    {
        if (null === \$this->name) {
            \$this->parseClassName();
        }

        return \$this->name;
    }

    public function registerCommands(Application \$application)
    {
    }

    /**
     * Returns the bundle's container extension class.
     *
     * @return string
     */
    protected function getContainerExtensionClass()
    {
        \$basename = preg_replace('/Bundle\$/', '', \$this->getName());

        return \$this->getNamespace().'\\\\DependencyInjection\\\\'.\$basename.'Extension';
    }

    /**
     * Creates the bundle's container extension.
     *
     * @return ExtensionInterface|null
     */
    protected function createContainerExtension()
    {
        return class_exists(\$class = \$this->getContainerExtensionClass()) ? new \$class() : null;
    }

    private function parseClassName()
    {
        \$pos = strrpos(static::class, '\\\\');
        \$this->namespace = false === \$pos ? '' : substr(static::class, 0, \$pos);
        if (null === \$this->name) {
            \$this->name = false === \$pos ? static::class : substr(static::class, \$pos + 1);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/Bundle/Bundle.php";
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

namespace Symfony\\Component\\HttpKernel\\Bundle;

use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ContainerAwareTrait;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface;

/**
 * An implementation of BundleInterface that adds a few conventions for DependencyInjection extensions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Bundle implements BundleInterface
{
    use ContainerAwareTrait;

    protected \$name;
    protected \$extension;
    protected \$path;
    private \$namespace;

    /**
     * {@inheritdoc}
     */
    public function boot()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function shutdown()
    {
    }

    /**
     * {@inheritdoc}
     *
     * This method can be overridden to register compilation passes,
     * other extensions, ...
     */
    public function build(ContainerBuilder \$container)
    {
    }

    /**
     * Returns the bundle's container extension.
     *
     * @return ExtensionInterface|null The container extension
     *
     * @throws \\LogicException
     */
    public function getContainerExtension()
    {
        if (null === \$this->extension) {
            \$extension = \$this->createContainerExtension();

            if (null !== \$extension) {
                if (!\$extension instanceof ExtensionInterface) {
                    throw new \\LogicException(sprintf('Extension %s must implement Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface.', \\get_class(\$extension)));
                }

                // check naming convention
                \$basename = preg_replace('/Bundle\$/', '', \$this->getName());
                \$expectedAlias = Container::underscore(\$basename);

                if (\$expectedAlias != \$extension->getAlias()) {
                    throw new \\LogicException(sprintf('Users will expect the alias of the default extension of a bundle to be the underscored version of the bundle name (\"%s\"). You can override \"Bundle::getContainerExtension()\" if you want to use \"%s\" or another alias.', \$expectedAlias, \$extension->getAlias()));
                }

                \$this->extension = \$extension;
            } else {
                \$this->extension = false;
            }
        }

        return \$this->extension ?: null;
    }

    /**
     * {@inheritdoc}
     */
    public function getNamespace()
    {
        if (null === \$this->namespace) {
            \$this->parseClassName();
        }

        return \$this->namespace;
    }

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
        if (null === \$this->path) {
            \$reflected = new \\ReflectionObject(\$this);
            \$this->path = \\dirname(\$reflected->getFileName());
        }

        return \$this->path;
    }

    /**
     * Returns the bundle name (the class short name).
     */
    final public function getName(): string
    {
        if (null === \$this->name) {
            \$this->parseClassName();
        }

        return \$this->name;
    }

    public function registerCommands(Application \$application)
    {
    }

    /**
     * Returns the bundle's container extension class.
     *
     * @return string
     */
    protected function getContainerExtensionClass()
    {
        \$basename = preg_replace('/Bundle\$/', '', \$this->getName());

        return \$this->getNamespace().'\\\\DependencyInjection\\\\'.\$basename.'Extension';
    }

    /**
     * Creates the bundle's container extension.
     *
     * @return ExtensionInterface|null
     */
    protected function createContainerExtension()
    {
        return class_exists(\$class = \$this->getContainerExtensionClass()) ? new \$class() : null;
    }

    private function parseClassName()
    {
        \$pos = strrpos(static::class, '\\\\');
        \$this->namespace = false === \$pos ? '' : substr(static::class, 0, \$pos);
        if (null === \$this->name) {
            \$this->name = false === \$pos ? static::class : substr(static::class, \$pos + 1);
        }
    }
}
", "@app/vendor/symfony/http-kernel/Bundle/Bundle.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\Bundle\\Bundle.php");
    }
}
