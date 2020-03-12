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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/SQLAnywhereException.php */
class __TwigTemplate_c10253c1278a0b38d5a7a84e168f4ce2ac2b3e9a3fa0977d993019be80350554 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/SQLAnywhereException.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\SQLAnywhere;

use Doctrine\\DBAL\\Driver\\AbstractDriverException;
use InvalidArgumentException;
use function sasql_error;
use function sasql_errorcode;
use function sasql_sqlstate;
use function sasql_stmt_errno;
use function sasql_stmt_error;

/**
 * SAP Sybase SQL Anywhere driver exception.
 */
class SQLAnywhereException extends AbstractDriverException
{
    /**
     * Helper method to turn SQL Anywhere error into exception.
     *
     * @param resource|null \$conn The SQL Anywhere connection resource to retrieve the last error from.
     * @param resource|null \$stmt The SQL Anywhere statement resource to retrieve the last error from.
     *
     * @return SQLAnywhereException
     *
     * @throws InvalidArgumentException
     */
    public static function fromSQLAnywhereError(\$conn = null, \$stmt = null)
    {
        \$state   = \$conn ? sasql_sqlstate(\$conn) : sasql_sqlstate();
        \$code    = null;
        \$message = null;

        /**
         * Try retrieving the last error from statement resource if given
         */
        if (\$stmt) {
            \$code    = sasql_stmt_errno(\$stmt);
            \$message = sasql_stmt_error(\$stmt);
        }

        /**
         * Try retrieving the last error from the connection resource
         * if either the statement resource is not given or the statement
         * resource is given but the last error could not be retrieved from it (fallback).
         * Depending on the type of error, it is sometimes necessary to retrieve
         * it from the connection resource even though it occurred during
         * a prepared statement.
         */
        if (\$conn && ! \$code) {
            \$code    = sasql_errorcode(\$conn);
            \$message = sasql_error(\$conn);
        }

        /**
         * Fallback mode if either no connection resource is given
         * or the last error could not be retrieved from the given
         * connection / statement resource.
         */
        if (! \$conn || ! \$code) {
            \$code    = sasql_errorcode();
            \$message = sasql_error();
        }

        if (\$message) {
            return new self('SQLSTATE [' . \$state . '] [' . \$code . '] ' . \$message, \$state, \$code);
        }

        return new self('SQL Anywhere error occurred but no error message was retrieved from driver.', \$state, \$code);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/SQLAnywhereException.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\SQLAnywhere;

use Doctrine\\DBAL\\Driver\\AbstractDriverException;
use InvalidArgumentException;
use function sasql_error;
use function sasql_errorcode;
use function sasql_sqlstate;
use function sasql_stmt_errno;
use function sasql_stmt_error;

/**
 * SAP Sybase SQL Anywhere driver exception.
 */
class SQLAnywhereException extends AbstractDriverException
{
    /**
     * Helper method to turn SQL Anywhere error into exception.
     *
     * @param resource|null \$conn The SQL Anywhere connection resource to retrieve the last error from.
     * @param resource|null \$stmt The SQL Anywhere statement resource to retrieve the last error from.
     *
     * @return SQLAnywhereException
     *
     * @throws InvalidArgumentException
     */
    public static function fromSQLAnywhereError(\$conn = null, \$stmt = null)
    {
        \$state   = \$conn ? sasql_sqlstate(\$conn) : sasql_sqlstate();
        \$code    = null;
        \$message = null;

        /**
         * Try retrieving the last error from statement resource if given
         */
        if (\$stmt) {
            \$code    = sasql_stmt_errno(\$stmt);
            \$message = sasql_stmt_error(\$stmt);
        }

        /**
         * Try retrieving the last error from the connection resource
         * if either the statement resource is not given or the statement
         * resource is given but the last error could not be retrieved from it (fallback).
         * Depending on the type of error, it is sometimes necessary to retrieve
         * it from the connection resource even though it occurred during
         * a prepared statement.
         */
        if (\$conn && ! \$code) {
            \$code    = sasql_errorcode(\$conn);
            \$message = sasql_error(\$conn);
        }

        /**
         * Fallback mode if either no connection resource is given
         * or the last error could not be retrieved from the given
         * connection / statement resource.
         */
        if (! \$conn || ! \$code) {
            \$code    = sasql_errorcode();
            \$message = sasql_error();
        }

        if (\$message) {
            return new self('SQLSTATE [' . \$state . '] [' . \$code . '] ' . \$message, \$state, \$code);
        }

        return new self('SQL Anywhere error occurred but no error message was retrieved from driver.', \$state, \$code);
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/SQLAnywhereException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\SQLAnywhere\\SQLAnywhereException.php");
    }
}
