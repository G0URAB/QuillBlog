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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractOracleDriver.php */
class __TwigTemplate_137b072b9521d8522337538125b0bb0a69709e4c1d278716c96939be7c9e2970 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractOracleDriver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Driver;
use Doctrine\\DBAL\\Driver\\AbstractOracleDriver\\EasyConnectString;
use Doctrine\\DBAL\\Exception;
use Doctrine\\DBAL\\Platforms\\OraclePlatform;
use Doctrine\\DBAL\\Schema\\OracleSchemaManager;

/**
 * Abstract base implementation of the {@link Doctrine\\DBAL\\Driver} interface for Oracle based drivers.
 */
abstract class AbstractOracleDriver implements Driver, ExceptionConverterDriver
{
    /**
     * {@inheritdoc}
     */
    public function convertException(\$message, DriverException \$exception)
    {
        switch (\$exception->getErrorCode()) {
            case '1':
            case '2299':
            case '38911':
                return new Exception\\UniqueConstraintViolationException(\$message, \$exception);

            case '904':
                return new Exception\\InvalidFieldNameException(\$message, \$exception);

            case '918':
            case '960':
                return new Exception\\NonUniqueFieldNameException(\$message, \$exception);

            case '923':
                return new Exception\\SyntaxErrorException(\$message, \$exception);

            case '942':
                return new Exception\\TableNotFoundException(\$message, \$exception);

            case '955':
                return new Exception\\TableExistsException(\$message, \$exception);

            case '1017':
            case '12545':
                return new Exception\\ConnectionException(\$message, \$exception);

            case '1400':
                return new Exception\\NotNullConstraintViolationException(\$message, \$exception);

            case '2266':
            case '2291':
            case '2292':
                return new Exception\\ForeignKeyConstraintViolationException(\$message, \$exception);
        }

        return new Exception\\DriverException(\$message, \$exception);
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabase(Connection \$conn)
    {
        \$params = \$conn->getParams();

        return \$params['user'];
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabasePlatform()
    {
        return new OraclePlatform();
    }

    /**
     * {@inheritdoc}
     */
    public function getSchemaManager(Connection \$conn)
    {
        return new OracleSchemaManager(\$conn);
    }

    /**
     * Returns an appropriate Easy Connect String for the given parameters.
     *
     * @param mixed[] \$params The connection parameters to return the Easy Connect String for.
     *
     * @return string
     */
    protected function getEasyConnectString(array \$params)
    {
        return (string) EasyConnectString::fromConnectionParameters(\$params);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractOracleDriver.php";
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
use Doctrine\\DBAL\\Driver;
use Doctrine\\DBAL\\Driver\\AbstractOracleDriver\\EasyConnectString;
use Doctrine\\DBAL\\Exception;
use Doctrine\\DBAL\\Platforms\\OraclePlatform;
use Doctrine\\DBAL\\Schema\\OracleSchemaManager;

/**
 * Abstract base implementation of the {@link Doctrine\\DBAL\\Driver} interface for Oracle based drivers.
 */
abstract class AbstractOracleDriver implements Driver, ExceptionConverterDriver
{
    /**
     * {@inheritdoc}
     */
    public function convertException(\$message, DriverException \$exception)
    {
        switch (\$exception->getErrorCode()) {
            case '1':
            case '2299':
            case '38911':
                return new Exception\\UniqueConstraintViolationException(\$message, \$exception);

            case '904':
                return new Exception\\InvalidFieldNameException(\$message, \$exception);

            case '918':
            case '960':
                return new Exception\\NonUniqueFieldNameException(\$message, \$exception);

            case '923':
                return new Exception\\SyntaxErrorException(\$message, \$exception);

            case '942':
                return new Exception\\TableNotFoundException(\$message, \$exception);

            case '955':
                return new Exception\\TableExistsException(\$message, \$exception);

            case '1017':
            case '12545':
                return new Exception\\ConnectionException(\$message, \$exception);

            case '1400':
                return new Exception\\NotNullConstraintViolationException(\$message, \$exception);

            case '2266':
            case '2291':
            case '2292':
                return new Exception\\ForeignKeyConstraintViolationException(\$message, \$exception);
        }

        return new Exception\\DriverException(\$message, \$exception);
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabase(Connection \$conn)
    {
        \$params = \$conn->getParams();

        return \$params['user'];
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabasePlatform()
    {
        return new OraclePlatform();
    }

    /**
     * {@inheritdoc}
     */
    public function getSchemaManager(Connection \$conn)
    {
        return new OracleSchemaManager(\$conn);
    }

    /**
     * Returns an appropriate Easy Connect String for the given parameters.
     *
     * @param mixed[] \$params The connection parameters to return the Easy Connect String for.
     *
     * @return string
     */
    protected function getEasyConnectString(array \$params)
    {
        return (string) EasyConnectString::fromConnectionParameters(\$params);
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractOracleDriver.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\AbstractOracleDriver.php");
    }
}
