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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Function_.php */
class __TwigTemplate_ebaf40fc52cb042968214f7e0feab353d0950c86f94048ec2c787f5d00f91994 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Function_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;
use PhpParser\\Node\\FunctionLike;

/**
 * @property Node\\Name \$namespacedName Namespaced name (if using NameResolver)
 */
class Function_ extends Node\\Stmt implements FunctionLike
{
    /** @var bool Whether function returns by reference */
    public \$byRef;
    /** @var Node\\Identifier Name */
    public \$name;
    /** @var Node\\Param[] Parameters */
    public \$params;
    /** @var null|Node\\Identifier|Node\\Name|Node\\NullableType|Node\\UnionType Return type */
    public \$returnType;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    /**
     * Constructs a function node.
     *
     * @param string|Node\\Identifier \$name Name
     * @param array  \$subNodes   Array of the following optional subnodes:
     *                           'byRef'      => false  : Whether to return by reference
     *                           'params'     => array(): Parameters
     *                           'returnType' => null   : Return type
     *                           'stmts'      => array(): Statements
     * @param array  \$attributes Additional attributes
     */
    public function __construct(\$name, array \$subNodes = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->byRef = \$subNodes['byRef'] ?? false;
        \$this->name = \\is_string(\$name) ? new Node\\Identifier(\$name) : \$name;
        \$this->params = \$subNodes['params'] ?? [];
        \$returnType = \$subNodes['returnType'] ?? null;
        \$this->returnType = \\is_string(\$returnType) ? new Node\\Identifier(\$returnType) : \$returnType;
        \$this->stmts = \$subNodes['stmts'] ?? [];
    }

    public function getSubNodeNames() : array {
        return ['byRef', 'name', 'params', 'returnType', 'stmts'];
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
        return 'Stmt_Function';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Function_.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;
use PhpParser\\Node\\FunctionLike;

/**
 * @property Node\\Name \$namespacedName Namespaced name (if using NameResolver)
 */
class Function_ extends Node\\Stmt implements FunctionLike
{
    /** @var bool Whether function returns by reference */
    public \$byRef;
    /** @var Node\\Identifier Name */
    public \$name;
    /** @var Node\\Param[] Parameters */
    public \$params;
    /** @var null|Node\\Identifier|Node\\Name|Node\\NullableType|Node\\UnionType Return type */
    public \$returnType;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    /**
     * Constructs a function node.
     *
     * @param string|Node\\Identifier \$name Name
     * @param array  \$subNodes   Array of the following optional subnodes:
     *                           'byRef'      => false  : Whether to return by reference
     *                           'params'     => array(): Parameters
     *                           'returnType' => null   : Return type
     *                           'stmts'      => array(): Statements
     * @param array  \$attributes Additional attributes
     */
    public function __construct(\$name, array \$subNodes = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->byRef = \$subNodes['byRef'] ?? false;
        \$this->name = \\is_string(\$name) ? new Node\\Identifier(\$name) : \$name;
        \$this->params = \$subNodes['params'] ?? [];
        \$returnType = \$subNodes['returnType'] ?? null;
        \$this->returnType = \\is_string(\$returnType) ? new Node\\Identifier(\$returnType) : \$returnType;
        \$this->stmts = \$subNodes['stmts'] ?? [];
    }

    public function getSubNodeNames() : array {
        return ['byRef', 'name', 'params', 'returnType', 'stmts'];
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
        return 'Stmt_Function';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Function_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\Function_.php");
    }
}
