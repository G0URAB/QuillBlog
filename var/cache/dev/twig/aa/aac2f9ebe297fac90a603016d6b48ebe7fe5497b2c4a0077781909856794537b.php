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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Ternary.php */
class __TwigTemplate_656cf6b4d6a5eaca90737bd2262f327cd29c72ecf0e38338357b61eedcca2f68 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Ternary.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;

class Ternary extends Expr
{
    /** @var Expr Condition */
    public \$cond;
    /** @var null|Expr Expression for true */
    public \$if;
    /** @var Expr Expression for false */
    public \$else;

    /**
     * Constructs a ternary operator node.
     *
     * @param Expr      \$cond       Condition
     * @param null|Expr \$if         Expression for true
     * @param Expr      \$else       Expression for false
     * @param array                    \$attributes Additional attributes
     */
    public function __construct(Expr \$cond, \$if, Expr \$else, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->cond = \$cond;
        \$this->if = \$if;
        \$this->else = \$else;
    }

    public function getSubNodeNames() : array {
        return ['cond', 'if', 'else'];
    }
    
    public function getType() : string {
        return 'Expr_Ternary';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Ternary.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;

class Ternary extends Expr
{
    /** @var Expr Condition */
    public \$cond;
    /** @var null|Expr Expression for true */
    public \$if;
    /** @var Expr Expression for false */
    public \$else;

    /**
     * Constructs a ternary operator node.
     *
     * @param Expr      \$cond       Condition
     * @param null|Expr \$if         Expression for true
     * @param Expr      \$else       Expression for false
     * @param array                    \$attributes Additional attributes
     */
    public function __construct(Expr \$cond, \$if, Expr \$else, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->cond = \$cond;
        \$this->if = \$if;
        \$this->else = \$else;
    }

    public function getSubNodeNames() : array {
        return ['cond', 'if', 'else'];
    }
    
    public function getType() : string {
        return 'Expr_Ternary';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Ternary.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Expr\\Ternary.php");
    }
}
