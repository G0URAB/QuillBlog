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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/TableDiff.php */
class __TwigTemplate_d636e99607b20567f543d169efa38c104a0813df04dce16db68177b29c57bbad extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/TableDiff.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

/**
 * Table Diff.
 */
class TableDiff
{
    /** @var string */
    public \$name = null;

    /** @var string|false */
    public \$newName = false;

    /**
     * All added fields.
     *
     * @var Column[]
     */
    public \$addedColumns;

    /**
     * All changed fields.
     *
     * @var ColumnDiff[]
     */
    public \$changedColumns = [];

    /**
     * All removed fields.
     *
     * @var Column[]
     */
    public \$removedColumns = [];

    /**
     * Columns that are only renamed from key to column instance name.
     *
     * @var Column[]
     */
    public \$renamedColumns = [];

    /**
     * All added indexes.
     *
     * @var Index[]
     */
    public \$addedIndexes = [];

    /**
     * All changed indexes.
     *
     * @var Index[]
     */
    public \$changedIndexes = [];

    /**
     * All removed indexes
     *
     * @var Index[]
     */
    public \$removedIndexes = [];

    /**
     * Indexes that are only renamed but are identical otherwise.
     *
     * @var Index[]
     */
    public \$renamedIndexes = [];

    /**
     * All added foreign key definitions
     *
     * @var ForeignKeyConstraint[]
     */
    public \$addedForeignKeys = [];

    /**
     * All changed foreign keys
     *
     * @var ForeignKeyConstraint[]
     */
    public \$changedForeignKeys = [];

    /**
     * All removed foreign keys
     *
     * @var ForeignKeyConstraint[]|string[]
     */
    public \$removedForeignKeys = [];

    /** @var Table|null */
    public \$fromTable;

    /**
     * Constructs an TableDiff object.
     *
     * @param string       \$tableName
     * @param Column[]     \$addedColumns
     * @param ColumnDiff[] \$changedColumns
     * @param Column[]     \$removedColumns
     * @param Index[]      \$addedIndexes
     * @param Index[]      \$changedIndexes
     * @param Index[]      \$removedIndexes
     */
    public function __construct(
        \$tableName,
        \$addedColumns = [],
        \$changedColumns = [],
        \$removedColumns = [],
        \$addedIndexes = [],
        \$changedIndexes = [],
        \$removedIndexes = [],
        ?Table \$fromTable = null
    ) {
        \$this->name           = \$tableName;
        \$this->addedColumns   = \$addedColumns;
        \$this->changedColumns = \$changedColumns;
        \$this->removedColumns = \$removedColumns;
        \$this->addedIndexes   = \$addedIndexes;
        \$this->changedIndexes = \$changedIndexes;
        \$this->removedIndexes = \$removedIndexes;
        \$this->fromTable      = \$fromTable;
    }

    /**
     * @param AbstractPlatform \$platform The platform to use for retrieving this table diff's name.
     *
     * @return Identifier
     */
    public function getName(AbstractPlatform \$platform)
    {
        return new Identifier(
            \$this->fromTable instanceof Table ? \$this->fromTable->getQuotedName(\$platform) : \$this->name
        );
    }

    /**
     * @return Identifier|false
     */
    public function getNewName()
    {
        if (\$this->newName === false) {
            return false;
        }

        return new Identifier(\$this->newName);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/TableDiff.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Schema;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;

/**
 * Table Diff.
 */
class TableDiff
{
    /** @var string */
    public \$name = null;

    /** @var string|false */
    public \$newName = false;

    /**
     * All added fields.
     *
     * @var Column[]
     */
    public \$addedColumns;

    /**
     * All changed fields.
     *
     * @var ColumnDiff[]
     */
    public \$changedColumns = [];

    /**
     * All removed fields.
     *
     * @var Column[]
     */
    public \$removedColumns = [];

    /**
     * Columns that are only renamed from key to column instance name.
     *
     * @var Column[]
     */
    public \$renamedColumns = [];

    /**
     * All added indexes.
     *
     * @var Index[]
     */
    public \$addedIndexes = [];

    /**
     * All changed indexes.
     *
     * @var Index[]
     */
    public \$changedIndexes = [];

    /**
     * All removed indexes
     *
     * @var Index[]
     */
    public \$removedIndexes = [];

    /**
     * Indexes that are only renamed but are identical otherwise.
     *
     * @var Index[]
     */
    public \$renamedIndexes = [];

    /**
     * All added foreign key definitions
     *
     * @var ForeignKeyConstraint[]
     */
    public \$addedForeignKeys = [];

    /**
     * All changed foreign keys
     *
     * @var ForeignKeyConstraint[]
     */
    public \$changedForeignKeys = [];

    /**
     * All removed foreign keys
     *
     * @var ForeignKeyConstraint[]|string[]
     */
    public \$removedForeignKeys = [];

    /** @var Table|null */
    public \$fromTable;

    /**
     * Constructs an TableDiff object.
     *
     * @param string       \$tableName
     * @param Column[]     \$addedColumns
     * @param ColumnDiff[] \$changedColumns
     * @param Column[]     \$removedColumns
     * @param Index[]      \$addedIndexes
     * @param Index[]      \$changedIndexes
     * @param Index[]      \$removedIndexes
     */
    public function __construct(
        \$tableName,
        \$addedColumns = [],
        \$changedColumns = [],
        \$removedColumns = [],
        \$addedIndexes = [],
        \$changedIndexes = [],
        \$removedIndexes = [],
        ?Table \$fromTable = null
    ) {
        \$this->name           = \$tableName;
        \$this->addedColumns   = \$addedColumns;
        \$this->changedColumns = \$changedColumns;
        \$this->removedColumns = \$removedColumns;
        \$this->addedIndexes   = \$addedIndexes;
        \$this->changedIndexes = \$changedIndexes;
        \$this->removedIndexes = \$removedIndexes;
        \$this->fromTable      = \$fromTable;
    }

    /**
     * @param AbstractPlatform \$platform The platform to use for retrieving this table diff's name.
     *
     * @return Identifier
     */
    public function getName(AbstractPlatform \$platform)
    {
        return new Identifier(
            \$this->fromTable instanceof Table ? \$this->fromTable->getQuotedName(\$platform) : \$this->name
        );
    }

    /**
     * @return Identifier|false
     */
    public function getNewName()
    {
        if (\$this->newName === false) {
            return false;
        }

        return new Identifier(\$this->newName);
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/TableDiff.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Schema\\TableDiff.php");
    }
}
