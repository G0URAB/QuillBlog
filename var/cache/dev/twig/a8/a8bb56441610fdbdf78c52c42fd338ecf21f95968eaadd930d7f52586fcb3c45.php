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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Builder/Trait_.php */
class __TwigTemplate_101e98b9574b8ce66efbd69e94ac9258978f3e40a9092a43d3204fe89ec1fa67 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/Trait_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser;
use PhpParser\\BuilderHelpers;
use PhpParser\\Node\\Stmt;

class Trait_ extends Declaration
{
    protected \$name;
    protected \$uses = [];
    protected \$properties = [];
    protected \$methods = [];

    /**
     * Creates an interface builder.
     *
     * @param string \$name Name of the interface
     */
    public function __construct(string \$name) {
        \$this->name = \$name;
    }

    /**
     * Adds a statement.
     *
     * @param Stmt|PhpParser\\Builder \$stmt The statement to add
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function addStmt(\$stmt) {
        \$stmt = BuilderHelpers::normalizeNode(\$stmt);

        if (\$stmt instanceof Stmt\\Property) {
            \$this->properties[] = \$stmt;
        } elseif (\$stmt instanceof Stmt\\ClassMethod) {
            \$this->methods[] = \$stmt;
        } elseif (\$stmt instanceof Stmt\\TraitUse) {
            \$this->uses[] = \$stmt;
        } else {
            throw new \\LogicException(sprintf('Unexpected node of type \"%s\"', \$stmt->getType()));
        }

        return \$this;
    }

    /**
     * Returns the built trait node.
     *
     * @return Stmt\\Trait_ The built interface node
     */
    public function getNode() : PhpParser\\Node {
        return new Stmt\\Trait_(
            \$this->name, [
                'stmts' => array_merge(\$this->uses, \$this->properties, \$this->methods)
            ], \$this->attributes
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/Trait_.php";
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
use PhpParser\\Node\\Stmt;

class Trait_ extends Declaration
{
    protected \$name;
    protected \$uses = [];
    protected \$properties = [];
    protected \$methods = [];

    /**
     * Creates an interface builder.
     *
     * @param string \$name Name of the interface
     */
    public function __construct(string \$name) {
        \$this->name = \$name;
    }

    /**
     * Adds a statement.
     *
     * @param Stmt|PhpParser\\Builder \$stmt The statement to add
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function addStmt(\$stmt) {
        \$stmt = BuilderHelpers::normalizeNode(\$stmt);

        if (\$stmt instanceof Stmt\\Property) {
            \$this->properties[] = \$stmt;
        } elseif (\$stmt instanceof Stmt\\ClassMethod) {
            \$this->methods[] = \$stmt;
        } elseif (\$stmt instanceof Stmt\\TraitUse) {
            \$this->uses[] = \$stmt;
        } else {
            throw new \\LogicException(sprintf('Unexpected node of type \"%s\"', \$stmt->getType()));
        }

        return \$this;
    }

    /**
     * Returns the built trait node.
     *
     * @return Stmt\\Trait_ The built interface node
     */
    public function getNode() : PhpParser\\Node {
        return new Stmt\\Trait_(
            \$this->name, [
                'stmts' => array_merge(\$this->uses, \$this->properties, \$this->methods)
            ], \$this->attributes
        );
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/Trait_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Builder\\Trait_.php");
    }
}
