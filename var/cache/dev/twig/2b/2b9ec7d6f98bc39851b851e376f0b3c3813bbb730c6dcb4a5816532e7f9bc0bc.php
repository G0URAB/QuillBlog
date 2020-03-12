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

/* @app/vendor/symfony/http-kernel/DependencyInjection/RemoveEmptyControllerArgumentLocatorsPass.php */
class __TwigTemplate_84e1528e4b78372cba85c6ea011154af5a3dbec438cf668bad7300bdd0be206d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/DependencyInjection/RemoveEmptyControllerArgumentLocatorsPass.php"));

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

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Removes empty service-locators registered for ServiceValueResolver.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RemoveEmptyControllerArgumentLocatorsPass implements CompilerPassInterface
{
    private \$controllerLocator;

    public function __construct(string \$controllerLocator = 'argument_resolver.controller_locator')
    {
        \$this->controllerLocator = \$controllerLocator;
    }

    public function process(ContainerBuilder \$container)
    {
        \$controllerLocator = \$container->findDefinition(\$this->controllerLocator);
        \$controllers = \$controllerLocator->getArgument(0);

        foreach (\$controllers as \$controller => \$argumentRef) {
            \$argumentLocator = \$container->getDefinition((string) \$argumentRef->getValues()[0]);

            if (!\$argumentLocator->getArgument(0)) {
                // remove empty argument locators
                \$reason = sprintf('Removing service-argument resolver for controller \"%s\": no corresponding services exist for the referenced types.', \$controller);
            } else {
                // any methods listed for call-at-instantiation cannot be actions
                \$reason = false;
                list(\$id, \$action) = explode('::', \$controller);
                \$controllerDef = \$container->getDefinition(\$id);
                foreach (\$controllerDef->getMethodCalls() as list(\$method)) {
                    if (0 === strcasecmp(\$action, \$method)) {
                        \$reason = sprintf('Removing method \"%s\" of service \"%s\" from controller candidates: the method is called at instantiation, thus cannot be an action.', \$action, \$id);
                        break;
                    }
                }
                if (!\$reason) {
                    if ('__invoke' === \$action) {
                        \$controllers[\$id] = \$argumentRef;
                    }
                    continue;
                }
            }

            unset(\$controllers[\$controller]);
            \$container->log(\$this, \$reason);
        }

        \$controllerLocator->replaceArgument(0, \$controllers);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/DependencyInjection/RemoveEmptyControllerArgumentLocatorsPass.php";
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

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Removes empty service-locators registered for ServiceValueResolver.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RemoveEmptyControllerArgumentLocatorsPass implements CompilerPassInterface
{
    private \$controllerLocator;

    public function __construct(string \$controllerLocator = 'argument_resolver.controller_locator')
    {
        \$this->controllerLocator = \$controllerLocator;
    }

    public function process(ContainerBuilder \$container)
    {
        \$controllerLocator = \$container->findDefinition(\$this->controllerLocator);
        \$controllers = \$controllerLocator->getArgument(0);

        foreach (\$controllers as \$controller => \$argumentRef) {
            \$argumentLocator = \$container->getDefinition((string) \$argumentRef->getValues()[0]);

            if (!\$argumentLocator->getArgument(0)) {
                // remove empty argument locators
                \$reason = sprintf('Removing service-argument resolver for controller \"%s\": no corresponding services exist for the referenced types.', \$controller);
            } else {
                // any methods listed for call-at-instantiation cannot be actions
                \$reason = false;
                list(\$id, \$action) = explode('::', \$controller);
                \$controllerDef = \$container->getDefinition(\$id);
                foreach (\$controllerDef->getMethodCalls() as list(\$method)) {
                    if (0 === strcasecmp(\$action, \$method)) {
                        \$reason = sprintf('Removing method \"%s\" of service \"%s\" from controller candidates: the method is called at instantiation, thus cannot be an action.', \$action, \$id);
                        break;
                    }
                }
                if (!\$reason) {
                    if ('__invoke' === \$action) {
                        \$controllers[\$id] = \$argumentRef;
                    }
                    continue;
                }
            }

            unset(\$controllers[\$controller]);
            \$container->log(\$this, \$reason);
        }

        \$controllerLocator->replaceArgument(0, \$controllers);
    }
}
", "@app/vendor/symfony/http-kernel/DependencyInjection/RemoveEmptyControllerArgumentLocatorsPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\DependencyInjection\\RemoveEmptyControllerArgumentLocatorsPass.php");
    }
}
