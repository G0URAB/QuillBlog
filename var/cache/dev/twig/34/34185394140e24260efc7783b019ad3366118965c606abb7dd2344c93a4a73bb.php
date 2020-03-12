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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/AbstractSchemaSynchronizer.php */
class __TwigTemplate_ad9f2790ba27ab71c9330df751b4217a92c157a7a5903bc47d3e86cc9e767957 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/AbstractSchemaSynchronizer.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema\\Synchronizer;

use Doctrine\\DBAL\\Connection;
use Throwable;

/**
 * Abstract schema synchronizer with methods for executing batches of SQL.
 */
abstract class AbstractSchemaSynchronizer implements SchemaSynchronizer
{
    /** @var Connection */
    protected \$conn;

    public function __construct(Connection \$conn)
    {
        \$this->conn = \$conn;
    }

    /**
     * @param string[] \$sql
     */
    protected function processSqlSafely(array \$sql)
    {
        foreach (\$sql as \$s) {
            try {
                \$this->conn->exec(\$s);
            } catch (Throwable \$e) {
            }
        }
    }

    /**
     * @param string[] \$sql
     */
    protected function processSql(array \$sql)
    {
        foreach (\$sql as \$s) {
            \$this->conn->exec(\$s);
        }
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/AbstractSchemaSynchronizer.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Schema\\Synchronizer;

use Doctrine\\DBAL\\Connection;
use Throwable;

/**
 * Abstract schema synchronizer with methods for executing batches of SQL.
 */
abstract class AbstractSchemaSynchronizer implements SchemaSynchronizer
{
    /** @var Connection */
    protected \$conn;

    public function __construct(Connection \$conn)
    {
        \$this->conn = \$conn;
    }

    /**
     * @param string[] \$sql
     */
    protected function processSqlSafely(array \$sql)
    {
        foreach (\$sql as \$s) {
            try {
                \$this->conn->exec(\$s);
            } catch (Throwable \$e) {
            }
        }
    }

    /**
     * @param string[] \$sql
     */
    protected function processSql(array \$sql)
    {
        foreach (\$sql as \$s) {
            \$this->conn->exec(\$s);
        }
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/AbstractSchemaSynchronizer.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Schema\\Synchronizer\\AbstractSchemaSynchronizer.php");
    }
}
