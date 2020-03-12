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

/* @app/vendor/twig/twig/src/TokenParser/AutoEscapeTokenParser.php */
class __TwigTemplate_9c57aa8df38c18e13f92970da7cd4a3c881bc4dc0ef31d8383465dfc67195274 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/TokenParser/AutoEscapeTokenParser.php"));

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
use Twig\\Node\\AutoEscapeNode;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Node;
use Twig\\Token;

/**
 * Marks a section of a template to be escaped or not.
 */
final class AutoEscapeTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token): Node
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();

        if (\$stream->test(/* Token::BLOCK_END_TYPE */ 3)) {
            \$value = 'html';
        } else {
            \$expr = \$this->parser->getExpressionParser()->parseExpression();
            if (!\$expr instanceof ConstantExpression) {
                throw new SyntaxError('An escaping strategy must be a string or false.', \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
            }
            \$value = \$expr->getAttribute('value');
        }

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        \$body = \$this->parser->subparse([\$this, 'decideBlockEnd'], true);
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new AutoEscapeNode(\$value, \$body, \$lineno, \$this->getTag());
    }

    public function decideBlockEnd(Token \$token): bool
    {
        return \$token->test('endautoescape');
    }

    public function getTag(): string
    {
        return 'autoescape';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/TokenParser/AutoEscapeTokenParser.php";
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

namespace Twig\\TokenParser;

use Twig\\Error\\SyntaxError;
use Twig\\Node\\AutoEscapeNode;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Node;
use Twig\\Token;

/**
 * Marks a section of a template to be escaped or not.
 */
final class AutoEscapeTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token): Node
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();

        if (\$stream->test(/* Token::BLOCK_END_TYPE */ 3)) {
            \$value = 'html';
        } else {
            \$expr = \$this->parser->getExpressionParser()->parseExpression();
            if (!\$expr instanceof ConstantExpression) {
                throw new SyntaxError('An escaping strategy must be a string or false.', \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
            }
            \$value = \$expr->getAttribute('value');
        }

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        \$body = \$this->parser->subparse([\$this, 'decideBlockEnd'], true);
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new AutoEscapeNode(\$value, \$body, \$lineno, \$this->getTag());
    }

    public function decideBlockEnd(Token \$token): bool
    {
        return \$token->test('endautoescape');
    }

    public function getTag(): string
    {
        return 'autoescape';
    }
}
", "@app/vendor/twig/twig/src/TokenParser/AutoEscapeTokenParser.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\TokenParser\\AutoEscapeTokenParser.php");
    }
}
