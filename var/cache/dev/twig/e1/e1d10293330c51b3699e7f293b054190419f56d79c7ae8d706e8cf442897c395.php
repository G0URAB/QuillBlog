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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/Graphviz.php */
class __TwigTemplate_a332c5e3f6ede10e29213c4b309845049f3f82dc2dca272f4bfd6780636d334a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/Graphviz.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema\\Visitor;

use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Table;
use function current;
use function file_put_contents;
use function in_array;
use function strtolower;

/**
 * Create a Graphviz output of a Schema.
 */
class Graphviz extends AbstractVisitor
{
    /** @var string */
    private \$output = '';

    /**
     * {@inheritdoc}
     */
    public function acceptForeignKey(Table \$localTable, ForeignKeyConstraint \$fkConstraint)
    {
        \$this->output .= \$this->createNodeRelation(
            \$fkConstraint->getLocalTableName() . ':col' . current(\$fkConstraint->getLocalColumns()) . ':se',
            \$fkConstraint->getForeignTableName() . ':col' . current(\$fkConstraint->getForeignColumns()) . ':se',
            [
                'dir'       => 'back',
                'arrowtail' => 'dot',
                'arrowhead' => 'normal',
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSchema(Schema \$schema)
    {
        \$this->output  = 'digraph \"' . \$schema->getName() . '\" {' . \"\\n\";
        \$this->output .= 'splines = true;' . \"\\n\";
        \$this->output .= 'overlap = false;' . \"\\n\";
        \$this->output .= 'outputorder=edgesfirst;' . \"\\n\";
        \$this->output .= 'mindist = 0.6;' . \"\\n\";
        \$this->output .= 'sep = .2;' . \"\\n\";
    }

    /**
     * {@inheritdoc}
     */
    public function acceptTable(Table \$table)
    {
        \$this->output .= \$this->createNode(
            \$table->getName(),
            [
                'label' => \$this->createTableLabel(\$table),
                'shape' => 'plaintext',
            ]
        );
    }

    /**
     * @return string
     */
    private function createTableLabel(Table \$table)
    {
        // Start the table
        \$label = '<<TABLE CELLSPACING=\"0\" BORDER=\"1\" ALIGN=\"LEFT\">';

        // The title
        \$label .= '<TR><TD BORDER=\"1\" COLSPAN=\"3\" ALIGN=\"CENTER\" BGCOLOR=\"#fcaf3e\"><FONT COLOR=\"#2e3436\" FACE=\"Helvetica\" POINT-SIZE=\"12\">' . \$table->getName() . '</FONT></TD></TR>';

        // The attributes block
        foreach (\$table->getColumns() as \$column) {
            \$columnLabel = \$column->getName();

            \$label .= '<TR>';
            \$label .= '<TD BORDER=\"0\" ALIGN=\"LEFT\" BGCOLOR=\"#eeeeec\">';
            \$label .= '<FONT COLOR=\"#2e3436\" FACE=\"Helvetica\" POINT-SIZE=\"12\">' . \$columnLabel . '</FONT>';
            \$label .= '</TD><TD BORDER=\"0\" ALIGN=\"LEFT\" BGCOLOR=\"#eeeeec\"><FONT COLOR=\"#2e3436\" FACE=\"Helvetica\" POINT-SIZE=\"10\">' . strtolower(\$column->getType()) . '</FONT></TD>';
            \$label .= '<TD BORDER=\"0\" ALIGN=\"RIGHT\" BGCOLOR=\"#eeeeec\" PORT=\"col' . \$column->getName() . '\">';

            \$primaryKey = \$table->getPrimaryKey();

            if (\$primaryKey !== null && in_array(\$column->getName(), \$primaryKey->getColumns())) {
                \$label .= \"\\xe2\\x9c\\xb7\";
            }
            \$label .= '</TD></TR>';
        }

        // End the table
        \$label .= '</TABLE>>';

        return \$label;
    }

    /**
     * @param string   \$name
     * @param string[] \$options
     *
     * @return string
     */
    private function createNode(\$name, \$options)
    {
        \$node = \$name . ' [';
        foreach (\$options as \$key => \$value) {
            \$node .= \$key . '=' . \$value . ' ';
        }
        \$node .= \"]\\n\";

        return \$node;
    }

    /**
     * @param string   \$node1
     * @param string   \$node2
     * @param string[] \$options
     *
     * @return string
     */
    private function createNodeRelation(\$node1, \$node2, \$options)
    {
        \$relation = \$node1 . ' -> ' . \$node2 . ' [';
        foreach (\$options as \$key => \$value) {
            \$relation .= \$key . '=' . \$value . ' ';
        }
        \$relation .= \"]\\n\";

        return \$relation;
    }

    /**
     * Get Graphviz Output
     *
     * @return string
     */
    public function getOutput()
    {
        return \$this->output . '}';
    }

    /**
     * Writes dot language output to a file. This should usually be a *.dot file.
     *
     * You have to convert the output into a viewable format. For example use \"neato\" on linux systems
     * and execute:
     *
     *  neato -Tpng -o er.png er.dot
     *
     * @param string \$filename
     *
     * @return void
     */
    public function write(\$filename)
    {
        file_put_contents(\$filename, \$this->getOutput());
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/Graphviz.php";
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
use Doctrine\\DBAL\\Schema\\Table;
use function current;
use function file_put_contents;
use function in_array;
use function strtolower;

/**
 * Create a Graphviz output of a Schema.
 */
class Graphviz extends AbstractVisitor
{
    /** @var string */
    private \$output = '';

    /**
     * {@inheritdoc}
     */
    public function acceptForeignKey(Table \$localTable, ForeignKeyConstraint \$fkConstraint)
    {
        \$this->output .= \$this->createNodeRelation(
            \$fkConstraint->getLocalTableName() . ':col' . current(\$fkConstraint->getLocalColumns()) . ':se',
            \$fkConstraint->getForeignTableName() . ':col' . current(\$fkConstraint->getForeignColumns()) . ':se',
            [
                'dir'       => 'back',
                'arrowtail' => 'dot',
                'arrowhead' => 'normal',
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSchema(Schema \$schema)
    {
        \$this->output  = 'digraph \"' . \$schema->getName() . '\" {' . \"\\n\";
        \$this->output .= 'splines = true;' . \"\\n\";
        \$this->output .= 'overlap = false;' . \"\\n\";
        \$this->output .= 'outputorder=edgesfirst;' . \"\\n\";
        \$this->output .= 'mindist = 0.6;' . \"\\n\";
        \$this->output .= 'sep = .2;' . \"\\n\";
    }

    /**
     * {@inheritdoc}
     */
    public function acceptTable(Table \$table)
    {
        \$this->output .= \$this->createNode(
            \$table->getName(),
            [
                'label' => \$this->createTableLabel(\$table),
                'shape' => 'plaintext',
            ]
        );
    }

    /**
     * @return string
     */
    private function createTableLabel(Table \$table)
    {
        // Start the table
        \$label = '<<TABLE CELLSPACING=\"0\" BORDER=\"1\" ALIGN=\"LEFT\">';

        // The title
        \$label .= '<TR><TD BORDER=\"1\" COLSPAN=\"3\" ALIGN=\"CENTER\" BGCOLOR=\"#fcaf3e\"><FONT COLOR=\"#2e3436\" FACE=\"Helvetica\" POINT-SIZE=\"12\">' . \$table->getName() . '</FONT></TD></TR>';

        // The attributes block
        foreach (\$table->getColumns() as \$column) {
            \$columnLabel = \$column->getName();

            \$label .= '<TR>';
            \$label .= '<TD BORDER=\"0\" ALIGN=\"LEFT\" BGCOLOR=\"#eeeeec\">';
            \$label .= '<FONT COLOR=\"#2e3436\" FACE=\"Helvetica\" POINT-SIZE=\"12\">' . \$columnLabel . '</FONT>';
            \$label .= '</TD><TD BORDER=\"0\" ALIGN=\"LEFT\" BGCOLOR=\"#eeeeec\"><FONT COLOR=\"#2e3436\" FACE=\"Helvetica\" POINT-SIZE=\"10\">' . strtolower(\$column->getType()) . '</FONT></TD>';
            \$label .= '<TD BORDER=\"0\" ALIGN=\"RIGHT\" BGCOLOR=\"#eeeeec\" PORT=\"col' . \$column->getName() . '\">';

            \$primaryKey = \$table->getPrimaryKey();

            if (\$primaryKey !== null && in_array(\$column->getName(), \$primaryKey->getColumns())) {
                \$label .= \"\\xe2\\x9c\\xb7\";
            }
            \$label .= '</TD></TR>';
        }

        // End the table
        \$label .= '</TABLE>>';

        return \$label;
    }

    /**
     * @param string   \$name
     * @param string[] \$options
     *
     * @return string
     */
    private function createNode(\$name, \$options)
    {
        \$node = \$name . ' [';
        foreach (\$options as \$key => \$value) {
            \$node .= \$key . '=' . \$value . ' ';
        }
        \$node .= \"]\\n\";

        return \$node;
    }

    /**
     * @param string   \$node1
     * @param string   \$node2
     * @param string[] \$options
     *
     * @return string
     */
    private function createNodeRelation(\$node1, \$node2, \$options)
    {
        \$relation = \$node1 . ' -> ' . \$node2 . ' [';
        foreach (\$options as \$key => \$value) {
            \$relation .= \$key . '=' . \$value . ' ';
        }
        \$relation .= \"]\\n\";

        return \$relation;
    }

    /**
     * Get Graphviz Output
     *
     * @return string
     */
    public function getOutput()
    {
        return \$this->output . '}';
    }

    /**
     * Writes dot language output to a file. This should usually be a *.dot file.
     *
     * You have to convert the output into a viewable format. For example use \"neato\" on linux systems
     * and execute:
     *
     *  neato -Tpng -o er.png er.dot
     *
     * @param string \$filename
     *
     * @return void
     */
    public function write(\$filename)
    {
        file_put_contents(\$filename, \$this->getOutput());
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/Graphviz.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Schema\\Visitor\\Graphviz.php");
    }
}
