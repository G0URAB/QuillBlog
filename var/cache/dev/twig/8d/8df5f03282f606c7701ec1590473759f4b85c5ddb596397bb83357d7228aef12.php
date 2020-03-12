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

/* @app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php */
class __TwigTemplate_00b6c46dbff505d8534a78cc5562bf5395043588e1cb9d4f049bd63eb54caca2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver;

use Doctrine\\DBAL\\FetchMode;
use Doctrine\\DBAL\\ParameterType;
use PDO;
use const E_USER_DEPRECATED;
use function array_slice;
use function assert;
use function func_get_args;
use function is_array;
use function sprintf;
use function trigger_error;

/**
 * The PDO implementation of the Statement interface.
 * Used by all PDO-based drivers.
 */
class PDOStatement extends \\PDOStatement implements Statement
{
    private const PARAM_TYPE_MAP = [
        ParameterType::NULL         => PDO::PARAM_NULL,
        ParameterType::INTEGER      => PDO::PARAM_INT,
        ParameterType::STRING       => PDO::PARAM_STR,
        ParameterType::BINARY       => PDO::PARAM_LOB,
        ParameterType::LARGE_OBJECT => PDO::PARAM_LOB,
        ParameterType::BOOLEAN      => PDO::PARAM_BOOL,
    ];

    private const FETCH_MODE_MAP = [
        FetchMode::ASSOCIATIVE     => PDO::FETCH_ASSOC,
        FetchMode::NUMERIC         => PDO::FETCH_NUM,
        FetchMode::MIXED           => PDO::FETCH_BOTH,
        FetchMode::STANDARD_OBJECT => PDO::FETCH_OBJ,
        FetchMode::COLUMN          => PDO::FETCH_COLUMN,
        FetchMode::CUSTOM_OBJECT   => PDO::FETCH_CLASS,
    ];

