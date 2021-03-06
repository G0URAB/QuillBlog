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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Factory/LazyLoadingGhostFactory.php */
class __TwigTemplate_e19396a04a8f3e53200f82c02f3a9c63790c8534492e652080e3fd4c446b2331 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Factory/LazyLoadingGhostFactory.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Factory;

use Closure;
use ProxyManager\\Proxy\\GhostObjectInterface;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhostGenerator;
use ProxyManager\\ProxyGenerator\\ProxyGeneratorInterface;
use ProxyManager\\Signature\\Exception\\InvalidSignatureException;
use ProxyManager\\Signature\\Exception\\MissingSignatureException;

/**
 * Factory responsible of producing ghost instances
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class LazyLoadingGhostFactory extends AbstractBaseFactory
{
    /**
     * @var \\ProxyManager\\ProxyGenerator\\LazyLoadingGhostGenerator|null
     */
    private \$generator;

    /**
     * {@inheritDoc}
     */
    protected function getGenerator() : ProxyGeneratorInterface
    {
        return \$this->generator ?: \$this->generator = new LazyLoadingGhostGenerator();
    }

    /**
     * Creates a new lazy proxy instance of the given class with
     * the given initializer
     *
     * Please refer to the following documentation when using this method:
     *
     * @link https://github.com/Ocramius/ProxyManager/blob/master/docs/lazy-loading-ghost-object.md
     *
     * @param string  \$className   name of the class to be proxied
     * @param Closure \$initializer initializer to be passed to the proxy. The initializer closure should have following
     *                             signature:
     *
     *                             <code>
     *                             \$initializer = function (
     *                                 GhostObjectInterface \$proxy,
     *                                 string \$method,
     *                                 array \$parameters,
     *                                 & \$initializer,
     *                                 array \$properties
     *                             ) {};
     *                             </code>
     *
     *                             Where:
     *                              - \$proxy is the proxy instance on which the initializer is acting
     *                              - \$method is the name of the method that triggered the lazy initialization
     *                              - \$parameters are the parameters that were passed to \$method
     *                              - \$initializer by-ref initializer - should be assigned null in the initializer body
     *                              - \$properties a by-ref map of the properties of the object, indexed by PHP
     *                                            internal property name. Assign values to it to initialize the
     *                                            object state
     *
     * @param mixed[] \$proxyOptions a set of options to be used when generating the proxy. Currently supports only
     *                              key \"skippedProperties\", which allows to skip lazy-loading of some properties.
     *                              \"skippedProperties\" is a string[], containing a list of properties referenced
     *                              via PHP's internal property name (i.e. \"\\0ClassName\\0propertyName\")
     *
     * @throws MissingSignatureException
     * @throws InvalidSignatureException
     * @throws \\OutOfBoundsException
     */
    public function createProxy(
        string \$className,
        Closure \$initializer,
        array \$proxyOptions = []
    ) : GhostObjectInterface {
        \$proxyClassName = \$this->generateProxy(\$className, \$proxyOptions);

        return \$proxyClassName::staticProxyConstructor(\$initializer);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Factory/LazyLoadingGhostFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Factory;

use Closure;
use ProxyManager\\Proxy\\GhostObjectInterface;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhostGenerator;
use ProxyManager\\ProxyGenerator\\ProxyGeneratorInterface;
use ProxyManager\\Signature\\Exception\\InvalidSignatureException;
use ProxyManager\\Signature\\Exception\\MissingSignatureException;

/**
 * Factory responsible of producing ghost instances
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class LazyLoadingGhostFactory extends AbstractBaseFactory
{
    /**
     * @var \\ProxyManager\\ProxyGenerator\\LazyLoadingGhostGenerator|null
     */
    private \$generator;

    /**
     * {@inheritDoc}
     */
    protected function getGenerator() : ProxyGeneratorInterface
    {
        return \$this->generator ?: \$this->generator = new LazyLoadingGhostGenerator();
    }

    /**
     * Creates a new lazy proxy instance of the given class with
     * the given initializer
     *
     * Please refer to the following documentation when using this method:
     *
     * @link https://github.com/Ocramius/ProxyManager/blob/master/docs/lazy-loading-ghost-object.md
     *
     * @param string  \$className   name of the class to be proxied
     * @param Closure \$initializer initializer to be passed to the proxy. The initializer closure should have following
     *                             signature:
     *
     *                             <code>
     *                             \$initializer = function (
     *                                 GhostObjectInterface \$proxy,
     *                                 string \$method,
     *                                 array \$parameters,
     *                                 & \$initializer,
     *                                 array \$properties
     *                             ) {};
     *                             </code>
     *
     *                             Where:
     *                              - \$proxy is the proxy instance on which the initializer is acting
     *                              - \$method is the name of the method that triggered the lazy initialization
     *                              - \$parameters are the parameters that were passed to \$method
     *                              - \$initializer by-ref initializer - should be assigned null in the initializer body
     *                              - \$properties a by-ref map of the properties of the object, indexed by PHP
     *                                            internal property name. Assign values to it to initialize the
     *                                            object state
     *
     * @param mixed[] \$proxyOptions a set of options to be used when generating the proxy. Currently supports only
     *                              key \"skippedProperties\", which allows to skip lazy-loading of some properties.
     *                              \"skippedProperties\" is a string[], containing a list of properties referenced
     *                              via PHP's internal property name (i.e. \"\\0ClassName\\0propertyName\")
     *
     * @throws MissingSignatureException
     * @throws InvalidSignatureException
     * @throws \\OutOfBoundsException
     */
    public function createProxy(
        string \$className,
        Closure \$initializer,
        array \$proxyOptions = []
    ) : GhostObjectInterface {
        \$proxyClassName = \$this->generateProxy(\$className, \$proxyOptions);

        return \$proxyClassName::staticProxyConstructor(\$initializer);
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Factory/LazyLoadingGhostFactory.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Factory\\LazyLoadingGhostFactory.php");
    }
}
