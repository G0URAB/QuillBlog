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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/New_.php */
class __TwigTemplate_83637de2c012eba6982f62754cdf9288771b35c1d4cdc0d60730e11ac1e7a7cb extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/New_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node;
use PhpParser\\Node\\Expr;

class New_ extends Expr
{
    /** @var Node\\Name|Expr|Node\\Stmt\\Class_ Class name */
    public \$class;
    /** @var Node\\Arg[] Arguments */
    public \$args;

    /**
     * Constructs a function call node.
     *
     * @param Node\\Name|Expr|Node\\Stmt\\Class_ \$class      Class name (or class node for anonymous classes)
     * @param Node\\Arg[]                      \$args       Arguments
     * @param array                           \$attributes Additional attributes
     */
    public function __construct(\$class, array \$args = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->class = \$class;
        \$this->args = \$args;
    }

    public function getSubNodeNames() : array {
        return ['class', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_New';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/New_.php";
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

class New_ extends Expr
{
    /** @var Node\\Name|Expr|Node\\Stmt\\Class_ Class name */
    public \$class;
    /** @var Node\\Arg[] Arguments */
    public \$args;

    /**
     * Constructs a function call node.
     *
     * @param Node\\Name|Expr|Node\\Stmt\\Class_ \$class      Class name (or class node for anonymous classes)
     * @param Node\\Arg[]                      \$args       Arguments
     * @param array                           \$attributes Additional attributes
     */
    public function __construct(\$class, array \$args = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->class = \$class;
        \$this->args = \$args;
    }

    public function getSubNodeNames() : array {
        return ['class', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_New';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/New_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Expr\\New_.php");
    }
}
