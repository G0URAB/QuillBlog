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

/* @app/vendor/symfony/dependency-injection/Compiler/CheckCircularReferencesPass.php */
class __TwigTemplate_84f45e8ff5079911f66b104ffc1ee0c00c6f8f3f5e4ce3a7acbf818fc1d95828 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Compiler/CheckCircularReferencesPass.php"));

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

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException;

/**
 * Checks your services for circular references.
 *
 * References from method calls are ignored since we might be able to resolve
 * these references depending on the order in which services are called.
 *
 * Circular reference from method calls will only be detected at run-time.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class CheckCircularReferencesPass implements CompilerPassInterface
{
    private \$currentPath;
    private \$checkedNodes;

    /**
     * Checks the ContainerBuilder object for circular references.
     */
    public function process(ContainerBuilder \$container)
    {
        \$graph = \$container->getCompiler()->getServiceReferenceGraph();

        \$this->checkedNodes = [];
        foreach (\$graph->getNodes() as \$id => \$node) {
            \$this->currentPath = [\$id];

            \$this->checkOutEdges(\$node->getOutEdges());
        }
    }

    /**
     * Checks for circular references.
     *
     * @param ServiceReferenceGraphEdge[] \$edges An array of Edges
     *
     * @throws ServiceCircularReferenceException when a circular reference is found
     */
    private function checkOutEdges(array \$edges)
    {
        foreach (\$edges as \$edge) {
            \$node = \$edge->getDestNode();
            \$id = \$node->getId();

            if (empty(\$this->checkedNodes[\$id])) {
                // Don't check circular references for lazy edges
                if (!\$node->getValue() || (!\$edge->isLazy() && !\$edge->isWeak())) {
                    \$searchKey = array_search(\$id, \$this->currentPath);
                    \$this->currentPath[] = \$id;

                    if (false !== \$searchKey) {
                        throw new ServiceCircularReferenceException(\$id, \\array_slice(\$this->currentPath, \$searchKey));
                    }

                    \$this->checkOutEdges(\$node->getOutEdges());
                }

                \$this->checkedNodes[\$id] = true;
                array_pop(\$this->currentPath);
            }
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Compiler/CheckCircularReferencesPass.php";
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

use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException;

/**
 * Checks your services for circular references.
 *
 * References from method calls are ignored since we might be able to resolve
 * these references depending on the order in which services are called.
 *
 * Circular reference from method calls will only be detected at run-time.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class CheckCircularReferencesPass implements CompilerPassInterface
{
    private \$currentPath;
    private \$checkedNodes;

    /**
     * Checks the ContainerBuilder object for circular references.
     */
    public function process(ContainerBuilder \$container)
    {
        \$graph = \$container->getCompiler()->getServiceReferenceGraph();

        \$this->checkedNodes = [];
        foreach (\$graph->getNodes() as \$id => \$node) {
            \$this->currentPath = [\$id];

            \$this->checkOutEdges(\$node->getOutEdges());
        }
    }

    /**
     * Checks for circular references.
     *
     * @param ServiceReferenceGraphEdge[] \$edges An array of Edges
     *
     * @throws ServiceCircularReferenceException when a circular reference is found
     */
    private function checkOutEdges(array \$edges)
    {
        foreach (\$edges as \$edge) {
            \$node = \$edge->getDestNode();
            \$id = \$node->getId();

            if (empty(\$this->checkedNodes[\$id])) {
                // Don't check circular references for lazy edges
                if (!\$node->getValue() || (!\$edge->isLazy() && !\$edge->isWeak())) {
                    \$searchKey = array_search(\$id, \$this->currentPath);
                    \$this->currentPath[] = \$id;

                    if (false !== \$searchKey) {
                        throw new ServiceCircularReferenceException(\$id, \\array_slice(\$this->currentPath, \$searchKey));
                    }

                    \$this->checkOutEdges(\$node->getOutEdges());
                }

                \$this->checkedNodes[\$id] = true;
                array_pop(\$this->currentPath);
            }
        }
    }
}
", "@app/vendor/symfony/dependency-injection/Compiler/CheckCircularReferencesPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Compiler\\CheckCircularReferencesPass.php");
    }
}
