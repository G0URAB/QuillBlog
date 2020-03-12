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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhost/PropertyGenerator/ProtectedPropertiesMap.php */
class __TwigTemplate_64c189cf5f9ab76a4615fdcda4781febfa571d3294abf32f13bd2335de00e2f2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhost/PropertyGenerator/ProtectedPropertiesMap.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\PropertyGenerator;

use ProxyManager\\Generator\\Util\\IdentifierSuffixer;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Property that contains the protected instance lazy-loadable properties of an object
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class ProtectedPropertiesMap extends PropertyGenerator
{
    const KEY_DEFAULT_VALUE = 'defaultValue';

    /**
     * Constructor
     *
     * @param Properties \$properties
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(Properties \$properties)
    {
        parent::__construct(
            IdentifierSuffixer::getIdentifier('protectedProperties')
        );

        \$this->setVisibility(self::VISIBILITY_PRIVATE);
        \$this->setStatic(true);
        \$this->setDocBlock(
            '@var string[][] declaring class name of defined protected properties, indexed by property name'
        );
        \$this->setDefaultValue(\$this->getMap(\$properties));
    }

    /**
     *
     * @param Properties \$properties
     *
     * @return int[][]|mixed[][]
     */
    private function getMap(Properties \$properties) : array
    {
        \$map = [];

        foreach (\$properties->getProtectedProperties() as \$property) {
            \$map[\$property->getName()] = \$property->getDeclaringClass()->getName();
        }

        return \$map;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhost/PropertyGenerator/ProtectedPropertiesMap.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\PropertyGenerator;

use ProxyManager\\Generator\\Util\\IdentifierSuffixer;
use ProxyManager\\ProxyGenerator\\Util\\Properties;
use Zend\\Code\\Generator\\PropertyGenerator;

/**
 * Property that contains the protected instance lazy-loadable properties of an object
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class ProtectedPropertiesMap extends PropertyGenerator
{
    const KEY_DEFAULT_VALUE = 'defaultValue';

    /**
     * Constructor
     *
     * @param Properties \$properties
     *
     * @throws \\Zend\\Code\\Generator\\Exception\\InvalidArgumentException
     */
    public function __construct(Properties \$properties)
    {
        parent::__construct(
            IdentifierSuffixer::getIdentifier('protectedProperties')
        );

        \$this->setVisibility(self::VISIBILITY_PRIVATE);
        \$this->setStatic(true);
        \$this->setDocBlock(
            '@var string[][] declaring class name of defined protected properties, indexed by property name'
        );
        \$this->setDefaultValue(\$this->getMap(\$properties));
    }

    /**
     *
     * @param Properties \$properties
     *
     * @return int[][]|mixed[][]
     */
    private function getMap(Properties \$properties) : array
    {
        \$map = [];

        foreach (\$properties->getProtectedProperties() as \$property) {
            \$map[\$property->getName()] = \$property->getDeclaringClass()->getName();
        }

        return \$map;
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/ProxyGenerator/LazyLoadingGhost/PropertyGenerator/ProtectedPropertiesMap.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\ProxyGenerator\\LazyLoadingGhost\\PropertyGenerator\\ProtectedPropertiesMap.php");
    }
}
