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

/* @app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/MagicMethodGenerator.php */
class __TwigTemplate_8219dc24cc49005443a4783351d9d7ce37ffe5b5b4ac0c184e142246eaa8abc8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/MagicMethodGenerator.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace ProxyManager\\Generator;

use ReflectionClass;

/**
 * Method generator for magic methods
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MagicMethodGenerator extends MethodGenerator
{
    /**
     * @param ReflectionClass \$originalClass
     * @param string          \$name
     * @param array           \$parameters
     */
    public function __construct(ReflectionClass \$originalClass, string \$name, array \$parameters = [])
    {
        parent::__construct(
            \$name,
            \$parameters,
            static::FLAG_PUBLIC
        );

        \$this->setReturnsReference(strtolower(\$name) === '__get');

        if (\$originalClass->hasMethod(\$name)) {
            \$this->setReturnsReference(\$originalClass->getMethod(\$name)->returnsReference());
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/MagicMethodGenerator.php";
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

use ReflectionClass;

/**
 * Method generator for magic methods
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
class MagicMethodGenerator extends MethodGenerator
{
    /**
     * @param ReflectionClass \$originalClass
     * @param string          \$name
     * @param array           \$parameters
     */
    public function __construct(ReflectionClass \$originalClass, string \$name, array \$parameters = [])
    {
        parent::__construct(
            \$name,
            \$parameters,
            static::FLAG_PUBLIC
        );

        \$this->setReturnsReference(strtolower(\$name) === '__get');

        if (\$originalClass->hasMethod(\$name)) {
            \$this->setReturnsReference(\$originalClass->getMethod(\$name)->returnsReference());
        }
    }
}
", "@app/vendor/ocramius/proxy-manager/src/ProxyManager/Generator/MagicMethodGenerator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\src\\ProxyManager\\Generator\\MagicMethodGenerator.php");
    }
}
