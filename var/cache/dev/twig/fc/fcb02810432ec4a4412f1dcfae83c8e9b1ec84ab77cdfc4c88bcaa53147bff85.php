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

/* @app/vendor/nikic/php-parser/lib/PhpParser/NodeVisitor/FirstFindingVisitor.php */
class __TwigTemplate_51a36621fa3986ff3c7e0d8e5ff8f81b93e5893ee536da9e7e3e18c58057e178 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/nikic/php-parser/lib/PhpParser/NodeVisitor/FirstFindingVisitor.php"));

        // line 1
        echo "<?php declare(strict_types=1);

namespace PhpParser\\NodeVisitor;

use PhpParser\\Node;
use PhpParser\\NodeTraverser;
use PhpParser\\NodeVisitorAbstract;

/**
 * This visitor can be used to find the first node satisfying some criterion determined by
 * a filter callback.
 */
class FirstFindingVisitor extends NodeVisitorAbstract
{
    /** @var callable Filter callback */
    protected \$filterCallback;
    /** @var null|Node Found node */
    protected \$foundNode;

    public function __construct(callable \$filterCallback) {
        \$this->filterCallback = \$filterCallback;
    }

    /**
     * Get found node satisfying the filter callback.
     *
     * Returns null if no node satisfies the filter callback.
     *
     * @return null|Node Found node (or null if not found)
     */
    public function getFoundNode() {
        return \$this->foundNode;
    }

    public function beforeTraverse(array \$nodes) {
        \$this->foundNode = null;

        return null;
    }

    public function enterNode(Node \$node) {
        \$filterCallback = \$this->filterCallback;
        if (\$filterCallback(\$node)) {
            \$this->foundNode = \$node;
            return NodeTraverser::STOP_TRAVERSAL;
        }

        return null;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/nikic/php-parser/lib/PhpParser/NodeVisitor/FirstFindingVisitor.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types=1);

namespace PhpParser\\NodeVisitor;

use PhpParser\\Node;
use PhpParser\\NodeTraverser;
use PhpParser\\NodeVisitorAbstract;

/**
 * This visitor can be used to find the first node satisfying some criterion determined by
 * a filter callback.
 */
class FirstFindingVisitor extends NodeVisitorAbstract
{
    /** @var callable Filter callback */
    protected \$filterCallback;
    /** @var null|Node Found node */
    protected \$foundNode;

    public function __construct(callable \$filterCallback) {
        \$this->filterCallback = \$filterCallback;
    }

    /**
     * Get found node satisfying the filter callback.
     *
     * Returns null if no node satisfies the filter callback.
     *
     * @return null|Node Found node (or null if not found)
     */
    public function getFoundNode() {
        return \$this->foundNode;
    }

    public function beforeTraverse(array \$nodes) {
        \$this->foundNode = null;

        return null;
    }

    public function enterNode(Node \$node) {
        \$filterCallback = \$this->filterCallback;
        if (\$filterCallback(\$node)) {
            \$this->foundNode = \$node;
            return NodeTraverser::STOP_TRAVERSAL;
        }

        return null;
    }
}
", "@app/vendor/nikic/php-parser/lib/PhpParser/NodeVisitor/FirstFindingVisitor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\nikic\\php-parser\\lib\\PhpParser\\NodeVisitor\\FirstFindingVisitor.php");
    }
}
