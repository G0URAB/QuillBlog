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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/MethodCall.php */
class __TwigTemplate_55fcbc871e88cb09d2987f93750ec788693c8f8b3faa3e3f7e976b7f8ef31c8b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/MethodCall.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Arg;
use PhpParser\\Node\\Expr;
use PhpParser\\Node\\Identifier;

class MethodCall extends Expr
{
    /** @var Expr Variable holding object */
    public \$var;
    /** @var Identifier|Expr Method name */
    public \$name;
    /** @var Arg[] Arguments */
    public \$args;

    /**
     * Constructs a function call node.
     *
     * @param Expr                   \$var        Variable holding object
     * @param string|Identifier|Expr \$name       Method name
     * @param Arg[]                  \$args       Arguments
     * @param array                  \$attributes Additional attributes
     */
    public function __construct(Expr \$var, \$name, array \$args = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->var = \$var;
        \$this->name = \\is_string(\$name) ? new Identifier(\$name) : \$name;
        \$this->args = \$args;
    }

    public function getSubNodeNames() : array {
        return ['var', 'name', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_MethodCall';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/MethodCall.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Arg;
use PhpParser\\Node\\Expr;
use PhpParser\\Node\\Identifier;

class MethodCall extends Expr
{
    /** @var Expr Variable holding object */
    public \$var;
    /** @var Identifier|Expr Method name */
    public \$name;
    /** @var Arg[] Arguments */
    public \$args;

    /**
     * Constructs a function call node.
     *
     * @param Expr                   \$var        Variable holding object
     * @param string|Identifier|Expr \$name       Method name
     * @param Arg[]                  \$args       Arguments
     * @param array                  \$attributes Additional attributes
     */
    public function __construct(Expr \$var, \$name, array \$args = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->var = \$var;
        \$this->name = \\is_string(\$name) ? new Identifier(\$name) : \$name;
        \$this->args = \$args;
    }

    public function getSubNodeNames() : array {
        return ['var', 'name', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_MethodCall';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/MethodCall.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Expr\\MethodCall.php");
    }
}
