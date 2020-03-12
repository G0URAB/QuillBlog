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

/* @app/vendor/twig/twig/src/TokenParser/IncludeTokenParser.php */
class __TwigTemplate_48c633cb1e9b459c47d635908996df1ed21cba2ca03dbcf79b5a97c2f272cea9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/TokenParser/IncludeTokenParser.php"));

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

use Twig\\Node\\IncludeNode;
use Twig\\Node\\Node;
use Twig\\Token;

/**
 * Includes a template.
 *
 *   ";
        // line 22
        $this->loadTemplate("header.html", "@app/vendor/twig/twig/src/TokenParser/IncludeTokenParser.php", 22)->display($context);
        // line 23
        echo " *     Body
 *   ";
        // line 24
        $this->loadTemplate("footer.html", "@app/vendor/twig/twig/src/TokenParser/IncludeTokenParser.php", 24)->display($context);
        // line 25
        echo " */
class IncludeTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token): Node
    {
        \$expr = \$this->parser->getExpressionParser()->parseExpression();

        list(\$variables, \$only, \$ignoreMissing) = \$this->parseArguments();

        return new IncludeNode(\$expr, \$variables, \$only, \$ignoreMissing, \$token->getLine(), \$this->getTag());
    }

    protected function parseArguments()
    {
        \$stream = \$this->parser->getStream();

        \$ignoreMissing = false;
        if (\$stream->nextIf(/* Token::NAME_TYPE */ 5, 'ignore')) {
            \$stream->expect(/* Token::NAME_TYPE */ 5, 'missing');

            \$ignoreMissing = true;
        }

        \$variables = null;
        if (\$stream->nextIf(/* Token::NAME_TYPE */ 5, 'with')) {
            \$variables = \$this->parser->getExpressionParser()->parseExpression();
        }

        \$only = false;
        if (\$stream->nextIf(/* Token::NAME_TYPE */ 5, 'only')) {
            \$only = true;
        }

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        return [\$variables, \$only, \$ignoreMissing];
    }

    public function getTag(): string
    {
        return 'include';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/TokenParser/IncludeTokenParser.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  68 => 24,  65 => 23,  63 => 22,  40 => 1,);
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

use Twig\\Node\\IncludeNode;
use Twig\\Node\\Node;
use Twig\\Token;

/**
 * Includes a template.
 *
 *   {% include 'header.html' %}
 *     Body
 *   {% include 'footer.html' %}
 */
class IncludeTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token): Node
    {
        \$expr = \$this->parser->getExpressionParser()->parseExpression();

        list(\$variables, \$only, \$ignoreMissing) = \$this->parseArguments();

        return new IncludeNode(\$expr, \$variables, \$only, \$ignoreMissing, \$token->getLine(), \$this->getTag());
    }

    protected function parseArguments()
    {
        \$stream = \$this->parser->getStream();

        \$ignoreMissing = false;
        if (\$stream->nextIf(/* Token::NAME_TYPE */ 5, 'ignore')) {
            \$stream->expect(/* Token::NAME_TYPE */ 5, 'missing');

            \$ignoreMissing = true;
        }

        \$variables = null;
        if (\$stream->nextIf(/* Token::NAME_TYPE */ 5, 'with')) {
            \$variables = \$this->parser->getExpressionParser()->parseExpression();
        }

        \$only = false;
        if (\$stream->nextIf(/* Token::NAME_TYPE */ 5, 'only')) {
            \$only = true;
        }

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        return [\$variables, \$only, \$ignoreMissing];
    }

    public function getTag(): string
    {
        return 'include';
    }
}
", "@app/vendor/twig/twig/src/TokenParser/IncludeTokenParser.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\TokenParser\\IncludeTokenParser.php");
    }
}
