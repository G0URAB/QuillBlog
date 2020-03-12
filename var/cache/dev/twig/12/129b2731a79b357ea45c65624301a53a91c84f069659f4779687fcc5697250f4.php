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

/* @app/vendor/symfony/dependency-injection/Compiler/DefinitionErrorExceptionPass.php */
class __TwigTemplate_38f1effc7d4901005c5c6cac3d40c71760ee2aed310a3ed041481e874fd608c3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Compiler/DefinitionErrorExceptionPass.php"));

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

use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Throws an exception for any Definitions that have errors and still exist.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class DefinitionErrorExceptionPass extends AbstractRecursivePass
{
    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, bool \$isRoot = false)
    {
        if (!\$value instanceof Definition || !\$value->hasErrors()) {
            return parent::processValue(\$value, \$isRoot);
        }

        if (\$isRoot && !\$value->isPublic()) {
            \$graph = \$this->container->getCompiler()->getServiceReferenceGraph();
            \$runtimeException = false;
            foreach (\$graph->getNode(\$this->currentId)->getInEdges() as \$edge) {
                if (!\$edge->getValue() instanceof Reference || ContainerInterface::RUNTIME_EXCEPTION_ON_INVALID_REFERENCE !== \$edge->getValue()->getInvalidBehavior()) {
                    \$runtimeException = false;
                    break;
                }
                \$runtimeException = true;
            }
            if (\$runtimeException) {
                return parent::processValue(\$value, \$isRoot);
            }
        }

        // only show the first error so the user can focus on it
        \$errors = \$value->getErrors();
        \$message = reset(\$errors);

        throw new RuntimeException(\$message);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Compiler/DefinitionErrorExceptionPass.php";
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

use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Throws an exception for any Definitions that have errors and still exist.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class DefinitionErrorExceptionPass extends AbstractRecursivePass
{
    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, bool \$isRoot = false)
    {
        if (!\$value instanceof Definition || !\$value->hasErrors()) {
            return parent::processValue(\$value, \$isRoot);
        }

        if (\$isRoot && !\$value->isPublic()) {
            \$graph = \$this->container->getCompiler()->getServiceReferenceGraph();
            \$runtimeException = false;
            foreach (\$graph->getNode(\$this->currentId)->getInEdges() as \$edge) {
                if (!\$edge->getValue() instanceof Reference || ContainerInterface::RUNTIME_EXCEPTION_ON_INVALID_REFERENCE !== \$edge->getValue()->getInvalidBehavior()) {
                    \$runtimeException = false;
                    break;
                }
                \$runtimeException = true;
            }
            if (\$runtimeException) {
                return parent::processValue(\$value, \$isRoot);
            }
        }

        // only show the first error so the user can focus on it
        \$errors = \$value->getErrors();
        \$message = reset(\$errors);

        throw new RuntimeException(\$message);
    }
}
", "@app/vendor/symfony/dependency-injection/Compiler/DefinitionErrorExceptionPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Compiler\\DefinitionErrorExceptionPass.php");
    }
}
