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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Proxy/LazyLoadingInterface.php */
class __TwigTemplate_7c1b7b513d3f9b87d55a2bb59b5ae586448150a6f91317e237e9f2dfec696906 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Proxy/LazyLoadingInterface.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Proxy;

/**
 * Lazy loading object identifier
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface LazyLoadingInterface extends ProxyInterface
{
    /**
     * Set or unset the initializer for the proxy instance
     *
     * @link https://github.com/Ocramius/ProxyManager/blob/master/docs/lazy-loading-value-holder.md#lazy-initialization
     *
     * An initializer should have a signature like following:
     *
     * <code>
     * \$initializer = function (& \$wrappedObject, \$proxy, string \$method, array \$parameters, & \$initializer) {};
     * </code>
     *
     * @param \\Closure|null \$initializer
     *
     * @return mixed
     */
    public function setProxyInitializer(\\Closure \$initializer = null);

    /**
     * @return \\Closure|null
     */
    public function getProxyInitializer();

    /**
     * Force initialization of the proxy
     *
     * @return bool true if the proxy could be initialized
     */
    public function initializeProxy() : bool;

    /**
     * Retrieves current initialization status of the proxy
     */
    public function isProxyInitialized() : bool;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Proxy/LazyLoadingInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Proxy;

/**
 * Lazy loading object identifier
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface LazyLoadingInterface extends ProxyInterface
{
    /**
     * Set or unset the initializer for the proxy instance
     *
     * @link https://github.com/Ocramius/ProxyManager/blob/master/docs/lazy-loading-value-holder.md#lazy-initialization
     *
     * An initializer should have a signature like following:
     *
     * <code>
     * \$initializer = function (& \$wrappedObject, \$proxy, string \$method, array \$parameters, & \$initializer) {};
     * </code>
     *
     * @param \\Closure|null \$initializer
     *
     * @return mixed
     */
    public function setProxyInitializer(\\Closure \$initializer = null);

    /**
     * @return \\Closure|null
     */
    public function getProxyInitializer();

    /**
     * Force initialization of the proxy
     *
     * @return bool true if the proxy could be initialized
     */
    public function initializeProxy() : bool;

    /**
     * Retrieves current initialization status of the proxy
     */
    public function isProxyInitialized() : bool;
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Proxy/LazyLoadingInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Proxy\\LazyLoadingInterface.php");
    }
}
