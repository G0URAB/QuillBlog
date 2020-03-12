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

/* @app/vendor/twig/twig/src/Node/Expression/Test/DefinedTest.php */
class __TwigTemplate_a8b3d3f0c6b534e81298afa8a6108e101296ea2535b9b2b16bf0565194296961 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/Expression/Test/DefinedTest.php"));

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

namespace Twig\\Node\\Expression\\Test;

use Twig\\Compiler;
use Twig\\Error\\SyntaxError;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Expression\\BlockReferenceExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\FunctionExpression;
use Twig\\Node\\Expression\\GetAttrExpression;
use Twig\\Node\\Expression\\MethodCallExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\Expression\\TestExpression;
use Twig\\Node\\Node;

/**
 * Checks if a variable is defined in the current context.
 *
 *    ";
        // line 30
        echo " *    ";
        if ((isset($context["foo"]) || array_key_exists("foo", $context))) {
            // line 31
            echo " *        ";
            // line 32
            echo " *    ";
        }
        // line 33
        echo " *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DefinedTest extends TestExpression
{
    public function __construct(Node \$node, string \$name, Node \$arguments = null, int \$lineno)
    {
        if (\$node instanceof NameExpression) {
            \$node->setAttribute('is_defined_test', true);
        } elseif (\$node instanceof GetAttrExpression) {
            \$node->setAttribute('is_defined_test', true);
            \$this->changeIgnoreStrictCheck(\$node);
        } elseif (\$node instanceof BlockReferenceExpression) {
            \$node->setAttribute('is_defined_test', true);
        } elseif (\$node instanceof FunctionExpression && 'constant' === \$node->getAttribute('name')) {
            \$node->setAttribute('is_defined_test', true);
        } elseif (\$node instanceof ConstantExpression || \$node instanceof ArrayExpression) {
            \$node = new ConstantExpression(true, \$node->getTemplateLine());
        } elseif (\$node instanceof MethodCallExpression) {
            \$node->setAttribute('is_defined_test', true);
        } else {
            throw new SyntaxError('The \"defined\" test only works with simple variables.', \$lineno);
        }

        parent::__construct(\$node, \$name, \$arguments, \$lineno);
    }

    private function changeIgnoreStrictCheck(GetAttrExpression \$node)
    {
        \$node->setAttribute('optimizable', false);
        \$node->setAttribute('ignore_strict_check', true);

        if (\$node->getNode('node') instanceof GetAttrExpression) {
            \$this->changeIgnoreStrictCheck(\$node->getNode('node'));
        }
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler->subcompile(\$this->getNode('node'));
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/Expression/Test/DefinedTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 33,  75 => 32,  73 => 31,  70 => 30,  40 => 1,);
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

namespace Twig\\Node\\Expression\\Test;

use Twig\\Compiler;
use Twig\\Error\\SyntaxError;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Expression\\BlockReferenceExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\FunctionExpression;
use Twig\\Node\\Expression\\GetAttrExpression;
use Twig\\Node\\Expression\\MethodCallExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\Expression\\TestExpression;
use Twig\\Node\\Node;

/**
 * Checks if a variable is defined in the current context.
 *
 *    {# defined works with variable names and variable attributes #}
 *    {% if foo is defined %}
 *        {# ... #}
 *    {% endif %}
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DefinedTest extends TestExpression
{
    public function __construct(Node \$node, string \$name, Node \$arguments = null, int \$lineno)
    {
        if (\$node instanceof NameExpression) {
            \$node->setAttribute('is_defined_test', true);
        } elseif (\$node instanceof GetAttrExpression) {
            \$node->setAttribute('is_defined_test', true);
            \$this->changeIgnoreStrictCheck(\$node);
        } elseif (\$node instanceof BlockReferenceExpression) {
            \$node->setAttribute('is_defined_test', true);
        } elseif (\$node instanceof FunctionExpression && 'constant' === \$node->getAttribute('name')) {
            \$node->setAttribute('is_defined_test', true);
        } elseif (\$node instanceof ConstantExpression || \$node instanceof ArrayExpression) {
            \$node = new ConstantExpression(true, \$node->getTemplateLine());
        } elseif (\$node instanceof MethodCallExpression) {
            \$node->setAttribute('is_defined_test', true);
        } else {
            throw new SyntaxError('The \"defined\" test only works with simple variables.', \$lineno);
        }

        parent::__construct(\$node, \$name, \$arguments, \$lineno);
    }

    private function changeIgnoreStrictCheck(GetAttrExpression \$node)
    {
        \$node->setAttribute('optimizable', false);
        \$node->setAttribute('ignore_strict_check', true);

        if (\$node->getNode('node') instanceof GetAttrExpression) {
            \$this->changeIgnoreStrictCheck(\$node->getNode('node'));
        }
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler->subcompile(\$this->getNode('node'));
    }
}
", "@app/vendor/twig/twig/src/Node/Expression/Test/DefinedTest.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\Expression\\Test\\DefinedTest.php");
    }
}
