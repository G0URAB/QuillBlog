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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/ProxiedMethodsFilter.php */
class __TwigTemplate_01582e8205bb8d0b2dac9238e6a82691f6e77ac4bc7329f18664cf96a5c826f8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/ProxiedMethodsFilter.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\Util;

use ReflectionClass;
use ReflectionMethod;

/**
 * Utility class used to filter methods that can be proxied
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class ProxiedMethodsFilter
{
    /**
     * @var string[]
     */
    private static \$defaultExcluded = [
        '__get',
        '__set',
        '__isset',
        '__unset',
        '__clone',
        '__sleep',
        '__wakeup',
    ];

    /**
     * @param ReflectionClass \$class    reflection class from which methods should be extracted
     * @param string[]        \$excluded methods to be ignored
     *
     * @return ReflectionMethod[]
     */
    public static function getProxiedMethods(ReflectionClass \$class, array \$excluded = null) : array
    {
        return self::doFilter(\$class, (null === \$excluded) ? self::\$defaultExcluded : \$excluded);
    }

    /**
     * @param ReflectionClass \$class    reflection class from which methods should be extracted
     * @param string[]        \$excluded methods to be ignored
     *
     * @return ReflectionMethod[]
     */
    public static function getAbstractProxiedMethods(ReflectionClass \$class, array \$excluded = null) : array
    {
        return self::doFilter(\$class, (null === \$excluded) ? self::\$defaultExcluded : \$excluded, true);
    }

    /**
     * @param ReflectionClass \$class
     * @param string[]        \$excluded
     * @param bool            \$requireAbstract
     *
     * @return ReflectionMethod[]
     */
    private static function doFilter(ReflectionClass \$class, array \$excluded, bool \$requireAbstract = false) : array
    {
        \$ignored = array_flip(array_map('strtolower', \$excluded));

        return array_filter(
            \$class->getMethods(ReflectionMethod::IS_PUBLIC),
            function (ReflectionMethod \$method) use (\$ignored, \$requireAbstract) : bool {
                return (! \$requireAbstract || \$method->isAbstract()) && ! (
                    \\array_key_exists(strtolower(\$method->getName()), \$ignored)
                    || self::methodCannotBeProxied(\$method)
                );
            }
        );
    }

    /**
     * Checks whether the method cannot be proxied
     */
    private static function methodCannotBeProxied(ReflectionMethod \$method) : bool
    {
        return \$method->isConstructor() || \$method->isFinal() || \$method->isStatic();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/ProxiedMethodsFilter.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\Util;

use ReflectionClass;
use ReflectionMethod;

/**
 * Utility class used to filter methods that can be proxied
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class ProxiedMethodsFilter
{
    /**
     * @var string[]
     */
    private static \$defaultExcluded = [
        '__get',
        '__set',
        '__isset',
        '__unset',
        '__clone',
        '__sleep',
        '__wakeup',
    ];

    /**
     * @param ReflectionClass \$class    reflection class from which methods should be extracted
     * @param string[]        \$excluded methods to be ignored
     *
     * @return ReflectionMethod[]
     */
    public static function getProxiedMethods(ReflectionClass \$class, array \$excluded = null) : array
    {
        return self::doFilter(\$class, (null === \$excluded) ? self::\$defaultExcluded : \$excluded);
    }

    /**
     * @param ReflectionClass \$class    reflection class from which methods should be extracted
     * @param string[]        \$excluded methods to be ignored
     *
     * @return ReflectionMethod[]
     */
    public static function getAbstractProxiedMethods(ReflectionClass \$class, array \$excluded = null) : array
    {
        return self::doFilter(\$class, (null === \$excluded) ? self::\$defaultExcluded : \$excluded, true);
    }

    /**
     * @param ReflectionClass \$class
     * @param string[]        \$excluded
     * @param bool            \$requireAbstract
     *
     * @return ReflectionMethod[]
     */
    private static function doFilter(ReflectionClass \$class, array \$excluded, bool \$requireAbstract = false) : array
    {
        \$ignored = array_flip(array_map('strtolower', \$excluded));

        return array_filter(
            \$class->getMethods(ReflectionMethod::IS_PUBLIC),
            function (ReflectionMethod \$method) use (\$ignored, \$requireAbstract) : bool {
                return (! \$requireAbstract || \$method->isAbstract()) && ! (
                    \\array_key_exists(strtolower(\$method->getName()), \$ignored)
                    || self::methodCannotBeProxied(\$method)
                );
            }
        );
    }

    /**
     * Checks whether the method cannot be proxied
     */
    private static function methodCannotBeProxied(ReflectionMethod \$method) : bool
    {
        return \$method->isConstructor() || \$method->isFinal() || \$method->isStatic();
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/Util/ProxiedMethodsFilter.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\ProxyGenerator\\Util\\ProxiedMethodsFilter.php");
    }
}
