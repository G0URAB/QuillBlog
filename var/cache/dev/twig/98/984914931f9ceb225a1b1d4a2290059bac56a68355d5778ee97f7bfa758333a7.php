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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/ValueHolder/MethodGenerator/Constructor.php */
class __TwigTemplate_962c2ffa2c769a9d626f9a092590901c121ddb9fd4c7310aa0bd98a8f0ff3ef3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/ValueHolder/MethodGenerator/Constructor.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\ValueHolder\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use ProxyManager\\ProxyGenerator\\Util\\UnsetPropertiesGenerator;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;
use Zend\\Code\\Reflection\\MethodReflection;
use Zend\\Code\\Reflection\\ParameterReflection;

/**
 * The `__construct` implementation for lazy loading proxies
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class Constructor extends MethodGenerator
{
    /**
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public static function generateMethod(ReflectionClass \$originalClass, PropertyGenerator \$valueHolder) : self
    {
        \$originalConstructor = self::getConstructor(\$originalClass);

        /* @var \$constructor self */
        \$constructor = \$originalConstructor
            ? self::fromReflectionWithoutBodyAndDocBlock(\$originalConstructor)
            : new self('__construct');

        \$constructor->setBody(
            'static \$reflection;' . \"\\n\\n\"
            . 'if (! \$this->' . \$valueHolder->getName() . ') {' . \"\\n\"
            . '    \$reflection = \$reflection ?: new \\ReflectionClass('
            . var_export(\$originalClass->getName(), true)
            . \");\\n\"
            . '    \$this->' . \$valueHolder->getName() . ' = \$reflection->newInstanceWithoutConstructor();' . \"\\n\"
            . UnsetPropertiesGenerator::generateSnippet(Properties::fromReflectionClass(\$originalClass), 'this')
            . '}'
            . (\$originalConstructor ? self::generateOriginalConstructorCall(\$originalConstructor, \$valueHolder) : '')
        );

        return \$constructor;
    }

    private static function generateOriginalConstructorCall(
        MethodReflection \$originalConstructor,
        PropertyGenerator \$valueHolder
    ) : string {
        return \"\\n\\n\"
            . '\$this->' . \$valueHolder->getName() . '->' . \$originalConstructor->getName() . '('
            . implode(
                ', ',
                array_map(
                    function (ParameterReflection \$parameter) : string {
                        return (\$parameter->isVariadic() ? '...' : '') . '\$' . \$parameter->getName();
                    },
                    \$originalConstructor->getParameters()
                )
            )
            . ');';
    }

    /**
     * @param ReflectionClass \$class
     *
     * @return MethodReflection|null
     */
    private static function getConstructor(ReflectionClass \$class)
    {
        \$constructors = array_map(
            function (\\ReflectionMethod \$method) : MethodReflection {
                return new MethodReflection(
                    \$method->getDeclaringClass()->getName(),
                    \$method->getName()
                );
            },
            array_filter(
                \$class->getMethods(),
                function (\\ReflectionMethod \$method) : bool {
                    return \$method->isConstructor();
                }
            )
        );

        return reset(\$constructors) ?: null;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/ValueHolder/MethodGenerator/Constructor.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\ValueHolder\\MethodGenerator;

use ProxyManager\\Generator\\MethodGenerator;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use ProxyManager\\ProxyGenerator\\Util\\UnsetPropertiesGenerator;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;
use Zend\\Code\\Reflection\\MethodReflection;
use Zend\\Code\\Reflection\\ParameterReflection;

/**
 * The `__construct` implementation for lazy loading proxies
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class Constructor extends MethodGenerator
{
    /**
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public static function generateMethod(ReflectionClass \$originalClass, PropertyGenerator \$valueHolder) : self
    {
        \$originalConstructor = self::getConstructor(\$originalClass);

        /* @var \$constructor self */
        \$constructor = \$originalConstructor
            ? self::fromReflectionWithoutBodyAndDocBlock(\$originalConstructor)
            : new self('__construct');

        \$constructor->setBody(
            'static \$reflection;' . \"\\n\\n\"
            . 'if (! \$this->' . \$valueHolder->getName() . ') {' . \"\\n\"
            . '    \$reflection = \$reflection ?: new \\ReflectionClass('
            . var_export(\$originalClass->getName(), true)
            . \");\\n\"
            . '    \$this->' . \$valueHolder->getName() . ' = \$reflection->newInstanceWithoutConstructor();' . \"\\n\"
            . UnsetPropertiesGenerator::generateSnippet(Properties::fromReflectionClass(\$originalClass), 'this')
            . '}'
            . (\$originalConstructor ? self::generateOriginalConstructorCall(\$originalConstructor, \$valueHolder) : '')
        );

        return \$constructor;
    }

    private static function generateOriginalConstructorCall(
        MethodReflection \$originalConstructor,
        PropertyGenerator \$valueHolder
    ) : string {
        return \"\\n\\n\"
            . '\$this->' . \$valueHolder->getName() . '->' . \$originalConstructor->getName() . '('
            . implode(
                ', ',
                array_map(
                    function (ParameterReflection \$parameter) : string {
                        return (\$parameter->isVariadic() ? '...' : '') . '\$' . \$parameter->getName();
                    },
                    \$originalConstructor->getParameters()
                )
            )
            . ');';
    }

    /**
     * @param ReflectionClass \$class
     *
     * @return MethodReflection|null
     */
    private static function getConstructor(ReflectionClass \$class)
    {
        \$constructors = array_map(
            function (\\ReflectionMethod \$method) : MethodReflection {
                return new MethodReflection(
                    \$method->getDeclaringClass()->getName(),
                    \$method->getName()
                );
            },
            array_filter(
                \$class->getMethods(),
                function (\\ReflectionMethod \$method) : bool {
                    return \$method->isConstructor();
                }
            )
        );

        return reset(\$constructors) ?: null;
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/ValueHolder/MethodGenerator/Constructor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\ProxyGenerator\\ValueHolder\\MethodGenerator\\Constructor.php");
    }
}
