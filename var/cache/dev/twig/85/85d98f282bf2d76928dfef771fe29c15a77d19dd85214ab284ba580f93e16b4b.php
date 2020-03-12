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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhost/MethodGenerator/MagicIsset.php */
class __TwigTemplate_3b9a366615b9cc298c05fa08349b3b08ae4f389c2db4e72d9a4f7ee4600ff418 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhost/MethodGenerator/MagicIsset.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator;

use ProxyManager\\Generator\\MagicMethodGenerator;
use Zend\\Code\\Generator\\ParameterGenerator;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\PropertyGenerator\\PrivatePropertiesMap;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\PropertyGenerator\\ProtectedPropertiesMap;
use ProxyManager\\ProxyGenerator\\PropertyGenerator\\PublicPropertiesMap;
use ProxyManager\\ProxyGenerator\\Util\\PublicScopeSimulator;
use ReflectionClass;
use Zend\\Code\\Generator\\MethodGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Magic `__isset` method for lazy loading ghost objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MagicIsset extends MagicMethodGenerator
{
    /**
     * @var string
     */
    private \$callParentTemplate = <<<'PHP'
%s

if (isset(self::\$%s[\$name])) {
    return isset(\$this->\$name);
}

if (isset(self::\$%s[\$name])) {
    // check protected property access via compatible class
    \$callers      = debug_backtrace(\\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
    \$caller       = isset(\$callers[1]) ? \$callers[1] : [];
    \$object       = isset(\$caller['object']) ? \$caller['object'] : '';
    \$expectedType = self::\$%s[\$name];

    if (\$object instanceof \$expectedType) {
        return isset(\$this->\$name);
    }

    \$class = isset(\$caller['class']) ? \$caller['class'] : '';

    if (\$class === \$expectedType || is_subclass_of(\$class, \$expectedType)) {
        return isset(\$this->\$name);
    }
} else {
    // check private property access via same class
    \$callers = debug_backtrace(\\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
    \$caller  = isset(\$callers[1]) ? \$callers[1] : [];
    \$class   = isset(\$caller['class']) ? \$caller['class'] : '';

    static \$accessorCache = [];

    if (isset(self::\$%s[\$name][\$class])) {
        \$cacheKey = \$class . '#' . \$name;
        \$accessor = isset(\$accessorCache[\$cacheKey])
            ? \$accessorCache[\$cacheKey]
            : \$accessorCache[\$cacheKey] = \\Closure::bind(function (\$instance) use (\$name) {
                return isset(\$instance->\$name);
            }, null, \$class);

        return \$accessor(\$this);
    }

    if ('ReflectionProperty' === \$class) {
        \$tmpClass = key(self::\$%s[\$name]);
        \$cacheKey = \$tmpClass . '#' . \$name;
        \$accessor = isset(\$accessorCache[\$cacheKey])
            ? \$accessorCache[\$cacheKey]
            : \$accessorCache[\$cacheKey] = \\Closure::bind(function (\$instance) use (\$name) {
                return isset(\$instance->\$name);
            }, null, \$tmpClass);

        return \$accessor(\$this);
    }
}

%s
PHP;

    /**
     * @param ReflectionClass        \$originalClass
     * @param PropertyGenerator      \$initializerProperty
     * @param MethodGenerator        \$callInitializer
     * @param PublicPropertiesMap    \$publicProperties
     * @param ProtectedPropertiesMap \$protectedProperties
     * @param PrivatePropertiesMap   \$privateProperties
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     * @throws \\InvalidArgumentException
     */
    public function __construct(
        ReflectionClass \$originalClass,
        PropertyGenerator \$initializerProperty,
        MethodGenerator \$callInitializer,
        PublicPropertiesMap \$publicProperties,
        ProtectedPropertiesMap \$protectedProperties,
        PrivatePropertiesMap \$privateProperties
    ) {
        parent::__construct(\$originalClass, '__isset', [new ParameterGenerator('name')]);

        \$override = \$originalClass->hasMethod('__isset');

        \$parentAccess = 'return parent::__isset(\$name);';

        if (! \$override) {
            \$parentAccess = PublicScopeSimulator::getPublicAccessSimulationCode(
                PublicScopeSimulator::OPERATION_ISSET,
                'name'
            );
        }

        \$this->setBody(sprintf(
            \$this->callParentTemplate,
            '\$this->' . \$initializerProperty->getName() . ' && \$this->' . \$callInitializer->getName()
            . '(\\'__isset\\', array(\\'name\\' => \$name));',
            \$publicProperties->getName(),
            \$protectedProperties->getName(),
            \$protectedProperties->getName(),
            \$privateProperties->getName(),
            \$privateProperties->getName(),
            \$parentAccess
        ));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhost/MethodGenerator/MagicIsset.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator;

use ProxyManager\\Generator\\MagicMethodGenerator;
use Zend\\Code\\Generator\\ParameterGenerator;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\PropertyGenerator\\PrivatePropertiesMap;
use ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\PropertyGenerator\\ProtectedPropertiesMap;
use ProxyManager\\ProxyGenerator\\PropertyGenerator\\PublicPropertiesMap;
use ProxyManager\\ProxyGenerator\\Util\\PublicScopeSimulator;
use ReflectionClass;
use Zend\\Code\\Generator\\MethodGenerator;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Magic `__isset` method for lazy loading ghost objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MagicIsset extends MagicMethodGenerator
{
    /**
     * @var string
     */
    private \$callParentTemplate = <<<'PHP'
%s

if (isset(self::\$%s[\$name])) {
    return isset(\$this->\$name);
}

if (isset(self::\$%s[\$name])) {
    // check protected property access via compatible class
    \$callers      = debug_backtrace(\\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
    \$caller       = isset(\$callers[1]) ? \$callers[1] : [];
    \$object       = isset(\$caller['object']) ? \$caller['object'] : '';
    \$expectedType = self::\$%s[\$name];

    if (\$object instanceof \$expectedType) {
        return isset(\$this->\$name);
    }

    \$class = isset(\$caller['class']) ? \$caller['class'] : '';

    if (\$class === \$expectedType || is_subclass_of(\$class, \$expectedType)) {
        return isset(\$this->\$name);
    }
} else {
    // check private property access via same class
    \$callers = debug_backtrace(\\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
    \$caller  = isset(\$callers[1]) ? \$callers[1] : [];
    \$class   = isset(\$caller['class']) ? \$caller['class'] : '';

    static \$accessorCache = [];

    if (isset(self::\$%s[\$name][\$class])) {
        \$cacheKey = \$class . '#' . \$name;
        \$accessor = isset(\$accessorCache[\$cacheKey])
            ? \$accessorCache[\$cacheKey]
            : \$accessorCache[\$cacheKey] = \\Closure::bind(function (\$instance) use (\$name) {
                return isset(\$instance->\$name);
            }, null, \$class);

        return \$accessor(\$this);
    }

    if ('ReflectionProperty' === \$class) {
        \$tmpClass = key(self::\$%s[\$name]);
        \$cacheKey = \$tmpClass . '#' . \$name;
        \$accessor = isset(\$accessorCache[\$cacheKey])
            ? \$accessorCache[\$cacheKey]
            : \$accessorCache[\$cacheKey] = \\Closure::bind(function (\$instance) use (\$name) {
                return isset(\$instance->\$name);
            }, null, \$tmpClass);

        return \$accessor(\$this);
    }
}

%s
PHP;

    /**
     * @param ReflectionClass        \$originalClass
     * @param PropertyGenerator      \$initializerProperty
     * @param MethodGenerator        \$callInitializer
     * @param PublicPropertiesMap    \$publicProperties
     * @param ProtectedPropertiesMap \$protectedProperties
     * @param PrivatePropertiesMap   \$privateProperties
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     * @throws \\InvalidArgumentException
     */
    public function __construct(
        ReflectionClass \$originalClass,
        PropertyGenerator \$initializerProperty,
        MethodGenerator \$callInitializer,
        PublicPropertiesMap \$publicProperties,
        ProtectedPropertiesMap \$protectedProperties,
        PrivatePropertiesMap \$privateProperties
    ) {
        parent::__construct(\$originalClass, '__isset', [new ParameterGenerator('name')]);

        \$override = \$originalClass->hasMethod('__isset');

        \$parentAccess = 'return parent::__isset(\$name);';

        if (! \$override) {
            \$parentAccess = PublicScopeSimulator::getPublicAccessSimulationCode(
                PublicScopeSimulator::OPERATION_ISSET,
                'name'
            );
        }

        \$this->setBody(sprintf(
            \$this->callParentTemplate,
            '\$this->' . \$initializerProperty->getName() . ' && \$this->' . \$callInitializer->getName()
            . '(\\'__isset\\', array(\\'name\\' => \$name));',
            \$publicProperties->getName(),
            \$protectedProperties->getName(),
            \$protectedProperties->getName(),
            \$privateProperties->getName(),
            \$privateProperties->getName(),
            \$parentAccess
        ));
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhost/MethodGenerator/MagicIsset.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\MethodGenerator\\MagicIsset.php");
    }
}
