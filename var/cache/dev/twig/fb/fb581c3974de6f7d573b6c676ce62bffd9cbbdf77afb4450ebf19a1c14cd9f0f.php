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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/TryCatch.php */
class __TwigTemplate_4771a122c0a34771861027ef6cb4006da8616f83c2f0a9efad4c8261daac3293 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/TryCatch.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Stmt;

use PhpParser\\Node;

class TryCatch extends Node\\Stmt
{
    /** @var Node\\Stmt[] Statements */
    public \$stmts;
    /** @var Catch_[] Catches */
    public \$catches;
    /** @var null|Finally_ Optional finally node */
    public \$finally;

    /**
     * Constructs a try catch node.
     *
     * @param Node\\Stmt[]   \$stmts      Statements
     * @param Catch_[]      \$catches    Catches
     * @param null|Finally_ \$finally    Optional finally node
     * @param array         \$attributes Additional attributes
     */
    public function __construct(array \$stmts, array \$catches, Finally_ \$finally = null, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->stmts = \$stmts;
        \$this->catches = \$catches;
        \$this->finally = \$finally;
    }

    public function getSubNodeNames() : array {
        return ['stmts', 'catches', 'finally'];
    }

    public function getType() : string {
        return 'Stmt_TryCatch';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/TryCatch.php";
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

class TryCatch extends Node\\Stmt
{
    /** @var Node\\Stmt[] Statements */
    public \$stmts;
    /** @var Catch_[] Catches */
    public \$catches;
    /** @var null|Finally_ Optional finally node */
    public \$finally;

    /**
     * Constructs a try catch node.
     *
     * @param Node\\Stmt[]   \$stmts      Statements
     * @param Catch_[]      \$catches    Catches
     * @param null|Finally_ \$finally    Optional finally node
     * @param array         \$attributes Additional attributes
     */
    public function __construct(array \$stmts, array \$catches, Finally_ \$finally = null, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->stmts = \$stmts;
        \$this->catches = \$catches;
        \$this->finally = \$finally;
    }

    public function getSubNodeNames() : array {
        return ['stmts', 'catches', 'finally'];
    }

    public function getType() : string {
        return 'Stmt_TryCatch';
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Stmt/TryCatch.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Stmt\\TryCatch.php");
    }
}
