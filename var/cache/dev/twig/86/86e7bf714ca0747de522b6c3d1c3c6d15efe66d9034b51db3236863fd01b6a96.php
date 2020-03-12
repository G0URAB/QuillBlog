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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Exit_.php */
class __TwigTemplate_f0f37ce86dc5fb26453cb8f7656bf9c3cbd91a0bf1b7663f317e4c1503f15c37 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Exit_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;

class Exit_ extends Expr
{
    /* For use in \"kind\" attribute */
    const KIND_EXIT = 1;
    const KIND_DIE = 2;

    /** @var null|Expr Expression */
    public \$expr;

    /**
     * Constructs an exit() node.
     *
     * @param null|Expr \$expr       Expression
     * @param array                    \$attributes Additional attributes
     */
    public function __construct(Expr \$expr = null, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->expr = \$expr;
    }

    public function getSubNodeNames() : array {
        return ['expr'];
    }
    
    public function getType() : string {
        return 'Expr_Exit';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Exit_.php";
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

class Exit_ extends Expr
{
    /* For use in \"kind\" attribute */
    const KIND_EXIT = 1;
    const KIND_DIE = 2;

    /** @var null|Expr Expression */
    public \$expr;

    /**
     * Constructs an exit() node.
     *
     * @param null|Expr \$expr       Expression
     * @param array                    \$attributes Additional attributes
     */
    public function __construct(Expr \$expr = null, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->expr = \$expr;
    }

    public function getSubNodeNames() : array {
        return ['expr'];
    }
    
    public function getType() : string {
        return 'Expr_Exit';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Exit_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Expr\\Exit_.php");
    }
}
