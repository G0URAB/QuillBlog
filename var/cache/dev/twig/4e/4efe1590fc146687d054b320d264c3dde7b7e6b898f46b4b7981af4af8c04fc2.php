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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Namespace_.php */
class __TwigTemplate_3e32ec3a30fc2b6205adc2f0c2d711a4d3a0794405e6a64b9f57c4def723b66f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Namespace_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

class Namespace_ extends Node\\Stmt
{
    /* For use in the \"kind\" attribute */
    const KIND_SEMICOLON = 1;
    const KIND_BRACED = 2;

    /** @var null|Node\\Name Name */
    public \$name;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    /**
     * Constructs a namespace node.
     *
     * @param null|Node\\Name   \$name       Name
     * @param null|Node\\Stmt[] \$stmts      Statements
     * @param array            \$attributes Additional attributes
     */
    public function __construct(Node\\Name \$name = null, \$stmts = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->name = \$name;
        \$this->stmts = \$stmts;
    }

    public function getSubNodeNames() : array {
        return ['name', 'stmts'];
    }
    
    public function getType() : string {
        return 'Stmt_Namespace';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Namespace_.php";
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

class Namespace_ extends Node\\Stmt
{
    /* For use in the \"kind\" attribute */
    const KIND_SEMICOLON = 1;
    const KIND_BRACED = 2;

    /** @var null|Node\\Name Name */
    public \$name;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    /**
     * Constructs a namespace node.
     *
     * @param null|Node\\Name   \$name       Name
     * @param null|Node\\Stmt[] \$stmts      Statements
     * @param array            \$attributes Additional attributes
     */
    public function __construct(Node\\Name \$name = null, \$stmts = [], array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->name = \$name;
        \$this->stmts = \$stmts;
    }

    public function getSubNodeNames() : array {
        return ['name', 'stmts'];
    }
    
    public function getType() : string {
        return 'Stmt_Namespace';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/Namespace_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\Namespace_.php");
    }
}
