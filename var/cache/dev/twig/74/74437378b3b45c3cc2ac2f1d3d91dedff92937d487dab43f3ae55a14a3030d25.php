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

/* @app/vendor/symfony/dependency-injection/Compiler/RegisterReverseContainerPass.php */
class __TwigTemplate_aecccf867e2c1da0af840d41d4a83c658c2ac814bc0bd538bf264b20f2c74079 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Compiler/RegisterReverseContainerPass.php"));

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

use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RegisterReverseContainerPass implements CompilerPassInterface
{
    private \$beforeRemoving;
    private \$serviceId;
    private \$tagName;

    public function __construct(bool \$beforeRemoving, string \$serviceId = 'reverse_container', string \$tagName = 'container.reversible')
    {
        \$this->beforeRemoving = \$beforeRemoving;
        \$this->serviceId = \$serviceId;
        \$this->tagName = \$tagName;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->serviceId)) {
            return;
        }

        \$refType = \$this->beforeRemoving ? ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE : ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE;
        \$services = [];
        foreach (\$container->findTaggedServiceIds(\$this->tagName) as \$id => \$tags) {
            \$services[\$id] = new Reference(\$id, \$refType);
        }

        if (\$this->beforeRemoving) {
            // prevent inlining of the reverse container
            \$services[\$this->serviceId] = new Reference(\$this->serviceId, \$refType);
        }
        \$locator = \$container->getDefinition(\$this->serviceId)->getArgument(1);

        if (\$locator instanceof Reference) {
            \$locator = \$container->getDefinition((string) \$locator);
        }
        if (\$locator instanceof Definition) {
            foreach (\$services as \$id => \$ref) {
                \$services[\$id] = new ServiceClosureArgument(\$ref);
            }
            \$locator->replaceArgument(0, \$services);
        } else {
            \$locator->setValues(\$services);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Compiler/RegisterReverseContainerPass.php";
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

use Symfony\\Component\\DependencyInjection\\Argument\\ServiceClosureArgument;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RegisterReverseContainerPass implements CompilerPassInterface
{
    private \$beforeRemoving;
    private \$serviceId;
    private \$tagName;

    public function __construct(bool \$beforeRemoving, string \$serviceId = 'reverse_container', string \$tagName = 'container.reversible')
    {
        \$this->beforeRemoving = \$beforeRemoving;
        \$this->serviceId = \$serviceId;
        \$this->tagName = \$tagName;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->serviceId)) {
            return;
        }

        \$refType = \$this->beforeRemoving ? ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE : ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE;
        \$services = [];
        foreach (\$container->findTaggedServiceIds(\$this->tagName) as \$id => \$tags) {
            \$services[\$id] = new Reference(\$id, \$refType);
        }

        if (\$this->beforeRemoving) {
            // prevent inlining of the reverse container
            \$services[\$this->serviceId] = new Reference(\$this->serviceId, \$refType);
        }
        \$locator = \$container->getDefinition(\$this->serviceId)->getArgument(1);

        if (\$locator instanceof Reference) {
            \$locator = \$container->getDefinition((string) \$locator);
        }
        if (\$locator instanceof Definition) {
            foreach (\$services as \$id => \$ref) {
                \$services[\$id] = new ServiceClosureArgument(\$ref);
            }
            \$locator->replaceArgument(0, \$services);
        } else {
            \$locator->setValues(\$services);
        }
    }
}
", "@app/vendor/symfony/dependency-injection/Compiler/RegisterReverseContainerPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Compiler\\RegisterReverseContainerPass.php");
    }
}
