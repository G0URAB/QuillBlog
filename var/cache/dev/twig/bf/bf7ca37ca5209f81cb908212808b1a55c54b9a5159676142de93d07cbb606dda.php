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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Inflector/ClassNameInflectorInterface.php */
class __TwigTemplate_7aeae4b865a9f8c24e75ce581e077e54f3a0f571e01ba16d24bdfd562d66a707 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Inflector/ClassNameInflectorInterface.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Inflector;

/**
 * Interface for a proxy- to user-class and user- to proxy-class name inflector
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface ClassNameInflectorInterface
{
    /**
     * Marker for proxy classes - classes containing this marker are considered proxies
     */
    const PROXY_MARKER = '__PM__';

    /**
     * Retrieve the class name of a user-defined class
     */
    public function getUserClassName(string \$className) : string;

    /**
     * Retrieve the class name of the proxy for the given user-defined class name
     *
     * @param string \$className
     * @param array  \$options   arbitrary options to be used for the generated class name
     */
    public function getProxyClassName(string \$className, array \$options = []) : string;

    /**
     * Retrieve whether the provided class name is a proxy
     */
    public function isProxyClassName(string \$className) : bool;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Inflector/ClassNameInflectorInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Inflector;

/**
 * Interface for a proxy- to user-class and user- to proxy-class name inflector
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
interface ClassNameInflectorInterface
{
    /**
     * Marker for proxy classes - classes containing this marker are considered proxies
     */
    const PROXY_MARKER = '__PM__';

    /**
     * Retrieve the class name of a user-defined class
     */
    public function getUserClassName(string \$className) : string;

    /**
     * Retrieve the class name of the proxy for the given user-defined class name
     *
     * @param string \$className
     * @param array  \$options   arbitrary options to be used for the generated class name
     */
    public function getProxyClassName(string \$className, array \$options = []) : string;

    /**
     * Retrieve whether the provided class name is a proxy
     */
    public function isProxyClassName(string \$className) : bool;
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Inflector/ClassNameInflectorInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Inflector\\ClassNameInflectorInterface.php");
    }
}
