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

/* @app/vendor/symfony/dependency-injection/Compiler/ServiceReferenceGraphNode.php */
class __TwigTemplate_916bc01dd27eeb0df6c3c1d585e2acc923399db3faa328cfa2c1ccc101fc4ba6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Compiler/ServiceReferenceGraphNode.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\Definition;

/**
 * Represents a node in your service graph.
 *
 * Value is typically a definition, or an alias.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ServiceReferenceGraphNode
{
    private \$id;
    private \$inEdges = [];
    private \$outEdges = [];
    private \$value;

    /**
     * @param string \$id    The node identifier
     * @param mixed  \$value The node value
     */
    public function __construct(string \$id, \$value)
    {
        \$this->id = \$id;
        \$this->value = \$value;
    }

    public function addInEdge(ServiceReferenceGraphEdge \$edge)
    {
        \$this->inEdges[] = \$edge;
    }

    public function addOutEdge(ServiceReferenceGraphEdge \$edge)
    {
        \$this->outEdges[] = \$edge;
    }

    /**
     * Checks if the value of this node is an Alias.
     *
     * @return bool True if the value is an Alias instance
     */
    public function isAlias()
    {
        return \$this->value instanceof Alias;
    }

    /**
     * Checks if the value of this node is a Definition.
     *
     * @return bool True if the value is a Definition instance
     */
    public function isDefinition()
    {
        return \$this->value instanceof Definition;
    }

    /**
     * Returns the identifier.
     *
     * @return string
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Returns the in edges.
     *
     * @return ServiceReferenceGraphEdge[]
     */
    public function getInEdges()
    {
        return \$this->inEdges;
    }

    /**
     * Returns the out edges.
     *
     * @return ServiceReferenceGraphEdge[]
     */
    public function getOutEdges()
    {
        return \$this->outEdges;
    }

    /**
     * Returns the value of this Node.
     *
     * @return mixed The value
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * Clears all edges.
     */
    public function clear()
    {
        \$this->inEdges = \$this->outEdges = [];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Compiler/ServiceReferenceGraphNode.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\Definition;

/**
 * Represents a node in your service graph.
 *
 * Value is typically a definition, or an alias.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ServiceReferenceGraphNode
{
    private \$id;
    private \$inEdges = [];
    private \$outEdges = [];
    private \$value;

    /**
     * @param string \$id    The node identifier
     * @param mixed  \$value The node value
     */
    public function __construct(string \$id, \$value)
    {
        \$this->id = \$id;
        \$this->value = \$value;
    }

    public function addInEdge(ServiceReferenceGraphEdge \$edge)
    {
        \$this->inEdges[] = \$edge;
    }

    public function addOutEdge(ServiceReferenceGraphEdge \$edge)
    {
        \$this->outEdges[] = \$edge;
    }

    /**
     * Checks if the value of this node is an Alias.
     *
     * @return bool True if the value is an Alias instance
     */
    public function isAlias()
    {
        return \$this->value instanceof Alias;
    }

    /**
     * Checks if the value of this node is a Definition.
     *
     * @return bool True if the value is a Definition instance
     */
    public function isDefinition()
    {
        return \$this->value instanceof Definition;
    }

    /**
     * Returns the identifier.
     *
     * @return string
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Returns the in edges.
     *
     * @return ServiceReferenceGraphEdge[]
     */
    public function getInEdges()
    {
        return \$this->inEdges;
    }

    /**
     * Returns the out edges.
     *
     * @return ServiceReferenceGraphEdge[]
     */
    public function getOutEdges()
    {
        return \$this->outEdges;
    }

    /**
     * Returns the value of this Node.
     *
     * @return mixed The value
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * Clears all edges.
     */
    public function clear()
    {
        \$this->inEdges = \$this->outEdges = [];
    }
}
", "@app/vendor/symfony/dependency-injection/Compiler/ServiceReferenceGraphNode.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Compiler\\ServiceReferenceGraphNode.php");
    }
}
