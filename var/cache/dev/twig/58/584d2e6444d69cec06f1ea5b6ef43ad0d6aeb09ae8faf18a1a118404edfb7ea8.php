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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/OCI8Connection.php */
class __TwigTemplate_c46e3e8d54b01d9a56b5a1496bc31ea68f7832bcee97c973ced5c591dddad3e8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/OCI8Connection.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\OCI8;

use Doctrine\\DBAL\\Driver\\Connection;
use Doctrine\\DBAL\\Driver\\ServerInfoAwareConnection;
use Doctrine\\DBAL\\ParameterType;
use UnexpectedValueException;
use const OCI_COMMIT_ON_SUCCESS;
use const OCI_DEFAULT;
use const OCI_NO_AUTO_COMMIT;
use function addcslashes;
use function func_get_args;
use function is_float;
use function is_int;
use function oci_commit;
use function oci_connect;
use function oci_error;
use function oci_pconnect;
use function oci_rollback;
use function oci_server_version;
use function preg_match;
use function sprintf;
use function str_replace;

/**
 * OCI8 implementation of the Connection interface.
 */
class OCI8Connection implements Connection, ServerInfoAwareConnection
{
    /** @var resource */
    protected \$dbh;

    /** @var int */
    protected \$executeMode = OCI_COMMIT_ON_SUCCESS;

    /**
     * Creates a Connection to an Oracle Database using oci8 extension.
     *
     * @param string \$username
     * @param string \$password
     * @param string \$db
     * @param string \$charset
     * @param int    \$sessionMode
     * @param bool   \$persistent
     *
     * @throws OCI8Exception
     */
    public function __construct(
        \$username,
        \$password,
        \$db,
        \$charset = '',
        \$sessionMode = OCI_DEFAULT,
        \$persistent = false
    ) {
        \$dbh = \$persistent
            ? @oci_pconnect(\$username, \$password, \$db, \$charset, \$sessionMode)
            : @oci_connect(\$username, \$password, \$db, \$charset, \$sessionMode);

        if (\$dbh === false) {
            throw OCI8Exception::fromErrorInfo(oci_error());
        }

        \$this->dbh = \$dbh;
    }

    /**
     * {@inheritdoc}
     *
     * @throws UnexpectedValueException If the version string returned by the database server
     *                                  does not contain a parsable version number.
     */
    public function getServerVersion()
    {
        \$version = oci_server_version(\$this->dbh);

        if (\$version === false) {
            throw OCI8Exception::fromErrorInfo(oci_error(\$this->dbh));
        }

        if (! preg_match('/\\s+(\\d+\\.\\d+\\.\\d+\\.\\d+\\.\\d+)\\s+/', \$version, \$matches)) {
            throw new UnexpectedValueException(
                sprintf(
                    'Unexpected database version string \"%s\". Cannot parse an appropriate version number from it. ' .
                    'Please report this database version string to the Doctrine team.',
                    \$version
                )
            );
        }

        return \$matches[1];
    }

    /**
     * {@inheritdoc}
     */
    public function requiresQueryForServerVersion()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function prepare(\$prepareString)
    {
        return new OCI8Statement(\$this->dbh, \$prepareString, \$this);
    }

    /**
     * {@inheritdoc}
     */
    public function query()
    {
        \$args = func_get_args();
        \$sql  = \$args[0];
        //\$fetchMode = \$args[1];
        \$stmt = \$this->prepare(\$sql);
        \$stmt->execute();

        return \$stmt;
    }

