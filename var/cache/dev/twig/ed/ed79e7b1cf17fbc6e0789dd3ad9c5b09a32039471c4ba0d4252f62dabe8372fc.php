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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/ClassGeneratorUtils.php */
class __TwigTemplate_acab67bd645d9df43177ec033886f27f5d7a80feb21c63b1786b91749a6c4439 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/ClassGeneratorUtils.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Generator\\Util;

use ReflectionClass;
use Zend\\Code\\Generator\\ClassGenerator;
use Zend\\Code\\Generator\\MethodGenerator;

/**
 * Util class to help to generate code
 *
 * @author Jefersson Nathan <malukenho@phpse.net>
 * @license MIT
 */
final class ClassGeneratorUtils
{
    public static function addMethodIfNotFinal(
        ReflectionClass \$originalClass,
        ClassGenerator \$classGenerator,
        MethodGenerator \$generatedMethod
    ) : bool {
        \$methodName = \$generatedMethod->getName();

        if (\$originalClass->hasMethod(\$methodName) && \$originalClass->getMethod(\$methodName)->isFinal()) {
            return false;
        }

        \$classGenerator->addMethodFromGenerator(\$generatedMethod);

        return true;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/ClassGeneratorUtils.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace ProxyManager\\Generator\\Util;

use ReflectionClass;
use Zend\\Code\\Generator\\ClassGenerator;
use Zend\\Code\\Generator\\MethodGenerator;

/**
 * Util class to help to generate code
 *
 * @author Jefersson Nathan <malukenho@phpse.net>
 * @license MIT
 */
final class ClassGeneratorUtils
{
    public static function addMethodIfNotFinal(
        ReflectionClass \$originalClass,
        ClassGenerator \$classGenerator,
        MethodGenerator \$generatedMethod
    ) : bool {
        \$methodName = \$generatedMethod->getName();

        if (\$originalClass->hasMethod(\$methodName) && \$originalClass->getMethod(\$methodName)->isFinal()) {
            return false;
        }

        \$classGenerator->addMethodFromGenerator(\$generatedMethod);

        return true;
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/Util/ClassGeneratorUtils.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Generator\\Util\\ClassGeneratorUtils.php");
    }
}
