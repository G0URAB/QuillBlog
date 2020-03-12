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

/* @app/vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddDebugLogProcessorPass.php */
class __TwigTemplate_60b0f3009bd0b765e92955e460ab9a2b8303f131c442c0d120b7eb61edade5c8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddDebugLogProcessorPass.php"));

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
use Symfony\\Component\\DependencyInjection\\Reference;

class AddDebugLogProcessorPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition('profiler')) {
            return;
        }
        if (!\$container->hasDefinition('monolog.logger_prototype')) {
            return;
        }
        if (!\$container->hasDefinition('debug.log_processor')) {
            return;
        }

        \$definition = \$container->getDefinition('monolog.logger_prototype');
        \$definition->setConfigurator([__CLASS__, 'configureLogger']);
        \$definition->addMethodCall('pushProcessor', [new Reference('debug.log_processor')]);
    }

    public static function configureLogger(\$logger)
    {
        if (method_exists(\$logger, 'removeDebugLogger') && \\in_array(\\PHP_SAPI, ['cli', 'phpdbg'], true)) {
            \$logger->removeDebugLogger();
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddDebugLogProcessorPass.php";
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
use Symfony\\Component\\DependencyInjection\\Reference;

class AddDebugLogProcessorPass implements CompilerPassInterface
{
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition('profiler')) {
            return;
        }
        if (!\$container->hasDefinition('monolog.logger_prototype')) {
            return;
        }
        if (!\$container->hasDefinition('debug.log_processor')) {
            return;
        }

        \$definition = \$container->getDefinition('monolog.logger_prototype');
        \$definition->setConfigurator([__CLASS__, 'configureLogger']);
        \$definition->addMethodCall('pushProcessor', [new Reference('debug.log_processor')]);
    }

    public static function configureLogger(\$logger)
    {
        if (method_exists(\$logger, 'removeDebugLogger') && \\in_array(\\PHP_SAPI, ['cli', 'phpdbg'], true)) {
            \$logger->removeDebugLogger();
        }
    }
}
", "@app/vendor/symfony/framework-bundle/DependencyInjection/Compiler/AddDebugLogProcessorPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\framework-bundle\\DependencyInjection\\Compiler\\AddDebugLogProcessorPass.php");
    }
}
