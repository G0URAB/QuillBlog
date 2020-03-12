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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/LazySchemaDiffProvider.php */
class __TwigTemplate_86ec52c3e5638189d9835bd233054a4f74514ab2d4a9188b6f482c9ba5037f79 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/LazySchemaDiffProvider.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Provider;

use Doctrine\\DBAL\\Schema\\Schema;
use ProxyManager\\Configuration;
use ProxyManager\\Factory\\LazyLoadingValueHolderFactory;
use ProxyManager\\GeneratorStrategy\\EvaluatingGeneratorStrategy;
use ProxyManager\\Proxy\\LazyLoadingInterface;

/**
 * The LazySchemaDiffProvider is responsible for lazily generating the from schema when diffing two schemas
 * to produce a migration.
 *
 * @internal
 */
class LazySchemaDiffProvider implements SchemaDiffProviderInterface
{
    /** @var LazyLoadingValueHolderFactory */
    private \$proxyFactory;

    /** @var SchemaDiffProviderInterface */
    private \$originalSchemaManipulator;

    public function __construct(
        LazyLoadingValueHolderFactory \$proxyFactory,
        SchemaDiffProviderInterface \$originalSchemaManipulator
    ) {
        \$this->proxyFactory              = \$proxyFactory;
        \$this->originalSchemaManipulator = \$originalSchemaManipulator;
    }

    public static function fromDefaultProxyFactoryConfiguration(
        SchemaDiffProviderInterface \$originalSchemaManipulator
    ) : LazySchemaDiffProvider {
        \$proxyConfig = new Configuration();
        \$proxyConfig->setGeneratorStrategy(new EvaluatingGeneratorStrategy());
        \$proxyFactory = new LazyLoadingValueHolderFactory(\$proxyConfig);

        return new LazySchemaDiffProvider(\$proxyFactory, \$originalSchemaManipulator);
    }

    public function createFromSchema() : Schema
    {
        \$originalSchemaManipulator = \$this->originalSchemaManipulator;

        return \$this->proxyFactory->createProxy(
            Schema::class,
            static function (&\$wrappedObject, \$proxy, \$method, array \$parameters, &\$initializer) use (\$originalSchemaManipulator) {
                \$initializer = null;

                \$wrappedObject = \$originalSchemaManipulator->createFromSchema();

                return true;
            }
        );
    }

    public function createToSchema(Schema \$fromSchema) : Schema
    {
        \$originalSchemaManipulator = \$this->originalSchemaManipulator;

        if (\$fromSchema instanceof LazyLoadingInterface && ! \$fromSchema->isProxyInitialized()) {
            return \$this->proxyFactory->createProxy(
                Schema::class,
                static function (&\$wrappedObject, \$proxy, \$method, array \$parameters, &\$initializer) use (\$originalSchemaManipulator, \$fromSchema) {
                    \$initializer = null;

                    \$wrappedObject = \$originalSchemaManipulator->createToSchema(\$fromSchema);

                    return true;
                }
            );
        }

        return \$this->originalSchemaManipulator->createToSchema(\$fromSchema);
    }

    /** @return string[] */
    public function getSqlDiffToMigrate(Schema \$fromSchema, Schema \$toSchema) : array
    {
        if (\$toSchema instanceof LazyLoadingInterface
            && ! \$toSchema->isProxyInitialized()) {
            return [];
        }

        return \$this->originalSchemaManipulator->getSqlDiffToMigrate(\$fromSchema, \$toSchema);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/LazySchemaDiffProvider.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Provider;

use Doctrine\\DBAL\\Schema\\Schema;
use ProxyManager\\Configuration;
use ProxyManager\\Factory\\LazyLoadingValueHolderFactory;
use ProxyManager\\GeneratorStrategy\\EvaluatingGeneratorStrategy;
use ProxyManager\\Proxy\\LazyLoadingInterface;

/**
 * The LazySchemaDiffProvider is responsible for lazily generating the from schema when diffing two schemas
 * to produce a migration.
 *
 * @internal
 */
class LazySchemaDiffProvider implements SchemaDiffProviderInterface
{
    /** @var LazyLoadingValueHolderFactory */
    private \$proxyFactory;

    /** @var SchemaDiffProviderInterface */
    private \$originalSchemaManipulator;

    public function __construct(
        LazyLoadingValueHolderFactory \$proxyFactory,
        SchemaDiffProviderInterface \$originalSchemaManipulator
    ) {
        \$this->proxyFactory              = \$proxyFactory;
        \$this->originalSchemaManipulator = \$originalSchemaManipulator;
    }

    public static function fromDefaultProxyFactoryConfiguration(
        SchemaDiffProviderInterface \$originalSchemaManipulator
    ) : LazySchemaDiffProvider {
        \$proxyConfig = new Configuration();
        \$proxyConfig->setGeneratorStrategy(new EvaluatingGeneratorStrategy());
        \$proxyFactory = new LazyLoadingValueHolderFactory(\$proxyConfig);

        return new LazySchemaDiffProvider(\$proxyFactory, \$originalSchemaManipulator);
    }

    public function createFromSchema() : Schema
    {
        \$originalSchemaManipulator = \$this->originalSchemaManipulator;

        return \$this->proxyFactory->createProxy(
            Schema::class,
            static function (&\$wrappedObject, \$proxy, \$method, array \$parameters, &\$initializer) use (\$originalSchemaManipulator) {
                \$initializer = null;

                \$wrappedObject = \$originalSchemaManipulator->createFromSchema();

                return true;
            }
        );
    }

    public function createToSchema(Schema \$fromSchema) : Schema
    {
        \$originalSchemaManipulator = \$this->originalSchemaManipulator;

        if (\$fromSchema instanceof LazyLoadingInterface && ! \$fromSchema->isProxyInitialized()) {
            return \$this->proxyFactory->createProxy(
                Schema::class,
                static function (&\$wrappedObject, \$proxy, \$method, array \$parameters, &\$initializer) use (\$originalSchemaManipulator, \$fromSchema) {
                    \$initializer = null;

                    \$wrappedObject = \$originalSchemaManipulator->createToSchema(\$fromSchema);

                    return true;
                }
            );
        }

        return \$this->originalSchemaManipulator->createToSchema(\$fromSchema);
    }

    /** @return string[] */
    public function getSqlDiffToMigrate(Schema \$fromSchema, Schema \$toSchema) : array
    {
        if (\$toSchema instanceof LazyLoadingInterface
            && ! \$toSchema->isProxyInitialized()) {
            return [];
        }

        return \$this->originalSchemaManipulator->getSqlDiffToMigrate(\$fromSchema, \$toSchema);
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/LazySchemaDiffProvider.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Provider\\LazySchemaDiffProvider.php");
    }
}
