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

/* @app/vendor/twig/twig/src/TokenParser/SetTokenParser.php */
class __TwigTemplate_9b22437216622818ddaba6a0390e303fa238dcaddcbd8d3a00cff7f3b8774aca extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/TokenParser/SetTokenParser.php"));

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

namespace Twig\\TokenParser;

use Twig\\Error\\SyntaxError;
use Twig\\Node\\Node;
use Twig\\Node\\SetNode;
use Twig\\Token;

/**
 * Defines a variable.
 *
 *  ";
        // line 22
        $context["foo"] = "foo";
        // line 23
        echo " *  ";
        $context["foo"] = [0 => 1, 1 => 2];
        // line 24
        echo " *  ";
        $context["foo"] = ["foo" => "bar"];
        // line 25
        echo " *  ";
        $context["foo"] = ("foo" . "bar");
        // line 26
        echo " *  ";
        list($context["foo"], $context["bar"]) =         ["foo", "bar"];
        // line 27
        echo " *  ";
        $context["foo"] = ('' === $tmp = "Some content") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        echo " */
final class SetTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token): Node
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();
        \$names = \$this->parser->getExpressionParser()->parseAssignmentExpression();

        \$capture = false;
        if (\$stream->nextIf(/* Token::OPERATOR_TYPE */ 8, '=')) {
            \$values = \$this->parser->getExpressionParser()->parseMultitargetExpression();

            \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

            if (\\count(\$names) !== \\count(\$values)) {
                throw new SyntaxError('When using set, you must have the same number of variables and assignments.', \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
            }
        } else {
            \$capture = true;

            if (\\count(\$names) > 1) {
                throw new SyntaxError('When using set with a block, you cannot have a multi-target.', \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
            }

            \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

            \$values = \$this->parser->subparse([\$this, 'decideBlockEnd'], true);
            \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        }

        return new SetNode(\$capture, \$names, \$values, \$lineno, \$this->getTag());
    }

    public function decideBlockEnd(Token \$token): bool
    {
        return \$token->test('endset');
    }

    public function getTag(): string
    {
        return 'set';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/TokenParser/SetTokenParser.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 28,  77 => 27,  74 => 26,  71 => 25,  68 => 24,  65 => 23,  63 => 22,  40 => 1,);
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

namespace Twig\\TokenParser;

use Twig\\Error\\SyntaxError;
use Twig\\Node\\Node;
use Twig\\Node\\SetNode;
use Twig\\Token;

/**
 * Defines a variable.
 *
 *  {% set foo = 'foo' %}
 *  {% set foo = [1, 2] %}
 *  {% set foo = {'foo': 'bar'} %}
 *  {% set foo = 'foo' ~ 'bar' %}
 *  {% set foo, bar = 'foo', 'bar' %}
 *  {% set foo %}Some content{% endset %}
 */
final class SetTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token): Node
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();
        \$names = \$this->parser->getExpressionParser()->parseAssignmentExpression();

        \$capture = false;
        if (\$stream->nextIf(/* Token::OPERATOR_TYPE */ 8, '=')) {
            \$values = \$this->parser->getExpressionParser()->parseMultitargetExpression();

            \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

            if (\\count(\$names) !== \\count(\$values)) {
                throw new SyntaxError('When using set, you must have the same number of variables and assignments.', \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
            }
        } else {
            \$capture = true;

            if (\\count(\$names) > 1) {
                throw new SyntaxError('When using set with a block, you cannot have a multi-target.', \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
            }

            \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

            \$values = \$this->parser->subparse([\$this, 'decideBlockEnd'], true);
            \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        }

        return new SetNode(\$capture, \$names, \$values, \$lineno, \$this->getTag());
    }

    public function decideBlockEnd(Token \$token): bool
    {
        return \$token->test('endset');
    }

    public function getTag(): string
    {
        return 'set';
    }
}
", "@app/vendor/twig/twig/src/TokenParser/SetTokenParser.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\TokenParser\\SetTokenParser.php");
    }
}
