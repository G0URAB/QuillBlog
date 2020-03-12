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

/* @app/vendor/twig/twig/src/TokenParser/DoTokenParser.php */
class __TwigTemplate_1c6a5f5df77147054fcc21768710beaef2b8e96479049cb41890cd1df777a72d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/TokenParser/DoTokenParser.php"));

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

use Twig\\Node\\DoNode;
use Twig\\Node\\Node;
use Twig\\Token;

/**
 * Evaluates an expression, discarding the returned value.
 */
final class DoTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token): Node
    {
        \$expr = \$this->parser->getExpressionParser()->parseExpression();

        \$this->parser->getStream()->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new DoNode(\$expr, \$token->getLine(), \$this->getTag());
    }

    public function getTag(): string
    {
        return 'do';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/TokenParser/DoTokenParser.php";
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

use Twig\\Node\\DoNode;
use Twig\\Node\\Node;
use Twig\\Token;

/**
 * Evaluates an expression, discarding the returned value.
 */
final class DoTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token): Node
    {
        \$expr = \$this->parser->getExpressionParser()->parseExpression();

        \$this->parser->getStream()->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new DoNode(\$expr, \$token->getLine(), \$this->getTag());
    }

    public function getTag(): string
    {
        return 'do';
    }
}
", "@app/vendor/twig/twig/src/TokenParser/DoTokenParser.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\TokenParser\\DoTokenParser.php");
    }
}
