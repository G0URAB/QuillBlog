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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaCreateTableEventArgs.php */
class __TwigTemplate_f897e13f06cd64a2722c89e4e6462410b21a7ad3b6dfcaff51ee3508085bae9f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaCreateTableEventArgs.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Event;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\Table;
use function array_merge;
use function func_get_args;
use function is_array;

/**
 * Event Arguments used when SQL queries for creating tables are generated inside Doctrine\\DBAL\\Platform\\AbstractPlatform.
 */
class SchemaCreateTableEventArgs extends SchemaEventArgs
{
    /** @var Table */
    private \$table;

    /** @var mixed[][] */
    private \$columns;

    /** @var mixed[] */
    private \$options;

    /** @var AbstractPlatform */
    private \$platform;

    /** @var string[] */
    private \$sql = [];

    /**
     * @param mixed[][] \$columns
     * @param mixed[]   \$options
     */
    public function __construct(Table \$table, array \$columns, array \$options, AbstractPlatform \$platform)
    {
        \$this->table    = \$table;
        \$this->columns  = \$columns;
        \$this->options  = \$options;
        \$this->platform = \$platform;
    }

    /**
     * @return Table
     */
    public function getTable()
    {
        return \$this->table;
    }

    /**
     * @return mixed[][]
     */
    public function getColumns()
    {
        return \$this->columns;
    }

    /**
     * @return mixed[]
     */
    public function getOptions()
    {
        return \$this->options;
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
     * @return \\Doctrine\\DBAL\\Event\\SchemaCreateTableEventArgs
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
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaCreateTableEventArgs.php";
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
use Doctrine\\DBAL\\Schema\\Table;
use function array_merge;
use function func_get_args;
use function is_array;

/**
 * Event Arguments used when SQL queries for creating tables are generated inside Doctrine\\DBAL\\Platform\\AbstractPlatform.
 */
class SchemaCreateTableEventArgs extends SchemaEventArgs
{
    /** @var Table */
    private \$table;

    /** @var mixed[][] */
    private \$columns;

    /** @var mixed[] */
    private \$options;

    /** @var AbstractPlatform */
    private \$platform;

    /** @var string[] */
    private \$sql = [];

    /**
     * @param mixed[][] \$columns
     * @param mixed[]   \$options
     */
    public function __construct(Table \$table, array \$columns, array \$options, AbstractPlatform \$platform)
    {
        \$this->table    = \$table;
        \$this->columns  = \$columns;
        \$this->options  = \$options;
        \$this->platform = \$platform;
    }

    /**
     * @return Table
     */
    public function getTable()
    {
        return \$this->table;
    }

    /**
     * @return mixed[][]
     */
    public function getColumns()
    {
        return \$this->columns;
    }

    /**
     * @return mixed[]
     */
    public function getOptions()
    {
        return \$this->options;
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
     * @return \\Doctrine\\DBAL\\Event\\SchemaCreateTableEventArgs
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
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaCreateTableEventArgs.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Event\\SchemaCreateTableEventArgs.php");
    }
}
