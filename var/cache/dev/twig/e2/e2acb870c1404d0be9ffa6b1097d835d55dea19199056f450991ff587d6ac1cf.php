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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Else_.php */
class __TwigTemplate_68e1c1fb2bffe5bcfe852d4e255972d25d94bed3318aef8edba5c1c3cccd426c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Else_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

class Else_ extends Node\\Stmt
{
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    /**
     * Constructs an else node.
     *
     * @param Node\\Stmt[] \$stmts      Statements
     * @param array       \$attributes Additional attributes
     */
    public function __construct(array \$stmts = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->stmts = \$stmts;
    }

    public function getSubNodeNames() : array {
        return ['stmts'];
    }
    
    public function getType() : string {
        return 'Stmt_Else';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Else_.php";
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

class Else_ extends Node\\Stmt
{
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    /**
     * Constructs an else node.
     *
     * @param Node\\Stmt[] \$stmts      Statements
     * @param array       \$attributes Additional attributes
     */
    public function __construct(array \$stmts = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->stmts = \$stmts;
    }

    public function getSubNodeNames() : array {
        return ['stmts'];
    }
    
    public function getType() : string {
        return 'Stmt_Else';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Else_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\Else_.php");
    }
}
