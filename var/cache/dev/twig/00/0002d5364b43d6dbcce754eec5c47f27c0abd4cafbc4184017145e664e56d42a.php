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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/Listeners/OracleSessionInit.php */
class __TwigTemplate_d6ceb34cfd31c44b0802cfc15bc4c516c9ecc2ca4d625b3e54f03498c73d8830 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/Listeners/OracleSessionInit.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Event\\Listeners;

use Doctrine\\Common\\EventSubscriber;
use Doctrine\\DBAL\\Event\\ConnectionEventArgs;
use Doctrine\\DBAL\\Events;
use const CASE_UPPER;
use function array_change_key_case;
use function array_merge;
use function count;
use function implode;

/**
 * Should be used when Oracle Server default environment does not match the Doctrine requirements.
 *
 * The following environment variables are required for the Doctrine default date format:
 *
 * NLS_TIME_FORMAT=\"HH24:MI:SS\"
 * NLS_DATE_FORMAT=\"YYYY-MM-DD HH24:MI:SS\"
 * NLS_TIMESTAMP_FORMAT=\"YYYY-MM-DD HH24:MI:SS\"
 * NLS_TIMESTAMP_TZ_FORMAT=\"YYYY-MM-DD HH24:MI:SS TZH:TZM\"
 */
class OracleSessionInit implements EventSubscriber
{
    /** @var string[] */
    protected \$_defaultSessionVars = [
        'NLS_TIME_FORMAT' => 'HH24:MI:SS',
        'NLS_DATE_FORMAT' => 'YYYY-MM-DD HH24:MI:SS',
        'NLS_TIMESTAMP_FORMAT' => 'YYYY-MM-DD HH24:MI:SS',
        'NLS_TIMESTAMP_TZ_FORMAT' => 'YYYY-MM-DD HH24:MI:SS TZH:TZM',
        'NLS_NUMERIC_CHARACTERS' => '.,',
    ];

    /**
     * @param string[] \$oracleSessionVars
     */
    public function __construct(array \$oracleSessionVars = [])
    {
        \$this->_defaultSessionVars = array_merge(\$this->_defaultSessionVars, \$oracleSessionVars);
    }

    /**
     * @return void
     */
    public function postConnect(ConnectionEventArgs \$args)
    {
        if (! count(\$this->_defaultSessionVars)) {
            return;
        }

        array_change_key_case(\$this->_defaultSessionVars, CASE_UPPER);
        \$vars = [];
        foreach (\$this->_defaultSessionVars as \$option => \$value) {
            if (\$option === 'CURRENT_SCHEMA') {
                \$vars[] = \$option . ' = ' . \$value;
            } else {
                \$vars[] = \$option . \" = '\" . \$value . \"'\";
            }
        }
        \$sql = 'ALTER SESSION SET ' . implode(' ', \$vars);
        \$args->getConnection()->executeUpdate(\$sql);
    }

    /**
     * {@inheritdoc}
     */
    public function getSubscribedEvents()
    {
        return [Events::postConnect];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/Listeners/OracleSessionInit.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Event\\Listeners;

use Doctrine\\Common\\EventSubscriber;
use Doctrine\\DBAL\\Event\\ConnectionEventArgs;
use Doctrine\\DBAL\\Events;
use const CASE_UPPER;
use function array_change_key_case;
use function array_merge;
use function count;
use function implode;

/**
 * Should be used when Oracle Server default environment does not match the Doctrine requirements.
 *
 * The following environment variables are required for the Doctrine default date format:
 *
 * NLS_TIME_FORMAT=\"HH24:MI:SS\"
 * NLS_DATE_FORMAT=\"YYYY-MM-DD HH24:MI:SS\"
 * NLS_TIMESTAMP_FORMAT=\"YYYY-MM-DD HH24:MI:SS\"
 * NLS_TIMESTAMP_TZ_FORMAT=\"YYYY-MM-DD HH24:MI:SS TZH:TZM\"
 */
class OracleSessionInit implements EventSubscriber
{
    /** @var string[] */
    protected \$_defaultSessionVars = [
        'NLS_TIME_FORMAT' => 'HH24:MI:SS',
        'NLS_DATE_FORMAT' => 'YYYY-MM-DD HH24:MI:SS',
        'NLS_TIMESTAMP_FORMAT' => 'YYYY-MM-DD HH24:MI:SS',
        'NLS_TIMESTAMP_TZ_FORMAT' => 'YYYY-MM-DD HH24:MI:SS TZH:TZM',
        'NLS_NUMERIC_CHARACTERS' => '.,',
    ];

    /**
     * @param string[] \$oracleSessionVars
     */
    public function __construct(array \$oracleSessionVars = [])
    {
        \$this->_defaultSessionVars = array_merge(\$this->_defaultSessionVars, \$oracleSessionVars);
    }

    /**
     * @return void
     */
    public function postConnect(ConnectionEventArgs \$args)
    {
        if (! count(\$this->_defaultSessionVars)) {
            return;
        }

        array_change_key_case(\$this->_defaultSessionVars, CASE_UPPER);
        \$vars = [];
        foreach (\$this->_defaultSessionVars as \$option => \$value) {
            if (\$option === 'CURRENT_SCHEMA') {
                \$vars[] = \$option . ' = ' . \$value;
            } else {
                \$vars[] = \$option . \" = '\" . \$value . \"'\";
            }
        }
        \$sql = 'ALTER SESSION SET ' . implode(' ', \$vars);
        \$args->getConnection()->executeUpdate(\$sql);
    }

    /**
     * {@inheritdoc}
     */
    public function getSubscribedEvents()
    {
        return [Events::postConnect];
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/Listeners/OracleSessionInit.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit.php");
    }
}
