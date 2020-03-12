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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ArrayConnectionConfigurationLoader.php */
class __TwigTemplate_f3d8b18cb6819644150b80686a812436fa8f467b3aa26b99774c6c4f6014316c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ArrayConnectionConfigurationLoader.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration\\Connection\\Loader;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\DriverManager;
use Doctrine\\Migrations\\Configuration\\Connection\\ConnectionLoaderInterface;
use Doctrine\\Migrations\\Configuration\\Connection\\Loader\\Exception\\InvalidConfiguration;
use function file_exists;
use function is_array;

/**
 * The ArrayConnectionConfigurationLoader class is responsible for loading a Doctrine\\DBAL\\Connection from a PHP file
 * that returns an array of connection information which is used to instantiate a connection with DriverManager::getConnection()
 *
 * @internal
 */
class ArrayConnectionConfigurationLoader implements ConnectionLoaderInterface
{
    /** @var string|null */
    private \$filename;

    public function __construct(?string \$filename)
    {
        \$this->filename = \$filename;
    }

    /**
     * Read the input and return a Configuration, returns null if the config
     * is not supported.
     *
     * @throws InvalidConfiguration
     */
    public function chosen() : ?Connection
    {
        if (\$this->filename === null) {
            return null;
        }

        if (! file_exists(\$this->filename)) {
            return null;
        }

        \$params = include \$this->filename;

        if (! is_array(\$params)) {
            throw InvalidConfiguration::invalidArrayConfiguration();
        }

        return DriverManager::getConnection(\$params);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ArrayConnectionConfigurationLoader.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration\\Connection\\Loader;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\DriverManager;
use Doctrine\\Migrations\\Configuration\\Connection\\ConnectionLoaderInterface;
use Doctrine\\Migrations\\Configuration\\Connection\\Loader\\Exception\\InvalidConfiguration;
use function file_exists;
use function is_array;

/**
 * The ArrayConnectionConfigurationLoader class is responsible for loading a Doctrine\\DBAL\\Connection from a PHP file
 * that returns an array of connection information which is used to instantiate a connection with DriverManager::getConnection()
 *
 * @internal
 */
class ArrayConnectionConfigurationLoader implements ConnectionLoaderInterface
{
    /** @var string|null */
    private \$filename;

    public function __construct(?string \$filename)
    {
        \$this->filename = \$filename;
    }

    /**
     * Read the input and return a Configuration, returns null if the config
     * is not supported.
     *
     * @throws InvalidConfiguration
     */
    public function chosen() : ?Connection
    {
        if (\$this->filename === null) {
            return null;
        }

        if (! file_exists(\$this->filename)) {
            return null;
        }

        \$params = include \$this->filename;

        if (! is_array(\$params)) {
            throw InvalidConfiguration::invalidArrayConfiguration();
        }

        return DriverManager::getConnection(\$params);
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ArrayConnectionConfigurationLoader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Configuration\\Connection\\Loader\\ArrayConnectionConfigurationLoader.php");
    }
}
