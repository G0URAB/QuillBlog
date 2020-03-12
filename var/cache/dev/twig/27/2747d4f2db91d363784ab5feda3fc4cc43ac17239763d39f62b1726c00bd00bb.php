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

/* @app/vendor/twig/twig/src/TokenParser/BlockTokenParser.php */
class __TwigTemplate_a368d1a125057be5113811ab992a9ed8a243982defb55bbc83e2db40d2394a42 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/TokenParser/BlockTokenParser.php"));

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

use Twig\\Error\\SyntaxError;
use Twig\\Node\\BlockNode;
use Twig\\Node\\BlockReferenceNode;
use Twig\\Node\\Node;
use Twig\\Node\\PrintNode;
use Twig\\Token;

/**
 * Marks a section of a template as being reusable.
 *
 *  ";
        // line 25
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo " */
final class BlockTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token): Node
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();
        \$name = \$stream->expect(/* Token::NAME_TYPE */ 5)->getValue();
        if (\$this->parser->hasBlock(\$name)) {
            throw new SyntaxError(sprintf(\"The block '%s' has already been defined line %d.\", \$name, \$this->parser->getBlock(\$name)->getTemplateLine()), \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
        }
        \$this->parser->setBlock(\$name, \$block = new BlockNode(\$name, new Node([]), \$lineno));
        \$this->parser->pushLocalScope();
        \$this->parser->pushBlockStack(\$name);

        if (\$stream->nextIf(/* Token::BLOCK_END_TYPE */ 3)) {
            \$body = \$this->parser->subparse([\$this, 'decideBlockEnd'], true);
            if (\$token = \$stream->nextIf(/* Token::NAME_TYPE */ 5)) {
                \$value = \$token->getValue();

                if (\$value != \$name) {
                    throw new SyntaxError(sprintf('Expected endblock for block \"%s\" (but \"%s\" given).', \$name, \$value), \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
                }
            }
        } else {
            \$body = new Node([
                new PrintNode(\$this->parser->getExpressionParser()->parseExpression(), \$lineno),
            ]);
        }
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$block->setNode('body', \$body);
        \$this->parser->popBlockStack();
        \$this->parser->popLocalScope();

        return new BlockReferenceNode(\$name, \$lineno, \$this->getTag());
    }

    public function decideBlockEnd(Token \$token): bool
    {
        return \$token->test('endblock');
    }

    public function getTag(): string
    {
        return 'block';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 26
        echo " *    <link rel=\"stylesheet\" href=\"style.css\" />
 *    <title>";
        // line 27
        $this->displayBlock('title', $context, $blocks);
        echo " - My Webpage</title>
 *  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/TokenParser/BlockTokenParser.php";
    }

    public function getDebugInfo()
    {
        return array (  135 => 27,  132 => 26,  125 => 25,  70 => 29,  68 => 25,  42 => 1,);
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

use Twig\\Error\\SyntaxError;
use Twig\\Node\\BlockNode;
use Twig\\Node\\BlockReferenceNode;
use Twig\\Node\\Node;
use Twig\\Node\\PrintNode;
use Twig\\Token;

/**
 * Marks a section of a template as being reusable.
 *
 *  {% block head %}
 *    <link rel=\"stylesheet\" href=\"style.css\" />
 *    <title>{% block title %}{% endblock %} - My Webpage</title>
 *  {% endblock %}
 */
final class BlockTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token): Node
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();
        \$name = \$stream->expect(/* Token::NAME_TYPE */ 5)->getValue();
        if (\$this->parser->hasBlock(\$name)) {
            throw new SyntaxError(sprintf(\"The block '%s' has already been defined line %d.\", \$name, \$this->parser->getBlock(\$name)->getTemplateLine()), \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
        }
        \$this->parser->setBlock(\$name, \$block = new BlockNode(\$name, new Node([]), \$lineno));
        \$this->parser->pushLocalScope();
        \$this->parser->pushBlockStack(\$name);

        if (\$stream->nextIf(/* Token::BLOCK_END_TYPE */ 3)) {
            \$body = \$this->parser->subparse([\$this, 'decideBlockEnd'], true);
            if (\$token = \$stream->nextIf(/* Token::NAME_TYPE */ 5)) {
                \$value = \$token->getValue();

                if (\$value != \$name) {
                    throw new SyntaxError(sprintf('Expected endblock for block \"%s\" (but \"%s\" given).', \$name, \$value), \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
                }
            }
        } else {
            \$body = new Node([
                new PrintNode(\$this->parser->getExpressionParser()->parseExpression(), \$lineno),
            ]);
        }
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$block->setNode('body', \$body);
        \$this->parser->popBlockStack();
        \$this->parser->popLocalScope();

        return new BlockReferenceNode(\$name, \$lineno, \$this->getTag());
    }

    public function decideBlockEnd(Token \$token): bool
    {
        return \$token->test('endblock');
    }

    public function getTag(): string
    {
        return 'block';
    }
}
", "@app/vendor/twig/twig/src/TokenParser/BlockTokenParser.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\TokenParser\\BlockTokenParser.php");
    }
}
