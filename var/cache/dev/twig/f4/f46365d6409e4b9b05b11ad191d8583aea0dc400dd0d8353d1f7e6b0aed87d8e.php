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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Builder/Function_.php */
class __TwigTemplate_55b69080ba1ec434fe1eca8e709f0e70245c1a479b8cd670088e2ed9b28aab6b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/Function_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser;
use PhpParser\\BuilderHelpers;
use PhpParser\\Node;
use PhpParser\\Node\\Stmt;

class Function_ extends FunctionLike
{
    protected \$name;
    protected \$stmts = [];

    /**
     * Creates a function builder.
     *
     * @param string \$name Name of the function
     */
    public function __construct(string \$name) {
        \$this->name = \$name;
    }

    /**
     * Adds a statement.
     *
     * @param Node|PhpParser\\Builder \$stmt The statement to add
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function addStmt(\$stmt) {
        \$this->stmts[] = BuilderHelpers::normalizeStmt(\$stmt);

        return \$this;
    }

    /**
     * Returns the built function node.
     *
     * @return Stmt\\Function_ The built function node
     */
    public function getNode() : Node {
        return new Stmt\\Function_(\$this->name, [
            'byRef'      => \$this->returnByRef,
            'params'     => \$this->params,
            'returnType' => \$this->returnType,
            'stmts'      => \$this->stmts,
        ], \$this->attributes);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/Function_.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser;
use PhpParser\\BuilderHelpers;
use PhpParser\\Node;
use PhpParser\\Node\\Stmt;

class Function_ extends FunctionLike
{
    protected \$name;
    protected \$stmts = [];

    /**
     * Creates a function builder.
     *
     * @param string \$name Name of the function
     */
    public function __construct(string \$name) {
        \$this->name = \$name;
    }

    /**
     * Adds a statement.
     *
     * @param Node|PhpParser\\Builder \$stmt The statement to add
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function addStmt(\$stmt) {
        \$this->stmts[] = BuilderHelpers::normalizeStmt(\$stmt);

        return \$this;
    }

    /**
     * Returns the built function node.
     *
     * @return Stmt\\Function_ The built function node
     */
    public function getNode() : Node {
        return new Stmt\\Function_(\$this->name, [
            'byRef'      => \$this->returnByRef,
            'params'     => \$this->params,
            'returnType' => \$this->returnType,
            'stmts'      => \$this->stmts,
        ], \$this->attributes);
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/Function_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Builder\\Function_.php");
    }
}
