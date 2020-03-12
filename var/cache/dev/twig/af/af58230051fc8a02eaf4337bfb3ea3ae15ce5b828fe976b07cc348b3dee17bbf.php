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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/PreInc.php */
class __TwigTemplate_fe6c6cbb68c5c4dfe39d2ced58074a6ed3ceae0676a6522f127aab81c9e8d71c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/PreInc.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;

class PreInc extends Expr
{
    /** @var Expr Variable */
    public \$var;

    /**
     * Constructs a pre increment node.
     *
     * @param Expr  \$var        Variable
     * @param array \$attributes Additional attributes
     */
    public function __construct(Expr \$var, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->var = \$var;
    }

    public function getSubNodeNames() : array {
        return ['var'];
    }
    
    public function getType() : string {
        return 'Expr_PreInc';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/PreInc.php";
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

class PreInc extends Expr
{
    /** @var Expr Variable */
    public \$var;

    /**
     * Constructs a pre increment node.
     *
     * @param Expr  \$var        Variable
     * @param array \$attributes Additional attributes
     */
    public function __construct(Expr \$var, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->var = \$var;
    }

    public function getSubNodeNames() : array {
        return ['var'];
    }
    
    public function getType() : string {
        return 'Expr_PreInc';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/PreInc.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Expr\\PreInc.php");
    }
}
