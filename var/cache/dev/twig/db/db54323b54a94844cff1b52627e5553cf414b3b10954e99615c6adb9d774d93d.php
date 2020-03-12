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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/MagicUnset.php */
class __TwigTemplate_9744af98e2fe91cc306101b78d1b0da5cd8f1a26a3ac0502b99245c43b95b851 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/MagicUnset.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator;

use ProxyManager\\Generator\\MagicMethodGenerator;
use ProxyManager\\ProxyGenerator\\Util\\GetMethodIfExists;
use Zend\\Code\\Generator\\ParameterGenerator;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\Util\\InterceptorGenerator;
use ProxyManager\\ProxyGenerator\\PropertyGenerator\\PublicPropertiesMap;
use ProxyManager\\ProxyGenerator\\Util\\PublicScopeSimulator;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Magic `__unset` for method interceptor value holder objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MagicUnset extends MagicMethodGenerator
{
    /**
     * Constructor
     * @param ReflectionClass     \$originalClass
     * @param PropertyGenerator   \$valueHolder
     * @param PropertyGenerator   \$prefixInterceptors
     * @param PropertyGenerator   \$suffixInterceptors
     * @param PublicPropertiesMap \$publicProperties
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     * @throws \\InvalidArgumentException
     */
    public function __construct(
        ReflectionClass \$originalClass,
        PropertyGenerator \$valueHolder,
        PropertyGenerator \$prefixInterceptors,
        PropertyGenerator \$suffixInterceptors,
        PublicPropertiesMap \$publicProperties
    ) {
        parent::__construct(\$originalClass, '__unset', [new ParameterGenerator('name')]);

        \$parent          = GetMethodIfExists::get(\$originalClass, '__unset');
        \$valueHolderName = \$valueHolder->getName();

        \$callParent = PublicScopeSimulator::getPublicAccessSimulationCode(
            PublicScopeSimulator::OPERATION_UNSET,
            'name',
            'value',
            \$valueHolder,
            'returnValue'
        );

        if (! \$publicProperties->isEmpty()) {
            \$callParent = 'if (isset(self::\$' . \$publicProperties->getName() . \"[\\\$name])) {\\n\"
                . '    unset(\$this->' . \$valueHolderName . '->\$name);'
                . \"\\n} else {\\n    \$callParent\\n}\\n\\n\";
        }

        \$callParent .= '\$returnValue = false;';

        \$this->setBody(InterceptorGenerator::createInterceptedMethodBody(
            \$callParent,
            \$this,
            \$valueHolder,
            \$prefixInterceptors,
            \$suffixInterceptors,
            \$parent
        ));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/MagicUnset.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator;

use ProxyManager\\Generator\\MagicMethodGenerator;
use ProxyManager\\ProxyGenerator\\Util\\GetMethodIfExists;
use Zend\\Code\\Generator\\ParameterGenerator;
use ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\Util\\InterceptorGenerator;
use ProxyManager\\ProxyGenerator\\PropertyGenerator\\PublicPropertiesMap;
use ProxyManager\\ProxyGenerator\\Util\\PublicScopeSimulator;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Magic `__unset` for method interceptor value holder objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MagicUnset extends MagicMethodGenerator
{
    /**
     * Constructor
     * @param ReflectionClass     \$originalClass
     * @param PropertyGenerator   \$valueHolder
     * @param PropertyGenerator   \$prefixInterceptors
     * @param PropertyGenerator   \$suffixInterceptors
     * @param PublicPropertiesMap \$publicProperties
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     * @throws \\InvalidArgumentException
     */
    public function __construct(
        ReflectionClass \$originalClass,
        PropertyGenerator \$valueHolder,
        PropertyGenerator \$prefixInterceptors,
        PropertyGenerator \$suffixInterceptors,
        PublicPropertiesMap \$publicProperties
    ) {
        parent::__construct(\$originalClass, '__unset', [new ParameterGenerator('name')]);

        \$parent          = GetMethodIfExists::get(\$originalClass, '__unset');
        \$valueHolderName = \$valueHolder->getName();

        \$callParent = PublicScopeSimulator::getPublicAccessSimulationCode(
            PublicScopeSimulator::OPERATION_UNSET,
            'name',
            'value',
            \$valueHolder,
            'returnValue'
        );

        if (! \$publicProperties->isEmpty()) {
            \$callParent = 'if (isset(self::\$' . \$publicProperties->getName() . \"[\\\$name])) {\\n\"
                . '    unset(\$this->' . \$valueHolderName . '->\$name);'
                . \"\\n} else {\\n    \$callParent\\n}\\n\\n\";
        }

        \$callParent .= '\$returnValue = false;';

        \$this->setBody(InterceptorGenerator::createInterceptedMethodBody(
            \$callParent,
            \$this,
            \$valueHolder,
            \$prefixInterceptors,
            \$suffixInterceptors,
            \$parent
        ));
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/AccessInterceptorValueHolder/MethodGenerator/MagicUnset.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\ProxyGenerator\\AccessInterceptorValueHolder\\MethodGenerator\\MagicUnset.php");
    }
}
