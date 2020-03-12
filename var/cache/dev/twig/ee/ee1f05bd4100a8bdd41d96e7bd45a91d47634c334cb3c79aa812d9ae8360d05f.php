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

/* @app/vendor/twig/twig/src/Node/Expression/ArrowFunctionExpression.php */
class __TwigTemplate_45287e0b1e7da3e84b6068c6861d11d3033a7d7dc3e96060ab403f7a2c62c78d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/Expression/ArrowFunctionExpression.php"));

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

namespace Twig\\Node\\Expression;

use Twig\\Compiler;
use Twig\\Node\\Node;

/**
 * Represents an arrow function.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ArrowFunctionExpression extends AbstractExpression
{
    public function __construct(AbstractExpression \$expr, Node \$names, \$lineno, \$tag = null)
    {
        parent::__construct(['expr' => \$expr, 'names' => \$names], [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->raw('function (')
        ;
        foreach (\$this->getNode('names') as \$i => \$name) {
            if (\$i) {
                \$compiler->raw(', ');
            }

            \$compiler
                ->raw('\$__')
                ->raw(\$name->getAttribute('name'))
                ->raw('__')
            ;
        }
        \$compiler
            ->raw(') use (\$context, \$macros) { ')
        ;
        foreach (\$this->getNode('names') as \$name) {
            \$compiler
                ->raw('\$context[\"')
                ->raw(\$name->getAttribute('name'))
                ->raw('\"] = \$__')
                ->raw(\$name->getAttribute('name'))
                ->raw('__; ')
            ;
        }
        \$compiler
            ->raw('return ')
            ->subcompile(\$this->getNode('expr'))
            ->raw('; }')
        ;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/Expression/ArrowFunctionExpression.php";
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

namespace Twig\\Node\\Expression;

use Twig\\Compiler;
use Twig\\Node\\Node;

/**
 * Represents an arrow function.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ArrowFunctionExpression extends AbstractExpression
{
    public function __construct(AbstractExpression \$expr, Node \$names, \$lineno, \$tag = null)
    {
        parent::__construct(['expr' => \$expr, 'names' => \$names], [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->raw('function (')
        ;
        foreach (\$this->getNode('names') as \$i => \$name) {
            if (\$i) {
                \$compiler->raw(', ');
            }

            \$compiler
                ->raw('\$__')
                ->raw(\$name->getAttribute('name'))
                ->raw('__')
            ;
        }
        \$compiler
            ->raw(') use (\$context, \$macros) { ')
        ;
        foreach (\$this->getNode('names') as \$name) {
            \$compiler
                ->raw('\$context[\"')
                ->raw(\$name->getAttribute('name'))
                ->raw('\"] = \$__')
                ->raw(\$name->getAttribute('name'))
                ->raw('__; ')
            ;
        }
        \$compiler
            ->raw('return ')
            ->subcompile(\$this->getNode('expr'))
            ->raw('; }')
        ;
    }
}
", "@app/vendor/twig/twig/src/Node/Expression/ArrowFunctionExpression.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\Expression\\ArrowFunctionExpression.php");
    }
}
