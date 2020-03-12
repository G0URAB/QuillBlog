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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/ConnectionEventArgs.php */
class __TwigTemplate_026bddc68bced9c975c596acca392de8aa6cbcb90cbf427f09129d44b1d7822d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/ConnectionEventArgs.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Event;

use Doctrine\\Common\\EventArgs;
use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Driver;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;

/**
 * Event Arguments used when a Driver connection is established inside Doctrine\\DBAL\\Connection.
 */
class ConnectionEventArgs extends EventArgs
{
    /** @var Connection */
    private \$connection;

    public function __construct(Connection \$connection)
    {
        \$this->connection = \$connection;
    }

    /**
     * @return Connection
     */
    public function getConnection()
    {
        return \$this->connection;
    }

    /**
     * @deprecated Use ConnectionEventArgs::getConnection() and Connection::getDriver() instead.
     *
     * @return Driver
     */
    public function getDriver()
    {
        return \$this->connection->getDriver();
    }

    /**
     * @deprecated Use ConnectionEventArgs::getConnection() and Connection::getDatabasePlatform() instead.
     *
     * @return AbstractPlatform
     */
    public function getDatabasePlatform()
    {
        return \$this->connection->getDatabasePlatform();
    }

    /**
     * @deprecated Use ConnectionEventArgs::getConnection() and Connection::getSchemaManager() instead.
     *
     * @return AbstractSchemaManager
     */
    public function getSchemaManager()
    {
        return \$this->connection->getSchemaManager();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/ConnectionEventArgs.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Event;

use Doctrine\\Common\\EventArgs;
use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Driver;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\AbstractSchemaManager;

/**
 * Event Arguments used when a Driver connection is established inside Doctrine\\DBAL\\Connection.
 */
class ConnectionEventArgs extends EventArgs
{
    /** @var Connection */
    private \$connection;

    public function __construct(Connection \$connection)
    {
        \$this->connection = \$connection;
    }

    /**
     * @return Connection
     */
    public function getConnection()
    {
        return \$this->connection;
    }

    /**
     * @deprecated Use ConnectionEventArgs::getConnection() and Connection::getDriver() instead.
     *
     * @return Driver
     */
    public function getDriver()
    {
        return \$this->connection->getDriver();
    }

    /**
     * @deprecated Use ConnectionEventArgs::getConnection() and Connection::getDatabasePlatform() instead.
     *
     * @return AbstractPlatform
     */
    public function getDatabasePlatform()
    {
        return \$this->connection->getDatabasePlatform();
    }

    /**
     * @deprecated Use ConnectionEventArgs::getConnection() and Connection::getSchemaManager() instead.
     *
     * @return AbstractSchemaManager
     */
    public function getSchemaManager()
    {
        return \$this->connection->getSchemaManager();
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/ConnectionEventArgs.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Event\\ConnectionEventArgs.php");
    }
}
