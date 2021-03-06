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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizerGenerator.php */
class __TwigTemplate_589145d72750564d6de3a9898967db82e0e1970a69d7e5718072e341ce9c5878 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizerGenerator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator;

use ProxyManager\\Exception\\InvalidProxiedClassException;
use ProxyManager\\Generator\\Util\\ClassGeneratorUtils;
use ProxyManager\\Proxy\\AccessInterceptorInterface;
use ProxyManager\\ProxyGenerator\\AccessInterceptor\\MethodGenerator\\SetMethodPrefixInterceptor;
use ProxyManager\\ProxyGenerator\\AccessInterceptor\\MethodGenerator\\SetMethodSuffixInterceptor;
use ProxyManager\\ProxyGenerator\\AccessInterceptor\\PropertyGenerator\\MethodPrefixInterceptors;
use ProxyManager\\ProxyGenerator\\AccessInterceptor\\PropertyGenerator\\MethodSuffixInterceptors;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\BindProxyProperties;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\InterceptedMethod;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\MagicClone;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\MagicGet;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\MagicIsset;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\MagicSet;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\MagicSleep;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\MagicUnset;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\StaticProxyConstructor;
use ProxyManager\\ProxyGenerator\\Assertion\\CanProxyAssertion;
use ProxyManager\\ProxyGenerator\\Util\\ProxiedMethodsFilter;
use ReflectionClass;
use ReflectionMethod;
use Zend\\Code\\Generator\\ClassGenerator;
use Zend\\Code\\Generator\\MethodGenerator;
use Zend\\Code\\Reflection\\MethodReflection;

