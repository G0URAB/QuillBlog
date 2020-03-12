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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/AssignOp.php */
class __TwigTemplate_f3a75e894159186833a92201ffc8500cf58538b58a8b5d196a0cef559436e63e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/AssignOp.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;

abstract class AssignOp extends Expr
{
    /** @var Expr Variable */
    public \$var;
    /** @var Expr Expression */
    public \$expr;

    /**
     * Constructs a compound assignment operation node.
     *
     * @param Expr  \$var        Variable
     * @param Expr  \$expr       Expression
     * @param array \$attributes Additional attributes
     */
    public function __construct(Expr \$var, Expr \$expr, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->var = \$var;
        \$this->expr = \$expr;
    }

    public function getSubNodeNames() : array {
        return ['var', 'expr'];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/AssignOp.php";
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

abstract class AssignOp extends Expr
{
    /** @var Expr Variable */
    public \$var;
    /** @var Expr Expression */
    public \$expr;

    /**
     * Constructs a compound assignment operation node.
     *
     * @param Expr  \$var        Variable
     * @param Expr  \$expr       Expression
     * @param array \$attributes Additional attributes
     */
    public function __construct(Expr \$var, Expr \$expr, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->var = \$var;
        \$this->expr = \$expr;
    }

    public function getSubNodeNames() : array {
        return ['var', 'expr'];
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/AssignOp.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Expr\\AssignOp.php");
    }
}
