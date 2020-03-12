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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/ReservedKeywordsValidator.php */
class __TwigTemplate_f83f94a2b95ba6d8136bb51952f4bcc788527bebc0722948eafa1cf7c395968f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/ReservedKeywordsValidator.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

use Doctrine\\DBAL\\Schema\\Column;
use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\Index;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;
use Doctrine\\DBAL\\Schema\\Visitor\\Visitor;
use function implode;
use function str_replace;

class ReservedKeywordsValidator implements Visitor
{
    /** @var KeywordList[] */
    private \$keywordLists = [];

    /** @var string[] */
    private \$violations = [];

    /**
     * @param KeywordList[] \$keywordLists
     */
    public function __construct(array \$keywordLists)
    {
        \$this->keywordLists = \$keywordLists;
    }

    /**
     * @return string[]
     */
    public function getViolations()
    {
        return \$this->violations;
    }

    /**
     * @param string \$word
     *
     * @return string[]
     */
    private function isReservedWord(\$word)
    {
        if (\$word[0] === '`') {
            \$word = str_replace('`', '', \$word);
        }

        \$keywordLists = [];
        foreach (\$this->keywordLists as \$keywordList) {
            if (! \$keywordList->isKeyword(\$word)) {
                continue;
            }

            \$keywordLists[] = \$keywordList->getName();
        }

        return \$keywordLists;
    }

    /**
     * @param string   \$asset
     * @param string[] \$violatedPlatforms
     *
     * @return void
     */
    private function addViolation(\$asset, \$violatedPlatforms)
    {
        if (! \$violatedPlatforms) {
            return;
        }

        \$this->violations[] = \$asset . ' keyword violations: ' . implode(', ', \$violatedPlatforms);
    }

    /**
     * {@inheritdoc}
     */
    public function acceptColumn(Table \$table, Column \$column)
    {
        \$this->addViolation(
            'Table ' . \$table->getName() . ' column ' . \$column->getName(),
            \$this->isReservedWord(\$column->getName())
        );
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
    public function acceptSchema(Schema \$schema)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSequence(Sequence \$sequence)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptTable(Table \$table)
    {
        \$this->addViolation(
            'Table ' . \$table->getName(),
            \$this->isReservedWord(\$table->getName())
        );
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/ReservedKeywordsValidator.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

use Doctrine\\DBAL\\Schema\\Column;
use Doctrine\\DBAL\\Schema\\ForeignKeyConstraint;
use Doctrine\\DBAL\\Schema\\Index;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\Sequence;
use Doctrine\\DBAL\\Schema\\Table;
use Doctrine\\DBAL\\Schema\\Visitor\\Visitor;
use function implode;
use function str_replace;

class ReservedKeywordsValidator implements Visitor
{
    /** @var KeywordList[] */
    private \$keywordLists = [];

    /** @var string[] */
    private \$violations = [];

    /**
     * @param KeywordList[] \$keywordLists
     */
    public function __construct(array \$keywordLists)
    {
        \$this->keywordLists = \$keywordLists;
    }

    /**
     * @return string[]
     */
    public function getViolations()
    {
        return \$this->violations;
    }

    /**
     * @param string \$word
     *
     * @return string[]
     */
    private function isReservedWord(\$word)
    {
        if (\$word[0] === '`') {
            \$word = str_replace('`', '', \$word);
        }

        \$keywordLists = [];
        foreach (\$this->keywordLists as \$keywordList) {
            if (! \$keywordList->isKeyword(\$word)) {
                continue;
            }

            \$keywordLists[] = \$keywordList->getName();
        }

        return \$keywordLists;
    }

    /**
     * @param string   \$asset
     * @param string[] \$violatedPlatforms
     *
     * @return void
     */
    private function addViolation(\$asset, \$violatedPlatforms)
    {
        if (! \$violatedPlatforms) {
            return;
        }

        \$this->violations[] = \$asset . ' keyword violations: ' . implode(', ', \$violatedPlatforms);
    }

    /**
     * {@inheritdoc}
     */
    public function acceptColumn(Table \$table, Column \$column)
    {
        \$this->addViolation(
            'Table ' . \$table->getName() . ' column ' . \$column->getName(),
            \$this->isReservedWord(\$column->getName())
        );
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
    public function acceptSchema(Schema \$schema)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptSequence(Sequence \$sequence)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function acceptTable(Table \$table)
    {
        \$this->addViolation(
            'Table ' . \$table->getName(),
            \$this->isReservedWord(\$table->getName())
        );
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/ReservedKeywordsValidator.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Platforms\\Keywords\\ReservedKeywordsValidator.php");
    }
}
