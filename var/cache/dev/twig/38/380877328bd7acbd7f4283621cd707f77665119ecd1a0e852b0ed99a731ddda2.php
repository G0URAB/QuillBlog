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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObject/MethodGenerator/MagicSet.php */
class __TwigTemplate_920e8f40bcae09d4fa3bc06e4a4e6c686b4b131c9f77ad504cddb82a2a29ace7 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObject/MethodGenerator/MagicSet.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator;

use ProxyManager\\Generator\\MagicMethodGenerator;
use Zend\\Code\\Generator\\ParameterGenerator;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Magic `__set` for remote objects
 *
 * @author Vincent Blanchon <blanchon.vincent@gmail.com>
 * @license MIT
 */
class MagicSet extends MagicMethodGenerator
{
    /**
     * Constructor
     * @param ReflectionClass                        \$originalClass
     * @param \\Zend\\Code\\Generator\\PropertyGenerator \$adapterProperty
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(ReflectionClass \$originalClass, PropertyGenerator \$adapterProperty)
    {
        parent::__construct(
            \$originalClass,
            '__set',
            [new ParameterGenerator('name'), new ParameterGenerator('value')]
        );

        \$this->setDocBlock('@param string \\\$name\\n@param mixed \\\$value');
        \$this->setBody(
            '\$return = \$this->' . \$adapterProperty->getName() . '->call(' . var_export(\$originalClass->getName(), true)
            . ', \\'__set\\', array(\$name, \$value));' . \"\\n\\n\"
            . 'return \$return;'
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObject/MethodGenerator/MagicSet.php";
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

use ProxyManager\\Generator\\MagicMethodGenerator;
use Zend\\Code\\Generator\\ParameterGenerator;
use ReflectionClass;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Magic `__set` for remote objects
 *
 * @author Vincent Blanchon <blanchon.vincent@gmail.com>
 * @license MIT
 */
class MagicSet extends MagicMethodGenerator
{
    /**
     * Constructor
     * @param ReflectionClass                        \$originalClass
     * @param \\Zend\\Code\\Generator\\PropertyGenerator \$adapterProperty
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(ReflectionClass \$originalClass, PropertyGenerator \$adapterProperty)
    {
        parent::__construct(
            \$originalClass,
            '__set',
            [new ParameterGenerator('name'), new ParameterGenerator('value')]
        );

        \$this->setDocBlock('@param string \\\$name\\n@param mixed \\\$value');
        \$this->setBody(
            '\$return = \$this->' . \$adapterProperty->getName() . '->call(' . var_export(\$originalClass->getName(), true)
            . ', \\'__set\\', array(\$name, \$value));' . \"\\n\\n\"
            . 'return \$return;'
        );
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/RemoteObject/MethodGenerator/MagicSet.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\ProxyGenerator\\RemoteObject\\MethodGenerator\\MagicSet.php");
    }
}
