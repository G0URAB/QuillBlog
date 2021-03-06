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

/* @app/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/MethodTag.php */
class __TwigTemplate_728245ba9e9b79858234c711c5af5a17b7caafab623e76bef88ad42a97245658 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/MethodTag.php"));

        // line 1
        echo "<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\\Code\\Reflection\\DocBlock\\Tag;

use function explode;
use function preg_match;
use function rtrim;

class MethodTag implements TagInterface, PhpDocTypedTagInterface
{
    /**
     * Return value type
     *
     * @var array
     */
    protected \$types = [];

    /**
     * @var string
     */
    protected \$methodName;

    /**
     * @var string
     */
    protected \$description;

    /**
     * Is static method
     *
     * @var bool
     */
    protected \$isStatic = false;

    /**
     * @return string
     */
    public function getName()
    {
        return 'method';
    }

    /**
     * Initializer
     *
     * @param  string \$tagDocblockLine
     */
    public function initialize(\$tagDocblockLine)
    {
        \$match = [];

        if (! preg_match('#^(static[\\s]+)?(.+[\\s]+)?(.+\\(\\))[\\s]*(.*)\$#m', \$tagDocblockLine, \$match)) {
            return;
        }

        if (\$match[1] !== '') {
            \$this->isStatic = true;
        }

        if (\$match[2] !== '') {
            \$this->types = explode('|', rtrim(\$match[2]));
        }

        \$this->methodName = \$match[3];

        if (\$match[4] !== '') {
            \$this->description = \$match[4];
        }
    }

    /**
     * Get return value type
     *
     * @return null|string
     * @deprecated 2.0.4 use getTypes instead
     */
    public function getReturnType()
    {
        if (empty(\$this->types)) {
            return;
        }

        return \$this->types[0];
    }

    public function getTypes()
    {
        return \$this->types;
    }

    /**
     * @return string
     */
    public function getMethodName()
    {
        return \$this->methodName;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        return \$this->description;
    }

    /**
     * @return bool
     */
    public function isStatic()
    {
        return \$this->isStatic;
    }

    public function __toString()
    {
        return 'DocBlock Tag [ * @' . \$this->getName() . ' ]' . \"\\n\";
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/MethodTag.php";
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

namespace Zend\\Code\\Reflection\\DocBlock\\Tag;

use function explode;
use function preg_match;
use function rtrim;

class MethodTag implements TagInterface, PhpDocTypedTagInterface
{
    /**
     * Return value type
     *
     * @var array
     */
    protected \$types = [];

    /**
     * @var string
     */
    protected \$methodName;

    /**
     * @var string
     */
    protected \$description;

    /**
     * Is static method
     *
     * @var bool
     */
    protected \$isStatic = false;

    /**
     * @return string
     */
    public function getName()
    {
        return 'method';
    }

    /**
     * Initializer
     *
     * @param  string \$tagDocblockLine
     */
    public function initialize(\$tagDocblockLine)
    {
        \$match = [];

        if (! preg_match('#^(static[\\s]+)?(.+[\\s]+)?(.+\\(\\))[\\s]*(.*)\$#m', \$tagDocblockLine, \$match)) {
            return;
        }

        if (\$match[1] !== '') {
            \$this->isStatic = true;
        }

        if (\$match[2] !== '') {
            \$this->types = explode('|', rtrim(\$match[2]));
        }

        \$this->methodName = \$match[3];

        if (\$match[4] !== '') {
            \$this->description = \$match[4];
        }
    }

    /**
     * Get return value type
     *
     * @return null|string
     * @deprecated 2.0.4 use getTypes instead
     */
    public function getReturnType()
    {
        if (empty(\$this->types)) {
            return;
        }

        return \$this->types[0];
    }

    public function getTypes()
    {
        return \$this->types;
    }

    /**
     * @return string
     */
    public function getMethodName()
    {
        return \$this->methodName;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        return \$this->description;
    }

    /**
     * @return bool
     */
    public function isStatic()
    {
        return \$this->isStatic;
    }

    public function __toString()
    {
        return 'DocBlock Tag [ * @' . \$this->getName() . ' ]' . \"\\n\";
    }
}
", "@app/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/MethodTag.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-code\\src\\Reflection\\DocBlock\\Tag\\MethodTag.php");
    }
}
