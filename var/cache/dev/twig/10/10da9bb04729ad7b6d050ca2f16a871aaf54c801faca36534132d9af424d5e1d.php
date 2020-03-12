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

/* @app/vendor/twig/twig/src/Node/IncludeNode.php */
class __TwigTemplate_128dddee09cd508c64d216dddf567d55900b472bab3abaa6d27802a088c7fa6f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/IncludeNode.php"));

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

namespace Twig\\Node;

use Twig\\Compiler;
use Twig\\Node\\Expression\\AbstractExpression;

/**
 * Represents an include node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class IncludeNode extends Node implements NodeOutputInterface
{
    public function __construct(AbstractExpression \$expr, AbstractExpression \$variables = null, bool \$only = false, bool \$ignoreMissing = false, int \$lineno, string \$tag = null)
    {
        \$nodes = ['expr' => \$expr];
        if (null !== \$variables) {
            \$nodes['variables'] = \$variables;
        }

        parent::__construct(\$nodes, ['only' => (bool) \$only, 'ignore_missing' => (bool) \$ignoreMissing], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler->addDebugInfo(\$this);

        if (\$this->getAttribute('ignore_missing')) {
            \$template = \$compiler->getVarName();

            \$compiler
                ->write(sprintf(\"\$%s = null;\\n\", \$template))
                ->write(\"try {\\n\")
                ->indent()
                ->write(sprintf('\$%s = ', \$template))
            ;

            \$this->addGetTemplate(\$compiler);

            \$compiler
                ->raw(\";\\n\")
                ->outdent()
                ->write(\"} catch (LoaderError \\\$e) {\\n\")
                ->indent()
                ->write(\"// ignore missing template\\n\")
                ->outdent()
                ->write(\"}\\n\")
                ->write(sprintf(\"if (\$%s) {\\n\", \$template))
                ->indent()
                ->write(sprintf('\$%s->display(', \$template))
            ;
            \$this->addTemplateArguments(\$compiler);
            \$compiler
                ->raw(\");\\n\")
                ->outdent()
                ->write(\"}\\n\")
            ;
        } else {
            \$this->addGetTemplate(\$compiler);
            \$compiler->raw('->display(');
            \$this->addTemplateArguments(\$compiler);
            \$compiler->raw(\");\\n\");
        }
    }

    protected function addGetTemplate(Compiler \$compiler)
    {
        \$compiler
            ->write('\$this->loadTemplate(')
            ->subcompile(\$this->getNode('expr'))
            ->raw(', ')
            ->repr(\$this->getTemplateName())
            ->raw(', ')
            ->repr(\$this->getTemplateLine())
            ->raw(')')
        ;
    }

    protected function addTemplateArguments(Compiler \$compiler)
    {
        if (!\$this->hasNode('variables')) {
            \$compiler->raw(false === \$this->getAttribute('only') ? '\$context' : '[]');
        } elseif (false === \$this->getAttribute('only')) {
            \$compiler
                ->raw('twig_array_merge(\$context, ')
                ->subcompile(\$this->getNode('variables'))
                ->raw(')')
            ;
        } else {
            \$compiler->raw('twig_to_array(');
            \$compiler->subcompile(\$this->getNode('variables'));
            \$compiler->raw(')');
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/IncludeNode.php";
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

namespace Twig\\Node;

use Twig\\Compiler;
use Twig\\Node\\Expression\\AbstractExpression;

/**
 * Represents an include node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class IncludeNode extends Node implements NodeOutputInterface
{
    public function __construct(AbstractExpression \$expr, AbstractExpression \$variables = null, bool \$only = false, bool \$ignoreMissing = false, int \$lineno, string \$tag = null)
    {
        \$nodes = ['expr' => \$expr];
        if (null !== \$variables) {
            \$nodes['variables'] = \$variables;
        }

        parent::__construct(\$nodes, ['only' => (bool) \$only, 'ignore_missing' => (bool) \$ignoreMissing], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler->addDebugInfo(\$this);

        if (\$this->getAttribute('ignore_missing')) {
            \$template = \$compiler->getVarName();

            \$compiler
                ->write(sprintf(\"\$%s = null;\\n\", \$template))
                ->write(\"try {\\n\")
                ->indent()
                ->write(sprintf('\$%s = ', \$template))
            ;

            \$this->addGetTemplate(\$compiler);

            \$compiler
                ->raw(\";\\n\")
                ->outdent()
                ->write(\"} catch (LoaderError \\\$e) {\\n\")
                ->indent()
                ->write(\"// ignore missing template\\n\")
                ->outdent()
                ->write(\"}\\n\")
                ->write(sprintf(\"if (\$%s) {\\n\", \$template))
                ->indent()
                ->write(sprintf('\$%s->display(', \$template))
            ;
            \$this->addTemplateArguments(\$compiler);
            \$compiler
                ->raw(\");\\n\")
                ->outdent()
                ->write(\"}\\n\")
            ;
        } else {
            \$this->addGetTemplate(\$compiler);
            \$compiler->raw('->display(');
            \$this->addTemplateArguments(\$compiler);
            \$compiler->raw(\");\\n\");
        }
    }

    protected function addGetTemplate(Compiler \$compiler)
    {
        \$compiler
            ->write('\$this->loadTemplate(')
            ->subcompile(\$this->getNode('expr'))
            ->raw(', ')
            ->repr(\$this->getTemplateName())
            ->raw(', ')
            ->repr(\$this->getTemplateLine())
            ->raw(')')
        ;
    }

    protected function addTemplateArguments(Compiler \$compiler)
    {
        if (!\$this->hasNode('variables')) {
            \$compiler->raw(false === \$this->getAttribute('only') ? '\$context' : '[]');
        } elseif (false === \$this->getAttribute('only')) {
            \$compiler
                ->raw('twig_array_merge(\$context, ')
                ->subcompile(\$this->getNode('variables'))
                ->raw(')')
            ;
        } else {
            \$compiler->raw('twig_to_array(');
            \$compiler->subcompile(\$this->getNode('variables'));
            \$compiler->raw(')');
        }
    }
}
", "@app/vendor/twig/twig/src/Node/IncludeNode.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\IncludeNode.php");
    }
}
