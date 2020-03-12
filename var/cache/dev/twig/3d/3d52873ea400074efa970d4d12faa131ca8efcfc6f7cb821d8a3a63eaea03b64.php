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

/* @app/vendor/zendframework/zend-code/src/Reflection/ParameterReflection.php */
class __TwigTemplate_e04c14e6abd7b2f7f8e55a5b76ba77c746f1076c2767b37a7e999d49250e3979 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-code/src/Reflection/ParameterReflection.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Reflection;

use ReflectionParameter;

use function method_exists;

class ParameterReflection extends ReflectionParameter implements ReflectionInterface
{
    /**
     * @var bool
     */
    protected \$isFromMethod = false;

    /**
     * Get declaring class reflection object
     *
     * @return ClassReflection
     */
    public function getDeclaringClass()
    {
        \$phpReflection  = parent::getDeclaringClass();
        \$zendReflection = new ClassReflection(\$phpReflection->getName());
        unset(\$phpReflection);

        return \$zendReflection;
    }

    /**
     * Get class reflection object
     *
     * @return null|ClassReflection
     */
    public function getClass()
    {
        \$phpReflection = parent::getClass();
        if (\$phpReflection === null) {
            return null;
        }

        \$zendReflection = new ClassReflection(\$phpReflection->getName());
        unset(\$phpReflection);

        return \$zendReflection;
    }

    /**
     * Get declaring function reflection object
     *
     * @return FunctionReflection|MethodReflection
     */
    public function getDeclaringFunction()
    {
        \$phpReflection = parent::getDeclaringFunction();
        if (\$phpReflection instanceof \\ReflectionMethod) {
            \$zendReflection = new MethodReflection(\$this->getDeclaringClass()->getName(), \$phpReflection->getName());
        } else {
            \$zendReflection = new FunctionReflection(\$phpReflection->getName());
        }
        unset(\$phpReflection);

        return \$zendReflection;
    }

    /**
     * Get parameter type
     *
     * @return string|null
     */
    public function detectType()
    {
        if (method_exists(\$this, 'getType')
            && (\$type = \$this->getType())
            && \$type->isBuiltin()
        ) {
            return \$type->getName();
        }

        // can be dropped when dropping PHP7 support:
        if (\$this->isArray()) {
            return 'array';
        }

        // can be dropped when dropping PHP7 support:
        if (\$this->isCallable()) {
            return 'callable';
        }

        if ((\$class = \$this->getClass()) instanceof \\ReflectionClass) {
            return \$class->getName();
        }

        \$docBlock = \$this->getDeclaringFunction()->getDocBlock();

        if (! \$docBlock instanceof DocBlockReflection) {
            return null;
        }

        \$params = \$docBlock->getTags('param');

        if (isset(\$params[\$this->getPosition()])) {
            return \$params[\$this->getPosition()]->getType();
        }

        return null;
    }

    /**
     * @return string
     */
    public function toString()
    {
        return parent::__toString();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return parent::__toString();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/zendframework/zend-code/src/Reflection/ParameterReflection.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Reflection;

use ReflectionParameter;

use function method_exists;

class ParameterReflection extends ReflectionParameter implements ReflectionInterface
{
    /**
     * @var bool
     */
    protected \$isFromMethod = false;

    /**
     * Get declaring class reflection object
     *
     * @return ClassReflection
     */
    public function getDeclaringClass()
    {
        \$phpReflection  = parent::getDeclaringClass();
        \$zendReflection = new ClassReflection(\$phpReflection->getName());
        unset(\$phpReflection);

        return \$zendReflection;
    }

    /**
     * Get class reflection object
     *
     * @return null|ClassReflection
     */
    public function getClass()
    {
        \$phpReflection = parent::getClass();
        if (\$phpReflection === null) {
            return null;
        }

        \$zendReflection = new ClassReflection(\$phpReflection->getName());
        unset(\$phpReflection);

        return \$zendReflection;
    }

    /**
     * Get declaring function reflection object
     *
     * @return FunctionReflection|MethodReflection
     */
    public function getDeclaringFunction()
    {
        \$phpReflection = parent::getDeclaringFunction();
        if (\$phpReflection instanceof \\ReflectionMethod) {
            \$zendReflection = new MethodReflection(\$this->getDeclaringClass()->getName(), \$phpReflection->getName());
        } else {
            \$zendReflection = new FunctionReflection(\$phpReflection->getName());
        }
        unset(\$phpReflection);

        return \$zendReflection;
    }

    /**
     * Get parameter type
     *
     * @return string|null
     */
    public function detectType()
    {
        if (method_exists(\$this, 'getType')
            && (\$type = \$this->getType())
            && \$type->isBuiltin()
        ) {
            return \$type->getName();
        }

        // can be dropped when dropping PHP7 support:
        if (\$this->isArray()) {
            return 'array';
        }

        // can be dropped when dropping PHP7 support:
        if (\$this->isCallable()) {
            return 'callable';
        }

        if ((\$class = \$this->getClass()) instanceof \\ReflectionClass) {
            return \$class->getName();
        }

        \$docBlock = \$this->getDeclaringFunction()->getDocBlock();

        if (! \$docBlock instanceof DocBlockReflection) {
            return null;
        }

        \$params = \$docBlock->getTags('param');

        if (isset(\$params[\$this->getPosition()])) {
            return \$params[\$this->getPosition()]->getType();
        }

        return null;
    }

    /**
     * @return string
     */
    public function toString()
    {
        return parent::__toString();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return parent::__toString();
    }
}
", "@app/vendor/zendframework/zend-code/src/Reflection/ParameterReflection.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-code\\src\\Reflection\\ParameterReflection.php");
    }
}
