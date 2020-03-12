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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableRenameColumnEventArgs.php */
class __TwigTemplate_b6cc92f6b526a880149c7e9fa72bfab25460ce124abb6cf70a54a44be1c4fcbc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableRenameColumnEventArgs.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Event;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\Column;
use Doctrine\\DBAL\\Schema\\TableDiff;
use function array_merge;
use function func_get_args;
use function is_array;

/**
 * Event Arguments used when SQL queries for renaming table columns are generated inside Doctrine\\DBAL\\Platform\\*Platform.
 */
class SchemaAlterTableRenameColumnEventArgs extends SchemaEventArgs
{
    /** @var string */
    private \$oldColumnName;

    /** @var Column */
    private \$column;

    /** @var TableDiff */
    private \$tableDiff;

    /** @var AbstractPlatform */
    private \$platform;

    /** @var string[] */
    private \$sql = [];

    /**
     * @param string \$oldColumnName
     */
    public function __construct(\$oldColumnName, Column \$column, TableDiff \$tableDiff, AbstractPlatform \$platform)
    {
        \$this->oldColumnName = \$oldColumnName;
        \$this->column        = \$column;
        \$this->tableDiff     = \$tableDiff;
        \$this->platform      = \$platform;
    }

    /**
     * @return string
     */
    public function getOldColumnName()
    {
        return \$this->oldColumnName;
    }

    /**
     * @return Column
     */
    public function getColumn()
    {
        return \$this->column;
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
     * @return \\Doctrine\\DBAL\\Event\\SchemaAlterTableRenameColumnEventArgs
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
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableRenameColumnEventArgs.php";
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
use Doctrine\\DBAL\\Schema\\Column;
use Doctrine\\DBAL\\Schema\\TableDiff;
use function array_merge;
use function func_get_args;
use function is_array;

/**
 * Event Arguments used when SQL queries for renaming table columns are generated inside Doctrine\\DBAL\\Platform\\*Platform.
 */
class SchemaAlterTableRenameColumnEventArgs extends SchemaEventArgs
{
    /** @var string */
    private \$oldColumnName;

    /** @var Column */
    private \$column;

    /** @var TableDiff */
    private \$tableDiff;

    /** @var AbstractPlatform */
    private \$platform;

    /** @var string[] */
    private \$sql = [];

    /**
     * @param string \$oldColumnName
     */
    public function __construct(\$oldColumnName, Column \$column, TableDiff \$tableDiff, AbstractPlatform \$platform)
    {
        \$this->oldColumnName = \$oldColumnName;
        \$this->column        = \$column;
        \$this->tableDiff     = \$tableDiff;
        \$this->platform      = \$platform;
    }

    /**
     * @return string
     */
    public function getOldColumnName()
    {
        return \$this->oldColumnName;
    }

    /**
     * @return Column
     */
    public function getColumn()
    {
        return \$this->column;
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
     * @return \\Doctrine\\DBAL\\Event\\SchemaAlterTableRenameColumnEventArgs
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
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableRenameColumnEventArgs.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Event\\SchemaAlterTableRenameColumnEventArgs.php");
    }
}
