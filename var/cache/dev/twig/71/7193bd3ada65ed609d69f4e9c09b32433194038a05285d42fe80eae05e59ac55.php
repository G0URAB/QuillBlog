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

/* @app/vendor/twig/twig/src/TokenParser/ForTokenParser.php */
class __TwigTemplate_568c4363102d3102dbc2a827b281695e3a84f4e4be1c8792b1f01ded7677cf6f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/TokenParser/ForTokenParser.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\TokenParser;

use Twig\\Node\\Expression\\AssignNameExpression;
use Twig\\Node\\ForNode;
use Twig\\Node\\Node;
use Twig\\Token;

/**
 * Loops over each item of a sequence.
 *
 *   <ul>
 *    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 25
            echo " *      <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 25));
            echo "</li>
 *    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo " *   </ul>
 */
final class ForTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token): Node
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();
        \$targets = \$this->parser->getExpressionParser()->parseAssignmentExpression();
        \$stream->expect(/* Token::OPERATOR_TYPE */ 8, 'in');
        \$seq = \$this->parser->getExpressionParser()->parseExpression();

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        \$body = \$this->parser->subparse([\$this, 'decideForFork']);
        if ('else' == \$stream->next()->getValue()) {
            \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
            \$else = \$this->parser->subparse([\$this, 'decideForEnd'], true);
        } else {
            \$else = null;
        }
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        if (\\count(\$targets) > 1) {
            \$keyTarget = \$targets->getNode(0);
            \$keyTarget = new AssignNameExpression(\$keyTarget->getAttribute('name'), \$keyTarget->getTemplateLine());
            \$valueTarget = \$targets->getNode(1);
            \$valueTarget = new AssignNameExpression(\$valueTarget->getAttribute('name'), \$valueTarget->getTemplateLine());
        } else {
            \$keyTarget = new AssignNameExpression('_key', \$lineno);
            \$valueTarget = \$targets->getNode(0);
            \$valueTarget = new AssignNameExpression(\$valueTarget->getAttribute('name'), \$valueTarget->getTemplateLine());
        }

        return new ForNode(\$keyTarget, \$valueTarget, \$seq, null, \$body, \$else, \$lineno, \$this->getTag());
    }

    public function decideForFork(Token \$token): bool
    {
        return \$token->test(['else', 'endfor']);
    }

    public function decideForEnd(Token \$token): bool
    {
        return \$token->test('endfor');
    }

    public function getTag(): string
    {
        return 'for';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/TokenParser/ForTokenParser.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 27,  69 => 25,  65 => 24,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\TokenParser;

use Twig\\Node\\Expression\\AssignNameExpression;
use Twig\\Node\\ForNode;
use Twig\\Node\\Node;
use Twig\\Token;

/**
 * Loops over each item of a sequence.
 *
 *   <ul>
 *    {% for user in users %}
 *      <li>{{ user.username|e }}</li>
 *    {% endfor %}
 *   </ul>
 */
final class ForTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token): Node
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();
        \$targets = \$this->parser->getExpressionParser()->parseAssignmentExpression();
        \$stream->expect(/* Token::OPERATOR_TYPE */ 8, 'in');
        \$seq = \$this->parser->getExpressionParser()->parseExpression();

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        \$body = \$this->parser->subparse([\$this, 'decideForFork']);
        if ('else' == \$stream->next()->getValue()) {
            \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
            \$else = \$this->parser->subparse([\$this, 'decideForEnd'], true);
        } else {
            \$else = null;
        }
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        if (\\count(\$targets) > 1) {
            \$keyTarget = \$targets->getNode(0);
            \$keyTarget = new AssignNameExpression(\$keyTarget->getAttribute('name'), \$keyTarget->getTemplateLine());
            \$valueTarget = \$targets->getNode(1);
            \$valueTarget = new AssignNameExpression(\$valueTarget->getAttribute('name'), \$valueTarget->getTemplateLine());
        } else {
            \$keyTarget = new AssignNameExpression('_key', \$lineno);
            \$valueTarget = \$targets->getNode(0);
            \$valueTarget = new AssignNameExpression(\$valueTarget->getAttribute('name'), \$valueTarget->getTemplateLine());
        }

        return new ForNode(\$keyTarget, \$valueTarget, \$seq, null, \$body, \$else, \$lineno, \$this->getTag());
    }

    public function decideForFork(Token \$token): bool
    {
        return \$token->test(['else', 'endfor']);
    }

    public function decideForEnd(Token \$token): bool
    {
        return \$token->test('endfor');
    }

    public function getTag(): string
    {
        return 'for';
    }
}
", "@app/vendor/twig/twig/src/TokenParser/ForTokenParser.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\TokenParser\\ForTokenParser.php");
    }
}
