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

/* @app/vendor/nikic/php-parser/lib/PhpParser/NodeTraverserInterface.php */
class __TwigTemplate_b8fb7b0ce8bdb5056ffc4c0fe2b21d088c96eccb83c22c2c1aedabc8add8e6ef extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/NodeTraverserInterface.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser;

interface NodeTraverserInterface
{
    /**
     * Adds a visitor.
     *
     * @param NodeVisitor \$visitor Visitor to add
     */
    public function addVisitor(NodeVisitor \$visitor);

    /**
     * Removes an added visitor.
     *
     * @param NodeVisitor \$visitor
     */
    public function removeVisitor(NodeVisitor \$visitor);

    /**
     * Traverses an array of nodes using the registered visitors.
     *
     * @param Node[] \$nodes Array of nodes
     *
     * @return Node[] Traversed array of nodes
     */
    public function traverse(array \$nodes) : array;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/NodeTraverserInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser;

interface NodeTraverserInterface
{
    /**
     * Adds a visitor.
     *
     * @param NodeVisitor \$visitor Visitor to add
     */
    public function addVisitor(NodeVisitor \$visitor);

    /**
     * Removes an added visitor.
     *
     * @param NodeVisitor \$visitor
     */
    public function removeVisitor(NodeVisitor \$visitor);

    /**
     * Traverses an array of nodes using the registered visitors.
     *
     * @param Node[] \$nodes Array of nodes
     *
     * @return Node[] Traversed array of nodes
     */
    public function traverse(array \$nodes) : array;
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/NodeTraverserInterface.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\NodeTraverserInterface.php");
    }
}
