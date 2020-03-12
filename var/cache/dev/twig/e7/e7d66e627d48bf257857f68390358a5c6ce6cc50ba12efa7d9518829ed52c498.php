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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/ConfigurationHelper.php */
class __TwigTemplate_1d2a28524c3747efe1082d54ed97296628d2ad34bc7b816168870972121bd89b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/ConfigurationHelper.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Helper;

use Doctrine\\DBAL\\Connection;
use Doctrine\\Migrations\\Configuration\\ArrayConfiguration;
use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Configuration\\JsonConfiguration;
use Doctrine\\Migrations\\Configuration\\XmlConfiguration;
use Doctrine\\Migrations\\Configuration\\YamlConfiguration;
use Doctrine\\Migrations\\Tools\\Console\\Exception\\FileTypeNotSupported;
use Symfony\\Component\\Console\\Helper\\Helper;
use Symfony\\Component\\Console\\Input\\InputInterface;
use function file_exists;
use function pathinfo;

/**
 * The ConfigurationHelper class is responsible for getting the Configuration instance from one of the supported methods
 * for defining the configuration for your migrations.
 */
class ConfigurationHelper extends Helper implements ConfigurationHelperInterface
{
    /** @var Connection */
    private \$connection;

    /** @var Configuration|null */
    private \$configuration;

    public function __construct(
        Connection \$connection,
        ?Configuration \$configuration = null
    ) {
        \$this->connection    = \$connection;
        \$this->configuration = \$configuration;
    }

    public function getMigrationConfig(InputInterface \$input) : Configuration
    {
        /**
         * If a configuration option is passed to the command line, use that configuration
         * instead of any other one.
         */
        \$configuration = \$input->getOption('configuration');

        if (\$configuration !== null) {
            return \$this->loadConfig(\$configuration);
        }

        /**
         * If a configuration has already been set using DI or a Setter use it.
         */
        if (\$this->configuration !== null) {
            return \$this->configuration;
        }

        /**
         * If no any other config has been found, look for default config file in the path.
         */
        \$defaultConfig = [
            'migrations.xml',
            'migrations.yml',
            'migrations.yaml',
            'migrations.json',
            'migrations.php',
        ];

        foreach (\$defaultConfig as \$config) {
            if (\$this->configExists(\$config)) {
                return \$this->loadConfig(\$config);
            }
        }

        return new Configuration(\$this->connection);
    }

    private function configExists(string \$config) : bool
    {
        return file_exists(\$config);
    }

    /**
     * @throws FileTypeNotSupported
     */
    private function loadConfig(string \$config) : Configuration
    {
        \$map = [
            'xml'   => XmlConfiguration::class,
            'yaml'  => YamlConfiguration::class,
            'yml'   => YamlConfiguration::class,
            'php'   => ArrayConfiguration::class,
            'json'  => JsonConfiguration::class,
        ];

        \$info = pathinfo(\$config);

        // check we can support this file type
        if (! isset(\$map[\$info['extension']])) {
            throw FileTypeNotSupported::new();
        }

        \$class         = \$map[\$info['extension']];
        \$configuration = new \$class(\$this->connection);
        \$configuration->load(\$config);

        return \$configuration;
    }

    /**
     * {@inheritdoc}
     */
    public function getName() : string
    {
        return 'configuration';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/ConfigurationHelper.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Tools\\Console\\Helper;

use Doctrine\\DBAL\\Connection;
use Doctrine\\Migrations\\Configuration\\ArrayConfiguration;
use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Configuration\\JsonConfiguration;
use Doctrine\\Migrations\\Configuration\\XmlConfiguration;
use Doctrine\\Migrations\\Configuration\\YamlConfiguration;
use Doctrine\\Migrations\\Tools\\Console\\Exception\\FileTypeNotSupported;
use Symfony\\Component\\Console\\Helper\\Helper;
use Symfony\\Component\\Console\\Input\\InputInterface;
use function file_exists;
use function pathinfo;

/**
 * The ConfigurationHelper class is responsible for getting the Configuration instance from one of the supported methods
 * for defining the configuration for your migrations.
 */
class ConfigurationHelper extends Helper implements ConfigurationHelperInterface
{
    /** @var Connection */
    private \$connection;

    /** @var Configuration|null */
    private \$configuration;

    public function __construct(
        Connection \$connection,
        ?Configuration \$configuration = null
    ) {
        \$this->connection    = \$connection;
        \$this->configuration = \$configuration;
    }

    public function getMigrationConfig(InputInterface \$input) : Configuration
    {
        /**
         * If a configuration option is passed to the command line, use that configuration
         * instead of any other one.
         */
        \$configuration = \$input->getOption('configuration');

        if (\$configuration !== null) {
            return \$this->loadConfig(\$configuration);
        }

        /**
         * If a configuration has already been set using DI or a Setter use it.
         */
        if (\$this->configuration !== null) {
            return \$this->configuration;
        }

        /**
         * If no any other config has been found, look for default config file in the path.
         */
        \$defaultConfig = [
            'migrations.xml',
            'migrations.yml',
            'migrations.yaml',
            'migrations.json',
            'migrations.php',
        ];

        foreach (\$defaultConfig as \$config) {
            if (\$this->configExists(\$config)) {
                return \$this->loadConfig(\$config);
            }
        }

        return new Configuration(\$this->connection);
    }

    private function configExists(string \$config) : bool
    {
        return file_exists(\$config);
    }

    /**
     * @throws FileTypeNotSupported
     */
    private function loadConfig(string \$config) : Configuration
    {
        \$map = [
            'xml'   => XmlConfiguration::class,
            'yaml'  => YamlConfiguration::class,
            'yml'   => YamlConfiguration::class,
            'php'   => ArrayConfiguration::class,
            'json'  => JsonConfiguration::class,
        ];

        \$info = pathinfo(\$config);

        // check we can support this file type
        if (! isset(\$map[\$info['extension']])) {
            throw FileTypeNotSupported::new();
        }

        \$class         = \$map[\$info['extension']];
        \$configuration = new \$class(\$this->connection);
        \$configuration->load(\$config);

        return \$configuration;
    }

    /**
     * {@inheritdoc}
     */
    public function getName() : string
    {
        return 'configuration';
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Helper/ConfigurationHelper.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Tools\\Console\\Helper\\ConfigurationHelper.php");
    }
}
