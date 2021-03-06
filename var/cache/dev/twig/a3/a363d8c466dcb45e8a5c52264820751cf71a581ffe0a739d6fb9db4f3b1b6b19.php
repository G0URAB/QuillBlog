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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php */
class __TwigTemplate_f04a001e85d8618d46cfeb13e0b9ea05308a9e0d14a6d5d0b6d38bd4eb5a9ce9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver;

use Doctrine\\DBAL\\ParameterType;

/**
 * Connection interface.
 * Driver connections must implement this interface.
 *
 * This resembles (a subset of) the PDO interface.
 */
interface Connection
{
    /**
     * Prepares a statement for execution and returns a Statement object.
     *
     * @param string \$prepareString
     *
     * @return Statement
     */
    public function prepare(\$prepareString);

    /**
     * Executes an SQL statement, returning a result set as a Statement object.
     *
     * @return Statement
     */
    public function query();

    /**
     * Quotes a string for use in a query.
     *
     * @param mixed \$input
     * @param int   \$type
     *
     * @return mixed
     */
    public function quote(\$input, \$type = ParameterType::STRING);

    /**
     * Executes an SQL statement and return the number of affected rows.
     *
     * @param string \$statement
     *
     * @return int
     */
    public function exec(\$statement);

    /**
     * Returns the ID of the last inserted row or sequence value.
     *
     * @param string|null \$name
     *
     * @return string
     */
    public function lastInsertId(\$name = null);

    /**
     * Initiates a transaction.
     *
     * @return bool TRUE on success or FALSE on failure.
     */
    public function beginTransaction();

    /**
     * Commits a transaction.
     *
     * @return bool TRUE on success or FALSE on failure.
     */
    public function commit();

    /**
     * Rolls back the current transaction, as initiated by beginTransaction().
     *
     * @return bool TRUE on success or FALSE on failure.
     */
    public function rollBack();

    /**
     * Returns the error code associated with the last operation on the database handle.
     *
     * @return string|null The error code, or null if no operation has been run on the database handle.
     */
    public function errorCode();

    /**
     * Returns extended error information associated with the last operation on the database handle.
     *
     * @return mixed[]
     */
    public function errorInfo();
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver;

use Doctrine\\DBAL\\ParameterType;

/**
 * Connection interface.
 * Driver connections must implement this interface.
 *
 * This resembles (a subset of) the PDO interface.
 */
interface Connection
{
    /**
     * Prepares a statement for execution and returns a Statement object.
     *
     * @param string \$prepareString
     *
     * @return Statement
     */
    public function prepare(\$prepareString);

    /**
     * Executes an SQL statement, returning a result set as a Statement object.
     *
     * @return Statement
     */
    public function query();

    /**
     * Quotes a string for use in a query.
     *
     * @param mixed \$input
     * @param int   \$type
     *
     * @return mixed
     */
    public function quote(\$input, \$type = ParameterType::STRING);

    /**
     * Executes an SQL statement and return the number of affected rows.
     *
     * @param string \$statement
     *
     * @return int
     */
    public function exec(\$statement);

    /**
     * Returns the ID of the last inserted row or sequence value.
     *
     * @param string|null \$name
     *
     * @return string
     */
    public function lastInsertId(\$name = null);

    /**
     * Initiates a transaction.
     *
     * @return bool TRUE on success or FALSE on failure.
     */
    public function beginTransaction();

    /**
     * Commits a transaction.
     *
     * @return bool TRUE on success or FALSE on failure.
     */
    public function commit();

    /**
     * Rolls back the current transaction, as initiated by beginTransaction().
     *
     * @return bool TRUE on success or FALSE on failure.
     */
    public function rollBack();

    /**
     * Returns the error code associated with the last operation on the database handle.
     *
     * @return string|null The error code, or null if no operation has been run on the database handle.
     */
    public function errorCode();

    /**
     * Returns extended error information associated with the last operation on the database handle.
     *
     * @return mixed[]
     */
    public function errorInfo();
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\Connection.php");
    }
}
