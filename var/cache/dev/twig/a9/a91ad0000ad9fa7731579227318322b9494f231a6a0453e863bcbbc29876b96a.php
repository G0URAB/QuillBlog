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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Builder/FunctionLike.php */
class __TwigTemplate_630cb89abf450e199cfe482900f21940a22daad0c25aa5d33f970c94616277c4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/FunctionLike.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser\\BuilderHelpers;
use PhpParser\\Node;

abstract class FunctionLike extends Declaration
{
    protected \$returnByRef = false;
    protected \$params = [];

    /** @var string|Node\\Name|Node\\NullableType|null */
    protected \$returnType = null;

    /**
     * Make the function return by reference.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeReturnByRef() {
        \$this->returnByRef = true;

        return \$this;
    }

    /**
     * Adds a parameter.
     *
     * @param Node\\Param|Param \$param The parameter to add
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function addParam(\$param) {
        \$param = BuilderHelpers::normalizeNode(\$param);

        if (!\$param instanceof Node\\Param) {
            throw new \\LogicException(sprintf('Expected parameter node, got \"%s\"', \$param->getType()));
        }

        \$this->params[] = \$param;

        return \$this;
    }

    /**
     * Adds multiple parameters.
     *
     * @param array \$params The parameters to add
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function addParams(array \$params) {
        foreach (\$params as \$param) {
            \$this->addParam(\$param);
        }

        return \$this;
    }

    /**
     * Sets the return type for PHP 7.
     *
     * @param string|Node\\Name|Node\\NullableType \$type One of array, callable, string, int, float,
     *                                                 bool, iterable, or a class/interface name.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function setReturnType(\$type) {
        \$this->returnType = BuilderHelpers::normalizeType(\$type);

        return \$this;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/FunctionLike.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Builder;

use PhpParser\\BuilderHelpers;
use PhpParser\\Node;

abstract class FunctionLike extends Declaration
{
    protected \$returnByRef = false;
    protected \$params = [];

    /** @var string|Node\\Name|Node\\NullableType|null */
    protected \$returnType = null;

    /**
     * Make the function return by reference.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function makeReturnByRef() {
        \$this->returnByRef = true;

        return \$this;
    }

    /**
     * Adds a parameter.
     *
     * @param Node\\Param|Param \$param The parameter to add
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function addParam(\$param) {
        \$param = BuilderHelpers::normalizeNode(\$param);

        if (!\$param instanceof Node\\Param) {
            throw new \\LogicException(sprintf('Expected parameter node, got \"%s\"', \$param->getType()));
        }

        \$this->params[] = \$param;

        return \$this;
    }

    /**
     * Adds multiple parameters.
     *
     * @param array \$params The parameters to add
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function addParams(array \$params) {
        foreach (\$params as \$param) {
            \$this->addParam(\$param);
        }

        return \$this;
    }

    /**
     * Sets the return type for PHP 7.
     *
     * @param string|Node\\Name|Node\\NullableType \$type One of array, callable, string, int, float,
     *                                                 bool, iterable, or a class/interface name.
     *
     * @return \$this The builder instance (for fluid interface)
     */
    public function setReturnType(\$type) {
        \$this->returnType = BuilderHelpers::normalizeType(\$type);

        return \$this;
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Builder/FunctionLike.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Builder\\FunctionLike.php");
    }
}
