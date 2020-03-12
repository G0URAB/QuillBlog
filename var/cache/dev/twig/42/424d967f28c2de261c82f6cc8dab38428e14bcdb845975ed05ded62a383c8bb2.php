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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Switch_.php */
class __TwigTemplate_858a220241f4478abb79a8d6a96e79bad49a344d282ee966cf553ca8fd7231b9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Switch_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

class Switch_ extends Node\\Stmt
{
    /** @var Node\\Expr Condition */
    public \$cond;
    /** @var Case_[] Case list */
    public \$cases;

    /**
     * Constructs a case node.
     *
     * @param Node\\Expr \$cond       Condition
     * @param Case_[]   \$cases      Case list
     * @param array     \$attributes Additional attributes
     */
    public function __construct(Node\\Expr \$cond, array \$cases, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->cond = \$cond;
        \$this->cases = \$cases;
    }

    public function getSubNodeNames() : array {
        return ['cond', 'cases'];
    }
    
    public function getType() : string {
        return 'Stmt_Switch';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Switch_.php";
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

class Switch_ extends Node\\Stmt
{
    /** @var Node\\Expr Condition */
    public \$cond;
    /** @var Case_[] Case list */
    public \$cases;

    /**
     * Constructs a case node.
     *
     * @param Node\\Expr \$cond       Condition
     * @param Case_[]   \$cases      Case list
     * @param array     \$attributes Additional attributes
     */
    public function __construct(Node\\Expr \$cond, array \$cases, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->cond = \$cond;
        \$this->cases = \$cases;
    }

    public function getSubNodeNames() : array {
        return ['cond', 'cases'];
    }
    
    public function getType() : string {
        return 'Stmt_Switch';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Switch_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\Switch_.php");
    }
}
