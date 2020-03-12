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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Yield_.php */
class __TwigTemplate_48b8caf0f636fed054d125a73f500e740b4f05a4cbf0304bc1588cf77551dba6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Yield_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;

class Yield_ extends Expr
{
    /** @var null|Expr Key expression */
    public \$key;
    /** @var null|Expr Value expression */
    public \$value;

    /**
     * Constructs a yield expression node.
     *
     * @param null|Expr \$value      Value expression
     * @param null|Expr \$key        Key expression
     * @param array     \$attributes Additional attributes
     */
    public function __construct(Expr \$value = null, Expr \$key = null, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->key = \$key;
        \$this->value = \$value;
    }

    public function getSubNodeNames() : array {
        return ['key', 'value'];
    }
    
    public function getType() : string {
        return 'Expr_Yield';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Yield_.php";
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

class Yield_ extends Expr
{
    /** @var null|Expr Key expression */
    public \$key;
    /** @var null|Expr Value expression */
    public \$value;

    /**
     * Constructs a yield expression node.
     *
     * @param null|Expr \$value      Value expression
     * @param null|Expr \$key        Key expression
     * @param array     \$attributes Additional attributes
     */
    public function __construct(Expr \$value = null, Expr \$key = null, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->key = \$key;
        \$this->value = \$value;
    }

    public function getSubNodeNames() : array {
        return ['key', 'value'];
    }
    
    public function getType() : string {
        return 'Expr_Yield';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Yield_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Expr\\Yield_.php");
    }
}
