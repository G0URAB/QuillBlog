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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOConnection.php */
class __TwigTemplate_9138f427bd2ba1659cec874c83c15f3b2e68f34745b1c53aab33f7a47312c7a4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOConnection.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver;

use Doctrine\\DBAL\\ParameterType;
use PDO;
use function assert;
use function func_get_args;

/**
 * PDO implementation of the Connection interface.
 * Used by all PDO-based drivers.
 */
class PDOConnection extends PDO implements Connection, ServerInfoAwareConnection
{
    /**
     * @param string       \$dsn
     * @param string|null  \$user
     * @param string|null  \$password
     * @param mixed[]|null \$options
     *
     * @throws PDOException In case of an error.
     */
    public function __construct(\$dsn, \$user = null, \$password = null, ?array \$options = null)
    {
        try {
            parent::__construct(\$dsn, (string) \$user, (string) \$password, (array) \$options);
            \$this->setAttribute(PDO::ATTR_STATEMENT_CLASS, [PDOStatement::class, []]);
            \$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function exec(\$statement)
    {
        try {
            return parent::exec(\$statement);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getServerVersion()
    {
        return PDO::getAttribute(PDO::ATTR_SERVER_VERSION);
    }

    /**
     * {@inheritdoc}
     */
    public function prepare(\$prepareString, \$driverOptions = [])
    {
        try {
            return parent::prepare(\$prepareString, \$driverOptions);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function query()
    {
        \$args = func_get_args();

        try {
            \$stmt = parent::query(...\$args);
            assert(\$stmt instanceof \\PDOStatement);

            return \$stmt;
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function quote(\$input, \$type = ParameterType::STRING)
    {
        return parent::quote(\$input, \$type);
    }

    /**
     * {@inheritdoc}
     */
    public function lastInsertId(\$name = null)
    {
        try {
            if (\$name === null) {
                return parent::lastInsertId();
            }

            return parent::lastInsertId(\$name);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function requiresQueryForServerVersion()
    {
        return false;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOConnection.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver;

use Doctrine\\DBAL\\ParameterType;
use PDO;
use function assert;
use function func_get_args;

/**
 * PDO implementation of the Connection interface.
 * Used by all PDO-based drivers.
 */
class PDOConnection extends PDO implements Connection, ServerInfoAwareConnection
{
    /**
     * @param string       \$dsn
     * @param string|null  \$user
     * @param string|null  \$password
     * @param mixed[]|null \$options
     *
     * @throws PDOException In case of an error.
     */
    public function __construct(\$dsn, \$user = null, \$password = null, ?array \$options = null)
    {
        try {
            parent::__construct(\$dsn, (string) \$user, (string) \$password, (array) \$options);
            \$this->setAttribute(PDO::ATTR_STATEMENT_CLASS, [PDOStatement::class, []]);
            \$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function exec(\$statement)
    {
        try {
            return parent::exec(\$statement);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getServerVersion()
    {
        return PDO::getAttribute(PDO::ATTR_SERVER_VERSION);
    }

    /**
     * {@inheritdoc}
     */
    public function prepare(\$prepareString, \$driverOptions = [])
    {
        try {
            return parent::prepare(\$prepareString, \$driverOptions);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function query()
    {
        \$args = func_get_args();

        try {
            \$stmt = parent::query(...\$args);
            assert(\$stmt instanceof \\PDOStatement);

            return \$stmt;
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function quote(\$input, \$type = ParameterType::STRING)
    {
        return parent::quote(\$input, \$type);
    }

    /**
     * {@inheritdoc}
     */
    public function lastInsertId(\$name = null)
    {
        try {
            if (\$name === null) {
                return parent::lastInsertId();
            }

            return parent::lastInsertId(\$name);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function requiresQueryForServerVersion()
    {
        return false;
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOConnection.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\PDOConnection.php");
    }
}
