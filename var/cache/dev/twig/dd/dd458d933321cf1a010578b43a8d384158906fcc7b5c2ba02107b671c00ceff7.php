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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/SQLSrvConnection.php */
class __TwigTemplate_f11bd27af976e2004aac80e609e84aee27f30167c4edc0363346e27eae9f3141 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/SQLSrvConnection.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\SQLSrv;

use Doctrine\\DBAL\\Driver\\Connection;
use Doctrine\\DBAL\\Driver\\ServerInfoAwareConnection;
use Doctrine\\DBAL\\ParameterType;
use const SQLSRV_ERR_ERRORS;
use function func_get_args;
use function is_float;
use function is_int;
use function sprintf;
use function sqlsrv_begin_transaction;
use function sqlsrv_commit;
use function sqlsrv_configure;
use function sqlsrv_connect;
use function sqlsrv_errors;
use function sqlsrv_query;
use function sqlsrv_rollback;
use function sqlsrv_rows_affected;
use function sqlsrv_server_info;
use function str_replace;

/**
 * SQL Server implementation for the Connection interface.
 */
class SQLSrvConnection implements Connection, ServerInfoAwareConnection
{
    /** @var resource */
    protected \$conn;

    /** @var LastInsertId */
    protected \$lastInsertId;

    /**
     * @param string  \$serverName
     * @param mixed[] \$connectionOptions
     *
     * @throws SQLSrvException
     */
    public function __construct(\$serverName, \$connectionOptions)
    {
        if (! sqlsrv_configure('WarningsReturnAsErrors', 0)) {
            throw SQLSrvException::fromSqlSrvErrors();
        }

        \$conn = sqlsrv_connect(\$serverName, \$connectionOptions);

        if (\$conn === false) {
            throw SQLSrvException::fromSqlSrvErrors();
        }

        \$this->conn         = \$conn;
        \$this->lastInsertId = new LastInsertId();
    }

    /**
     * {@inheritdoc}
     */
    public function getServerVersion()
    {
        \$serverInfo = sqlsrv_server_info(\$this->conn);

        return \$serverInfo['SQLServerVersion'];
    }

    /**
     * {@inheritdoc}
     */
    public function requiresQueryForServerVersion()
    {
        return false;
    }

    /**
     * {@inheritDoc}
     */
    public function prepare(\$sql)
    {
        return new SQLSrvStatement(\$this->conn, \$sql, \$this->lastInsertId);
    }

    /**
     * {@inheritDoc}
     */
    public function query()
    {
        \$args = func_get_args();
        \$sql  = \$args[0];
        \$stmt = \$this->prepare(\$sql);
        \$stmt->execute();

        return \$stmt;
    }

    /**
     * {@inheritDoc}
     */
    public function quote(\$value, \$type = ParameterType::STRING)
    {
        if (is_int(\$value)) {
            return \$value;
        }

        if (is_float(\$value)) {
            return sprintf('%F', \$value);
        }

        return \"'\" . str_replace(\"'\", \"''\", \$value) . \"'\";
    }

    /**
     * {@inheritDoc}
     */
    public function exec(\$statement)
    {
        \$stmt = sqlsrv_query(\$this->conn, \$statement);

        if (\$stmt === false) {
            throw SQLSrvException::fromSqlSrvErrors();
        }

        \$rowsAffected = sqlsrv_rows_affected(\$stmt);

        if (\$rowsAffected === false) {
            throw SQLSrvException::fromSqlSrvErrors();
        }

        return \$rowsAffected;
    }

    /**
     * {@inheritDoc}
     */
    public function lastInsertId(\$name = null)
    {
        if (\$name !== null) {
            \$stmt = \$this->prepare('SELECT CONVERT(VARCHAR(MAX), current_value) FROM sys.sequences WHERE name = ?');
            \$stmt->execute([\$name]);
        } else {
            \$stmt = \$this->query('SELECT @@IDENTITY');
        }

        return \$stmt->fetchColumn();
    }

    /**
     * {@inheritDoc}
     */
    public function beginTransaction()
    {
        if (! sqlsrv_begin_transaction(\$this->conn)) {
            throw SQLSrvException::fromSqlSrvErrors();
        }
    }

    /**
     * {@inheritDoc}
     */
    public function commit()
    {
        if (! sqlsrv_commit(\$this->conn)) {
            throw SQLSrvException::fromSqlSrvErrors();
        }
    }

    /**
     * {@inheritDoc}
     */
    public function rollBack()
    {
        if (! sqlsrv_rollback(\$this->conn)) {
            throw SQLSrvException::fromSqlSrvErrors();
        }
    }

    /**
     * {@inheritDoc}
     */
    public function errorCode()
    {
        \$errors = sqlsrv_errors(SQLSRV_ERR_ERRORS);
        if (\$errors) {
            return \$errors[0]['code'];
        }

        return false;
    }

