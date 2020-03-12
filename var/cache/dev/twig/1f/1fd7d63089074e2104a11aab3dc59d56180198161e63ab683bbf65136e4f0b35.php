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

/* @app/vendor/twig/twig/src/TokenStream.php */
class __TwigTemplate_123f3cb2f8f92aa5b147b3ca271d62605b2fb0bc172a62cec45a256f47745af3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/TokenStream.php"));

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

namespace Twig;

use Twig\\Error\\SyntaxError;

/**
 * Represents a token stream.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class TokenStream
{
    private \$tokens;
    private \$current = 0;
    private \$source;

    public function __construct(array \$tokens, Source \$source = null)
    {
        \$this->tokens = \$tokens;
        \$this->source = \$source ?: new Source('', '');
    }

    public function __toString()
    {
        return implode(\"\\n\", \$this->tokens);
    }

    public function injectTokens(array \$tokens)
    {
        \$this->tokens = array_merge(\\array_slice(\$this->tokens, 0, \$this->current), \$tokens, \\array_slice(\$this->tokens, \$this->current));
    }

    /**
     * Sets the pointer to the next token and returns the old one.
     */
    public function next(): Token
    {
        if (!isset(\$this->tokens[++\$this->current])) {
            throw new SyntaxError('Unexpected end of template.', \$this->tokens[\$this->current - 1]->getLine(), \$this->source);
        }

        return \$this->tokens[\$this->current - 1];
    }

    /**
     * Tests a token, sets the pointer to the next one and returns it or throws a syntax error.
     *
     * @return Token|null The next token if the condition is true, null otherwise
     */
    public function nextIf(\$primary, \$secondary = null)
    {
        if (\$this->tokens[\$this->current]->test(\$primary, \$secondary)) {
            return \$this->next();
        }
    }

    /**
     * Tests a token and returns it or throws a syntax error.
     */
    public function expect(\$type, \$value = null, string \$message = null): Token
    {
        \$token = \$this->tokens[\$this->current];
        if (!\$token->test(\$type, \$value)) {
            \$line = \$token->getLine();
            throw new SyntaxError(sprintf('%sUnexpected token \"%s\"%s (\"%s\" expected%s).',
                \$message ? \$message.'. ' : '',
                Token::typeToEnglish(\$token->getType()),
                \$token->getValue() ? sprintf(' of value \"%s\"', \$token->getValue()) : '',
                Token::typeToEnglish(\$type), \$value ? sprintf(' with value \"%s\"', \$value) : ''),
                \$line,
                \$this->source
            );
        }
        \$this->next();

        return \$token;
    }

    /**
     * Looks at the next token.
     */
    public function look(int \$number = 1): Token
    {
        if (!isset(\$this->tokens[\$this->current + \$number])) {
            throw new SyntaxError('Unexpected end of template.', \$this->tokens[\$this->current + \$number - 1]->getLine(), \$this->source);
        }

        return \$this->tokens[\$this->current + \$number];
    }

    /**
     * Tests the current token.
     */
    public function test(\$primary, \$secondary = null): bool
    {
        return \$this->tokens[\$this->current]->test(\$primary, \$secondary);
    }

    /**
     * Checks if end of stream was reached.
     */
    public function isEOF(): bool
    {
        return /* Token::EOF_TYPE */ -1 === \$this->tokens[\$this->current]->getType();
    }

    public function getCurrent(): Token
    {
        return \$this->tokens[\$this->current];
    }

    /**
     * Gets the source associated with this stream.
     *
     * @internal
     */
    public function getSourceContext(): Source
    {
        return \$this->source;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/TokenStream.php";
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
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig;

use Twig\\Error\\SyntaxError;

/**
 * Represents a token stream.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class TokenStream
{
    private \$tokens;
    private \$current = 0;
    private \$source;

    public function __construct(array \$tokens, Source \$source = null)
    {
        \$this->tokens = \$tokens;
        \$this->source = \$source ?: new Source('', '');
    }

    public function __toString()
    {
        return implode(\"\\n\", \$this->tokens);
    }

    public function injectTokens(array \$tokens)
    {
        \$this->tokens = array_merge(\\array_slice(\$this->tokens, 0, \$this->current), \$tokens, \\array_slice(\$this->tokens, \$this->current));
    }

    /**
     * Sets the pointer to the next token and returns the old one.
     */
    public function next(): Token
    {
        if (!isset(\$this->tokens[++\$this->current])) {
            throw new SyntaxError('Unexpected end of template.', \$this->tokens[\$this->current - 1]->getLine(), \$this->source);
        }

        return \$this->tokens[\$this->current - 1];
    }

    /**
     * Tests a token, sets the pointer to the next one and returns it or throws a syntax error.
     *
     * @return Token|null The next token if the condition is true, null otherwise
     */
    public function nextIf(\$primary, \$secondary = null)
    {
        if (\$this->tokens[\$this->current]->test(\$primary, \$secondary)) {
            return \$this->next();
        }
    }

    /**
     * Tests a token and returns it or throws a syntax error.
     */
    public function expect(\$type, \$value = null, string \$message = null): Token
    {
        \$token = \$this->tokens[\$this->current];
        if (!\$token->test(\$type, \$value)) {
            \$line = \$token->getLine();
            throw new SyntaxError(sprintf('%sUnexpected token \"%s\"%s (\"%s\" expected%s).',
                \$message ? \$message.'. ' : '',
                Token::typeToEnglish(\$token->getType()),
                \$token->getValue() ? sprintf(' of value \"%s\"', \$token->getValue()) : '',
                Token::typeToEnglish(\$type), \$value ? sprintf(' with value \"%s\"', \$value) : ''),
                \$line,
                \$this->source
            );
        }
        \$this->next();

        return \$token;
    }

    /**
     * Looks at the next token.
     */
    public function look(int \$number = 1): Token
    {
        if (!isset(\$this->tokens[\$this->current + \$number])) {
            throw new SyntaxError('Unexpected end of template.', \$this->tokens[\$this->current + \$number - 1]->getLine(), \$this->source);
        }

        return \$this->tokens[\$this->current + \$number];
    }

    /**
     * Tests the current token.
     */
    public function test(\$primary, \$secondary = null): bool
    {
        return \$this->tokens[\$this->current]->test(\$primary, \$secondary);
    }

    /**
     * Checks if end of stream was reached.
     */
    public function isEOF(): bool
    {
        return /* Token::EOF_TYPE */ -1 === \$this->tokens[\$this->current]->getType();
    }

    public function getCurrent(): Token
    {
        return \$this->tokens[\$this->current];
    }

    /**
     * Gets the source associated with this stream.
     *
     * @internal
     */
    public function getSourceContext(): Source
    {
        return \$this->source;
    }
}
", "@app/vendor/twig/twig/src/TokenStream.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\TokenStream.php");
    }
}
