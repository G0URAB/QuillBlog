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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/DeclareDeclare.php */
class __TwigTemplate_bcc17f4fc4562e8accf908293d891d6a821b31667794a62f8ac2b573d978df4f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/DeclareDeclare.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

class DeclareDeclare extends Node\\Stmt
{
    /** @var Node\\Identifier Key */
    public \$key;
    /** @var Node\\Expr Value */
    public \$value;

    /**
     * Constructs a declare key=>value pair node.
     *
     * @param string|Node\\Identifier \$key        Key
     * @param Node\\Expr              \$value      Value
     * @param array                  \$attributes Additional attributes
     */
    public function __construct(\$key, Node\\Expr \$value, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->key = \\is_string(\$key) ? new Node\\Identifier(\$key) : \$key;
        \$this->value = \$value;
    }

    public function getSubNodeNames() : array {
        return ['key', 'value'];
    }
    
    public function getType() : string {
        return 'Stmt_DeclareDeclare';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/DeclareDeclare.php";
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

class DeclareDeclare extends Node\\Stmt
{
    /** @var Node\\Identifier Key */
    public \$key;
    /** @var Node\\Expr Value */
    public \$value;

    /**
     * Constructs a declare key=>value pair node.
     *
     * @param string|Node\\Identifier \$key        Key
     * @param Node\\Expr              \$value      Value
     * @param array                  \$attributes Additional attributes
     */
    public function __construct(\$key, Node\\Expr \$value, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->key = \\is_string(\$key) ? new Node\\Identifier(\$key) : \$key;
        \$this->value = \$value;
    }

    public function getSubNodeNames() : array {
        return ['key', 'value'];
    }
    
    public function getType() : string {
        return 'Stmt_DeclareDeclare';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/DeclareDeclare.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\DeclareDeclare.php");
    }
}
