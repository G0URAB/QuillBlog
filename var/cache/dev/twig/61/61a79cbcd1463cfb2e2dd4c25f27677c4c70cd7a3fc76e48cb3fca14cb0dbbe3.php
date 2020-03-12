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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaDropTableEventArgs.php */
class __TwigTemplate_e358dc08850dfdfa9e9a840d4257e5a08dba56f75b1246cfb6f3cf14cc73733a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaDropTableEventArgs.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Event;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\Table;
use InvalidArgumentException;

/**
 * Event Arguments used when the SQL query for dropping tables are generated inside Doctrine\\DBAL\\Platform\\AbstractPlatform.
 */
class SchemaDropTableEventArgs extends SchemaEventArgs
{
    /** @var string|Table */
    private \$table;

    /** @var AbstractPlatform */
    private \$platform;

    /** @var string|null */
    private \$sql = null;

    /**
     * @param string|Table \$table
     *
     * @throws InvalidArgumentException
     */
    public function __construct(\$table, AbstractPlatform \$platform)
    {
        \$this->table    = \$table;
        \$this->platform = \$platform;
    }

    /**
     * @return string|Table
     */
    public function getTable()
    {
        return \$this->table;
    }

    /**
     * @return AbstractPlatform
     */
    public function getPlatform()
    {
        return \$this->platform;
    }

    /**
     * @param string \$sql
     *
     * @return \\Doctrine\\DBAL\\Event\\SchemaDropTableEventArgs
     */
    public function setSql(\$sql)
    {
        \$this->sql = \$sql;

        return \$this;
    }

    /**
     * @return string|null
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
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaDropTableEventArgs.php";
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
use InvalidArgumentException;

/**
 * Event Arguments used when the SQL query for dropping tables are generated inside Doctrine\\DBAL\\Platform\\AbstractPlatform.
 */
class SchemaDropTableEventArgs extends SchemaEventArgs
{
    /** @var string|Table */
    private \$table;

    /** @var AbstractPlatform */
    private \$platform;

    /** @var string|null */
    private \$sql = null;

    /**
     * @param string|Table \$table
     *
     * @throws InvalidArgumentException
     */
    public function __construct(\$table, AbstractPlatform \$platform)
    {
        \$this->table    = \$table;
        \$this->platform = \$platform;
    }

    /**
     * @return string|Table
     */
    public function getTable()
    {
        return \$this->table;
    }

    /**
     * @return AbstractPlatform
     */
    public function getPlatform()
    {
        return \$this->platform;
    }

    /**
     * @param string \$sql
     *
     * @return \\Doctrine\\DBAL\\Event\\SchemaDropTableEventArgs
     */
    public function setSql(\$sql)
    {
        \$this->sql = \$sql;

        return \$this;
    }

    /**
     * @return string|null
     */
    public function getSql()
    {
        return \$this->sql;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaDropTableEventArgs.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Event\\SchemaDropTableEventArgs.php");
    }
}
