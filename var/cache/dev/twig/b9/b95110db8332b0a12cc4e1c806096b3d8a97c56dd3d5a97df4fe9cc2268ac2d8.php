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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionConfigurationChainLoader.php */
class __TwigTemplate_866293b732ad59d2a17797b4a0ff4270d414b0a70d5a55e35b49ca746891da2e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionConfigurationChainLoader.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration\\Connection\\Loader;

use Doctrine\\DBAL\\Connection;
use Doctrine\\Migrations\\Configuration\\Connection\\ConnectionLoaderInterface;
use Doctrine\\Migrations\\Configuration\\Connection\\Loader\\Exception\\InvalidConfiguration;

/**
 * The ConnectionConfigurationChainLoader class is responsible for loading a Doctrine\\DBAL\\Connection from an array of
 * loaders. The first one to return a Connection is used.
 *
 * @internal
 */
final class ConnectionConfigurationChainLoader implements ConnectionLoaderInterface
{
    /** @var ConnectionLoaderInterface[] */
    private \$loaders = [];

    /**
     * @param ConnectionLoaderInterface[] \$loaders
     */
    public function __construct(array \$loaders)
    {
        \$this->loaders = \$loaders;
    }

    /**
     * Read the input and return a Configuration, returns null if the config
     * is not supported.
     *
     * @throws InvalidConfiguration
     */
    public function chosen() : ?Connection
    {
        foreach (\$this->loaders as \$loader) {
            \$confObj = \$loader->chosen();

            if (\$confObj !== null) {
                return \$confObj;
            }
        }

        return null;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionConfigurationChainLoader.php";
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
use Doctrine\\Migrations\\Configuration\\Connection\\ConnectionLoaderInterface;
use Doctrine\\Migrations\\Configuration\\Connection\\Loader\\Exception\\InvalidConfiguration;

/**
 * The ConnectionConfigurationChainLoader class is responsible for loading a Doctrine\\DBAL\\Connection from an array of
 * loaders. The first one to return a Connection is used.
 *
 * @internal
 */
final class ConnectionConfigurationChainLoader implements ConnectionLoaderInterface
{
    /** @var ConnectionLoaderInterface[] */
    private \$loaders = [];

    /**
     * @param ConnectionLoaderInterface[] \$loaders
     */
    public function __construct(array \$loaders)
    {
        \$this->loaders = \$loaders;
    }

    /**
     * Read the input and return a Configuration, returns null if the config
     * is not supported.
     *
     * @throws InvalidConfiguration
     */
    public function chosen() : ?Connection
    {
        foreach (\$this->loaders as \$loader) {
            \$confObj = \$loader->chosen();

            if (\$confObj !== null) {
                return \$confObj;
            }
        }

        return null;
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionConfigurationChainLoader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Configuration\\Connection\\Loader\\ConnectionConfigurationChainLoader.php");
    }
}