/**
 * Generator for proxies implementing {@see \\ProxyManager\\Proxy\\ValueHolderInterface}
 * and localizing scope of the proxied object at instantiation
 *
 * {@inheritDoc}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class AccessInterceptorScopeLocalizerGenerator implements ProxyGeneratorInterface
{
    /**
     * {@inheritDoc}
     *
     * @throws \\InvalidArgumentException
     * @throws InvalidProxiedClassException
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function generate(ReflectionClass \$originalClass, ClassGenerator \$classGenerator)
    {
        CanProxyAssertion::assertClassCanBeProxied(\$originalClass, false);

        \$classGenerator->setExtendedClass(\$originalClass->getName());
        \$classGenerator->setImplementedInterfaces([AccessInterceptorInterface::class]);
        \$classGenerator->addPropertyFromGenerator(\$prefixInterceptors = new MethodPrefixInterceptors());
        \$classGenerator->addPropertyFromGenerator(\$suffixInterceptors = new MethodSuffixInterceptors());

        array_map(
            function (MethodGenerator \$generatedMethod) use (\$originalClass, \$classGenerator) {
                ClassGeneratorUtils::addMethodIfNotFinal(\$originalClass, \$classGenerator, \$generatedMethod);
            },
            array_merge(
                array_map(
                    \$this->buildMethodInterceptor(\$prefixInterceptors, \$suffixInterceptors),
                    ProxiedMethodsFilter::getProxiedMethods(
                        \$originalClass,
                        ['__get', '__set', '__isset', '__unset', '__clone', '__sleep']
                    )
                ),
                [
                    new StaticProxyConstructor(\$originalClass),
                    new BindProxyProperties(\$originalClass, \$prefixInterceptors, \$suffixInterceptors),
                    new SetMethodPrefixInterceptor(\$prefixInterceptors),
                    new SetMethodSuffixInterceptor(\$suffixInterceptors),
                    new MagicGet(\$originalClass, \$prefixInterceptors, \$suffixInterceptors),
                    new MagicSet(\$originalClass, \$prefixInterceptors, \$suffixInterceptors),
                    new MagicIsset(\$originalClass, \$prefixInterceptors, \$suffixInterceptors),
                    new MagicUnset(\$originalClass, \$prefixInterceptors, \$suffixInterceptors),
                    new MagicSleep(\$originalClass, \$prefixInterceptors, \$suffixInterceptors),
                    new MagicClone(\$originalClass, \$prefixInterceptors, \$suffixInterceptors),
                ]
            )
        );
    }

    private function buildMethodInterceptor(
        MethodPrefixInterceptors \$prefixInterceptors,
        MethodSuffixInterceptors \$suffixInterceptors
    ) : callable {
        return function (ReflectionMethod \$method) use (\$prefixInterceptors, \$suffixInterceptors) : InterceptedMethod {
            return InterceptedMethod::generateMethod(
                new MethodReflection(\$method->getDeclaringClass()->getName(), \$method->getName()),
                \$prefixInterceptors,
                \$suffixInterceptors
            );
        };
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizerGenerator.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator;

use ProxyManager\\Exception\\InvalidProxiedClassException;
use ProxyManager\\Generator\\Util\\ClassGeneratorUtils;
use ProxyManager\\Proxy\\AccessInterceptorInterface;
use ProxyManager\\ProxyGenerator\\AccessInterceptor\\MethodGenerator\\SetMethodPrefixInterceptor;
use ProxyManager\\ProxyGenerator\\AccessInterceptor\\MethodGenerator\\SetMethodSuffixInterceptor;
use ProxyManager\\ProxyGenerator\\AccessInterceptor\\PropertyGenerator\\MethodPrefixInterceptors;
use ProxyManager\\ProxyGenerator\\AccessInterceptor\\PropertyGenerator\\MethodSuffixInterceptors;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\BindProxyProperties;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\InterceptedMethod;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\MagicClone;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\MagicGet;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\MagicIsset;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\MagicSet;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\MagicSleep;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\MagicUnset;
use ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\StaticProxyConstructor;
use ProxyManager\\ProxyGenerator\\Assertion\\CanProxyAssertion;
use ProxyManager\\ProxyGenerator\\Util\\ProxiedMethodsFilter;
use ReflectionClass;
use ReflectionMethod;
use Zend\\Code\\Generator\\ClassGenerator;
use Zend\\Code\\Generator\\MethodGenerator;
use Zend\\Code\\Reflection\\MethodReflection;

/**
 * Generator for proxies implementing {@see \\ProxyManager\\Proxy\\ValueHolderInterface}
 * and localizing scope of the proxied object at instantiation
 *
 * {@inheritDoc}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class AccessInterceptorScopeLocalizerGenerator implements ProxyGeneratorInterface
{
    /**
     * {@inheritDoc}
     *
     * @throws \\InvalidArgumentException
     * @throws InvalidProxiedClassException
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function generate(ReflectionClass \$originalClass, ClassGenerator \$classGenerator)
    {
        CanProxyAssertion::assertClassCanBeProxied(\$originalClass, false);

        \$classGenerator->setExtendedClass(\$originalClass->getName());
        \$classGenerator->setImplementedInterfaces([AccessInterceptorInterface::class]);
        \$classGenerator->addPropertyFromGenerator(\$prefixInterceptors = new MethodPrefixInterceptors());
        \$classGenerator->addPropertyFromGenerator(\$suffixInterceptors = new MethodSuffixInterceptors());

        array_map(
            function (MethodGenerator \$generatedMethod) use (\$originalClass, \$classGenerator) {
                ClassGeneratorUtils::addMethodIfNotFinal(\$originalClass, \$classGenerator, \$generatedMethod);
            },
            array_merge(
                array_map(
                    \$this->buildMethodInterceptor(\$prefixInterceptors, \$suffixInterceptors),
                    ProxiedMethodsFilter::getProxiedMethods(
                        \$originalClass,
                        ['__get', '__set', '__isset', '__unset', '__clone', '__sleep']
                    )
                ),
                [
                    new StaticProxyConstructor(\$originalClass),
                    new BindProxyProperties(\$originalClass, \$prefixInterceptors, \$suffixInterceptors),
                    new SetMethodPrefixInterceptor(\$prefixInterceptors),
                    new SetMethodSuffixInterceptor(\$suffixInterceptors),
                    new MagicGet(\$originalClass, \$prefixInterceptors, \$suffixInterceptors),
                    new MagicSet(\$originalClass, \$prefixInterceptors, \$suffixInterceptors),
                    new MagicIsset(\$originalClass, \$prefixInterceptors, \$suffixInterceptors),
                    new MagicUnset(\$originalClass, \$prefixInterceptors, \$suffixInterceptors),
                    new MagicSleep(\$originalClass, \$prefixInterceptors, \$suffixInterceptors),
                    new MagicClone(\$originalClass, \$prefixInterceptors, \$suffixInterceptors),
                ]
            )
        );
    }

    private function buildMethodInterceptor(
        MethodPrefixInterceptors \$prefixInterceptors,
        MethodSuffixInterceptors \$suffixInterceptors
    ) : callable {
        return function (ReflectionMethod \$method) use (\$prefixInterceptors, \$suffixInterceptors) : InterceptedMethod {
            return InterceptedMethod::generateMethod(
                new MethodReflection(\$method->getDeclaringClass()->getName(), \$method->getName()),
                \$prefixInterceptors,
                \$suffixInterceptors
            );
        };
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizerGenerator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizerGenerator.php");
    }
}
