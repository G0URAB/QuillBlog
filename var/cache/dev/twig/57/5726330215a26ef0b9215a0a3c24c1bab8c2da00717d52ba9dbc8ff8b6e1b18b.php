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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObject/MethodGenerator/RemoteObjectMethod.php */
class __TwigTemplate_241647661546605da0445dab19928fc1d86d1099e4a2fef9c090c5b500ff31e7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObject/MethodGenerator/RemoteObjectMethod.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\Generator\\Util\\ProxiedMethodReturnExpression;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;
use Zend\\Code\\Reflection\\MethodReflection;
use function var_export;

/**
 * Method decorator for remote objects
 */
class RemoteObjectMethod extends MethodGenerator
{
    /**
     *
     * @return self|static
     */
    public static function generateMethod(
        MethodReflection \$originalMethod,
        PropertyGenerator \$adapterProperty,
        ReflectionClass \$originalClass
    ) : self {
        /** @var self \$method */
        \$method = static::fromReflectionWithoutBodyAndDocBlock(\$originalMethod);

        \$method->setBody(
            '\$return = \$this->' . \$adapterProperty->getName()
            . '->call(' . var_export(\$originalClass->getName(), true)
            . ', ' . var_export(\$originalMethod->getName(), true) . ', \\func_get_args());' . \"\\n\\n\"
            . ProxiedMethodReturnExpression::generate('\$return', \$originalMethod)
        );

        return \$method;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObject/MethodGenerator/RemoteObjectMethod.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\Generator\\Util\\ProxiedMethodReturnExpression;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;
use Zend\\Code\\Reflection\\MethodReflection;
use function var_export;

/**
 * Method decorator for remote objects
 */
class RemoteObjectMethod extends MethodGenerator
{
    /**
     *
     * @return self|static
     */
    public static function generateMethod(
        MethodReflection \$originalMethod,
        PropertyGenerator \$adapterProperty,
        ReflectionClass \$originalClass
    ) : self {
        /** @var self \$method */
        \$method = static::fromReflectionWithoutBodyAndDocBlock(\$originalMethod);

        \$method->setBody(
            '\$return = \$this->' . \$adapterProperty->getName()
            . '->call(' . var_export(\$originalClass->getName(), true)
            . ', ' . var_export(\$originalMethod->getName(), true) . ', \\func_get_args());' . \"\\n\\n\"
            . ProxiedMethodReturnExpression::generate('\$return', \$originalMethod)
        );

        return \$method;
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObject/MethodGenerator/RemoteObjectMethod.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator\\RemoteObjectMethod.php");
    }
}
