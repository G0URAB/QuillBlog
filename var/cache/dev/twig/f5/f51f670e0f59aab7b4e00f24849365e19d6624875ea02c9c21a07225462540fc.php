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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/SQLSrvException.php */
class __TwigTemplate_7529d0317913a8d56cfc9b2180a21b6f16c244a9e13462f58382634045befff3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/SQLSrvException.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\SQLSrv;

use Doctrine\\DBAL\\Driver\\AbstractDriverException;
use const SQLSRV_ERR_ERRORS;
use function rtrim;
use function sqlsrv_errors;

class SQLSrvException extends AbstractDriverException
{
    /**
     * Helper method to turn sql server errors into exception.
     *
     * @return \\Doctrine\\DBAL\\Driver\\SQLSrv\\SQLSrvException
     */
    public static function fromSqlSrvErrors()
    {
        \$message   = '';
        \$sqlState  = null;
        \$errorCode = null;

        foreach ((array) sqlsrv_errors(SQLSRV_ERR_ERRORS) as \$error) {
            \$message .= 'SQLSTATE [' . \$error['SQLSTATE'] . ', ' . \$error['code'] . ']: ' . \$error['message'] . \"\\n\";

            if (\$sqlState === null) {
                \$sqlState = \$error['SQLSTATE'];
            }

            if (\$errorCode !== null) {
                continue;
            }

            \$errorCode = \$error['code'];
        }

        if (! \$message) {
            \$message = 'SQL Server error occurred but no error message was retrieved from driver.';
        }

        return new self(rtrim(\$message), \$sqlState, \$errorCode);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/SQLSrvException.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\SQLSrv;

use Doctrine\\DBAL\\Driver\\AbstractDriverException;
use const SQLSRV_ERR_ERRORS;
use function rtrim;
use function sqlsrv_errors;

class SQLSrvException extends AbstractDriverException
{
    /**
     * Helper method to turn sql server errors into exception.
     *
     * @return \\Doctrine\\DBAL\\Driver\\SQLSrv\\SQLSrvException
     */
    public static function fromSqlSrvErrors()
    {
        \$message   = '';
        \$sqlState  = null;
        \$errorCode = null;

        foreach ((array) sqlsrv_errors(SQLSRV_ERR_ERRORS) as \$error) {
            \$message .= 'SQLSTATE [' . \$error['SQLSTATE'] . ', ' . \$error['code'] . ']: ' . \$error['message'] . \"\\n\";

            if (\$sqlState === null) {
                \$sqlState = \$error['SQLSTATE'];
            }

            if (\$errorCode !== null) {
                continue;
            }

            \$errorCode = \$error['code'];
        }

        if (! \$message) {
            \$message = 'SQL Server error occurred but no error message was retrieved from driver.';
        }

        return new self(rtrim(\$message), \$sqlState, \$errorCode);
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/SQLSrvException.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\SQLSrv\\SQLSrvException.php");
    }
}
