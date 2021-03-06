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

/* @app/vendor/nikic/php-parser/lib/PhpParser/NodeVisitor.php */
class __TwigTemplate_c09acddabd2fc8a0e68e21c1974cb6f5ed4e6a0edd3818724d6e25c440609971 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/NodeVisitor.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser;

interface NodeVisitor
{
    /**
     * Called once before traversal.
     *
     * Return value semantics:
     *  * null:      \$nodes stays as-is
     *  * otherwise: \$nodes is set to the return value
     *
     * @param Node[] \$nodes Array of nodes
     *
     * @return null|Node[] Array of nodes
     */
    public function beforeTraverse(array \$nodes);

    /**
     * Called when entering a node.
     *
     * Return value semantics:
     *  * null
     *        => \$node stays as-is
     *  * NodeTraverser::DONT_TRAVERSE_CHILDREN
     *        => Children of \$node are not traversed. \$node stays as-is
     *  * NodeTraverser::STOP_TRAVERSAL
     *        => Traversal is aborted. \$node stays as-is
     *  * otherwise
     *        => \$node is set to the return value
     *
     * @param Node \$node Node
     *
     * @return null|int|Node Replacement node (or special return value)
     */
    public function enterNode(Node \$node);

    /**
     * Called when leaving a node.
     *
     * Return value semantics:
     *  * null
     *        => \$node stays as-is
     *  * NodeTraverser::REMOVE_NODE
     *        => \$node is removed from the parent array
     *  * NodeTraverser::STOP_TRAVERSAL
     *        => Traversal is aborted. \$node stays as-is
     *  * array (of Nodes)
     *        => The return value is merged into the parent array (at the position of the \$node)
     *  * otherwise
     *        => \$node is set to the return value
     *
     * @param Node \$node Node
     *
     * @return null|int|Node|Node[] Replacement node (or special return value)
     */
    public function leaveNode(Node \$node);

    /**
     * Called once after traversal.
     *
     * Return value semantics:
     *  * null:      \$nodes stays as-is
     *  * otherwise: \$nodes is set to the return value
     *
     * @param Node[] \$nodes Array of nodes
     *
     * @return null|Node[] Array of nodes
     */
    public function afterTraverse(array \$nodes);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/NodeVisitor.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser;

interface NodeVisitor
{
    /**
     * Called once before traversal.
     *
     * Return value semantics:
     *  * null:      \$nodes stays as-is
     *  * otherwise: \$nodes is set to the return value
     *
     * @param Node[] \$nodes Array of nodes
     *
     * @return null|Node[] Array of nodes
     */
    public function beforeTraverse(array \$nodes);

    /**
     * Called when entering a node.
     *
     * Return value semantics:
     *  * null
     *        => \$node stays as-is
     *  * NodeTraverser::DONT_TRAVERSE_CHILDREN
     *        => Children of \$node are not traversed. \$node stays as-is
     *  * NodeTraverser::STOP_TRAVERSAL
     *        => Traversal is aborted. \$node stays as-is
     *  * otherwise
     *        => \$node is set to the return value
     *
     * @param Node \$node Node
     *
     * @return null|int|Node Replacement node (or special return value)
     */
    public function enterNode(Node \$node);

    /**
     * Called when leaving a node.
     *
     * Return value semantics:
     *  * null
     *        => \$node stays as-is
     *  * NodeTraverser::REMOVE_NODE
     *        => \$node is removed from the parent array
     *  * NodeTraverser::STOP_TRAVERSAL
     *        => Traversal is aborted. \$node stays as-is
     *  * array (of Nodes)
     *        => The return value is merged into the parent array (at the position of the \$node)
     *  * otherwise
     *        => \$node is set to the return value
     *
     * @param Node \$node Node
     *
     * @return null|int|Node|Node[] Replacement node (or special return value)
     */
    public function leaveNode(Node \$node);

    /**
     * Called once after traversal.
     *
     * Return value semantics:
     *  * null:      \$nodes stays as-is
     *  * otherwise: \$nodes is set to the return value
     *
     * @param Node[] \$nodes Array of nodes
     *
     * @return null|Node[] Array of nodes
     */
    public function afterTraverse(array \$nodes);
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/NodeVisitor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\NodeVisitor.php");
    }
}
