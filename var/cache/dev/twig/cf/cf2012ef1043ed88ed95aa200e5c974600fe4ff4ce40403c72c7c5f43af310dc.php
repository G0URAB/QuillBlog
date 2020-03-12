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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Include_.php */
class __TwigTemplate_76330b0bf5a8b64b946294ae593833b016b5cb5c96a6ee602f81cc6be4e9ec7a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Include_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;

class Include_ extends Expr
{
    const TYPE_INCLUDE      = 1;
    const TYPE_INCLUDE_ONCE = 2;
    const TYPE_REQUIRE      = 3;
    const TYPE_REQUIRE_ONCE = 4;

    /** @var Expr Expression */
    public \$expr;
    /** @var int Type of include */
    public \$type;

    /**
     * Constructs an include node.
     *
     * @param Expr  \$expr       Expression
     * @param int   \$type       Type of include
     * @param array \$attributes Additional attributes
     */
    public function __construct(Expr \$expr, int \$type, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->expr = \$expr;
        \$this->type = \$type;
    }

    public function getSubNodeNames() : array {
        return ['expr', 'type'];
    }
    
    public function getType() : string {
        return 'Expr_Include';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Include_.php";
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

class Include_ extends Expr
{
    const TYPE_INCLUDE      = 1;
    const TYPE_INCLUDE_ONCE = 2;
    const TYPE_REQUIRE      = 3;
    const TYPE_REQUIRE_ONCE = 4;

    /** @var Expr Expression */
    public \$expr;
    /** @var int Type of include */
    public \$type;

    /**
     * Constructs an include node.
     *
     * @param Expr  \$expr       Expression
     * @param int   \$type       Type of include
     * @param array \$attributes Additional attributes
     */
    public function __construct(Expr \$expr, int \$type, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->expr = \$expr;
        \$this->type = \$type;
    }

    public function getSubNodeNames() : array {
        return ['expr', 'type'];
    }
    
    public function getType() : string {
        return 'Expr_Include';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Include_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Expr\\Include_.php");
    }
}
