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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/RemoveNamespacedAssets.php */
class __TwigTemplate_9eb540d248037424a6d204f7078bfafc64103386afc147b77961bea862c23ee4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/RemoveNamespacedAssets.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema\\Visitor;

use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;

/**
 * Removes assets from a schema that are not in the default namespace.
 *
 * Some databases such as MySQL support cross databases joins, but don't
 * allow to call DDLs to a database from another connected database.
 * Before a schema is serialized into SQL this visitor can cleanup schemas with
 * non default namespaces.
 *
 * This visitor filters all these non-default namespaced tables and sequences
 * and removes them from the SChema instance.
 */
class RemoveNamespacedAssets extends AbstractVisitor
{
    /** @var Schema */
    private \$schema;

    /**
     * {@inheritdoc}
     */
    public function acceptSchema(Schema \$schema)
    {
        \$this->schema = \$schema;
    }

    /**
     * {@inheritdoc}
     */
    public function acceptTable(Table \$table)
    {
        if (\$table->isInDefaultNamespace(\$this->schema->getName())) {
            return;
        }

        \$this->schema->dropTable(\$table->getName());
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSequence(Sequence \$sequence)
    {
        if (\$sequence->isInDefaultNamespace(\$this->schema->getName())) {
            return;
        }

        \$this->schema->dropSequence(\$sequence->getName());
    }

    /**
     * {@inheritdoc}
     */
    public function acceptForeignKey(Table \$localTable, ForeignKeyConstraint \$fkConstraint)
    {
        // The table may already be deleted in a previous
        // RemoveNamespacedAssets#acceptTable call. Removing Foreign keys that
        // point to nowhere.
        if (! \$this->schema->hasTable(\$fkConstraint->getForeignTableName())) {
            \$localTable->removeForeignKey(\$fkConstraint->getName());

            return;
        }

        \$foreignTable = \$this->schema->getTable(\$fkConstraint->getForeignTableName());
        if (\$foreignTable->isInDefaultNamespace(\$this->schema->getName())) {
            return;
        }

        \$localTable->removeForeignKey(\$fkConstraint->getName());
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/RemoveNamespacedAssets.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Schema\\Visitor;

use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;

/**
 * Removes assets from a schema that are not in the default namespace.
 *
 * Some databases such as MySQL support cross databases joins, but don't
 * allow to call DDLs to a database from another connected database.
 * Before a schema is serialized into SQL this visitor can cleanup schemas with
 * non default namespaces.
 *
 * This visitor filters all these non-default namespaced tables and sequences
 * and removes them from the SChema instance.
 */
class RemoveNamespacedAssets extends AbstractVisitor
{
    /** @var Schema */
    private \$schema;

    /**
     * {@inheritdoc}
     */
    public function acceptSchema(Schema \$schema)
    {
        \$this->schema = \$schema;
    }

    /**
     * {@inheritdoc}
     */
    public function acceptTable(Table \$table)
    {
        if (\$table->isInDefaultNamespace(\$this->schema->getName())) {
            return;
        }

        \$this->schema->dropTable(\$table->getName());
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSequence(Sequence \$sequence)
    {
        if (\$sequence->isInDefaultNamespace(\$this->schema->getName())) {
            return;
        }

        \$this->schema->dropSequence(\$sequence->getName());
    }

    /**
     * {@inheritdoc}
     */
    public function acceptForeignKey(Table \$localTable, ForeignKeyConstraint \$fkConstraint)
    {
        // The table may already be deleted in a previous
        // RemoveNamespacedAssets#acceptTable call. Removing Foreign keys that
        // point to nowhere.
        if (! \$this->schema->hasTable(\$fkConstraint->getForeignTableName())) {
            \$localTable->removeForeignKey(\$fkConstraint->getName());

            return;
        }

        \$foreignTable = \$this->schema->getTable(\$fkConstraint->getForeignTableName());
        if (\$foreignTable->isInDefaultNamespace(\$this->schema->getName())) {
            return;
        }

        \$localTable->removeForeignKey(\$fkConstraint->getName());
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/RemoveNamespacedAssets.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Schema\\Visitor\\RemoveNamespacedAssets.php");
    }
}
