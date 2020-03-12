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

/* @app/vendor/twig/twig/src/Node/Expression/NullCoalesceExpression.php */
class __TwigTemplate_cdf7ff24a0c7c4ca517d1cd4be296df69200d860197a1ce815d843d0bcb1ec4c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/Expression/NullCoalesceExpression.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Node\\Expression;

use Twig\\Compiler;
use Twig\\Node\\Expression\\Binary\\AndBinary;
use Twig\\Node\\Expression\\Test\\DefinedTest;
use Twig\\Node\\Expression\\Test\\NullTest;
use Twig\\Node\\Expression\\Unary\\NotUnary;
use Twig\\Node\\Node;

class NullCoalesceExpression extends ConditionalExpression
{
    public function __construct(Node \$left, Node \$right, int \$lineno)
    {
        \$test = new DefinedTest(clone \$left, 'defined', new Node(), \$left->getTemplateLine());
        // for \"block()\", we don't need the null test as the return value is always a string
        if (!\$left instanceof BlockReferenceExpression) {
            \$test = new AndBinary(
                \$test,
                new NotUnary(new NullTest(\$left, 'null', new Node(), \$left->getTemplateLine()), \$left->getTemplateLine()),
                \$left->getTemplateLine()
            );
        }

        parent::__construct(\$test, \$left, \$right, \$lineno);
    }

    public function compile(Compiler \$compiler): void
    {
        /*
         * This optimizes only one case. PHP 7 also supports more complex expressions
         * that can return null. So, for instance, if log is defined, log(\"foo\") ?? \"...\" works,
         * but log(\$a[\"foo\"]) ?? \"...\" does not if \$a[\"foo\"] is not defined. More advanced
         * cases might be implemented as an optimizer node visitor, but has not been done
         * as benefits are probably not worth the added complexity.
         */
        if (\$this->getNode('expr2') instanceof NameExpression) {
            \$this->getNode('expr2')->setAttribute('always_defined', true);
            \$compiler
                ->raw('((')
                ->subcompile(\$this->getNode('expr2'))
                ->raw(') ?? (')
                ->subcompile(\$this->getNode('expr3'))
                ->raw('))')
            ;
        } else {
            parent::compile(\$compiler);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/Expression/NullCoalesceExpression.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Node\\Expression;

use Twig\\Compiler;
use Twig\\Node\\Expression\\Binary\\AndBinary;
use Twig\\Node\\Expression\\Test\\DefinedTest;
use Twig\\Node\\Expression\\Test\\NullTest;
use Twig\\Node\\Expression\\Unary\\NotUnary;
use Twig\\Node\\Node;

class NullCoalesceExpression extends ConditionalExpression
{
    public function __construct(Node \$left, Node \$right, int \$lineno)
    {
        \$test = new DefinedTest(clone \$left, 'defined', new Node(), \$left->getTemplateLine());
        // for \"block()\", we don't need the null test as the return value is always a string
        if (!\$left instanceof BlockReferenceExpression) {
            \$test = new AndBinary(
                \$test,
                new NotUnary(new NullTest(\$left, 'null', new Node(), \$left->getTemplateLine()), \$left->getTemplateLine()),
                \$left->getTemplateLine()
            );
        }

        parent::__construct(\$test, \$left, \$right, \$lineno);
    }

    public function compile(Compiler \$compiler): void
    {
        /*
         * This optimizes only one case. PHP 7 also supports more complex expressions
         * that can return null. So, for instance, if log is defined, log(\"foo\") ?? \"...\" works,
         * but log(\$a[\"foo\"]) ?? \"...\" does not if \$a[\"foo\"] is not defined. More advanced
         * cases might be implemented as an optimizer node visitor, but has not been done
         * as benefits are probably not worth the added complexity.
         */
        if (\$this->getNode('expr2') instanceof NameExpression) {
            \$this->getNode('expr2')->setAttribute('always_defined', true);
            \$compiler
                ->raw('((')
                ->subcompile(\$this->getNode('expr2'))
                ->raw(') ?? (')
                ->subcompile(\$this->getNode('expr3'))
                ->raw('))')
            ;
        } else {
            parent::compile(\$compiler);
        }
    }
}
", "@app/vendor/twig/twig/src/Node/Expression/NullCoalesceExpression.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\Expression\\NullCoalesceExpression.php");
    }
}
