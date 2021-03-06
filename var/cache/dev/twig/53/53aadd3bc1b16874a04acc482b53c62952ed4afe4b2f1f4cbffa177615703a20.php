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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/MagicClone.php */
class __TwigTemplate_c44016aa6c75031c26c69f082baed50c3981e8463eadadec33eb08ae357af5e2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/MagicClone.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator;

use ProxyManager\\Generator\\MagicMethodGenerator;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Magic `__clone` for lazy loading value holder objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MagicClone extends MagicMethodGenerator
{
    /**
     * Constructor
     *
     * @param ReflectionClass   \$originalClass
     * @param PropertyGenerator \$initializerProperty
     * @param PropertyGenerator \$valueHolderProperty
     */
    public function __construct(
        ReflectionClass \$originalClass,
        PropertyGenerator \$initializerProperty,
        PropertyGenerator \$valueHolderProperty
    ) {
        parent::__construct(\$originalClass, '__clone');

        \$initializer = \$initializerProperty->getName();
        \$valueHolder = \$valueHolderProperty->getName();

        \$this->setBody(
            '\$this->' . \$initializer . ' && \$this->' . \$initializer
            . '->__invoke(\$this->' . \$valueHolder
            . ', \$this, \\'__clone\\', array(), \$this->' . \$initializer . ');' . \"\\n\\n\"
            . '\$this->' . \$valueHolder . ' = clone \$this->' . \$valueHolder . ';'
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/MagicClone.php";
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
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Magic `__clone` for lazy loading value holder objects
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MagicClone extends MagicMethodGenerator
{
    /**
     * Constructor
     *
     * @param ReflectionClass   \$originalClass
     * @param PropertyGenerator \$initializerProperty
     * @param PropertyGenerator \$valueHolderProperty
     */
    public function __construct(
        ReflectionClass \$originalClass,
        PropertyGenerator \$initializerProperty,
        PropertyGenerator \$valueHolderProperty
    ) {
        parent::__construct(\$originalClass, '__clone');

        \$initializer = \$initializerProperty->getName();
        \$valueHolder = \$valueHolderProperty->getName();

        \$this->setBody(
            '\$this->' . \$initializer . ' && \$this->' . \$initializer
            . '->__invoke(\$this->' . \$valueHolder
            . ', \$this, \\'__clone\\', array(), \$this->' . \$initializer . ');' . \"\\n\\n\"
            . '\$this->' . \$valueHolder . ' = clone \$this->' . \$valueHolder . ';'
        );
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingValueHolder/MethodGenerator/MagicClone.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\ProxyGenerator\\LazyLoadingValueHolder\\MethodGenerator\\MagicClone.php");
    }
}
