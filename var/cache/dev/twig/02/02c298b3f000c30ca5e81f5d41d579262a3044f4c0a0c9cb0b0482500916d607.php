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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/For_.php */
class __TwigTemplate_161343e38f917b5c92a738946ae44dc743988a9d95aa9ddf29a8ed00e335e103 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/For_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

class For_ extends Node\\Stmt
{
    /** @var Node\\Expr[] Init expressions */
    public \$init;
    /** @var Node\\Expr[] Loop conditions */
    public \$cond;
    /** @var Node\\Expr[] Loop expressions */
    public \$loop;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    /**
     * Constructs a for loop node.
     *
     * @param array \$subNodes   Array of the following optional subnodes:
     *                          'init'  => array(): Init expressions
     *                          'cond'  => array(): Loop conditions
     *                          'loop'  => array(): Loop expressions
     *                          'stmts' => array(): Statements
     * @param array \$attributes Additional attributes
     */
    public function __construct(array \$subNodes = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->init = \$subNodes['init'] ?? [];
        \$this->cond = \$subNodes['cond'] ?? [];
        \$this->loop = \$subNodes['loop'] ?? [];
        \$this->stmts = \$subNodes['stmts'] ?? [];
    }

    public function getSubNodeNames() : array {
        return ['init', 'cond', 'loop', 'stmts'];
    }
    
    public function getType() : string {
        return 'Stmt_For';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/For_.php";
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

class For_ extends Node\\Stmt
{
    /** @var Node\\Expr[] Init expressions */
    public \$init;
    /** @var Node\\Expr[] Loop conditions */
    public \$cond;
    /** @var Node\\Expr[] Loop expressions */
    public \$loop;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    /**
     * Constructs a for loop node.
     *
     * @param array \$subNodes   Array of the following optional subnodes:
     *                          'init'  => array(): Init expressions
     *                          'cond'  => array(): Loop conditions
     *                          'loop'  => array(): Loop expressions
     *                          'stmts' => array(): Statements
     * @param array \$attributes Additional attributes
     */
    public function __construct(array \$subNodes = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->init = \$subNodes['init'] ?? [];
        \$this->cond = \$subNodes['cond'] ?? [];
        \$this->loop = \$subNodes['loop'] ?? [];
        \$this->stmts = \$subNodes['stmts'] ?? [];
    }

    public function getSubNodeNames() : array {
        return ['init', 'cond', 'loop', 'stmts'];
    }
    
    public function getType() : string {
        return 'Stmt_For';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/For_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\For_.php");
    }
}
