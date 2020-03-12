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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Driver.php */
class __TwigTemplate_bb2b0efcde6ce1afd2550fc086c6bb9ec9233fe8a8b84ccf0e5f1b2fe94dd762 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Driver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\PDOSqlsrv;

use Doctrine\\DBAL\\Driver\\AbstractSQLServerDriver;
use function is_int;
use function sprintf;

/**
 * The PDO-based Sqlsrv driver.
 */
class Driver extends AbstractSQLServerDriver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        \$pdoOptions = \$dsnOptions = [];

        foreach (\$driverOptions as \$option => \$value) {
            if (is_int(\$option)) {
                \$pdoOptions[\$option] = \$value;
            } else {
                \$dsnOptions[\$option] = \$value;
            }
        }

        return new Connection(
            \$this->_constructPdoDsn(\$params, \$dsnOptions),
            \$username,
            \$password,
            \$pdoOptions
        );
    }

    /**
     * Constructs the Sqlsrv PDO DSN.
     *
     * @param mixed[]  \$params
     * @param string[] \$connectionOptions
     *
     * @return string The DSN.
     */
    private function _constructPdoDsn(array \$params, array \$connectionOptions)
    {
        \$dsn = 'sqlsrv:server=';

        if (isset(\$params['host'])) {
            \$dsn .= \$params['host'];
        }

        if (isset(\$params['port']) && ! empty(\$params['port'])) {
            \$dsn .= ',' . \$params['port'];
        }

        if (isset(\$params['dbname'])) {
            \$connectionOptions['Database'] = \$params['dbname'];
        }

        if (isset(\$params['MultipleActiveResultSets'])) {
            \$connectionOptions['MultipleActiveResultSets'] = \$params['MultipleActiveResultSets'] ? 'true' : 'false';
        }

        return \$dsn . \$this->getConnectionOptionsDsn(\$connectionOptions);
    }

    /**
     * Converts a connection options array to the DSN
     *
     * @param string[] \$connectionOptions
     */
    private function getConnectionOptionsDsn(array \$connectionOptions) : string
    {
        \$connectionOptionsDsn = '';

        foreach (\$connectionOptions as \$paramName => \$paramValue) {
            \$connectionOptionsDsn .= sprintf(';%s=%s', \$paramName, \$paramValue);
        }

        return \$connectionOptionsDsn;
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated
     */
    public function getName()
    {
        return 'pdo_sqlsrv';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Driver.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\PDOSqlsrv;

use Doctrine\\DBAL\\Driver\\AbstractSQLServerDriver;
use function is_int;
use function sprintf;

/**
 * The PDO-based Sqlsrv driver.
 */
class Driver extends AbstractSQLServerDriver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        \$pdoOptions = \$dsnOptions = [];

        foreach (\$driverOptions as \$option => \$value) {
            if (is_int(\$option)) {
                \$pdoOptions[\$option] = \$value;
            } else {
                \$dsnOptions[\$option] = \$value;
            }
        }

        return new Connection(
            \$this->_constructPdoDsn(\$params, \$dsnOptions),
            \$username,
            \$password,
            \$pdoOptions
        );
    }

    /**
     * Constructs the Sqlsrv PDO DSN.
     *
     * @param mixed[]  \$params
     * @param string[] \$connectionOptions
     *
     * @return string The DSN.
     */
    private function _constructPdoDsn(array \$params, array \$connectionOptions)
    {
        \$dsn = 'sqlsrv:server=';

        if (isset(\$params['host'])) {
            \$dsn .= \$params['host'];
        }

        if (isset(\$params['port']) && ! empty(\$params['port'])) {
            \$dsn .= ',' . \$params['port'];
        }

        if (isset(\$params['dbname'])) {
            \$connectionOptions['Database'] = \$params['dbname'];
        }

        if (isset(\$params['MultipleActiveResultSets'])) {
            \$connectionOptions['MultipleActiveResultSets'] = \$params['MultipleActiveResultSets'] ? 'true' : 'false';
        }

        return \$dsn . \$this->getConnectionOptionsDsn(\$connectionOptions);
    }

    /**
     * Converts a connection options array to the DSN
     *
     * @param string[] \$connectionOptions
     */
    private function getConnectionOptionsDsn(array \$connectionOptions) : string
    {
        \$connectionOptionsDsn = '';

        foreach (\$connectionOptions as \$paramName => \$paramValue) {
            \$connectionOptionsDsn .= sprintf(';%s=%s', \$paramName, \$paramValue);
        }

        return \$connectionOptionsDsn;
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated
     */
    public function getName()
    {
        return 'pdo_sqlsrv';
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Driver.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\PDOSqlsrv\\Driver.php");
    }
}
