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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL100Platform.php */
class __TwigTemplate_0e2aff5650e8ba135c448262bd05899a4edb8ea4415cb12e5ccff26ebfacfbcf extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL100Platform.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\DBAL\\Platforms;

use Doctrine\\DBAL\\Platforms\\Keywords\\PostgreSQL100Keywords;

/**
 * Provides the behavior, features and SQL dialect of the PostgreSQL 10.0 database platform.
 */
class PostgreSQL100Platform extends PostgreSQL94Platform
{
    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass() : string
    {
        return PostgreSQL100Keywords::class;
    }

    public function getListSequencesSQL(\$database) : string
    {
        return 'SELECT sequence_name AS relname,
                       sequence_schema AS schemaname,
                       minimum_value AS min_value, 
                       increment AS increment_by
                FROM   information_schema.sequences
                WHERE  sequence_catalog = ' . \$this->quoteStringLiteral(\$database) . \"
                AND    sequence_schema NOT LIKE 'pg\\_%'
                AND    sequence_schema != 'information_schema'\";
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL100Platform.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\DBAL\\Platforms;

use Doctrine\\DBAL\\Platforms\\Keywords\\PostgreSQL100Keywords;

/**
 * Provides the behavior, features and SQL dialect of the PostgreSQL 10.0 database platform.
 */
class PostgreSQL100Platform extends PostgreSQL94Platform
{
    /**
     * {@inheritdoc}
     */
    protected function getReservedKeywordsClass() : string
    {
        return PostgreSQL100Keywords::class;
    }

    public function getListSequencesSQL(\$database) : string
    {
        return 'SELECT sequence_name AS relname,
                       sequence_schema AS schemaname,
                       minimum_value AS min_value, 
                       increment AS increment_by
                FROM   information_schema.sequences
                WHERE  sequence_catalog = ' . \$this->quoteStringLiteral(\$database) . \"
                AND    sequence_schema NOT LIKE 'pg\\_%'
                AND    sequence_schema != 'information_schema'\";
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL100Platform.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Platforms\\PostgreSQL100Platform.php");
    }
}
