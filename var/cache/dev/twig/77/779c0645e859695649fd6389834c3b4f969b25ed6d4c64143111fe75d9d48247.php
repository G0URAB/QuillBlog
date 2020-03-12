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

/* @app/vendor/twig/twig/src/Node/Expression/ConditionalExpression.php */
class __TwigTemplate_2669d6618e465b6de528364ee6493c96c06020d2a23bea44ed34f414dd92fc9d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/Expression/ConditionalExpression.php"));

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

namespace Twig\\Node\\Expression;

use Twig\\Compiler;

class ConditionalExpression extends AbstractExpression
{
    public function __construct(AbstractExpression \$expr1, AbstractExpression \$expr2, AbstractExpression \$expr3, int \$lineno)
    {
        parent::__construct(['expr1' => \$expr1, 'expr2' => \$expr2, 'expr3' => \$expr3], [], \$lineno);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->raw('((')
            ->subcompile(\$this->getNode('expr1'))
            ->raw(') ? (')
            ->subcompile(\$this->getNode('expr2'))
            ->raw(') : (')
            ->subcompile(\$this->getNode('expr3'))
            ->raw('))')
        ;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/Expression/ConditionalExpression.php";
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

namespace Twig\\Node\\Expression;

use Twig\\Compiler;

class ConditionalExpression extends AbstractExpression
{
    public function __construct(AbstractExpression \$expr1, AbstractExpression \$expr2, AbstractExpression \$expr3, int \$lineno)
    {
        parent::__construct(['expr1' => \$expr1, 'expr2' => \$expr2, 'expr3' => \$expr3], [], \$lineno);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->raw('((')
            ->subcompile(\$this->getNode('expr1'))
            ->raw(') ? (')
            ->subcompile(\$this->getNode('expr2'))
            ->raw(') : (')
            ->subcompile(\$this->getNode('expr3'))
            ->raw('))')
        ;
    }
}
", "@app/vendor/twig/twig/src/Node/Expression/ConditionalExpression.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\Expression\\ConditionalExpression.php");
    }
}
