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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Statement.php */
class __TwigTemplate_c2f20158a6486e6743ce039b23eb653fd7aa0e494d3eeaa1a67ba6657b3bdce3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Statement.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver\\PDOSqlsrv;

use Doctrine\\DBAL\\Driver\\PDOStatement;
use Doctrine\\DBAL\\ParameterType;
use PDO;

/**
 * PDO SQL Server Statement
 */
class Statement extends PDOStatement
{
    /**
     * {@inheritdoc}
     */
    public function bindParam(\$column, &\$variable, \$type = ParameterType::STRING, \$length = null, \$driverOptions = null)
    {
        if ((\$type === ParameterType::LARGE_OBJECT || \$type === ParameterType::BINARY)
            && \$driverOptions === null
        ) {
            \$driverOptions = PDO::SQLSRV_ENCODING_BINARY;
        }

        return parent::bindParam(\$column, \$variable, \$type, \$length, \$driverOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function bindValue(\$param, \$value, \$type = ParameterType::STRING)
    {
        return \$this->bindParam(\$param, \$value, \$type);
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Statement.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver\\PDOSqlsrv;

use Doctrine\\DBAL\\Driver\\PDOStatement;
use Doctrine\\DBAL\\ParameterType;
use PDO;

/**
 * PDO SQL Server Statement
 */
class Statement extends PDOStatement
{
    /**
     * {@inheritdoc}
     */
    public function bindParam(\$column, &\$variable, \$type = ParameterType::STRING, \$length = null, \$driverOptions = null)
    {
        if ((\$type === ParameterType::LARGE_OBJECT || \$type === ParameterType::BINARY)
            && \$driverOptions === null
        ) {
            \$driverOptions = PDO::SQLSRV_ENCODING_BINARY;
        }

        return parent::bindParam(\$column, \$variable, \$type, \$length, \$driverOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function bindValue(\$param, \$value, \$type = ParameterType::STRING)
    {
        return \$this->bindParam(\$param, \$value, \$type);
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Statement.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\PDOSqlsrv\\Statement.php");
    }
}
