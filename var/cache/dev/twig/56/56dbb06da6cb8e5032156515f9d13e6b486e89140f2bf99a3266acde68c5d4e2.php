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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOOracle/Driver.php */
class __TwigTemplate_b2e5969361d0afa8598c910994ad96300194fb099ee0cb87179fb6fe07d072d6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOOracle/Driver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\PDOOracle;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Driver\\AbstractOracleDriver;
use Doctrine\\DBAL\\Driver\\PDOConnection;
use PDOException;

/**
 * PDO Oracle driver.
 *
 * WARNING: This driver gives us segfaults in our testsuites on CLOB and other
 * stuff. PDO Oracle is not maintained by Oracle or anyone in the PHP community,
 * which leads us to the recommendation to use the \"oci8\" driver to connect
 * to Oracle instead.
 */
class Driver extends AbstractOracleDriver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        try {
            return new PDOConnection(
                \$this->constructPdoDsn(\$params),
                \$username,
                \$password,
                \$driverOptions
            );
        } catch (PDOException \$e) {
            throw DBALException::driverException(\$this, \$e);
        }
    }

    /**
     * Constructs the Oracle PDO DSN.
     *
     * @param mixed[] \$params
     *
     * @return string The DSN.
     */
    private function constructPdoDsn(array \$params)
    {
        \$dsn = 'oci:dbname=' . \$this->getEasyConnectString(\$params);

        if (isset(\$params['charset'])) {
            \$dsn .= ';charset=' . \$params['charset'];
        }

        return \$dsn;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pdo_oracle';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOOracle/Driver.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\PDOOracle;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Driver\\AbstractOracleDriver;
use Doctrine\\DBAL\\Driver\\PDOConnection;
use PDOException;

/**
 * PDO Oracle driver.
 *
 * WARNING: This driver gives us segfaults in our testsuites on CLOB and other
 * stuff. PDO Oracle is not maintained by Oracle or anyone in the PHP community,
 * which leads us to the recommendation to use the \"oci8\" driver to connect
 * to Oracle instead.
 */
class Driver extends AbstractOracleDriver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        try {
            return new PDOConnection(
                \$this->constructPdoDsn(\$params),
                \$username,
                \$password,
                \$driverOptions
            );
        } catch (PDOException \$e) {
            throw DBALException::driverException(\$this, \$e);
        }
    }

    /**
     * Constructs the Oracle PDO DSN.
     *
     * @param mixed[] \$params
     *
     * @return string The DSN.
     */
    private function constructPdoDsn(array \$params)
    {
        \$dsn = 'oci:dbname=' . \$this->getEasyConnectString(\$params);

        if (isset(\$params['charset'])) {
            \$dsn .= ';charset=' . \$params['charset'];
        }

        return \$dsn;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pdo_oracle';
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOOracle/Driver.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\PDOOracle\\Driver.php");
    }
}
