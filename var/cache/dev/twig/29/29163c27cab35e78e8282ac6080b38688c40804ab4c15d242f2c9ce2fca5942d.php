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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/StaticCall.php */
class __TwigTemplate_e27e70d283e56a9fb52a410acf58ec7bd0fb499398e5b7b340cf82eb9a1480c8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/StaticCall.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node;
use PhpParser\\Node\\Expr;
use PhpParser\\Node\\Identifier;

class StaticCall extends Expr
{
    /** @var Node\\Name|Expr Class name */
    public \$class;
    /** @var Identifier|Expr Method name */
    public \$name;
    /** @var Node\\Arg[] Arguments */
    public \$args;

    /**
     * Constructs a static method call node.
     *
     * @param Node\\Name|Expr         \$class      Class name
     * @param string|Identifier|Expr \$name       Method name
     * @param Node\\Arg[]             \$args       Arguments
     * @param array                  \$attributes Additional attributes
     */
    public function __construct(\$class, \$name, array \$args = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->class = \$class;
        \$this->name = \\is_string(\$name) ? new Identifier(\$name) : \$name;
        \$this->args = \$args;
    }

    public function getSubNodeNames() : array {
        return ['class', 'name', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_StaticCall';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/StaticCall.php";
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
use PhpParser\\Node\\Identifier;

class StaticCall extends Expr
{
    /** @var Node\\Name|Expr Class name */
    public \$class;
    /** @var Identifier|Expr Method name */
    public \$name;
    /** @var Node\\Arg[] Arguments */
    public \$args;

    /**
     * Constructs a static method call node.
     *
     * @param Node\\Name|Expr         \$class      Class name
     * @param string|Identifier|Expr \$name       Method name
     * @param Node\\Arg[]             \$args       Arguments
     * @param array                  \$attributes Additional attributes
     */
    public function __construct(\$class, \$name, array \$args = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->class = \$class;
        \$this->name = \\is_string(\$name) ? new Identifier(\$name) : \$name;
        \$this->args = \$args;
    }

    public function getSubNodeNames() : array {
        return ['class', 'name', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_StaticCall';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/StaticCall.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Expr\\StaticCall.php");
    }
}
