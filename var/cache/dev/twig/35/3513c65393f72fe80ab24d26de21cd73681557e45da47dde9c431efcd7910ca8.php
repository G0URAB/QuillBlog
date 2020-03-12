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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAzurePlatform.php */
class __TwigTemplate_727a0889ca289c64d3e8f72a22e17f39fda8cf0fd38b2c02860265bb7b7968f3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAzurePlatform.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms;

use Doctrine\\DBAL\\Schema\\Table;

/**
 * Platform to ensure compatibility of Doctrine with SQL Azure
 *
 * On top of SQL Server 2008 the following functionality is added:
 *
 * - Create tables with the FEDERATED ON syntax.
 */
class SQLAzurePlatform extends SQLServer2008Platform
{
    /**
     * {@inheritDoc}
     */
    public function getCreateTableSQL(Table \$table, \$createFlags = self::CREATE_INDEXES)
    {
        \$sql = parent::getCreateTableSQL(\$table, \$createFlags);

        if (\$table->hasOption('azure.federatedOnColumnName')) {
            \$distributionName = \$table->getOption('azure.federatedOnDistributionName');
            \$columnName       = \$table->getOption('azure.federatedOnColumnName');
            \$stmt             = ' FEDERATED ON (' . \$distributionName . ' = ' . \$columnName . ')';

            \$sql[0] .= \$stmt;
        }

        return \$sql;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAzurePlatform.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Platforms;

use Doctrine\\DBAL\\Schema\\Table;

/**
 * Platform to ensure compatibility of Doctrine with SQL Azure
 *
 * On top of SQL Server 2008 the following functionality is added:
 *
 * - Create tables with the FEDERATED ON syntax.
 */
class SQLAzurePlatform extends SQLServer2008Platform
{
    /**
     * {@inheritDoc}
     */
    public function getCreateTableSQL(Table \$table, \$createFlags = self::CREATE_INDEXES)
    {
        \$sql = parent::getCreateTableSQL(\$table, \$createFlags);

        if (\$table->hasOption('azure.federatedOnColumnName')) {
            \$distributionName = \$table->getOption('azure.federatedOnDistributionName');
            \$columnName       = \$table->getOption('azure.federatedOnColumnName');
            \$stmt             = ' FEDERATED ON (' . \$distributionName . ' = ' . \$columnName . ')';

            \$sql[0] .= \$stmt;
        }

        return \$sql;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAzurePlatform.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Platforms\\SQLAzurePlatform.php");
    }
}
