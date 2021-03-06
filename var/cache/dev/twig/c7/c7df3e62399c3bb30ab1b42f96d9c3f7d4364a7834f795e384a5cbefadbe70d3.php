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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/LazyLoadingMethodInterceptor.php */
class __TwigTemplate_c01029263a62c33250fe6ac12affd8167c1dbe2fb8bdbb9b4491f4c8c44b1016 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/LazyLoadingMethodInterceptor.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\Generator\\Util\\ProxiedMethodReturnExpression;
use Zend\\Code\\Generator\\PropertyGenerator;
use Zend\\Code\\Reflection\\MethodReflection;

/**
 * Method decorator for lazy loading value holder objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class LazyLoadingMethodInterceptor extends MethodGenerator
{
    /**
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public static function generateMethod(
        MethodReflection \$originalMethod,
        PropertyGenerator \$initializerProperty,
        PropertyGenerator \$valueHolderProperty
    ) : self {
        /* @var \$method self */
        \$method            = static::fromReflectionWithoutBodyAndDocBlock(\$originalMethod);
        \$initializerName   = \$initializerProperty->getName();
        \$valueHolderName   = \$valueHolderProperty->getName();
        \$parameters        = \$originalMethod->getParameters();
        \$methodName        = \$originalMethod->getName();
        \$initializerParams = [];
        \$forwardedParams   = [];

        foreach (\$parameters as \$parameter) {
            \$parameterName       = \$parameter->getName();
            \$variadicPrefix      = \$parameter->isVariadic() ? '...' : '';
            \$initializerParams[] = var_export(\$parameterName, true) . ' => \$' . \$parameterName;
            \$forwardedParams[]   = \$variadicPrefix . '\$' . \$parameterName;
        }

        \$method->setBody(
            '\$this->' . \$initializerName
            . ' && \$this->' . \$initializerName
            . '->__invoke(\$this->' . \$valueHolderName . ', \$this, ' . var_export(\$methodName, true)
            . ', array(' . implode(', ', \$initializerParams) .  '), \$this->' . \$initializerName . \");\\n\\n\"
            . ProxiedMethodReturnExpression::generate(
                '\$this->' . \$valueHolderName . '->' . \$methodName . '(' . implode(', ', \$forwardedParams) . ')',
                \$originalMethod
            )
        );

        return \$method;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/LazyLoadingMethodInterceptor.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\Generator\\Util\\ProxiedMethodReturnExpression;
use Zend\\Code\\Generator\\PropertyGenerator;
use Zend\\Code\\Reflection\\MethodReflection;

/**
 * Method decorator for lazy loading value holder objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class LazyLoadingMethodInterceptor extends MethodGenerator
{
    /**
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public static function generateMethod(
        MethodReflection \$originalMethod,
        PropertyGenerator \$initializerProperty,
        PropertyGenerator \$valueHolderProperty
    ) : self {
        /* @var \$method self */
        \$method            = static::fromReflectionWithoutBodyAndDocBlock(\$originalMethod);
        \$initializerName   = \$initializerProperty->getName();
        \$valueHolderName   = \$valueHolderProperty->getName();
        \$parameters        = \$originalMethod->getParameters();
        \$methodName        = \$originalMethod->getName();
        \$initializerParams = [];
        \$forwardedParams   = [];

        foreach (\$parameters as \$parameter) {
            \$parameterName       = \$parameter->getName();
            \$variadicPrefix      = \$parameter->isVariadic() ? '...' : '';
            \$initializerParams[] = var_export(\$parameterName, true) . ' => \$' . \$parameterName;
            \$forwardedParams[]   = \$variadicPrefix . '\$' . \$parameterName;
        }

        \$method->setBody(
            '\$this->' . \$initializerName
            . ' && \$this->' . \$initializerName
            . '->__invoke(\$this->' . \$valueHolderName . ', \$this, ' . var_export(\$methodName, true)
            . ', array(' . implode(', ', \$initializerParams) .  '), \$this->' . \$initializerName . \");\\n\\n\"
            . ProxiedMethodReturnExpression::generate(
                '\$this->' . \$valueHolderName . '->' . \$methodName . '(' . implode(', ', \$forwardedParams) . ')',
                \$originalMethod
            )
        );

        return \$method;
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/LazyLoadingMethodInterceptor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\LazyLoadingMethodInterceptor.php");
    }
}
