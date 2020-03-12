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

/* @app/vendor/twig/twig/src/TokenParser/FromTokenParser.php */
class __TwigTemplate_e8de43ab860ffa979af8cc5e0a377cea585fdfe2f8d08b651a16ddbb942dbb61 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/TokenParser/FromTokenParser.php"));

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

use Twig\\Node\\Expression\\AssignNameExpression;
use Twig\\Node\\ImportNode;
use Twig\\Node\\Node;
use Twig\\Token;

/**
 * Imports macros.
 *
 *   ";
        // line 22
        $macros["__internal_f47a473237313ec092bad9296be488c8b373deead91e7b681eed94fa1c9544ce"] = $this->macros["__internal_f47a473237313ec092bad9296be488c8b373deead91e7b681eed94fa1c9544ce"] = $this->loadTemplate("forms.html", "@app/vendor/twig/twig/src/TokenParser/FromTokenParser.php", 22)->unwrap();
        // line 23
        echo " */
final class FromTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token): Node
    {
        \$macro = \$this->parser->getExpressionParser()->parseExpression();
        \$stream = \$this->parser->getStream();
        \$stream->expect(/* Token::NAME_TYPE */ 5, 'import');

        \$targets = [];
        do {
            \$name = \$stream->expect(/* Token::NAME_TYPE */ 5)->getValue();

            \$alias = \$name;
            if (\$stream->nextIf('as')) {
                \$alias = \$stream->expect(/* Token::NAME_TYPE */ 5)->getValue();
            }

            \$targets[\$name] = \$alias;

            if (!\$stream->nextIf(/* Token::PUNCTUATION_TYPE */ 9, ',')) {
                break;
            }
        } while (true);

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$var = new AssignNameExpression(\$this->parser->getVarName(), \$token->getLine());
        \$node = new ImportNode(\$macro, \$var, \$token->getLine(), \$this->getTag(), \$this->parser->isMainScope());

        foreach (\$targets as \$name => \$alias) {
            \$this->parser->addImportedSymbol('function', \$alias, 'macro_'.\$name, \$var);
        }

        return \$node;
    }

    public function getTag(): string
    {
        return 'from';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/TokenParser/FromTokenParser.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 23,  63 => 22,  40 => 1,);
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

use Twig\\Node\\Expression\\AssignNameExpression;
use Twig\\Node\\ImportNode;
use Twig\\Node\\Node;
use Twig\\Token;

/**
 * Imports macros.
 *
 *   {% from 'forms.html' import forms %}
 */
final class FromTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token): Node
    {
        \$macro = \$this->parser->getExpressionParser()->parseExpression();
        \$stream = \$this->parser->getStream();
        \$stream->expect(/* Token::NAME_TYPE */ 5, 'import');

        \$targets = [];
        do {
            \$name = \$stream->expect(/* Token::NAME_TYPE */ 5)->getValue();

            \$alias = \$name;
            if (\$stream->nextIf('as')) {
                \$alias = \$stream->expect(/* Token::NAME_TYPE */ 5)->getValue();
            }

            \$targets[\$name] = \$alias;

            if (!\$stream->nextIf(/* Token::PUNCTUATION_TYPE */ 9, ',')) {
                break;
            }
        } while (true);

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$var = new AssignNameExpression(\$this->parser->getVarName(), \$token->getLine());
        \$node = new ImportNode(\$macro, \$var, \$token->getLine(), \$this->getTag(), \$this->parser->isMainScope());

        foreach (\$targets as \$name => \$alias) {
            \$this->parser->addImportedSymbol('function', \$alias, 'macro_'.\$name, \$var);
        }

        return \$node;
    }

    public function getTag(): string
    {
        return 'from';
    }
}
", "@app/vendor/twig/twig/src/TokenParser/FromTokenParser.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\TokenParser\\FromTokenParser.php");
    }
}
