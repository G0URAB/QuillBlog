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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Catch_.php */
class __TwigTemplate_6e78d347ee629778fc4bd8a2404477adc00892756254ac1f8668f378c284393d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Catch_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;
use PhpParser\\Node\\Expr;

class Catch_ extends Node\\Stmt
{
    /** @var Node\\Name[] Types of exceptions to catch */
    public \$types;
    /** @var Expr\\Variable Variable for exception */
    public \$var;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    /**
     * Constructs a catch node.
     *
     * @param Node\\Name[]   \$types      Types of exceptions to catch
     * @param Expr\\Variable \$var        Variable for exception
     * @param Node\\Stmt[]   \$stmts      Statements
     * @param array         \$attributes Additional attributes
     */
    public function __construct(
        array \$types, Expr\\Variable \$var, array \$stmts = [], array \$attributes = []
    ) {
        \$this->attributes = \$attributes;
        \$this->types = \$types;
        \$this->var = \$var;
        \$this->stmts = \$stmts;
    }

    public function getSubNodeNames() : array {
        return ['types', 'var', 'stmts'];
    }
    
    public function getType() : string {
        return 'Stmt_Catch';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Catch_.php";
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
use PhpParser\\Node\\Expr;

class Catch_ extends Node\\Stmt
{
    /** @var Node\\Name[] Types of exceptions to catch */
    public \$types;
    /** @var Expr\\Variable Variable for exception */
    public \$var;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    /**
     * Constructs a catch node.
     *
     * @param Node\\Name[]   \$types      Types of exceptions to catch
     * @param Expr\\Variable \$var        Variable for exception
     * @param Node\\Stmt[]   \$stmts      Statements
     * @param array         \$attributes Additional attributes
     */
    public function __construct(
        array \$types, Expr\\Variable \$var, array \$stmts = [], array \$attributes = []
    ) {
        \$this->attributes = \$attributes;
        \$this->types = \$types;
        \$this->var = \$var;
        \$this->stmts = \$stmts;
    }

    public function getSubNodeNames() : array {
        return ['types', 'var', 'stmts'];
    }
    
    public function getType() : string {
        return 'Stmt_Catch';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Catch_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\Catch_.php");
    }
}
