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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/StaticVar.php */
class __TwigTemplate_2c59fb973a785f4718ebdc868481aa6fb06169e0118dccd179ee94af1e62a0fa extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/StaticVar.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;
use PhpParser\\Node\\Expr;

class StaticVar extends Node\\Stmt
{
    /** @var Expr\\Variable Variable */
    public \$var;
    /** @var null|Node\\Expr Default value */
    public \$default;

    /**
     * Constructs a static variable node.
     *
     * @param Expr\\Variable  \$var         Name
     * @param null|Node\\Expr \$default    Default value
     * @param array          \$attributes Additional attributes
     */
    public function __construct(
        Expr\\Variable \$var, Node\\Expr \$default = null, array \$attributes = []
    ) {
        \$this->attributes = \$attributes;
        \$this->var = \$var;
        \$this->default = \$default;
    }

    public function getSubNodeNames() : array {
        return ['var', 'default'];
    }
    
    public function getType() : string {
        return 'Stmt_StaticVar';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/StaticVar.php";
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

class StaticVar extends Node\\Stmt
{
    /** @var Expr\\Variable Variable */
    public \$var;
    /** @var null|Node\\Expr Default value */
    public \$default;

    /**
     * Constructs a static variable node.
     *
     * @param Expr\\Variable  \$var         Name
     * @param null|Node\\Expr \$default    Default value
     * @param array          \$attributes Additional attributes
     */
    public function __construct(
        Expr\\Variable \$var, Node\\Expr \$default = null, array \$attributes = []
    ) {
        \$this->attributes = \$attributes;
        \$this->var = \$var;
        \$this->default = \$default;
    }

    public function getSubNodeNames() : array {
        return ['var', 'default'];
    }
    
    public function getType() : string {
        return 'Stmt_StaticVar';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/StaticVar.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\StaticVar.php");
    }
}
