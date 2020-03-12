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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/ClassGenerator.php */
class __TwigTemplate_7bb1706cb5be3bf4b5c8fc5b5478ad18e72245b0c2c77cf6baa99f2fbc5d3c88 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/ClassGenerator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Generator;

use Zend\\Code\\Generator\\ClassGenerator as ZendClassGenerator;

/**
 * Class generator that ensures that interfaces/classes that are implemented/extended are FQCNs
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class ClassGenerator extends ZendClassGenerator
{
    /**
     * {@inheritDoc}
     */
    public function setExtendedClass(\$extendedClass) : parent
    {
        if (\$extendedClass) {
            \$extendedClass = '\\\\' . trim(\$extendedClass, '\\\\');
        }

        return parent::setExtendedClass(\$extendedClass);
    }

    /**
     * {@inheritDoc}
     */
    public function setImplementedInterfaces(array \$interfaces) : parent
    {
        foreach (\$interfaces as & \$interface) {
            \$interface = '\\\\' . trim(\$interface, '\\\\');
        }

        return parent::setImplementedInterfaces(\$interfaces);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/ClassGenerator.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Generator;

use Zend\\Code\\Generator\\ClassGenerator as ZendClassGenerator;

/**
 * Class generator that ensures that interfaces/classes that are implemented/extended are FQCNs
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class ClassGenerator extends ZendClassGenerator
{
    /**
     * {@inheritDoc}
     */
    public function setExtendedClass(\$extendedClass) : parent
    {
        if (\$extendedClass) {
            \$extendedClass = '\\\\' . trim(\$extendedClass, '\\\\');
        }

        return parent::setExtendedClass(\$extendedClass);
    }

    /**
     * {@inheritDoc}
     */
    public function setImplementedInterfaces(array \$interfaces) : parent
    {
        foreach (\$interfaces as & \$interface) {
            \$interface = '\\\\' . trim(\$interface, '\\\\');
        }

        return parent::setImplementedInterfaces(\$interfaces);
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/ClassGenerator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Generator\\ClassGenerator.php");
    }
}
