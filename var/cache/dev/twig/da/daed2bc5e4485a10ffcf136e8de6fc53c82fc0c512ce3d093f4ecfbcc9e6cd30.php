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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractSQLServerDriver.php */
class __TwigTemplate_d1e8f490799f4136e3e9d3557a9a43d267502cd77dd9eb6f49c4e1de05a2837a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractSQLServerDriver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Driver;
use Doctrine\\DBAL\\Platforms\\SQLServer2005Platform;
use Doctrine\\DBAL\\Platforms\\SQLServer2008Platform;
use Doctrine\\DBAL\\Platforms\\SQLServer2012Platform;
use Doctrine\\DBAL\\Platforms\\SQLServerPlatform;
use Doctrine\\DBAL\\Schema\\SQLServerSchemaManager;
use Doctrine\\DBAL\\VersionAwarePlatformDriver;
use function preg_match;
use function version_compare;

/**
 * Abstract base implementation of the {@link Doctrine\\DBAL\\Driver} interface for Microsoft SQL Server based drivers.
 */
abstract class AbstractSQLServerDriver implements Driver, VersionAwarePlatformDriver
{
    /**
     * {@inheritdoc}
     */
    public function createDatabasePlatformForVersion(\$version)
    {
        if (! preg_match(
            '/^(?P<major>\\d+)(?:\\.(?P<minor>\\d+)(?:\\.(?P<patch>\\d+)(?:\\.(?P<build>\\d+))?)?)?/',
            \$version,
            \$versionParts
        )) {
            throw DBALException::invalidPlatformVersionSpecified(
                \$version,
                '<major_version>.<minor_version>.<patch_version>.<build_version>'
            );
        }

        \$majorVersion = \$versionParts['major'];
        \$minorVersion = \$versionParts['minor'] ?? 0;
        \$patchVersion = \$versionParts['patch'] ?? 0;
        \$buildVersion = \$versionParts['build'] ?? 0;
        \$version      = \$majorVersion . '.' . \$minorVersion . '.' . \$patchVersion . '.' . \$buildVersion;

        switch (true) {
            case version_compare(\$version, '11.00.2100', '>='):
                return new SQLServer2012Platform();
            case version_compare(\$version, '10.00.1600', '>='):
                return new SQLServer2008Platform();
            case version_compare(\$version, '9.00.1399', '>='):
                return new SQLServer2005Platform();
            default:
                return new SQLServerPlatform();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabase(Connection \$conn)
    {
        \$params = \$conn->getParams();

        return \$params['dbname'] ?? \$conn->query('SELECT DB_NAME()')->fetchColumn();
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabasePlatform()
    {
        return new SQLServer2008Platform();
    }

    /**
     * {@inheritdoc}
     */
    public function getSchemaManager(Connection \$conn)
    {
        return new SQLServerSchemaManager(\$conn);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractSQLServerDriver.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Driver;
use Doctrine\\DBAL\\Platforms\\SQLServer2005Platform;
use Doctrine\\DBAL\\Platforms\\SQLServer2008Platform;
use Doctrine\\DBAL\\Platforms\\SQLServer2012Platform;
use Doctrine\\DBAL\\Platforms\\SQLServerPlatform;
use Doctrine\\DBAL\\Schema\\SQLServerSchemaManager;
use Doctrine\\DBAL\\VersionAwarePlatformDriver;
use function preg_match;
use function version_compare;

/**
 * Abstract base implementation of the {@link Doctrine\\DBAL\\Driver} interface for Microsoft SQL Server based drivers.
 */
abstract class AbstractSQLServerDriver implements Driver, VersionAwarePlatformDriver
{
    /**
     * {@inheritdoc}
     */
    public function createDatabasePlatformForVersion(\$version)
    {
        if (! preg_match(
            '/^(?P<major>\\d+)(?:\\.(?P<minor>\\d+)(?:\\.(?P<patch>\\d+)(?:\\.(?P<build>\\d+))?)?)?/',
            \$version,
            \$versionParts
        )) {
            throw DBALException::invalidPlatformVersionSpecified(
                \$version,
                '<major_version>.<minor_version>.<patch_version>.<build_version>'
            );
        }

        \$majorVersion = \$versionParts['major'];
        \$minorVersion = \$versionParts['minor'] ?? 0;
        \$patchVersion = \$versionParts['patch'] ?? 0;
        \$buildVersion = \$versionParts['build'] ?? 0;
        \$version      = \$majorVersion . '.' . \$minorVersion . '.' . \$patchVersion . '.' . \$buildVersion;

        switch (true) {
            case version_compare(\$version, '11.00.2100', '>='):
                return new SQLServer2012Platform();
            case version_compare(\$version, '10.00.1600', '>='):
                return new SQLServer2008Platform();
            case version_compare(\$version, '9.00.1399', '>='):
                return new SQLServer2005Platform();
            default:
                return new SQLServerPlatform();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabase(Connection \$conn)
    {
        \$params = \$conn->getParams();

        return \$params['dbname'] ?? \$conn->query('SELECT DB_NAME()')->fetchColumn();
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabasePlatform()
    {
        return new SQLServer2008Platform();
    }

    /**
     * {@inheritdoc}
     */
    public function getSchemaManager(Connection \$conn)
    {
        return new SQLServerSchemaManager(\$conn);
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractSQLServerDriver.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\AbstractSQLServerDriver.php");
    }
}
