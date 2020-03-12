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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ArrayDimFetch.php */
class __TwigTemplate_69060873ff94d7735820eef00d1edf70fe9b1235ffdedaeaee9c9ca589cf2c42 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ArrayDimFetch.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;

class ArrayDimFetch extends Expr
{
    /** @var Expr Variable */
    public \$var;
    /** @var null|Expr Array index / dim */
    public \$dim;

    /**
     * Constructs an array index fetch node.
     *
     * @param Expr      \$var        Variable
     * @param null|Expr \$dim        Array index / dim
     * @param array     \$attributes Additional attributes
     */
    public function __construct(Expr \$var, Expr \$dim = null, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->var = \$var;
        \$this->dim = \$dim;
    }

    public function getSubNodeNames() : array {
        return ['var', 'dim'];
    }
    
    public function getType() : string {
        return 'Expr_ArrayDimFetch';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ArrayDimFetch.php";
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

class ArrayDimFetch extends Expr
{
    /** @var Expr Variable */
    public \$var;
    /** @var null|Expr Array index / dim */
    public \$dim;

    /**
     * Constructs an array index fetch node.
     *
     * @param Expr      \$var        Variable
     * @param null|Expr \$dim        Array index / dim
     * @param array     \$attributes Additional attributes
     */
    public function __construct(Expr \$var, Expr \$dim = null, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->var = \$var;
        \$this->dim = \$dim;
    }

    public function getSubNodeNames() : array {
        return ['var', 'dim'];
    }
    
    public function getType() : string {
        return 'Expr_ArrayDimFetch';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/ArrayDimFetch.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Expr\\ArrayDimFetch.php");
    }
}
