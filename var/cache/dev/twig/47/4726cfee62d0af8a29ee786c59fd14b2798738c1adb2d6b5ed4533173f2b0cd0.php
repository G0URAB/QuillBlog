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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Assertion/CanProxyAssertion.php */
class __TwigTemplate_9cd7d9af848826f6151672a1e93962500d4e493571dd4713ba32d4d67d3efc41 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Assertion/CanProxyAssertion.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\Assertion;

use BadMethodCallException;
use ProxyManager\\Exception\\InvalidProxiedClassException;
use ReflectionClass;
use ReflectionMethod;

/**
 * Assertion that verifies that a class can be proxied
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class CanProxyAssertion
{
    /**
     * Disabled constructor: not meant to be instantiated
     *
     * @throws BadMethodCallException
     */
    public function __construct()
    {
        throw new BadMethodCallException('Unsupported constructor.');
    }

    /**
     * @param ReflectionClass \$originalClass
     * @param bool            \$allowInterfaces
     *
     * @throws InvalidProxiedClassException
     */
    public static function assertClassCanBeProxied(ReflectionClass \$originalClass, bool \$allowInterfaces = true) : void
    {
        self::isNotFinal(\$originalClass);
        self::hasNoAbstractProtectedMethods(\$originalClass);

        if (! \$allowInterfaces) {
            self::isNotInterface(\$originalClass);
        }
    }

    /**
     * @param ReflectionClass \$originalClass
     *
     * @throws InvalidProxiedClassException
     */
    private static function isNotFinal(ReflectionClass \$originalClass) : void
    {
        if (\$originalClass->isFinal()) {
            throw InvalidProxiedClassException::finalClassNotSupported(\$originalClass);
        }
    }

    /**
     * @param ReflectionClass \$originalClass
     *
     * @throws InvalidProxiedClassException
     */
    private static function hasNoAbstractProtectedMethods(ReflectionClass \$originalClass) : void
    {
        \$protectedAbstract = array_filter(
            \$originalClass->getMethods(),
            function (ReflectionMethod \$method) : bool {
                return \$method->isAbstract() && \$method->isProtected();
            }
        );

        if (\$protectedAbstract) {
            throw InvalidProxiedClassException::abstractProtectedMethodsNotSupported(\$originalClass);
        }
    }

    /**
     * @param ReflectionClass \$originalClass
     *
     * @throws InvalidProxiedClassException
     */
    private static function isNotInterface(ReflectionClass \$originalClass) : void
    {
        if (\$originalClass->isInterface()) {
            throw InvalidProxiedClassException::interfaceNotSupported(\$originalClass);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Assertion/CanProxyAssertion.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\Assertion;

use BadMethodCallException;
use ProxyManager\\Exception\\InvalidProxiedClassException;
use ReflectionClass;
use ReflectionMethod;

/**
 * Assertion that verifies that a class can be proxied
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class CanProxyAssertion
{
    /**
     * Disabled constructor: not meant to be instantiated
     *
     * @throws BadMethodCallException
     */
    public function __construct()
    {
        throw new BadMethodCallException('Unsupported constructor.');
    }

    /**
     * @param ReflectionClass \$originalClass
     * @param bool            \$allowInterfaces
     *
     * @throws InvalidProxiedClassException
     */
    public static function assertClassCanBeProxied(ReflectionClass \$originalClass, bool \$allowInterfaces = true) : void
    {
        self::isNotFinal(\$originalClass);
        self::hasNoAbstractProtectedMethods(\$originalClass);

        if (! \$allowInterfaces) {
            self::isNotInterface(\$originalClass);
        }
    }

    /**
     * @param ReflectionClass \$originalClass
     *
     * @throws InvalidProxiedClassException
     */
    private static function isNotFinal(ReflectionClass \$originalClass) : void
    {
        if (\$originalClass->isFinal()) {
            throw InvalidProxiedClassException::finalClassNotSupported(\$originalClass);
        }
    }

    /**
     * @param ReflectionClass \$originalClass
     *
     * @throws InvalidProxiedClassException
     */
    private static function hasNoAbstractProtectedMethods(ReflectionClass \$originalClass) : void
    {
        \$protectedAbstract = array_filter(
            \$originalClass->getMethods(),
            function (ReflectionMethod \$method) : bool {
                return \$method->isAbstract() && \$method->isProtected();
            }
        );

        if (\$protectedAbstract) {
            throw InvalidProxiedClassException::abstractProtectedMethodsNotSupported(\$originalClass);
        }
    }

    /**
     * @param ReflectionClass \$originalClass
     *
     * @throws InvalidProxiedClassException
     */
    private static function isNotInterface(ReflectionClass \$originalClass) : void
    {
        if (\$originalClass->isInterface()) {
            throw InvalidProxiedClassException::interfaceNotSupported(\$originalClass);
        }
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Assertion/CanProxyAssertion.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\ProxyGenerator\\Assertion\\CanProxyAssertion.php");
    }
}
