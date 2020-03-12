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

/* @app/vendor/symfony/framework-bundle/Test/TestContainer.php */
class __TwigTemplate_c2ee0a9dadd96a7468a84234928a74d7ca7cf6dcb10ae94cacc31163001a5eff extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/Test/TestContainer.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Test;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class TestContainer extends Container
{
    private \$kernel;
    private \$privateServicesLocatorId;

    public function __construct(KernelInterface \$kernel, string \$privateServicesLocatorId)
    {
        \$this->kernel = \$kernel;
        \$this->privateServicesLocatorId = \$privateServicesLocatorId;
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        \$this->getPublicContainer()->compile();
    }

    /**
     * {@inheritdoc}
     */
    public function isCompiled(): bool
    {
        return \$this->getPublicContainer()->isCompiled();
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag(): ParameterBagInterface
    {
        return \$this->getPublicContainer()->getParameterBag();
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter(string \$name)
    {
        return \$this->getPublicContainer()->getParameter(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter(string \$name): bool
    {
        return \$this->getPublicContainer()->hasParameter(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter(string \$name, \$value)
    {
        \$this->getPublicContainer()->setParameter(\$name, \$value);
    }

    /**
     * {@inheritdoc}
     */
    public function set(string \$id, \$service)
    {
        \$this->getPublicContainer()->set(\$id, \$service);
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$id): bool
    {
        return \$this->getPublicContainer()->has(\$id) || \$this->getPrivateContainer()->has(\$id);
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$id, int \$invalidBehavior = /* self::EXCEPTION_ON_INVALID_REFERENCE */ 1): ?object
    {
        return \$this->getPrivateContainer()->has(\$id) ? \$this->getPrivateContainer()->get(\$id) : \$this->getPublicContainer()->get(\$id, \$invalidBehavior);
    }

    /**
     * {@inheritdoc}
     */
    public function initialized(string \$id): bool
    {
        return \$this->getPublicContainer()->initialized(\$id);
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        // ignore the call
    }

    /**
     * {@inheritdoc}
     */
    public function getServiceIds(): array
    {
        return \$this->getPublicContainer()->getServiceIds();
    }

    /**
     * {@inheritdoc}
     */
    public function getRemovedIds(): array
    {
        return \$this->getPublicContainer()->getRemovedIds();
    }

    private function getPublicContainer(): Container
    {
        if (null === \$container = \$this->kernel->getContainer()) {
            throw new \\LogicException('Cannot access the container on a non-booted kernel. Did you forget to boot it?');
        }

        return \$container;
    }

    private function getPrivateContainer(): ContainerInterface
    {
        return \$this->getPublicContainer()->get(\$this->privateServicesLocatorId);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/Test/TestContainer.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Test;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class TestContainer extends Container
{
    private \$kernel;
    private \$privateServicesLocatorId;

    public function __construct(KernelInterface \$kernel, string \$privateServicesLocatorId)
    {
        \$this->kernel = \$kernel;
        \$this->privateServicesLocatorId = \$privateServicesLocatorId;
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        \$this->getPublicContainer()->compile();
    }

    /**
     * {@inheritdoc}
     */
    public function isCompiled(): bool
    {
        return \$this->getPublicContainer()->isCompiled();
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag(): ParameterBagInterface
    {
        return \$this->getPublicContainer()->getParameterBag();
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter(string \$name)
    {
        return \$this->getPublicContainer()->getParameter(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter(string \$name): bool
    {
        return \$this->getPublicContainer()->hasParameter(\$name);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter(string \$name, \$value)
    {
        \$this->getPublicContainer()->setParameter(\$name, \$value);
    }

    /**
     * {@inheritdoc}
     */
    public function set(string \$id, \$service)
    {
        \$this->getPublicContainer()->set(\$id, \$service);
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$id): bool
    {
        return \$this->getPublicContainer()->has(\$id) || \$this->getPrivateContainer()->has(\$id);
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$id, int \$invalidBehavior = /* self::EXCEPTION_ON_INVALID_REFERENCE */ 1): ?object
    {
        return \$this->getPrivateContainer()->has(\$id) ? \$this->getPrivateContainer()->get(\$id) : \$this->getPublicContainer()->get(\$id, \$invalidBehavior);
    }

    /**
     * {@inheritdoc}
     */
    public function initialized(string \$id): bool
    {
        return \$this->getPublicContainer()->initialized(\$id);
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        // ignore the call
    }

    /**
     * {@inheritdoc}
     */
    public function getServiceIds(): array
    {
        return \$this->getPublicContainer()->getServiceIds();
    }

    /**
     * {@inheritdoc}
     */
    public function getRemovedIds(): array
    {
        return \$this->getPublicContainer()->getRemovedIds();
    }

    private function getPublicContainer(): Container
    {
        if (null === \$container = \$this->kernel->getContainer()) {
            throw new \\LogicException('Cannot access the container on a non-booted kernel. Did you forget to boot it?');
        }

        return \$container;
    }

    private function getPrivateContainer(): ContainerInterface
    {
        return \$this->getPublicContainer()->get(\$this->privateServicesLocatorId);
    }
}
", "@app/vendor/symfony/framework-bundle/Test/TestContainer.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\Test\\TestContainer.php");
    }
}
