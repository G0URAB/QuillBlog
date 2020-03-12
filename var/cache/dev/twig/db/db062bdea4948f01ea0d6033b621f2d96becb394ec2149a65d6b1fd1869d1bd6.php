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

/* @app/vendor/symfony/http-kernel/DependencyInjection/RegisterLocaleAwareServicesPass.php */
class __TwigTemplate_f8829f788b314a9ba23bab230f4530ed3cf3df94ad8b106aa85e9a20e4ca8a20 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/http-kernel/DependencyInjection/RegisterLocaleAwareServicesPass.php"));

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

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Register all services that have the \"kernel.locale_aware\" tag into the listener.
 *
 * @author Pierre Bobiet <pierrebobiet@gmail.com>
 */
class RegisterLocaleAwareServicesPass implements CompilerPassInterface
{
    private \$listenerServiceId;
    private \$localeAwareTag;

    public function __construct(string \$listenerServiceId = 'locale_aware_listener', string \$localeAwareTag = 'kernel.locale_aware')
    {
        \$this->listenerServiceId = \$listenerServiceId;
        \$this->localeAwareTag = \$localeAwareTag;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->listenerServiceId)) {
            return;
        }

        \$services = [];

        foreach (\$container->findTaggedServiceIds(\$this->localeAwareTag) as \$id => \$tags) {
            \$services[] = new Reference(\$id);
        }

        if (!\$services) {
            \$container->removeDefinition(\$this->listenerServiceId);

            return;
        }

        \$container
            ->getDefinition(\$this->listenerServiceId)
            ->setArgument(0, new IteratorArgument(\$services))
        ;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/http-kernel/DependencyInjection/RegisterLocaleAwareServicesPass.php";
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

use Symfony\\Component\\DependencyInjection\\Argument\\IteratorArgument;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Register all services that have the \"kernel.locale_aware\" tag into the listener.
 *
 * @author Pierre Bobiet <pierrebobiet@gmail.com>
 */
class RegisterLocaleAwareServicesPass implements CompilerPassInterface
{
    private \$listenerServiceId;
    private \$localeAwareTag;

    public function __construct(string \$listenerServiceId = 'locale_aware_listener', string \$localeAwareTag = 'kernel.locale_aware')
    {
        \$this->listenerServiceId = \$listenerServiceId;
        \$this->localeAwareTag = \$localeAwareTag;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->listenerServiceId)) {
            return;
        }

        \$services = [];

        foreach (\$container->findTaggedServiceIds(\$this->localeAwareTag) as \$id => \$tags) {
            \$services[] = new Reference(\$id);
        }

        if (!\$services) {
            \$container->removeDefinition(\$this->listenerServiceId);

            return;
        }

        \$container
            ->getDefinition(\$this->listenerServiceId)
            ->setArgument(0, new IteratorArgument(\$services))
        ;
    }
}
", "@app/vendor/symfony/http-kernel/DependencyInjection/RegisterLocaleAwareServicesPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\http-kernel\\DependencyInjection\\RegisterLocaleAwareServicesPass.php");
    }
}
