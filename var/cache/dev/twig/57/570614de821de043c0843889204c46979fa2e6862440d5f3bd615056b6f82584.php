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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ArrayItem.php */
class __TwigTemplate_47828c6cfc8f10fd11e3ba9442d6d6b4406c1721087f2d45b44a259de681e72c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ArrayItem.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;

class ArrayItem extends Expr
{
    /** @var null|Expr Key */
    public \$key;
    /** @var Expr Value */
    public \$value;
    /** @var bool Whether to assign by reference */
    public \$byRef;
    /** @var bool Whether to unpack the argument */
    public \$unpack;

    /**
     * Constructs an array item node.
     *
     * @param Expr      \$value      Value
     * @param null|Expr \$key        Key
     * @param bool      \$byRef      Whether to assign by reference
     * @param array     \$attributes Additional attributes
     */
    public function __construct(Expr \$value, Expr \$key = null, bool \$byRef = false, array \$attributes = [], bool \$unpack = false) {
        \$this->attributes = \$attributes;
        \$this->key = \$key;
        \$this->value = \$value;
        \$this->byRef = \$byRef;
        \$this->unpack = \$unpack;
    }

    public function getSubNodeNames() : array {
        return ['key', 'value', 'byRef', 'unpack'];
    }

    public function getType() : string {
        return 'Expr_ArrayItem';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ArrayItem.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;

class ArrayItem extends Expr
{
    /** @var null|Expr Key */
    public \$key;
    /** @var Expr Value */
    public \$value;
    /** @var bool Whether to assign by reference */
    public \$byRef;
    /** @var bool Whether to unpack the argument */
    public \$unpack;

    /**
     * Constructs an array item node.
     *
     * @param Expr      \$value      Value
     * @param null|Expr \$key        Key
     * @param bool      \$byRef      Whether to assign by reference
     * @param array     \$attributes Additional attributes
     */
    public function __construct(Expr \$value, Expr \$key = null, bool \$byRef = false, array \$attributes = [], bool \$unpack = false) {
        \$this->attributes = \$attributes;
        \$this->key = \$key;
        \$this->value = \$value;
        \$this->byRef = \$byRef;
        \$this->unpack = \$unpack;
    }

    public function getSubNodeNames() : array {
        return ['key', 'value', 'byRef', 'unpack'];
    }

    public function getType() : string {
        return 'Expr_ArrayItem';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ArrayItem.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Expr\\ArrayItem.php");
    }
}
