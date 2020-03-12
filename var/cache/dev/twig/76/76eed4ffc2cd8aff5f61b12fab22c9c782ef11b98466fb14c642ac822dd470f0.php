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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaIndexDefinitionEventArgs.php */
class __TwigTemplate_08ca15d0d61277c1b311e4759b976d406215daee9b7d572f89caf2620f03d9c3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaIndexDefinitionEventArgs.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Event;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\Index;

/**
 * Event Arguments used when the portable index definition is generated inside Doctrine\\DBAL\\Schema\\AbstractSchemaManager.
 */
class SchemaIndexDefinitionEventArgs extends SchemaEventArgs
{
    /** @var Index|null */
    private \$index = null;

    /**
     * Raw index data as fetched from the database.
     *
     * @var mixed[]
     */
    private \$tableIndex;

    /** @var string */
    private \$table;

    /** @var Connection */
    private \$connection;

    /**
     * @param mixed[] \$tableIndex
     * @param string  \$table
     */
    public function __construct(array \$tableIndex, \$table, Connection \$connection)
    {
        \$this->tableIndex = \$tableIndex;
        \$this->table      = \$table;
        \$this->connection = \$connection;
    }

    /**
     * Allows to clear the index which means the index will be excluded from tables index list.
     *
     * @return SchemaIndexDefinitionEventArgs
     */
    public function setIndex(?Index \$index = null)
    {
        \$this->index = \$index;

        return \$this;
    }

    /**
     * @return Index|null
     */
    public function getIndex()
    {
        return \$this->index;
    }

    /**
     * @return mixed[]
     */
    public function getTableIndex()
    {
        return \$this->tableIndex;
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return \$this->table;
    }

    /**
     * @return Connection
     */
    public function getConnection()
    {
        return \$this->connection;
    }

    /**
     * @return AbstractPlatform
     */
    public function getDatabasePlatform()
    {
        return \$this->connection->getDatabasePlatform();
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaIndexDefinitionEventArgs.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Event;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\Index;

/**
 * Event Arguments used when the portable index definition is generated inside Doctrine\\DBAL\\Schema\\AbstractSchemaManager.
 */
class SchemaIndexDefinitionEventArgs extends SchemaEventArgs
{
    /** @var Index|null */
    private \$index = null;

    /**
     * Raw index data as fetched from the database.
     *
     * @var mixed[]
     */
    private \$tableIndex;

    /** @var string */
    private \$table;

    /** @var Connection */
    private \$connection;

    /**
     * @param mixed[] \$tableIndex
     * @param string  \$table
     */
    public function __construct(array \$tableIndex, \$table, Connection \$connection)
    {
        \$this->tableIndex = \$tableIndex;
        \$this->table      = \$table;
        \$this->connection = \$connection;
    }

    /**
     * Allows to clear the index which means the index will be excluded from tables index list.
     *
     * @return SchemaIndexDefinitionEventArgs
     */
    public function setIndex(?Index \$index = null)
    {
        \$this->index = \$index;

        return \$this;
    }

    /**
     * @return Index|null
     */
    public function getIndex()
    {
        return \$this->index;
    }

    /**
     * @return mixed[]
     */
    public function getTableIndex()
    {
        return \$this->tableIndex;
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return \$this->table;
    }

    /**
     * @return Connection
     */
    public function getConnection()
    {
        return \$this->connection;
    }

    /**
     * @return AbstractPlatform
     */
    public function getDatabasePlatform()
    {
        return \$this->connection->getDatabasePlatform();
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaIndexDefinitionEventArgs.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Event\\SchemaIndexDefinitionEventArgs.php");
    }
}
