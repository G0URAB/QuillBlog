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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/NullObject/MethodGenerator/NullObjectMethodInterceptor.php */
class __TwigTemplate_8f1636d3dc319577f11867608fb5dcf134e8c66ef20e5061b6dcc4f22944d142 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/NullObject/MethodGenerator/NullObjectMethodInterceptor.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\NullObject\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\Generator\\Util\\IdentifierSuffixer;
use Zend\\Code\\Reflection\\MethodReflection;

/**
 * Method decorator for null objects
 *
 * @author Vincent Blanchon <blanchon.vincent@gmail.com>
 * @license MIT
 */
class NullObjectMethodInterceptor extends MethodGenerator
{
    /**
     * @param \\Zend\\Code\\Reflection\\MethodReflection \$originalMethod
     *
     * @return self|static
     */
    public static function generateMethod(MethodReflection \$originalMethod) : self
    {
        /* @var \$method self */
        \$method = static::fromReflectionWithoutBodyAndDocBlock(\$originalMethod);

        if (\$originalMethod->returnsReference()) {
            \$reference = IdentifierSuffixer::getIdentifier('ref');

            \$method->setBody(\"\\\$\$reference = null;\\nreturn \\\$\$reference;\");
        }

        return \$method;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/NullObject/MethodGenerator/NullObjectMethodInterceptor.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\NullObject\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\Generator\\Util\\IdentifierSuffixer;
use Zend\\Code\\Reflection\\MethodReflection;

/**
 * Method decorator for null objects
 *
 * @author Vincent Blanchon <blanchon.vincent@gmail.com>
 * @license MIT
 */
class NullObjectMethodInterceptor extends MethodGenerator
{
    /**
     * @param \\Zend\\Code\\Reflection\\MethodReflection \$originalMethod
     *
     * @return self|static
     */
    public static function generateMethod(MethodReflection \$originalMethod) : self
    {
        /* @var \$method self */
        \$method = static::fromReflectionWithoutBodyAndDocBlock(\$originalMethod);

        if (\$originalMethod->returnsReference()) {
            \$reference = IdentifierSuffixer::getIdentifier('ref');

            \$method->setBody(\"\\\$\$reference = null;\\nreturn \\\$\$reference;\");
        }

        return \$method;
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/NullObject/MethodGenerator/NullObjectMethodInterceptor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\ProxyGenerator\\NullObject\\MethodGenerator\\NullObjectMethodInterceptor.php");
    }
}
