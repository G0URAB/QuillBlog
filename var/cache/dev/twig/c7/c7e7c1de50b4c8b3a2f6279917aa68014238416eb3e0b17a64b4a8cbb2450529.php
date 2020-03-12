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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Const_.php */
class __TwigTemplate_d23f80c4dab379bb3706778e26580a86081055ab7ba3637b07c6ca2c070c5883 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Const_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

class Const_ extends Node\\Stmt
{
    /** @var Node\\Const_[] Constant declarations */
    public \$consts;

    /**
     * Constructs a const list node.
     *
     * @param Node\\Const_[] \$consts     Constant declarations
     * @param array         \$attributes Additional attributes
     */
    public function __construct(array \$consts, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->consts = \$consts;
    }

    public function getSubNodeNames() : array {
        return ['consts'];
    }
    
    public function getType() : string {
        return 'Stmt_Const';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Const_.php";
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

class Const_ extends Node\\Stmt
{
    /** @var Node\\Const_[] Constant declarations */
    public \$consts;

    /**
     * Constructs a const list node.
     *
     * @param Node\\Const_[] \$consts     Constant declarations
     * @param array         \$attributes Additional attributes
     */
    public function __construct(array \$consts, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->consts = \$consts;
    }

    public function getSubNodeNames() : array {
        return ['consts'];
    }
    
    public function getType() : string {
        return 'Stmt_Const';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Const_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\Const_.php");
    }
}
