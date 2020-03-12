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

/* @app/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/VarTag.php */
class __TwigTemplate_8e2c51c071ed7c410aad6f9d5972074cf6b5fa2ae6ce4bec07011b6b62a9f53c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/VarTag.php"));

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

class VarTag extends AbstractTypeableTag implements TagInterface
{
    /**
     * @var string|null
     */
    private \$variableName;

    /**
     * @param string|null     \$variableName
     * @param string|string[] \$types
     * @param string|null     \$description
     */
    public function __construct(?string \$variableName = null, \$types = [], ?string \$description = null)
    {
        if (null !== \$variableName) {
            \$this->variableName = ltrim(\$variableName, '\$');
        }

        parent::__construct(\$types, \$description);
    }

    /**
     * {@inheritDoc}
     */
    public function getName() : string
    {
        return 'var';
    }

    /**
     * @internal this code is only public for compatibility with the
     *           @see \\Zend\\Code\\Generator\\DocBlock\\TagManager, which
     *           uses setters
     */
    public function setVariableName(?string \$variableName) : void
    {
        if (null !== \$variableName) {
            \$this->variableName = ltrim(\$variableName, '\$');
        }
    }

    public function getVariableName() : ?string
    {
        return \$this->variableName;
    }

    /**
     * {@inheritDoc}
     */
    public function generate() : string
    {
        return '@var'
            . ((! empty(\$this->types)) ? ' ' . \$this->getTypesAsString() : '')
            . (null !== \$this->variableName ? ' \$' . \$this->variableName : '')
            . ((! empty(\$this->description)) ? ' ' . \$this->description : '');
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/VarTag.php";
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

class VarTag extends AbstractTypeableTag implements TagInterface
{
    /**
     * @var string|null
     */
    private \$variableName;

    /**
     * @param string|null     \$variableName
     * @param string|string[] \$types
     * @param string|null     \$description
     */
    public function __construct(?string \$variableName = null, \$types = [], ?string \$description = null)
    {
        if (null !== \$variableName) {
            \$this->variableName = ltrim(\$variableName, '\$');
        }

        parent::__construct(\$types, \$description);
    }

    /**
     * {@inheritDoc}
     */
    public function getName() : string
    {
        return 'var';
    }

    /**
     * @internal this code is only public for compatibility with the
     *           @see \\Zend\\Code\\Generator\\DocBlock\\TagManager, which
     *           uses setters
     */
    public function setVariableName(?string \$variableName) : void
    {
        if (null !== \$variableName) {
            \$this->variableName = ltrim(\$variableName, '\$');
        }
    }

    public function getVariableName() : ?string
    {
        return \$this->variableName;
    }

    /**
     * {@inheritDoc}
     */
    public function generate() : string
    {
        return '@var'
            . ((! empty(\$this->types)) ? ' ' . \$this->getTypesAsString() : '')
            . (null !== \$this->variableName ? ' \$' . \$this->variableName : '')
            . ((! empty(\$this->description)) ? ' ' . \$this->description : '');
    }
}
", "@app/vendor/zendframework/zend-code/src/Generator/DocBlock/Tag/VarTag.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\zendframework\\zend-code\\src\\Generator\\DocBlock\\Tag\\VarTag.php");
    }
}
