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

/* @app/vendor/symfony/event-dispatcher/DependencyInjection/AddEventAliasesPass.php */
class __TwigTemplate_5ada7d584e1fb0ed9a559babc4a079c6b6c6fc9ece0b2a7c6250aef23d011fac extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/event-dispatcher/DependencyInjection/AddEventAliasesPass.php"));

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

namespace Symfony\\Component\\EventDispatcher\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * This pass allows bundles to extend the list of event aliases.
 *
 * @author Alexander M. Turek <me@derrabus.de>
 */
class AddEventAliasesPass implements CompilerPassInterface
{
    private \$eventAliases;
    private \$eventAliasesParameter;

    public function __construct(array \$eventAliases, string \$eventAliasesParameter = 'event_dispatcher.event_aliases')
    {
        \$this->eventAliases = \$eventAliases;
        \$this->eventAliasesParameter = \$eventAliasesParameter;
    }

    public function process(ContainerBuilder \$container): void
    {
        \$eventAliases = \$container->hasParameter(\$this->eventAliasesParameter) ? \$container->getParameter(\$this->eventAliasesParameter) : [];

        \$container->setParameter(
            \$this->eventAliasesParameter,
            array_merge(\$eventAliases, \$this->eventAliases)
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/event-dispatcher/DependencyInjection/AddEventAliasesPass.php";
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

namespace Symfony\\Component\\EventDispatcher\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * This pass allows bundles to extend the list of event aliases.
 *
 * @author Alexander M. Turek <me@derrabus.de>
 */
class AddEventAliasesPass implements CompilerPassInterface
{
    private \$eventAliases;
    private \$eventAliasesParameter;

    public function __construct(array \$eventAliases, string \$eventAliasesParameter = 'event_dispatcher.event_aliases')
    {
        \$this->eventAliases = \$eventAliases;
        \$this->eventAliasesParameter = \$eventAliasesParameter;
    }

    public function process(ContainerBuilder \$container): void
    {
        \$eventAliases = \$container->hasParameter(\$this->eventAliasesParameter) ? \$container->getParameter(\$this->eventAliasesParameter) : [];

        \$container->setParameter(
            \$this->eventAliasesParameter,
            array_merge(\$eventAliases, \$this->eventAliases)
        );
    }
}
", "@app/vendor/symfony/event-dispatcher/DependencyInjection/AddEventAliasesPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\event-dispatcher\\DependencyInjection\\AddEventAliasesPass.php");
    }
}
