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

/* @app/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/PropertyTag.php */
class __TwigTemplate_22919e13d682daad9e45f215679871678184a0b9e35e86d040ae983a492070e8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/PropertyTag.php"));

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

class PropertyTag implements TagInterface, PhpDocTypedTagInterface
{
    /**
     * @var array
     */
    protected \$types = [];

    /**
     * @var string
     */
    protected \$propertyName;

    /**
     * @var string
     */
    protected \$description;

    /**
     * @return string
     */
    public function getName()
    {
        return 'property';
    }

    /**
     * Initializer
     *
     * @param  string \$tagDocblockLine
     */
    public function initialize(\$tagDocblockLine)
    {
        \$match = [];
        if (! preg_match('#^(.+)?(\\\$[\\S]+)[\\s]*(.*)\$#m', \$tagDocblockLine, \$match)) {
            return;
        }

        if (\$match[1] !== '') {
            \$this->types = explode('|', rtrim(\$match[1]));
        }

        if (\$match[2] !== '') {
            \$this->propertyName = \$match[2];
        }

        if (\$match[3] !== '') {
            \$this->description = \$match[3];
        }
    }

    /**
     * @return null|string
     * @deprecated 2.0.4 use getTypes instead
     */
    public function getType()
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
     * @return null|string
     */
    public function getPropertyName()
    {
        return \$this->propertyName;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        return \$this->description;
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
        return "@app/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/PropertyTag.php";
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

class PropertyTag implements TagInterface, PhpDocTypedTagInterface
{
    /**
     * @var array
     */
    protected \$types = [];

    /**
     * @var string
     */
    protected \$propertyName;

    /**
     * @var string
     */
    protected \$description;

    /**
     * @return string
     */
    public function getName()
    {
        return 'property';
    }

    /**
     * Initializer
     *
     * @param  string \$tagDocblockLine
     */
    public function initialize(\$tagDocblockLine)
    {
        \$match = [];
        if (! preg_match('#^(.+)?(\\\$[\\S]+)[\\s]*(.*)\$#m', \$tagDocblockLine, \$match)) {
            return;
        }

        if (\$match[1] !== '') {
            \$this->types = explode('|', rtrim(\$match[1]));
        }

        if (\$match[2] !== '') {
            \$this->propertyName = \$match[2];
        }

        if (\$match[3] !== '') {
            \$this->description = \$match[3];
        }
    }

    /**
     * @return null|string
     * @deprecated 2.0.4 use getTypes instead
     */
    public function getType()
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
     * @return null|string
     */
    public function getPropertyName()
    {
        return \$this->propertyName;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        return \$this->description;
    }

    public function __toString()
    {
        return 'DocBlock Tag [ * @' . \$this->getName() . ' ]' . \"\\n\";
    }
}
", "@app/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/PropertyTag.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-code\\src\\Reflection\\DocBlock\\Tag\\PropertyTag.php");
    }
}
