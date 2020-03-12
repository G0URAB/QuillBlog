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

/* @app/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/ExpressionVisitor.php */
class __TwigTemplate_afd436e25a4a85b66979983644d86148298d2a3bb15603d8e6526cfaa2ff1381 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/ExpressionVisitor.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Collections\\Expr;

use RuntimeException;
use function get_class;

/**
 * An Expression visitor walks a graph of expressions and turns them into a
 * query for the underlying implementation.
 */
abstract class ExpressionVisitor
{
    /**
     * Converts a comparison expression into the target query language output.
     *
     * @return mixed
     */
    abstract public function walkComparison(Comparison \$comparison);

    /**
     * Converts a value expression into the target query language part.
     *
     * @return mixed
     */
    abstract public function walkValue(Value \$value);

    /**
     * Converts a composite expression into the target query language output.
     *
     * @return mixed
     */
    abstract public function walkCompositeExpression(CompositeExpression \$expr);

    /**
     * Dispatches walking an expression to the appropriate handler.
     *
     * @return mixed
     *
     * @throws RuntimeException
     */
    public function dispatch(Expression \$expr)
    {
        switch (true) {
            case \$expr instanceof Comparison:
                return \$this->walkComparison(\$expr);
            case \$expr instanceof Value:
                return \$this->walkValue(\$expr);
            case \$expr instanceof CompositeExpression:
                return \$this->walkCompositeExpression(\$expr);
            default:
                throw new RuntimeException('Unknown Expression ' . get_class(\$expr));
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/ExpressionVisitor.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Collections\\Expr;

use RuntimeException;
use function get_class;

/**
 * An Expression visitor walks a graph of expressions and turns them into a
 * query for the underlying implementation.
 */
abstract class ExpressionVisitor
{
    /**
     * Converts a comparison expression into the target query language output.
     *
     * @return mixed
     */
    abstract public function walkComparison(Comparison \$comparison);

    /**
     * Converts a value expression into the target query language part.
     *
     * @return mixed
     */
    abstract public function walkValue(Value \$value);

    /**
     * Converts a composite expression into the target query language output.
     *
     * @return mixed
     */
    abstract public function walkCompositeExpression(CompositeExpression \$expr);

    /**
     * Dispatches walking an expression to the appropriate handler.
     *
     * @return mixed
     *
     * @throws RuntimeException
     */
    public function dispatch(Expression \$expr)
    {
        switch (true) {
            case \$expr instanceof Comparison:
                return \$this->walkComparison(\$expr);
            case \$expr instanceof Value:
                return \$this->walkValue(\$expr);
            case \$expr instanceof CompositeExpression:
                return \$this->walkCompositeExpression(\$expr);
            default:
                throw new RuntimeException('Unknown Expression ' . get_class(\$expr));
        }
    }
}
", "@app/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/ExpressionVisitor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Expr\\ExpressionVisitor.php");
    }
}
