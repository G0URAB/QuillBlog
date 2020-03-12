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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOIbm/Driver.php */
class __TwigTemplate_fdb9001dc6bc44c261912174a6bc67c35c17f5aa2f1139d67c6a42a86e8c8af0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOIbm/Driver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\PDOIbm;

use Doctrine\\DBAL\\Driver\\AbstractDB2Driver;
use Doctrine\\DBAL\\Driver\\PDOConnection;

/**
 * Driver for the PDO IBM extension.
 */
class Driver extends AbstractDB2Driver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        return new PDOConnection(
            \$this->_constructPdoDsn(\$params),
            \$username,
            \$password,
            \$driverOptions
        );
    }

    /**
     * Constructs the IBM PDO DSN.
     *
     * @param mixed[] \$params
     *
     * @return string The DSN.
     */
    private function _constructPdoDsn(array \$params)
    {
        \$dsn = 'ibm:';
        if (isset(\$params['host'])) {
            \$dsn .= 'HOSTNAME=' . \$params['host'] . ';';
        }
        if (isset(\$params['port'])) {
            \$dsn .= 'PORT=' . \$params['port'] . ';';
        }
        \$dsn .= 'PROTOCOL=TCPIP;';
        if (isset(\$params['dbname'])) {
            \$dsn .= 'DATABASE=' . \$params['dbname'] . ';';
        }

        return \$dsn;
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated
     */
    public function getName()
    {
        return 'pdo_ibm';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOIbm/Driver.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\PDOIbm;

use Doctrine\\DBAL\\Driver\\AbstractDB2Driver;
use Doctrine\\DBAL\\Driver\\PDOConnection;

/**
 * Driver for the PDO IBM extension.
 */
class Driver extends AbstractDB2Driver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        return new PDOConnection(
            \$this->_constructPdoDsn(\$params),
            \$username,
            \$password,
            \$driverOptions
        );
    }

    /**
     * Constructs the IBM PDO DSN.
     *
     * @param mixed[] \$params
     *
     * @return string The DSN.
     */
    private function _constructPdoDsn(array \$params)
    {
        \$dsn = 'ibm:';
        if (isset(\$params['host'])) {
            \$dsn .= 'HOSTNAME=' . \$params['host'] . ';';
        }
        if (isset(\$params['port'])) {
            \$dsn .= 'PORT=' . \$params['port'] . ';';
        }
        \$dsn .= 'PROTOCOL=TCPIP;';
        if (isset(\$params['dbname'])) {
            \$dsn .= 'DATABASE=' . \$params['dbname'] . ';';
        }

        return \$dsn;
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated
     */
    public function getName()
    {
        return 'pdo_ibm';
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOIbm/Driver.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\PDOIbm\\Driver.php");
    }
}
