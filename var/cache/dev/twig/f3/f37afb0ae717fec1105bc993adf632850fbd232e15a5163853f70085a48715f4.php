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

/* @app/vendor/nikic/php-parser/lib/PhpParser/Internal/PrintableNewAnonClassNode.php */
class __TwigTemplate_d1567e71a6635a0515f5c0e7ba5c542517a846e462819138d99b373a743c5f38 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/Internal/PrintableNewAnonClassNode.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\Internal;

use PhpParser\\Node;
use PhpParser\\Node\\Expr;

/**
 * This node is used internally by the format-preserving pretty printer to print anonymous classes.
 *
 * The normal anonymous class structure violates assumptions about the order of token offsets.
 * Namely, the constructor arguments are part of the Expr\\New_ node and follow the class node, even
 * though they are actually interleaved with them. This special node type is used temporarily to
 * restore a sane token offset order.
 *
 * @internal
 */
class PrintableNewAnonClassNode extends Expr
{
    /** @var Node\\Arg[] Arguments */
    public \$args;
    /** @var null|Node\\Name Name of extended class */
    public \$extends;
    /** @var Node\\Name[] Names of implemented interfaces */
    public \$implements;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    public function __construct(
        array \$args, Node\\Name \$extends = null, array \$implements, array \$stmts, array \$attributes
    ) {
        parent::__construct(\$attributes);
        \$this->args = \$args;
        \$this->extends = \$extends;
        \$this->implements = \$implements;
        \$this->stmts = \$stmts;
    }

    public static function fromNewNode(Expr\\New_ \$newNode) {
        \$class = \$newNode->class;
        assert(\$class instanceof Node\\Stmt\\Class_);
        // We don't assert that \$class->name is null here, to allow consumers to assign unique names
        // to anonymous classes for their own purposes. We simplify ignore the name here.
        return new self(
            \$newNode->args, \$class->extends, \$class->implements,
            \$class->stmts, \$newNode->getAttributes()
        );
    }

    public function getType() : string {
        return 'Expr_PrintableNewAnonClass';
    }

    public function getSubNodeNames() : array {
        return ['args', 'extends', 'implements', 'stmts'];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/Internal/PrintableNewAnonClassNode.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\Internal;

use PhpParser\\Node;
use PhpParser\\Node\\Expr;

/**
 * This node is used internally by the format-preserving pretty printer to print anonymous classes.
 *
 * The normal anonymous class structure violates assumptions about the order of token offsets.
 * Namely, the constructor arguments are part of the Expr\\New_ node and follow the class node, even
 * though they are actually interleaved with them. This special node type is used temporarily to
 * restore a sane token offset order.
 *
 * @internal
 */
class PrintableNewAnonClassNode extends Expr
{
    /** @var Node\\Arg[] Arguments */
    public \$args;
    /** @var null|Node\\Name Name of extended class */
    public \$extends;
    /** @var Node\\Name[] Names of implemented interfaces */
    public \$implements;
    /** @var Node\\Stmt[] Statements */
    public \$stmts;

    public function __construct(
        array \$args, Node\\Name \$extends = null, array \$implements, array \$stmts, array \$attributes
    ) {
        parent::__construct(\$attributes);
        \$this->args = \$args;
        \$this->extends = \$extends;
        \$this->implements = \$implements;
        \$this->stmts = \$stmts;
    }

    public static function fromNewNode(Expr\\New_ \$newNode) {
        \$class = \$newNode->class;
        assert(\$class instanceof Node\\Stmt\\Class_);
        // We don't assert that \$class->name is null here, to allow consumers to assign unique names
        // to anonymous classes for their own purposes. We simplify ignore the name here.
        return new self(
            \$newNode->args, \$class->extends, \$class->implements,
            \$class->stmts, \$newNode->getAttributes()
        );
    }

    public function getType() : string {
        return 'Expr_PrintableNewAnonClass';
    }

    public function getSubNodeNames() : array {
        return ['args', 'extends', 'implements', 'stmts'];
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/Internal/PrintableNewAnonClassNode.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\Internal\\PrintableNewAnonClassNode.php");
    }
}