    /**
     * Protected constructor.
     */
    protected function __construct()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function setFetchMode(\$fetchMode, \$arg2 = null, \$arg3 = null)
    {
        \$fetchMode = \$this->convertFetchMode(\$fetchMode);

        // This thin wrapper is necessary to shield against the weird signature
        // of PDOStatement::setFetchMode(): even if the second and third
        // parameters are optional, PHP will not let us remove it from this
        // declaration.
        try {
            if (\$arg2 === null && \$arg3 === null) {
                return parent::setFetchMode(\$fetchMode);
            }

            if (\$arg3 === null) {
                return parent::setFetchMode(\$fetchMode, \$arg2);
            }

            return parent::setFetchMode(\$fetchMode, \$arg2, \$arg3);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function bindValue(\$param, \$value, \$type = ParameterType::STRING)
    {
        \$type = \$this->convertParamType(\$type);

        try {
            return parent::bindValue(\$param, \$value, \$type);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function bindParam(\$column, &\$variable, \$type = ParameterType::STRING, \$length = null, \$driverOptions = null)
    {
        \$type = \$this->convertParamType(\$type);

        try {
            return parent::bindParam(\$column, \$variable, \$type, ...array_slice(func_get_args(), 3));
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function closeCursor()
    {
        try {
            return parent::closeCursor();
        } catch (\\PDOException \$exception) {
            // Exceptions not allowed by the interface.
            // In case driver implementations do not adhere to the interface, silence exceptions here.
            return true;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\$params = null)
    {
        try {
            return parent::execute(\$params);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetch(\$fetchMode = null, \$cursorOrientation = PDO::FETCH_ORI_NEXT, \$cursorOffset = 0)
    {
        \$args = func_get_args();

        if (isset(\$args[0])) {
            \$args[0] = \$this->convertFetchMode(\$args[0]);
        }

        try {
            return parent::fetch(...\$args);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetchAll(\$fetchMode = null, \$fetchArgument = null, \$ctorArgs = null)
    {
        \$args = func_get_args();

        if (isset(\$args[0])) {
            \$args[0] = \$this->convertFetchMode(\$args[0]);
        }

        if (\$fetchMode === null && \$fetchArgument === null && \$ctorArgs === null) {
            \$args = [];
        } elseif (\$fetchArgument === null && \$ctorArgs === null) {
            \$args = [\$fetchMode];
        } elseif (\$ctorArgs === null) {
            \$args = [\$fetchMode, \$fetchArgument];
        } else {
            \$args = [\$fetchMode, \$fetchArgument, \$ctorArgs];
        }

        try {
            \$data = parent::fetchAll(...\$args);
            assert(is_array(\$data));

            return \$data;
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetchColumn(\$columnIndex = 0)
    {
        try {
            return parent::fetchColumn(\$columnIndex);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * Converts DBAL parameter type to PDO parameter type
     *
     * @param int \$type Parameter type
     */
    private function convertParamType(int \$type) : int
    {
        if (! isset(self::PARAM_TYPE_MAP[\$type])) {
            // TODO: next major: throw an exception
            @trigger_error(sprintf(
                'Using a PDO parameter type (%d given) is deprecated and will cause an error in Doctrine DBAL 3.0',
                \$type
            ), E_USER_DEPRECATED);

            return \$type;
        }

        return self::PARAM_TYPE_MAP[\$type];
    }

    /**
     * Converts DBAL fetch mode to PDO fetch mode
     *
     * @param int \$fetchMode Fetch mode
     */
    private function convertFetchMode(int \$fetchMode) : int
    {
        if (! isset(self::FETCH_MODE_MAP[\$fetchMode])) {
            // TODO: next major: throw an exception
            @trigger_error(sprintf(
                'Using a PDO fetch mode or their combination (%d given)' .
                ' is deprecated and will cause an error in Doctrine DBAL 3.0',
                \$fetchMode
            ), E_USER_DEPRECATED);

            return \$fetchMode;
        }

        return self::FETCH_MODE_MAP[\$fetchMode];
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver;

use Doctrine\\DBAL\\FetchMode;
use Doctrine\\DBAL\\ParameterType;
use PDO;
use const E_USER_DEPRECATED;
use function array_slice;
use function assert;
use function func_get_args;
use function is_array;
use function sprintf;
use function trigger_error;

/**
 * The PDO implementation of the Statement interface.
 * Used by all PDO-based drivers.
 */
class PDOStatement extends \\PDOStatement implements Statement
{
    private const PARAM_TYPE_MAP = [
        ParameterType::NULL         => PDO::PARAM_NULL,
        ParameterType::INTEGER      => PDO::PARAM_INT,
        ParameterType::STRING       => PDO::PARAM_STR,
        ParameterType::BINARY       => PDO::PARAM_LOB,
        ParameterType::LARGE_OBJECT => PDO::PARAM_LOB,
        ParameterType::BOOLEAN      => PDO::PARAM_BOOL,
    ];

    private const FETCH_MODE_MAP = [
        FetchMode::ASSOCIATIVE     => PDO::FETCH_ASSOC,
        FetchMode::NUMERIC         => PDO::FETCH_NUM,
        FetchMode::MIXED           => PDO::FETCH_BOTH,
        FetchMode::STANDARD_OBJECT => PDO::FETCH_OBJ,
        FetchMode::COLUMN          => PDO::FETCH_COLUMN,
        FetchMode::CUSTOM_OBJECT   => PDO::FETCH_CLASS,
    ];

    /**
     * Protected constructor.
     */
    protected function __construct()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function setFetchMode(\$fetchMode, \$arg2 = null, \$arg3 = null)
    {
        \$fetchMode = \$this->convertFetchMode(\$fetchMode);

        // This thin wrapper is necessary to shield against the weird signature
        // of PDOStatement::setFetchMode(): even if the second and third
        // parameters are optional, PHP will not let us remove it from this
        // declaration.
        try {
            if (\$arg2 === null && \$arg3 === null) {
                return parent::setFetchMode(\$fetchMode);
            }

            if (\$arg3 === null) {
                return parent::setFetchMode(\$fetchMode, \$arg2);
            }

            return parent::setFetchMode(\$fetchMode, \$arg2, \$arg3);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function bindValue(\$param, \$value, \$type = ParameterType::STRING)
    {
        \$type = \$this->convertParamType(\$type);

        try {
            return parent::bindValue(\$param, \$value, \$type);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function bindParam(\$column, &\$variable, \$type = ParameterType::STRING, \$length = null, \$driverOptions = null)
    {
        \$type = \$this->convertParamType(\$type);

        try {
            return parent::bindParam(\$column, \$variable, \$type, ...array_slice(func_get_args(), 3));
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function closeCursor()
    {
        try {
            return parent::closeCursor();
        } catch (\\PDOException \$exception) {
            // Exceptions not allowed by the interface.
            // In case driver implementations do not adhere to the interface, silence exceptions here.
            return true;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\$params = null)
    {
        try {
            return parent::execute(\$params);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetch(\$fetchMode = null, \$cursorOrientation = PDO::FETCH_ORI_NEXT, \$cursorOffset = 0)
    {
        \$args = func_get_args();

        if (isset(\$args[0])) {
            \$args[0] = \$this->convertFetchMode(\$args[0]);
        }

        try {
            return parent::fetch(...\$args);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetchAll(\$fetchMode = null, \$fetchArgument = null, \$ctorArgs = null)
    {
        \$args = func_get_args();

        if (isset(\$args[0])) {
            \$args[0] = \$this->convertFetchMode(\$args[0]);
        }

        if (\$fetchMode === null && \$fetchArgument === null && \$ctorArgs === null) {
            \$args = [];
        } elseif (\$fetchArgument === null && \$ctorArgs === null) {
            \$args = [\$fetchMode];
        } elseif (\$ctorArgs === null) {
            \$args = [\$fetchMode, \$fetchArgument];
        } else {
            \$args = [\$fetchMode, \$fetchArgument, \$ctorArgs];
        }

        try {
            \$data = parent::fetchAll(...\$args);
            assert(is_array(\$data));

            return \$data;
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetchColumn(\$columnIndex = 0)
    {
        try {
            return parent::fetchColumn(\$columnIndex);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * Converts DBAL parameter type to PDO parameter type
     *
     * @param int \$type Parameter type
     */
    private function convertParamType(int \$type) : int
    {
        if (! isset(self::PARAM_TYPE_MAP[\$type])) {
            // TODO: next major: throw an exception
            @trigger_error(sprintf(
                'Using a PDO parameter type (%d given) is deprecated and will cause an error in Doctrine DBAL 3.0',
                \$type
            ), E_USER_DEPRECATED);

            return \$type;
        }

        return self::PARAM_TYPE_MAP[\$type];
    }

    /**
     * Converts DBAL fetch mode to PDO fetch mode
     *
     * @param int \$fetchMode Fetch mode
     */
    private function convertFetchMode(int \$fetchMode) : int
    {
        if (! isset(self::FETCH_MODE_MAP[\$fetchMode])) {
            // TODO: next major: throw an exception
            @trigger_error(sprintf(
                'Using a PDO fetch mode or their combination (%d given)' .
                ' is deprecated and will cause an error in Doctrine DBAL 3.0',
                \$fetchMode
            ), E_USER_DEPRECATED);

            return \$fetchMode;
        }

        return self::FETCH_MODE_MAP[\$fetchMode];
    }
}
", "@app/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\PDOStatement.php");
    }
}
