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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/SchemaDiffVisitor.php */
class __TwigTemplate_6d1b6a9977a82c76462957fda6fa0c6dc63b9b4ddefbffb6da7b2fd4174704f3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/SchemaDiffVisitor.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema\\Visitor;

use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;
use Doctrine\\DBAL\\Schema\\TableDiff;

/**
 * Visit a SchemaDiff.
 */
interface SchemaDiffVisitor
{
    /**
     * Visit an orphaned foreign key whose table was deleted.
     */
    public function visitOrphanedForeignKey(ForeignKeyConstraint \$foreignKey);

    /**
     * Visit a sequence that has changed.
     */
    public function visitChangedSequence(Sequence \$sequence);

    /**
     * Visit a sequence that has been removed.
     */
    public function visitRemovedSequence(Sequence \$sequence);

    public function visitNewSequence(Sequence \$sequence);

    public function visitNewTable(Table \$table);

    public function visitNewTableForeignKey(Table \$table, ForeignKeyConstraint \$foreignKey);

    public function visitRemovedTable(Table \$table);

    public function visitChangedTable(TableDiff \$tableDiff);
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/SchemaDiffVisitor.php";
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
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;
use Doctrine\\DBAL\\Schema\\TableDiff;

/**
 * Visit a SchemaDiff.
 */
interface SchemaDiffVisitor
{
    /**
     * Visit an orphaned foreign key whose table was deleted.
     */
    public function visitOrphanedForeignKey(ForeignKeyConstraint \$foreignKey);

    /**
     * Visit a sequence that has changed.
     */
    public function visitChangedSequence(Sequence \$sequence);

    /**
     * Visit a sequence that has been removed.
     */
    public function visitRemovedSequence(Sequence \$sequence);

    public function visitNewSequence(Sequence \$sequence);

    public function visitNewTable(Table \$table);

    public function visitNewTableForeignKey(Table \$table, ForeignKeyConstraint \$foreignKey);

    public function visitRemovedTable(Table \$table);

    public function visitChangedTable(TableDiff \$tableDiff);
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/SchemaDiffVisitor.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Schema\\Visitor\\SchemaDiffVisitor.php");
    }
}
