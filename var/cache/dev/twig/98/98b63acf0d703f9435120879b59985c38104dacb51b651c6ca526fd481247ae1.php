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

/* @app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionConfigurationLoader.php */
class __TwigTemplate_fc86dd70035f165e4d664da11171381a13c592ac62d10b16b2f1cc52cbd2e418 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionConfigurationLoader.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Configuration\\Connection\\Loader;

use Doctrine\\DBAL\\Connection;
use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Configuration\\Connection\\ConnectionLoaderInterface;

/**
 * The ConnectionConfigurationLoader class is responsible for loading a Doctrine\\DBAL\\Connection from the Migrations
 * Doctrine\\Migrations\\Configuration\\Configuration::getConnection() method.
 *
 * @internal
 */
class ConnectionConfigurationLoader implements ConnectionLoaderInterface
{
    /** @var Configuration|null */
    private \$configuration;

    public function __construct(?Configuration \$configuration = null)
    {
        \$this->configuration = \$configuration;
    }

    /**
     * Read the input and return a Configuration, returns null if the config
     * is not supported.
     */
    public function chosen() : ?Connection
    {
        if (\$this->configuration !== null) {
            return \$this->configuration->getConnection();
        }

        return null;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionConfigurationLoader.php";
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
use Doctrine\\Migrations\\Configuration\\Configuration;
use Doctrine\\Migrations\\Configuration\\Connection\\ConnectionLoaderInterface;

/**
 * The ConnectionConfigurationLoader class is responsible for loading a Doctrine\\DBAL\\Connection from the Migrations
 * Doctrine\\Migrations\\Configuration\\Configuration::getConnection() method.
 *
 * @internal
 */
class ConnectionConfigurationLoader implements ConnectionLoaderInterface
{
    /** @var Configuration|null */
    private \$configuration;

    public function __construct(?Configuration \$configuration = null)
    {
        \$this->configuration = \$configuration;
    }

    /**
     * Read the input and return a Configuration, returns null if the config
     * is not supported.
     */
    public function chosen() : ?Connection
    {
        if (\$this->configuration !== null) {
            return \$this->configuration->getConnection();
        }

        return null;
    }
}
", "@app/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/Loader/ConnectionConfigurationLoader.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\lib\\Doctrine\\Migrations\\Configuration\\Connection\\Loader\\ConnectionConfigurationLoader.php");
    }
}
