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

/* @app/vendor/symfony/dependency-injection/Compiler/ServiceReferenceGraphEdge.php */
class __TwigTemplate_5ca3bfa47f27435703d2450d1bb16ce18e050bafa179a90e83410c600b3d5555 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Compiler/ServiceReferenceGraphEdge.php"));

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

/**
 * Represents an edge in your service graph.
 *
 * Value is typically a reference.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ServiceReferenceGraphEdge
{
    private \$sourceNode;
    private \$destNode;
    private \$value;
    private \$lazy;
    private \$weak;
    private \$byConstructor;

    public function __construct(ServiceReferenceGraphNode \$sourceNode, ServiceReferenceGraphNode \$destNode, \$value = null, bool \$lazy = false, bool \$weak = false, bool \$byConstructor = false)
    {
        \$this->sourceNode = \$sourceNode;
        \$this->destNode = \$destNode;
        \$this->value = \$value;
        \$this->lazy = \$lazy;
        \$this->weak = \$weak;
        \$this->byConstructor = \$byConstructor;
    }

    /**
     * Returns the value of the edge.
     *
     * @return mixed
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * Returns the source node.
     *
     * @return ServiceReferenceGraphNode
     */
    public function getSourceNode()
    {
        return \$this->sourceNode;
    }

    /**
     * Returns the destination node.
     *
     * @return ServiceReferenceGraphNode
     */
    public function getDestNode()
    {
        return \$this->destNode;
    }

    /**
     * Returns true if the edge is lazy, meaning it's a dependency not requiring direct instantiation.
     *
     * @return bool
     */
    public function isLazy()
    {
        return \$this->lazy;
    }

    /**
     * Returns true if the edge is weak, meaning it shouldn't prevent removing the target service.
     *
     * @return bool
     */
    public function isWeak()
    {
        return \$this->weak;
    }

    /**
     * Returns true if the edge links with a constructor argument.
     *
     * @return bool
     */
    public function isReferencedByConstructor()
    {
        return \$this->byConstructor;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Compiler/ServiceReferenceGraphEdge.php";
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

/**
 * Represents an edge in your service graph.
 *
 * Value is typically a reference.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ServiceReferenceGraphEdge
{
    private \$sourceNode;
    private \$destNode;
    private \$value;
    private \$lazy;
    private \$weak;
    private \$byConstructor;

    public function __construct(ServiceReferenceGraphNode \$sourceNode, ServiceReferenceGraphNode \$destNode, \$value = null, bool \$lazy = false, bool \$weak = false, bool \$byConstructor = false)
    {
        \$this->sourceNode = \$sourceNode;
        \$this->destNode = \$destNode;
        \$this->value = \$value;
        \$this->lazy = \$lazy;
        \$this->weak = \$weak;
        \$this->byConstructor = \$byConstructor;
    }

    /**
     * Returns the value of the edge.
     *
     * @return mixed
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * Returns the source node.
     *
     * @return ServiceReferenceGraphNode
     */
    public function getSourceNode()
    {
        return \$this->sourceNode;
    }

    /**
     * Returns the destination node.
     *
     * @return ServiceReferenceGraphNode
     */
    public function getDestNode()
    {
        return \$this->destNode;
    }

    /**
     * Returns true if the edge is lazy, meaning it's a dependency not requiring direct instantiation.
     *
     * @return bool
     */
    public function isLazy()
    {
        return \$this->lazy;
    }

    /**
     * Returns true if the edge is weak, meaning it shouldn't prevent removing the target service.
     *
     * @return bool
     */
    public function isWeak()
    {
        return \$this->weak;
    }

    /**
     * Returns true if the edge links with a constructor argument.
     *
     * @return bool
     */
    public function isReferencedByConstructor()
    {
        return \$this->byConstructor;
    }
}
", "@app/vendor/symfony/dependency-injection/Compiler/ServiceReferenceGraphEdge.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Compiler\\ServiceReferenceGraphEdge.php");
    }
}
