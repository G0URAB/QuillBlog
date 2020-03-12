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

/* @app/vendor/symfony/doctrine-bridge/ManagerRegistry.php */
class __TwigTemplate_a294681f2a34d7bbe4753db5f8c4c45a0152ac98bb038b9a45d88e15c34aa2d9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/doctrine-bridge/ManagerRegistry.php"));

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

namespace Symfony\\Bridge\\Doctrine;

use Doctrine\\Persistence\\AbstractManagerRegistry;
use ProxyManager\\Proxy\\LazyLoadingInterface;
use Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator;
use Symfony\\Component\\DependencyInjection\\Container;

/**
 * References Doctrine connections and entity/document managers.
 *
 * @author  Lukas Kahwe Smith <smith@pooteeweet.org>
 */
abstract class ManagerRegistry extends AbstractManagerRegistry
{
    /**
     * @var Container
     */
    protected \$container;

    /**
     * {@inheritdoc}
     *
     * @return object
     */
    protected function getService(\$name)
    {
        return \$this->container->get(\$name);
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    protected function resetService(\$name)
    {
        if (!\$this->container->initialized(\$name)) {
            return;
        }
        \$manager = \$this->container->get(\$name);

        if (!\$manager instanceof LazyLoadingInterface) {
            throw new \\LogicException('Resetting a non-lazy manager service is not supported. '.(interface_exists(LazyLoadingInterface::class) && class_exists(RuntimeInstantiator::class) ? sprintf('Declare the \"%s\" service as lazy.', \$name) : 'Try running \"composer require symfony/proxy-manager-bridge\".'));
        }
        \$manager->setProxyInitializer(\\Closure::bind(
            function (&\$wrappedInstance, LazyLoadingInterface \$manager) use (\$name) {
                if (isset(\$this->aliases[\$name])) {
                    \$name = \$this->aliases[\$name];
                }
                if (isset(\$this->fileMap[\$name])) {
                    \$wrappedInstance = \$this->load(\$this->fileMap[\$name]);
                } else {
                    \$wrappedInstance = \$this->{\$this->methodMap[\$name]}(false);
                }

                \$manager->setProxyInitializer(null);

                return true;
            },
            \$this->container,
            Container::class
        ));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/doctrine-bridge/ManagerRegistry.php";
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

namespace Symfony\\Bridge\\Doctrine;

use Doctrine\\Persistence\\AbstractManagerRegistry;
use ProxyManager\\Proxy\\LazyLoadingInterface;
use Symfony\\Bridge\\ProxyManager\\LazyProxy\\Instantiator\\RuntimeInstantiator;
use Symfony\\Component\\DependencyInjection\\Container;

/**
 * References Doctrine connections and entity/document managers.
 *
 * @author  Lukas Kahwe Smith <smith@pooteeweet.org>
 */
abstract class ManagerRegistry extends AbstractManagerRegistry
{
    /**
     * @var Container
     */
    protected \$container;

    /**
     * {@inheritdoc}
     *
     * @return object
     */
    protected function getService(\$name)
    {
        return \$this->container->get(\$name);
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    protected function resetService(\$name)
    {
        if (!\$this->container->initialized(\$name)) {
            return;
        }
        \$manager = \$this->container->get(\$name);

        if (!\$manager instanceof LazyLoadingInterface) {
            throw new \\LogicException('Resetting a non-lazy manager service is not supported. '.(interface_exists(LazyLoadingInterface::class) && class_exists(RuntimeInstantiator::class) ? sprintf('Declare the \"%s\" service as lazy.', \$name) : 'Try running \"composer require symfony/proxy-manager-bridge\".'));
        }
        \$manager->setProxyInitializer(\\Closure::bind(
            function (&\$wrappedInstance, LazyLoadingInterface \$manager) use (\$name) {
                if (isset(\$this->aliases[\$name])) {
                    \$name = \$this->aliases[\$name];
                }
                if (isset(\$this->fileMap[\$name])) {
                    \$wrappedInstance = \$this->load(\$this->fileMap[\$name]);
                } else {
                    \$wrappedInstance = \$this->{\$this->methodMap[\$name]}(false);
                }

                \$manager->setProxyInitializer(null);

                return true;
            },
            \$this->container,
            Container::class
        ));
    }
}
", "@app/vendor/symfony/doctrine-bridge/ManagerRegistry.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\doctrine-bridge\\ManagerRegistry.php");
    }
}
