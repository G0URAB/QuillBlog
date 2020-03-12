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

/* @app/vendor/twig/twig/src/TokenParser/ImportTokenParser.php */
class __TwigTemplate_6a548197318db8c8d2efd8ac3b1d2c8a1d8400bdc20991f68686f11b98a5300b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/TokenParser/ImportTokenParser.php"));

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
        $macros["forms"] = $this->macros["forms"] = $this->loadTemplate("forms.html", "@app/vendor/twig/twig/src/TokenParser/ImportTokenParser.php", 22)->unwrap();
        // line 23
        echo " */
final class ImportTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token): Node
    {
        \$macro = \$this->parser->getExpressionParser()->parseExpression();
        \$this->parser->getStream()->expect(/* Token::NAME_TYPE */ 5, 'as');
        \$var = new AssignNameExpression(\$this->parser->getStream()->expect(/* Token::NAME_TYPE */ 5)->getValue(), \$token->getLine());
        \$this->parser->getStream()->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$this->parser->addImportedSymbol('template', \$var->getAttribute('name'));

        return new ImportNode(\$macro, \$var, \$token->getLine(), \$this->getTag(), \$this->parser->isMainScope());
    }

    public function getTag(): string
    {
        return 'import';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/TokenParser/ImportTokenParser.php";
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
 *   {% import 'forms.html' as forms %}
 */
final class ImportTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token): Node
    {
        \$macro = \$this->parser->getExpressionParser()->parseExpression();
        \$this->parser->getStream()->expect(/* Token::NAME_TYPE */ 5, 'as');
        \$var = new AssignNameExpression(\$this->parser->getStream()->expect(/* Token::NAME_TYPE */ 5)->getValue(), \$token->getLine());
        \$this->parser->getStream()->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$this->parser->addImportedSymbol('template', \$var->getAttribute('name'));

        return new ImportNode(\$macro, \$var, \$token->getLine(), \$this->getTag(), \$this->parser->isMainScope());
    }

    public function getTag(): string
    {
        return 'import';
    }
}
", "@app/vendor/twig/twig/src/TokenParser/ImportTokenParser.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\TokenParser\\ImportTokenParser.php");
    }
}
