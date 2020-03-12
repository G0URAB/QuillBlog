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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DrizzlePDOMySql/Driver.php */
class __TwigTemplate_8adb6bca506a328efdf07c22cfb13a2a53ce171f9175b8737e0757a596b39137 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DrizzlePDOMySql/Driver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\DrizzlePDOMySql;

use Doctrine\\DBAL\\Platforms\\DrizzlePlatform;
use Doctrine\\DBAL\\Schema\\DrizzleSchemaManager;

/**
 * Drizzle driver using PDO MySql.
 */
class Driver extends \\Doctrine\\DBAL\\Driver\\PDOMySql\\Driver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        return new Connection(
            \$this->constructPdoDsn(\$params),
            \$username,
            \$password,
            \$driverOptions
        );
    }

    /**
     * {@inheritdoc}
     */
    public function createDatabasePlatformForVersion(\$version)
    {
        return \$this->getDatabasePlatform();
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabasePlatform()
    {
        return new DrizzlePlatform();
    }

    /**
     * {@inheritdoc}
     */
    public function getSchemaManager(\\Doctrine\\DBAL\\Connection \$conn)
    {
        return new DrizzleSchemaManager(\$conn);
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated
     */
    public function getName()
    {
        return 'drizzle_pdo_mysql';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DrizzlePDOMySql/Driver.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\DrizzlePDOMySql;

use Doctrine\\DBAL\\Platforms\\DrizzlePlatform;
use Doctrine\\DBAL\\Schema\\DrizzleSchemaManager;

/**
 * Drizzle driver using PDO MySql.
 */
class Driver extends \\Doctrine\\DBAL\\Driver\\PDOMySql\\Driver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        return new Connection(
            \$this->constructPdoDsn(\$params),
            \$username,
            \$password,
            \$driverOptions
        );
    }

    /**
     * {@inheritdoc}
     */
    public function createDatabasePlatformForVersion(\$version)
    {
        return \$this->getDatabasePlatform();
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabasePlatform()
    {
        return new DrizzlePlatform();
    }

    /**
     * {@inheritdoc}
     */
    public function getSchemaManager(\\Doctrine\\DBAL\\Connection \$conn)
    {
        return new DrizzleSchemaManager(\$conn);
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated
     */
    public function getName()
    {
        return 'drizzle_pdo_mysql';
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DrizzlePDOMySql/Driver.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\DrizzlePDOMySql\\Driver.php");
    }
}
