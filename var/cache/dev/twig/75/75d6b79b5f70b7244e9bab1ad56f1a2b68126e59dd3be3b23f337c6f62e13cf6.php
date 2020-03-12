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

/* @app/vendor/symfony/twig-bridge/TokenParser/StopwatchTokenParser.php */
class __TwigTemplate_41e9cb33d6efdc8d2f6fed4d9926c9f47e4bee29e54ce73a5b47b8a902a2d263 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/twig-bridge/TokenParser/StopwatchTokenParser.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Twig\\TokenParser;

use Symfony\\Bridge\\Twig\\Node\\StopwatchNode;
use Twig\\Node\\Expression\\AssignNameExpression;
use Twig\\Node\\Node;
use Twig\\Token;
use Twig\\TokenParser\\AbstractTokenParser;

/**
 * Token Parser for the stopwatch tag.
 *
 * @author Wouter J <wouter@wouterj.nl>
 */
final class StopwatchTokenParser extends AbstractTokenParser
{
    protected \$stopwatchIsAvailable;

    public function __construct(bool \$stopwatchIsAvailable)
    {
        \$this->stopwatchIsAvailable = \$stopwatchIsAvailable;
    }

    public function parse(Token \$token): Node
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();

        // ";
        // line 39
        $context["__internal_8dd70101276f64c64f33ce46b7dbf216cce44e37ec4f7bf59b56cb560d23f18e"] = "bar"        ;
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\StopwatchExtension')->getStopwatch()->start($context["__internal_8dd70101276f64c64f33ce46b7dbf216cce44e37ec4f7bf59b56cb560d23f18e"], 'template');
        // line 40
        echo "        \$name = \$this->parser->getExpressionParser()->parseExpression();

        \$stream->expect(Token::BLOCK_END_TYPE);

        // ";
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\StopwatchExtension')->getStopwatch()->stop($context["__internal_8dd70101276f64c64f33ce46b7dbf216cce44e37ec4f7bf59b56cb560d23f18e"]);
        // line 45
        echo "        \$body = \$this->parser->subparse([\$this, 'decideStopwatchEnd'], true);
        \$stream->expect(Token::BLOCK_END_TYPE);

        if (\$this->stopwatchIsAvailable) {
            return new StopwatchNode(\$name, \$body, new AssignNameExpression(\$this->parser->getVarName(), \$token->getLine()), \$lineno, \$this->getTag());
        }

        return \$body;
    }

    public function decideStopwatchEnd(Token \$token): bool
    {
        return \$token->test('endstopwatch');
    }

    public function getTag(): string
    {
        return 'stopwatch';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/twig-bridge/TokenParser/StopwatchTokenParser.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 45,  83 => 40,  80 => 39,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Twig\\TokenParser;

use Symfony\\Bridge\\Twig\\Node\\StopwatchNode;
use Twig\\Node\\Expression\\AssignNameExpression;
use Twig\\Node\\Node;
use Twig\\Token;
use Twig\\TokenParser\\AbstractTokenParser;

/**
 * Token Parser for the stopwatch tag.
 *
 * @author Wouter J <wouter@wouterj.nl>
 */
final class StopwatchTokenParser extends AbstractTokenParser
{
    protected \$stopwatchIsAvailable;

    public function __construct(bool \$stopwatchIsAvailable)
    {
        \$this->stopwatchIsAvailable = \$stopwatchIsAvailable;
    }

    public function parse(Token \$token): Node
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();

        // {% stopwatch 'bar' %}
        \$name = \$this->parser->getExpressionParser()->parseExpression();

        \$stream->expect(Token::BLOCK_END_TYPE);

        // {% endstopwatch %}
        \$body = \$this->parser->subparse([\$this, 'decideStopwatchEnd'], true);
        \$stream->expect(Token::BLOCK_END_TYPE);

        if (\$this->stopwatchIsAvailable) {
            return new StopwatchNode(\$name, \$body, new AssignNameExpression(\$this->parser->getVarName(), \$token->getLine()), \$lineno, \$this->getTag());
        }

        return \$body;
    }

    public function decideStopwatchEnd(Token \$token): bool
    {
        return \$token->test('endstopwatch');
    }

    public function getTag(): string
    {
        return 'stopwatch';
    }
}
", "@app/vendor/symfony/twig-bridge/TokenParser/StopwatchTokenParser.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\twig-bridge\\TokenParser\\StopwatchTokenParser.php");
    }
}
