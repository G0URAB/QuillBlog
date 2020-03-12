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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/PropertyProperty.php */
class __TwigTemplate_4759a36f938a575125138acd577e2c83c1747a07b7a98eaa354b8cc6b9457d68 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/PropertyProperty.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

class PropertyProperty extends Node\\Stmt
{
    /** @var Node\\VarLikeIdentifier Name */
    public \$name;
    /** @var null|Node\\Expr Default */
    public \$default;

    /**
     * Constructs a class property node.
     *
     * @param string|Node\\VarLikeIdentifier \$name       Name
     * @param null|Node\\Expr                \$default    Default value
     * @param array                         \$attributes Additional attributes
     */
    public function __construct(\$name, Node\\Expr \$default = null, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->name = \\is_string(\$name) ? new Node\\VarLikeIdentifier(\$name) : \$name;
        \$this->default = \$default;
    }

    public function getSubNodeNames() : array {
        return ['name', 'default'];
    }
    
    public function getType() : string {
        return 'Stmt_PropertyProperty';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/PropertyProperty.php";
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

class PropertyProperty extends Node\\Stmt
{
    /** @var Node\\VarLikeIdentifier Name */
    public \$name;
    /** @var null|Node\\Expr Default */
    public \$default;

    /**
     * Constructs a class property node.
     *
     * @param string|Node\\VarLikeIdentifier \$name       Name
     * @param null|Node\\Expr                \$default    Default value
     * @param array                         \$attributes Additional attributes
     */
    public function __construct(\$name, Node\\Expr \$default = null, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->name = \\is_string(\$name) ? new Node\\VarLikeIdentifier(\$name) : \$name;
        \$this->default = \$default;
    }

    public function getSubNodeNames() : array {
        return ['name', 'default'];
    }
    
    public function getType() : string {
        return 'Stmt_PropertyProperty';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/PropertyProperty.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\PropertyProperty.php");
    }
}