    /**
     * {@inheritDoc}
     */
    public function errorInfo()
    {
        return (array) sqlsrv_errors(SQLSRV_ERR_ERRORS);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/SQLSrvConnection.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\SQLSrv;

use Doctrine\\DBAL\\Driver\\Connection;
use Doctrine\\DBAL\\Driver\\ServerInfoAwareConnection;
use Doctrine\\DBAL\\ParameterType;
use const SQLSRV_ERR_ERRORS;
use function func_get_args;
use function is_float;
use function is_int;
use function sprintf;
use function sqlsrv_begin_transaction;
use function sqlsrv_commit;
use function sqlsrv_configure;
use function sqlsrv_connect;
use function sqlsrv_errors;
use function sqlsrv_query;
use function sqlsrv_rollback;
use function sqlsrv_rows_affected;
use function sqlsrv_server_info;
use function str_replace;

/**
 * SQL Server implementation for the Connection interface.
 */
class SQLSrvConnection implements Connection, ServerInfoAwareConnection
{
    /** @var resource */
    protected \$conn;

    /** @var LastInsertId */
    protected \$lastInsertId;

    /**
     * @param string  \$serverName
     * @param mixed[] \$connectionOptions
     *
     * @throws SQLSrvException
     */
    public function __construct(\$serverName, \$connectionOptions)
    {
        if (! sqlsrv_configure('WarningsReturnAsErrors', 0)) {
            throw SQLSrvException::fromSqlSrvErrors();
        }

        \$conn = sqlsrv_connect(\$serverName, \$connectionOptions);

        if (\$conn === false) {
            throw SQLSrvException::fromSqlSrvErrors();
        }

        \$this->conn         = \$conn;
        \$this->lastInsertId = new LastInsertId();
    }

    /**
     * {@inheritdoc}
     */
    public function getServerVersion()
    {
        \$serverInfo = sqlsrv_server_info(\$this->conn);

        return \$serverInfo['SQLServerVersion'];
    }

    /**
     * {@inheritdoc}
     */
    public function requiresQueryForServerVersion()
    {
        return false;
    }

    /**
     * {@inheritDoc}
     */
    public function prepare(\$sql)
    {
        return new SQLSrvStatement(\$this->conn, \$sql, \$this->lastInsertId);
    }

    /**
     * {@inheritDoc}
     */
    public function query()
    {
        \$args = func_get_args();
        \$sql  = \$args[0];
        \$stmt = \$this->prepare(\$sql);
        \$stmt->execute();

        return \$stmt;
    }

    /**
     * {@inheritDoc}
     */
    public function quote(\$value, \$type = ParameterType::STRING)
    {
        if (is_int(\$value)) {
            return \$value;
        }

        if (is_float(\$value)) {
            return sprintf('%F', \$value);
        }

        return \"'\" . str_replace(\"'\", \"''\", \$value) . \"'\";
    }

    /**
     * {@inheritDoc}
     */
    public function exec(\$statement)
    {
        \$stmt = sqlsrv_query(\$this->conn, \$statement);

        if (\$stmt === false) {
            throw SQLSrvException::fromSqlSrvErrors();
        }

        \$rowsAffected = sqlsrv_rows_affected(\$stmt);

        if (\$rowsAffected === false) {
            throw SQLSrvException::fromSqlSrvErrors();
        }

        return \$rowsAffected;
    }

    /**
     * {@inheritDoc}
     */
    public function lastInsertId(\$name = null)
    {
        if (\$name !== null) {
            \$stmt = \$this->prepare('SELECT CONVERT(VARCHAR(MAX), current_value) FROM sys.sequences WHERE name = ?');
            \$stmt->execute([\$name]);
        } else {
            \$stmt = \$this->query('SELECT @@IDENTITY');
        }

        return \$stmt->fetchColumn();
    }

    /**
     * {@inheritDoc}
     */
    public function beginTransaction()
    {
        if (! sqlsrv_begin_transaction(\$this->conn)) {
            throw SQLSrvException::fromSqlSrvErrors();
        }
    }

    /**
     * {@inheritDoc}
     */
    public function commit()
    {
        if (! sqlsrv_commit(\$this->conn)) {
            throw SQLSrvException::fromSqlSrvErrors();
        }
    }

    /**
     * {@inheritDoc}
     */
    public function rollBack()
    {
        if (! sqlsrv_rollback(\$this->conn)) {
            throw SQLSrvException::fromSqlSrvErrors();
        }
    }

    /**
     * {@inheritDoc}
     */
    public function errorCode()
    {
        \$errors = sqlsrv_errors(SQLSRV_ERR_ERRORS);
        if (\$errors) {
            return \$errors[0]['code'];
        }

        return false;
    }

    /**
     * {@inheritDoc}
     */
    public function errorInfo()
    {
        return (array) sqlsrv_errors(SQLSRV_ERR_ERRORS);
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/SQLSrvConnection.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\SQLSrv\\SQLSrvConnection.php");
    }
}
