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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/Util/InterceptorGenerator.php */
class __TwigTemplate_5c2251f75102f2f2907b651c125f1a080b91dbe58f87f94c0643e0538be34221 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/Util/InterceptorGenerator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\Util;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\Generator\\Util\\ProxiedMethodReturnExpression;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Utility to create pre- and post- method interceptors around a given method body
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 *
 * @private - this class is just here as a small utility for this component, don't use it in your own code
 */
class InterceptorGenerator
{
    /**
     * @param string                                  \$methodBody         the body of the previously generated code.
     *                                                                    It MUST assign the return value to a variable
     *                                                                    `\$returnValue` instead of directly returning
     * @param \\ProxyManager\\Generator\\MethodGenerator \$method
     * @param \\Zend\\Code\\Generator\\PropertyGenerator  \$prefixInterceptors
     * @param \\Zend\\Code\\Generator\\PropertyGenerator  \$suffixInterceptors
     * @param \\ReflectionMethod|null                  \$originalMethod
     */
    public static function createInterceptedMethodBody(
        string \$methodBody,
        MethodGenerator \$method,
        PropertyGenerator \$prefixInterceptors,
        PropertyGenerator \$suffixInterceptors,
        ?\\ReflectionMethod \$originalMethod
    ) : string {
        \$name                   = var_export(\$method->getName(), true);
        \$prefixInterceptorsName = \$prefixInterceptors->getName();
        \$suffixInterceptorsName = \$suffixInterceptors->getName();
        \$params                 = [];

        foreach (\$method->getParameters() as \$parameter) {
            \$parameterName = \$parameter->getName();
            \$params[]      = var_export(\$parameterName, true) . ' => \$' . \$parameter->getName();
        }

        \$paramsString = 'array(' . implode(', ', \$params) . ')';

        return \"if (isset(\\\$this->\$prefixInterceptorsName\" . \"[\$name])) {\\n\"
            . \"    \\\$returnEarly       = false;\\n\"
            . \"    \\\$prefixReturnValue = \\\$this->\$prefixInterceptorsName\" . \"[\$name]->__invoke(\"
            . \"\\\$this, \\\$this, \$name, \$paramsString, \\\$returnEarly);\\n\\n\"
            . \"    if (\\\$returnEarly) {\\n\"
            . '        ' . ProxiedMethodReturnExpression::generate('\$prefixReturnValue', \$originalMethod) . \"\\n\"
            . \"    }\\n\"
            . \"}\\n\\n\"
            . \$methodBody . \"\\n\\n\"
            . \"if (isset(\\\$this->\$suffixInterceptorsName\" . \"[\$name])) {\\n\"
            . \"    \\\$returnEarly       = false;\\n\"
            . \"    \\\$suffixReturnValue = \\\$this->\$suffixInterceptorsName\" . \"[\$name]->__invoke(\"
            . \"\\\$this, \\\$this, \$name, \$paramsString, \\\$returnValue, \\\$returnEarly);\\n\\n\"
            . \"    if (\\\$returnEarly) {\\n\"
            . '        ' . ProxiedMethodReturnExpression::generate('\$suffixReturnValue', \$originalMethod) . \"\\n\"
            . \"    }\\n\"
            . \"}\\n\\n\"
            . ProxiedMethodReturnExpression::generate('\$returnValue', \$originalMethod);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/Util/InterceptorGenerator.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\Util;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\Generator\\Util\\ProxiedMethodReturnExpression;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Utility to create pre- and post- method interceptors around a given method body
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 *
 * @private - this class is just here as a small utility for this component, don't use it in your own code
 */
class InterceptorGenerator
{
    /**
     * @param string                                  \$methodBody         the body of the previously generated code.
     *                                                                    It MUST assign the return value to a variable
     *                                                                    `\$returnValue` instead of directly returning
     * @param \\ProxyManager\\Generator\\MethodGenerator \$method
     * @param \\Zend\\Code\\Generator\\PropertyGenerator  \$prefixInterceptors
     * @param \\Zend\\Code\\Generator\\PropertyGenerator  \$suffixInterceptors
     * @param \\ReflectionMethod|null                  \$originalMethod
     */
    public static function createInterceptedMethodBody(
        string \$methodBody,
        MethodGenerator \$method,
        PropertyGenerator \$prefixInterceptors,
        PropertyGenerator \$suffixInterceptors,
        ?\\ReflectionMethod \$originalMethod
    ) : string {
        \$name                   = var_export(\$method->getName(), true);
        \$prefixInterceptorsName = \$prefixInterceptors->getName();
        \$suffixInterceptorsName = \$suffixInterceptors->getName();
        \$params                 = [];

        foreach (\$method->getParameters() as \$parameter) {
            \$parameterName = \$parameter->getName();
            \$params[]      = var_export(\$parameterName, true) . ' => \$' . \$parameter->getName();
        }

        \$paramsString = 'array(' . implode(', ', \$params) . ')';

        return \"if (isset(\\\$this->\$prefixInterceptorsName\" . \"[\$name])) {\\n\"
            . \"    \\\$returnEarly       = false;\\n\"
            . \"    \\\$prefixReturnValue = \\\$this->\$prefixInterceptorsName\" . \"[\$name]->__invoke(\"
            . \"\\\$this, \\\$this, \$name, \$paramsString, \\\$returnEarly);\\n\\n\"
            . \"    if (\\\$returnEarly) {\\n\"
            . '        ' . ProxiedMethodReturnExpression::generate('\$prefixReturnValue', \$originalMethod) . \"\\n\"
            . \"    }\\n\"
            . \"}\\n\\n\"
            . \$methodBody . \"\\n\\n\"
            . \"if (isset(\\\$this->\$suffixInterceptorsName\" . \"[\$name])) {\\n\"
            . \"    \\\$returnEarly       = false;\\n\"
            . \"    \\\$suffixReturnValue = \\\$this->\$suffixInterceptorsName\" . \"[\$name]->__invoke(\"
            . \"\\\$this, \\\$this, \$name, \$paramsString, \\\$returnValue, \\\$returnEarly);\\n\\n\"
            . \"    if (\\\$returnEarly) {\\n\"
            . '        ' . ProxiedMethodReturnExpression::generate('\$suffixReturnValue', \$originalMethod) . \"\\n\"
            . \"    }\\n\"
            . \"}\\n\\n\"
            . ProxiedMethodReturnExpression::generate('\$returnValue', \$originalMethod);
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorScopeLocalizer/MethodGenerator/Util/InterceptorGenerator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\ProxyGenerator\\AccessInterceptorScopeLocalizer\\MethodGenerator\\Util\\InterceptorGenerator.php");
    }
}
