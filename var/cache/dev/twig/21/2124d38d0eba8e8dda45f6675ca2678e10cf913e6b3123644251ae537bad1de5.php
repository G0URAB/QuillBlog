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

/* @app/vendor/twig/twig/src/NodeTraverser.php */
class __TwigTemplate_fd38819dc2b796fc45cbcf060350c6b1f86dc9beaf42a147d890248fefb5e5c8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/src/NodeTraverser.php"));

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

namespace Twig;

use Twig\\Node\\Node;
use Twig\\NodeVisitor\\NodeVisitorInterface;

/**
 * A node traverser.
 *
 * It visits all nodes and their children and calls the given visitor for each.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class NodeTraverser
{
    private \$env;
    private \$visitors = [];

    /**
     * @param NodeVisitorInterface[] \$visitors
     */
    public function __construct(Environment \$env, array \$visitors = [])
    {
        \$this->env = \$env;
        foreach (\$visitors as \$visitor) {
            \$this->addVisitor(\$visitor);
        }
    }

    public function addVisitor(NodeVisitorInterface \$visitor): void
    {
        \$this->visitors[\$visitor->getPriority()][] = \$visitor;
    }

    /**
     * Traverses a node and calls the registered visitors.
     */
    public function traverse(Node \$node): Node
    {
        ksort(\$this->visitors);
        foreach (\$this->visitors as \$visitors) {
            foreach (\$visitors as \$visitor) {
                \$node = \$this->traverseForVisitor(\$visitor, \$node);
            }
        }

        return \$node;
    }

    private function traverseForVisitor(NodeVisitorInterface \$visitor, Node \$node): ?Node
    {
        \$node = \$visitor->enterNode(\$node, \$this->env);

        foreach (\$node as \$k => \$n) {
            if (null !== \$m = \$this->traverseForVisitor(\$visitor, \$n)) {
                if (\$m !== \$n) {
                    \$node->setNode(\$k, \$m);
                }
            } else {
                \$node->removeNode(\$k);
            }
        }

        return \$visitor->leaveNode(\$node, \$this->env);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/src/NodeTraverser.php";
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

namespace Twig;

use Twig\\Node\\Node;
use Twig\\NodeVisitor\\NodeVisitorInterface;

/**
 * A node traverser.
 *
 * It visits all nodes and their children and calls the given visitor for each.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class NodeTraverser
{
    private \$env;
    private \$visitors = [];

    /**
     * @param NodeVisitorInterface[] \$visitors
     */
    public function __construct(Environment \$env, array \$visitors = [])
    {
        \$this->env = \$env;
        foreach (\$visitors as \$visitor) {
            \$this->addVisitor(\$visitor);
        }
    }

    public function addVisitor(NodeVisitorInterface \$visitor): void
    {
        \$this->visitors[\$visitor->getPriority()][] = \$visitor;
    }

    /**
     * Traverses a node and calls the registered visitors.
     */
    public function traverse(Node \$node): Node
    {
        ksort(\$this->visitors);
        foreach (\$this->visitors as \$visitors) {
            foreach (\$visitors as \$visitor) {
                \$node = \$this->traverseForVisitor(\$visitor, \$node);
            }
        }

        return \$node;
    }

    private function traverseForVisitor(NodeVisitorInterface \$visitor, Node \$node): ?Node
    {
        \$node = \$visitor->enterNode(\$node, \$this->env);

        foreach (\$node as \$k => \$n) {
            if (null !== \$m = \$this->traverseForVisitor(\$visitor, \$n)) {
                if (\$m !== \$n) {
                    \$node->setNode(\$k, \$m);
                }
            } else {
                \$node->removeNode(\$k);
            }
        }

        return \$visitor->leaveNode(\$node, \$this->env);
    }
}
", "@app/vendor/twig/twig/src/NodeTraverser.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\src\\NodeTraverser.php");
    }
}