    /**
     * {@inheritdoc}
     */
    public function quote(\$value, \$type = ParameterType::STRING)
    {
        if (is_int(\$value) || is_float(\$value)) {
            return \$value;
        }
        \$value = str_replace(\"'\", \"''\", \$value);

        return \"'\" . addcslashes(\$value, \"\\000\\n\\r\\\\\\032\") . \"'\";
    }

    /**
     * {@inheritdoc}
     */
    public function exec(\$statement)
    {
        \$stmt = \$this->prepare(\$statement);
        \$stmt->execute();

        return \$stmt->rowCount();
    }

    /**
     * {@inheritdoc}
     */
    public function lastInsertId(\$name = null)
    {
        if (\$name === null) {
            return false;
        }

        \$sql    = 'SELECT ' . \$name . '.CURRVAL FROM DUAL';
        \$stmt   = \$this->query(\$sql);
        \$result = \$stmt->fetchColumn();

        if (\$result === false) {
            throw new OCI8Exception('lastInsertId failed: Query was executed but no result was returned.');
        }

        return (int) \$result;
    }

    /**
     * Returns the current execution mode.
     *
     * @return int
     */
    public function getExecuteMode()
    {
        return \$this->executeMode;
    }

    /**
     * {@inheritdoc}
     */
    public function beginTransaction()
    {
        \$this->executeMode = OCI_NO_AUTO_COMMIT;

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        if (! oci_commit(\$this->dbh)) {
            throw OCI8Exception::fromErrorInfo(\$this->errorInfo());
        }
        \$this->executeMode = OCI_COMMIT_ON_SUCCESS;

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function rollBack()
    {
        if (! oci_rollback(\$this->dbh)) {
            throw OCI8Exception::fromErrorInfo(\$this->errorInfo());
        }
        \$this->executeMode = OCI_COMMIT_ON_SUCCESS;

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function errorCode()
    {
        \$error = oci_error(\$this->dbh);
        if (\$error !== false) {
            \$error = \$error['code'];
        }

        return \$error;
    }

    /**
     * {@inheritdoc}
     */
    public function errorInfo()
    {
        \$error = oci_error(\$this->dbh);

        if (\$error === false) {
            return [];
        }

        return \$error;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/OCI8Connection.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\OCI8;

use Doctrine\\DBAL\\Driver\\Connection;
use Doctrine\\DBAL\\Driver\\ServerInfoAwareConnection;
use Doctrine\\DBAL\\ParameterType;
use UnexpectedValueException;
use const OCI_COMMIT_ON_SUCCESS;
use const OCI_DEFAULT;
use const OCI_NO_AUTO_COMMIT;
use function addcslashes;
use function func_get_args;
use function is_float;
use function is_int;
use function oci_commit;
use function oci_connect;
use function oci_error;
use function oci_pconnect;
use function oci_rollback;
use function oci_server_version;
use function preg_match;
use function sprintf;
use function str_replace;

/**
 * OCI8 implementation of the Connection interface.
 */
class OCI8Connection implements Connection, ServerInfoAwareConnection
{
    /** @var resource */
    protected \$dbh;

    /** @var int */
    protected \$executeMode = OCI_COMMIT_ON_SUCCESS;

    /**
     * Creates a Connection to an Oracle Database using oci8 extension.
     *
     * @param string \$username
     * @param string \$password
     * @param string \$db
     * @param string \$charset
     * @param int    \$sessionMode
     * @param bool   \$persistent
     *
     * @throws OCI8Exception
     */
    public function __construct(
        \$username,
        \$password,
        \$db,
        \$charset = '',
        \$sessionMode = OCI_DEFAULT,
        \$persistent = false
    ) {
        \$dbh = \$persistent
            ? @oci_pconnect(\$username, \$password, \$db, \$charset, \$sessionMode)
            : @oci_connect(\$username, \$password, \$db, \$charset, \$sessionMode);

        if (\$dbh === false) {
            throw OCI8Exception::fromErrorInfo(oci_error());
        }

        \$this->dbh = \$dbh;
    }

    /**
     * {@inheritdoc}
     *
     * @throws UnexpectedValueException If the version string returned by the database server
     *                                  does not contain a parsable version number.
     */
    public function getServerVersion()
    {
        \$version = oci_server_version(\$this->dbh);

        if (\$version === false) {
            throw OCI8Exception::fromErrorInfo(oci_error(\$this->dbh));
        }

        if (! preg_match('/\\s+(\\d+\\.\\d+\\.\\d+\\.\\d+\\.\\d+)\\s+/', \$version, \$matches)) {
            throw new UnexpectedValueException(
                sprintf(
                    'Unexpected database version string \"%s\". Cannot parse an appropriate version number from it. ' .
                    'Please report this database version string to the Doctrine team.',
                    \$version
                )
            );
        }

        return \$matches[1];
    }

    /**
     * {@inheritdoc}
     */
    public function requiresQueryForServerVersion()
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function prepare(\$prepareString)
    {
        return new OCI8Statement(\$this->dbh, \$prepareString, \$this);
    }

    /**
     * {@inheritdoc}
     */
    public function query()
    {
        \$args = func_get_args();
        \$sql  = \$args[0];
        //\$fetchMode = \$args[1];
        \$stmt = \$this->prepare(\$sql);
        \$stmt->execute();

        return \$stmt;
    }

    /**
     * {@inheritdoc}
     */
    public function quote(\$value, \$type = ParameterType::STRING)
    {
        if (is_int(\$value) || is_float(\$value)) {
            return \$value;
        }
        \$value = str_replace(\"'\", \"''\", \$value);

        return \"'\" . addcslashes(\$value, \"\\000\\n\\r\\\\\\032\") . \"'\";
    }

    /**
     * {@inheritdoc}
     */
    public function exec(\$statement)
    {
        \$stmt = \$this->prepare(\$statement);
        \$stmt->execute();

        return \$stmt->rowCount();
    }

    /**
     * {@inheritdoc}
     */
    public function lastInsertId(\$name = null)
    {
        if (\$name === null) {
            return false;
        }

        \$sql    = 'SELECT ' . \$name . '.CURRVAL FROM DUAL';
        \$stmt   = \$this->query(\$sql);
        \$result = \$stmt->fetchColumn();

        if (\$result === false) {
            throw new OCI8Exception('lastInsertId failed: Query was executed but no result was returned.');
        }

        return (int) \$result;
    }

    /**
     * Returns the current execution mode.
     *
     * @return int
     */
    public function getExecuteMode()
    {
        return \$this->executeMode;
    }

    /**
     * {@inheritdoc}
     */
    public function beginTransaction()
    {
        \$this->executeMode = OCI_NO_AUTO_COMMIT;

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        if (! oci_commit(\$this->dbh)) {
            throw OCI8Exception::fromErrorInfo(\$this->errorInfo());
        }
        \$this->executeMode = OCI_COMMIT_ON_SUCCESS;

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function rollBack()
    {
        if (! oci_rollback(\$this->dbh)) {
            throw OCI8Exception::fromErrorInfo(\$this->errorInfo());
        }
        \$this->executeMode = OCI_COMMIT_ON_SUCCESS;

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function errorCode()
    {
        \$error = oci_error(\$this->dbh);
        if (\$error !== false) {
            \$error = \$error['code'];
        }

        return \$error;
    }

    /**
     * {@inheritdoc}
     */
    public function errorInfo()
    {
        \$error = oci_error(\$this->dbh);

        if (\$error === false) {
            return [];
        }

        return \$error;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/OCI8Connection.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\OCI8\\OCI8Connection.php");
    }
}
