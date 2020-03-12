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

/* @app/vendor/symfony/dependency-injection/Compiler/ResolveServiceSubscribersPass.php */
class __TwigTemplate_1495ac96d274e10f74e7e6557d6f49665cf2ed367890701b257a993aa691ba7f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/dependency-injection/Compiler/ResolveServiceSubscribersPass.php"));

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

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Contracts\\Service\\ServiceProviderInterface;

/**
 * Compiler pass to inject their service locator to service subscribers.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ResolveServiceSubscribersPass extends AbstractRecursivePass
{
    private \$serviceLocator;

    protected function processValue(\$value, bool \$isRoot = false)
    {
        if (\$value instanceof Reference && \$this->serviceLocator && \\in_array((string) \$value, [ContainerInterface::class, ServiceProviderInterface::class], true)) {
            return new Reference(\$this->serviceLocator);
        }

        if (!\$value instanceof Definition) {
            return parent::processValue(\$value, \$isRoot);
        }

        \$serviceLocator = \$this->serviceLocator;
        \$this->serviceLocator = null;

        if (\$value->hasTag('container.service_subscriber.locator')) {
            \$this->serviceLocator = \$value->getTag('container.service_subscriber.locator')[0]['id'];
            \$value->clearTag('container.service_subscriber.locator');
        }

        try {
            return parent::processValue(\$value);
        } finally {
            \$this->serviceLocator = \$serviceLocator;
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/dependency-injection/Compiler/ResolveServiceSubscribersPass.php";
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

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;
use Symfony\\Contracts\\Service\\ServiceProviderInterface;

/**
 * Compiler pass to inject their service locator to service subscribers.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ResolveServiceSubscribersPass extends AbstractRecursivePass
{
    private \$serviceLocator;

    protected function processValue(\$value, bool \$isRoot = false)
    {
        if (\$value instanceof Reference && \$this->serviceLocator && \\in_array((string) \$value, [ContainerInterface::class, ServiceProviderInterface::class], true)) {
            return new Reference(\$this->serviceLocator);
        }

        if (!\$value instanceof Definition) {
            return parent::processValue(\$value, \$isRoot);
        }

        \$serviceLocator = \$this->serviceLocator;
        \$this->serviceLocator = null;

        if (\$value->hasTag('container.service_subscriber.locator')) {
            \$this->serviceLocator = \$value->getTag('container.service_subscriber.locator')[0]['id'];
            \$value->clearTag('container.service_subscriber.locator');
        }

        try {
            return parent::processValue(\$value);
        } finally {
            \$this->serviceLocator = \$serviceLocator;
        }
    }
}
", "@app/vendor/symfony/dependency-injection/Compiler/ResolveServiceSubscribersPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\dependency-injection\\Compiler\\ResolveServiceSubscribersPass.php");
    }
}
