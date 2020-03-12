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

/* @app/vendor/twig/twig/src/TokenParser/WithTokenParser.php */
class __TwigTemplate_c2b53d3acde6a7370194b5aed16cd6f6238be72898a0652d3a566e983f781cd6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/TokenParser/WithTokenParser.php"));

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

use Twig\\Node\\Node;
use Twig\\Node\\WithNode;
use Twig\\Token;

/**
 * Creates a nested scope.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class WithTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token): Node
    {
        \$stream = \$this->parser->getStream();

        \$variables = null;
        \$only = false;
        if (!\$stream->test(/* Token::BLOCK_END_TYPE */ 3)) {
            \$variables = \$this->parser->getExpressionParser()->parseExpression();
            \$only = (bool) \$stream->nextIf(/* Token::NAME_TYPE */ 5, 'only');
        }

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$body = \$this->parser->subparse([\$this, 'decideWithEnd'], true);

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new WithNode(\$body, \$variables, \$only, \$token->getLine(), \$this->getTag());
    }

    public function decideWithEnd(Token \$token): bool
    {
        return \$token->test('endwith');
    }

    public function getTag(): string
    {
        return 'with';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/TokenParser/WithTokenParser.php";
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

use Twig\\Node\\Node;
use Twig\\Node\\WithNode;
use Twig\\Token;

/**
 * Creates a nested scope.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class WithTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token): Node
    {
        \$stream = \$this->parser->getStream();

        \$variables = null;
        \$only = false;
        if (!\$stream->test(/* Token::BLOCK_END_TYPE */ 3)) {
            \$variables = \$this->parser->getExpressionParser()->parseExpression();
            \$only = (bool) \$stream->nextIf(/* Token::NAME_TYPE */ 5, 'only');
        }

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$body = \$this->parser->subparse([\$this, 'decideWithEnd'], true);

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new WithNode(\$body, \$variables, \$only, \$token->getLine(), \$this->getTag());
    }

    public function decideWithEnd(Token \$token): bool
    {
        return \$token->test('endwith');
    }

    public function getTag(): string
    {
        return 'with';
    }
}
", "@app/vendor/twig/twig/src/TokenParser/WithTokenParser.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\TokenParser\\WithTokenParser.php");
    }
}
