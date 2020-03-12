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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Builder/Interface_.php */
class __TwigTemplate_871b5a9dd8be4f32ca7e47673aa19cf417eb6d77149887b942c659510bcb9408 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/Interface_.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser;
use PhpParser\\BuilderHelpers;
use PhpParser\\Node\\Name;
use PhpParser\\Node\\Stmt;

class Interface_ extends Declaration
{
    protected \$name;
    protected \$extends = [];
    protected \$constants = [];
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
     * Extends one or more interfaces.
     *
     * @param Name|string ...\$interfaces Names of interfaces to extend
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function extend(...\$interfaces) {
        foreach (\$interfaces as \$interface) {
            \$this->extends[] = BuilderHelpers::normalizeName(\$interface);
        }

        return \$this;
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

        if (\$stmt instanceof Stmt\\ClassConst) {
            \$this->constants[] = \$stmt;
        } elseif (\$stmt instanceof Stmt\\ClassMethod) {
            // we erase all statements in the body of an interface method
            \$stmt->stmts = null;
            \$this->methods[] = \$stmt;
        } else {
            throw new \\LogicException(sprintf('Unexpected node of type \"%s\"', \$stmt->getType()));
        }

        return \$this;
    }

    /**
     * Returns the built interface node.
     *
     * @return Stmt\\Interface_ The built interface node
     */
    public function getNode() : PhpParser\\Node {
        return new Stmt\\Interface_(\$this->name, [
            'extends' => \$this->extends,
            'stmts' => array_merge(\$this->constants, \$this->methods),
        ], \$this->attributes);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/Interface_.php";
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
use PhpParser\\Node\\Name;
use PhpParser\\Node\\Stmt;

class Interface_ extends Declaration
{
    protected \$name;
    protected \$extends = [];
    protected \$constants = [];
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
     * Extends one or more interfaces.
     *
     * @param Name|string ...\$interfaces Names of interfaces to extend
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function extend(...\$interfaces) {
        foreach (\$interfaces as \$interface) {
            \$this->extends[] = BuilderHelpers::normalizeName(\$interface);
        }

        return \$this;
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

        if (\$stmt instanceof Stmt\\ClassConst) {
            \$this->constants[] = \$stmt;
        } elseif (\$stmt instanceof Stmt\\ClassMethod) {
            // we erase all statements in the body of an interface method
            \$stmt->stmts = null;
            \$this->methods[] = \$stmt;
        } else {
            throw new \\LogicException(sprintf('Unexpected node of type \"%s\"', \$stmt->getType()));
        }

        return \$this;
    }

    /**
     * Returns the built interface node.
     *
     * @return Stmt\\Interface_ The built interface node
     */
    public function getNode() : PhpParser\\Node {
        return new Stmt\\Interface_(\$this->name, [
            'extends' => \$this->extends,
            'stmts' => array_merge(\$this->constants, \$this->methods),
        ], \$this->attributes);
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/Interface_.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Builder\\Interface_.php");
    }
}
