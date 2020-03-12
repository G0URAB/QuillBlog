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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/MethodGenerator.php */
class __TwigTemplate_1678222666c8a3d59b2a40c345f2544e6b2a9f19c5a517fd759d0a614134a60a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/MethodGenerator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Generator;

use Zend\\Code\\Generator\\MethodGenerator as ZendMethodGenerator;
use Zend\\Code\\Reflection\\MethodReflection;

/**
 * Method generator that fixes minor quirks in ZF2's method generator
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MethodGenerator extends ZendMethodGenerator
{
    /**
     * {@inheritDoc}
     */
    public static function fromReflectionWithoutBodyAndDocBlock(MethodReflection \$reflectionMethod) : self
    {
        /* @var \$method self */
        \$method = parent::copyMethodSignature(\$reflectionMethod);

        \$method->setInterface(false);

        return \$method;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/MethodGenerator.php";
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

use Zend\\Code\\Generator\\MethodGenerator as ZendMethodGenerator;
use Zend\\Code\\Reflection\\MethodReflection;

/**
 * Method generator that fixes minor quirks in ZF2's method generator
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MethodGenerator extends ZendMethodGenerator
{
    /**
     * {@inheritDoc}
     */
    public static function fromReflectionWithoutBodyAndDocBlock(MethodReflection \$reflectionMethod) : self
    {
        /* @var \$method self */
        \$method = parent::copyMethodSignature(\$reflectionMethod);

        \$method->setInterface(false);

        return \$method;
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/MethodGenerator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Generator\\MethodGenerator.php");
    }
}
