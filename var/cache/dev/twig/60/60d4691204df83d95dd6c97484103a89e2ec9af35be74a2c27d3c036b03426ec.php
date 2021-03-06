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

/* @app/vendor/doctrine/doctrine-migrations-bundle/DependencyInjection/Configuration.php */
class __TwigTemplate_56f1a58e6786b6b6ba190a5a17f215fe2e070c98bd4672d688f79e3ce3b58e16 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-migrations-bundle/DependencyInjection/Configuration.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\MigrationsBundle\\DependencyInjection;

use ReflectionClass;
use Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder;
use Symfony\\Component\\Config\\Definition\\ConfigurationInterface;
use function constant;
use function in_array;
use function is_string;
use function method_exists;
use function strlen;
use function strpos;
use function strtoupper;
use function substr;

/**
 * DoctrineMigrationsExtension configuration structure.
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree.
     *
     * @return TreeBuilder The config tree builder
     */
    public function getConfigTreeBuilder() : TreeBuilder
    {
        \$treeBuilder = new TreeBuilder('doctrine_migrations');

        if (method_exists(\$treeBuilder, 'getRootNode')) {
            \$rootNode = \$treeBuilder->getRootNode();
        } else {
            // BC layer for symfony/config 4.1 and older
            \$rootNode = \$treeBuilder->root('doctrine_migrations', 'array');
        }

        \$organizeMigrationModes = \$this->getOrganizeMigrationsModes();

        \$rootNode
            ->children()
                ->scalarNode('dir_name')->defaultValue('%kernel.root_dir%/DoctrineMigrations')->cannotBeEmpty()->end()
                ->scalarNode('namespace')->defaultValue('Application\\Migrations')->cannotBeEmpty()->end()
                ->scalarNode('table_name')->defaultValue('migration_versions')->cannotBeEmpty()->end()
                ->scalarNode('column_name')->defaultValue('version')->end()
                ->scalarNode('column_length')->defaultValue(14)->end()
                ->scalarNode('executed_at_column_name')->defaultValue('executed_at')->end()
                ->scalarNode('all_or_nothing')->defaultValue(false)->end()
                ->scalarNode('name')->defaultValue('Application Migrations')->end()
                ->scalarNode('custom_template')->defaultValue(null)->end()
                ->scalarNode('organize_migrations')->defaultValue(false)
                    ->info('Organize migrations mode. Possible values are: \"BY_YEAR\", \"BY_YEAR_AND_MONTH\", false')
                    ->validate()
                        ->ifTrue(static function (\$v) use (\$organizeMigrationModes) {
                            if (\$v === false) {
                                return false;
                            }

                            if (is_string(\$v) && in_array(strtoupper(\$v), \$organizeMigrationModes)) {
                                return false;
                            }

                            return true;
                        })
                        ->thenInvalid('Invalid organize migrations mode value %s')
                    ->end()
                    ->validate()
                        ->ifString()
                            ->then(static function (\$v) {
                                return constant('Doctrine\\Migrations\\Configuration\\Configuration::VERSIONS_ORGANIZATION_' . strtoupper(\$v));
                            })
                    ->end()
                ->end()
            ->end();

        return \$treeBuilder;
    }


    /**
     * Find organize migrations modes for their names
     *
     * @return string[]
     */
    private function getOrganizeMigrationsModes() : array
    {
        \$constPrefix = 'VERSIONS_ORGANIZATION_';
        \$prefixLen   = strlen(\$constPrefix);
        \$refClass    = new ReflectionClass('Doctrine\\Migrations\\Configuration\\Configuration');
        \$constsArray = \$refClass->getConstants();
        \$namesArray  = [];

        foreach (\$constsArray as \$key => \$value) {
            if (strpos(\$key, \$constPrefix) !== 0) {
                continue;
            }

            \$namesArray[] = substr(\$key, \$prefixLen);
        }

        return \$namesArray;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-migrations-bundle/DependencyInjection/Configuration.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Bundle\\MigrationsBundle\\DependencyInjection;

use ReflectionClass;
use Symfony\\Component\\Config\\Definition\\Builder\\TreeBuilder;
use Symfony\\Component\\Config\\Definition\\ConfigurationInterface;
use function constant;
use function in_array;
use function is_string;
use function method_exists;
use function strlen;
use function strpos;
use function strtoupper;
use function substr;

/**
 * DoctrineMigrationsExtension configuration structure.
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree.
     *
     * @return TreeBuilder The config tree builder
     */
    public function getConfigTreeBuilder() : TreeBuilder
    {
        \$treeBuilder = new TreeBuilder('doctrine_migrations');

        if (method_exists(\$treeBuilder, 'getRootNode')) {
            \$rootNode = \$treeBuilder->getRootNode();
        } else {
            // BC layer for symfony/config 4.1 and older
            \$rootNode = \$treeBuilder->root('doctrine_migrations', 'array');
        }

        \$organizeMigrationModes = \$this->getOrganizeMigrationsModes();

        \$rootNode
            ->children()
                ->scalarNode('dir_name')->defaultValue('%kernel.root_dir%/DoctrineMigrations')->cannotBeEmpty()->end()
                ->scalarNode('namespace')->defaultValue('Application\\Migrations')->cannotBeEmpty()->end()
                ->scalarNode('table_name')->defaultValue('migration_versions')->cannotBeEmpty()->end()
                ->scalarNode('column_name')->defaultValue('version')->end()
                ->scalarNode('column_length')->defaultValue(14)->end()
                ->scalarNode('executed_at_column_name')->defaultValue('executed_at')->end()
                ->scalarNode('all_or_nothing')->defaultValue(false)->end()
                ->scalarNode('name')->defaultValue('Application Migrations')->end()
                ->scalarNode('custom_template')->defaultValue(null)->end()
                ->scalarNode('organize_migrations')->defaultValue(false)
                    ->info('Organize migrations mode. Possible values are: \"BY_YEAR\", \"BY_YEAR_AND_MONTH\", false')
                    ->validate()
                        ->ifTrue(static function (\$v) use (\$organizeMigrationModes) {
                            if (\$v === false) {
                                return false;
                            }

                            if (is_string(\$v) && in_array(strtoupper(\$v), \$organizeMigrationModes)) {
                                return false;
                            }

                            return true;
                        })
                        ->thenInvalid('Invalid organize migrations mode value %s')
                    ->end()
                    ->validate()
                        ->ifString()
                            ->then(static function (\$v) {
                                return constant('Doctrine\\Migrations\\Configuration\\Configuration::VERSIONS_ORGANIZATION_' . strtoupper(\$v));
                            })
                    ->end()
                ->end()
            ->end();

        return \$treeBuilder;
    }


    /**
     * Find organize migrations modes for their names
     *
     * @return string[]
     */
    private function getOrganizeMigrationsModes() : array
    {
        \$constPrefix = 'VERSIONS_ORGANIZATION_';
        \$prefixLen   = strlen(\$constPrefix);
        \$refClass    = new ReflectionClass('Doctrine\\Migrations\\Configuration\\Configuration');
        \$constsArray = \$refClass->getConstants();
        \$namesArray  = [];

        foreach (\$constsArray as \$key => \$value) {
            if (strpos(\$key, \$constPrefix) !== 0) {
                continue;
            }

            \$namesArray[] = substr(\$key, \$prefixLen);
        }

        return \$namesArray;
    }
}
", "@app/vendor/doctrine/doctrine-migrations-bundle/DependencyInjection/Configuration.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-migrations-bundle\\DependencyInjection\\Configuration.php");
    }
}
