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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/CreateSchemaSqlCollector.php */
class __TwigTemplate_12af76f0eec271cc799a17018346452c4f8f14ee301086bdf5b7efbd5e26dae5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/CreateSchemaSqlCollector.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema\\Visitor;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;
use function array_merge;

class CreateSchemaSqlCollector extends AbstractVisitor
{
    /** @var string[] */
    private \$createNamespaceQueries = [];

    /** @var string[] */
    private \$createTableQueries = [];

    /** @var string[] */
    private \$createSequenceQueries = [];

    /** @var string[] */
    private \$createFkConstraintQueries = [];

    /** @var AbstractPlatform */
    private \$platform = null;

    public function __construct(AbstractPlatform \$platform)
    {
        \$this->platform = \$platform;
    }

    /**
     * {@inheritdoc}
     */
    public function acceptNamespace(\$namespaceName)
    {
        if (! \$this->platform->supportsSchemas()) {
            return;
        }

        \$this->createNamespaceQueries[] = \$this->platform->getCreateSchemaSQL(\$namespaceName);
    }

    /**
     * {@inheritdoc}
     */
    public function acceptTable(Table \$table)
    {
        \$this->createTableQueries = array_merge(\$this->createTableQueries, \$this->platform->getCreateTableSQL(\$table));
    }

    /**
     * {@inheritdoc}
     */
    public function acceptForeignKey(Table \$localTable, ForeignKeyConstraint \$fkConstraint)
    {
        if (! \$this->platform->supportsForeignKeyConstraints()) {
            return;
        }

        \$this->createFkConstraintQueries[] = \$this->platform->getCreateForeignKeySQL(\$fkConstraint, \$localTable);
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSequence(Sequence \$sequence)
    {
        \$this->createSequenceQueries[] = \$this->platform->getCreateSequenceSQL(\$sequence);
    }

    /**
     * @return void
     */
    public function resetQueries()
    {
        \$this->createNamespaceQueries    = [];
        \$this->createTableQueries        = [];
        \$this->createSequenceQueries     = [];
        \$this->createFkConstraintQueries = [];
    }

    /**
     * Gets all queries collected so far.
     *
     * @return string[]
     */
    public function getQueries()
    {
        return array_merge(
            \$this->createNamespaceQueries,
            \$this->createTableQueries,
            \$this->createSequenceQueries,
            \$this->createFkConstraintQueries
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/CreateSchemaSqlCollector.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Schema\\Visitor;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;
use function array_merge;

class CreateSchemaSqlCollector extends AbstractVisitor
{
    /** @var string[] */
    private \$createNamespaceQueries = [];

    /** @var string[] */
    private \$createTableQueries = [];

    /** @var string[] */
    private \$createSequenceQueries = [];

    /** @var string[] */
    private \$createFkConstraintQueries = [];

    /** @var AbstractPlatform */
    private \$platform = null;

    public function __construct(AbstractPlatform \$platform)
    {
        \$this->platform = \$platform;
    }

    /**
     * {@inheritdoc}
     */
    public function acceptNamespace(\$namespaceName)
    {
        if (! \$this->platform->supportsSchemas()) {
            return;
        }

        \$this->createNamespaceQueries[] = \$this->platform->getCreateSchemaSQL(\$namespaceName);
    }

    /**
     * {@inheritdoc}
     */
    public function acceptTable(Table \$table)
    {
        \$this->createTableQueries = array_merge(\$this->createTableQueries, \$this->platform->getCreateTableSQL(\$table));
    }

    /**
     * {@inheritdoc}
     */
    public function acceptForeignKey(Table \$localTable, ForeignKeyConstraint \$fkConstraint)
    {
        if (! \$this->platform->supportsForeignKeyConstraints()) {
            return;
        }

        \$this->createFkConstraintQueries[] = \$this->platform->getCreateForeignKeySQL(\$fkConstraint, \$localTable);
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSequence(Sequence \$sequence)
    {
        \$this->createSequenceQueries[] = \$this->platform->getCreateSequenceSQL(\$sequence);
    }

    /**
     * @return void
     */
    public function resetQueries()
    {
        \$this->createNamespaceQueries    = [];
        \$this->createTableQueries        = [];
        \$this->createSequenceQueries     = [];
        \$this->createFkConstraintQueries = [];
    }

    /**
     * Gets all queries collected so far.
     *
     * @return string[]
     */
    public function getQueries()
    {
        return array_merge(
            \$this->createNamespaceQueries,
            \$this->createTableQueries,
            \$this->createSequenceQueries,
            \$this->createFkConstraintQueries
        );
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/CreateSchemaSqlCollector.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Schema\\Visitor\\CreateSchemaSqlCollector.php");
    }
}
