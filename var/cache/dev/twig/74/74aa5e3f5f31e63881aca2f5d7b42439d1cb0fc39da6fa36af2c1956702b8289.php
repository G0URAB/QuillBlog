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

/* @app/vendor/symfony/framework-bundle/DependencyInjection/Compiler/ProfilerPass.php */
class __TwigTemplate_1fa799a45611c4de6ba90bb75adfb970e09fa00408dfd740ddb4bd393b3b5aac extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/DependencyInjection/Compiler/ProfilerPass.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Adds tagged data_collector services to profiler service.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ProfilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (false === \$container->hasDefinition('profiler')) {
            return;
        }

        \$definition = \$container->getDefinition('profiler');

        \$collectors = new \\SplPriorityQueue();
        \$order = PHP_INT_MAX;
        foreach (\$container->findTaggedServiceIds('data_collector', true) as \$id => \$attributes) {
            \$priority = isset(\$attributes[0]['priority']) ? \$attributes[0]['priority'] : 0;
            \$template = null;

            if (isset(\$attributes[0]['template'])) {
                if (!isset(\$attributes[0]['id'])) {
                    throw new InvalidArgumentException(sprintf('Data collector service \"%s\" must have an id attribute in order to specify a template', \$id));
                }
                \$template = [\$attributes[0]['id'], \$attributes[0]['template']];
            }

            \$collectors->insert([\$id, \$template], [\$priority, --\$order]);
        }

        \$templates = [];
        foreach (\$collectors as \$collector) {
            \$definition->addMethodCall('add', [new Reference(\$collector[0])]);
            \$templates[\$collector[0]] = \$collector[1];
        }

        \$container->setParameter('data_collector.templates', \$templates);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/DependencyInjection/Compiler/ProfilerPass.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Adds tagged data_collector services to profiler service.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ProfilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (false === \$container->hasDefinition('profiler')) {
            return;
        }

        \$definition = \$container->getDefinition('profiler');

        \$collectors = new \\SplPriorityQueue();
        \$order = PHP_INT_MAX;
        foreach (\$container->findTaggedServiceIds('data_collector', true) as \$id => \$attributes) {
            \$priority = isset(\$attributes[0]['priority']) ? \$attributes[0]['priority'] : 0;
            \$template = null;

            if (isset(\$attributes[0]['template'])) {
                if (!isset(\$attributes[0]['id'])) {
                    throw new InvalidArgumentException(sprintf('Data collector service \"%s\" must have an id attribute in order to specify a template', \$id));
                }
                \$template = [\$attributes[0]['id'], \$attributes[0]['template']];
            }

            \$collectors->insert([\$id, \$template], [\$priority, --\$order]);
        }

        \$templates = [];
        foreach (\$collectors as \$collector) {
            \$definition->addMethodCall('add', [new Reference(\$collector[0])]);
            \$templates[\$collector[0]] = \$collector[1];
        }

        \$container->setParameter('data_collector.templates', \$templates);
    }
}
", "@app/vendor/symfony/framework-bundle/DependencyInjection/Compiler/ProfilerPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\DependencyInjection\\Compiler\\ProfilerPass.php");
    }
}
