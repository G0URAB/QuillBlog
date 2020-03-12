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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Echo_.php */
class __TwigTemplate_f3905694dea5b0679cd1b42531f7d55602ba2d46508ee77ad792cfe67ebcab71 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Echo_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

class Echo_ extends Node\\Stmt
{
    /** @var Node\\Expr[] Expressions */
    public \$exprs;

    /**
     * Constructs an echo node.
     *
     * @param Node\\Expr[] \$exprs      Expressions
     * @param array       \$attributes Additional attributes
     */
    public function __construct(array \$exprs, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->exprs = \$exprs;
    }

    public function getSubNodeNames() : array {
        return ['exprs'];
    }
    
    public function getType() : string {
        return 'Stmt_Echo';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Echo_.php";
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

class Echo_ extends Node\\Stmt
{
    /** @var Node\\Expr[] Expressions */
    public \$exprs;

    /**
     * Constructs an echo node.
     *
     * @param Node\\Expr[] \$exprs      Expressions
     * @param array       \$attributes Additional attributes
     */
    public function __construct(array \$exprs, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->exprs = \$exprs;
    }

    public function getSubNodeNames() : array {
        return ['exprs'];
    }
    
    public function getType() : string {
        return 'Stmt_Echo';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Echo_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\Echo_.php");
    }
}
