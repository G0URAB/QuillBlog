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

/* @app/vendor/twig/twig/src/Node/ForNode.php */
class __TwigTemplate_f8217c3af2107f2a39d052cf102f4f3651be62ab2ef24f10dc22e988f1ac1da1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/Node/ForNode.php"));

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
use Twig\\Node\\Expression\\AssignNameExpression;

/**
 * Represents a for node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ForNode extends Node
{
    private \$loop;

    public function __construct(AssignNameExpression \$keyTarget, AssignNameExpression \$valueTarget, AbstractExpression \$seq, \$ifexpr = null, Node \$body, Node \$else = null, int \$lineno, string \$tag = null)
    {
        \$body = new Node([\$body, \$this->loop = new ForLoopNode(\$lineno, \$tag)]);

        \$nodes = ['key_target' => \$keyTarget, 'value_target' => \$valueTarget, 'seq' => \$seq, 'body' => \$body];
        if (null !== \$else) {
            \$nodes['else'] = \$else;
        }

        parent::__construct(\$nodes, ['with_loop' => true], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->write(\"\\\$context['_parent'] = \\\$context;\\n\")
            ->write(\"\\\$context['_seq'] = twig_ensure_traversable(\")
            ->subcompile(\$this->getNode('seq'))
            ->raw(\");\\n\")
        ;

        if (\$this->hasNode('else')) {
            \$compiler->write(\"\\\$context['_iterated'] = false;\\n\");
        }

        if (\$this->getAttribute('with_loop')) {
            \$compiler
                ->write(\"\\\$context['loop'] = [\\n\")
                ->write(\"  'parent' => \\\$context['_parent'],\\n\")
                ->write(\"  'index0' => 0,\\n\")
                ->write(\"  'index'  => 1,\\n\")
                ->write(\"  'first'  => true,\\n\")
                ->write(\"];\\n\")
                ->write(\"if (is_array(\\\$context['_seq']) || (is_object(\\\$context['_seq']) && \\\$context['_seq'] instanceof \\Countable)) {\\n\")
                ->indent()
                ->write(\"\\\$length = count(\\\$context['_seq']);\\n\")
                ->write(\"\\\$context['loop']['revindex0'] = \\\$length - 1;\\n\")
                ->write(\"\\\$context['loop']['revindex'] = \\\$length;\\n\")
                ->write(\"\\\$context['loop']['length'] = \\\$length;\\n\")
                ->write(\"\\\$context['loop']['last'] = 1 === \\\$length;\\n\")
                ->outdent()
                ->write(\"}\\n\")
            ;
        }

        \$this->loop->setAttribute('else', \$this->hasNode('else'));
        \$this->loop->setAttribute('with_loop', \$this->getAttribute('with_loop'));

        \$compiler
            ->write(\"foreach (\\\$context['_seq'] as \")
            ->subcompile(\$this->getNode('key_target'))
            ->raw(' => ')
            ->subcompile(\$this->getNode('value_target'))
            ->raw(\") {\\n\")
            ->indent()
            ->subcompile(\$this->getNode('body'))
            ->outdent()
            ->write(\"}\\n\")
        ;

        if (\$this->hasNode('else')) {
            \$compiler
                ->write(\"if (!\\\$context['_iterated']) {\\n\")
                ->indent()
                ->subcompile(\$this->getNode('else'))
                ->outdent()
                ->write(\"}\\n\")
            ;
        }

        \$compiler->write(\"\\\$_parent = \\\$context['_parent'];\\n\");

        // remove some \"private\" loop variables (needed for nested loops)
        \$compiler->write('unset(\$context[\\'_seq\\'], \$context[\\'_iterated\\'], \$context[\\''.\$this->getNode('key_target')->getAttribute('name').'\\'], \$context[\\''.\$this->getNode('value_target')->getAttribute('name').'\\'], \$context[\\'_parent\\'], \$context[\\'loop\\']);'.\"\\n\");

        // keep the values set in the inner context for variables defined in the outer context
        \$compiler->write(\"\\\$context = array_intersect_key(\\\$context, \\\$_parent) + \\\$_parent;\\n\");
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/Node/ForNode.php";
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
use Twig\\Node\\Expression\\AssignNameExpression;

/**
 * Represents a for node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ForNode extends Node
{
    private \$loop;

    public function __construct(AssignNameExpression \$keyTarget, AssignNameExpression \$valueTarget, AbstractExpression \$seq, \$ifexpr = null, Node \$body, Node \$else = null, int \$lineno, string \$tag = null)
    {
        \$body = new Node([\$body, \$this->loop = new ForLoopNode(\$lineno, \$tag)]);

        \$nodes = ['key_target' => \$keyTarget, 'value_target' => \$valueTarget, 'seq' => \$seq, 'body' => \$body];
        if (null !== \$else) {
            \$nodes['else'] = \$else;
        }

        parent::__construct(\$nodes, ['with_loop' => true], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler): void
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->write(\"\\\$context['_parent'] = \\\$context;\\n\")
            ->write(\"\\\$context['_seq'] = twig_ensure_traversable(\")
            ->subcompile(\$this->getNode('seq'))
            ->raw(\");\\n\")
        ;

        if (\$this->hasNode('else')) {
            \$compiler->write(\"\\\$context['_iterated'] = false;\\n\");
        }

        if (\$this->getAttribute('with_loop')) {
            \$compiler
                ->write(\"\\\$context['loop'] = [\\n\")
                ->write(\"  'parent' => \\\$context['_parent'],\\n\")
                ->write(\"  'index0' => 0,\\n\")
                ->write(\"  'index'  => 1,\\n\")
                ->write(\"  'first'  => true,\\n\")
                ->write(\"];\\n\")
                ->write(\"if (is_array(\\\$context['_seq']) || (is_object(\\\$context['_seq']) && \\\$context['_seq'] instanceof \\Countable)) {\\n\")
                ->indent()
                ->write(\"\\\$length = count(\\\$context['_seq']);\\n\")
                ->write(\"\\\$context['loop']['revindex0'] = \\\$length - 1;\\n\")
                ->write(\"\\\$context['loop']['revindex'] = \\\$length;\\n\")
                ->write(\"\\\$context['loop']['length'] = \\\$length;\\n\")
                ->write(\"\\\$context['loop']['last'] = 1 === \\\$length;\\n\")
                ->outdent()
                ->write(\"}\\n\")
            ;
        }

        \$this->loop->setAttribute('else', \$this->hasNode('else'));
        \$this->loop->setAttribute('with_loop', \$this->getAttribute('with_loop'));

        \$compiler
            ->write(\"foreach (\\\$context['_seq'] as \")
            ->subcompile(\$this->getNode('key_target'))
            ->raw(' => ')
            ->subcompile(\$this->getNode('value_target'))
            ->raw(\") {\\n\")
            ->indent()
            ->subcompile(\$this->getNode('body'))
            ->outdent()
            ->write(\"}\\n\")
        ;

        if (\$this->hasNode('else')) {
            \$compiler
                ->write(\"if (!\\\$context['_iterated']) {\\n\")
                ->indent()
                ->subcompile(\$this->getNode('else'))
                ->outdent()
                ->write(\"}\\n\")
            ;
        }

        \$compiler->write(\"\\\$_parent = \\\$context['_parent'];\\n\");

        // remove some \"private\" loop variables (needed for nested loops)
        \$compiler->write('unset(\$context[\\'_seq\\'], \$context[\\'_iterated\\'], \$context[\\''.\$this->getNode('key_target')->getAttribute('name').'\\'], \$context[\\''.\$this->getNode('value_target')->getAttribute('name').'\\'], \$context[\\'_parent\\'], \$context[\\'loop\\']);'.\"\\n\");

        // keep the values set in the inner context for variables defined in the outer context
        \$compiler->write(\"\\\$context = array_intersect_key(\\\$context, \\\$_parent) + \\\$_parent;\\n\");
    }
}
", "@app/vendor/twig/twig/src/Node/ForNode.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\Node\\ForNode.php");
    }
}
