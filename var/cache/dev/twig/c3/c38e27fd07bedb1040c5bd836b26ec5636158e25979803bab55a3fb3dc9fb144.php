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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/MagicGet.php */
class __TwigTemplate_1b7e7d939c68fea073ef88c5a36d2d01fa4d178dab47c3dbc54b80fe2b0043ca extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/MagicGet.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator;

use ProxyManager\\Generator\\MagicMethodGenerator;
use Zend\\Code\\Generator\\ParameterGenerator;
use ProxyManager\\ProxyGenerator\\PropertyGenerator\\PublicPropertiesMap;
use ProxyManager\\ProxyGenerator\\Util\\PublicScopeSimulator;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Magic `__get` for lazy loading value holder objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MagicGet extends MagicMethodGenerator
{
    /**
     * Constructor
     *
     * @param ReflectionClass     \$originalClass
     * @param PropertyGenerator   \$initializerProperty
     * @param PropertyGenerator   \$valueHolderProperty
     * @param PublicPropertiesMap \$publicProperties
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     * @throws \\InvalidArgumentException
     */
    public function __construct(
        ReflectionClass \$originalClass,
        PropertyGenerator \$initializerProperty,
        PropertyGenerator \$valueHolderProperty,
        PublicPropertiesMap \$publicProperties
    ) {
        parent::__construct(\$originalClass, '__get', [new ParameterGenerator('name')]);

        \$hasParent = \$originalClass->hasMethod('__get');

        \$initializer = \$initializerProperty->getName();
        \$valueHolder = \$valueHolderProperty->getName();
        \$callParent  = 'if (isset(self::\$' . \$publicProperties->getName() . \"[\\\$name])) {\\n\"
            . '    return \$this->' . \$valueHolder . '->\$name;'
            . \"\\n}\\n\\n\";

        if (\$hasParent) {
            \$this->setInitializerBody(
                \$initializer,
                \$valueHolder,
                \$callParent . 'return \$this->' . \$valueHolder . '->__get(\$name);'
            );

            return;
        }

        \$this->setInitializerBody(
            \$initializer,
            \$valueHolder,
            \$callParent . PublicScopeSimulator::getPublicAccessSimulationCode(
                PublicScopeSimulator::OPERATION_GET,
                'name',
                null,
                \$valueHolderProperty
            )
        );
    }

    private function setInitializerBody(string \$initializer, string \$valueHolder, string \$callParent) : void
    {
        \$this->setBody(
            '\$this->' . \$initializer . ' && \$this->' . \$initializer
            . '->__invoke(\$this->' . \$valueHolder . ', \$this, \\'__get\\', [\\'name\\' => \$name], \$this->'
            . \$initializer . ');'
            . \"\\n\\n\" . \$callParent
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/MagicGet.php";
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

use ProxyManager\\Generator\\MagicMethodGenerator;
use Zend\\Code\\Generator\\ParameterGenerator;
use ProxyManager\\ProxyGenerator\\PropertyGenerator\\PublicPropertiesMap;
use ProxyManager\\ProxyGenerator\\Util\\PublicScopeSimulator;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Magic `__get` for lazy loading value holder objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MagicGet extends MagicMethodGenerator
{
    /**
     * Constructor
     *
     * @param ReflectionClass     \$originalClass
     * @param PropertyGenerator   \$initializerProperty
     * @param PropertyGenerator   \$valueHolderProperty
     * @param PublicPropertiesMap \$publicProperties
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     * @throws \\InvalidArgumentException
     */
    public function __construct(
        ReflectionClass \$originalClass,
        PropertyGenerator \$initializerProperty,
        PropertyGenerator \$valueHolderProperty,
        PublicPropertiesMap \$publicProperties
    ) {
        parent::__construct(\$originalClass, '__get', [new ParameterGenerator('name')]);

        \$hasParent = \$originalClass->hasMethod('__get');

        \$initializer = \$initializerProperty->getName();
        \$valueHolder = \$valueHolderProperty->getName();
        \$callParent  = 'if (isset(self::\$' . \$publicProperties->getName() . \"[\\\$name])) {\\n\"
            . '    return \$this->' . \$valueHolder . '->\$name;'
            . \"\\n}\\n\\n\";

        if (\$hasParent) {
            \$this->setInitializerBody(
                \$initializer,
                \$valueHolder,
                \$callParent . 'return \$this->' . \$valueHolder . '->__get(\$name);'
            );

            return;
        }

        \$this->setInitializerBody(
            \$initializer,
            \$valueHolder,
            \$callParent . PublicScopeSimulator::getPublicAccessSimulationCode(
                PublicScopeSimulator::OPERATION_GET,
                'name',
                null,
                \$valueHolderProperty
            )
        );
    }

    private function setInitializerBody(string \$initializer, string \$valueHolder, string \$callParent) : void
    {
        \$this->setBody(
            '\$this->' . \$initializer . ' && \$this->' . \$initializer
            . '->__invoke(\$this->' . \$valueHolder . ', \$this, \\'__get\\', [\\'name\\' => \$name], \$this->'
            . \$initializer . ');'
            . \"\\n\\n\" . \$callParent
        );
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/MagicGet.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\MagicGet.php");
    }
}
