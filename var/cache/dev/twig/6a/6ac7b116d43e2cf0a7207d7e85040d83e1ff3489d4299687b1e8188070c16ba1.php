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

/* @app/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/Comparison.php */
class __TwigTemplate_9734b9de9fab4efb96194b79920a42d138266516ebe41e41a2ed4dd38ffd471f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/Comparison.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Common\\Collections\\Expr;

/**
 * Comparison of a field with a value by the given operator.
 */
class Comparison implements Expression
{
    public const EQ          = '=';
    public const NEQ         = '<>';
    public const LT          = '<';
    public const LTE         = '<=';
    public const GT          = '>';
    public const GTE         = '>=';
    public const IS          = '='; // no difference with EQ
    public const IN          = 'IN';
    public const NIN         = 'NIN';
    public const CONTAINS    = 'CONTAINS';
    public const MEMBER_OF   = 'MEMBER_OF';
    public const STARTS_WITH = 'STARTS_WITH';
    public const ENDS_WITH   = 'ENDS_WITH';

    /** @var string */
    private \$field;

    /** @var string */
    private \$op;

    /** @var Value */
    private \$value;

    /**
     * @param string \$field
     * @param string \$operator
     * @param mixed  \$value
     */
    public function __construct(\$field, \$operator, \$value)
    {
        if (! (\$value instanceof Value)) {
            \$value = new Value(\$value);
        }

        \$this->field = \$field;
        \$this->op    = \$operator;
        \$this->value = \$value;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return \$this->field;
    }

    /**
     * @return Value
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
        return \$this->op;
    }

    /**
     * {@inheritDoc}
     */
    public function visit(ExpressionVisitor \$visitor)
    {
        return \$visitor->walkComparison(\$this);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/Comparison.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Common\\Collections\\Expr;

/**
 * Comparison of a field with a value by the given operator.
 */
class Comparison implements Expression
{
    public const EQ          = '=';
    public const NEQ         = '<>';
    public const LT          = '<';
    public const LTE         = '<=';
    public const GT          = '>';
    public const GTE         = '>=';
    public const IS          = '='; // no difference with EQ
    public const IN          = 'IN';
    public const NIN         = 'NIN';
    public const CONTAINS    = 'CONTAINS';
    public const MEMBER_OF   = 'MEMBER_OF';
    public const STARTS_WITH = 'STARTS_WITH';
    public const ENDS_WITH   = 'ENDS_WITH';

    /** @var string */
    private \$field;

    /** @var string */
    private \$op;

    /** @var Value */
    private \$value;

    /**
     * @param string \$field
     * @param string \$operator
     * @param mixed  \$value
     */
    public function __construct(\$field, \$operator, \$value)
    {
        if (! (\$value instanceof Value)) {
            \$value = new Value(\$value);
        }

        \$this->field = \$field;
        \$this->op    = \$operator;
        \$this->value = \$value;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return \$this->field;
    }

    /**
     * @return Value
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
        return \$this->op;
    }

    /**
     * {@inheritDoc}
     */
    public function visit(ExpressionVisitor \$visitor)
    {
        return \$visitor->walkComparison(\$this);
    }
}
", "@app/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/Comparison.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Expr\\Comparison.php");
    }
}
