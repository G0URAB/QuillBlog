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

/* @app/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/ParamTag.php */
class __TwigTemplate_a9bdb25025c5661ab61f02c8ade47f60c0016c6b1f6fc373f316a5b7138bc0b0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/ParamTag.php"));

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
use function preg_replace;
use function trim;

class ParamTag implements TagInterface, PhpDocTypedTagInterface
{
    /**
     * @var array
     */
    protected \$types = [];

    /**
     * @var string
     */
    protected \$variableName;

    /**
     * @var string
     */
    protected \$description;

    /**
     * @return string
     */
    public function getName()
    {
        return 'param';
    }

    /**
     * Initializer
     *
     * @param  string \$tagDocBlockLine
     */
    public function initialize(\$tagDocBlockLine)
    {
        \$matches = [];

        if (! preg_match('#((?:[\\w|\\\\\\]+(?:\\[\\])*\\|?)+)(?:\\s+(\\\$\\S+))?(?:\\s+(.*))?#s', \$tagDocBlockLine, \$matches)) {
            return;
        }

        \$this->types = explode('|', \$matches[1]);

        if (isset(\$matches[2])) {
            \$this->variableName = \$matches[2];
        }

        if (isset(\$matches[3])) {
            \$this->description = trim(preg_replace('#\\s+#', ' ', \$matches[3]));
        }
    }

    /**
     * Get parameter variable type
     *
     * @return string
     * @deprecated 2.0.4 use getTypes instead
     */
    public function getType()
    {
        if (empty(\$this->types)) {
            return '';
        }

        return \$this->types[0];
    }

    public function getTypes()
    {
        return \$this->types;
    }

    /**
     * Get parameter name
     *
     * @return string
     */
    public function getVariableName()
    {
        return \$this->variableName;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return \$this->description;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/ParamTag.php";
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
use function preg_replace;
use function trim;

class ParamTag implements TagInterface, PhpDocTypedTagInterface
{
    /**
     * @var array
     */
    protected \$types = [];

    /**
     * @var string
     */
    protected \$variableName;

    /**
     * @var string
     */
    protected \$description;

    /**
     * @return string
     */
    public function getName()
    {
        return 'param';
    }

    /**
     * Initializer
     *
     * @param  string \$tagDocBlockLine
     */
    public function initialize(\$tagDocBlockLine)
    {
        \$matches = [];

        if (! preg_match('#((?:[\\w|\\\\\\]+(?:\\[\\])*\\|?)+)(?:\\s+(\\\$\\S+))?(?:\\s+(.*))?#s', \$tagDocBlockLine, \$matches)) {
            return;
        }

        \$this->types = explode('|', \$matches[1]);

        if (isset(\$matches[2])) {
            \$this->variableName = \$matches[2];
        }

        if (isset(\$matches[3])) {
            \$this->description = trim(preg_replace('#\\s+#', ' ', \$matches[3]));
        }
    }

    /**
     * Get parameter variable type
     *
     * @return string
     * @deprecated 2.0.4 use getTypes instead
     */
    public function getType()
    {
        if (empty(\$this->types)) {
            return '';
        }

        return \$this->types[0];
    }

    public function getTypes()
    {
        return \$this->types;
    }

    /**
     * Get parameter name
     *
     * @return string
     */
    public function getVariableName()
    {
        return \$this->variableName;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return \$this->description;
    }
}
", "@app/vendor/zendframework/zend-code/src/Reflection/DocBlock/Tag/ParamTag.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-code\\src\\Reflection\\DocBlock\\Tag\\ParamTag.php");
    }
}
