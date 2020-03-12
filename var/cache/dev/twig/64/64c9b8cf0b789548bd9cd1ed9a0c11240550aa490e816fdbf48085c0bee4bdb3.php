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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Sequence.php */
class __TwigTemplate_0246589852a9cd652a836e6c5abc6816f10a3a8df0181c16091f53a71784c259 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Sequence.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema;

use Doctrine\\DBAL\\Schema\\Visitor\\Visitor;
use function count;
use function sprintf;

/**
 * Sequence structure.
 */
class Sequence extends AbstractAsset
{
    /** @var int */
    protected \$allocationSize = 1;

    /** @var int */
    protected \$initialValue = 1;

    /** @var int|null */
    protected \$cache = null;

    /**
     * @param string   \$name
     * @param int      \$allocationSize
     * @param int      \$initialValue
     * @param int|null \$cache
     */
    public function __construct(\$name, \$allocationSize = 1, \$initialValue = 1, \$cache = null)
    {
        \$this->_setName(\$name);
        \$this->setAllocationSize(\$allocationSize);
        \$this->setInitialValue(\$initialValue);
        \$this->cache = \$cache;
    }

    /**
     * @return int
     */
    public function getAllocationSize()
    {
        return \$this->allocationSize;
    }

    /**
     * @return int
     */
    public function getInitialValue()
    {
        return \$this->initialValue;
    }

    /**
     * @return int|null
     */
    public function getCache()
    {
        return \$this->cache;
    }

    /**
     * @param int \$allocationSize
     *
     * @return \\Doctrine\\DBAL\\Schema\\Sequence
     */
    public function setAllocationSize(\$allocationSize)
    {
        \$this->allocationSize = (int) \$allocationSize ?: 1;

        return \$this;
    }

    /**
     * @param int \$initialValue
     *
     * @return \\Doctrine\\DBAL\\Schema\\Sequence
     */
    public function setInitialValue(\$initialValue)
    {
        \$this->initialValue = (int) \$initialValue ?: 1;

        return \$this;
    }

    /**
     * @param int \$cache
     *
     * @return \\Doctrine\\DBAL\\Schema\\Sequence
     */
    public function setCache(\$cache)
    {
        \$this->cache = \$cache;

        return \$this;
    }

    /**
     * Checks if this sequence is an autoincrement sequence for a given table.
     *
     * This is used inside the comparator to not report sequences as missing,
     * when the \"from\" schema implicitly creates the sequences.
     *
     * @return bool
     */
    public function isAutoIncrementsFor(Table \$table)
    {
        \$primaryKey = \$table->getPrimaryKey();

        if (\$primaryKey === null) {
            return false;
        }

        \$pkColumns = \$primaryKey->getColumns();

        if (count(\$pkColumns) !== 1) {
            return false;
        }

        \$column = \$table->getColumn(\$pkColumns[0]);

        if (! \$column->getAutoincrement()) {
            return false;
        }

        \$sequenceName      = \$this->getShortestName(\$table->getNamespaceName());
        \$tableName         = \$table->getShortestName(\$table->getNamespaceName());
        \$tableSequenceName = sprintf('%s_%s_seq', \$tableName, \$column->getShortestName(\$table->getNamespaceName()));

        return \$tableSequenceName === \$sequenceName;
    }

    /**
     * @return void
     */
    public function visit(Visitor \$visitor)
    {
        \$visitor->acceptSequence(\$this);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Sequence.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Schema;

use Doctrine\\DBAL\\Schema\\Visitor\\Visitor;
use function count;
use function sprintf;

/**
 * Sequence structure.
 */
class Sequence extends AbstractAsset
{
    /** @var int */
    protected \$allocationSize = 1;

    /** @var int */
    protected \$initialValue = 1;

    /** @var int|null */
    protected \$cache = null;

    /**
     * @param string   \$name
     * @param int      \$allocationSize
     * @param int      \$initialValue
     * @param int|null \$cache
     */
    public function __construct(\$name, \$allocationSize = 1, \$initialValue = 1, \$cache = null)
    {
        \$this->_setName(\$name);
        \$this->setAllocationSize(\$allocationSize);
        \$this->setInitialValue(\$initialValue);
        \$this->cache = \$cache;
    }

    /**
     * @return int
     */
    public function getAllocationSize()
    {
        return \$this->allocationSize;
    }

    /**
     * @return int
     */
    public function getInitialValue()
    {
        return \$this->initialValue;
    }

    /**
     * @return int|null
     */
    public function getCache()
    {
        return \$this->cache;
    }

    /**
     * @param int \$allocationSize
     *
     * @return \\Doctrine\\DBAL\\Schema\\Sequence
     */
    public function setAllocationSize(\$allocationSize)
    {
        \$this->allocationSize = (int) \$allocationSize ?: 1;

        return \$this;
    }

    /**
     * @param int \$initialValue
     *
     * @return \\Doctrine\\DBAL\\Schema\\Sequence
     */
    public function setInitialValue(\$initialValue)
    {
        \$this->initialValue = (int) \$initialValue ?: 1;

        return \$this;
    }

    /**
     * @param int \$cache
     *
     * @return \\Doctrine\\DBAL\\Schema\\Sequence
     */
    public function setCache(\$cache)
    {
        \$this->cache = \$cache;

        return \$this;
    }

    /**
     * Checks if this sequence is an autoincrement sequence for a given table.
     *
     * This is used inside the comparator to not report sequences as missing,
     * when the \"from\" schema implicitly creates the sequences.
     *
     * @return bool
     */
    public function isAutoIncrementsFor(Table \$table)
    {
        \$primaryKey = \$table->getPrimaryKey();

        if (\$primaryKey === null) {
            return false;
        }

        \$pkColumns = \$primaryKey->getColumns();

        if (count(\$pkColumns) !== 1) {
            return false;
        }

        \$column = \$table->getColumn(\$pkColumns[0]);

        if (! \$column->getAutoincrement()) {
            return false;
        }

        \$sequenceName      = \$this->getShortestName(\$table->getNamespaceName());
        \$tableName         = \$table->getShortestName(\$table->getNamespaceName());
        \$tableSequenceName = sprintf('%s_%s_seq', \$tableName, \$column->getShortestName(\$table->getNamespaceName()));

        return \$tableSequenceName === \$sequenceName;
    }

    /**
     * @return void
     */
    public function visit(Visitor \$visitor)
    {
        \$visitor->acceptSequence(\$this);
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Sequence.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Schema\\Sequence.php");
    }
}
