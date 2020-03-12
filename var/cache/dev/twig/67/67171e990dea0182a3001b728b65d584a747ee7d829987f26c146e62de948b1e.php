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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Closure.php */
class __TwigTemplate_304f22d6935aca220e7cba66a20bc23b18807cb30babe145714bfb47fa80e295 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Closure.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node;
use PhpParser\\Node\\Expr;
use PhpParser\\Node\\FunctionLike;

class Closure extends Expr implements FunctionLike
{
    /** @var bool Whether the closure is static */
    public \$static;
    /** @var bool Whether to return by reference */
    public \$byRef;
    /** @var Node\\Param[] Parameters */
    public \$params;
    /** @var ClosureUse[] use()s */
    public \$uses;
    /** @var null|Node\\Identifier|Node\\Name|Node\\NullableType|Node\\UnionType Return type */
    public \$returnType;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    /**
     * Constructs a lambda function node.
     *
     * @param array \$subNodes   Array of the following optional subnodes:
     *                          'static'     => false  : Whether the closure is static
     *                          'byRef'      => false  : Whether to return by reference
     *                          'params'     => array(): Parameters
     *                          'uses'       => array(): use()s
     *                          'returnType' => null   : Return type
     *                          'stmts'      => array(): Statements
     * @param array \$attributes Additional attributes
     */
    public function __construct(array \$subNodes = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->static = \$subNodes['static'] ?? false;
        \$this->byRef = \$subNodes['byRef'] ?? false;
        \$this->params = \$subNodes['params'] ?? [];
        \$this->uses = \$subNodes['uses'] ?? [];
        \$returnType = \$subNodes['returnType'] ?? null;
        \$this->returnType = \\is_string(\$returnType) ? new Node\\Identifier(\$returnType) : \$returnType;
        \$this->stmts = \$subNodes['stmts'] ?? [];
    }

    public function getSubNodeNames() : array {
        return ['static', 'byRef', 'params', 'uses', 'returnType', 'stmts'];
    }

    public function returnsByRef() : bool {
        return \$this->byRef;
    }

    public function getParams() : array {
        return \$this->params;
    }

    public function getReturnType() {
        return \$this->returnType;
    }

    /** @return Node\\Stmt[] */
    public function getStmts() : array {
        return \$this->stmts;
    }
    
    public function getType() : string {
        return 'Expr_Closure';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Closure.php";
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
use PhpParser\\Node\\FunctionLike;

class Closure extends Expr implements FunctionLike
{
    /** @var bool Whether the closure is static */
    public \$static;
    /** @var bool Whether to return by reference */
    public \$byRef;
    /** @var Node\\Param[] Parameters */
    public \$params;
    /** @var ClosureUse[] use()s */
    public \$uses;
    /** @var null|Node\\Identifier|Node\\Name|Node\\NullableType|Node\\UnionType Return type */
    public \$returnType;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    /**
     * Constructs a lambda function node.
     *
     * @param array \$subNodes   Array of the following optional subnodes:
     *                          'static'     => false  : Whether the closure is static
     *                          'byRef'      => false  : Whether to return by reference
     *                          'params'     => array(): Parameters
     *                          'uses'       => array(): use()s
     *                          'returnType' => null   : Return type
     *                          'stmts'      => array(): Statements
     * @param array \$attributes Additional attributes
     */
    public function __construct(array \$subNodes = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->static = \$subNodes['static'] ?? false;
        \$this->byRef = \$subNodes['byRef'] ?? false;
        \$this->params = \$subNodes['params'] ?? [];
        \$this->uses = \$subNodes['uses'] ?? [];
        \$returnType = \$subNodes['returnType'] ?? null;
        \$this->returnType = \\is_string(\$returnType) ? new Node\\Identifier(\$returnType) : \$returnType;
        \$this->stmts = \$subNodes['stmts'] ?? [];
    }

    public function getSubNodeNames() : array {
        return ['static', 'byRef', 'params', 'uses', 'returnType', 'stmts'];
    }

    public function returnsByRef() : bool {
        return \$this->byRef;
    }

    public function getParams() : array {
        return \$this->params;
    }

    public function getReturnType() {
        return \$this->returnType;
    }

    /** @return Node\\Stmt[] */
    public function getStmts() : array {
        return \$this->stmts;
    }
    
    public function getType() : string {
        return 'Expr_Closure';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Closure.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Expr\\Closure.php");
    }
}
