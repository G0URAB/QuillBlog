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

/* @app/vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/WellKnownSchemaFilterPass.php */
class __TwigTemplate_1376961f7c6cdbdef5ac72ec3dfc5b58fc006b7671af01747611c79e71605de8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/WellKnownSchemaFilterPass.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\Cache\\Adapter\\PdoAdapter;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\PdoSessionHandler;
use Symfony\\Component\\Lock\\Store\\PdoStore;
use Symfony\\Component\\Messenger\\Transport\\Doctrine\\Connection;

/**
 * Blacklist tables used by well-known Symfony classes.
 */
class WellKnownSchemaFilterPass implements CompilerPassInterface
{
    /**
     * {@inheritDoc}
     */
    public function process(ContainerBuilder \$container)
    {
        \$blacklist = [];

        foreach (\$container->getDefinitions() as \$definition) {
            if (\$definition->isAbstract() || \$definition->isSynthetic()) {
                continue;
            }

            switch (\$definition->getClass()) {
                case PdoAdapter::class:
                    \$blacklist[] = \$definition->getArguments()[3]['db_table'] ?? 'cache_items';
                    break;

                case PdoSessionHandler::class:
                    \$blacklist[] = \$definition->getArguments()[1]['db_table'] ?? 'sessions';
                    break;

                case PdoStore::class:
                    \$blacklist[] = \$definition->getArguments()[1]['db_table'] ?? 'lock_keys';
                    break;

                case Connection::class:
                    \$blacklist[] = \$definition->getArguments()[0]['table_name'] ?? 'messenger_messages';
                    break;
            }
        }

        if (! \$blacklist) {
            return;
        }

        \$definition = \$container->getDefinition('doctrine.dbal.well_known_schema_asset_filter');
        \$definition->replaceArgument(0, \$blacklist);

        foreach (array_keys(\$container->getParameter('doctrine.connections')) as \$name) {
            \$definition->addTag('doctrine.dbal.schema_filter', ['connection' => \$name]);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/WellKnownSchemaFilterPass.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\Cache\\Adapter\\PdoAdapter;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\PdoSessionHandler;
use Symfony\\Component\\Lock\\Store\\PdoStore;
use Symfony\\Component\\Messenger\\Transport\\Doctrine\\Connection;

/**
 * Blacklist tables used by well-known Symfony classes.
 */
class WellKnownSchemaFilterPass implements CompilerPassInterface
{
    /**
     * {@inheritDoc}
     */
    public function process(ContainerBuilder \$container)
    {
        \$blacklist = [];

        foreach (\$container->getDefinitions() as \$definition) {
            if (\$definition->isAbstract() || \$definition->isSynthetic()) {
                continue;
            }

            switch (\$definition->getClass()) {
                case PdoAdapter::class:
                    \$blacklist[] = \$definition->getArguments()[3]['db_table'] ?? 'cache_items';
                    break;

                case PdoSessionHandler::class:
                    \$blacklist[] = \$definition->getArguments()[1]['db_table'] ?? 'sessions';
                    break;

                case PdoStore::class:
                    \$blacklist[] = \$definition->getArguments()[1]['db_table'] ?? 'lock_keys';
                    break;

                case Connection::class:
                    \$blacklist[] = \$definition->getArguments()[0]['table_name'] ?? 'messenger_messages';
                    break;
            }
        }

        if (! \$blacklist) {
            return;
        }

        \$definition = \$container->getDefinition('doctrine.dbal.well_known_schema_asset_filter');
        \$definition->replaceArgument(0, \$blacklist);

        foreach (array_keys(\$container->getParameter('doctrine.connections')) as \$name) {
            \$definition->addTag('doctrine.dbal.schema_filter', ['connection' => \$name]);
        }
    }
}
", "@app/vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/WellKnownSchemaFilterPass.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\DependencyInjection\\Compiler\\WellKnownSchemaFilterPass.php");
    }
}
