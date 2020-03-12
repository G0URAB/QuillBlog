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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/IBMDB2/DB2Driver.php */
class __TwigTemplate_7217a0aa95ff0ca183d451a5abf9bcfd6ede662e46b6e1b32e21657f193c2cbb extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/IBMDB2/DB2Driver.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\IBMDB2;

use Doctrine\\DBAL\\Driver\\AbstractDB2Driver;

/**
 * IBM DB2 Driver.
 */
class DB2Driver extends AbstractDB2Driver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        if (! isset(\$params['protocol'])) {
            \$params['protocol'] = 'TCPIP';
        }

        if (\$params['host'] !== 'localhost' && \$params['host'] !== '127.0.0.1') {
            // if the host isn't localhost, use extended connection params
            \$params['dbname'] = 'DRIVER={IBM DB2 ODBC DRIVER}' .
                     ';DATABASE=' . \$params['dbname'] .
                     ';HOSTNAME=' . \$params['host'] .
                     ';PROTOCOL=' . \$params['protocol'] .
                     ';UID=' . \$username .
                     ';PWD=' . \$password . ';';
            if (isset(\$params['port'])) {
                \$params['dbname'] .= 'PORT=' . \$params['port'];
            }

            \$username = null;
            \$password = null;
        }

        return new DB2Connection(\$params, (string) \$username, (string) \$password, \$driverOptions);
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated
     */
    public function getName()
    {
        return 'ibm_db2';
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/IBMDB2/DB2Driver.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\IBMDB2;

use Doctrine\\DBAL\\Driver\\AbstractDB2Driver;

/**
 * IBM DB2 Driver.
 */
class DB2Driver extends AbstractDB2Driver
{
    /**
     * {@inheritdoc}
     */
    public function connect(array \$params, \$username = null, \$password = null, array \$driverOptions = [])
    {
        if (! isset(\$params['protocol'])) {
            \$params['protocol'] = 'TCPIP';
        }

        if (\$params['host'] !== 'localhost' && \$params['host'] !== '127.0.0.1') {
            // if the host isn't localhost, use extended connection params
            \$params['dbname'] = 'DRIVER={IBM DB2 ODBC DRIVER}' .
                     ';DATABASE=' . \$params['dbname'] .
                     ';HOSTNAME=' . \$params['host'] .
                     ';PROTOCOL=' . \$params['protocol'] .
                     ';UID=' . \$username .
                     ';PWD=' . \$password . ';';
            if (isset(\$params['port'])) {
                \$params['dbname'] .= 'PORT=' . \$params['port'];
            }

            \$username = null;
            \$password = null;
        }

        return new DB2Connection(\$params, (string) \$username, (string) \$password, \$driverOptions);
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated
     */
    public function getName()
    {
        return 'ibm_db2';
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/IBMDB2/DB2Driver.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\IBMDB2\\DB2Driver.php");
    }
}
