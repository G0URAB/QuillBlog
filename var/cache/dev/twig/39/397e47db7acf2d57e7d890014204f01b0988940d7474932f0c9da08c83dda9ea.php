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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/BinaryOp.php */
class __TwigTemplate_c786691f5a61443a696a0fd442a4ab2c3ace02313b52af5f3c70cf9f08dc6a95 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/BinaryOp.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;

abstract class BinaryOp extends Expr
{
    /** @var Expr The left hand side expression */
    public \$left;
    /** @var Expr The right hand side expression */
    public \$right;

    /**
     * Constructs a binary operator node.
     *
     * @param Expr  \$left       The left hand side expression
     * @param Expr  \$right      The right hand side expression
     * @param array \$attributes Additional attributes
     */
    public function __construct(Expr \$left, Expr \$right, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->left = \$left;
        \$this->right = \$right;
    }

    public function getSubNodeNames() : array {
        return ['left', 'right'];
    }

    /**
     * Get the operator sigil for this binary operation.
     *
     * In the case there are multiple possible sigils for an operator, this method does not
     * necessarily return the one used in the parsed code.
     *
     * @return string
     */
    abstract public function getOperatorSigil() : string;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/BinaryOp.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Node\\Expr;

use PhpParser\\Node\\Expr;

abstract class BinaryOp extends Expr
{
    /** @var Expr The left hand side expression */
    public \$left;
    /** @var Expr The right hand side expression */
    public \$right;

    /**
     * Constructs a binary operator node.
     *
     * @param Expr  \$left       The left hand side expression
     * @param Expr  \$right      The right hand side expression
     * @param array \$attributes Additional attributes
     */
    public function __construct(Expr \$left, Expr \$right, array \$attributes = []) {
        \$this->attributes = \$attributes;
        \$this->left = \$left;
        \$this->right = \$right;
    }

    public function getSubNodeNames() : array {
        return ['left', 'right'];
    }

    /**
     * Get the operator sigil for this binary operation.
     *
     * In the case there are multiple possible sigils for an operator, this method does not
     * necessarily return the one used in the parsed code.
     *
     * @return string
     */
    abstract public function getOperatorSigil() : string;
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/BinaryOp.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Node\\Expr\\BinaryOp.php");
    }
}
