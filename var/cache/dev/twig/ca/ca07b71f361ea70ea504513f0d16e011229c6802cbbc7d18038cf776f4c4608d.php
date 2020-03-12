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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Id/TableGeneratorSchemaVisitor.php */
class __TwigTemplate_5244493e354eddac05bbe68d3499cbe1c3afda9986ad3da8e0aca49c52cc8136 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Id/TableGeneratorSchemaVisitor.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Id;

use Doctrine\\DBAL\\Schema\\Column;
use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\Index;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;
use Doctrine\\DBAL\\Schema\\Visitor\\Visitor;

class TableGeneratorSchemaVisitor implements Visitor
{
    /** @var string */
    private \$generatorTableName;

    /**
     * @param string \$generatorTableName
     */
    public function __construct(\$generatorTableName = 'sequences')
    {
        \$this->generatorTableName = \$generatorTableName;
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSchema(Schema \$schema)
    {
        \$table = \$schema->createTable(\$this->generatorTableName);
        \$table->addColumn('sequence_name', 'string');
        \$table->addColumn('sequence_value', 'integer', ['default' => 1]);
        \$table->addColumn('sequence_increment_by', 'integer', ['default' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function acceptTable(Table \$table)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptColumn(Table \$table, Column \$column)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptForeignKey(Table \$localTable, ForeignKeyConstraint \$fkConstraint)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptIndex(Table \$table, Index \$index)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSequence(Sequence \$sequence)
    {
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Id/TableGeneratorSchemaVisitor.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Id;

use Doctrine\\DBAL\\Schema\\Column;
use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\Index;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;
use Doctrine\\DBAL\\Schema\\Visitor\\Visitor;

class TableGeneratorSchemaVisitor implements Visitor
{
    /** @var string */
    private \$generatorTableName;

    /**
     * @param string \$generatorTableName
     */
    public function __construct(\$generatorTableName = 'sequences')
    {
        \$this->generatorTableName = \$generatorTableName;
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSchema(Schema \$schema)
    {
        \$table = \$schema->createTable(\$this->generatorTableName);
        \$table->addColumn('sequence_name', 'string');
        \$table->addColumn('sequence_value', 'integer', ['default' => 1]);
        \$table->addColumn('sequence_increment_by', 'integer', ['default' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function acceptTable(Table \$table)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptColumn(Table \$table, Column \$column)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptForeignKey(Table \$localTable, ForeignKeyConstraint \$fkConstraint)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptIndex(Table \$table, Index \$index)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSequence(Sequence \$sequence)
    {
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Id/TableGeneratorSchemaVisitor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Id\\TableGeneratorSchemaVisitor.php");
    }
}
