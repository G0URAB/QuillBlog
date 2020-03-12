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

/* @app/vendor/nikic/php-parser/grammar/parser.template */
class __TwigTemplate_b94eef1b1692ef6bcfbf60d7bb8bb068ba514387a70ff35cc8afbd469183f580 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/grammar/parser.template"));

        // line 1
        echo "<?php
\$meta #
#semval(\$) \$this->semValue
#semval(\$,%t) \$this->semValue
#semval(%n) \$stackPos-(%l-%n)
#semval(%n,%t) \$stackPos-(%l-%n)

namespace PhpParser\\Parser;

use PhpParser\\Error;
use PhpParser\\Node;
use PhpParser\\Node\\Expr;
use PhpParser\\Node\\Name;
use PhpParser\\Node\\Scalar;
use PhpParser\\Node\\Stmt;
#include;

/* This is an automatically GENERATED file, which should not be manually edited.
 * Instead edit one of the following:
 *  * the grammar files grammar/php5.y or grammar/php7.y
 *  * the skeleton file grammar/parser.template
 *  * the preprocessing script grammar/rebuildParsers.php
 */
class #(-p) extends \\PhpParser\\ParserAbstract
{
    protected \$tokenToSymbolMapSize = #(YYMAXLEX);
    protected \$actionTableSize = #(YYLAST);
    protected \$gotoTableSize = #(YYGLAST);

    protected \$invalidSymbol = #(YYBADCH);
    protected \$errorSymbol = #(YYINTERRTOK);
    protected \$defaultAction = #(YYDEFAULT);
    protected \$unexpectedTokenRule = #(YYUNEXPECTED);

    protected \$YY2TBLSTATE = #(YY2TBLSTATE);
    protected \$numNonLeafStates = #(YYNLSTATES);

    protected \$symbolToName = array(
        #listvar terminals
    );

    protected \$tokenToSymbol = array(
        #listvar yytranslate
    );

    protected \$action = array(
        #listvar yyaction
    );

    protected \$actionCheck = array(
        #listvar yycheck
    );

    protected \$actionBase = array(
        #listvar yybase
    );

    protected \$actionDefault = array(
        #listvar yydefault
    );

    protected \$goto = array(
        #listvar yygoto
    );

    protected \$gotoCheck = array(
        #listvar yygcheck
    );

    protected \$gotoBase = array(
        #listvar yygbase
    );

    protected \$gotoDefault = array(
        #listvar yygdefault
    );

    protected \$ruleToNonTerminal = array(
        #listvar yylhs
    );

    protected \$ruleToLength = array(
        #listvar yylen
    );
#if -t

    protected \$productions = array(
        #production-strings;
    );
#endif

    protected function initReduceCallbacks() {
        \$this->reduceCallbacks = [
#reduce
            %n => function (\$stackPos) {
                %b
            },
#noact
            %n => function (\$stackPos) {
                \$this->semValue = \$this->semStack[\$stackPos];
            },
#endreduce
        ];
    }
}
#tailcode;
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/grammar/parser.template";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
\$meta #
#semval(\$) \$this->semValue
#semval(\$,%t) \$this->semValue
#semval(%n) \$stackPos-(%l-%n)
#semval(%n,%t) \$stackPos-(%l-%n)

namespace PhpParser\\Parser;

use PhpParser\\Error;
use PhpParser\\Node;
use PhpParser\\Node\\Expr;
use PhpParser\\Node\\Name;
use PhpParser\\Node\\Scalar;
use PhpParser\\Node\\Stmt;
#include;

/* This is an automatically GENERATED file, which should not be manually edited.
 * Instead edit one of the following:
 *  * the grammar files grammar/php5.y or grammar/php7.y
 *  * the skeleton file grammar/parser.template
 *  * the preprocessing script grammar/rebuildParsers.php
 */
class #(-p) extends \\PhpParser\\ParserAbstract
{
    protected \$tokenToSymbolMapSize = #(YYMAXLEX);
    protected \$actionTableSize = #(YYLAST);
    protected \$gotoTableSize = #(YYGLAST);

    protected \$invalidSymbol = #(YYBADCH);
    protected \$errorSymbol = #(YYINTERRTOK);
    protected \$defaultAction = #(YYDEFAULT);
    protected \$unexpectedTokenRule = #(YYUNEXPECTED);

    protected \$YY2TBLSTATE = #(YY2TBLSTATE);
    protected \$numNonLeafStates = #(YYNLSTATES);

    protected \$symbolToName = array(
        #listvar terminals
    );

    protected \$tokenToSymbol = array(
        #listvar yytranslate
    );

    protected \$action = array(
        #listvar yyaction
    );

    protected \$actionCheck = array(
        #listvar yycheck
    );

    protected \$actionBase = array(
        #listvar yybase
    );

    protected \$actionDefault = array(
        #listvar yydefault
    );

    protected \$goto = array(
        #listvar yygoto
    );

    protected \$gotoCheck = array(
        #listvar yygcheck
    );

    protected \$gotoBase = array(
        #listvar yygbase
    );

    protected \$gotoDefault = array(
        #listvar yygdefault
    );

    protected \$ruleToNonTerminal = array(
        #listvar yylhs
    );

    protected \$ruleToLength = array(
        #listvar yylen
    );
#if -t

    protected \$productions = array(
        #production-strings;
    );
#endif

    protected function initReduceCallbacks() {
        \$this->reduceCallbacks = [
#reduce
            %n => function (\$stackPos) {
                %b
            },
#noact
            %n => function (\$stackPos) {
                \$this->semValue = \$this->semStack[\$stackPos];
            },
#endreduce
        ];
    }
}
#tailcode;
", "@app/vendor/nikic/php-parser/grammar/parser.template", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\grammar\\parser.template");
    }
}
