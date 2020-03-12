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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/FuncCall.php */
class __TwigTemplate_90994db412e700470c61b3465521d4a45e9a7583f033434957c1fa2f44614df1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/FuncCall.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node;
use PhpParser\\Node\\Expr;

class FuncCall extends Expr
{
    /** @var Node\\Name|Expr Function name */
    public \$name;
    /** @var Node\\Arg[] Arguments */
    public \$args;

    /**
     * Constructs a function call node.
     *
     * @param Node\\Name|Expr \$name       Function name
     * @param Node\\Arg[]     \$args       Arguments
     * @param array          \$attributes Additional attributes
     */
    public function __construct(\$name, array \$args = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->name = \$name;
        \$this->args = \$args;
    }

    public function getSubNodeNames() : array {
        return ['name', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_FuncCall';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/FuncCall.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node;
use PhpParser\\Node\\Expr;

class FuncCall extends Expr
{
    /** @var Node\\Name|Expr Function name */
    public \$name;
    /** @var Node\\Arg[] Arguments */
    public \$args;

    /**
     * Constructs a function call node.
     *
     * @param Node\\Name|Expr \$name       Function name
     * @param Node\\Arg[]     \$args       Arguments
     * @param array          \$attributes Additional attributes
     */
    public function __construct(\$name, array \$args = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->name = \$name;
        \$this->args = \$args;
    }

    public function getSubNodeNames() : array {
        return ['name', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_FuncCall';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/FuncCall.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Expr\\FuncCall.php");
    }
}
