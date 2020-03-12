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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere16Platform.php */
class __TwigTemplate_ff8134361047b4c2481c94bde0d8d67e7f685a164e444fc80f01cac57bf75017 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere16Platform.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms;

use Doctrine\\DBAL\\Schema\\Index;
use UnexpectedValueException;

/**
 * The SQLAnywhere16Platform provides the behavior, features and SQL dialect of the
 * SAP Sybase SQL Anywhere 16 database platform.
 */
class SQLAnywhere16Platform extends SQLAnywhere12Platform
{
    /**
     * {@inheritdoc}
     */
    protected function getAdvancedIndexOptionsSQL(Index \$index)
    {
        if (\$index->hasFlag('with_nulls_distinct') && \$index->hasFlag('with_nulls_not_distinct')) {
            throw new UnexpectedValueException(
                'An Index can either have a \"with_nulls_distinct\" or \"with_nulls_not_distinct\" flag but not both.'
            );
        }

        if (! \$index->isPrimary() && \$index->isUnique() && \$index->hasFlag('with_nulls_distinct')) {
            return ' WITH NULLS DISTINCT' . parent::getAdvancedIndexOptionsSQL(\$index);
        }

        return parent::getAdvancedIndexOptionsSQL(\$index);
    }

    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\\SQLAnywhere16Keywords::class;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere16Platform.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Platforms;

use Doctrine\\DBAL\\Schema\\Index;
use UnexpectedValueException;

/**
 * The SQLAnywhere16Platform provides the behavior, features and SQL dialect of the
 * SAP Sybase SQL Anywhere 16 database platform.
 */
class SQLAnywhere16Platform extends SQLAnywhere12Platform
{
    /**
     * {@inheritdoc}
     */
    protected function getAdvancedIndexOptionsSQL(Index \$index)
    {
        if (\$index->hasFlag('with_nulls_distinct') && \$index->hasFlag('with_nulls_not_distinct')) {
            throw new UnexpectedValueException(
                'An Index can either have a \"with_nulls_distinct\" or \"with_nulls_not_distinct\" flag but not both.'
            );
        }

        if (! \$index->isPrimary() && \$index->isUnique() && \$index->hasFlag('with_nulls_distinct')) {
            return ' WITH NULLS DISTINCT' . parent::getAdvancedIndexOptionsSQL(\$index);
        }

        return parent::getAdvancedIndexOptionsSQL(\$index);
    }

    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass()
    {
        return Keywords\\SQLAnywhere16Keywords::class;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere16Platform.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Platforms\\SQLAnywhere16Platform.php");
    }
}
