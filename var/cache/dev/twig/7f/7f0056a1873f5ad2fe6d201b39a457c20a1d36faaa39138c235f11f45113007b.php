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

/* @app/vendor/twig/twig/src/TokenParser/MacroTokenParser.php */
class __TwigTemplate_c81292788ab5e6de51239d798e24c54bfbc0566665a8d00ecf431517ec518b21 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/TokenParser/MacroTokenParser.php"));

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
use Twig\\Node\\BodyNode;
use Twig\\Node\\MacroNode;
use Twig\\Node\\Node;
use Twig\\Token;

/**
 * Defines a macro.
 *
 *   ";
        // line 26
        echo " */
final class MacroTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token): Node
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();
        \$name = \$stream->expect(/* Token::NAME_TYPE */ 5)->getValue();

        \$arguments = \$this->parser->getExpressionParser()->parseArguments(true, true);

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        \$this->parser->pushLocalScope();
        \$body = \$this->parser->subparse([\$this, 'decideBlockEnd'], true);
        if (\$token = \$stream->nextIf(/* Token::NAME_TYPE */ 5)) {
            \$value = \$token->getValue();

            if (\$value != \$name) {
                throw new SyntaxError(sprintf('Expected endmacro for macro \"%s\" (but \"%s\" given).', \$name, \$value), \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
            }
        }
        \$this->parser->popLocalScope();
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$this->parser->setMacro(\$name, new MacroNode(\$name, new BodyNode([\$body]), \$arguments, \$lineno, \$this->getTag()));

        return new Node();
    }

    public function decideBlockEnd(Token \$token): bool
    {
        return \$token->test('endmacro');
    }

    public function getTag(): string
    {
        return 'macro';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function macro_input($__name__ = null, $__value__ = null, $__type__ = null, $__size__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "type" => $__type__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "input"));

            // line 24
            echo " *      <input type=\"";
            echo twig_escape_filter($this->env, (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 24, $this->source); })()), "text")) : ("text")), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 24, $this->source); })()));
            echo "\" size=\"";
            echo twig_escape_filter($this->env, (((isset($context["size"]) || array_key_exists("size", $context))) ? (_twig_default_filter((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 24, $this->source); })()), 20)) : (20)), "html", null, true);
            echo "\" />
 *   ";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/TokenParser/MacroTokenParser.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 24,  110 => 23,  64 => 26,  40 => 1,);
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
use Twig\\Node\\BodyNode;
use Twig\\Node\\MacroNode;
use Twig\\Node\\Node;
use Twig\\Token;

/**
 * Defines a macro.
 *
 *   {% macro input(name, value, type, size) %}
 *      <input type=\"{{ type|default('text') }}\" name=\"{{ name }}\" value=\"{{ value|e }}\" size=\"{{ size|default(20) }}\" />
 *   {% endmacro %}
 */
final class MacroTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token): Node
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();
        \$name = \$stream->expect(/* Token::NAME_TYPE */ 5)->getValue();

        \$arguments = \$this->parser->getExpressionParser()->parseArguments(true, true);

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);
        \$this->parser->pushLocalScope();
        \$body = \$this->parser->subparse([\$this, 'decideBlockEnd'], true);
        if (\$token = \$stream->nextIf(/* Token::NAME_TYPE */ 5)) {
            \$value = \$token->getValue();

            if (\$value != \$name) {
                throw new SyntaxError(sprintf('Expected endmacro for macro \"%s\" (but \"%s\" given).', \$name, \$value), \$stream->getCurrent()->getLine(), \$stream->getSourceContext());
            }
        }
        \$this->parser->popLocalScope();
        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$this->parser->setMacro(\$name, new MacroNode(\$name, new BodyNode([\$body]), \$arguments, \$lineno, \$this->getTag()));

        return new Node();
    }

    public function decideBlockEnd(Token \$token): bool
    {
        return \$token->test('endmacro');
    }

    public function getTag(): string
    {
        return 'macro';
    }
}
", "@app/vendor/twig/twig/src/TokenParser/MacroTokenParser.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\TokenParser\\MacroTokenParser.php");
    }
}
