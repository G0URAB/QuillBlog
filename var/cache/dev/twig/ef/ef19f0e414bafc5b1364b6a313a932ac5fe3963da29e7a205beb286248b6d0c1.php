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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Instanceof_.php */
class __TwigTemplate_c6848097d06c8e36c24420b9e54839cee43fbcb29758001b359467327313b9a8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Instanceof_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;
use PhpParser\\Node\\Name;

class Instanceof_ extends Expr
{
    /** @var Expr Expression */
    public \$expr;
    /** @var Name|Expr Class name */
    public \$class;

    /**
     * Constructs an instanceof check node.
     *
     * @param Expr      \$expr       Expression
     * @param Name|Expr \$class      Class name
     * @param array     \$attributes Additional attributes
     */
    public function __construct(Expr \$expr, \$class, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->expr = \$expr;
        \$this->class = \$class;
    }

    public function getSubNodeNames() : array {
        return ['expr', 'class'];
    }
    
    public function getType() : string {
        return 'Expr_Instanceof';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Instanceof_.php";
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
use PhpParser\\Node\\Name;

class Instanceof_ extends Expr
{
    /** @var Expr Expression */
    public \$expr;
    /** @var Name|Expr Class name */
    public \$class;

    /**
     * Constructs an instanceof check node.
     *
     * @param Expr      \$expr       Expression
     * @param Name|Expr \$class      Class name
     * @param array     \$attributes Additional attributes
     */
    public function __construct(Expr \$expr, \$class, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->expr = \$expr;
        \$this->class = \$class;
    }

    public function getSubNodeNames() : array {
        return ['expr', 'class'];
    }
    
    public function getType() : string {
        return 'Expr_Instanceof';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Instanceof_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Expr\\Instanceof_.php");
    }
}
