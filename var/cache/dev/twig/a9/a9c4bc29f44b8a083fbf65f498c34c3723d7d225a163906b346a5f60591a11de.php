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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableChangeColumnEventArgs.php */
class __TwigTemplate_65dec028565d35a7f2e6ea42885a241b40e60c09d6b30ee2ddbcaf38155a9248 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableChangeColumnEventArgs.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Event;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\ColumnDiff;
use Doctrine\\DBAL\\Schema\\TableDiff;
use function array_merge;
use function func_get_args;
use function is_array;

/**
 * Event Arguments used when SQL queries for changing table columns are generated inside Doctrine\\DBAL\\Platform\\*Platform.
 */
class SchemaAlterTableChangeColumnEventArgs extends SchemaEventArgs
{
    /** @var ColumnDiff */
    private \$columnDiff;

    /** @var TableDiff */
    private \$tableDiff;

    /** @var AbstractPlatform */
    private \$platform;

    /** @var string[] */
    private \$sql = [];

    public function __construct(ColumnDiff \$columnDiff, TableDiff \$tableDiff, AbstractPlatform \$platform)
    {
        \$this->columnDiff = \$columnDiff;
        \$this->tableDiff  = \$tableDiff;
        \$this->platform   = \$platform;
    }

    /**
     * @return ColumnDiff
     */
    public function getColumnDiff()
    {
        return \$this->columnDiff;
    }

    /**
     * @return TableDiff
     */
    public function getTableDiff()
    {
        return \$this->tableDiff;
    }

    /**
     * @return AbstractPlatform
     */
    public function getPlatform()
    {
        return \$this->platform;
    }

    /**
     * Passing multiple SQL statements as an array is deprecated. Pass each statement as an individual argument instead.
     *
     * @param string|string[] \$sql
     *
     * @return \\Doctrine\\DBAL\\Event\\SchemaAlterTableChangeColumnEventArgs
     */
    public function addSql(\$sql)
    {
        \$this->sql = array_merge(\$this->sql, is_array(\$sql) ? \$sql : func_get_args());

        return \$this;
    }

    /**
     * @return string[]
     */
    public function getSql()
    {
        return \$this->sql;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableChangeColumnEventArgs.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Event;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\ColumnDiff;
use Doctrine\\DBAL\\Schema\\TableDiff;
use function array_merge;
use function func_get_args;
use function is_array;

/**
 * Event Arguments used when SQL queries for changing table columns are generated inside Doctrine\\DBAL\\Platform\\*Platform.
 */
class SchemaAlterTableChangeColumnEventArgs extends SchemaEventArgs
{
    /** @var ColumnDiff */
    private \$columnDiff;

    /** @var TableDiff */
    private \$tableDiff;

    /** @var AbstractPlatform */
    private \$platform;

    /** @var string[] */
    private \$sql = [];

    public function __construct(ColumnDiff \$columnDiff, TableDiff \$tableDiff, AbstractPlatform \$platform)
    {
        \$this->columnDiff = \$columnDiff;
        \$this->tableDiff  = \$tableDiff;
        \$this->platform   = \$platform;
    }

    /**
     * @return ColumnDiff
     */
    public function getColumnDiff()
    {
        return \$this->columnDiff;
    }

    /**
     * @return TableDiff
     */
    public function getTableDiff()
    {
        return \$this->tableDiff;
    }

    /**
     * @return AbstractPlatform
     */
    public function getPlatform()
    {
        return \$this->platform;
    }

    /**
     * Passing multiple SQL statements as an array is deprecated. Pass each statement as an individual argument instead.
     *
     * @param string|string[] \$sql
     *
     * @return \\Doctrine\\DBAL\\Event\\SchemaAlterTableChangeColumnEventArgs
     */
    public function addSql(\$sql)
    {
        \$this->sql = array_merge(\$this->sql, is_array(\$sql) ? \$sql : func_get_args());

        return \$this;
    }

    /**
     * @return string[]
     */
    public function getSql()
    {
        return \$this->sql;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableChangeColumnEventArgs.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Event\\SchemaAlterTableChangeColumnEventArgs.php");
    }
}
