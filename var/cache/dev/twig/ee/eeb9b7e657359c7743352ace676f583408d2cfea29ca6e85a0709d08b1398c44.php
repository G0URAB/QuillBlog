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

/* @app/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/MethodTag.php */
class __TwigTemplate_a8f4f8b6703f63a383ee8fb35a591b8d4de28eb65725a871bb982606c26dfef0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/MethodTag.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Generator\\DocBlock\\Tag;

use function rtrim;

class MethodTag extends AbstractTypeableTag implements TagInterface
{
    /**
     * @var string
     */
    protected \$methodName;

    /**
     * @var bool
     */
    protected \$isStatic = false;

    /**
     * @param string \$methodName
     * @param array \$types
     * @param string \$description
     * @param bool \$isStatic
     */
    public function __construct(\$methodName = null, \$types = [], \$description = null, \$isStatic = false)
    {
        if (! empty(\$methodName)) {
            \$this->setMethodName(\$methodName);
        }

        \$this->setIsStatic((bool) \$isStatic);

        parent::__construct(\$types, \$description);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'method';
    }

    /**
     * @param bool \$isStatic
     * @return MethodTag
     */
    public function setIsStatic(\$isStatic)
    {
        \$this->isStatic = \$isStatic;
        return \$this;
    }

    /**
     * @return bool
     */
    public function isStatic()
    {
        return \$this->isStatic;
    }

    /**
     * @param string \$methodName
     * @return MethodTag
     */
    public function setMethodName(\$methodName)
    {
        \$this->methodName = rtrim(\$methodName, ')(');
        return \$this;
    }

    /**
     * @return string
     */
    public function getMethodName()
    {
        return \$this->methodName;
    }

    /**
     * @return string
     */
    public function generate()
    {
        \$output = '@method'
            . (\$this->isStatic ? ' static' : '')
            . (! empty(\$this->types) ? ' ' . \$this->getTypesAsString() : '')
            . (! empty(\$this->methodName) ? ' ' . \$this->methodName . '()' : '')
            . (! empty(\$this->description) ? ' ' . \$this->description : '');

        return \$output;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/MethodTag.php";
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

namespace Zend\\Code\\Generator\\DocBlock\\Tag;

use function rtrim;

class MethodTag extends AbstractTypeableTag implements TagInterface
{
    /**
     * @var string
     */
    protected \$methodName;

    /**
     * @var bool
     */
    protected \$isStatic = false;

    /**
     * @param string \$methodName
     * @param array \$types
     * @param string \$description
     * @param bool \$isStatic
     */
    public function __construct(\$methodName = null, \$types = [], \$description = null, \$isStatic = false)
    {
        if (! empty(\$methodName)) {
            \$this->setMethodName(\$methodName);
        }

        \$this->setIsStatic((bool) \$isStatic);

        parent::__construct(\$types, \$description);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'method';
    }

    /**
     * @param bool \$isStatic
     * @return MethodTag
     */
    public function setIsStatic(\$isStatic)
    {
        \$this->isStatic = \$isStatic;
        return \$this;
    }

    /**
     * @return bool
     */
    public function isStatic()
    {
        return \$this->isStatic;
    }

    /**
     * @param string \$methodName
     * @return MethodTag
     */
    public function setMethodName(\$methodName)
    {
        \$this->methodName = rtrim(\$methodName, ')(');
        return \$this;
    }

    /**
     * @return string
     */
    public function getMethodName()
    {
        return \$this->methodName;
    }

    /**
     * @return string
     */
    public function generate()
    {
        \$output = '@method'
            . (\$this->isStatic ? ' static' : '')
            . (! empty(\$this->types) ? ' ' . \$this->getTypesAsString() : '')
            . (! empty(\$this->methodName) ? ' ' . \$this->methodName . '()' : '')
            . (! empty(\$this->description) ? ' ' . \$this->description : '');

        return \$output;
    }
}
", "@app/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/MethodTag.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-code\\src\\Generator\\DocBlock\\Tag\\MethodTag.php");
    }
}
