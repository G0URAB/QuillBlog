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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Builder/Param.php */
class __TwigTemplate_da8c0252ebfed1675bca042d3b49527817305c5503d2e2a1cf92b08c52facf9f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/Param.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser;
use PhpParser\\BuilderHelpers;
use PhpParser\\Node;

class Param implements PhpParser\\Builder
{
    protected \$name;

    protected \$default = null;

    /** @var Node\\Identifier|Node\\Name|Node\\NullableType|null */
    protected \$type = null;

    protected \$byRef = false;

    protected \$variadic = false;

    /**
     * Creates a parameter builder.
     *
     * @param string \$name Name of the parameter
     */
    public function __construct(string \$name) {
        \$this->name = \$name;
    }

    /**
     * Sets default value for the parameter.
     *
     * @param mixed \$value Default value to use
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function setDefault(\$value) {
        \$this->default = BuilderHelpers::normalizeValue(\$value);

        return \$this;
    }

    /**
     * Sets type for the parameter.
     *
     * @param string|Node\\Name|Node\\NullableType \$type Parameter type
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function setType(\$type) {
        \$this->type = BuilderHelpers::normalizeType(\$type);
        if (\$this->type == 'void') {
            throw new \\LogicException('Parameter type cannot be void');
        }

        return \$this;
    }

    /**
     * Sets type for the parameter.
     *
     * @param string|Node\\Name|Node\\NullableType \$type Parameter type
     *
     * @return \$this The builder instance (for fluid interface)
     *
     * @deprecated Use setType() instead
     */
    public function setTypeHint(\$type) {
        return \$this->setType(\$type);
    }

    /**
     * Make the parameter accept the value by reference.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeByRef() {
        \$this->byRef = true;

        return \$this;
    }

    /**
     * Make the parameter variadic
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeVariadic() {
        \$this->variadic = true;

        return \$this;
    }

    /**
     * Returns the built parameter node.
     *
     * @return Node\\Param The built parameter node
     */
    public function getNode() : Node {
        return new Node\\Param(
            new Node\\Expr\\Variable(\$this->name),
            \$this->default, \$this->type, \$this->byRef, \$this->variadic
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/Param.php";
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

class Param implements PhpParser\\Builder
{
    protected \$name;

    protected \$default = null;

    /** @var Node\\Identifier|Node\\Name|Node\\NullableType|null */
    protected \$type = null;

    protected \$byRef = false;

    protected \$variadic = false;

    /**
     * Creates a parameter builder.
     *
     * @param string \$name Name of the parameter
     */
    public function __construct(string \$name) {
        \$this->name = \$name;
    }

    /**
     * Sets default value for the parameter.
     *
     * @param mixed \$value Default value to use
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function setDefault(\$value) {
        \$this->default = BuilderHelpers::normalizeValue(\$value);

        return \$this;
    }

    /**
     * Sets type for the parameter.
     *
     * @param string|Node\\Name|Node\\NullableType \$type Parameter type
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function setType(\$type) {
        \$this->type = BuilderHelpers::normalizeType(\$type);
        if (\$this->type == 'void') {
            throw new \\LogicException('Parameter type cannot be void');
        }

        return \$this;
    }

    /**
     * Sets type for the parameter.
     *
     * @param string|Node\\Name|Node\\NullableType \$type Parameter type
     *
     * @return \$this The builder instance (for fluid interface)
     *
     * @deprecated Use setType() instead
     */
    public function setTypeHint(\$type) {
        return \$this->setType(\$type);
    }

    /**
     * Make the parameter accept the value by reference.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeByRef() {
        \$this->byRef = true;

        return \$this;
    }

    /**
     * Make the parameter variadic
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeVariadic() {
        \$this->variadic = true;

        return \$this;
    }

    /**
     * Returns the built parameter node.
     *
     * @return Node\\Param The built parameter node
     */
    public function getNode() : Node {
        return new Node\\Param(
            new Node\\Expr\\Variable(\$this->name),
            \$this->default, \$this->type, \$this->byRef, \$this->variadic
        );
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/Param.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Builder\\Param.php");
    }
}
