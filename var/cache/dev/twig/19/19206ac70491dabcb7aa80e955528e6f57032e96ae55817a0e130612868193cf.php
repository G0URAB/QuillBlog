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

/* @app/vendor/twig/twig/src/TokenParser/EmbedTokenParser.php */
class __TwigTemplate_5eb0af1a15d275be7910dad1298a6760d1cf8c0758881dd34bb75f23d59fc3a4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/TokenParser/EmbedTokenParser.php"));

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

use Twig\\Node\\EmbedNode;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\Node;
use Twig\\Token;

/**
 * Embeds a template.
 */
final class EmbedTokenParser extends IncludeTokenParser
{
    public function parse(Token \$token): Node
    {
        \$stream = \$this->parser->getStream();

        \$parent = \$this->parser->getExpressionParser()->parseExpression();

        list(\$variables, \$only, \$ignoreMissing) = \$this->parseArguments();

        \$parentToken = \$fakeParentToken = new Token(/* Token::STRING_TYPE */ 7, '__parent__', \$token->getLine());
        if (\$parent instanceof ConstantExpression) {
            \$parentToken = new Token(/* Token::STRING_TYPE */ 7, \$parent->getAttribute('value'), \$token->getLine());
        } elseif (\$parent instanceof NameExpression) {
            \$parentToken = new Token(/* Token::NAME_TYPE */ 5, \$parent->getAttribute('name'), \$token->getLine());
        }

        // inject a fake parent to make the parent() function work
        \$stream->injectTokens([
            new Token(/* Token::BLOCK_START_TYPE */ 1, '', \$token->getLine()),
            new Token(/* Token::NAME_TYPE */ 5, 'extends', \$token->getLine()),
            \$parentToken,
            new Token(/* Token::BLOCK_END_TYPE */ 3, '', \$token->getLine()),
        ]);

        \$module = \$this->parser->parse(\$stream, [\$this, 'decideBlockEnd'], true);

        // override the parent with the correct one
        if (\$fakeParentToken === \$parentToken) {
            \$module->setNode('parent', \$parent);
        }

        \$this->parser->embedTemplate(\$module);

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new EmbedNode(\$module->getTemplateName(), \$module->getAttribute('index'), \$variables, \$only, \$ignoreMissing, \$token->getLine(), \$this->getTag());
    }

    public function decideBlockEnd(Token \$token): bool
    {
        return \$token->test('endembed');
    }

    public function getTag(): string
    {
        return 'embed';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/TokenParser/EmbedTokenParser.php";
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

use Twig\\Node\\EmbedNode;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\Node;
use Twig\\Token;

/**
 * Embeds a template.
 */
final class EmbedTokenParser extends IncludeTokenParser
{
    public function parse(Token \$token): Node
    {
        \$stream = \$this->parser->getStream();

        \$parent = \$this->parser->getExpressionParser()->parseExpression();

        list(\$variables, \$only, \$ignoreMissing) = \$this->parseArguments();

        \$parentToken = \$fakeParentToken = new Token(/* Token::STRING_TYPE */ 7, '__parent__', \$token->getLine());
        if (\$parent instanceof ConstantExpression) {
            \$parentToken = new Token(/* Token::STRING_TYPE */ 7, \$parent->getAttribute('value'), \$token->getLine());
        } elseif (\$parent instanceof NameExpression) {
            \$parentToken = new Token(/* Token::NAME_TYPE */ 5, \$parent->getAttribute('name'), \$token->getLine());
        }

        // inject a fake parent to make the parent() function work
        \$stream->injectTokens([
            new Token(/* Token::BLOCK_START_TYPE */ 1, '', \$token->getLine()),
            new Token(/* Token::NAME_TYPE */ 5, 'extends', \$token->getLine()),
            \$parentToken,
            new Token(/* Token::BLOCK_END_TYPE */ 3, '', \$token->getLine()),
        ]);

        \$module = \$this->parser->parse(\$stream, [\$this, 'decideBlockEnd'], true);

        // override the parent with the correct one
        if (\$fakeParentToken === \$parentToken) {
            \$module->setNode('parent', \$parent);
        }

        \$this->parser->embedTemplate(\$module);

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new EmbedNode(\$module->getTemplateName(), \$module->getAttribute('index'), \$variables, \$only, \$ignoreMissing, \$token->getLine(), \$this->getTag());
    }

    public function decideBlockEnd(Token \$token): bool
    {
        return \$token->test('endembed');
    }

    public function getTag(): string
    {
        return 'embed';
    }
}
", "@app/vendor/twig/twig/src/TokenParser/EmbedTokenParser.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\TokenParser\\EmbedTokenParser.php");
    }
}
